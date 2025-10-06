{{-- ========================================
     HEADER PRINCIPAL - POESS
     ======================================== --}}

{{-- Styles personnalisés du header --}}
<style>
  /* Couleur du texte noir avec opacité */
  .text-black {
    color: rgba(0, 0, 0, 0.66) !important;
  }

  /* Titre responsive */
  .titre {
    font-size: 0.9rem;
    line-height: 1.3;
    font-weight: 600;
  }

  /* Logo image */
  .logo img {
    max-height: 50px;
    width: auto;
    margin-right: 0.75rem;
  }

  /* Topbar styling */
  .topbar {
    background-color: rgba(0, 0, 0, 0.05);
    padding: 0.5rem 0;
    font-size: 0.875rem;
    border-bottom: 1px solid rgba(0, 0, 0, 0.1);
  }

  .topbar i {
    color: var(--primary-color, #007bff);
    font-size: 1rem;
  }

  /* Branding section */
  .branding {
    padding: 1rem 0;
    background-color: #ffffff;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
  }

  /* Navigation styling */
  .navmenu ul {
    list-style: none;
    margin: 0;
    padding: 0;
    display: flex;
    align-items: center;
    gap: 2rem;
  }

  .navmenu li {
    margin: 0;
  }

  .navmenu .nav-link {
    color: rgba(0, 0, 0, 0.7);
    text-decoration: none;
    font-weight: 500;
    font-size: 0.95rem;
    padding: 0.5rem 0;
    transition: all 0.3s ease;
    border-bottom: 2px solid transparent;
  }

  .navmenu .nav-link:hover {
    color: var(--primary-color, #007bff);
    border-bottom-color: var(--primary-color, #007bff);
  }

  .navmenu .nav-link.active {
    color: var(--primary-color, #007bff);
    border-bottom-color: var(--primary-color, #007bff);
    font-weight: 600;
  }

  /* Bouton connexion */
  .navmenu a[data-bs-toggle="modal"] {
    display: flex;
    align-items: center;
    gap: 0.5rem;
    color: rgba(0, 0, 0, 0.7);
    text-decoration: none;
    font-weight: 500;
    padding: 0.5rem 1rem;
    border: 1px solid rgba(0, 0, 0, 0.2);
    border-radius: 0.375rem;
    transition: all 0.3s ease;
  }

  .navmenu a[data-bs-toggle="modal"]:hover {
    background-color: var(--primary-color, #007bff);
    color: #ffffff;
    border-color: var(--primary-color, #007bff);
  }

  .navmenu a[data-bs-toggle="modal"] i {
    font-size: 1.1rem;
  }

  /* Mobile nav toggle */
  .mobile-nav-toggle {
    font-size: 1.75rem;
    cursor: pointer;
    color: rgba(0, 0, 0, 0.7);
    transition: color 0.3s ease;
  }

  .mobile-nav-toggle:hover {
    color: var(--primary-color, #007bff);
  }

  /* Sticky header */
  .header.sticky-top {
    position: sticky;
    top: 0;
    z-index: 1000;
    background-color: #ffffff;
  }

  /* Responsive */
  @media (max-width: 1199px) {
    .navmenu ul {
      flex-direction: column;
      gap: 1rem;
    }

    .titre {
      font-size: 0.8rem;
    }
  }

  @media (max-width: 767px) {
    .topbar .container {
      justify-content: center !important;
    }

    .logo img {
      max-height: 40px;
    }
  }
</style>

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
              À propos du prix
            </a>
          </li>
          
          {{-- Candidature --}}
          <li>
            <a href="{{ route('docCandidature') }}" 
               class="nav-link {{ request()->routeIs('docCandidature') ? 'active' : '' }}">
              Candidature
            </a>
          </li>
          
          {{-- Médiathèque --}}
          <li>
            <a href="{{ route('mediatheque') }}" 
               class="nav-link {{ request()->routeIs('mediatheque') ? 'active' : '' }}">
              Médiathèque
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