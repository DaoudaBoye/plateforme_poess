<footer class="main-footer bg-light border-top">
    <div class="container-fluid py-3">
        <div class="row align-items-center">
            <!-- Copyright et lien -->
            <div class="col-12 col-md-4 text-center text-md-left mb-2 mb-md-0">
                <span class="text-muted small">
                    &copy; {{ date('Y') }} 
                    <a href="https://www.microfinance-ess.gouv.sn/" 
                       target="_blank" 
                       rel="noopener noreferrer" 
                       class="footer-link"
                       aria-label="Site officiel du MMESS">
                        MMESS
                    </a>
                </span>
            </div>

            <!-- Description -->
            <div class="col-12 col-md-4 text-center mb-2 mb-md-0">
                <span class="text-muted small">
                    Plateforme numérique des organisations de l'ESS
                </span>
            </div>

            <!-- Liens additionnels -->
            <div class="col-12 col-md-4 text-center text-md-right">
                <div class="footer-links">
                    <a href="#" class="footer-link small" aria-label="Mentions légales">Mentions légales</a>
                    <span class="text-muted mx-1">•</span>
                    <a href="#" class="footer-link small" aria-label="Politique de confidentialité">Confidentialité</a>
                    <span class="text-muted mx-1">•</span>
                    <a href="#" class="footer-link small" aria-label="Contactez-nous">Contact</a>
                </div>
            </div>
        </div>

        <!-- Version du système (optionnel) -->
        <div class="row mt-2 d-none d-lg-flex">
            <div class="col-12 text-center">
                <span class="text-muted" style="font-size: 11px;">
                    Version {{ config('app.version', '1.0.0') }} | 
                    <span id="current-time"></span>
                </span>
            </div>
        </div>
    </div>
</footer>

<style>
/* ==========================================
   FOOTER - STYLE MODERNE OPTIMISÉ
   ========================================== */

:root {
    --footer-bg: #f8f9fa;
    --footer-border: #dee2e6;
    --footer-text: #6c757d;
    --footer-link: #495057;
    --footer-link-hover: #0e6939;
}

.main-footer {
    background-color: var(--footer-bg) !important;
    border-top: 2px solid var(--footer-border) !important;
    box-shadow: 0 -2px 10px rgba(0, 0, 0, 0.05);
    transition: all 0.3s ease;
    position: relative;
    z-index: 1000;
}

/* Liens du footer */
.footer-link {
    color: var(--footer-link);
    text-decoration: none;
    font-weight: 500;
    transition: all 0.3s ease;
    position: relative;
    display: inline-block;
}

.footer-link::after {
    content: '';
    position: absolute;
    bottom: -2px;
    left: 0;
    width: 0;
    height: 2px;
    background: linear-gradient(135deg, #0e6939 0%, #199543 100%);
    transition: width 0.3s ease;
}

.footer-link:hover {
    color: var(--footer-link-hover);
    text-decoration: none;
    transform: translateY(-1px);
}

.footer-link:hover::after {
    width: 100%;
}

/* Séparateurs */
.footer-links .text-muted {
    opacity: 0.5;
}

/* Animation du temps */
#current-time {
    font-weight: 600;
    color: var(--footer-link);
}

/* ==========================================
   RESPONSIVE
   ========================================== */

@media (max-width: 767px) {
    .main-footer .row {
        text-align: center;
    }
    
    .footer-links {
        display: flex;
        flex-direction: column;
        gap: 8px;
    }
    
    .footer-links .text-muted {
        display: none;
    }
}

/* ==========================================
   DARK MODE SUPPORT
   ========================================== */

@media (prefers-color-scheme: dark) {
    :root {
        --footer-bg: #1a1a2e;
        --footer-border: #2d2d44;
        --footer-text: #a0a0b0;
        --footer-link: #b0b0c0;
        --footer-link-hover: #199543;
    }
    
    .main-footer {
        box-shadow: 0 -2px 10px rgba(0, 0, 0, 0.3);
    }
}

/* ==========================================
   ACCESSIBILITÉ
   ========================================== */

.footer-link:focus {
    outline: 2px solid var(--footer-link-hover);
    outline-offset: 2px;
    border-radius: 2px;
}

@media (prefers-reduced-motion: reduce) {
    .footer-link,
    .main-footer {
        transition: none;
    }
    
    .footer-link::after {
        transition: none;
    }
}

/* ==========================================
   PRINT STYLES
   ========================================== */

@media print {
    .main-footer {
        position: static;
        box-shadow: none;
        border-top: 1px solid #000;
        page-break-inside: avoid;
    }
    
    .footer-link::after {
        display: none;
    }
}
</style>

<script>
/**
 * Affichage de l'heure en temps réel (optionnel)
 */
document.addEventListener('DOMContentLoaded', function() {
    const timeElement = document.getElementById('current-time');
    
    if (timeElement) {
        function updateTime() {
            const now = new Date();
            const options = { 
                hour: '2-digit', 
                minute: '2-digit',
                second: '2-digit',
                hour12: false 
            };
            timeElement.textContent = 'Heure : ' + now.toLocaleTimeString('fr-FR', options);
        }
        
        updateTime();
        setInterval(updateTime, 1000);
    }
});
</script>