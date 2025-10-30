@extends('layouts.template-accueil.accueil_template')

@section('title', 'Marketplace')

@section('content')
{{-- <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet"> --}}

<main class="main">

    <style>
    .marketplace-section {
      background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
      padding: 80px 0;
    }
    
    .search-bar {
      background: white;
      border-radius: 50px;
      box-shadow: 0 10px 40px rgba(0,0,0,0.1);
      padding: 8px;
      margin-bottom: 40px;
    }
    
    .search-bar input {
      border: none;
      padding: 15px 25px;
      font-size: 16px;
    }
    
    .search-bar input:focus {
      outline: none;
      box-shadow: none;
    }
    
    .search-bar .btn-search {
      border-radius: 50px;
      padding: 12px 35px;
      background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
      border: none;
      color: white;
      font-weight: 600;
    }
    
    .filter-chips {
      display: flex;
      gap: 10px;
      flex-wrap: wrap;
      margin-bottom: 30px;
    }
    
    .filter-chip {
      padding: 8px 20px;
      border-radius: 25px;
      background: white;
      border: 2px solid #e0e0e0;
      cursor: pointer;
      transition: all 0.3s;
      font-size: 14px;
      font-weight: 500;
    }
    
    .filter-chip:hover, .filter-chip.active {
      background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
      color: white;
      border-color: transparent;
      transform: translateY(-2px);
      box-shadow: 0 5px 15px rgba(102, 126, 234, 0.3);
    }
    
    .cooperative-card {
      background: white;
      border-radius: 20px;
      overflow: hidden;
      transition: all 0.3s;
      height: 100%;
      border: none;
      display: flex;
      flex-direction: column;
    }
    
    .cooperative-card:hover {
      transform: translateY(-10px);
      box-shadow: 0 20px 40px rgba(0,0,0,0.15);
    }
    
    .cooperative-header {
      background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
      color: white;
      padding: 20px;
      position: relative;
    }
    
    .cooperative-badge {
      position: absolute;
      top: 15px;
      right: 15px;
      background: rgba(255,255,255,0.3);
      backdrop-filter: blur(10px);
      padding: 5px 15px;
      border-radius: 20px;
      font-size: 12px;
      font-weight: 600;
    }
    
    .cooperative-contact {
      background: #f8f9fa;
      padding: 15px 20px;
      border-top: 1px solid #e9ecef;
      font-size: 13px;
    }
    
    .contact-item {
      display: flex;
      align-items: center;
      margin-bottom: 8px;
    }
    
    .contact-item:last-child {
      margin-bottom: 0;
    }
    
    .contact-icon {
      color: #667eea;
      margin-right: 10px;
      width: 18px;
      text-align: center;
    }
    
    .contact-text {
      color: #2d3748;
      word-break: break-word;
    }
    
    .products-grid {
      padding: 20px;
      max-height: 350px;
      overflow-y: auto;
      flex-grow: 1;
    }
    
    .product-item {
      display: flex;
      align-items: center;
      padding: 12px;
      margin-bottom: 10px;
      background: #f8f9fa;
      border-radius: 12px;
      transition: all 0.3s;
      cursor: pointer;
    }
    
    .product-item:hover {
      background: #e9ecef;
      transform: translateX(5px);
    }
    
    .product-icon {
      width: 50px;
      height: 50px;
      border-radius: 10px;
      background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
      display: flex;
      align-items: center;
      justify-content: center;
      color: white;
      font-size: 24px;
      margin-right: 15px;
      flex-shrink: 0;
    }
    
    .product-info {
      flex-grow: 1;
    }
    
    .product-name {
      font-weight: 600;
      color: #2d3748;
      margin-bottom: 2px;
    }
    
    .product-price {
      color: #667eea;
      font-weight: 700;
      font-size: 16px;
    }
    
    .product-stock {
      font-size: 12px;
      color: #718096;
    }
    
    .view-all-btn {
      width: 100%;
      padding: 12px;
      background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
      border: none;
      color: white;
      border-radius: 0 0 20px 20px;
      font-weight: 600;
      transition: all 0.3s;
      cursor: pointer;
    }
    
    .view-all-btn:hover {
      background: linear-gradient(135deg, #764ba2 0%, #667eea 100%);
    }
    
    .no-results {
      text-align: center;
      padding: 60px 20px;
      color: #718096;
    }
    
    .no-results i {
      font-size: 80px;
      margin-bottom: 20px;
      opacity: 0.3;
    }
    
    .stats-bar {
      background: white;
      border-radius: 15px;
      padding: 20px;
      margin-bottom: 30px;
      box-shadow: 0 5px 20px rgba(0,0,0,0.08);
    }
    
    .stat-item {
      text-align: center;
      padding: 10px;
    }
    
    .stat-number {
      font-size: 32px;
      font-weight: 700;
      background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      background-clip: text;
    }
    
    .stat-label {
      font-size: 14px;
      color: #718096;
      text-transform: uppercase;
      letter-spacing: 1px;
    }
    
    .products-grid::-webkit-scrollbar {
      width: 6px;
    }
    
    .products-grid::-webkit-scrollbar-track {
      background: #f1f1f1;
      border-radius: 10px;
    }
    
    .products-grid::-webkit-scrollbar-thumb {
      background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
      border-radius: 10px;
    }
  </style>

<!-- ============================================================ -->
<!-- SECTION MARKETPLACE -->
<!-- ============================================================ -->
<section class="marketplace-section">
  <div class="container">
    
    <!-- En-tête -->
    <div class="text-center mb-5 fade-in-up">
      <h2 class="display-4 fw-bold mb-3">
        <i class="bi bi-shop me-3"></i>Marketplace ESS
      </h2>
      <p class="lead text-muted">Découvrez les produits et services des coopératives d'excellence</p>
    </div>

    <!-- Barre de recherche -->
    <div class="row justify-content-center mb-5 fade-in-up">
      <div class="col-lg-10">
        <div class="search-bar">
          <div class="input-group">
            <input type="text" 
                   class="form-control form-control-lg" 
                   id="searchInput"
                   placeholder="Rechercher un produit, une coopérative ou une catégorie..."
                   aria-label="Recherche">
            <button class="btn btn-search" type="button" id="searchBtn">
              <i class="bi bi-search me-2"></i>Rechercher
            </button>
          </div>
        </div>
      </div>
    </div>

    <!-- Statistiques -->
    <div class="stats-bar fade-in-up">
      <div class="row">
        <div class="col-md-3 col-6">
          <div class="stat-item">
            <div class="stat-number" id="totalCooperatives">24</div>
            <div class="stat-label">Coopératives</div>
          </div>
        </div>
        <div class="col-md-3 col-6">
          <div class="stat-item">
            <div class="stat-number" id="totalProducts">156</div>
            <div class="stat-label">Produits</div>
          </div>
        </div>
        <div class="col-md-3 col-6">
          <div class="stat-item">
            <div class="stat-number" id="totalCategories">6</div>
            <div class="stat-label">Catégories</div>
          </div>
        </div>
        <div class="col-md-3 col-6">
          <div class="stat-item">
            <div class="stat-number" id="activeOrders">89</div>
            <div class="stat-label">Commandes actives</div>
          </div>
        </div>
      </div>
    </div>

    <!-- Filtres par catégorie -->
    <div class="filter-chips fade-in-up" id="categoryFilters">
      <button class="filter-chip active" data-category="all">
        <i class="bi bi-grid-3x3-gap me-1"></i>Tous
      </button>
      <button class="filter-chip" data-category="agriculture">
        <i class="bi bi-basket me-1"></i>Agriculture
      </button>
      <button class="filter-chip" data-category="artisanat">
        <i class="bi bi-palette me-1"></i>Artisanat
      </button>
      <button class="filter-chip" data-category="alimentation">
        <i class="bi bi-egg-fried me-1"></i>Alimentation
      </button>
      <button class="filter-chip" data-category="textile">
        <i class="bi bi-scissors me-1"></i>Textile
      </button>
      <button class="filter-chip" data-category="cosmetique">
        <i class="bi bi-flower1 me-1"></i>Cosmétique
      </button>
      <button class="filter-chip" data-category="services">
        <i class="bi bi-briefcase me-1"></i>Services
      </button>
    </div>

    <!-- Résultats de recherche -->
    <div id="searchResults" class="mb-4" style="display:none;">
      <div class="alert alert-info">
        <i class="bi bi-info-circle me-2"></i>
        <span id="searchResultText"></span>
      </div>
    </div>

    <!-- Grille des coopératives -->
    <div class="row g-4" id="cooperativesGrid">
      
      <!-- Coopérative 1 -->
      <div class="col-lg-4 col-md-6 fade-in-up cooperative-item" data-category="agriculture">
        <div class="card cooperative-card">
          <div class="cooperative-header">
            <span class="cooperative-badge">
              <i class="bi bi-star-fill me-1"></i>Excellence
            </span>
            <h5 class="mb-2 fw-bold">Coopérative Agricole Diamniadio</h5>
            <small><i class="bi bi-geo-alt me-1"></i>Dakar</small>
          </div>
          <div class="cooperative-contact">
            <div class="contact-item">
              <div class="contact-icon"><i class="bi bi-telephone-fill"></i></div>
              <div class="contact-text">+221 77 123 45 67</div>
            </div>
            <div class="contact-item">
              <div class="contact-icon"><i class="bi bi-envelope-fill"></i></div>
              <div class="contact-text">contact@coop-diamniadio.sn</div>
            </div>
            <div class="contact-item">
              <div class="contact-icon"><i class="bi bi-globe"></i></div>
              <div class="contact-text">www.coop-diamniadio.sn</div>
            </div>
          </div>
          <div class="products-grid">
            <div class="product-item" data-product="riz bio" data-coop="Diamniadio">
              <div class="product-icon"><i class="bi bi-basket"></i></div>
              <div class="product-info">
                <div class="product-name">Riz Bio Premium</div>
                <div class="product-stock"><i class="bi bi-check-circle-fill text-success me-1"></i>En stock</div>
              </div>
              <div class="product-price">2,500 FCFA/kg</div>
            </div>
            <div class="product-item" data-product="mil" data-coop="Diamniadio">
              <div class="product-icon"><i class="bi bi-basket"></i></div>
              <div class="product-info">
                <div class="product-name">Mil Local</div>
                <div class="product-stock"><i class="bi bi-check-circle-fill text-success me-1"></i>En stock</div>
              </div>
              <div class="product-price">1,800 FCFA/kg</div>
            </div>
            <div class="product-item" data-product="maïs" data-coop="Diamniadio">
              <div class="product-icon"><i class="bi bi-basket"></i></div>
              <div class="product-info">
                <div class="product-name">Maïs Bio</div>
                <div class="product-stock"><i class="bi bi-check-circle-fill text-success me-1"></i>En stock</div>
              </div>
              <div class="product-price">2,000 FCFA/kg</div>
            </div>
            <div class="product-item" data-product="arachide" data-coop="Diamniadio">
              <div class="product-icon"><i class="bi bi-basket"></i></div>
              <div class="product-info">
                <div class="product-name">Arachide de bouche</div>
                <div class="product-stock"><i class="bi bi-exclamation-circle-fill text-warning me-1"></i>Stock limité</div>
              </div>
              <div class="product-price">3,200 FCFA/kg</div>
            </div>
            <div class="product-item" data-product="huile" data-coop="Diamniadio">
              <div class="product-icon"><i class="bi bi-droplet"></i></div>
              <div class="product-info">
                <div class="product-name">Huile d'arachide</div>
                <div class="product-stock"><i class="bi bi-check-circle-fill text-success me-1"></i>En stock</div>
              </div>
              <div class="product-price">4,500 FCFA/L</div>
            </div>
          </div>
            <button class="btn btn-primary view-all-btn" onclick="window.location.href='{{ route('Produits - Coopérative') }}'">
  <i class="bi bi-eye me-2"></i>Voir tous les produits (12)
</button>

        </div>
      </div>

      <!-- Coopérative 2 -->
      <div class="col-lg-4 col-md-6 fade-in-up cooperative-item" data-category="artisanat">
        <div class="card cooperative-card">
          <div class="cooperative-header">
            <span class="cooperative-badge"><i class="bi bi-star-fill me-1"></i>Top</span>
            <h5 class="mb-2 fw-bold">Association Artisanat Solidaire</h5>
            <small><i class="bi bi-geo-alt me-1"></i>Kaolack</small>
          </div>
          <div class="cooperative-contact">
            <div class="contact-item">
              <div class="contact-icon"><i class="bi bi-telephone-fill"></i></div>
              <div class="contact-text">+221 77 234 56 78</div>
            </div>
            <div class="contact-item">
              <div class="contact-icon"><i class="bi bi-envelope-fill"></i></div>
              <div class="contact-text">info@artisanat-solidaire.sn</div>
            </div>
            <div class="contact-item">
              <div class="contact-icon"><i class="bi bi-globe"></i></div>
              <div class="contact-text">www.artisanat-solidaire.sn</div>
            </div>
          </div>
          <div class="products-grid">
            <div class="product-item" data-product="panier" data-coop="Artisanat Solidaire">
              <div class="product-icon"><i class="bi bi-basket2"></i></div>
              <div class="product-info">
                <div class="product-name">Panier en osier</div>
                <div class="product-stock"><i class="bi bi-check-circle-fill text-success me-1"></i>En stock</div>
              </div>
              <div class="product-price">5,000 FCFA</div>
            </div>
            <div class="product-item" data-product="bijoux" data-coop="Artisanat Solidaire">
              <div class="product-icon"><i class="bi bi-gem"></i></div>
              <div class="product-info">
                <div class="product-name">Bijoux artisanaux</div>
                <div class="product-stock"><i class="bi bi-check-circle-fill text-success me-1"></i>En stock</div>
              </div>
              <div class="product-price">8,500 FCFA</div>
            </div>
            <div class="product-item" data-product="sac" data-coop="Artisanat Solidaire">
              <div class="product-icon"><i class="bi bi-bag"></i></div>
              <div class="product-info">
                <div class="product-name">Sac à main en cuir</div>
                <div class="product-stock"><i class="bi bi-check-circle-fill text-success me-1"></i>En stock</div>
              </div>
              <div class="product-price">15,000 FCFA</div>
            </div>
            <div class="product-item" data-product="poterie" data-coop="Artisanat Solidaire">
              <div class="product-icon"><i class="bi bi-box"></i></div>
              <div class="product-info">
                <div class="product-name">Poterie décorée</div>
                <div class="product-stock"><i class="bi bi-exclamation-circle-fill text-warning me-1"></i>Stock limité</div>
              </div>
              <div class="product-price">7,500 FCFA</div>
            </div>
          </div>
          <button class="view-all-btn"><i class="bi bi-eye me-2"></i>Voir tous les produits (18)</button>
        </div>
      </div>

      <!-- Coopérative 3 -->
      <div class="col-lg-4 col-md-6 fade-in-up cooperative-item" data-category="alimentation">
        <div class="card cooperative-card">
          <div class="cooperative-header">
            <span class="cooperative-badge"><i class="bi bi-star-fill me-1"></i>Bio</span>
            <h5 class="mb-2 fw-bold">Coopérative Pêche Artisanale</h5>
            <small><i class="bi bi-geo-alt me-1"></i>Saint-Louis</small>
          </div>
          <div class="cooperative-contact">
            <div class="contact-item">
              <div class="contact-icon"><i class="bi bi-telephone-fill"></i></div>
              <div class="contact-text">+221 77 345 67 89</div>
            </div>
            <div class="contact-item">
              <div class="contact-icon"><i class="bi bi-envelope-fill"></i></div>
              <div class="contact-text">peche@coop-stlouis.sn</div>
            </div>
            <div class="contact-item">
              <div class="contact-icon"><i class="bi bi-globe"></i></div>
              <div class="contact-text">www.peche-stlouis.sn</div>
            </div>
          </div>
          <div class="products-grid">
            <div class="product-item" data-product="poisson" data-coop="Pêche Artisanale">
              <div class="product-icon"><i class="bi bi-moisture"></i></div>
              <div class="product-info">
                <div class="product-name">Poisson frais</div>
                <div class="product-stock"><i class="bi bi-check-circle-fill text-success me-1"></i>Disponible quotidiennement</div>
              </div>
              <div class="product-price">3,500 FCFA/kg</div>
            </div>
            <div class="product-item" data-product="poisson séché" data-coop="Pêche Artisanale">
              <div class="product-icon"><i class="bi bi-moisture"></i></div>
              <div class="product-info">
                <div class="product-name">Poisson séché</div>
                <div class="product-stock"><i class="bi bi-check-circle-fill text-success me-1"></i>En stock</div>
              </div>
              <div class="product-price">6,000 FCFA/kg</div>
            </div>
            <div class="product-item" data-product="crevettes" data-coop="Pêche Artisanale">
              <div class="product-icon"><i class="bi bi-moisture"></i></div>
              <div class="product-info">
                <div class="product-name">Crevettes fraîches</div>
                <div class="product-stock"><i class="bi bi-exclamation-circle-fill text-warning me-1"></i>Stock limité</div>
              </div>
              <div class="product-price">8,500 FCFA/kg</div>
            </div>
            <div class="product-item" data-product="yett" data-coop="Pêche Artisanale">
              <div class="product-icon"><i class="bi bi-moisture"></i></div>
              <div class="product-info">
                <div class="product-name">Yett (escargot de mer)</div>
                <div class="product-stock"><i class="bi bi-check-circle-fill text-success me-1"></i>En stock</div>
              </div>
              <div class="product-price">4,200 FCFA/kg</div>
            </div>
          </div>
          <button class="view-all-btn"><i class="bi bi-eye me-2"></i>Voir tous les produits (15)</button>
        </div>
      </div>

      <!-- Coopérative 4 -->
      <div class="col-lg-4 col-md-6 fade-in-up cooperative-item" data-category="cosmetique">
        <div class="card cooperative-card">
          <div class="cooperative-header">
            <span class="cooperative-badge"><i class="bi bi-star-fill me-1"></i>Naturel</span>
            <h5 class="mb-2 fw-bold">Coopérative Femmes de Thiès</h5>
            <small><i class="bi bi-geo-alt me-1"></i>Thiès</small>
          </div>
          <div class="cooperative-contact">
            <div class="contact-item">
              <div class="contact-icon"><i class="bi bi-telephone-fill"></i></div>
              <div class="contact-text">+221 77 456 78 90</div>
            </div>
            <div class="contact-item">
              <div class="contact-icon"><i class="bi bi-envelope-fill"></i></div>
              <div class="contact-text">femmes@coop-thies.sn</div>
            </div>
            <div class="contact-item">
              <div class="contact-icon"><i class="bi bi-globe"></i></div>
              <div class="contact-text">www.femmes-thies.sn</div>
            </div>
          </div>
          <div class="products-grid">
            <div class="product-item" data-product="beurre karité" data-coop="Femmes Thiès">
              <div class="product-icon"><i class="bi bi-flower1"></i></div>
              <div class="product-info">
                <div class="product-name">Beurre de karité pur</div>
                <div class="product-stock"><i class="bi bi-check-circle-fill text-success me-1"></i>En stock</div>
              </div>
              <div class="product-price">3,800 FCFA</div>
            </div>
            <div class="product-item" data-product="savon noir" data-coop="Femmes Thiès">
              <div class="product-icon"><i class="bi bi-flower1"></i></div>
              <div class="product-info">
                <div class="product-name">Savon noir artisanal</div>
                <div class="product-stock"><i class="bi bi-check-circle-fill text-success me-1"></i>En stock</div>
              </div>
              <div class="product-price">1,500 FCFA</div>
            </div>
            <div class="product-item" data-product="huile baobab" data-coop="Femmes Thiès">
              <div class="product-icon"><i class="bi bi-droplet-half"></i></div>
              <div class="product-info">
                <div class="product-name">Huile de baobab</div>
                <div class="product-stock"><i class="bi bi-check-circle-fill text-success me-1"></i>En stock</div>
              </div>
              <div class="product-price">5,200 FCFA</div>
            </div>
            <div class="product-item" data-product="néré" data-coop="Femmes Thiès">
              <div class="product-icon"><i class="bi bi-flower2"></i></div>
              <div class="product-info">
                <div class="product-name">Poudre de néré</div>
                <div class="product-stock"><i class="bi bi-check-circle-fill text-success me-1"></i>En stock</div>
              </div>
              <div class="product-price">2,800 FCFA/kg</div>
            </div>
          </div>
          <button class="view-all-btn"><i class="bi bi-eye me-2"></i>Voir tous les produits (10)</button>
        </div>
      </div>

      <!-- Coopérative 5 -->
      <div class="col-lg-4 col-md-6 fade-in-up cooperative-item" data-category="textile">
        <div class="card cooperative-card">
          <div class="cooperative-header">
            <span class="cooperative-badge"><i class="bi bi-star-fill me-1"></i>Mode</span>
            <h5 class="mb-2 fw-bold">Coopérative Textile Ndakarou</h5>
            <small><i class="bi bi-geo-alt me-1"></i>Dakar</small>
          </div>
          <div class="cooperative-contact">
            <div class="contact-item">
              <div class="contact-icon"><i class="bi bi-telephone-fill"></i></div>
              <div class="contact-text">+221 77 567 89 01</div>
            </div>
            <div class="contact-item">
              <div class="contact-icon"><i class="bi bi-envelope-fill"></i></div>
              <div class="contact-text">textile@coop-ndakarou.sn</div>
            </div>
            <div class="contact-item">
              <div class="contact-icon"><i class="bi bi-globe"></i></div>
              <div class="contact-text">www.textile-ndakarou.sn</div>
            </div>
          </div>
          <div class="products-grid">
            <div class="product-item" data-product="boubou" data-coop="Textile Ndakarou">
              <div class="product-icon"><i class="bi bi-scissors"></i></div>
              <div class="product-info">
                <div class="product-name">Boubou traditionnel</div>
                <div class="product-stock"><i class="bi bi-check-circle-fill text-success me-1"></i>En stock</div>
              </div>
              <div class="product-price">25,000 FCFA</div>
            </div>
            <div class="product-item" data-product="pagne" data-coop="Textile Ndakarou">
              <div class="product-icon"><i class="bi bi-scissors"></i></div>
              <div class="product-info">
                <div class="product-name">Pagne tissé main</div>
                <div class="product-stock"><i class="bi bi-check-circle-fill text-success me-1"></i>En stock</div>
              </div>
              <div class="product-price">18,000 FCFA</div>
            </div>
            <div class="product-item" data-product="robe" data-coop="Textile Ndakarou">
              <div class="product-icon"><i class="bi bi-person-dress"></i></div>
              <div class="product-info">
                <div class="product-name">Robe en wax</div>
                <div class="product-stock"><i class="bi bi-exclamation-circle-fill text-warning me-1"></i>Stock limité</div>
              </div>
              <div class="product-price">22,000 FCFA</div>
            </div>
          </div>
          <button class="view-all-btn"><i class="bi bi-eye me-2"></i>Voir tous les produits (14)</button>
        </div>
      </div>

      <!-- Coopérative 6 -->
      <div class="col-lg-4 col-md-6 fade-in-up cooperative-item" data-category="services">
        <div class="card cooperative-card">
          <div class="cooperative-header">
            <span class="cooperative-badge"><i class="bi bi-star-fill me-1"></i>Formation</span>
            <h5 class="mb-2 fw-bold">Coopérative Éducation & Formation</h5>
            <small><i class="bi bi-geo-alt me-1"></i>Ziguinchor</small>
          </div>
          <div class="cooperative-contact">
            <div class="contact-item">
              <div class="contact-icon"><i class="bi bi-telephone-fill"></i></div>
              <div class="contact-text">+221 77 678 90 12</div>
            </div>
            <div class="contact-item">
              <div class="contact-icon"><i class="bi bi-envelope-fill"></i></div>
              <div class="contact-text">formation@coop-education.sn</div>
            </div>
            <div class="contact-item">
              <div class="contact-icon"><i class="bi bi-globe"></i></div>
              <div class="contact-text">www.education-formation.sn</div>
            </div>
          </div>
          <div class="products-grid">
            <div class="product-item" data-product="formation" data-coop="Éducation Formation">
              <div class="product-icon"><i class="bi bi-mortarboard"></i></div>
              <div class="product-info">
                <div class="product-name">Formation en couture</div>
                <div class="product-stock"><i class="bi bi-check-circle-fill text-success me-1"></i>Inscription ouverte</div>
              </div>
              <div class="product-price">45,000 FCFA/3 mois</div>
            </div>
            <div class="product-item" data-product="alphabétisation" data-coop="Éducation Formation">
              <div class="product-icon"><i class="bi bi-book"></i></div>
              <div class="product-info">
                <div class="product-name">Alphabétisation</div>
                <div class="product-stock"><i class="bi bi-check-circle-fill text-success me-1"></i>Session en cours</div>
              </div>
              <div class="product-price">Gratuit</div>
            </div>
            <div class="product-item" data-product="informatique" data-coop="Éducation Formation">
              <div class="product-icon"><i class="bi bi-laptop"></i></div>
              <div class="product-info">
                <div class="product-name">Initiation informatique</div>
                <div class="product-stock"><i class="bi bi-exclamation-circle-fill text-warning me-1"></i>Places limitées</div>
              </div>
              <div class="product-price">35,000 FCFA/2 mois</div>
            </div>
          </div>
          <button class="view-all-btn"><i class="bi bi-eye me-2"></i>Voir tous les services (8)</button>
        </div>
      </div>

    </div>

    <!-- Message "Aucun résultat" -->
    <div id="noResults" class="no-results" style="display:none;">
      <i class="bi bi-search"></i>
      <h4>Aucun résultat trouvé</h4>
      <p>Essayez avec d'autres mots-clés ou parcourez nos catégories</p>
    </div>

  </div>
</section>

<!-- ============================================================ -->
<!-- JAVASCRIPT -->
<!-- ============================================================ -->
{{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script> --}}
<script>
document.addEventListener('DOMContentLoaded', function() {
  
  // ============================================================
  // GESTION DE LA RECHERCHE
  // ============================================================
  
  const searchInput = document.getElementById('searchInput');
  const searchBtn = document.getElementById('searchBtn');
  const cooperativesGrid = document.getElementById('cooperativesGrid');
  const searchResults = document.getElementById('searchResults');
  const searchResultText = document.getElementById('searchResultText');
  const noResults = document.getElementById('noResults');
  
  // Fonction de recherche
  function performSearch() {
    const searchTerm = searchInput.value.toLowerCase().trim();
    
    if (searchTerm === '') {
      resetSearch();
      return;
    }
    
    const cooperativeItems = document.querySelectorAll('.cooperative-item');
    const productItems = document.querySelectorAll('.product-item');
    let foundCount = 0;
    let foundProducts = [];
    
    // Cacher toutes les coopératives d'abord
    cooperativeItems.forEach(coop => {
      coop.style.display = 'none';
    });
    
    // Rechercher dans les produits
    productItems.forEach(product => {
      const productName = product.getAttribute('data-product');
      const coopName = product.getAttribute('data-coop');
      const cooperative = product.closest('.cooperative-item');
      
      if (productName.includes(searchTerm)) {
        // Afficher la coopérative contenant ce produit
        cooperative.style.display = 'block';
        foundCount++;
        
        // Mettre en évidence le produit
        product.style.background = '#fff3cd';
        product.style.borderLeft = '4px solid #667eea';
        
        // Ajouter aux résultats
        if (!foundProducts.some(p => p.coop === coopName)) {
          foundProducts.push({
            coop: coopName,
            product: productName
          });
        }
      } else {
        // Retirer la mise en évidence
        product.style.background = '#f8f9fa';
        product.style.borderLeft = 'none';
      }
    });
    
    // Rechercher dans les noms de coopératives
    cooperativeItems.forEach(coop => {
      const coopName = coop.querySelector('.cooperative-header h5').textContent.toLowerCase();
      
      if (coopName.includes(searchTerm)) {
        coop.style.display = 'block';
        foundCount++;
      }
    });
    
    // Afficher les résultats
    if (foundCount > 0) {
      searchResults.style.display = 'block';
      noResults.style.display = 'none';
      
      if (foundProducts.length > 0) {
        searchResultText.innerHTML = `<strong>${foundCount}</strong> résultat(s) trouvé(s) pour "<strong>${searchTerm}</strong>"`;
      } else {
        searchResultText.innerHTML = `<strong>${foundCount}</strong> coopérative(s) trouvée(s) pour "<strong>${searchTerm}</strong>"`;
      }
    } else {
      searchResults.style.display = 'none';
      noResults.style.display = 'block';
      cooperativesGrid.style.display = 'none';
    }
  }
  
  // Fonction de réinitialisation
  function resetSearch() {
    const cooperativeItems = document.querySelectorAll('.cooperative-item');
    const productItems = document.querySelectorAll('.product-item');
    
    cooperativeItems.forEach(coop => {
      coop.style.display = 'block';
    });
    
    productItems.forEach(product => {
      product.style.background = '#f8f9fa';
      product.style.borderLeft = 'none';
    });
    
    searchResults.style.display = 'none';
    noResults.style.display = 'none';
    cooperativesGrid.style.display = 'flex';
  }
  
  // Event listeners pour la recherche
  searchBtn.addEventListener('click', performSearch);
  
  searchInput.addEventListener('keyup', function(e) {
    if (e.key === 'Enter') {
      performSearch();
    }
  });
  
  // Recherche en temps réel (optionnel)
  searchInput.addEventListener('input', function() {
    if (this.value.length >= 3 || this.value.length === 0) {
      performSearch();
    }
  });
  
  
  // ============================================================
  // GESTION DES FILTRES PAR CATÉGORIE
  // ============================================================
  
  const filterChips = document.querySelectorAll('.filter-chip');
  
  filterChips.forEach(chip => {
    chip.addEventListener('click', function() {
      const category = this.getAttribute('data-category');
      
      // Mettre à jour les boutons actifs
      filterChips.forEach(c => c.classList.remove('active'));
      this.classList.add('active');
      
      // Réinitialiser la recherche
      searchInput.value = '';
      resetSearch();
      
      // Filtrer les coopératives
      const cooperativeItems = document.querySelectorAll('.cooperative-item');
      let visibleCount = 0;
      
      cooperativeItems.forEach(coop => {
        const coopCategory = coop.getAttribute('data-category');
        
        if (category === 'all' || coopCategory === category) {
          coop.style.display = 'block';
          visibleCount++;
        } else {
          coop.style.display = 'none';
        }
      });
      
      // Afficher message si aucune coopérative
      if (visibleCount === 0) {
        noResults.style.display = 'block';
        cooperativesGrid.style.display = 'none';
      } else {
        noResults.style.display = 'none';
        cooperativesGrid.style.display = 'flex';
      }
    });
  });
  
  
  // ============================================================
  // ANIMATION DES STATISTIQUES
  // ============================================================
  
  function animateStats() {
    const stats = [
      { id: 'totalCooperatives', target: 24 },
      { id: 'totalProducts', target: 156 },
      { id: 'totalCategories', target: 6},
      { id: 'activeOrders', target: 89 }
    ];
    
    stats.forEach(stat => {
      const element = document.getElementById(stat.id);
      let current = 0;
      const increment = stat.target / 50;
      
      const timer = setInterval(() => {
        current += increment;
        if (current >= stat.target) {
          element.textContent = stat.target;
          clearInterval(timer);
        } else {
          element.textContent = Math.floor(current);
        }
      }, 30);
    });
  }
  
  // Observer pour détecter quand la section est visible
  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting && !entry.target.classList.contains('animated')) {
        animateStats();
        entry.target.classList.add('animated');
      }
    });
  }, { threshold: 0.3 });
  
  const statsBar = document.querySelector('.stats-bar');
  if (statsBar) {
    observer.observe(statsBar);
  }
  
  
  // ============================================================
  // GESTION DES CLICS SUR LES PRODUITS
  // ============================================================
  
  const productItems = document.querySelectorAll('.product-item');
  
  productItems.forEach(item => {
    item.addEventListener('click', function() {
      const productName = this.getAttribute('data-product');
      const coopName = this.getAttribute('data-coop');
      const price = this.querySelector('.product-price').textContent;
      
      // Ici vous pouvez ouvrir un modal avec les détails du produit
      alert(`Produit: ${productName}\nCoopérative: ${coopName}\nPrix: ${price}`);
      
      // Exemple d'ouverture de modal ou redirection
      // openProductModal(productName, coopName, price);
    });
  });
  
  
  // ============================================================
  // ANIMATION AU SCROLL
  // ============================================================
  
  const fadeElements = document.querySelectorAll('.fade-in-up');
  
  const fadeObserver = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.style.opacity = '1';
        entry.target.style.transform = 'translateY(0)';
      }
    });
  }, { threshold: 0.1 });
  
  fadeElements.forEach(el => {
    el.style.opacity = '0';
    el.style.transform = 'translateY(30px)';
    el.style.transition = 'all 0.6s ease-out';
    fadeObserver.observe(el);
  });
  
  
  // ============================================================
  // SUGGESTION DE RECHERCHE (Auto-complétion)
  // ============================================================
  
  const products = [
    'riz bio', 'mil', 'maïs', 'arachide', 'huile', 
    'panier', 'bijoux', 'sac', 'poterie',
    'poisson', 'poisson séché', 'crevettes', 'yett',
    'beurre karité', 'savon noir', 'huile baobab', 'néré',
    'boubou', 'pagne', 'robe',
    'formation', 'alphabétisation', 'informatique'
  ];
  
  // Vous pouvez ajouter une fonctionnalité d'auto-complétion ici
  // en créant une liste de suggestions qui apparaît sous le champ de recherche
  
});
</script>
</main>
@endsection