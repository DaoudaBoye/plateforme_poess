
<style>
    .main-sidebar {
        background: #000000c8 !important;
        /* box-shadow: 2px 0 10px rgba(0, 0, 0, 0.1); */
    }

    .brand-link {
        padding: 1.5rem;
        background-color: #fff;
        display: flex;
        justify-content: center;
        align-items: center;
        border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        transition: all 0.3s ease;
    }

    .brand-link:hover {
        background-color: rgba(255, 255, 255, 0.05);
    }

    .brand-link img {
        height: 80px !important;
        filter: drop-shadow(0 2px 4px rgba(0, 0, 0, 0.2));
    }

    .sidebar {
        padding-top: 1rem;
    }

    .nav-sidebar {
        padding: 0 0.5rem;
    }

    .nav-section {
        margin-bottom: 0.5rem;
        border-bottom: none;
    }

    .nav-link {
        border-radius: 8px;
        margin: 0.25rem 0;
        padding: 0.75rem 1rem;
        color: rgba(255, 255, 255, 0.8);
        transition: all 0.3s ease;
        display: flex;
        align-items: center;
    }

    .nav-link:hover {
        background-color: rgba(255, 255, 255, 0.1);
        color: #fff;
        transform: translateX(5px);
    }

    .nav-link.active {
        background-color: rgba(255, 255, 255, 0.15);
        color: #fff;
        font-weight: 600;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.15);
    }

    .nav-link i.nav-icon {
        width: 24px;
        text-align: center;
        margin-right: 0.75rem;
        font-size: 1.1rem;
    }

    .nav-link p {
        margin: 0;
        font-size: 0.95rem;
    }

    /* Menu déroulant */
    .nav-treeview {
        padding-left: 1rem;
    }

    .nav-treeview .nav-link {
        padding: 0.6rem 1rem;
        font-size: 0.9rem;
    }

    .nav-treeview .nav-link i.nav-icon {
        font-size: 0.9rem;
    }

    .menu-open > .nav-link {
        background-color: rgba(255, 255, 255, 0.1);
    }

    /* Bouton déconnexion */
    #logoutButton {
        background-color: transparent !important;
        color: rgba(255, 255, 255, 0.8) !important;
        border: none;
        width: 100%;
        text-align: left;
        padding: 0.75rem 1rem;
        border-radius: 8px;
        cursor: pointer;
        transition: all 0.3s ease;
        display: flex;
        align-items: center;
    }

    #logoutButton:hover {
        background-color: rgba(220, 53, 69, 0.2) !important;
        color: #ff6b6b !important;
        transform: translateX(5px);
    }

    .logout-spinner {
        display: none;
        margin-left: auto;
    }

    /* Animation de rotation */
    @keyframes spin {
        from { transform: rotate(0deg); }
        to { transform: rotate(360deg); }
    }

    .fa-spin {
        animation: spin 1s linear infinite;
    }

  

    /* Responsive */
    @media (max-width: 768px) {
        .nav-link {
            padding: 0.6rem 0.8rem;
        }
        
        .nav-link p {
            font-size: 0.9rem;
        }
    }
</style>


<aside class="main-sidebar sidebar-dark-primary elevation-4 position-fixed" style="height: 100vh; background-color: #296955;">
    <div class="dropdown">
        <div style="text-align: center;">
            <a href="#" class="brand-link">
                <img src="{{ asset('images/logo.png') }}" alt="Logo du Ministère" style="height: 40px;">
            </a>
        </div>
    </div>

    <div class="sidebar pb-4 mb-4">
        <nav class="mt-2" role="navigation" aria-label="Navigation principale">
            <ul class="nav nav-pills nav-sidebar flex-column nav-flat" data-widget="treeview" role="menu" data-accordion="false">

                {{-- Structure --}}
                @if(Auth::check() && Auth::user()->role === 'structure')
                    <li class="nav-item nav-section">
                        <a href="{{ route('struct.dashboard') }}" class="nav-link {{ request()->routeIs('dashboard') ? 'active' : '' }}">
                            <i class="nav-icon fas fa-home"></i>
                            <p>Tableau de bord</p>
                        </a>
                    </li>
                    <li class="nav-item nav-section">
                        <a href="{{ route('struct.candidater') }}" class="nav-link {{ request()->routeIs('candidater') ? 'active' : '' }}">
                            <i class="nav-icon fas fa-edit"></i>
                            <p>Candidater</p>
                        </a>
                    </li>
                    <li class="nav-item nav-section">
                        <a href="#" class="nav-link {{ request()->routeIs('historique') ? 'active' : '' }}">
                            <i class="fas fa-history nav-icon"></i>
                            <p>Historique</p>
                        </a>
                    </li>
                @endif

                {{-- DMIF --}}
                @if(Auth::check() && Auth::user()->role === 'DMIF')
                    <li class="nav-item nav-section">
                        <a href="{{ route('evalue.index') }}" class="nav-link {{ request()->routeIs('evalue.index') ? 'active' : '' }}">
                            <i class="nav-icon fas fa-home"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li class="nav-item nav-section">
                        <a href="{{ route('listeCandidat') }}" class="nav-link {{ request()->routeIs('listeCandidat') ? 'active' : '' }}">
                            <i class="nav-icon fas fa-users"></i>
                            <p>Liste des Candidats</p>
                        </a>
                    </li>
                    <li class="nav-item nav-section">
                        <a href="{{ route('laureat') }}" class="nav-link {{ request()->routeIs('laureat') ? 'active' : '' }}">
                            <i class="nav-icon fas fa-trophy"></i>
                            <p>Lauréat</p>
                        </a>
                    </li>
                    <li class="nav-item nav-section">
                        <a href="{{ route('critereEvaluation') }}" class="nav-link {{ request()->routeIs('critereEvaluation') ? 'active' : '' }}">
                            <i class="nav-icon fas fa-check-square"></i>
                            <p>Critères d'Évaluation</p>
                        </a>
                    </li>

                    @php
                        $users_routes = ['registerEvaluator', 'editEvaluator'];
                        $users_open = in_array(request()->route()->getName(), $users_routes);
                    @endphp

                    <li class="nav-item nav-section {{ $users_open ? 'menu-open' : '' }}">
                        <a href="#" class="nav-link {{ $users_open ? 'active' : '' }}" aria-expanded="{{ $users_open ? 'true' : 'false' }}">
                            <i class="nav-icon fas fa-users"></i>
                            <p>Users <i class="right fas fa-angle-left"></i></p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('registerEvaluator') }}" class="nav-link {{ request()->routeIs('registerEvaluator') ? 'active' : '' }}">
                                    <i class="fas fa-angle-right nav-icon"></i>
                                    <p>Ajouter Evaluateur</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('editEvaluator') }}" class="nav-link {{ request()->routeIs('editEvaluator') ? 'active' : '' }}">
                                    <i class="fas fa-angle-right nav-icon"></i>
                                    <p>Editer Evaluateur</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                @endif

                {{-- Evaluateur & Jury --}}
                @if(Auth::check() && in_array(Auth::user()->role, ['evaluateur', 'jury']))
                    <li class="nav-item nav-section">
                        <a href="{{ route('evalue.index') }}" class="nav-link {{ request()->routeIs('evalue.index') ? 'active' : '' }}">
                            <i class="nav-icon fas fa-home"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li class="nav-item nav-section">
                        <a href="{{ route('listeCandidat') }}" class="nav-link {{ request()->routeIs('listeCandidat') ? 'active' : '' }}">
                            <i class="nav-icon fas fa-users"></i>
                            <p>Liste des Candidats</p>
                        </a>
                    </li>
                 
                    <li class="nav-item nav-section">
                        <a href=" " class="nav-link {{ request()->routeIs('critereEvaluation') ? 'active' : '' }}">
                            <i class="nav-icon fas fa-check-square"></i>
                            <p>Critères d'Évaluation</p>
                        </a>
                    </li>
                @endif

                {{-- Super Admin --}}
                @if(Auth::check() && Auth::user()->role === 'superAdmin')
                    <li class="nav-item nav-section">
                        <a href="{{ route('administrateur') }}" class="nav-link {{ request()->routeIs('administrateur') ? 'active' : '' }}">
                            <i class="nav-icon fas fa-home"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li class="nav-item nav-section">
                        <a href=" " class="nav-link {{ request()->routeIs('critereAdmin') ? 'active' : '' }}">
                            <i class="nav-icon fas fa-check-square"></i>
                            <p>Critères d'Évaluation</p>
                        </a>
                    </li>
                    <li class="nav-item nav-section">
                        <a href=" " class="nav-link {{ request()->routeIs('listeUser') ? 'active' : '' }}">
                            <i class="nav-icon fas fa-edit"></i>
                            <p>Liste des utilisateurs</p>
                        </a>
                    </li>
                @endif

                {{-- Déconnexion --}}
                <li class="nav-item nav-section">
                    <form action="{{ route('logout') }}" method="POST" id="logoutForm">
                        @csrf
                        <a href="#" style="background-color: #296955; color: #c4c4c4; border: none;" class="nav-link" id="logoutButton">
                            <i class="fas fa-sign-out-alt nav-icon"></i>
                            <p class="logout-text">Déconnexion</p>
                            <i id="logoutSpinner" class="fas fa-spinner fa-spin logout-spinner"></i>
                        </a>
                    </form>

                    <div id="progressBarContainer" style="display: none; margin-top: 10px;">
                        <div class="progress" style="height: 10px;">
                            <div id="progressBar" class="progress-bar progress-bar-striped progress-bar-animated"
                                 role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                            </div>
                        </div>
                    </div>
                </li>

            </ul>
        </nav>
    </div>
</aside>

<script>
    document.getElementById('logoutButton').addEventListener('click', function (e) {
        e.preventDefault();

        document.getElementById('logoutSpinner').style.display = 'inline-block';
        document.getElementById('progressBarContainer').style.display = 'block';

        let progress = 0;
        let interval = setInterval(function () {
            if (progress < 100) {
                progress += 10;
                const bar = document.getElementById('progressBar');
                bar.style.width = progress + '%';
                bar.setAttribute('aria-valuenow', progress);
            } else {
                clearInterval(interval);
                document.getElementById('logoutForm').submit();
            }
        }, 100);
    });  
       
</script>
