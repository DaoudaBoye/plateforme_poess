<!-- ============================
     TOPBAR NAVBAR - VERSION CORRIGÉE & OPTIMISÉE
=============================== -->
<nav class="main-header navbar navbar-expand navbar-ultra-modern elevation-4" role="navigation" aria-label="Navigation principale">
    <ul class="navbar-nav">
        <!-- Toggle sidebar avec animation -->
        <li class="nav-item">
            <a class="nav-link nav-link-icon" data-widget="pushmenu" href="#" role="button" aria-label="Ouvrir le menu">
                <i class="fas fa-bars" aria-hidden="true"></i>
            </a>
        </li>

        <!-- Brand / Title avec animation -->
        <li class="nav-item d-none d-md-flex align-items-center">
            <a class="nav-link navbar-brand-text" href="{{ route('struct.dashboard') }}">
                <i class="fas fa-home mr-2" aria-hidden="true"></i>
                <span class="brand-full">Plateforme numérique des organisations de l'ESS</span>
                <span class="brand-short">POESS</span>
            </a>
        </li>
    </ul>

    <!-- Right Side Actions -->
    <ul class="navbar-nav ml-auto align-items-center">
        
        <!-- Notifications avec badge animé -->
        <li class="nav-item dropdown">
            <a class="nav-link nav-link-icon position-relative" 
               data-toggle="dropdown" 
               href="#" 
               role="button"
               aria-label="Notifications, 7 non lues"
               aria-expanded="false"
               aria-haspopup="true"
               id="notificationsDropdown">
                <i class="fas fa-bell" aria-hidden="true"></i>
                <span class="badge badge-danger navbar-badge badge-pulse">7</span>
            </a>
            <div class="dropdown-menu dropdown-menu-ultra dropdown-menu-right" aria-labelledby="notificationsDropdown">
                <div class="dropdown-header-modern">
                    <div class="d-flex justify-content-between align-items-center">
                        <span class="header-title">Notifications</span>
                        <span class="badge badge-primary badge-rounded">7</span>
                    </div>
                </div>
                
                <!-- Notification Items avec hover moderne -->
                <div class="dropdown-body" role="menu">
                    <a href="#" class="dropdown-item notification-item-modern" role="menuitem">
                        <div class="notification-content">
                            <div class="notification-icon-modern bg-gradient-warning" aria-hidden="true">
                                <i class="fas fa-clock"></i>
                            </div>
                            <div class="notification-details">
                                <h6 class="notification-title-modern">5 nouveaux enrôlements</h6>
                                <p class="notification-text-modern">En attente de validation</p>
                                <div class="notification-meta">
                                    <i class="far fa-clock" aria-hidden="true"></i>
                                    <span>Il y a 2h</span>
                                </div>
                            </div>
                        </div>
                    </a>
                    
                    <a href="#" class="dropdown-item notification-item-modern" role="menuitem">
                        <div class="notification-content">
                            <div class="notification-icon-modern bg-gradient-info" aria-hidden="true">
                                <i class="fas fa-user-check"></i>
                            </div>
                            <div class="notification-details">
                                <h6 class="notification-title-modern">Affectation terminée</h6>
                                <p class="notification-text-modern">Comité d'évaluation #12</p>
                                <div class="notification-meta">
                                    <i class="far fa-clock" aria-hidden="true"></i>
                                    <span>Il y a 4h</span>
                                </div>
                            </div>
                        </div>
                    </a>

                    <a href="#" class="dropdown-item notification-item-modern" role="menuitem">
                        <div class="notification-content">
                            <div class="notification-icon-modern bg-gradient-success" aria-hidden="true">
                                <i class="fas fa-check-circle"></i>
                            </div>
                            <div class="notification-details">
                                <h6 class="notification-title-modern">Document validé</h6>
                                <p class="notification-text-modern">Rapport annuel approuvé</p>
                                <div class="notification-meta">
                                    <i class="far fa-clock" aria-hidden="true"></i>
                                    <span>Il y a 1 jour</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                
                <div class="dropdown-footer-modern">
                    <a href="#" class="footer-link">
                        Voir toutes les notifications
                        <i class="fas fa-arrow-right ml-2" aria-hidden="true"></i>
                    </a>
                </div>
            </div>
        </li>

        <!-- Messages avec badge animé -->
        <li class="nav-item dropdown d-none d-lg-block">
            <a class="nav-link nav-link-icon position-relative" 
               data-toggle="dropdown" 
               href="#" 
               role="button"
               aria-label="Messages, 3 non lus"
               aria-expanded="false"
               aria-haspopup="true"
               id="messagesDropdown">
                <i class="fas fa-envelope" aria-hidden="true"></i>
                <span class="badge badge-info navbar-badge badge-pulse">3</span>
            </a>
            <div class="dropdown-menu dropdown-menu-ultra dropdown-menu-right" aria-labelledby="messagesDropdown">
                <div class="dropdown-header-modern">
                    <div class="d-flex justify-content-between align-items-center">
                        <span class="header-title">Messages</span>
                        <span class="badge badge-info badge-rounded">3</span>
                    </div>
                </div>
                
                <div class="dropdown-body" role="menu">
                    <a href="#" class="dropdown-item notification-item-modern" role="menuitem">
                        <div class="notification-content">
                            <div class="user-avatar-small" aria-hidden="true">
                                <span>MD</span>
                            </div>
                            <div class="notification-details">
                                <h6 class="notification-title-modern">Marie Dupont</h6>
                                <p class="notification-text-modern">Question sur l'enrôlement...</p>
                                <div class="notification-meta">
                                    <i class="far fa-clock" aria-hidden="true"></i>
                                    <span>Il y a 1h</span>
                                </div>
                            </div>
                        </div>
                    </a>

                    <a href="#" class="dropdown-item notification-item-modern" role="menuitem">
                        <div class="notification-content">
                            <div class="user-avatar-small" style="background: linear-gradient(135deg, #f59e0b 0%, #d97706 100%);" aria-hidden="true">
                                <span>JM</span>
                            </div>
                            <div class="notification-details">
                                <h6 class="notification-title-modern">Jean Martin</h6>
                                <p class="notification-text-modern">Mise à jour des documents...</p>
                                <div class="notification-meta">
                                    <i class="far fa-clock" aria-hidden="true"></i>
                                    <span>Il y a 3h</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                
                <div class="dropdown-footer-modern">
                    <a href="#" class="footer-link">
                        Voir tous les messages
                        <i class="fas fa-arrow-right ml-2" aria-hidden="true"></i>
                    </a>
                </div>
            </div>
        </li>

        <!-- User Profile Dropdown Ultra-moderne -->
        <li class="nav-item dropdown user-dropdown">
            <a class="nav-link user-menu-link" 
               data-toggle="dropdown" 
               href="#" 
               id="accountDropdown"
               role="button"
               aria-expanded="false"
               aria-haspopup="true"
               aria-label="Menu utilisateur">
                <div class="user-panel-nav">
                    <div class="user-avatar-nav" aria-hidden="true">
                        <span>{{ strtoupper(substr(Auth::user()->profil->nom_profil ?? 'U', 0, 1)) }}</span>
                    </div>

                    <div class="user-info d-none d-lg-flex">
                        <span class="user-name">{{ Auth::user()->profil->nom_profil ?? 'Utilisateur' }}</span>
                        <span class="user-role">Administrateur</span>
                    </div>

                    <i class="fas fa-chevron-down ml-2 d-none d-lg-inline dropdown-arrow" aria-hidden="true"></i>
                </div>
            </a>
            
            <div class="dropdown-menu dropdown-menu-ultra dropdown-menu-right user-dropdown-menu" aria-labelledby="accountDropdown">
                <!-- User Info Header avec gradient -->
                <div class="user-dropdown-header">
                    <div class="user-header-content">
                        <div class="user-avatar-large" aria-hidden="true">
                            <span>{{ strtoupper(substr(Auth::user()->profil->nom_profil ?? 'U', 0, 1)) }}</span>
                            <div class="online-indicator" role="status" aria-label="En ligne"></div>
                        </div>
                        <div class="user-header-info">
                            <h6 class="user-header-name">{{ Auth::user()->profil->nom_profil ?? 'Utilisateur' }}</h6>
                            <p class="user-header-email">{{ Auth::user()->email ?? 'email@example.com' }}</p>
                            <span class="user-header-badge">Compte Actif</span>
                        </div>
                    </div>
                </div>
                
                <!-- Menu Items avec icons modernes -->
                <div class="dropdown-body" role="menu">
                    <a class="dropdown-item-ultra" href="#" role="menuitem">
                        <div class="item-icon bg-gradient-info" aria-hidden="true">
                            <i class="fas fa-user"></i>
                        </div>
                        <div class="item-content">
                            <span class="item-title">Mon profil</span>
                            <span class="item-desc">Informations personnelles</span>
                        </div>
                        <i class="fas fa-chevron-right item-arrow" aria-hidden="true"></i>
                    </a>
                    
                    <a class="dropdown-item-ultra" href="#" id="manage_account" role="menuitem">
                        <div class="item-icon bg-gradient-secondary" aria-hidden="true">
                            <i class="fas fa-cog"></i>
                        </div>
                        <div class="item-content">
                            <span class="item-title">Paramètres</span>
                            <span class="item-desc">Configuration du compte</span>
                        </div>
                        <i class="fas fa-chevron-right item-arrow" aria-hidden="true"></i>
                    </a>
                    
                    <a class="dropdown-item-ultra" href="#" role="menuitem">
                        <div class="item-icon bg-gradient-warning" aria-hidden="true">
                            <i class="fas fa-bell"></i>
                        </div>
                        <div class="item-content">
                            <span class="item-title">Notifications</span>
                            <span class="item-desc">Gérer les alertes</span>
                        </div>
                        <span class="item-badge" aria-label="7 notifications">7</span>
                    </a>
                    
                    <a class="dropdown-item-ultra" href="#" role="menuitem">
                        <div class="item-icon bg-gradient-teal" aria-hidden="true">
                            <i class="fas fa-question-circle"></i>
                        </div>
                        <div class="item-content">
                            <span class="item-title">Aide & Support</span>
                            <span class="item-desc">Centre d'assistance</span>
                        </div>
                        <i class="fas fa-chevron-right item-arrow" aria-hidden="true"></i>
                    </a>
                </div>
                
                <div class="dropdown-footer-modern">
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                    <button type="button" class="logout-button" onclick="logoutUser();" aria-label="Se déconnecter">
                        <i class="fas fa-sign-out-alt" aria-hidden="true"></i>
                        <span>Déconnexion</span>
                    </button>
                </div>
            </div>
        </li>
    </ul>
</nav>

<!-- ============================
     MODAL ULTRA-MODERNE
=============================== -->
<div class="modal fade" id="accountModal" tabindex="-1" role="dialog" aria-labelledby="accountModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-ultra" role="document">
        <div class="modal-content modal-ultra">
            <!-- Header avec gradient animé -->
            <div class="modal-header-ultra">
                <div class="modal-header-content">
                    <div class="modal-icon-wrapper" aria-hidden="true">
                        <i class="fas fa-user-cog"></i>
                    </div>
                    <div>
                        <h5 class="modal-title-ultra" id="accountModalLabel">Paramètres du compte</h5>
                        <p class="modal-subtitle-ultra">Modifiez vos informations de connexion</p>
                    </div>
                </div>
                <button type="button" class="close-ultra" data-dismiss="modal" aria-label="Fermer la fenêtre">
                    <i class="fas fa-times" aria-hidden="true"></i>
                </button>
            </div>

            <!-- Body / Formulaire -->
            <div class="modal-body-ultra">
                <form id="updateAccountForm" action="{{ route('account.update') }}" method="POST" autocomplete="on">
                    @csrf
                    
                    <!-- Email avec icon -->
                    <div class="form-group-ultra">
                        <label for="email" class="form-label-ultra">
                            <i class="fas fa-envelope" aria-hidden="true"></i>
                            <span>Adresse email</span>
                        </label>
                        <div class="input-wrapper">
                            <input type="email" 
                                   class="form-control-ultra" 
                                   id="email" 
                                   name="email" 
                                   required 
                                   value="{{ Auth::user()->email }}"
                                   placeholder="votre@email.com"
                                   aria-required="true"
                                   aria-describedby="email-hint">
                            <div class="input-icon" aria-hidden="true">
                                <i class="fas fa-at"></i>
                            </div>
                        </div>
                        <small id="email-hint" class="form-hint">Votre adresse email de connexion</small>
                    </div>
                    
                    <!-- Divider stylisé -->
                    <div class="section-divider" role="separator" aria-label="Section mot de passe">
                        <span class="divider-text">
                            <i class="fas fa-lock mr-2" aria-hidden="true"></i>
                            Changer le mot de passe (optionnel)
                        </span>
                    </div>
                    
                    <!-- Nouveau mot de passe -->
                    <div class="form-group-ultra">
                        <label for="password" class="form-label-ultra">
                            <i class="fas fa-key" aria-hidden="true"></i>
                            <span>Nouveau mot de passe</span>
                        </label>
                        <div class="input-wrapper">
                            <input type="password" 
                                   class="form-control-ultra" 
                                   id="password" 
                                   name="password"
                                   placeholder="Minimum 8 caractères"
                                   minlength="8"
                                   aria-describedby="password-hint password-strength">
                            <button class="input-toggle" 
                                    type="button" 
                                    onclick="togglePassword('password')"
                                    aria-label="Afficher le mot de passe"
                                    aria-pressed="false">
                                <i class="fas fa-eye" id="password-icon" aria-hidden="true"></i>
                            </button>
                        </div>
                        <div class="password-strength" 
                             id="password-strength" 
                             role="progressbar" 
                             aria-valuemin="0" 
                             aria-valuemax="100" 
                             aria-valuenow="0"
                             aria-label="Force du mot de passe">
                            <div class="strength-bar"></div>
                        </div>
                        <small id="password-hint" class="form-hint">Minimum 8 caractères. Laissez vide pour ne pas modifier.</small>
                    </div>
                    
                    <!-- Confirmation mot de passe -->
                    <div class="form-group-ultra">
                        <label for="password_confirmation" class="form-label-ultra">
                            <i class="fas fa-lock" aria-hidden="true"></i>
                            <span>Confirmer le mot de passe</span>
                        </label>
                        <div class="input-wrapper">
                            <input type="password" 
                                   class="form-control-ultra" 
                                   id="password_confirmation" 
                                   name="password_confirmation"
                                   placeholder="Confirmez votre mot de passe"
                                   minlength="8"
                                   aria-describedby="password-confirmation-hint">
                            <button class="input-toggle" 
                                    type="button" 
                                    onclick="togglePassword('password_confirmation')"
                                    aria-label="Afficher le mot de passe de confirmation"
                                    aria-pressed="false">
                                <i class="fas fa-eye" id="password_confirmation-icon" aria-hidden="true"></i>
                            </button>
                        </div>
                        <small id="password-confirmation-hint" class="form-hint">Retapez le même mot de passe</small>
                    </div>
                    
                    <!-- Buttons avec animations -->
                    <div class="modal-footer-ultra">
                        <button type="button" class="btn-ultra btn-cancel" data-dismiss="modal">
                            <i class="fas fa-times" aria-hidden="true"></i>
                            <span>Annuler</span>
                        </button>
                        <button type="submit" class="btn-ultra btn-submit">
                            <i class="fas fa-save" aria-hidden="true"></i>
                            <span>Enregistrer</span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- ============================
     STYLES ULTRA-MODERNES
=============================== -->
<style>
:root {
    --primary: #0e6939;
    --primary-dark: #0a5229;
    --secondary: #199543;
    --danger: #ef4444;
    --info: #3b82f6;
    --warning: #f59e0b;
    --success: #10b981;
    --teal: #14b8a6;
    --purple: #8b5cf6;
    
    --gray-50: #f8fafc;
    --gray-100: #f1f5f9;
    --gray-200: #e2e8f0;
    --gray-300: #cbd5e1;
    --gray-400: #94a3b8;
    --gray-500: #64748b;
    --gray-600: #475569;
    --gray-700: #334155;
    --gray-800: #1e293b;
    --gray-900: #0f172a;
    
    --shadow-sm: 0 1px 2px 0 rgba(0, 0, 0, 0.05);
    --shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
    --shadow-md: 0 6px 12px -2px rgba(0, 0, 0, 0.15);
    --shadow-lg: 0 10px 24px -3px rgba(0, 0, 0, 0.2);
    --shadow-xl: 0 20px 40px -4px rgba(0, 0, 0, 0.25);
    
    --radius-sm: 8px;
    --radius: 12px;
    --radius-lg: 16px;
    --radius-xl: 20px;
    
    --transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
}

/* Screen reader only */
.sr-only {
    position: absolute;
    width: 1px;
    height: 1px;
    padding: 0;
    margin: -1px;
    overflow: hidden;
    clip: rect(0, 0, 0, 0);
    white-space: nowrap;
    border-width: 0;
}

/* ==========================================
   NAVBAR ULTRA-MODERNE
========================================== */
.navbar-ultra-modern {
    background: linear-gradient(135deg, var(--primary) 0%, var(--secondary) 100%);
    backdrop-filter: blur(10px);
    border-bottom: 1px solid rgba(255, 255, 255, 0.1);
    box-shadow: var(--shadow-lg);
    padding: 0.75rem 2rem;
    position: sticky;
    top: 0;
    z-index: 1030;
    animation: slideDown 0.5s ease-out;
}

@keyframes slideDown {
    from {
        transform: translateY(-100%);
        opacity: 0;
    }
    to {
        transform: translateY(0);
        opacity: 1;
    }
}

.navbar {
    display: flex;
    justify-content: space-between;
    align-items: center;
    max-width: 1400px;
    margin: 0 auto;
}

.navbar-nav {
    display: flex;
    list-style: none;
    align-items: center;
    gap: 0.5rem;
    padding: 0;
    margin: 0;
}

/* Toggle & Icon Links */
.nav-link-icon {
    color: rgba(255, 255, 255, 0.95);
    padding: 0.65rem 0.85rem;
    border-radius: var(--radius-sm);
    transition: var(--transition);
    font-size: 1.1rem;
    cursor: pointer;
    display: flex;
    align-items: center;
    justify-content: center;
    position: relative;
    background: transparent;
    border: none;
    text-decoration: none;
}

.nav-link-icon:hover {
    background: rgba(255, 255, 255, 0.15);
    color: #fff;
    transform: translateY(-2px);
    text-decoration: none;
}

.nav-link-icon:active {
    transform: translateY(0);
}

.nav-link-icon:focus-visible {
    outline: 2px solid white;
    outline-offset: 2px;
}

/* Brand */
.navbar-brand-text {
    color: #fff !important;
    font-weight: 700;
    padding: 0.5rem 1rem !important;
    transition: var(--transition);
    text-decoration: none;
    display: flex;
    align-items: center;
    border-radius: var(--radius-sm);
}

.navbar-brand-text:hover {
    background: rgba(255, 255, 255, 0.1);
    color: rgba(255, 255, 255, 0.95) !important;
    text-decoration: none;
}

.navbar-brand-text:focus-visible {
    outline: 2px solid white;
    outline-offset: 2px;
}

.brand-full {
    font-size: 1rem;
}

.brand-short {
    display: none;
    font-size: 1.2rem;
    font-weight: 800;
    letter-spacing: 1px;
}

/* Badges animés */
.navbar-badge {
    position: absolute;
    top: 4px;
    right: 4px;
    font-size: 0.65rem;
    padding: 0.25rem 0.45rem;
    border-radius: 10px;
    font-weight: 700;
    min-width: 18px;
    text-align: center;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.2);
}

.badge-pulse {
    animation: pulse 2s infinite;
}

@keyframes pulse {
    0%, 100% {
        transform: scale(1);
        opacity: 1;
    }
    50% {
        transform: scale(1.1);
        opacity: 0.9;
    }
}

.badge-danger {
    background: var(--danger);
    color: white;
}

.badge-info {
    background: var(--info);
    color: white;
}

/* ==========================================
   USER NAVIGATION PANEL
========================================== */
.user-menu-link {
    color: #fff !important;
    padding: 0.5rem 1rem !important;
    border-radius: var(--radius);
    transition: var(--transition);
    background: rgba(255, 255, 255, 0.1);
    text-decoration: none;
    display: flex;
    align-items: center;
}

.user-menu-link:hover {
    background: rgba(255, 255, 255, 0.2);
    transform: translateY(-2px);
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
    text-decoration: none;
    color: #fff !important;
}

.user-menu-link:focus-visible {
    outline: 2px solid white;
    outline-offset: 2px;
}

.user-panel-nav {
    display: flex;
    align-items: center;
    gap: 0.75rem;
}

.user-avatar-nav {
    width: 36px;
    height: 36px;
    border-radius: 50%;
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    display: flex;
    align-items: center;
    justify-content: center;
    color: #fff;
    font-weight: 700;
    font-size: 0.9rem;
    box-shadow: 0 4px 12px rgba(102, 126, 234, 0.4);
    border: 2px solid rgba(255, 255, 255, 0.3);
}

.user-info {
    display: flex;
    flex-direction: column;
    align-items: flex-start;
}

.user-name {
    font-weight: 700;
    font-size: 0.9rem;
    color: #fff;
    line-height: 1.2;
    letter-spacing: 0.3px;
}

.user-role {
    font-size: 0.75rem;
    color: rgba(255, 255, 255, 0.85);
    font-weight: 500;
}

.dropdown-arrow {
    font-size: 0.75rem;
    transition: var(--transition);
}

.user-menu-link[aria-expanded="true"] .dropdown-arrow {
    transform: rotate(180deg);
}

/* ==========================================
   DROPDOWNS ULTRA-MODERNES
========================================== */
.dropdown-menu-ultra {
    border: none;
    border-radius: var(--radius-lg);
    box-shadow: var(--shadow-xl);
    padding: 0;
    min-width: 360px;
    margin-top: 0.75rem;
    background: white;
    overflow: hidden;
    animation: dropdownSlideIn 0.3s ease-out;
}

@keyframes dropdownSlideIn {
    from {
        opacity: 0;
        transform: translateY(-10px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

.dropdown-header-modern {
    padding: 1.25rem 1.5rem;
    background: linear-gradient(135deg, var(--gray-50) 0%, white 100%);
    border-bottom: 1px solid var(--gray-200);
}

.header-title {
    font-size: 1rem;
    font-weight: 700;
    color: var(--gray-800);
}

.badge-primary {
    background: var(--primary);
    color: white;
}

.badge-rounded {
    padding: 0.25rem 0.65rem;
    border-radius: 12px;
    font-size: 0.75rem;
    font-weight: 700;
}

.dropdown-body {
    max-height: 400px;
    overflow-y: auto;
    padding: 0.5rem 0;
}

.dropdown-body::-webkit-scrollbar {
    width: 6px;
}

.dropdown-body::-webkit-scrollbar-track {
    background: var(--gray-100);
}

.dropdown-body::-webkit-scrollbar-thumb {
    background: var(--gray-300);
    border-radius: 3px;
}

.dropdown-body::-webkit-scrollbar-thumb:hover {
    background: var(--gray-400);
}

/* Notification Items */
.notification-item-modern {
    padding: 0;
    transition: var(--transition);
    border-left: 3px solid transparent;
    text-decoration: none;
    color: inherit;
    display: block;
}

.notification-item-modern:hover {
    background: var(--gray-50);
    border-left-color: var(--primary);
    text-decoration: none;
    color: inherit;
}

.notification-item-modern:focus-visible {
    outline: 2px solid var(--primary);
    outline-offset: -2px;
}

.notification-content {
    display: flex;
    align-items: flex-start;
    gap: 1rem;
    padding: 1rem 1.5rem;
}

.notification-icon-modern {
    width: 42px;
    height: 42px;
    border-radius: var(--radius);
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
    box-shadow: var(--shadow);
}

.notification-icon-modern i {
    color: #fff;
    font-size: 1.1rem;
}

.bg-gradient-warning {
    background: linear-gradient(135deg, #f59e0b 0%, #d97706 100%);
}

.bg-gradient-info {
    background: linear-gradient(135deg, #3b82f6 0%, #2563eb 100%);
}

.bg-gradient-success {
    background: linear-gradient(135deg, #10b981 0%, #059669 100%);
}

.bg-gradient-secondary {
    background: linear-gradient(135deg, #6b7280 0%, #4b5563 100%);
}

.bg-gradient-teal {
    background: linear-gradient(135deg, #14b8a6 0%, #0d9488 100%);
}

.notification-details {
    flex: 1;
    min-width: 0;
}

.notification-title-modern {
    font-size: 0.9rem;
    font-weight: 700;
    margin-bottom: 0.25rem;
    color: var(--gray-800);
}

.notification-text-modern {
    font-size: 0.85rem;
    color: var(--gray-600);
    margin-bottom: 0.5rem;
    line-height: 1.4;
}

.notification-meta {
    display: flex;
    align-items: center;
    gap: 0.35rem;
    font-size: 0.75rem;
    color: var(--gray-500);
}

/* User Avatar Small */
.user-avatar-small {
    width: 42px;
    height: 42px;
    border-radius: 50%;
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    display: flex;
    align-items: center;
    justify-content: center;
    color: #fff;
    font-weight: 700;
    font-size: 0.9rem;
    box-shadow: var(--shadow);
    flex-shrink: 0;
}

/* Footer */
.dropdown-footer-modern {
    padding: 0.75rem 1.5rem;
    background: var(--gray-50);
    border-top: 1px solid var(--gray-200);
    text-align: center;
}

.footer-link {
    color: var(--primary);
    font-weight: 700;
    font-size: 0.875rem;
    transition: var(--transition);
    text-decoration: none;
    display: inline-flex;
    align-items: center;
}

.footer-link:hover {
    color: var(--primary-dark);
    text-decoration: none;
    transform: translateX(3px);
}

.footer-link:focus-visible {
    outline: 2px solid var(--primary);
    outline-offset: 2px;
}

/* ==========================================
   USER DROPDOWN MENU
========================================== */
.user-dropdown-menu {
    min-width: 320px;
}

.user-dropdown-header {
    padding: 1.5rem;
    background: linear-gradient(135deg, var(--primary) 0%, var(--secondary) 100%);
    position: relative;
    overflow: hidden;
}

.user-dropdown-header::before {
    content: '';
    position: absolute;
    top: -50%;
    right: -20%;
    width: 200px;
    height: 200px;
    background: radial-gradient(circle, rgba(255,255,255,0.2) 0%, transparent 70%);
    animation: float 6s ease-in-out infinite;
}

@keyframes float {
    0%, 100% { transform: translate(0, 0) rotate(0deg); }
    50% { transform: translate(-20px, 20px) rotate(180deg); }
}

.user-header-content {
    display: flex;
    align-items: center;
    gap: 1rem;
    position: relative;
    z-index: 1;
}

.user-avatar-large {
    width: 56px;
    height: 56px;
    border-radius: 50%;
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    display: flex;
    align-items: center;
    justify-content: center;
    color: #fff;
    font-weight: 700;
    font-size: 1.4rem;
    box-shadow: 0 6px 20px rgba(0, 0, 0, 0.25);
    border: 3px solid rgba(255, 255, 255, 0.3);
    position: relative;
}

.online-indicator {
    position: absolute;
    bottom: 2px;
    right: 2px;
    width: 14px;
    height: 14px;
    background: #10b981;
    border: 2px solid white;
    border-radius: 50%;
    animation: pulse-indicator 2s infinite;
}

@keyframes pulse-indicator {
    0%, 100% { transform: scale(1); opacity: 1; }
    50% { transform: scale(1.2); opacity: 0.8; }
}

.user-header-info {
    flex: 1;
}

.user-header-name {
    font-size: 1rem;
    font-weight: 700;
    color: white;
    margin-bottom: 0.25rem;
}

.user-header-email {
    font-size: 0.8rem;
    color: rgba(255, 255, 255, 0.9);
    margin-bottom: 0.5rem;
}

.user-header-badge {
    display: inline-block;
    padding: 0.25rem 0.75rem;
    background: rgba(255, 255, 255, 0.2);
    border-radius: 20px;
    font-size: 0.7rem;
    font-weight: 600;
    color: white;
    backdrop-filter: blur(10px);
}

/* Menu Items Ultra */
.dropdown-item-ultra {
    padding: 1rem 1.5rem;
    transition: var(--transition);
    border-left: 3px solid transparent;
    text-decoration: none;
    color: inherit;
    display: flex;
    align-items: center;
    gap: 1rem;
}

.dropdown-item-ultra:hover {
    background: var(--gray-50);
    border-left-color: var(--primary);
    text-decoration: none;
    transform: translateX(3px);
    color: inherit;
}

.dropdown-item-ultra:focus-visible {
    outline: 2px solid var(--primary);
    outline-offset: -2px;
}

.item-icon {
    width: 40px;
    height: 40px;
    border-radius: var(--radius);
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
    box-shadow: var(--shadow-sm);
}

.item-icon i {
    color: white;
    font-size: 1rem;
}

.item-content {
    flex: 1;
    display: flex;
    flex-direction: column;
}

.item-title {
    font-size: 0.9rem;
    font-weight: 700;
    color: var(--gray-800);
    margin-bottom: 0.15rem;
}

.item-desc {
    font-size: 0.75rem;
    color: var(--gray-500);
}

.item-arrow {
    font-size: 0.8rem;
    color: var(--gray-400);
    transition: var(--transition);
}

.dropdown-item-ultra:hover .item-arrow {
    color: var(--primary);
    transform: translateX(3px);
}

.item-badge {
    padding: 0.25rem 0.6rem;
    background: var(--danger);
    color: white;
    border-radius: 12px;
    font-size: 0.7rem;
    font-weight: 700;
}

/* Logout Button */
.logout-button {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 0.5rem;
    width: 100%;
    padding: 0.85rem;
    background: linear-gradient(135deg, #ef4444 0%, #dc2626 100%);
    color: white;
    border-radius: var(--radius);
    font-weight: 700;
    font-size: 0.9rem;
    transition: var(--transition);
    border: none;
    cursor: pointer;
    text-decoration: none;
    box-shadow: var(--shadow);
}

.logout-button:hover {
    background: linear-gradient(135deg, #dc2626 0%, #b91c1c 100%);
    transform: translateY(-2px);
    box-shadow: var(--shadow-md);
    color: white;
    text-decoration: none;
}

.logout-button:focus-visible {
    outline: 2px solid white;
    outline-offset: 2px;
}

/* ==========================================
   MODAL ULTRA-MODERNE
========================================== */
.modal-dialog-ultra {
    max-width: 500px;
}

.modal-ultra {
    border-radius: var(--radius-xl);
    overflow: hidden;
    border: none;
    box-shadow: var(--shadow-xl);
}

.modal-header-ultra {
    background: linear-gradient(135deg, var(--primary) 0%, var(--secondary) 100%);
    color: white;
    padding: 2rem;
    border-bottom: none;
    display: flex;
    align-items: flex-start;
    justify-content: space-between;
    position: relative;
    overflow: hidden;
}

.modal-header-ultra::before {
    content: '';
    position: absolute;
    top: -50%;
    left: -50%;
    width: 200%;
    height: 200%;
    background: radial-gradient(circle, rgba(255,255,255,0.1) 0%, transparent 70%);
    animation: rotate 20s linear infinite;
}

@keyframes rotate {
    from { transform: rotate(0deg); }
    to { transform: rotate(360deg); }
}

.modal-header-content {
    display: flex;
    align-items: center;
    gap: 1rem;
    position: relative;
    z-index: 1;
}

.modal-icon-wrapper {
    width: 50px;
    height: 50px;
    border-radius: var(--radius);
    background: rgba(255, 255, 255, 0.2);
    backdrop-filter: blur(10px);
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.5rem;
    box-shadow: var(--shadow);
}

.modal-title-ultra {
    font-size: 1.4rem;
    font-weight: 700;
    margin-bottom: 0.25rem;
}

.modal-subtitle-ultra {
    font-size: 0.9rem;
    color: rgba(255, 255, 255, 0.95);
    margin: 0;
    font-weight: 500;
}

.close-ultra {
    background: rgba(255, 255, 255, 0.2);
    border: none;
    color: white;
    width: 36px;
    height: 36px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    transition: var(--transition);
    font-size: 1.2rem;
    position: relative;
    z-index: 1;
}

.close-ultra:hover {
    background: rgba(255, 255, 255, 0.3);
    transform: rotate(90deg);
}

.close-ultra:focus-visible {
    outline: 2px solid white;
    outline-offset: 2px;
}

/* Modal Body */
.modal-body-ultra {
    padding: 2rem;
    background: white;
}

/* Form Groups Ultra */
.form-group-ultra {
    margin-bottom: 1.75rem;
}

.form-label-ultra {
    display: flex;
    align-items: center;
    gap: 0.5rem;
    font-weight: 700;
    font-size: 0.9rem;
    color: var(--gray-800);
    margin-bottom: 0.75rem;
}

.form-label-ultra i {
    color: var(--primary);
    font-size: 1rem;
}

.input-wrapper {
    position: relative;
}

.form-control-ultra {
    width: 100%;
    border: 2px solid var(--gray-200);
    border-radius: var(--radius);
    padding: 0.85rem 1rem;
    padding-right: 3rem;
    font-size: 0.95rem;
    transition: var(--transition);
    background: var(--gray-50);
    color: var(--gray-800);
}

.form-control-ultra:focus {
    outline: none;
    border-color: var(--primary);
    background: white;
    box-shadow: 0 0 0 4px rgba(14, 105, 57, 0.1);
}

.form-control-ultra:invalid:not(:placeholder-shown) {
    border-color: var(--danger);
}

.input-icon {
    position: absolute;
    right: 1rem;
    top: 50%;
    transform: translateY(-50%);
    color: var(--gray-400);
    transition: var(--transition);
    pointer-events: none;
}

.form-control-ultra:focus + .input-icon {
    color: var(--primary);
}

.input-toggle {
    position: absolute;
    right: 1rem;
    top: 50%;
    transform: translateY(-50%);
    background: transparent;
    border: none;
    color: var(--gray-400);
    cursor: pointer;
    padding: 0.5rem;
    transition: var(--transition);
    border-radius: 6px;
    z-index: 10;
}

.input-toggle:hover {
    background: var(--gray-100);
    color: var(--gray-600);
}

.input-toggle:focus-visible {
    outline: 2px solid var(--primary);
    outline-offset: 2px;
}

.form-hint {
    display: block;
    margin-top: 0.5rem;
    font-size: 0.8rem;
    color: var(--gray-500);
}

/* Password Strength Indicator */
.password-strength {
    margin-top: 0.75rem;
    height: 4px;
    background: var(--gray-200);
    border-radius: 2px;
    overflow: hidden;
    opacity: 0;
    transition: var(--transition);
}

.password-strength.active {
    opacity: 1;
}

.strength-bar {
    height: 100%;
    width: 0%;
    transition: all 0.3s ease;
    border-radius: 2px;
}

.strength-weak .strength-bar {
    width: 33%;
    background: var(--danger);
}

.strength-medium .strength-bar {
    width: 66%;
    background: var(--warning);
}

.strength-strong .strength-bar {
    width: 100%;
    background: var(--success);
}

/* Section Divider */
.section-divider {
    position: relative;
    text-align: center;
    margin: 2rem 0;
}

.section-divider::before {
    content: '';
    position: absolute;
    top: 50%;
    left: 0;
    right: 0;
    height: 2px;
    background: linear-gradient(90deg, transparent 0%, var(--gray-200) 50%, transparent 100%);
}

.divider-text {
    display: inline-block;
    background: white;
    padding: 0 1.5rem;
    position: relative;
    font-size: 0.875rem;
    color: var(--gray-600);
    font-weight: 700;
}

/* Modal Footer */
.modal-footer-ultra {
    display: flex;
    justify-content: flex-end;
    gap: 1rem;
    padding-top: 2rem;
    margin-top: 2rem;
    border-top: 2px solid var(--gray-100);
}

.btn-ultra {
    display: flex;
    align-items: center;
    gap: 0.5rem;
    padding: 0.85rem 1.75rem;
    border: none;
    border-radius: var(--radius);
    font-weight: 700;
    font-size: 0.9rem;
    cursor: pointer;
    transition: var(--transition);
    box-shadow: var(--shadow-sm);
}

.btn-ultra:focus-visible {
    outline: 2px solid var(--primary);
    outline-offset: 2px;
}

.btn-cancel {
    background: var(--gray-100);
    color: var(--gray-700);
}

.btn-cancel:hover {
    background: var(--gray-200);
    transform: translateY(-2px);
    box-shadow: var(--shadow);
}

.btn-submit {
    background: linear-gradient(135deg, var(--primary) 0%, var(--secondary) 100%);
    color: white;
}

.btn-submit:hover {
    transform: translateY(-2px);
    box-shadow: var(--shadow-lg);
}

.btn-submit:active {
    transform: translateY(0);
}

.btn-submit:disabled {
    opacity: 0.6;
    cursor: not-allowed;
    transform: none;
}

/* ==========================================
   RESPONSIVE DESIGN
========================================== */
@media (max-width: 1200px) {
    .brand-full { display: none; }
    .brand-short { display: inline; }
}

@media (max-width: 991px) {
    .navbar-ultra-modern {
        padding: 0.75rem 1rem;
    }
    
    .user-info {
        display: none !important;
    }
    
    .dropdown-menu-ultra {
        min-width: 300px;
    }
}

@media (max-width: 576px) {
    .navbar-ultra-modern {
        padding: 0.5rem 0.75rem;
    }
    
    .nav-link-icon {
        padding: 0.5rem;
    }
    
    .dropdown-menu-ultra {
        min-width: 280px;
        margin-left: -100px;
    }
    
    .notification-content,
    .dropdown-item-ultra {
        padding: 0.85rem 1rem;
    }
    
    .modal-dialog-ultra {
        margin: 0.5rem;
    }
    
    .modal-header-ultra,
    .modal-body-ultra {
        padding: 1.5rem;
    }
    
    .btn-ultra {
        padding: 0.75rem 1.25rem;
        font-size: 0.85rem;
    }
}

@media (max-width: 400px) {
    .brand-short {
        font-size: 1rem;
    }
    
    .notification-icon-modern,
    .user-avatar-small {
        width: 36px;
        height: 36px;
    }
    
    .notification-title-modern {
        font-size: 0.85rem;
    }
    
    .notification-text-modern {
        font-size: 0.8rem;
    }
}

/* ==========================================
   UTILITIES
========================================== */
.d-none { display: none !important; }
.d-flex { display: flex !important; }
.d-inline { display: inline !important; }
.d-inline-flex { display: inline-flex !important; }
.align-items-center { align-items: center !important; }
.justify-content-between { justify-content: space-between !important; }
.ml-auto { margin-left: auto !important; }
.mr-1 { margin-right: 0.25rem !important; }
.mr-2 { margin-right: 0.5rem !important; }
.ml-2 { margin-left: 0.5rem !important; }
.ml-3 { margin-left: 1rem !important; }
.mb-0 { margin-bottom: 0 !important; }
.position-relative { position: relative !important; }

@media (min-width: 768px) {
    .d-md-flex { display: flex !important; }
}

@media (min-width: 992px) {
    .d-lg-block { display: block !important; }
    .d-lg-flex { display: flex !important; }
    .d-lg-inline { display: inline !important; }
}

/* ==========================================
   ANIMATIONS & ACCESSIBILITÉ
========================================== */
@keyframes fadeIn {
    from {
        opacity: 0;
        transform: translateY(10px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

.fade-in {
    animation: fadeIn 0.4s ease-out;
}

a, button, input, select, textarea {
    transition: var(--transition);
}

:focus-visible {
    outline: 2px solid var(--primary);
    outline-offset: 2px;
}

@media (prefers-reduced-motion: reduce) {
    *,
    *::before,
    *::after {
        animation-duration: 0.01ms !important;
        animation-iteration-count: 1 !important;
        transition-duration: 0.01ms !important;
    }
}
</style>

<script>
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

$(document).ready(function() {
    // Gestion des dropdowns avec ARIA
    $('.dropdown-toggle, [data-toggle="dropdown"]').dropdown();
    
    $('[data-toggle="dropdown"]').on('show.bs.dropdown', function() {
        $(this).attr('aria-expanded', 'true');
    }).on('hide.bs.dropdown', function() {
        $(this).attr('aria-expanded', 'false');
    });
    
    // Navbar scroll effect
    const handleScroll = debounce(function() {
        if ($(window).scrollTop() > 50) {
            $('.main-header').addClass('scrolled');
        } else {
            $('.main-header').removeClass('scrolled');
        }
    }, 100);
    
    $(window).on('scroll', handleScroll);
    
    // Ouvrir modal compte
    $('#manage_account').on('click', function(e) {
        e.preventDefault();
        $('#accountModal').modal('show');
    });
    
    // Password strength indicator
    $('#password').on('input', function() {
        const password = $(this).val();
        const strengthIndicator = $('#password-strength');
        
        if (password.length === 0) {
            strengthIndicator.removeClass('active strength-weak strength-medium strength-strong');
            strengthIndicator.attr('aria-valuenow', 0);
            return;
        }
        
        strengthIndicator.addClass('active');
        
        let strength = 0;
        let strengthPercentage = 0;
        
        if (password.length >= 8) strength++;
        if (/[a-z]/.test(password) && /[A-Z]/.test(password)) strength++;
        if (/[0-9]/.test(password)) strength++;
        if (/[^a-zA-Z0-9]/.test(password)) strength++;
        
        strengthIndicator.removeClass('strength-weak strength-medium strength-strong');
        
        if (strength <= 2) {
            strengthIndicator.addClass('strength-weak');
            strengthPercentage = 33;
        } else if (strength === 3) {
            strengthIndicator.addClass('strength-medium');
            strengthPercentage = 66;
        } else {
            strengthIndicator.addClass('strength-strong');
            strengthPercentage = 100;
        }
        
        strengthIndicator.attr('aria-valuenow', strengthPercentage);
    });
    
    // Formulaire AJAX de mise à jour
    $('#updateAccountForm').on('submit', function(event) {
        event.preventDefault();

        const form = $(this);
        const password = $('#password').val();
        const passwordConfirmation = $('#password_confirmation').val();
        const submitButton = form.find('.btn-submit');

        if (password && password !== passwordConfirmation) {
            Swal.fire({
                icon: 'error',
                title: 'Erreur',
                text: 'Les mots de passe ne correspondent pas.',
                confirmButtonColor: '#0e6939',
                confirmButtonText: 'OK'
            });
            return;
        }

        if (password && password.length < 8) {
            Swal.fire({
                icon: 'error',
                title: 'Erreur',
                text: 'Le mot de passe doit contenir au moins 8 caractères.',
                confirmButtonColor: '#0e6939',
                confirmButtonText: 'OK'
            });
            return;
        }

        submitButton.prop('disabled', true)
                    .attr('aria-busy', 'true')
                    .html('<i class="fas fa-spinner fa-spin"></i><span>Enregistrement...</span>');

        $.ajax({
            url: form.attr('action'),
            method: 'POST',
            data: form.serialize(),
            success: function(resp) {
                Swal.fire({
                    icon: 'success',
                    title: 'Succès !',
                    text: 'Vos informations ont été mises à jour avec succès.',
                    confirmButtonColor: '#0e6939',
                    confirmButtonText: 'OK',
                    timer: 2000,
                    timerProgressBar: true
                });
                
                setTimeout(() => {
                    $('#accountModal').modal('hide');
                    location.reload();
                }, 2000);
            },
            error: function(xhr) {
                Swal.fire({
                    icon: 'error',
                    title: 'Erreur',
                    text: xhr.responseJSON?.message || 'Une erreur est survenue lors de la mise à jour.',
                    confirmButtonColor: '#0e6939',
                    confirmButtonText: 'OK'
                });
                
                submitButton.prop('disabled', false)
                            .attr('aria-busy', 'false')
                            .html('<i class="fas fa-save"></i><span>Enregistrer</span>');
            }
        });
    });
    
    // Reset form on modal close
    $('#accountModal').on('hidden.bs.modal', function() {
        $('#updateAccountForm')[0].reset();
        $('#password-strength').removeClass('active strength-weak strength-medium strength-strong')
                               .attr('aria-valuenow', 0);
    });
    
    // Fermeture avec Escape
    $(document).on('keydown', function(e) {
        if (e.key === 'Escape') {
            $('.dropdown-menu.show').dropdown('hide');
            $('#accountModal').modal('hide');
        }
    });
    
    // Animation au chargement
    setTimeout(function() {
        $('.navbar-ultra-modern').addClass('fade-in');
    }, 100);
});

function togglePassword(fieldId) {
    const field = document.getElementById(fieldId);
    const icon = document.getElementById(fieldId + '-icon');
    const button = event.currentTarget;
    
    if (field.type === 'password') {
        field.type = 'text';
        icon.classList.remove('fa-eye');
        icon.classList.add('fa-eye-slash');
        button.setAttribute('aria-pressed', 'true');
        button.setAttribute('aria-label', 'Masquer le mot de passe');
    } else {
        field.type = 'password';
        icon.classList.remove('fa-eye-slash');
        icon.classList.add('fa-eye');
        button.setAttribute('aria-pressed', 'false');
        button.setAttribute('aria-label', 'Afficher le mot de passe');
    }
}

function logoutUser() {
    Swal.fire({
        title: 'Déconnexion',
        text: 'Voulez-vous vraiment vous déconnecter ?',
        icon: 'question',
        showCancelButton: true,
        confirmButtonColor: '#0e6939',
        cancelButtonColor: '#6b7280',
        confirmButtonText: 'Oui, déconnecter',
        cancelButtonText: 'Annuler'
    }).then((result) => {
        if (result.isConfirmed) {
            document.getElementById('logout-form').submit();
        }
    });
}
</script>