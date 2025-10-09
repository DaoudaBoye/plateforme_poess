 <style>
/* -- ========================================
     HEADER PRINCIPAL - POESS
     ======================================== - */

  /* Couleur du texte noir avec opacité */
  .text-black {
    color: rgba(0, 0, 0, 0.66) !important;
  }

  /* Titre responsive */
  .titre {
    font-size: 0.9rem;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    line-height: 1.3;
    font-weight: 800;
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




    /* Responsive pour les petits écrans */
    @media (max-width: 576px) {
      .modal-dialog {
        max-width: 90%;
      }
    }


    /* Style pour les cubes animés */
    .loading-cubes {
      display: flex;
      justify-content: center;
      align-items: center;
      gap: 5px;
    }

    .loading-cube {
      width: 20px;
      height: 20px;
      background-color: #007bff;
      border-radius: 5px;
      animation: bounce 0.6s infinite alternate;
    }

    .loading-cube:nth-child(2) {
      animation-delay: 0.2s;
    }

    .loading-cube:nth-child(3) {
      animation-delay: 0.4s;
    }

    /* Animation pour les cubes */
    @keyframes bounce {
      0% {
        transform: translateY(0);
      }
      100% {
        transform: translateY(-15px);
      }
    }
    
    /* Masquer les cubes au départ */
    .loading-cubes {
      display: none;
    }
 
/*--------------------------------------------------------------
# Articles Section Styles
--------------------------------------------------------------*/
    :root {
      --primary-color: #0d6efd;
      --gradient-start: #f5f7fa;
      --gradient-end: #c3cfe2;
      --card-shadow: 0 4px 6px rgba(0, 0, 0, 0.07);
      --card-shadow-hover: 0 12px 24px rgba(0, 0, 0, 0.15);
      --transition-speed: 0.3s;
    }

    body {
      font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif;
    }

    .articles-section {
      background: linear-gradient(135deg, var(--gradient-start) 0%, var(--gradient-end) 100%);
      padding: 80px 0;
      position: relative;
      overflow: hidden;
    }

    .articles-section::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      height: 100%;
      background: url('data:image/svg+xml,<svg width="100" height="100" xmlns="http://www.w3.org/2000/svg"><circle cx="50" cy="50" r="2" fill="%23ffffff" opacity="0.1"/></svg>');
      pointer-events: none;
    }

    .section-title h2 {
      font-size: 2.5rem;
      color: #2c3e50;
      position: relative;
      display: inline-block;
    }

    /* Featured Article */
    .featured-article {
      border-radius: 20px;
      overflow: hidden;
      transition: transform var(--transition-speed);
    }

    .featured-article:hover {
      transform: translateY(-5px);
      box-shadow: var(--card-shadow-hover);
    }

    .featured-article img {
      transition: transform 0.5s ease;
    }

    .featured-article:hover img {
      transform: scale(1.05);
    }

    /* Article Cards */
    .article-card {
      border-radius: 15px;
      overflow: hidden;
      transition: all var(--transition-speed) ease;
      background: white;
    }

    .article-card:hover {
      transform: translateY(-8px);
      box-shadow: var(--card-shadow-hover);
    }

    .article-card .card-img-top {
      transition: transform 0.5s ease;
    }

    .article-card:hover .card-img-top {
      transform: scale(1.1);
    }

    .article-card .stretched-link:hover {
      color: var(--primary-color) !important;
    }

    /* Filter Buttons */
    .filter-btn {
      border-radius: 50px;
      padding: 10px 24px;
      transition: all var(--transition-speed);
      border: 2px solid var(--primary-color);
      background: white;
      color: var(--primary-color);
    }

    .filter-btn:hover, .filter-btn.active {
      background: var(--primary-color);
      color: white;
      transform: translateY(-2px);
      box-shadow: 0 4px 12px rgba(13, 110, 253, 0.3);
    }

    /* Newsletter Card */
    .newsletter-card {
      background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
      border-radius: 15px;
      position: relative;
      overflow: hidden;
    }

    .newsletter-card::before {
      content: '';
      position: absolute;
      top: -50%;
      right: -50%;
      width: 200%;
      height: 200%;
      background: radial-gradient(circle, rgba(255,255,255,0.1) 0%, transparent 70%);
      animation: pulse 4s ease-in-out infinite;
    }

    @keyframes pulse {
      0%, 100% { transform: scale(1); }
      50% { transform: scale(1.1); }
    }

    .newsletter-card .form-control {
      border: none;
      border-radius: 50px 0 0 50px;
      padding: 12px 20px;
    }

    .newsletter-card .btn {
      border-radius: 0 50px 50px 0;
      padding: 12px 24px;
    }

    /* Badge Styles */
    .badge {
      font-weight: 600;
      padding: 8px 16px;
      border-radius: 50px;
      font-size: 0.85rem;
    }

    /* Avatar */
    .avatar {
      font-weight: 600;
      box-shadow: 0 2px 4px rgba(0,0,0,0.1);
    }

    /* Responsive */
    @media (max-width: 768px) {
      .section-title h2 {
        font-size: 1.8rem;
      }

      .featured-article .card-body {
        padding: 2rem !important;
      }

      .filter-btn {
        font-size: 0.9rem;
        padding: 8px 16px;
      }
    }

    /* Loading Animation */
    @keyframes fadeInUp {
      from {
        opacity: 0;
        transform: translateY(30px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    .fade-in-up {
      animation: fadeInUp 0.6s ease-out;
    }

    /* Accessibility */
    .btn:focus, .form-control:focus {
      outline: 3px solid rgba(13, 110, 253, 0.5);
      outline-offset: 2px;
    }

    .stretched-link::after {
      position: absolute;
      top: 0;
      right: 0;
      bottom: 0;
      left: 0;
      z-index: 1;
      content: "";
    }



/*--------------------------------------------------------------
# Hero Carousel Section Styles
--------------------------------------------------------------*/

   /* Hero Carousel */
.hero {
    position: relative;
    width: 100%;
    min-height: 100vh;
    overflow: hidden;
}

#heroCarousel,
.carousel-inner,
.carousel-item {
    height: 100vh;
}

.carousel-item {
    position: relative;
}

.carousel-item img {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100vh;
    object-fit: cover;
    filter: brightness(0.5);
}

/* Badge flottant */
.floating-badge {
    position: absolute;
    top: 30px;
    right: 30px;
    z-index: 10;
    background: linear-gradient(135deg, #0d693a 0%, #0d693a 100%);
    color: #fff;
    padding: 12px 24px;
    border-radius: 50px;
    display: flex;
    align-items: center;
    gap: 8px;
    font-weight: 600;
    box-shadow: 0 4px 15px rgba(255, 215, 0, 0.4);
    animation: float 3s ease-in-out infinite;
}

.badge-icon {
    font-size: 1.2rem;
}

.badge-text {
    font-size: 0.95rem;
}

@keyframes float {
    0%, 100% {
        transform: translateY(0px);
    }
    50% {
        transform: translateY(-10px);
    }
}

/* Conteneur du carousel */
/* .carousel-container {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    text-align: center;
    color: white;
    max-width: 900px;
    width: 90%;
    z-index: 2;
} */

/* Tag Hero */
.hero-tag {
    display: inline-block;
    background: rgba(255, 255, 255, 0.15);
    backdrop-filter: blur(10px);
    padding: 8px 20px;
    border-radius: 25px;
    font-size: 0.95rem;
    font-weight: 500;
    margin-bottom: 20px;
    border: 1px solid rgba(255, 255, 255, 0.3);
}

/* Titres et textes */
.carousel-container h2 {
    font-size: 3rem;
    font-weight: 700;
    margin: 0 0 20px 0;
    line-height: 1.2;
}

.carousel-container p {
    font-size: 1.2rem;
    margin: 0 0 30px 0;
    opacity: 0.95;
    line-height: 1.6;
}

/* Animations */
.animate-slide-up {
    animation: slideUp 0.8s ease-out;
}

.animate-slide-up-delay {
    animation: slideUp 0.8s ease-out 0.2s both;
}

.animate-slide-up-delay-2 {
    animation: slideUp 0.8s ease-out 0.4s both;
}

@keyframes slideUp {
    from {
        opacity: 0;
        transform: translateY(30px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

/* Boutons CTA */
.hero-cta {
    display: flex;
    gap: 15px;
    justify-content: center;
    flex-wrap: wrap;
}

.btn-primary-cta,
.btn-secondary-cta {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    padding: 15px 40px;
    border-radius: 50px;
    text-decoration: none;
    font-weight: 600;
    font-size: 1.1rem;
    transition: all 0.3s ease;
    cursor: pointer;
}

.btn-primary-cta {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    color: white;
    box-shadow: 0 8px 20px rgba(102, 126, 234, 0.4);
    border: none;
}

.btn-primary-cta:hover {
    transform: translateY(-3px);
    box-shadow: 0 12px 30px rgba(102, 126, 234, 0.6);
    color: white;
}

.btn-primary-cta i {
    font-size: 1.2rem;
}

.btn-secondary-cta {
    background: rgba(255, 255, 255, 0.2);
    color: white;
    border: 2px solid rgba(255, 255, 255, 0.6);
    backdrop-filter: blur(10px);
}

.btn-secondary-cta:hover {
    background: rgba(255, 255, 255, 0.3);
    border-color: white;
    color: white;
    transform: translateY(-2px);
}

/* Contrôles du carousel */
.carousel-control-prev,
.carousel-control-next {
    width: 60px;
    height: 60px;
    top: 50%;
    transform: translateY(-50%);
    opacity: 0.8;
    transition: all 0.3s ease;
}

.carousel-control-prev {
    left: 30px;
}

.carousel-control-next {
    right: 30px;
}

.carousel-control-prev:hover,
.carousel-control-next:hover {
    opacity: 1;
}

.carousel-control-prev-icon,
.carousel-control-next-icon {
    width: 60px;
    height: 60px;
    background: rgba(255, 255, 255, 0.2);
    backdrop-filter: blur(10px);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    border: 2px solid rgba(255, 255, 255, 0.3);
}

.carousel-control-prev-icon i,
.carousel-control-next-icon i {
    font-size: 1.5rem;
    color: white;
}

/* Indicateurs */
.carousel-indicators {
    bottom: 30px;
    margin: 0;
}

.carousel-indicators button {
    width: 10px;
    height: 10px;
    border-radius: 50%;
    margin: 0 5px;
    background: rgba(255, 255, 255, 0.5);
    border: none;
    transition: all 0.3s ease;
}

.carousel-indicators button.active {
    width: 30px;
    border-radius: 5px;
    background: white;
}

.carousel-indicators button:hover {
    background: rgba(255, 255, 255, 0.8);
}

/* Effet de fondu pour le carousel */
.carousel-fade .carousel-item {
    opacity: 0;
    transition: opacity 0.6s ease-in-out;
}

.carousel-fade .carousel-item.active {
    opacity: 1;
}

/* Responsive Tablette */
@media (max-width: 992px) {
    .floating-badge {
        top: 20px;
        right: 20px;
        padding: 10px 20px;
    }
    
    .carousel-container h2 {
        font-size: 2.5rem;
    }
    
    .carousel-container p {
        font-size: 1.1rem;
    }
}

/* Responsive Mobile */
@media (max-width: 768px) {
    .floating-badge {
        top: 15px;
        right: 15px;
        padding: 8px 16px;
        font-size: 0.85rem;
    }
    
    .badge-icon {
        font-size: 1rem;
    }
    
    .carousel-container {
        width: 95%;
    }
    
    .carousel-container h2 {
        font-size: 2rem;
    }
    
    .carousel-container p {
        font-size: 1rem;
        margin-bottom: 25px;
    }
    
    .hero-tag {
        font-size: 0.85rem;
        padding: 6px 16px;
    }
    
    .hero-cta {
        flex-direction: column;
        gap: 12px;
    }
    
    .btn-primary-cta,
    .btn-secondary-cta {
        padding: 12px 30px;
        font-size: 1rem;
        width: 100%;
        justify-content: center;
    }
    
    .carousel-control-prev,
    .carousel-control-next {
        width: 45px;
        height: 45px;
    }
    
    .carousel-control-prev {
        left: 15px;
    }
    
    .carousel-control-next {
        right: 15px;
    }
    
    .carousel-control-prev-icon,
    .carousel-control-next-icon {
        width: 45px;
        height: 45px;
    }
    
    .carousel-control-prev-icon i,
    .carousel-control-next-icon i {
        font-size: 1.2rem;
    }
}

/* Responsive Petit Mobile */
@media (max-width: 576px) {
    .floating-badge {
        top: 10px;
        right: 10px;
        padding: 6px 12px;
        font-size: 0.75rem;
    }
    
    .badge-icon {
        font-size: 0.9rem;
    }
    
    .carousel-container h2 {
        font-size: 1.5rem;
        margin-bottom: 15px;
    }
    
    .carousel-container p {
        font-size: 0.9rem;
        margin-bottom: 20px;
    }
    
    .hero-tag {
        font-size: 0.75rem;
        padding: 5px 12px;
        margin-bottom: 15px;
    }
    
    .btn-primary-cta,
    .btn-secondary-cta {
        padding: 10px 25px;
        font-size: 0.95rem;
    }
    
    .carousel-indicators {
        bottom: 20px;
    }
    
    .carousel-indicators button {
        width: 8px;
        height: 8px;
        margin: 0 4px;
    }
    
    .carousel-indicators button.active {
        width: 24px;
    }
}

/* Amélioration de l'accessibilité */
.carousel-control-prev:focus,
.carousel-control-next:focus,
.carousel-indicators button:focus {
    outline: 2px solid white;
    outline-offset: 2px;
}

/* Performance - Réduction des animations sur les appareils à faible performance */
@media (prefers-reduced-motion: reduce) {
    .animate-slide-up,
    .animate-slide-up-delay,
    .animate-slide-up-delay-2,
    .floating-badge {
        animation: none;
    }
    
    .carousel-fade .carousel-item {
        transition: none;
    }
}





/*--------------------------------------------------------------
# Section Statistiques de Réalisation
--------------------------------------------------------------*/


/* Section Statistiques */
.stats-section {
  padding: 80px 0;
  background: linear-gradient(135deg, #f8f9fa 0%, #ffffff 100%);
  position: relative;
  overflow: hidden;
}

.stats-section::before {
  content: '';
  position: absolute;
  top: -50%;
  right: -10%;
  width: 500px;
  height: 500px;
  background: radial-gradient(circle, rgba(102, 126, 234, 0.1) 0%, transparent 70%);
  border-radius: 50%;
}

/* Titre de section */
.section-title h2 {
  font-size: 2.5rem;
  color: #2c3e50;
  position: relative;
  display: inline-block;
}

.section-title h2::after {
  content: '';
  position: absolute;
  bottom: -10px;
  left: 50%;
  transform: translateX(-50%);
  width: 80px;
  height: 4px;
  background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
  border-radius: 2px;
}

/* Cartes de Statistiques */
.stat-card {
  background: white;
  border-radius: 20px;
  padding: 2rem;
  box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
  transition: all 0.3s ease;
  height: 100%;
  position: relative;
  overflow: hidden;
}

.stat-card::before {
  content: '';
  position: absolute;
  top: -50%;
  right: -50%;
  width: 200%;
  height: 200%;
  background: radial-gradient(circle, rgba(102, 126, 234, 0.05) 0%, transparent 70%);
  transition: all 0.5s ease;
}

.stat-card:hover {
  transform: translateY(-10px);
  box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
}

.stat-card:hover::before {
  top: -30%;
  right: -30%;
}

.stat-icon {
  width: 70px;
  height: 70px;
  background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
  border-radius: 15px;
  display: flex;
  align-items: center;
  justify-content: center;
  margin-bottom: 1.5rem;
  position: relative;
  z-index: 1;
}

.stat-icon.bg-success {
  background: linear-gradient(135deg, #28a745 0%, #20c997 100%);
}

.stat-icon.bg-warning {
  background: linear-gradient(135deg, #ffc107 0%, #ff9800 100%);
}

.stat-icon.bg-info {
  background: linear-gradient(135deg, #17a2b8 0%, #00bcd4 100%);
}

.stat-icon i {
  font-size: 2rem;
  color: white;
}

.stat-content {
  position: relative;
  z-index: 1;
}

.stat-number {
  font-size: 2.5rem;
  font-weight: 700;
  color: #2c3e50;
  margin-bottom: 0.5rem;
}

.stat-label {
  font-size: 1rem;
  color: #6c757d;
  font-weight: 500;
  margin-bottom: 1rem;
}

/* Barre de progression */
.stat-progress {
  width: 100%;
  height: 8px;
  background: #e9ecef;
  border-radius: 10px;
  overflow: hidden;
  margin-bottom: 1rem;
}

.stat-progress .progress-bar {
  height: 100%;
  width: 0;
  background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
  border-radius: 10px;
  transition: width 2s ease;
}

.stat-progress .progress-bar.bg-success {
  background: linear-gradient(135deg, #28a745 0%, #20c997 100%);
}

.stat-progress .progress-bar.bg-warning {
  background: linear-gradient(135deg, #ffc107 0%, #ff9800 100%);
}

.stat-progress .progress-bar.bg-info {
  background: linear-gradient(135deg, #17a2b8 0%, #00bcd4 100%);
}

.stat-info {
  color: #6c757d;
  font-size: 0.85rem;
}

/* Graphique Circulaire */
.circular-progress {
  position: relative;
  width: 180px;
  height: 180px;
  margin: 0 auto;
}

.circular-progress svg {
  transform: rotate(-90deg);
  width: 100%;
  height: 100%;
}

.circular-progress circle {
  fill: none;
  stroke-width: 12;
}

.circular-progress .bg-circle {
  stroke: #e9ecef;
}

.circular-progress .progress-circle {
  stroke: #667eea;
  stroke-dasharray: 502;
  stroke-dashoffset: 502;
  stroke-linecap: round;
  transition: stroke-dashoffset 2s ease;
}

.circular-progress .inner-circle {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}

.percentage-text {
  font-size: 2.5rem;
  font-weight: 700;
  color: #667eea;
}

/* Liste de progression */
.progress-list {
  display: flex;
  flex-direction: column;
  gap: 1.5rem;
}

.progress-bar-container {
  width: 100%;
  height: 10px;
  background: #e9ecef;
  border-radius: 10px;
  overflow: hidden;
}

.progress-bar-fill {
  height: 100%;
  width: 0;
  border-radius: 10px;
  transition: width 1.5s ease;
}

/* Secteurs d'activité */
.sectors-list {
  display: flex;
  flex-direction: column;
}

.sector-icon {
  width: 45px;
  height: 45px;
  border-radius: 12px;
  display: flex;
  align-items: center;
  justify-content: center;
  flex-shrink: 0;
}

.sector-icon i {
  font-size: 1.3rem;
  color: white;
}

/* Animations */
.fade-in-up {
  opacity: 0;
  transform: translateY(30px);
  transition: all 0.6s ease-out;
}

/* Responsive */
@media (max-width: 768px) {
  .stats-section {
    padding: 60px 0;
  }
  
  .section-title h2 {
    font-size: 2rem;
  }
  
  .stat-number {
    font-size: 2rem;
  }
  
  .circular-progress {
    width: 150px;
    height: 150px;
  }
  
  .percentage-text {
    font-size: 2rem;
  }
  
  .btn-primary.btn-lg,
  .btn-outline-primary.btn-lg {
    padding: 12px 30px;
    font-size: 1rem;
  }
}
  </style>