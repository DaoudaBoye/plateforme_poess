/**
 * MODULE DE VALIDATION
 * Gère toute la logique de validation du formulaire d'enrôlement
 */

(function() {
    'use strict';

    // ==========================================
    // CONFIGURATION
    // ==========================================
    const VALIDATION_CONFIG = {
        rules: {
            email: /^[^\s@]+@[^\s@]+\.[^\s@]+$/,
            telephone: /^(77|78|76|75|70|71|33|30)\d{7}$/
        },
        errorMessages: {
            required: 'Ce champ est obligatoire',
            email: 'Format email invalide',
            telephone: 'Téléphone invalide. Doit commencer par 77, 78, 76, 75, 70, 71, 33 ou 30 et comporter 7 chiffres après.',
            fileSize: 'Le fichier dépasse la taille maximale de 5 Mo',
            fileType: 'Format de fichier non autorisé'
        },
        debounceDelay: 500
    };

    // Cache de validation pour optimiser les performances
    const validationCache = new Map();

    // ==========================================
    // UTILITAIRES
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

    /**
     * Affiche une erreur de validation sur un champ
     */
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

    // ==========================================
    // VALIDATION DE CHAMPS INDIVIDUELS
    // ==========================================

    /**
     * Valide un champ individuel
     */
    function validateField(input) {
        if (!input) return { isValid: true, errorMsg: '' };
        
        const cacheKey = `${input.name}-${input.value}`;
        
        // Vérifier le cache
        if (validationCache.has(cacheKey)) {
            return validationCache.get(cacheKey);
        }
        
        const value = input.value.trim();
        let isValid = true;
        let errorMsg = '';
        
        // Validation du champ obligatoire
        if (input.required && !value) {
            isValid = false;
            errorMsg = VALIDATION_CONFIG.errorMessages.required;
        } 
        // Validation spécifique par type
        else if (value) {
            if (input.type === 'email' && !VALIDATION_CONFIG.rules.email.test(value)) {
                isValid = false;
                errorMsg = VALIDATION_CONFIG.errorMessages.email;
            } else if (input.type === 'tel' && !VALIDATION_CONFIG.rules.telephone.test(value)) {
                isValid = false;
                errorMsg = VALIDATION_CONFIG.errorMessages.telephone;
            }
        }
        
        const result = { isValid, errorMsg };
        validationCache.set(cacheKey, result);
        
        // Afficher ou effacer l'erreur
        if (isValid) {
            clearFieldError(input);
        } else if (errorMsg) {
            showFieldError(input, errorMsg);
        }
        
        return result;
    }

    /**
     * Valide un fichier uploadé
     */
    function validateFile(file, maxSize = 5 * 1024 * 1024, allowedTypes = []) {
        const errors = [];
        
        if (file.size > maxSize) {
            errors.push({
                fileName: file.name,
                message: VALIDATION_CONFIG.errorMessages.fileSize
            });
        }
        
        if (allowedTypes.length > 0 && !allowedTypes.includes(file.type)) {
            errors.push({
                fileName: file.name,
                message: VALIDATION_CONFIG.errorMessages.fileType
            });
        }
        
        return {
            isValid: errors.length === 0,
            errors
        };
    }

    // ==========================================
    // VALIDATION DE SECTIONS
    // ==========================================

    /**
     * Valide une section en tenant compte des champs conditionnels
     */
    function validateConditionalSection(sectionNumber) {
        const section = document.querySelector(`.form-section[data-section="${sectionNumber}"]`);
        if (!section) return true;

        // Ne valider que les champs visibles et required
        const visibleRequiredInputs = Array.from(section.querySelectorAll('[required]')).filter(input => {
            const formGroup = input.closest('.form-group') || 
                            input.closest('.col-md-6') || 
                            input.closest('.col-md-4');
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

    /**
     * Valide une section standard
     */
    function validateStandardSection(sectionNumber) {
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

    /**
     * Valide une section (dispatch selon le type)
     */
    function validateSection(sectionNumber) {
        // Sections 1 et 2 ont des champs conditionnels
        if (sectionNumber === 1 || sectionNumber === 2) {
            return validateConditionalSection(sectionNumber);
        }
        
        // Autres sections : validation standard
        return validateStandardSection(sectionNumber);
    }

    /**
     * Valide le formulaire entier
     */
    function validateEntireForm() {
        const totalSections = 7; // Sections 1 à 7
        let isValid = true;
        let firstInvalidSection = null;

        for (let i = 1; i <= totalSections; i++) {
            if (!validateSection(i)) {
                isValid = false;
                if (!firstInvalidSection) {
                    firstInvalidSection = i;
                }
            }
        }

        return {
            isValid,
            firstInvalidSection
        };
    }

    // ==========================================
    // DEBOUNCE
    // ==========================================

    /**
     * Debounce pour optimiser la validation en temps réel
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

    // ==========================================
    // SETUP DE LA VALIDATION
    // ==========================================

    /**
     * Configure la validation en temps réel sur tous les champs
     */
    function setupRealtimeValidation() {
        const validateInput = debounce((input) => validateField(input), VALIDATION_CONFIG.debounceDelay);
        
        document.querySelectorAll('input, select, textarea').forEach(field => {
            // Validation à la perte de focus
            field.addEventListener('blur', () => {
                if (field.value && field.hasAttribute('required')) {
                    validateField(field);
                }
            });
            
            // Effacer les erreurs pendant la saisie
            field.addEventListener('input', function() {
                if (this.style.borderColor === 'rgb(220, 53, 69)' || 
                    this.style.borderColor === '#dc3545') {
                    clearFieldError(this);
                    validationCache.delete(`${this.name}-${this.value}`);
                }
                validateInput(this);
            });

            // Support de l'accessibilité
            field.addEventListener('invalid', (e) => {
                e.preventDefault();
                validateField(field);
            });
        });
    }

    /**
     * Nettoie le cache de validation
     */
    function clearValidationCache() {
        validationCache.clear();
    }

    // ==========================================
    // EXPORT DES FONCTIONS PUBLIQUES
    // ==========================================

    window.FormValidation = {
        validateField,
        validateFile,
        validateSection,
        validateEntireForm,
        clearFieldError,
        showFieldError,
        setupRealtimeValidation,
        clearValidationCache,
        config: VALIDATION_CONFIG
    };

    console.log('✅ Module de validation chargé');

})();