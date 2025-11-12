@extends('layouts.template-accueil.accueil_template')

@section('title', 'Produits - Coopérative')

@section('content')
{{-- <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet"> --}}

<main class="main">

<style>
  .products-hero {
  background-image: url('/assets/img/marketimage.png');
  background-size: cover;
  background-position: center; 
  background-repeat: no-repeat;
  padding: 80px 0 40px;
  color: white;
  position: relative;
  overflow: hidden;
}

  .products-hero::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: url('data:image/svg+xml,<svg width="100" height="100" xmlns="http://www.w3.org/2000/svg"><defs><pattern id="grid" width="100" height="100" patternUnits="userSpaceOnUse"><path d="M 100 0 L 0 0 0 100" fill="none" stroke="rgba(255,255,255,0.1)" stroke-width="1"/></pattern></defs><rect width="100%" height="100%" fill="url(%23grid)"/></svg>');
    opacity: 0.3;
  }
  
  .breadcrumb-custom {
    background: rgba(255,255,255,0.1);
    backdrop-filter: blur(10px);
    padding: 10px 20px;
    border-radius: 50px;
    display: inline-flex;
    align-items: center;
    margin-bottom: 20px;
  }
  
  .breadcrumb-custom a {
    color: white;
    text-decoration: none;
    margin: 0 10px;
    transition: all 0.3s;
  }
  
  .breadcrumb-custom a:hover {
    transform: translateY(-2px);
  }
  
  .coop-info-card {
    background: white;
    border-radius: 20px;
    padding: 40px;
    margin-top: -50px;
    position: relative;
    box-shadow: 0 20px 60px rgba(0,0,0,0.15);
  }
  
  .coop-logo {
    width: 120px;
    height: 120px;
    border-radius: 20px;
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    font-size: 60px;
    margin-right: 30px;
    flex-shrink: 0;
    box-shadow: 0 10px 30px rgba(102, 126, 234, 0.3);
  }
  
  .contact-section {
    margin-top: 0;
    padding: 30px;
    background: linear-gradient(135deg, #f8f9fa 0%, #ffffff 100%);
    border-radius: 20px;
    border: 2px solid #e9ecef;
    box-shadow: 0 10px 30px rgba(0,0,0,0.08);
  }
  
  .contact-header {
    font-size: 20px;
    font-weight: 700;
    color: #2d3748;
    margin-bottom: 25px;
    display: flex;
    align-items: center;
    gap: 12px;
    padding-bottom: 15px;
    border-bottom: 2px solid #e9ecef;
  }
  
  .contact-header i {
    font-size: 24px;
    color: #667eea;
  }
  
  .stat-card {
    background: linear-gradient(135deg, #ffffff 0%, #f8f9fa 100%);
    border-radius: 15px;
    padding: 20px;
    text-align: center;
    border: 2px solid #e9ecef;
    transition: all 0.3s;
  }
  
  .stat-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 25px rgba(102, 126, 234, 0.15);
    border-color: #667eea;
  }
  
  .stat-icon {
    width: 50px;
    height: 50px;
    border-radius: 12px;
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 15px;
    color: white;
    font-size: 24px;
  }
  
  .stat-value {
    font-size: 28px;
    font-weight: 700;
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
    margin-bottom: 5px;
  }
  
  .stat-label {
    font-size: 13px;
    color: #718096;
    font-weight: 500;
    text-transform: uppercase;
    letter-spacing: 0.5px;
  }
  
  .contact-item {
    display: flex;
    align-items: center;
    padding: 15px;
    background: white;
    border-radius: 12px;
    margin-bottom: 12px;
    transition: all 0.3s;
    cursor: pointer;
  }
  
  .contact-item:hover {
    transform: translateX(5px);
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
  }
  
  .contact-icon {
    width: 45px;
    height: 45px;
    border-radius: 10px;
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    font-size: 20px;
    margin-right: 15px;
    flex-shrink: 0;
  }
  
  .contact-details {
    flex-grow: 1;
  }
  
  .contact-label {
    font-size: 12px;
    color: #718096;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    margin-bottom: 3px;
  }
  
  .contact-value {
    font-size: 15px;
    font-weight: 600;
    color: #2d3748;
    word-break: break-word;
  }
  
  .contact-action {
    color: #667eea;
    font-size: 20px;
  }
  
  .filter-section {
    background: white;
    border-radius: 15px;
    padding: 25px;
    margin-bottom: 30px;
    box-shadow: 0 5px 20px rgba(0,0,0,0.08);
  }
  
  .sort-dropdown {
    border: 2px solid #e9ecef;
    border-radius: 10px;
    padding: 10px 15px;
    font-size: 14px;
    cursor: pointer;
    transition: all 0.3s;
  }
  
  .sort-dropdown:hover {
    border-color: #667eea;
  }
  
  .product-card {
    background: white;
    border-radius: 20px;
    overflow: hidden;
    transition: all 0.4s;
    height: 100%;
    border: 2px solid transparent;
  }
  
  .product-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 20px 40px rgba(0,0,0,0.15);
    border-color: #667eea;
  }
  
  .product-image {
    height: 250px;
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 80px;
    color: white;
    position: relative;
    overflow: hidden;
  }
  
  .product-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.4s;
  }
  
  .product-card:hover .product-image img {
    transform: scale(1.1);
  }
  
  .product-image-fallback {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 100%;
    height: 100%;
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
  }
  
  .product-badge {
    position: absolute;
    top: 15px;
    right: 15px;
    background: rgba(255,255,255,0.95);
    backdrop-filter: blur(10px);
    padding: 8px 15px;
    border-radius: 20px;
    font-size: 12px;
    font-weight: 600;
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
  }
  
  .badge-stock {
    color: #10b981;
  }
  
  .badge-limited {
    color: #f59e0b;
  }
  
  .badge-unavailable {
    color: #ef4444;
  }
  
  .product-body {
    padding: 25px;
  }
  
  .product-title {
    font-size: 20px;
    font-weight: 700;
    color: #2d3748;
    margin-bottom: 10px;
  }
  
  .product-description {
    color: #718096;
    font-size: 14px;
    margin-bottom: 15px;
    line-height: 1.6;
  }
  
  .product-price {
    font-size: 28px;
    font-weight: 700;
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
    margin-bottom: 15px;
  }
  
  .product-meta {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding-top: 15px;
    border-top: 1px solid #e9ecef;
    font-size: 13px;
    color: #718096;
  }
  
  .category-tag {
    display: inline-block;
    padding: 5px 12px;
    background: #f8f9fa;
    border-radius: 15px;
    font-size: 12px;
    color: #667eea;
    font-weight: 600;
    margin-bottom: 10px;
  }
  
  .product-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
    gap: 30px;
  }
  
  .contact-cta {
    margin-top: 25px;
    padding: 20px;
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    border-radius: 15px;
    color: white;
    text-align: center;
  }
  
  .contact-cta h5 {
    margin-bottom: 10px;
    font-weight: 700;
  }
  
  .contact-cta p {
    margin-bottom: 0;
    opacity: 0.9;
  }
  
  @media (max-width: 768px) {
    .product-grid {
      grid-template-columns: 1fr;
    }
    
    .coop-info-card {
      text-align: center;
    }
    
    .coop-logo {
      margin: 0 auto 20px;
    }
  }
</style>

<!-- ============================================================ -->
<!-- HERO SECTION -->
<!-- ============================================================ -->
<section class="products-hero">
  <div class="container position-relative">
    <div class="breadcrumb-custom">
      <a href="/marketplace"><i class="bi bi-house-door"></i> Marketplace</a>
      <i class="bi bi-chevron-right"></i>
      <span id="coopBreadcrumb">Coopérative</span>
    </div>
    <h1 class="display-4 fw-bold mb-3" id="heroTitle" style="color: #fff">Nos Produits</h1>
    <p class="lead" id="heroSubtitle">Découvrez notre gamme complète de produits de qualité</p>
  </div>
</section>

<!-- ============================================================ -->
<!-- INFO COOPÉRATIVE -->
<!-- ============================================================ -->
<section class="py-5">
  <div class="container">
    <div class="coop-info-card">
      <div class="row g-4">
        <!-- Informations principales -->
        <div class="col-lg-7">
          <div class="d-flex align-items-start gap-3 mb-4">
            <div class="coop-logo" id="coopLogo">
              <i class="bi bi-shop"></i>
            </div>
            <div class="flex-grow-1">
              <h2 class="fw-bold mb-2" id="coopName">Coopérative</h2>
              <p class="text-muted mb-3" id="coopLocation">
                <i class="bi bi-geo-alt-fill me-2"></i>Localisation
              </p>
              <p class="text-secondary lh-lg" id="coopDescription">
                Description de la coopérative et de ses valeurs...
              </p>
            </div>
          </div>
          
          <!-- Statistiques -->
          <div class="row g-3 mt-4">
            <div class="col-6 col-md-4">
              <div class="stat-card">
                <div class="stat-icon">
                  <i class="bi bi-box-seam"></i>
                </div>
                <div class="stat-value" id="statProducts">12</div>
                <div class="stat-label">Produits</div>
              </div>
            </div>
            <div class="col-6 col-md-4">
              <div class="stat-card">
                <div class="stat-icon">
                  <i class="bi bi-star-fill"></i>
                </div>
                <div class="stat-value">4.8</div>
                <div class="stat-label">Note moyenne</div>
              </div>
            </div>
            <div class="col-6 col-md-4">
              <div class="stat-card">
                <div class="stat-icon">
                  <i class="bi bi-people-fill"></i>
                </div>
                <div class="stat-value">500+</div>
                <div class="stat-label">Clients</div>
              </div>
            </div>
          </div>
        </div>
        
        <!-- Section Contact -->
        <div class="col-lg-5">
          <div class="contact-section h-100">
            <div class="contact-header">
              <i class="bi bi-telephone-outgoing-fill"></i>
              <span>Contactez-nous</span>
            </div>
            
            <div id="contactItems" class="mb-3">
              <!-- Les items de contact seront ajoutés ici -->
            </div>
            
            <div class="contact-cta">
              <div class="d-flex align-items-center mb-2">
                <i class="bi bi-chat-dots-fill fs-4 me-3"></i>
                <div>
                  <h6 class="mb-0 fw-bold">Besoin d'informations ?</h6>
                  <small class="opacity-90">Notre équipe est à votre écoute</small>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ============================================================ -->
<!-- FILTRES ET TRI -->
<!-- ============================================================ -->
<section class="pb-4">
  <div class="container">
    <div class="filter-section">
      <div class="row align-items-center">
        <div class="col-md-6 mb-3 mb-md-0">
          <div class="input-group">
            <span class="input-group-text bg-white border-end-0">
              <i class="bi bi-search"></i>
            </span>
            <input type="text" class="form-control border-start-0" 
                   id="productSearch" 
                   placeholder="Rechercher un produit...">
          </div>
        </div>
        <div class="col-md-3 mb-3 mb-md-0">
          <select class="form-select sort-dropdown" id="sortProducts">
            <option value="default">Trier par</option>
            <option value="name-asc">Nom (A-Z)</option>
            <option value="name-desc">Nom (Z-A)</option>
            <option value="price-asc">Prix croissant</option>
            <option value="price-desc">Prix décroissant</option>
          </select>
        </div>
        <div class="col-md-3">
          <div class="text-md-end">
            <strong id="productCount">0</strong> produits disponibles
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ============================================================ -->
<!-- GRILLE DES PRODUITS -->
<!-- ============================================================ -->
<section class="pb-5">
  <div class="container">
    <div class="product-grid" id="productsGrid">
      <!-- Les produits seront ajoutés ici dynamiquement -->
    </div>
    
    <div id="noProducts" style="display:none;" class="text-center py-5">
      <i class="bi bi-inbox" style="font-size: 80px; color: #e9ecef;"></i>
      <h4 class="mt-3 text-muted">Aucun produit trouvé</h4>
    </div>
  </div>
</section>

<!-- ============================================================ -->
<!-- JAVASCRIPT -->
<!-- ============================================================ -->
<script>
// Base de données des produits par coopérative
const cooperativesData = {
  'Coopérative Agricole Diamniadio': {
    icon: 'bi-basket',
    location: 'Dakar',
    description: 'Producteurs agricoles certifiés bio depuis 2015. Nous cultivons des céréales et légumineuses de qualité supérieure en respectant l\'environnement.',
    contacts: [
      { icon: 'bi-telephone-fill', label: 'Téléphone', value: '+221 77 123 45 67', action: 'tel:+221771234567' },
      { icon: 'bi-envelope-fill', label: 'Email', value: 'contact@coop-diamniadio.sn', action: 'mailto:contact@coop-diamniadio.sn' },
      { icon: 'bi-globe', label: 'Site Web', value: 'www.coop-diamniadio.sn', action: 'https://www.coop-diamniadio.sn' },
      { icon: 'bi-geo-alt-fill', label: 'Adresse', value: 'Zone industrielle, Diamniadio', action: 'https://maps.google.com/?q=Diamniadio' }
    ],
   products: [
      { name: 'Riz Bio Premium', price: 2500, unit: 'kg', category: 'Céréales', stock: 'En stock', icon: 'bi-basket', description: 'Riz bio de première qualité, cultivé sans pesticides', image: 'https://images.unsplash.com/photo-1586201375761-83865001e31c?w=500&q=80' },
      { name: 'Mil Local', price: 1800, unit: 'kg', category: 'Céréales', stock: 'En stock', icon: 'bi-basket', description: 'Mil traditionnel sénégalais', image: 'https://www.rural21.com/fileadmin/img/content/News/News_2022/News_8_22_klein.jpg' },
      { name: 'Maïs Bio', price: 2000, unit: 'kg', category: 'Céréales', stock: 'En stock', icon: 'bi-basket', description: 'Maïs biologique certifié', image: 'https://images.unsplash.com/photo-1551754655-cd27e38d2076?w=500&q=80' },
      { name: 'Arachide de bouche', price: 3200, unit: 'kg', category: 'Légumineuses', stock: 'Stock limité', icon: 'bi-basket', description: 'Arachides sélectionnées pour leur qualité', image: 'https://images.ricardocuisine.com/services/articles/arachides-intro-1569262819-1575304076.jpg' },
      { name: 'Huile d\'arachide', price: 4500, unit: 'L', category: 'Huiles', stock: 'En stock', icon: 'bi-droplet', description: 'Huile pure pressée à froid', image: 'https://saveurstogo.com/wp-content/uploads/2025/04/217679944-H-768x525-1.jpg' },
      { name: 'Fonio Bio', price: 3500, unit: 'kg', category: 'Céréales', stock: 'En stock', icon: 'bi-basket', description: 'Céréale ancestrale riche en nutriments', image: 'https://neerwaya.fr/wp-content/uploads/2025/02/fonio-01-400x250.jpg.webp' },
      { name: 'Niébé', price: 2200, unit: 'kg', category: 'Légumineuses', stock: 'En stock', icon: 'bi-basket', description: 'Haricots locaux nutritifs', image: 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSymM_rUmEoWjR3gECkFTVJBq_xosCaP830aQ&s' },
      { name: 'Sorgho', price: 1900, unit: 'kg', category: 'Céréales', stock: 'Stock limité', icon: 'bi-basket', description: 'Sorgho rouge de qualité', image: 'https://img.cuisineaz.com/680x357/2019/06/28/i147785-sorgho.jpeg' },
      { name: 'Sésame', price: 2800, unit: 'kg', category: 'Graines', stock: 'En stock', icon: 'bi-basket', description: 'Graines de sésame premium', image: 'https://resize.prod.femina.ladmedia.fr/rblr/1200,806/img/var/2023-12/se-same-1-.jpg' },
      { name: 'Bissap (Hibiscus)', price: 1500, unit: 'kg', category: 'Infusions', stock: 'En stock', icon: 'bi-flower1', description: 'Fleurs séchées pour infusions', image: 'https://pharmaciegombert.pharmavie.fr/uploads/conseils/61c48415d0feb905672968.jpg' },
      { name: 'Gombo séché', price: 2100, unit: 'kg', category: 'Légumes', stock: 'En stock', icon: 'bi-basket', description: 'Gombo séché naturellement', image: 'https://monkadi.com/cdn/shop/products/mon-kadi-gombo-sec-livraison-produits-exotiques_700x700.jpg?v=1588880642' },
      { name: 'Poudre de baobab', price: 3800, unit: 'kg', category: 'Super-aliments', stock: 'Stock limité', icon: 'bi-tree', description: 'Poudre de pain de singe riche en vitamine C', image: 'https://chicobab.ca/cdn/shop/articles/chicobab_organic_baobab_superfruit_powder.jpg?v=1721165837' }
    ]
  },
  'Association Artisanat Solidaire': {
    icon: 'bi-palette',
    location: 'Kaolack',
    description: 'Association d\'artisans traditionnels perpétuant le savoir-faire ancestral. Chaque pièce est unique et fabriquée à la main.',
    contacts: [
      { icon: 'bi-telephone-fill', label: 'Téléphone', value: '+221 77 234 56 78', action: 'tel:+221772345678' },
      { icon: 'bi-envelope-fill', label: 'Email', value: 'info@artisanat-solidaire.sn', action: 'mailto:info@artisanat-solidaire.sn' },
      { icon: 'bi-globe', label: 'Site Web', value: 'www.artisanat-solidaire.sn', action: 'https://www.artisanat-solidaire.sn' },
      { icon: 'bi-geo-alt-fill', label: 'Adresse', value: 'Marché artisanal, Kaolack', action: 'https://maps.google.com/?q=Kaolack' }
    ],
    products: [
      { name: 'Panier en osier', price: 5000, unit: 'pièce', category: 'Vannerie', stock: 'En stock', icon: 'bi-basket2', description: 'Panier tressé main traditionnel' },
      { name: 'Bijoux artisanaux', price: 8500, unit: 'pièce', category: 'Bijouterie', stock: 'En stock', icon: 'bi-gem', description: 'Bijoux en perles et bronze' },
      { name: 'Sac à main en cuir', price: 15000, unit: 'pièce', category: 'Maroquinerie', stock: 'En stock', icon: 'bi-bag', description: 'Sac en cuir véritable tanné naturellement' },
      { name: 'Poterie décorée', price: 7500, unit: 'pièce', category: 'Céramique', stock: 'Stock limité', icon: 'bi-box', description: 'Poterie traditionnelle peinte à la main' },
      { name: 'Calebasse sculptée', price: 6000, unit: 'pièce', category: 'Décoration', stock: 'En stock', icon: 'bi-circle', description: 'Calebasse gravée avec motifs traditionnels' },
      { name: 'Masque africain', price: 12000, unit: 'pièce', category: 'Art', stock: 'Stock limité', icon: 'bi-mask', description: 'Masque sculpté en bois précieux' },
      { name: 'Tapis tissé', price: 25000, unit: 'pièce', category: 'Textile', stock: 'En stock', icon: 'bi-grid-3x3', description: 'Tapis tissé main avec motifs géométriques' },
      { name: 'Collier en perles', price: 4500, unit: 'pièce', category: 'Bijouterie', stock: 'En stock', icon: 'bi-gem', description: 'Collier traditionnel en perles de verre' },
      { name: 'Bracelet en bronze', price: 3500, unit: 'pièce', category: 'Bijouterie', stock: 'En stock', icon: 'bi-gem', description: 'Bracelet forgé artisanalement' },
      { name: 'Statuette en ébène', price: 18000, unit: 'pièce', category: 'Art', stock: 'Stock limité', icon: 'bi-person-standing', description: 'Sculpture en bois d\'ébène' },
      { name: 'Set de table tissé', price: 3000, unit: 'pièce', category: 'Décoration', stock: 'En stock', icon: 'bi-grid', description: 'Sets de table en fibres naturelles' },
      { name: 'Instrument djembé', price: 35000, unit: 'pièce', category: 'Musique', stock: 'Stock limité', icon: 'bi-music-note', description: 'Djembé traditionnel sculpté' },
      { name: 'Boîte à bijoux', price: 8000, unit: 'pièce', category: 'Décoration', stock: 'En stock', icon: 'bi-box-seam', description: 'Coffret en bois sculpté' },
      { name: 'Portefeuille cuir', price: 9500, unit: 'pièce', category: 'Maroquinerie', stock: 'En stock', icon: 'bi-wallet2', description: 'Portefeuille en cuir tanné' },
      { name: 'Eventail décoré', price: 2500, unit: 'pièce', category: 'Accessoires', stock: 'En stock', icon: 'bi-fan', description: 'Eventail tissé et décoré' },
      { name: 'Miroir encadré', price: 11000, unit: 'pièce', category: 'Décoration', stock: 'Stock limité', icon: 'bi-square', description: 'Miroir avec cadre sculpté' },
      { name: 'Lampe artisanale', price: 16000, unit: 'pièce', category: 'Luminaire', stock: 'En stock', icon: 'bi-lightbulb', description: 'Lampe en calebasse et bois' },
      { name: 'Coussin brodé', price: 5500, unit: 'pièce', category: 'Textile', stock: 'En stock', icon: 'bi-app', description: 'Coussin avec broderie traditionnelle' }
    ]
  },
  'Coopérative Pêche Artisanale': {
    icon: 'bi-moisture',
    location: 'Saint-Louis',
    description: 'Coopérative de pêcheurs artisanaux proposant des produits de la mer frais et de qualité, pêchés de manière durable.',
    contacts: [
      { icon: 'bi-telephone-fill', label: 'Téléphone', value: '+221 77 345 67 89', action: 'tel:+221773456789' },
      { icon: 'bi-envelope-fill', label: 'Email', value: 'peche@coop-stlouis.sn', action: 'mailto:peche@coop-stlouis.sn' },
      { icon: 'bi-globe', label: 'Site Web', value: 'www.peche-stlouis.sn', action: 'https://www.peche-stlouis.sn' },
      { icon: 'bi-geo-alt-fill', label: 'Adresse', value: 'Port de pêche, Saint-Louis', action: 'https://maps.google.com/?q=Saint-Louis' }
    ],
    products: [
      { name: 'Poisson frais', price: 3500, unit: 'kg', category: 'Poissons', stock: 'En stock', icon: 'bi-moisture', description: 'Poisson frais du jour, pêché localement' },
      { name: 'Poisson séché', price: 6000, unit: 'kg', category: 'Conserves', stock: 'En stock', icon: 'bi-moisture', description: 'Poisson séché traditionnellement' },
      { name: 'Crevettes fraîches', price: 8500, unit: 'kg', category: 'Crustacés', stock: 'Stock limité', icon: 'bi-moisture', description: 'Crevettes fraîches de qualité' },
      { name: 'Yett (escargot de mer)', price: 4200, unit: 'kg', category: 'Fruits de mer', stock: 'En stock', icon: 'bi-moisture', description: 'Escargots de mer frais' }
    ]
  },
  'Coopérative Femmes de Thiès': {
    icon: 'bi-flower1',
    location: 'Thiès',
    description: 'Coopérative de femmes productrices de cosmétiques naturels et produits dérivés du karité, baobab et autres plantes locales.',
    contacts: [
      { icon: 'bi-telephone-fill', label: 'Téléphone', value: '+221 77 456 78 90', action: 'tel:+221774567890' },
      { icon: 'bi-envelope-fill', label: 'Email', value: 'femmes@coop-thies.sn', action: 'mailto:femmes@coop-thies.sn' },
      { icon: 'bi-globe', label: 'Site Web', value: 'www.femmes-thies.sn', action: 'https://www.femmes-thies.sn' },
      { icon: 'bi-geo-alt-fill', label: 'Adresse', value: 'Centre-ville, Thiès', action: 'https://maps.google.com/?q=Thies' }
    ],
    products: [
      { name: 'Beurre de karité pur', price: 3800, unit: '250g', category: 'Cosmétiques', stock: 'En stock', icon: 'bi-flower1', description: 'Beurre de karité 100% naturel' },
      { name: 'Savon noir artisanal', price: 1500, unit: 'pièce', category: 'Hygiène', stock: 'En stock', icon: 'bi-flower1', description: 'Savon noir traditionnel' },
      { name: 'Huile de baobab', price: 5200, unit: '100ml', category: 'Huiles', stock: 'En stock', icon: 'bi-droplet-half', description: 'Huile de baobab pure' },
      { name: 'Poudre de néré', price: 2800, unit: 'kg', category: 'Alimentation', stock: 'En stock', icon: 'bi-flower2', description: 'Poudre de néré pour assaisonnement' }
    ]
  },
  'Coopérative Textile Ndakarou': {
    icon: 'bi-scissors',
    location: 'Dakar',
    description: 'Coopérative spécialisée dans la confection de vêtements traditionnels et modernes en tissus africains.',
    contacts: [
      { icon: 'bi-telephone-fill', label: 'Téléphone', value: '+221 77 567 89 01', action: 'tel:+221775678901' },
      { icon: 'bi-envelope-fill', label: 'Email', value: 'textile@coop-ndakarou.sn', action: 'mailto:textile@coop-ndakarou.sn' },
      { icon: 'bi-globe', label: 'Site Web', value: 'www.textile-ndakarou.sn', action: 'https://www.textile-ndakarou.sn' },
      { icon: 'bi-geo-alt-fill', label: 'Adresse', value: 'Médina, Dakar', action: 'https://maps.google.com/?q=Medina+Dakar' }
    ],
    products: [
      { name: 'Boubou traditionnel', price: 25000, unit: 'pièce', category: 'Vêtements', stock: 'En stock', icon: 'bi-scissors', description: 'Boubou traditionnel sur mesure' },
      { name: 'Pagne tissé main', price: 18000, unit: 'pièce', category: 'Tissus', stock: 'En stock', icon: 'bi-scissors', description: 'Pagne tissé à la main' },
      { name: 'Robe en wax', price: 22000, unit: 'pièce', category: 'Vêtements', stock: 'Stock limité', icon: 'bi-person-dress', description: 'Robe moderne en wax' }
    ]
  },
  'Coopérative Éducation & Formation': {
    icon: 'bi-mortarboard',
    location: 'Ziguinchor',
    description: 'Coopérative offrant des formations professionnelles et programmes d\'alphabétisation pour le développement des compétences.',
    contacts: [
      { icon: 'bi-telephone-fill', label: 'Téléphone', value: '+221 77 678 90 12', action: 'tel:+221776789012' },
      { icon: 'bi-envelope-fill', label: 'Email', value: 'formation@coop-education.sn', action: 'mailto:formation@coop-education.sn' },
      { icon: 'bi-globe', label: 'Site Web', value: 'www.education-formation.sn', action: 'https://www.education-formation.sn' },
      { icon: 'bi-geo-alt-fill', label: 'Adresse', value: 'Centre de formation, Ziguinchor', action: 'https://maps.google.com/?q=Ziguinchor' }
    ],
    products: [
      { name: 'Formation en couture', price: 45000, unit: '3 mois', category: 'Formation', stock: 'En stock', icon: 'bi-mortarboard', description: 'Formation complète en couture' },
      { name: 'Alphabétisation', price: 0, unit: 'session', category: 'Éducation', stock: 'En stock', icon: 'bi-book', description: 'Programme d\'alphabétisation gratuit' },
      { name: 'Initiation informatique', price: 35000, unit: '2 mois', category: 'Formation', stock: 'Stock limité', icon: 'bi-laptop', description: 'Formation en informatique de base' }
    ]
  }
};

// Variables globales
let currentCoop = null;
let allProducts = [];
let displayedProducts = [];

// Initialisation
document.addEventListener('DOMContentLoaded', function() {
  const urlParams = new URLSearchParams(window.location.search);
  const coopName = urlParams.get('coop') || 'Coopérative Agricole Diamniadio';
  const searchTerm = urlParams.get('search');
  
  loadCooperativeData(coopName);
  setupEventListeners();
  
  if (searchTerm) {
    document.getElementById('productSearch').value = searchTerm;
    filterProducts(searchTerm);
  }
});

// Charger les données de la coopérative
function loadCooperativeData(coopName) {
  currentCoop = cooperativesData[coopName];
  
  if (!currentCoop) {
    console.error('Coopérative non trouvée');
    window.location.href = '/marketplace';
    return;
  }
  
  // Mettre à jour le hero
  document.getElementById('heroTitle').textContent = coopName;
  document.getElementById('heroSubtitle').textContent = `${currentCoop.products.length} produits disponibles`;
  document.getElementById('coopBreadcrumb').textContent = coopName;
  
  // Mettre à jour les infos
  document.getElementById('coopLogo').innerHTML = `<i class="bi ${currentCoop.icon}"></i>`;
  document.getElementById('coopName').textContent = coopName;
  document.getElementById('coopLocation').innerHTML = `<i class="bi bi-geo-alt me-2"></i>${currentCoop.location}`;
  document.getElementById('coopDescription').textContent = currentCoop.description;
  
  // Afficher les contacts
  const contactItems = document.getElementById('contactItems');
  contactItems.innerHTML = currentCoop.contacts.map(contact => `
    <a href="${contact.action}" class="contact-item text-decoration-none" target="_blank">
      <div class="contact-icon">
        <i class="bi ${contact.icon}"></i>
      </div>
      <div class="contact-details">
        <div class="contact-label">${contact.label}</div>
        <div class="contact-value">${contact.value}</div>
      </div>
      <div class="contact-action">
        <i class="bi bi-arrow-right"></i>
      </div>
    </a>
  `).join('');
  
  // Charger les produits
  allProducts = currentCoop.products;
  displayedProducts = [...allProducts];
  displayProducts(displayedProducts);
  updateProductCount();
}

// Afficher les produits
function displayProducts(products) {
  const grid = document.getElementById('productsGrid');
  const noProducts = document.getElementById('noProducts');
  
  if (products.length === 0) {
    grid.style.display = 'none';
    noProducts.style.display = 'block';
    return;
  }
  
  grid.style.display = 'grid';
  noProducts.style.display = 'none';
  
  grid.innerHTML = products.map((product, index) => `
    <div class="product-card">
      <div class="product-image">
        ${product.image 
          ? `<img src="${product.image}" alt="${product.name}" onerror="this.parentElement.innerHTML='<div class=\\'product-image-fallback\\'><i class=\\'bi ${product.icon}\\' style=\\'font-size: 80px; color: white;\\'></i></div>'">` 
          : `<div class="product-image-fallback"><i class="bi ${product.icon}" style="font-size: 80px; color: white;"></i></div>`
        }
        <span class="product-badge ${getStockClass(product.stock)}">
          <i class="bi ${getStockIcon(product.stock)} me-1"></i>${product.stock}
        </span>
      </div>
      <div class="product-body">
        <span class="category-tag">${product.category}</span>
        <h5 class="product-title">${product.name}</h5>
        <p class="product-description">${product.description}</p>
        <div class="product-price">
          ${product.price === 0 ? 'Gratuit' : product.price.toLocaleString() + ' FCFA'}
          ${product.price > 0 ? '<span style="font-size: 16px;">/' + product.unit + '</span>' : ''}
        </div>
        <div class="product-meta">
          <span><i class="bi bi-tag me-1"></i>${product.category}</span>
          <span><i class="bi ${getStockIcon(product.stock)} me-1"></i>${product.stock}</span>
        </div>
      </div>
    </div>
  `).join('');
}

// Mettre à jour le compteur de produits
function updateProductCount() {
  document.getElementById('productCount').textContent = displayedProducts.length;
}

// Classes CSS pour les stocks
function getStockClass(stock) {
  if (stock === 'En stock') return 'badge-stock';
  if (stock === 'Stock limité') return 'badge-limited';
  return 'badge-unavailable';
}

// Icônes pour les stocks
function getStockIcon(stock) {
  if (stock === 'En stock') return 'bi-check-circle-fill';
  if (stock === 'Stock limité') return 'bi-exclamation-circle-fill';
  return 'bi-x-circle-fill';
}

// Filtrer les produits
function filterProducts(searchTerm) {
  const term = searchTerm.toLowerCase();
  displayedProducts = allProducts.filter(product => 
    product.name.toLowerCase().includes(term) ||
    product.description.toLowerCase().includes(term) ||
    product.category.toLowerCase().includes(term)
  );
  displayProducts(displayedProducts);
  updateProductCount();
}

// Configuration des événements
function setupEventListeners() {
  // Recherche de produits
  const searchInput = document.getElementById('productSearch');
  searchInput.addEventListener('input', function() {
    filterProducts(this.value);
  });
  
  // Tri des produits
  const sortSelect = document.getElementById('sortProducts');
  sortSelect.addEventListener('change', function() {
    let sortedProducts = [...displayedProducts];
    
    switch(this.value) {
      case 'name-asc':
        sortedProducts.sort((a, b) => a.name.localeCompare(b.name));
        break;
      case 'name-desc':
        sortedProducts.sort((a, b) => b.name.localeCompare(a.name));
        break;
      case 'price-asc':
        sortedProducts.sort((a, b) => a.price - b.price);
        break;
      case 'price-desc':
        sortedProducts.sort((a, b) => b.price - a.price);
        break;
      default:
        sortedProducts = [...displayedProducts];
    }
    
    displayProducts(sortedProducts);
  });
}
</script>

</main>
@endsection