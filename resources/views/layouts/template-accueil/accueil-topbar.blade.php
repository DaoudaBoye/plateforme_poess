{{-- ========================================
     STRUCTURE HTML DU HEADER
     ======================================== --}}

<header id="header" class="header sticky-top">

  {{-- Barre supérieure : Horaires et Contact --}}
  <div class="topbar d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      
      {{-- Horaires (masqué sur mobile) --}}
      <div class="d-none d-md-flex align-items-center">
        <i class="bi bi-clock me-1"></i>
        <span>Monday - Saturday, 8AM to 10PM</span>
      </div>
      
      {{-- Téléphone --}}
      <div class="d-flex align-items-center">
        <i class="bi bi-phone me-1"></i>
        <span>Contactez-nous maintenant +221 77 355 39 05</span>
      </div>
      
    </div>
  </div>
  {{-- Section Logo et Navigation --}}
  <div class="branding d-flex align-items-center">
    <div class="container position-relative d-flex align-items-center justify-content-between">
      
      {{-- Logo et Nom du Site --}}
      <a href="{{ route('accueil') }}" class="logo d-flex align-items-center" aria-label="Retour à l'accueil">
        <img src="{{ asset('assets/img/logo.png') }}" alt="Logo POESS">
        <strong class="site-title">
          <span class="d-inline d-lg-none text-black">POESS</span>
          <span class="d-none d-lg-inline text-black titre">
            Plateforme numérique des organisations de l'ESS
          </span>
        </strong>
      </a>

      {{-- Menu de Navigation Principal --}}
      <nav id="navmenu" class="navmenu" role="navigation" aria-label="Navigation principale">
        <ul>
          
          {{-- Accueil --}}
          <li>
            <a href="{{ route('accueil') }}" 
               class="nav-link {{ request()->routeIs('accueil') ? 'active' : '' }}">
              Accueil
            </a>
          </li>
          
          {{-- À propos --}}
          <li>
            <a href="{{ route('apropos') }}" 
               class="nav-link {{ request()->routeIs('apropos') ? 'active' : '' }}">
              Enrôlement
            </a>
          </li>
          
          {{-- Candidature --}}
          {{-- <li>
            <a href="{{ route('docCandidature') }}" 
               class="nav-link {{ request()->routeIs('docCandidature') ? 'active' : '' }}">
              Critères d'Éligibilité
            </a>
          </li>
           --}}
          {{-- Médiathèque --}}
          <li>
            <a href="{{ route('mediatheque') }}" 
               class="nav-link {{ request()->routeIs('mediatheque') ? 'active' : '' }}">
              Organisations ESS
            </a>
          </li>
           <li>
            <a href="{{ route('marketplace') }}" 
               class="nav-link {{ request()->routeIs('marketplace') ? 'active' : '' }}">
              Marketplace
            </a>
          </li>
          
          {{-- Connexion (Modal) --}}
          <li>
            <a href="#" 
               data-bs-toggle="modal" 
               data-bs-target="#loginModal"
               aria-label="Se connecter à votre compte">
              <i class="bi bi-person"></i>
              <span>Connexion</span>
            </a>
          </li>
          
        </ul>
        
        {{-- Toggle Mobile --}}
        <i class="mobile-nav-toggle d-xl-none bi bi-list" 
           aria-label="Ouvrir le menu de navigation"
           role="button"
           tabindex="0"></i>
      </nav>

    </div>
  </div>

</header>
{{-- Fin du Header --}}