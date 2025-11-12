<!-- Sidebar Optimisée -->

<!-- Sidebar Optimisée -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('struct.dashboard') }}" class="brand-link text-center">
        <img src="{{ asset('images/logo.png') }}" alt="{{ config('app.name') }} Logo" class="brand-image img-circle elevation-3">
        <span class="brand-text font-weight-bold">{{ config('app.name') }}</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- User Panel -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex align-items-center">
            <div class="image">
                <div class="user-avatar" role="img" aria-label="Avatar utilisateur">
                    <span class="user-initial">
                        {{ strtoupper(substr(auth()->user()?->profil->nom_profil ?? 'U', 0, 1)) }}
                    </span>
                </div>
            </div>
            <div class="info">
                <a href="#" class="d-block text-white font-weight-bold">
                    {{ auth()->user()?->profil->nom_profil ?? 'U' }}
                </a>
                <small class="d-block text-muted">
                    <i class="fas fa-circle text-success mr-1 status-indicator" aria-hidden="true"></i>
                    En ligne
                </small>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2" aria-label="Menu principal">
            <ul class="nav nav-pills nav-sidebar flex-column nav-child-indent" data-widget="treeview" role="menu" data-accordion="false">
                
                <!-- Tableau de bord -->
                <li class="nav-item">
                    <a href="{{ route('struct.dashboard') }}" class="nav-link {{ request()->routeIs('struct.dashboard') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-tachometer-alt" aria-hidden="true"></i>
                        <p>Tableau de bord</p>
                    </a>
                </li>

                <!-- SECTION: ADMINISTRATION -->
                <li class="nav-header">ADMINISTRATION</li>

                <!-- Gestion des utilisateurs -->
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-users-cog" aria-hidden="true"></i>
                        <p>
                            Utilisateurs & Profils
                            <i class="right fas fa-angle-left" aria-hidden="true"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fas fa-user-plus nav-icon text-primary" aria-hidden="true"></i>
                                <p>Créer utilisateur</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fas fa-id-card nav-icon text-info" aria-hidden="true"></i>
                                <p>Créer profil</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fas fa-list nav-icon" aria-hidden="true"></i>
                                <p>Liste des utilisateurs</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <!-- Gestion des structures -->
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-building" aria-hidden="true"></i>
                        <p>
                            Structures & Domaines
                            <i class="right fas fa-angle-left" aria-hidden="true"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fas fa-map-marked-alt nav-icon text-success" aria-hidden="true"></i>
                                <p>Domaines & Secteurs</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fas fa-filter nav-icon text-primary" aria-hidden="true"></i>
                                <p>Filières activités</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fas fa-sitemap nav-icon text-info" aria-hidden="true"></i>
                                <p>Types de structures</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fas fa-weight nav-icon text-warning" aria-hidden="true"></i>
                                <p>Critères de pondération</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <!-- Gestion des besoins -->
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-clipboard-list" aria-hidden="true"></i>
                        <p>
                            Types de besoins
                            <i class="right fas fa-angle-left" aria-hidden="true"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fas fa-wrench nav-icon text-danger" aria-hidden="true"></i>
                                <p>Technique</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fas fa-graduation-cap nav-icon text-info" aria-hidden="true"></i>
                                <p>Formation</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fas fa-dollar-sign nav-icon text-success" aria-hidden="true"></i>
                                <p>Financier</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fas fa-ellipsis-h nav-icon text-secondary" aria-hidden="true"></i>
                                <p>Autres</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <!-- SECTION: ENRÔLEMENTS & DEMANDES -->
                <li class="nav-header">ENRÔLEMENTS & DEMANDES</li>

                <!-- Enrôlement des demandes -->
                <li class="nav-item">
                    <a href="{{ route('struct.enrolement') }}" class="nav-link {{ request()->routeIs('struct.enrolement') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-user-plus" aria-hidden="true"></i>
                        <p>Enrôlement des demandes</p>
                    </a>
                </li>

                <!-- Suivi des demandes -->
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-search-plus" aria-hidden="true"></i>
                        <p>Suivi des demandes</p>
                    </a>
                </li>

                <!-- Validation des demandes -->
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-check-circle" aria-hidden="true"></i>
                        <p>
                            Validation des demandes
                            <i class="right fas fa-angle-left" aria-hidden="true"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-clock nav-icon text-warning" aria-hidden="true"></i>
                                <p>En attente</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-check-circle nav-icon text-success" aria-hidden="true"></i>
                                <p>Validées</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-times-circle nav-icon text-danger" aria-hidden="true"></i>
                                <p>Rejetées</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fas fa-th-list nav-icon text-info" aria-hidden="true"></i>
                                <p>Toutes</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <!-- Validation préfectures -->
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-landmark" aria-hidden="true"></i>
                        <p>Validation préfectures</p>
                    </a>
                </li>

                <!-- SECTION: COMPTES AGENTS -->
                <li class="nav-header">COMPTES AGENTS</li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-folder-open" aria-hidden="true"></i>
                        <p>Ouverture comptes agents</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-users" aria-hidden="true"></i>
                        <p>Liste bénéficiaires agréés</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-file-invoice" aria-hidden="true"></i>
                        <p>Liste demandes de besoins</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-info-circle" aria-hidden="true"></i>
                        <p>Info bénéficiaires agréés</p>
                    </a>
                </li>

                <!-- SECTION: COMITÉS -->
                <li class="nav-header">COMITÉS & CONFORMITÉ</li>

                <!-- Gestion des comités -->
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-users" aria-hidden="true"></i>
                        <p>
                            Gestion des comités
                            <i class="right fas fa-angle-left" aria-hidden="true"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fas fa-plus-circle nav-icon text-success" aria-hidden="true"></i>
                                <p>Créer un comité</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fas fa-th-list nav-icon text-primary" aria-hidden="true"></i>
                                <p>Liste des comités</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fas fa-users-cog nav-icon text-info" aria-hidden="true"></i>
                                <p>Membres</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fas fa-folder nav-icon text-warning" aria-hidden="true"></i>
                                <p>Dossiers validés</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <!-- Validation comité conformité -->
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-check-double" aria-hidden="true"></i>
                        <p>Validation comité conformité</p>
                    </a>
                </li>

                <!-- SECTION: PROCÈS-VERBAUX & DOCUMENTS -->
                <li class="nav-header">PV & DOCUMENTS</li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-file-signature" aria-hidden="true"></i>
                        <p>Élaboration du PV</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-file-contract" aria-hidden="true"></i>
                        <p>
                            Validation Agrément
                            <i class="right fas fa-angle-left" aria-hidden="true"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fas fa-edit nav-icon text-primary" aria-hidden="true"></i>
                                <p>Agrément + Signature</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fas fa-list-alt nav-icon text-info" aria-hidden="true"></i>
                                <p>Liste des agréments</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-receipt" aria-hidden="true"></i>
                        <p>Délivrer récépissé CPS</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-folder-open" aria-hidden="true"></i>
                        <p>Documents</p>
                    </a>
                </li>

                <!-- SECTION: AFFECTATIONS -->
                <li class="nav-header">AFFECTATIONS</li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-tasks" aria-hidden="true"></i>
                        <p>
                            Mes affectations
                            <i class="right fas fa-angle-left" aria-hidden="true"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fas fa-plus-square nav-icon text-primary" aria-hidden="true"></i>
                                <p>Créer</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fas fa-spinner nav-icon text-warning" aria-hidden="true"></i>
                                <p>En cours</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fas fa-check-double nav-icon text-success" aria-hidden="true"></i>
                                <p>Terminées</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fas fa-th-list nav-icon text-info" aria-hidden="true"></i>
                                <p>Toutes</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <!-- SECTION: COMMUNICATION -->
                <li class="nav-header">COMMUNICATION</li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-bell text-warning" aria-hidden="true"></i>
                        <p>
                            Notifications
                            <i class="right fas fa-angle-left" aria-hidden="true"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fas fa-paper-plane nav-icon" aria-hidden="true"></i>
                                <p>Envoyer</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fas fa-inbox nav-icon" aria-hidden="true"></i>
                                <p>Reçues <span class="badge badge-info right">7</span></p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fas fa-history nav-icon" aria-hidden="true"></i>
                                <p>Historique</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <!-- SECTION: COMPTE -->
                <li class="nav-header">COMPTE</li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-user-circle" aria-hidden="true"></i>
                        <p>Mon profil</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-cog" aria-hidden="true"></i>
                        <p>Paramètres</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-question-circle" aria-hidden="true"></i>
                        <p>Aide</p>
                    </a>
                </li>

                <!-- SECTION: SESSION -->
                <li class="nav-header">SESSION</li>

                <li class="nav-item">
                    <a class="nav-link text-danger-hover" href="#" onclick="event.preventDefault(); logoutUser();">
                        <i class="nav-icon fas fa-sign-out-alt" aria-hidden="true"></i>
                        <p>Déconnexion</p>
                    </a>
                    <form id="logout-form" action="#" method="POST" class="d-none">
                        @csrf
                    </form>
                </li>
            </ul>
        </nav>
    </div>
</aside>

<style>
/* ==========================================
   SIDEBAR - STYLE MODERNE OPTIMISÉ
   ========================================== */

:root {
    --sidebar-bg-start: #1a1a2e;
    --sidebar-bg-end: #16213e;
    --sidebar-accent: #667eea;
    --sidebar-accent-end: #764ba2;
    --sidebar-active-start: #0e6939;
    --sidebar-active-end: #199543;
    --sidebar-text: rgba(255,255,255,0.85);
    --sidebar-text-hover: #fff;
    --sidebar-border: rgba(255,255,255,0.1);
    --sidebar-hover-bg: rgba(255,255,255,0.08);
}

/* Fond du sidebar avec gradient premium */
.main-sidebar {
    background: linear-gradient(180deg, var(--sidebar-bg-start) 0%, var(--sidebar-bg-end) 100%) !important;
    box-shadow: 2px 0 15px rgba(0, 0, 0, 0.3);
    will-change: transform;
}

/* Brand Link - Logo et nom */
.brand-link {
    border-bottom: 1px solid var(--sidebar-border) !important;
    padding: 18px 15px !important;
    transition: background 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    background: rgba(255,255,255,0.02);
}

.brand-link:hover {
    background: rgba(255,255,255,0.05);
    border-bottom-color: rgba(255,255,255,0.2) !important;
}

.brand-text {
    color: #fff !important;
    font-size: 18px;
    letter-spacing: 0.5px;
}

.brand-image {
    max-height: 38px;
    width: auto;
    filter: drop-shadow(0 2px 4px rgba(0,0,0,0.2));
    opacity: 0.8;
}

/* ==========================================
   USER PANEL
   ========================================== */

.user-panel {
    border-bottom: 1px solid var(--sidebar-border);
    padding: 15px 10px !important;
    background: rgba(255,255,255,0.02);
    border-radius: 8px;
    margin: 10px 10px 15px 10px !important;
}

.user-avatar {
    width: 45px;
    height: 45px;
    border-radius: 50%;
    background: linear-gradient(135deg, var(--sidebar-accent) 0%, var(--sidebar-accent-end) 100%);
    display: flex;
    align-items: center;
    justify-content: center;
    box-shadow: 0 4px 12px rgba(102, 126, 234, 0.3);
}

.user-initial {
    color: #fff;
    font-weight: bold;
    font-size: 18px;
}

.user-panel .info a {
    font-size: 15px;
    transition: color 0.3s ease, transform 0.3s ease;
    display: inline-block;
}

.user-panel .info a:hover {
    color: var(--sidebar-accent) !important;
    transform: translateX(2px);
}

.status-indicator {
    font-size: 8px;
    animation: pulse-status 2s ease-in-out infinite;
}

@keyframes pulse-status {
    0%, 100% { opacity: 1; }
    50% { opacity: 0.5; }
}

/* ==========================================
   NAVIGATION LINKS
   ========================================== */

.nav-sidebar .nav-link {
    border-radius: 10px;
    margin: 3px 12px;
    padding: 10px 15px;
    transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    position: relative;
    overflow: hidden;
}

.nav-sidebar .nav-link::before {
    content: '';
    position: absolute;
    left: 0;
    top: 0;
    height: 100%;
    width: 3px;
    background: linear-gradient(135deg, var(--sidebar-accent) 0%, var(--sidebar-accent-end) 100%);
    transform: scaleY(0);
    transition: transform 0.3s ease;
}

.nav-sidebar .nav-link:hover::before {
    transform: scaleY(1);
}

.nav-sidebar .nav-link:hover {
    background: var(--sidebar-hover-bg) !important;
    transform: translateX(5px);
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.2);
}

.nav-sidebar .nav-link.active {
    background: linear-gradient(135deg, var(--sidebar-active-start) 0%, var(--sidebar-active-end) 100%) !important;
    box-shadow: 0 4px 20px rgba(25, 149, 67, 0.4);
    transform: translateX(5px);
}

.nav-sidebar .nav-link.active::before {
    transform: scaleY(1);
    background: #fff;
}

.nav-sidebar .nav-link p {
    color: var(--sidebar-text);
    transition: color 0.3s ease;
    font-size: 14px;
    margin: 0;
}

.nav-sidebar .nav-link.active p,
.nav-sidebar .nav-link:hover p {
    color: var(--sidebar-text-hover);
    font-weight: 500;
}

.nav-sidebar .nav-link .nav-icon {
    transition: transform 0.3s ease;
    font-size: 16px;
    width: 24px;
}

.nav-sidebar .nav-link:hover .nav-icon {
    transform: scale(1.15) translateX(2px);
}

.nav-sidebar .nav-link.active .nav-icon {
    transform: scale(1.1);
}

/* ==========================================
   HEADERS
   ========================================== */

.nav-header {
    color: rgba(255,255,255,0.4) !important;
    font-weight: 700;
    font-size: 10px;
    letter-spacing: 1.5px;
    padding: 15px 20px 8px 20px !important;
    text-transform: uppercase;
    margin-top: 10px;
    position: relative;
}

.nav-header::after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 20px;
    right: 20px;
    height: 1px;
    background: linear-gradient(90deg, 
        transparent 0%, 
        rgba(255,255,255,0.15) 20%, 
        rgba(255,255,255,0.15) 80%, 
        transparent 100%);
}

/* ==========================================
   TREEVIEW
   ========================================== */

.nav-treeview {
    background: rgba(0,0,0,0.15);
    border-radius: 8px;
    margin: 5px 10px;
    padding: 5px 0;
}

.nav-treeview .nav-link {
    padding-left: 45px !important;
    font-size: 13px;
    margin: 2px 5px;
}

.nav-treeview .nav-link:hover {
    background: rgba(255,255,255,0.1) !important;
    transform: translateX(3px);
}

.nav-treeview .nav-icon {
    font-size: 14px;
}

/* ==========================================
   BADGES
   ========================================== */

.badge {
    font-size: 10px;
    padding: 4px 8px;
    font-weight: 700;
    border-radius: 12px;
    box-shadow: 0 2px 6px rgba(0,0,0,0.3);
}

.badge-warning {
    background: linear-gradient(135deg, #f59e0b 0%, #d97706 100%);
    animation: pulse-badge 2s ease-in-out infinite;
}

.badge-info {
    background: linear-gradient(135deg, #0ea5e9 0%, #0284c7 100%);
}

@keyframes pulse-badge {
    0%, 100% { transform: scale(1); }
    50% { transform: scale(1.05); }
}

/* ==========================================
   DÉCONNEXION
   ========================================== */

.text-danger-hover p {
    color: var(--sidebar-text) !important;
    transition: color 0.3s ease;
}

.text-danger-hover:hover {
    background: rgba(239, 68, 68, 0.1) !important;
}

.text-danger-hover:hover p {
    color: #ef4444 !important;
}

.text-danger-hover .nav-icon {
    color: rgba(255,255,255,0.7);
    transition: all 0.3s ease;
}

.text-danger-hover:hover .nav-icon {
    color: #ef4444 !important;
    transform: scale(1.15) rotate(-10deg);
}

/* ==========================================
   SCROLLBAR
   ========================================== */

.sidebar::-webkit-scrollbar {
    width: 7px;
}

.sidebar::-webkit-scrollbar-track {
    background: rgba(255,255,255,0.03);
    border-radius: 10px;
}

.sidebar::-webkit-scrollbar-thumb {
    background: rgba(255,255,255,0.15);
    border-radius: 10px;
    transition: background 0.3s ease;
}

.sidebar::-webkit-scrollbar-thumb:hover {
    background: rgba(255,255,255,0.25);
}

/* ==========================================
   ANIMATIONS
   ========================================== */

@keyframes slideInLeft {
    from {
        opacity: 0;
        transform: translateX(-15px);
    }
    to {
        opacity: 1;
        transform: translateX(0);
    }
}

.nav-item {
    animation: slideInLeft 0.4s ease backwards;
}

.nav-item:nth-child(1) { animation-delay: 0.05s; }
.nav-item:nth-child(2) { animation-delay: 0.1s; }
.nav-item:nth-child(3) { animation-delay: 0.15s; }
.nav-item:nth-child(4) { animation-delay: 0.2s; }
.nav-item:nth-child(5) { animation-delay: 0.25s; }

/* ==========================================
   RESPONSIVE
   ========================================== */

@media (max-width: 991px) {
    .main-sidebar {
        margin-left: -250px;
        transition: margin-left 0.3s ease;
    }
    
    .sidebar-open .main-sidebar {
        margin-left: 0;
        box-shadow: 5px 0 20px rgba(0,0,0,0.5);
    }
}

@media (max-width: 767px) {
    .brand-text {
        font-size: 16px;
    }
    
    .nav-sidebar .nav-link p {
        font-size: 13px;
    }
}

/* ==========================================
   ACCESSIBILITÉ
   ========================================== */

.nav-link:focus {
    outline: 2px solid rgba(102, 126, 234, 0.5);
    outline-offset: 2px;
}

@media (prefers-reduced-motion: reduce) {
    .nav-sidebar .nav-link,
    .nav-icon,
    .badge,
    .nav-item {
        animation: none;
        transition: none;
    }
}

/* ==========================================
   DARK MODE
   ========================================== */

@media (prefers-color-scheme: dark) {
    .main-sidebar {
        box-shadow: 3px 0 15px rgba(0,0,0,0.6);
    }
    
    .nav-sidebar .nav-link:hover {
        background: rgba(255,255,255,0.12) !important;
    }
}
</style>

<script>
/**
 * Fonction de déconnexion sécurisée
 */
function logoutUser() {
    const form = document.getElementById('logout-form');
    if (form) {
        if (confirm('Êtes-vous sûr de vouloir vous déconnecter ?')) {
            form.submit();
        }
    }
}
</script>