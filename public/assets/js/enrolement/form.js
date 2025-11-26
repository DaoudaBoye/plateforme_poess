

(function() {
    'use strict';

    // ==========================================
    // CONFIGURATION
    // ==========================================
    const CONFIG = {
        autoSaveDelay: 3000,
        maxFileSize: 5 * 1024 * 1024,
        allowedFileTypes: ['application/pdf', 'image/jpeg', 'image/jpg', 'image/png'],
        validationRules: {
            email: /^[^\s@]+@[^\s@]+\.[^\s@]+$/,
            telephone: /^(77|78|76|75|70|71|33|30)\d{7}$/
        }
    };

    // État global
    const state = {
        currentSection: 1,
        hasUnsavedChanges: false,
        autoSaveTimeout: null,
        draftId: null,
        validationCache: new Map()
    };

    // Configuration des règles d'affichage par type de structure
   // Configuration des règles d'affichage par type de structure
    const STRUCTURE_RULES = {
        aer: {
            hiddenFields: ['ninea', 'num_rc', 'num_agrement_scoop'],
            leadership: ['president', 'secretaire', 'tresorier'],
            requiredFields: ['nom_structure', 'type_structure', 'date_creation', 
                            'num_recepisse_association']
        },
        scoop: {
            hiddenFields: ['ninea', 'num_rc', 'num_recepisse_association'],
            leadership: ['president', 'secretaire', 'tresorier'],
            requiredFields: ['nom_structure', 'type_structure', 'date_creation', 
                           'num_agrement_scoop']
        },
        es: {
            hiddenFields: ['num_agrement_scoop', 'num_recepisse_association'],
            leadership: ['directeur'],
            requiredFields: ['nom_structure', 'type_structure', 'date_creation', 
                           'ninea', 'num_rc']
        }
    };
    // ==========================================
    // UTILITAIRES
    // ==========================================
    
    /**
     * Debounce fonction pour optimiser les performances
     */
    function debounce(func, wait) {
        let timeout;
        return function executedFunction(...args) {
            const later = () => {
                clearTimeout(timeout);
                func(...args);
            };
            clearTimeout(timeout);
            timeout = setTimeout(later, wait);
        };
    }

    /**
     * Affichage d'indicateur de sauvegarde
     */
    function showIndicator(text, type = 'info') {
        let indicator = document.getElementById('saveIndicator');
        
        if (!indicator) {
            indicator = document.createElement('div');
            indicator.id = 'saveIndicator';
            indicator.style.cssText = `
                position: fixed;
                top: 20px;
                right: 20px;
                padding: 12px 20px;
                border-radius: 8px;
                font-weight: 500;
                z-index: 10000;
                box-shadow: 0 4px 12px rgba(0,0,0,0.15);
                transition: opacity 0.3s ease;
                display: none;
            `;
            document.body.appendChild(indicator);
        }
        
        const colors = {
            loading: { bg: '#667eea', text: 'white' },
            success: { bg: '#28a745', text: 'white' },
            error: { bg: '#dc3545', text: 'white' }
        };
        
        const color = colors[type] || colors.loading;
        indicator.style.backgroundColor = color.bg;
        indicator.style.color = color.text;
        indicator.textContent = text;
        indicator.style.display = 'block';
        indicator.style.opacity = '1';
        
        if (type !== 'loading') {
            setTimeout(() => {
                indicator.style.opacity = '0';
                setTimeout(() => indicator.style.display = 'none', 300);
            }, 2000);
        }
    }

    // ==========================================
    // VALIDATION
    // ==========================================
    
    /**
     * Efface les erreurs de validation d'un champ
     */
    function clearFieldError(input) {
        if (!input) return;
        
        input.style.borderColor = '';
        input.removeAttribute('aria-invalid');
        
        const container = input.closest('.input-group-custom') || input.parentElement;
        const errorDiv = container?.querySelector('.error-message');
        if (errorDiv) errorDiv.remove();
    }

    function validateField(input) {
        if (!input) return { isValid: true, errorMsg: '' };
        
        const cacheKey = `${input.name}-${input.value}`;
        
        if (state.validationCache.has(cacheKey)) {
            return state.validationCache.get(cacheKey);
        }
        
        const value = input.value.trim();
        let isValid = true;
        let errorMsg = '';
        
        if (input.required && !value) {
            isValid = false;
            errorMsg = 'Ce champ est obligatoire';
        } else if (value) {
            if (input.type === 'email' && !CONFIG.validationRules.email.test(value)) {
                isValid = false;
                errorMsg = 'Format email invalide';
            } else if (input.type === 'tel' && !CONFIG.validationRules.telephone.test(value)) {
                isValid = false;
                errorMsg = 'Téléphone invalide. Doit commencer par 77, 78, 76, 75, 70, 71, 33 ou 30 et comporter 7 chiffres après.';
            }
        }
        
        const result = { isValid, errorMsg };
        state.validationCache.set(cacheKey, result);
        
        if (isValid) {
            clearFieldError(input);
        } else if (errorMsg) {
            showFieldError(input, errorMsg);
        }
        
        return result;
    }

    function showFieldError(input, message) {
        if (!input) return;
        
        input.style.borderColor = '#dc3545';
        input.setAttribute('aria-invalid', 'true');
        
        const container = input.closest('.input-group-custom') || input.parentElement;
        let errorDiv = container?.querySelector('.error-message');
        
        if (!errorDiv) {
            errorDiv = document.createElement('div');
            errorDiv.className = 'error-message';
            errorDiv.setAttribute('role', 'alert');
            errorDiv.style.cssText = 'color: #dc3545; font-size: 0.875rem; margin-top: 0.25rem;';
            container?.appendChild(errorDiv);
        }
        errorDiv.textContent = message;
    }

    /**
     * Valide une section en tenant compte des champs conditionnels
     */
    function validateConditionalSection(sectionNumber) {
        const section = document.querySelector(`.form-section[data-section="${sectionNumber}"]`);
        if (!section) return true;

        // Ne valider que les champs visibles et required
        const visibleRequiredInputs = Array.from(section.querySelectorAll('[required]')).filter(input => {
            const formGroup = input.closest('.form-group') || input.closest('.col-md-6') || input.closest('.col-md-4');
            return formGroup && window.getComputedStyle(formGroup).display !== 'none';
        });

        let isValid = true;
        let firstErrorField = null;

        visibleRequiredInputs.forEach(input => {
            const result = validateField(input);
            if (!result.isValid) {
                isValid = false;
                if (!firstErrorField) firstErrorField = input;
            }
        });

        if (!isValid && firstErrorField) {
            firstErrorField.focus();
            firstErrorField.scrollIntoView({ behavior: 'smooth', block: 'center' });
        }

        return isValid;
    }

    function validateSection(sectionNumber) {
        // Pour les sections 1 et 2, utiliser la validation conditionnelle
        if (sectionNumber === 1 || sectionNumber === 2) {
            return validateConditionalSection(sectionNumber);
        }
        
        // Pour les autres sections
        const section = document.querySelector(`.form-section[data-section="${sectionNumber}"]`);
        if (!section) return true;
        
        const inputs = section.querySelectorAll('[required]');
        const errors = [];
        let firstErrorField = null;
        
        inputs.forEach(input => {
            const result = validateField(input);
            if (!result.isValid) {
                errors.push(result.errorMsg || 'Champ invalide');
                if (!firstErrorField) firstErrorField = input;
            }
        });
        
        if (errors.length > 0 && firstErrorField) {
            firstErrorField.focus();
            firstErrorField.scrollIntoView({ behavior: 'smooth', block: 'center' });
            return false;
        }
        
        return true;
    }

    // ==========================================
    // GESTION DES FICHIERS
    // ==========================================
    
    function setupFileUpload() {
        document.querySelectorAll('input[type="file"]').forEach(input => {
            input.addEventListener('change', function(e) {
                const files = Array.from(e.target.files);
                
                for (const file of files) {
                    if (file.size > CONFIG.maxFileSize) {
                        alert(`${file.name} dépasse 5 Mo`);
                        input.value = '';
                        return;
                    }
                    
                    if (!CONFIG.allowedFileTypes.includes(file.type)) {
                        alert(`${file.name} n'est pas au bon format`);
                        input.value = '';
                        return;
                    }
                }
                
                updateFileLabel(input, files);
            });
        });
    }

    function updateFileLabel(input, files) {
        const label = input.nextElementSibling;
        if (!label || files.length === 0) return;
        
        if (files.length === 1) {
            const file = files[0];
            const sizeKB = (file.size / 1024).toFixed(1);
            label.innerHTML = `
                <i class="fas fa-check-circle" style="color: #28a745;"></i>
                <div style="text-align: left;">
                    <div style="color: #28a745; font-weight: 600;">${file.name}</div>
                    <div style="color: #6c757d; font-size: 12px;">${sizeKB} Ko</div>
                </div>
            `;
        } else {
            label.innerHTML = `
                <i class="fas fa-check-circle" style="color: #28a745;"></i>
                <span style="color: #28a745;">${files.length} fichiers</span>
            `;
        }
        
        label.style.borderColor = '#28a745';
    }

    // ==========================================
    // SAUVEGARDE AUTOMATIQUE
    // ==========================================
    
    const autoSave = debounce(() => {
        if (state.hasUnsavedChanges) {
            showIndicator('Sauvegarde...', 'loading');
            // Implémenter la logique de sauvegarde ici
            setTimeout(() => {
                state.hasUnsavedChanges = false;
                showIndicator('✓ Sauvegardé', 'success');
            }, 1000);
        }
    }, CONFIG.autoSaveDelay);

    function setupAutoSave() {
        const form = document.getElementById('enrollmentForm');
        if (!form) return;
        
        form.addEventListener('input', (e) => {
            state.hasUnsavedChanges = true;
            autoSave();
        });
        
        window.addEventListener('beforeunload', (e) => {
            if (state.hasUnsavedChanges) {
                e.preventDefault();
                e.returnValue = 'Modifications non sauvegardées';
            }
        });
    }

    // ==========================================
    // NAVIGATION
    // ==========================================
    
    function animateTransition(currentEl, nextEl, direction = 'next') {
        const offset = direction === 'next' ? 30 : -30;
        
        currentEl.style.transition = 'all 0.3s ease';
        currentEl.style.opacity = '0';
        currentEl.style.transform = `translateX(${-offset}px)`;
        
        setTimeout(() => {
            currentEl.classList.remove('active');
            nextEl.classList.add('active');
            nextEl.style.opacity = '0';
            nextEl.style.transform = `translateX(${offset}px)`;
            
            requestAnimationFrame(() => {
                nextEl.style.transition = 'all 0.3s ease';
                nextEl.style.opacity = '1';
                nextEl.style.transform = 'translateX(0)';
            });
            
            window.scrollTo({ top: 0, behavior: 'smooth' });
        }, 300);
    }

    window.nextSection = function(sectionNumber) {
        const current = document.querySelector('.form-section.active');
        if (!current) return;
        
        const currentNum = parseInt(current.dataset.section);
        
        if (!validateSection(currentNum)) return;
        
        const next = document.querySelector(`.form-section[data-section="${sectionNumber}"]`);
        if (!next) return;
        
        animateTransition(current, next, 'next');
        updateProgressBar(sectionNumber);
        state.currentSection = sectionNumber;
        
        if (sectionNumber === 7) updateSummary();
    };

    window.prevSection = function(sectionNumber) {
        const current = document.querySelector('.form-section.active');
        const prev = document.querySelector(`.form-section[data-section="${sectionNumber}"]`);
        
        if (!current || !prev) return;
        
        animateTransition(current, prev, 'prev');
        updateProgressBar(sectionNumber);
        state.currentSection = sectionNumber;
    };

    function updateProgressBar(activeStep) {
        const steps = document.querySelectorAll('.progress-step');
        const progressBar = document.querySelector('.progress-bar-custom');
        
        if (progressBar) {
            progressBar.setAttribute('aria-valuenow', activeStep);
        }
        
        steps.forEach((step, index) => {
            const stepNumber = index + 1;
            
            if (stepNumber < activeStep) {
                step.classList.add('completed');
                step.classList.remove('active');
            } else if (stepNumber === activeStep) {
                step.classList.add('active');
                step.classList.remove('completed');
            } else {
                step.classList.remove('active', 'completed');
            }
        });
    }

    // ==========================================
    // GESTION CONDITIONNELLE DES CHAMPS
    // ==========================================

    /**
     * Affiche ou masque un champ avec animation
     */
    function toggleFieldVisibility(fieldId, show) {
        const field = document.getElementById(fieldId);
        if (!field) return;

        const formGroup = field.closest('.form-group') || field.closest('.col-md-6') || field.closest('.col-md-4');
        if (!formGroup) return;

        if (show) {
            formGroup.style.display = '';
            formGroup.style.opacity = '0';
            formGroup.style.transform = 'translateY(-10px)';
            
            requestAnimationFrame(() => {
                formGroup.style.transition = 'all 0.3s ease';
                formGroup.style.opacity = '1';
                formGroup.style.transform = 'translateY(0)';
            });
        } else {
            formGroup.style.transition = 'all 0.3s ease';
            formGroup.style.opacity = '0';
            formGroup.style.transform = 'translateY(-10px)';
            
            setTimeout(() => {
                formGroup.style.display = 'none';
                field.value = '';
                field.removeAttribute('required');
                field.removeAttribute('aria-required');
                clearFieldError(field);
            }, 300);
        }
    }

    /**
     * Gère l'affichage des champs de la section "Structure"
     */
    function handleStructureFields(structureType) {
        if (!structureType || !STRUCTURE_RULES[structureType]) {
            console.warn('Type de structure invalide:', structureType);
            return;
        }

        const rules = STRUCTURE_RULES[structureType];
        const allConditionalFields = ['ninea', 'num_rc', 'num_agrement_scoop', 
                                      'num_recepisse_association'];

        allConditionalFields.forEach(fieldId => {
            const shouldHide = rules.hiddenFields.includes(fieldId);
            const shouldShow = !shouldHide;
            
            toggleFieldVisibility(fieldId, shouldShow);

            const field = document.getElementById(fieldId);
            if (field && shouldShow && rules.requiredFields.includes(fieldId)) {
                field.setAttribute('required', 'required');
                field.setAttribute('aria-required', 'true');
            }
        });

        showStructureTypeInfo(structureType);
    }

    /**
     * Affiche un message informatif selon le type de structure
     */
    function showStructureTypeInfo(structureType) {
        const section = document.querySelector('[data-section="1"]');
        if (!section) return;

        const oldInfo = section.querySelector('.structure-type-info');
        if (oldInfo) oldInfo.remove();

        const infoMessages = {};

        const info = infoMessages[structureType];
        if (!info) return;

        const infoDiv = document.createElement('div');
        infoDiv.className = 'alert alert-info structure-type-info';
        infoDiv.style.cssText = 'margin-top: 20px; animation: fadeIn 0.4s ease;';
        infoDiv.innerHTML = `
            <i class="fas ${info.icon}" aria-hidden="true"></i>
            <div style="display: inline-block; margin-left: 10px;">
                <strong>${info.title}</strong>
                <p style="margin: 5px 0 0 0; font-size: 14px;">${info.text}</p>
            </div>
        `;

        const firstSubsection = section.querySelector('.subsection-title');
        if (firstSubsection?.parentNode) {
            firstSubsection.parentNode.insertBefore(infoDiv, firstSubsection.nextSibling);
        }
    }

    /**
     * Gère l'affichage des rôles de l'équipe dirigeante
     */
    function handleLeadershipRoles(structureType) {
        if (!structureType || !STRUCTURE_RULES[structureType]) return;

        const rules = STRUCTURE_RULES[structureType];
        const section = document.querySelector('[data-section="2"]');
        if (!section) return;

        function toggleRoleSection(roleName, show) {
            const roleTitle = Array.from(section.querySelectorAll('.subsection-title')).find(el => {
                const text = el.textContent.toLowerCase();
                if (roleName === 'president') return text.includes('président');
                if (roleName === 'directeur') return text.includes('directeur');
                if (roleName === 'secretaire') return text.includes('secrétaire');
                if (roleName === 'tresorier') return text.includes('trésorier');
                return false;
            });

            if (!roleTitle) return;

            let currentElement = roleTitle;
            const elementsToToggle = [roleTitle];

            while (currentElement.nextElementSibling) {
                currentElement = currentElement.nextElementSibling;
                
                if (currentElement.tagName === 'HR' || 
                    currentElement.classList.contains('subsection-title')) {
                    if (currentElement.tagName === 'HR') {
                        elementsToToggle.push(currentElement);
                    }
                    break;
                }
                
                elementsToToggle.push(currentElement);
            }

            elementsToToggle.forEach(el => {
                // Ne pas masquer les boutons de navigation
                if (el.classList && (el.classList.contains('navigation-buttons') || 
                    el.querySelector('.navigation-buttons'))) {
                    return;
                }

                if (show) {
                    el.style.display = '';
                    el.style.opacity = '0';
                    requestAnimationFrame(() => {
                        el.style.transition = 'all 0.3s ease';
                        el.style.opacity = '1';
                    });

                    const inputs = el.querySelectorAll('input, select, textarea');
                    inputs.forEach(input => {
                        const label = el.querySelector(`label[for="${input.id}"]`);
                        if (label?.textContent.includes('*')) {
                            input.setAttribute('required', 'required');
                            input.setAttribute('aria-required', 'true');
                        }
                    });
                } else {
                    el.style.transition = 'all 0.3s ease';
                    el.style.opacity = '0';
                    
                    setTimeout(() => {
                        el.style.display = 'none';
                        
                        const inputs = el.querySelectorAll('input, select, textarea');
                        inputs.forEach(input => {
                            input.value = '';
                            input.removeAttribute('required');
                            input.removeAttribute('aria-required');
                            clearFieldError(input);
                        });
                    }, 300);
                }
            });
        }

        const allRoleNames = ['president', 'directeur', 'secretaire', 'tresorier'];
        allRoleNames.forEach(roleName => {
            toggleRoleSection(roleName, rules.leadership.includes(roleName));
        });

        // S'assurer que les boutons de navigation sont toujours visibles
        ensureNavigationButtonsVisible(section);

        updateLeadershipSectionTitle(structureType);
    }

    /**
     * S'assure que les boutons de navigation sont toujours visibles
     */
    function ensureNavigationButtonsVisible(section) {
        if (!section) return;

        const navButtons = section.querySelector('.navigation-buttons');
        if (navButtons) {
            navButtons.style.display = '';
            navButtons.style.opacity = '1';
            navButtons.style.visibility = 'visible';
        }

        // Alternative : chercher les boutons directement
        const buttons = section.querySelectorAll('button[onclick*="Section"]');
        buttons.forEach(btn => {
            const btnContainer = btn.closest('.navigation-buttons') || btn.parentElement;
            if (btnContainer) {
                btnContainer.style.display = '';
                btnContainer.style.opacity = '1';
                btnContainer.style.visibility = 'visible';
            }
        });
    }

    /**
     * Met à jour le titre de la section équipe dirigeante
     */
    function updateLeadershipSectionTitle(structureType) {
        const section = document.querySelector('[data-section="2"]');
        if (!section) return;

        const subtitle = section.querySelector('.section-subtitle');
        if (!subtitle) return;

        const subtitles = {
            aer: 'Informations sur le bureau exécutif de l\'AER',
            scoop: 'Informations sur le conseil d\'administration de la SCOOP',
            es: 'Informations sur la direction de l\'entreprise sociale'
        };

        subtitle.textContent = subtitles[structureType] || 'Informations sur les responsables de la structure';
    }

    // ==========================================
    // GESTION CONDITIONNELLE ESS
    // ==========================================
    
    function setupESSConditionalFields() {
        const radioOui = document.getElementById('etats_financiers_oui');
        const radioNon = document.getElementById('etats_financiers_non');
        const uploadContainer = document.getElementById('etats_financiers_upload_container');
        const fileInput = document.getElementById('etats_financiers_fichier');
        
        if (!radioOui || !radioNon || !uploadContainer || !fileInput) return;
        
        function toggleUploadField() {
            if (radioOui.checked) {
                uploadContainer.style.display = 'block';
                fileInput.setAttribute('required', 'required');
                fileInput.setAttribute('aria-required', 'true');
            } else {
                uploadContainer.style.display = 'none';
                fileInput.removeAttribute('required');
                fileInput.removeAttribute('aria-required');
                fileInput.value = '';
                
                const label = fileInput.nextElementSibling;
                if (label) {
                    label.innerHTML = `
                        <i class="fas fa-cloud-upload-alt"></i>
                        <span>Cliquez pour télécharger les états financiers</span>
                    `;
                    label.style.borderColor = '';
                }
            }
        }
        
        radioOui.addEventListener('change', toggleUploadField);
        radioNon.addEventListener('change', toggleUploadField);
    }

    // ==========================================
    // RÉCAPITULATIF
    // ==========================================
    
    function updateSummary() {
        const fields = {
            'summary-nom': 'nom_structure',
            'summary-type': 'type_structure',
            'summary-email': 'email',
            'summary-president': ['president_prenom', 'president_nom'],
            'summary-directeur': ['directeur_prenom', 'directeur_nom'],
            'summary-secretaire': ['secretaire_prenom', 'secretaire_nom'],
            'summary-tresorier': ['tresorier_prenom', 'tresorier_nom'],
            'summary-region': 'region',
            'summary-departement': 'departement',
            'summary-commune': 'commune',
            'summary-adresse': 'adresse',
            'summary-element-ess': 'element_caracterisant',
            'summary-date-agrement': 'date_demande_agrement'
        };
        
        
        Object.entries(fields).forEach(([summaryId, fieldName]) => {
            const el = document.getElementById(summaryId);
            if (!el) return;
            
            if (Array.isArray(fieldName)) {
                const values = fieldName.map(name => {
                    const field = document.querySelector(`[name="${name}"]`);
                    return field?.value || '';
                }).filter(v => v);
                el.textContent = values.join(' ') || '-';
            } else {
                const field = document.querySelector(`[name="${fieldName}"]`);
                if (field) {
                    el.textContent = field.tagName === 'SELECT' 
                        ? field.selectedOptions[0]?.text || '-'
                        : field.value || '-';
                }
            }
        });
        
        const etatsFinanciersEl = document.getElementById('summary-etats-financiers');
        const radioOui = document.getElementById('etats_financiers_oui');
        const radioNon = document.getElementById('etats_financiers_non');
        const fileInput = document.getElementById('etats_financiers_fichier');
        
        if (etatsFinanciersEl) {
            if (radioOui?.checked) {
                const fileName = fileInput?.files[0]?.name || 'Fichier téléchargé';
                etatsFinanciersEl.textContent = `Oui (${fileName})`;
            } else if (radioNon?.checked) {
                etatsFinanciersEl.textContent = 'Non disponibles';
            } else {
                etatsFinanciersEl.textContent = '-';
            }
        }
    }

    // ==========================================
    // SOUMISSION
    // ==========================================
    
    function setupFormSubmission() {
        const form = document.getElementById('enrollmentForm');
        if (!form) return;
        
        form.addEventListener('submit', async function(e) {
            e.preventDefault();
            
            if (!document.getElementById('accept_terms')?.checked) {
                alert('Veuillez accepter les termes et conditions');
                return;
            }
            
            const submitBtn = form.querySelector('button[type="submit"]');
            if (!submitBtn) return;
            
            const originalContent = submitBtn.innerHTML;
            submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Envoi...';
            submitBtn.disabled = true;
            
            try {
                const formData = new FormData(form);
                const csrfToken = document.querySelector('[name="_token"]');
                
                const response = await fetch(form.action, {
                    method: 'POST',
                    body: formData,
                    headers: {
                        'X-Requested-With': 'XMLHttpRequest',
                        ...(csrfToken ? { 'X-CSRF-TOKEN': csrfToken.value } : {})
                    }
                });
                
                const data = await response.json();
                
                if (data.success) {
                    state.hasUnsavedChanges = false;
                    showSuccessSection();
                } else {
                    throw new Error(data.message || 'Erreur lors de l\'envoi');
                }
            } catch (error) {
                alert(error.message);
                submitBtn.innerHTML = originalContent;
                submitBtn.disabled = false;
            }
        });
    }

    function showSuccessSection() {
        const current = document.querySelector('.form-section.active');
        const success = document.querySelector('.form-section[data-section="8"]');
        
        if (success && current) {
            current.classList.remove('active');
            success.classList.add('active');
            updateProgressBar(7);
            window.scrollTo({ top: 0, behavior: 'smooth' });
        }
    }

    // ==========================================
    // CASCADING DROPDOWNS
    // ==========================================
    
    function setupCascadingDropdowns() {
        const data = {
            regions: {
                'dakar': ['Dakar', 'Pikine', 'Guédiawaye', 'Rufisque'],
                'thies': ['Thiès', 'Tivaouane', 'Mbour'],
                'saint-louis': ['Saint-Louis', 'Dagana', 'Podor'],
                'diourbel': ['Diourbel', 'Bambey', 'Mbacké'],
                'louga': ['Louga', 'Linguère', 'Kébémer'],
                'kaolack': ['Kaolack', 'Nioro du Rip', 'Guinguinéo'],
                'fatick': ['Fatick', 'Foundiougne', 'Gossas'],
                'ziguinchor': ['Ziguinchor', 'Bignona', 'Oussouye']
            },
            communes: {
                'dakar': ['Dakar-Plateau', 'Médina', 'Sicap-Liberté', 'Grand-Dakar', 'Fann-Point E-Amitié', 'Gorée', 'Yoff', 'Ouakam', 'Ngor', 'Almadies', 'Parcelles Assainies', 'Cambérène', 'Hann Bel-Air', 'Gueule Tapée-Fass-Colobane'],
                'pikine': ['Pikine Nord', 'Pikine Ouest', 'Pikine Est', 'Dagoudane', 'Thiaroye'],
                'guediawaye': ['Golf Sud', 'Sam Notaire', 'Ndiarème Limamoulaye', 'Médina Gounass', 'Wakhinane Nimzatt'],
                'rufisque': ['Rufisque Nord', 'Rufisque Sud', 'Rufisque Est', 'Bambylor', 'Yène', 'Diamniadio', 'Bargny', 'Sébikotane'],
                'thies': ['Thiès Nord', 'Thiès Sud', 'Thiès Est'],
                'mbour': ['Mbour', 'Joal-Fadiouth', 'Saly Portudal', 'Somone'],
                'saint-louis': ['Saint-Louis Nord', 'Saint-Louis Sud', 'Sor']
            }
        };

        const regionSelect = document.getElementById('region');
        const departementSelect = document.getElementById('departement');
        const communeSelect = document.getElementById('commune');

        if (regionSelect) {
            regionSelect.addEventListener('change', function() {
                const region = this.value;
                departementSelect.innerHTML = '<option value="">Sélectionner...</option>';
                communeSelect.innerHTML = '<option value="">Sélectionner d\'abord un département</option>';
                
                if (region && data.regions[region]) {
                    data.regions[region].forEach(dept => {
                        const option = document.createElement('option');
                        option.value = dept.toLowerCase().replace(/\s+/g, '-');
                        option.textContent = dept;
                        departementSelect.appendChild(option);
                    });
                }
            });
        }

        if (departementSelect) {
            departementSelect.addEventListener('change', function() {
                const dept = this.value;
                communeSelect.innerHTML = '<option value="">Sélectionner...</option>';
                
                if (dept && data.communes[dept]) {
                    data.communes[dept].forEach(commune => {
                        const option = document.createElement('option');
                        option.value = commune.toLowerCase().replace(/\s+/g, '-');
                        option.textContent = commune;
                        communeSelect.appendChild(option);
                    });
                }
            });
        }
    }

    // ==========================================
    // SAUVEGARDE BROUILLON
    // ==========================================
    
    window.saveAsDraft = function() {
        showIndicator('Sauvegarde du brouillon...', 'loading');
        
        setTimeout(() => {
            state.hasUnsavedChanges = false;
            showIndicator('✓ Brouillon sauvegardé', 'success');
        }, 1000);
    };

    // ==========================================
    // INITIALISATION
    // ==========================================
    
    function init() {
        console.log('🚀 Initialisation du formulaire d\'enrôlement...');
        
        // Initialiser les modules de base
        setupFileUpload();
        setupAutoSave();
        setupFormSubmission();
        setupCascadingDropdowns();
        setupESSConditionalFields();
        
        // Initialiser la gestion conditionnelle des types de structure
        const typeStructureSelect = document.getElementById('type_structure');
        
        if (typeStructureSelect) {
            typeStructureSelect.addEventListener('change', function() {
                const structureType = this.value;
                
                if (structureType) {
                    handleStructureFields(structureType);
                    handleLeadershipRoles(structureType);
                }
            });

            // Si un type est déjà sélectionné au chargement
            if (typeStructureSelect.value) {
                handleStructureFields(typeStructureSelect.value);
                handleLeadershipRoles(typeStructureSelect.value);
            }
        }
        
        // Validation en temps réel avec debouncing
        const validateInput = debounce((input) => validateField(input), 500);
        
        document.querySelectorAll('input, select, textarea').forEach(field => {
            // Validation à la perte de focus
            field.addEventListener('blur', () => {
                if (field.value && field.hasAttribute('required')) {
                    validateField(field);
                }
            });
            
            // Effacer les erreurs pendant la saisie
            field.addEventListener('input', function() {
                if (this.style.borderColor === 'rgb(220, 53, 69)' || this.style.borderColor === '#dc3545') {
                    clearFieldError(this);
                    state.validationCache.delete(`${this.name}-${this.value}`);
                }
                validateInput(this);
            });
        });
        
        // Animation d'entrée
        const formCard = document.querySelector('.form-card');
        if (formCard) {
            formCard.style.opacity = '0';
            formCard.style.transform = 'translateY(30px)';
            
            requestAnimationFrame(() => {
                formCard.style.transition = 'all 0.5s ease';
                formCard.style.opacity = '1';
                formCard.style.transform = 'translateY(0)';
            });
        }
        
        console.log('✅ Formulaire initialisé avec succès');
    }

    // Démarrage au chargement du DOM
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', init);
    } else {
        init();
    }

})();