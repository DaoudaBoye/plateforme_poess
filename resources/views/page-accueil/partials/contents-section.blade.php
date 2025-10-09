<!-- ============================================================ -->
<!-- SECTION ARTICLES & ACTUALITÉS -->
<!-- ============================================================ -->
<section id="articles" class="articles-section py-5">
  <div class="container">
    
    <!-- En-tête -->
    <header class="section-title text-center mb-5 fade-in-up">
      <h2 class="text-uppercase fw-bold mb-3">
        <i class="bi bi-newspaper me-2"></i>Articles & Actualités
      </h2>
      <p class="lead text-muted">Restez informés des dernières nouvelles sur l'inclusion financière et l'ESS</p>
    </header>

    <!-- Article Vedette -->
    <article class="row mb-5 fade-in-up">
      <div class="col-12">
        <div class="card border-0 shadow-lg featured-article overflow-hidden">
          <div class="row g-0">
            <div class="col-md-6 position-relative" style="min-height: 400px;">
              <img src="https://images.unsplash.com/photo-1559526324-4b87b5e36e44?w=800&h=600&fit=crop" 
                   class="position-absolute w-100 h-100" 
                   style="object-fit: cover;"
                   alt="Lancement du Prix de l'Inclusion Financière 2025"
                   loading="lazy">
              <span class="position-absolute top-0 start-0 m-3 badge bg-danger fs-6 px-3 py-2">
                <i class="bi bi-star-fill me-1"></i>À LA UNE
              </span>
            </div>
            <div class="col-md-6 d-flex align-items-center">
              <div class="card-body p-4 p-lg-5">
                <div class="mb-3 d-flex flex-wrap gap-2 align-items-center">
                  <span class="badge bg-primary">Inclusion Financière</span>
                  <span class="text-muted small">
                    <i class="bi bi-calendar3 me-1"></i>15 Janvier 2025
                  </span>
                  <span class="text-muted small">
                    <i class="bi bi-clock me-1"></i>5 min
                  </span>
                </div>
                <h3 class="fw-bold mb-3">Lancement officiel du Prix de l'Inclusion Financière 2025</h3>
                <p class="text-muted mb-4 text-justify">
                  Le Ministère de la Microfinance et de l'ESS lance officiellement le Prix de l'Inclusion Financière 
                  dans le cadre de l'Agenda National de Transformation Sénégal 2050. Cette initiative vise à récompenser 
                  les acteurs les plus innovants du secteur et à promouvoir l'accès aux services financiers pour tous.
                </p>
                <div class="d-flex gap-2 flex-wrap align-items-center">
                  <a href="#article-1" class="btn btn-primary" aria-label="Lire l'article complet">
                    Lire l'article <i class="bi bi-arrow-right ms-2"></i>
                  </a>
                  <div class="d-flex gap-2">
                    <button class="btn btn-link text-muted p-2" title="Partager" aria-label="Partager">
                      <i class="bi bi-share"></i>
                    </button>
                    <button class="btn btn-link text-muted p-2" title="Sauvegarder" aria-label="Sauvegarder">
                      <i class="bi bi-bookmark"></i>
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </article>

    <!-- Filtres -->
    <nav class="row mb-4 fade-in-up" aria-label="Filtres d'articles">
      <div class="col-12">
        <div class="d-flex justify-content-center flex-wrap gap-2">
          <button class="btn filter-btn active" data-filter="all" aria-pressed="true">
            <i class="bi bi-grid-3x3-gap me-1"></i>Tous
          </button>
          <button class="btn filter-btn" data-filter="microfinance" aria-pressed="false">
            <i class="bi bi-bank me-1"></i>Microfinance
          </button>
          <button class="btn filter-btn" data-filter="innovation" aria-pressed="false">
            <i class="bi bi-lightbulb me-1"></i>Innovation
          </button>
          <button class="btn filter-btn" data-filter="ess" aria-pressed="false">
            <i class="bi bi-people me-1"></i>ESS
          </button>
          <button class="btn filter-btn" data-filter="evenement" aria-pressed="false">
            <i class="bi bi-calendar-event me-1"></i>Événements
          </button>
        </div>
      </div>
    </nav>

    <!-- Grille Articles -->
    <div class="row g-4 mb-4" id="articles-grid">
      
      <!-- Template Article -->
      <div class="col-lg-4 col-md-6 fade-in-up" data-category="microfinance">
        <article class="card h-100 border-0 shadow-sm article-card">
          <div class="position-relative overflow-hidden">
            <img src="https://images.unsplash.com/photo-1573167243872-43c6433b9d40?w=600&h=400&fit=crop" 
                 class="card-img-top" 
                 alt="Impact de la microfinance"
                 style="height: 250px; object-fit: cover;"
                 loading="lazy">
            <span class="position-absolute top-0 end-0 m-3 badge bg-success">Microfinance</span>
          </div>
          <div class="card-body d-flex flex-column">
            <div class="post-meta mb-2 text-muted small">
              <i class="bi bi-calendar3 me-1"></i>10 Janvier 2025
              <span class="ms-3"><i class="bi bi-clock me-1"></i>4 min</span>
            </div>
            <h5 class="card-title fw-bold mb-3">
              <a href="#article-2" class="text-decoration-none text-dark stretched-link">
                L'impact de la microfinance sur l'autonomisation des femmes rurales
              </a>
            </h5>
            <p class="card-text text-muted mb-3 flex-grow-1">
              Une étude démontre que l'accès aux services de microfinance a amélioré significativement 
              les conditions de vie des femmes entrepreneures...
            </p>
            <div class="d-flex align-items-center justify-content-between mt-auto">
              <div class="author-info d-flex align-items-center">
                <div class="avatar bg-success text-white rounded-circle d-flex align-items-center justify-content-center me-2" 
                     style="width: 32px; height: 32px; font-size: 14px;" aria-hidden="true">MF</div>
                <small class="text-muted">Par l'équipe MMESS</small>
              </div>
              <i class="bi bi-arrow-right text-primary" aria-hidden="true"></i>
            </div>
          </div>
        </article>
      </div>

      <div class="col-lg-4 col-md-6 fade-in-up" data-category="innovation">
        <article class="card h-100 border-0 shadow-sm article-card">
          <div class="position-relative overflow-hidden">
            <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?w=600&h=400&fit=crop" 
                 class="card-img-top" 
                 alt="Technologies digitales"
                 style="height: 250px; object-fit: cover;"
                 loading="lazy">
            <span class="position-absolute top-0 end-0 m-3 badge bg-info">Innovation</span>
          </div>
          <div class="card-body d-flex flex-column">
            <div class="post-meta mb-2 text-muted small">
              <i class="bi bi-calendar3 me-1"></i>05 Janvier 2025
              <span class="ms-3"><i class="bi bi-clock me-1"></i>6 min</span>
            </div>
            <h5 class="card-title fw-bold mb-3">
              <a href="#article-3" class="text-decoration-none text-dark stretched-link">
                Technologies digitales au service de l'inclusion financière
              </a>
            </h5>
            <p class="card-text text-muted mb-3 flex-grow-1">
              Les solutions de paiement mobile révolutionnent l'accès aux services financiers 
              pour les populations non bancarisées...
            </p>
            <div class="d-flex align-items-center justify-content-between mt-auto">
              <div class="author-info d-flex align-items-center">
                <div class="avatar bg-info text-white rounded-circle d-flex align-items-center justify-content-center me-2" 
                     style="width: 32px; height: 32px; font-size: 14px;" aria-hidden="true">TD</div>
                <small class="text-muted">Par l'équipe Tech</small>
              </div>
              <i class="bi bi-arrow-right text-primary" aria-hidden="true"></i>
            </div>
          </div>
        </article>
      </div>

      <div class="col-lg-4 col-md-6 fade-in-up" data-category="ess">
        <article class="card h-100 border-0 shadow-sm article-card">
          <div class="position-relative overflow-hidden">
            <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?w=600&h=400&fit=crop" 
                 class="card-img-top" 
                 alt="Économie Sociale et Solidaire"
                 style="height: 250px; object-fit: cover;"
                 loading="lazy">
            <span class="position-absolute top-0 end-0 m-3 badge bg-warning text-dark">ESS</span>
          </div>
          <div class="card-body d-flex flex-column">
            <div class="post-meta mb-2 text-muted small">
              <i class="bi bi-calendar3 me-1"></i>28 Décembre 2024
              <span class="ms-3"><i class="bi bi-clock me-1"></i>5 min</span>
            </div>
            <h5 class="card-title fw-bold mb-3">
              <a href="#article-4" class="text-decoration-none text-dark stretched-link">
                L'ESS : moteur du développement territorial
              </a>
            </h5>
            <p class="card-text text-muted mb-3 flex-grow-1">
              Comment les organisations de l'ESS contribuent au développement durable 
              et à la création d'emplois locaux...
            </p>
            <div class="d-flex align-items-center justify-content-between mt-auto">
              <div class="author-info d-flex align-items-center">
                <div class="avatar bg-warning text-dark rounded-circle d-flex align-items-center justify-content-center me-2" 
                     style="width: 32px; height: 32px; font-size: 14px;" aria-hidden="true">ES</div>
                <small class="text-muted">Par l'équipe ESS</small>
              </div>
              <i class="bi bi-arrow-right text-primary" aria-hidden="true"></i>
            </div>
          </div>
        </article>
      </div>

      <div class="col-lg-4 col-md-6 fade-in-up" data-category="evenement">
        <article class="card h-100 border-0 shadow-sm article-card">
          <div class="position-relative overflow-hidden">
            <img src="https://images.unsplash.com/photo-1540575467063-178a50c2df87?w=600&h=400&fit=crop" 
                 class="card-img-top" 
                 alt="Forum national"
                 style="height: 250px; object-fit: cover;"
                 loading="lazy">
            <span class="position-absolute top-0 end-0 m-3 badge bg-danger">Événement</span>
          </div>
          <div class="card-body d-flex flex-column">
            <div class="post-meta mb-2 text-muted small">
              <i class="bi bi-calendar3 me-1"></i>20 Décembre 2024
              <span class="ms-3"><i class="bi bi-clock me-1"></i>7 min</span>
            </div>
            <h5 class="card-title fw-bold mb-3">
              <a href="#article-5" class="text-decoration-none text-dark stretched-link">
                Forum national : succès et perspectives
              </a>
            </h5>
            <p class="card-text text-muted mb-3 flex-grow-1">
              Retour sur le dernier forum qui a réuni plus de 200 acteurs de la microfinance 
              et de l'ESS...
            </p>
            <div class="d-flex align-items-center justify-content-between mt-auto">
              <div class="author-info d-flex align-items-center">
                <div class="avatar bg-danger text-white rounded-circle d-flex align-items-center justify-content-center me-2" 
                     style="width: 32px; height: 32px; font-size: 14px;" aria-hidden="true">EV</div>
                <small class="text-muted">Par l'équipe Events</small>
              </div>
              <i class="bi bi-arrow-right text-primary" aria-hidden="true"></i>
            </div>
          </div>
        </article>
      </div>

      <div class="col-lg-4 col-md-6 fade-in-up" data-category="guide">
        <article class="card h-100 border-0 shadow-sm article-card">
          <div class="position-relative overflow-hidden">
            <img src="https://images.unsplash.com/photo-1450101499163-c8848c66ca85?w=600&h=400&fit=crop" 
                 class="card-img-top" 
                 alt="Guide de candidature"
                 style="height: 250px; object-fit: cover;"
                 loading="lazy">
            <span class="position-absolute top-0 end-0 m-3 badge bg-secondary">Guide</span>
          </div>
          <div class="card-body d-flex flex-column">
            <div class="post-meta mb-2 text-muted small">
              <i class="bi bi-calendar3 me-1"></i>15 Décembre 2024
              <span class="ms-3"><i class="bi bi-clock me-1"></i>8 min</span>
            </div>
            <h5 class="card-title fw-bold mb-3">
              <a href="#article-6" class="text-decoration-none text-dark stretched-link">
                Comment préparer un dossier gagnant
              </a>
            </h5>
            <p class="card-text text-muted mb-3 flex-grow-1">
              Guide pratique pour participer au Prix de l'Inclusion Financière. 
              Conseils et bonnes pratiques...
            </p>
            <div class="d-flex align-items-center justify-content-between mt-auto">
              <div class="author-info d-flex align-items-center">
                <div class="avatar bg-secondary text-white rounded-circle d-flex align-items-center justify-content-center me-2" 
                     style="width: 32px; height: 32px; font-size: 14px;" aria-hidden="true">GD</div>
                <small class="text-muted">Par l'équipe Guide</small>
              </div>
              <i class="bi bi-arrow-right text-primary" aria-hidden="true"></i>
            </div>
          </div>
        </article>
      </div>

      <!-- Newsletter Card -->
      <div class="col-lg-4 col-md-6 fade-in-up">
        <div class="card h-100 border-0 shadow-sm newsletter-card">
          <div class="card-body d-flex flex-column justify-content-center align-items-center text-white p-4">
            <i class="bi bi-envelope-heart display-1 mb-3"></i>
            <h4 class="fw-bold mb-3 text-center">Abonnez-vous</h4>
            <p class="text-center mb-4 small">Recevez les actualités directement dans votre boîte mail</p>
            <form class="w-100" id="newsletter-form" aria-label="Newsletter">
              <div class="input-group">
                <input type="email" class="form-control" placeholder="Votre email" required aria-label="Email">
                <button class="btn btn-light text-primary fw-bold" type="submit" aria-label="S'abonner">
                  <i class="bi bi-send-fill"></i>
                </button>
              </div>
              <small class="d-block text-center mt-3 opacity-75">
                <i class="bi bi-shield-check me-1"></i>Données protégées
              </small>
            </form>
          </div>
        </div>
      </div>

    </div>

    <!-- Actions -->
    <div class="text-center mt-5 fade-in-up">
      <a href="#tous-articles" class="btn btn-primary btn-lg px-4 px-lg-5 py-3 me-2 mb-3">
        <i class="bi bi-newspaper me-2"></i>Tous les articles
      </a>
      <a href="#rss-feed" class="btn btn-outline-primary btn-lg px-4 px-lg-5 py-3 mb-3">
        <i class="bi bi-rss-fill me-2"></i>Flux RSS
      </a>
    </div>
    
  </div>
</section>


<!-- ============================================================ -->
<!-- SECTION STATISTIQUES -->
<!-- ============================================================ -->
<section id="stats" class="stats-section py-5 bg-light">
  <div class="container">
    
    <header class="section-title text-center mb-5 fade-in-up">
      <h2 class="text-uppercase fw-bold mb-3">
        <i class="bi bi-graph-up-arrow me-2"></i>Notre Impact en Chiffres
      </h2>
      <p class="lead text-muted">L'enrôlement des organisations ESS au Sénégal</p>
    </header>

    <!-- Stats Principales -->
    <div class="row g-4 mb-5">
      <div class="col-lg-3 col-md-6 fade-in-up">
        <div class="stat-card">
          <div class="stat-icon"><i class="bi bi-building-check"></i></div>
          <div class="stat-content">
            <h3 class="stat-number" data-target="1250">0</h3>
            <p class="stat-label">Organisations Enrôlées</p>
            <div class="stat-progress">
              <div class="progress-bar" data-progress="75"></div>
            </div>
            <small class="stat-info">
              <i class="bi bi-arrow-up-circle-fill text-success me-1"></i>
              <span class="text-success">+15%</span> ce mois
            </small>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 fade-in-up">
        <div class="stat-card">
          <div class="stat-icon bg-success"><i class="bi bi-patch-check"></i></div>
          <div class="stat-content">
            <h3 class="stat-number" data-target="980">0</h3>
            <p class="stat-label">Agréments Délivrés</p>
            <div class="stat-progress">
              <div class="progress-bar bg-success" data-progress="65"></div>
            </div>
            <small class="stat-info">
              <i class="bi bi-arrow-up-circle-fill text-success me-1"></i>
              <span class="text-success">+12%</span> ce mois
            </small>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 fade-in-up">
        <div class="stat-card">
          <div class="stat-icon bg-info"><i class="bi bi-geo-alt"></i></div>
          <div class="stat-content">
            <h3 class="stat-number" data-target="14">0</h3>
            <p class="stat-label">Régions Couvertes</p>
            <div class="stat-progress">
              <div class="progress-bar bg-info" data-progress="100"></div>
            </div>
            <small class="stat-info">
              <i class="bi bi-check-circle-fill text-info me-1"></i>
              Couverture nationale
            </small>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 fade-in-up">
        <div class="stat-card">
          <div class="stat-icon bg-warning"><i class="bi bi-people"></i></div>
          <div class="stat-content">
            <h3 class="stat-number" data-target="8500">0</h3>
            <p class="stat-label">Emplois Créés</p>
            <div class="stat-progress">
              <div class="progress-bar bg-warning" data-progress="88"></div>
            </div>
            <small class="stat-info">
              <i class="bi bi-briefcase-fill text-warning me-1"></i>
              Impact social positif
            </small>
          </div>
        </div>
      </div>
    </div>

    <!-- Graphiques -->
    <div class="row g-4">
      <div class="col-lg-6 fade-in-up">
        <div class="card border-0 shadow-sm h-100">
          <div class="card-body p-4">
            <h5 class="card-title fw-bold mb-4">
              <i class="bi bi-pie-chart me-2"></i>Répartition par Type
            </h5>
            <div class="progress-list">
              <div class="progress-item">
                <div class="d-flex justify-content-between mb-2">
                  <span class="fw-semibold">Coopératives</span>
                  <span class="text-primary fw-bold">45%</span>
                </div>
                <div class="progress-bar-container">
                  <div class="progress-bar-fill bg-primary" data-width="45"></div>
                </div>
              </div>
              <div class="progress-item">
                <div class="d-flex justify-content-between mb-2">
                  <span class="fw-semibold">Associations</span>
                  <span class="text-success fw-bold">30%</span>
                </div>
                <div class="progress-bar-container">
                  <div class="progress-bar-fill bg-success" data-width="30"></div>
                </div>
              </div>
              <div class="progress-item">
                <div class="d-flex justify-content-between mb-2">
                  <span class="fw-semibold">Mutuelles</span>
                  <span class="text-warning fw-bold">15%</span>
                </div>
                <div class="progress-bar-container">
                  <div class="progress-bar-fill bg-warning" data-width="15"></div>
                </div>
              </div>
              <div class="progress-item">
                <div class="d-flex justify-content-between mb-2">
                  <span class="fw-semibold">Autres</span>
                  <span class="text-info fw-bold">10%</span>
                </div>
                <div class="progress-bar-container">
                  <div class="progress-bar-fill bg-info" data-width="10"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-6 fade-in-up">
        <div class="card border-0 shadow-sm h-100">
          <div class="card-body p-4">
            <h5 class="card-title fw-bold mb-4">
              <i class="bi bi-briefcase me-2"></i>Secteurs d'Activité
            </h5>
            <div class="sectors-list">
              <div class="sector-item d-flex align-items-center mb-3">
                <div class="sector-icon bg-primary"><i class="bi bi-basket"></i></div>
                <div class="flex-grow-1 ms-3">
                  <div class="d-flex justify-content-between">
                    <span class="fw-semibold">Agriculture</span>
                    <span class="badge bg-primary">35%</span>
                  </div>
                  <small class="text-muted">438 organisations</small>
                </div>
              </div>
              <div class="sector-item d-flex align-items-center mb-3">
                <div class="sector-icon bg-success"><i class="bi bi-cash-coin"></i></div>
                <div class="flex-grow-1 ms-3">
                  <div class="d-flex justify-content-between">
                    <span class="fw-semibold">Microfinance</span>
                    <span class="badge bg-success">28%</span>
                  </div>
                  <small class="text-muted">350 organisations</small>
                </div>
              </div>
              <div class="sector-item d-flex align-items-center mb-3">
                <div class="sector-icon bg-info"><i class="bi bi-mortarboard"></i></div>
                <div class="flex-grow-1 ms-3">
                  <div class="d-flex justify-content-between">
                    <span class="fw-semibold">Éducation</span>
                    <span class="badge bg-info">20%</span>
                  </div>
                  <small class="text-muted">250 organisations</small>
                </div>
              </div>
              <div class="sector-item d-flex align-items-center">
                <div class="sector-icon bg-warning"><i class="bi bi-heart-pulse"></i></div>
                <div class="flex-grow-1 ms-3">
                  <div class="d-flex justify-content-between">
                    <span class="fw-semibold">Santé</span>
                    <span class="badge bg-warning">17%</span>
                  </div>
                  <small class="text-muted">212 organisations</small>
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
<!-- SECTION COOPÉRATIVES D'EXCELLENCE -->
<!-- ============================================================ -->
<section id="cooperatives" class="cooperatives-section py-5">
  <div class="container">
    
    <header class="section-title text-center mb-5 fade-in-up">
      <h2 class="text-uppercase fw-bold mb-3">
        <i class="bi bi-award me-2"></i>Coopératives d'Excellence
      </h2>
      <p class="lead text-muted">Les organisations les plus performantes de l'écosystème ESS</p>
    </header>

    <!-- Coopérative #1 -->
    <article class="row mb-5 fade-in-up">
      <div class="col-12">
        <div class="card border-0 shadow-lg overflow-hidden">
          <div class="row g-0">
            <div class="col-md-5 position-relative" style="min-height: 450px;">
              <img src="https://images.unsplash.com/photo-1542744173-8e7e53415bb0?w=800&h=600&fit=crop" 
                   class="position-absolute w-100 h-100" 
                   style="object-fit: cover;"
                   alt="Coopérative Agricole Diamniadio"
                   loading="lazy">
              <span class="position-absolute top-0 start-0 m-3 badge bg-warning text-dark fs-5 px-4 py-2">
                <i class="bi bi-trophy-fill me-2"></i>#1 Excellence
              </span>
              <span class="position-absolute bottom-0 start-0 m-3 badge bg-dark bg-opacity-75 px-3 py-2">
                <i class="bi bi-geo-alt-fill me-1"></i>Dakar
              </span>
            </div>
            <div class="col-md-7 d-flex align-items-center">
              <div class="card-body p-4 p-lg-5">
                <div class="mb-3 d-flex flex-wrap gap-2">
                  <span class="badge bg-success px-3 py-2">Agriculture</span>
                  <span class="badge bg-primary px-3 py-2">
                    <i class="bi bi-people-fill me-1"></i>2,500 membres
                  </span>
                  <span class="badge bg-info px-3 py-2">
                    <i class="bi bi-calendar-check me-1"></i>Depuis 2010
                  </span>
                </div>
                <h3 class="fw-bold mb-3">Coopérative Agricole Diamniadio</h3>
                <p class="text-muted mb-4 text-justify">
                  Leader dans la transformation et commercialisation de produits agricoles biologiques. 
                  Développement d'une chaîne de valeur complète créant 500+ emplois directs et impactant 
                  des milliers de familles rurales.
                </p>
                <div class="row g-3 mb-4">
                  <div class="col-6 col-md-3">
                    <div class="text-center p-3 bg-light rounded">
                      <div class="fw-bold text-success fs-4">98%</div>
                      <small class="text-muted">Satisfaction</small>
                    </div>
                  </div>
                  <div class="col-6 col-md-3">
                    <div class="text-center p-3 bg-light rounded">
                      <div class="fw-bold text-primary fs-4">5.2M</div>
                      <small class="text-muted">CA (FCFA)</small>
                    </div>
                  </div>
                  <div class="col-6 col-md-3">
                    <div class="text-center p-3 bg-light rounded">
                      <div class="fw-bold text-warning fs-4">500+</div>
                      <small class="text-muted">Emplois</small>
                    </div>
                  </div>
                  <div class="col-6 col-md-3">
                    <div class="text-center p-3 bg-light rounded">
                      <div class="fw-bold text-info fs-4">A+</div>
                      <small class="text-muted">Note</small>
                    </div>
                  </div>
                </div>
                <div class="d-flex gap-2 flex-wrap">
                  <a href="#cooperative-1" class="btn btn-primary" aria-label="Voir profil">
                    Voir le profil <i class="bi bi-arrow-right ms-2"></i>
                  </a>
                  <a href="#contact-1" class="btn btn-outline-primary" aria-label="Contacter">
                    <i class="bi bi-envelope me-2"></i>Contacter
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </article>

    <!-- Top 6 Coopératives -->
    <div class="row g-4 mb-4">
      
      <!-- #2 -->
      <div class="col-lg-4 col-md-6 fade-in-up">
        <article class="card h-100 border-0 shadow-sm cooperative-card">
          <div class="position-relative overflow-hidden">
            <img src="https://images.unsplash.com/photo-1559526324-4b87b5e36e44?w=600&h=400&fit=crop" 
                 class="card-img-top" 
                 alt="Mutuelle Femmes Entrepreneures"
                 style="height: 250px; object-fit: cover;"
                 loading="lazy">
            <span class="position-absolute top-0 start-0 m-3 badge bg-warning text-dark fs-5 px-3 py-2">
              <i class="bi bi-star-fill me-1"></i>#2
            </span>
            <span class="position-absolute top-0 end-0 m-3 badge bg-danger">Microfinance</span>
          </div>
          <div class="card-body d-flex flex-column">
            <div class="mb-3 d-flex flex-wrap gap-2">
              <span class="badge bg-light text-dark">
                <i class="bi bi-people-fill me-1"></i>1,800 membres
              </span>
              <span class="badge bg-light text-dark">
                <i class="bi bi-geo-alt-fill me-1"></i>Thiès
              </span>
            </div>
            <h5 class="card-title fw-bold mb-3">
              <a href="#cooperative-2" class="text-decoration-none text-dark stretched-link">
                Mutuelle des Femmes Entrepreneures
              </a>
            </h5>
            <p class="card-text text-muted mb-3 flex-grow-1">
              Spécialisée en microcrédit. Taux de remboursement de 99.5% et impact social 
              majeur dans 8 régions.
            </p>
            <div class="row g-2 mb-3">
              <div class="col-4">
                <div class="text-center p-2 bg-light rounded">
                  <div class="fw-bold text-success small">99.5%</div>
                  <small class="text-muted" style="font-size: 0.7rem;">Rembours.</small>
                </div>
              </div>
              <div class="col-4">
                <div class="text-center p-2 bg-light rounded">
                  <div class="fw-bold text-primary small">3.8M</div>
                  <small class="text-muted" style="font-size: 0.7rem;">CA</small>
                </div>
              </div>
              <div class="col-4">
                <div class="text-center p-2 bg-light rounded">
                  <div class="fw-bold text-warning small">A</div>
                  <small class="text-muted" style="font-size: 0.7rem;">Note</small>
                </div>
              </div>
            </div>
            <div class="d-flex align-items-center justify-content-between mt-auto">
              <small class="text-muted"><i class="bi bi-calendar3 me-1"></i>Depuis 2012</small>
              <i class="bi bi-arrow-right text-primary fs-5" aria-hidden="true"></i>
            </div>
          </div>
        </article>
      </div>

      <!-- #3 -->
      <div class="col-lg-4 col-md-6 fade-in-up">
        <article class="card h-100 border-0 shadow-sm cooperative-card">
          <div class="position-relative overflow-hidden">
            <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?w=600&h=400&fit=crop" 
                 class="card-img-top" 
                 alt="Technologie Innovation"
                 style="height: 250px; object-fit: cover;"
                 loading="lazy">
            <span class="position-absolute top-0 start-0 m-3 badge bg-warning text-dark fs-5 px-3 py-2">
              <i class="bi bi-star-fill me-1"></i>#3
            </span>
            <span class="position-absolute top-0 end-0 m-3 badge bg-info">Innovation</span>
          </div>
          <div class="card-body d-flex flex-column">
            <div class="mb-3 d-flex flex-wrap gap-2">
              <span class="badge bg-light text-dark">
                <i class="bi bi-people-fill me-1"></i>950 membres
              </span>
              <span class="badge bg-light text-dark">
                <i class="bi bi-geo-alt-fill me-1"></i>Dakar
              </span>
            </div>
            <h5 class="card-title fw-bold mb-3">
              <a href="#cooperative-3" class="text-decoration-none text-dark stretched-link">
                Coopérative Technologie & Innovation
              </a>
            </h5>
            <p class="card-text text-muted mb-3 flex-grow-1">
              Pionnière en solutions digitales pour l'inclusion financière. 
              Plateforme utilisée par 50,000+ personnes.
            </p>
            <div class="row g-2 mb-3">
              <div class="col-4">
                <div class="text-center p-2 bg-light rounded">
                  <div class="fw-bold text-success small">50K</div>
                  <small class="text-muted" style="font-size: 0.7rem;">Users</small>
                </div>
              </div>
              <div class="col-4">
                <div class="text-center p-2 bg-light rounded">
                  <div class="fw-bold text-primary small">4.5M</div>
                  <small class="text-muted" style="font-size: 0.7rem;">CA</small>
                </div>
              </div>
              <div class="col-4">
                <div class="text-center p-2 bg-light rounded">
                  <div class="fw-bold text-warning small">A</div>
                  <small class="text-muted" style="font-size: 0.7rem;">Note</small>
                </div>
              </div>
            </div>
            <div class="d-flex align-items-center justify-content-between mt-auto">
              <small class="text-muted"><i class="bi bi-calendar3 me-1"></i>Depuis 2015</small>
              <i class="bi bi-arrow-right text-primary fs-5" aria-hidden="true"></i>
            </div>
          </div>
        </article>
      </div>

      <!-- #4 -->
      <div class="col-lg-4 col-md-6 fade-in-up">
        <article class="card h-100 border-0 shadow-sm cooperative-card">
          <div class="position-relative overflow-hidden">
            <img src="https://images.unsplash.com/photo-1509099863731-ef4bff19e808?w=600&h=400&fit=crop" 
                 class="card-img-top" 
                 alt="Pêche Artisanale"
                 style="height: 250px; object-fit: cover;"
                 loading="lazy">
            <span class="position-absolute top-0 start-0 m-3 badge bg-secondary text-white fs-5 px-3 py-2">
              <i class="bi bi-star-fill me-1"></i>#4
            </span>
            <span class="position-absolute top-0 end-0 m-3 badge bg-primary">Pêche</span>
          </div>
          <div class="card-body d-flex flex-column">
            <div class="mb-3 d-flex flex-wrap gap-2">
              <span class="badge bg-light text-dark">
                <i class="bi bi-people-fill me-1"></i>1,200 membres
              </span>
              <span class="badge bg-light text-dark">
                <i class="bi bi-geo-alt-fill me-1"></i>Saint-Louis
              </span>
            </div>
            <h5 class="card-title fw-bold mb-3">
              <a href="#cooperative-4" class="text-decoration-none text-dark stretched-link">
                Coopérative Pêche Artisanale
              </a>
            </h5>
            <p class="card-text text-muted mb-3 flex-grow-1">
              Leader en pêche durable et transformation halieutique. 
              Export vers 12 pays, certification bio.
            </p>
            <div class="row g-2 mb-3">
              <div class="col-4">
                <div class="text-center p-2 bg-light rounded">
                  <div class="fw-bold text-success small">Bio</div>
                  <small class="text-muted" style="font-size: 0.7rem;">Certifié</small>
                </div>
              </div>
              <div class="col-4">
                <div class="text-center p-2 bg-light rounded">
                  <div class="fw-bold text-primary small">2.9M</div>
                  <small class="text-muted" style="font-size: 0.7rem;">CA</small>
                </div>
              </div>
              <div class="col-4">
                <div class="text-center p-2 bg-light rounded">
                  <div class="fw-bold text-warning small">A-</div>
                  <small class="text-muted" style="font-size: 0.7rem;">Note</small>
                </div>
              </div>
            </div>
            <div class="d-flex align-items-center justify-content-between mt-auto">
              <small class="text-muted"><i class="bi bi-calendar3 me-1"></i>Depuis 2008</small>
              <i class="bi bi-arrow-right text-primary fs-5" aria-hidden="true"></i>
            </div>
          </div>
        </article>
      </div>

      <!-- #5 -->
      <div class="col-lg-4 col-md-6 fade-in-up">
        <article class="card h-100 border-0 shadow-sm cooperative-card">
          <div class="position-relative overflow-hidden">
            <img src="https://images.unsplash.com/photo-1576091160399-112ba8d25d1d?w=600&h=400&fit=crop" 
                 class="card-img-top" 
                 alt="Artisanat Solidaire"
                 style="height: 250px; object-fit: cover;"
                 loading="lazy">
            <span class="position-absolute top-0 start-0 m-3 badge bg-secondary text-white fs-5 px-3 py-2">
              <i class="bi bi-star-fill me-1"></i>#5
            </span>
            <span class="position-absolute top-0 end-0 m-3 badge bg-warning text-dark">Artisanat</span>
          </div>
          <div class="card-body d-flex flex-column">
            <div class="mb-3 d-flex flex-wrap gap-2">
              <span class="badge bg-light text-dark">
                <i class="bi bi-people-fill me-1"></i>650 membres
              </span>
              <span class="badge bg-light text-dark">
                <i class="bi bi-geo-alt-fill me-1"></i>Kaolack
              </span>
            </div>
            <h5 class="card-title fw-bold mb-3">
              <a href="#cooperative-5" class="text-decoration-none text-dark stretched-link">
                Association Artisanat Solidaire
              </a>
            </h5>
            <p class="card-text text-muted mb-3 flex-grow-1">
              Valorisation de l'artisanat local et autonomisation des femmes. 
              Présence dans 15 marchés internationaux.
            </p>
            <div class="row g-2 mb-3">
              <div class="col-4">
                <div class="text-center p-2 bg-light rounded">
                  <div class="fw-bold text-success small">95%</div>
                  <small class="text-muted" style="font-size: 0.7rem;">Femmes</small>
                </div>
              </div>
              <div class="col-4">
                <div class="text-center p-2 bg-light rounded">
                  <div class="fw-bold text-primary small">1.8M</div>
                  <small class="text-muted" style="font-size: 0.7rem;">CA</small>
                </div>
              </div>
              <div class="col-4">
                <div class="text-center p-2 bg-light rounded">
                  <div class="fw-bold text-warning small">B+</div>
                  <small class="text-muted" style="font-size: 0.7rem;">Note</small>
                </div>
              </div>
            </div>
            <div class="d-flex align-items-center justify-content-between mt-auto">
              <small class="text-muted"><i class="bi bi-calendar3 me-1"></i>Depuis 2013</small>
              <i class="bi bi-arrow-right text-primary fs-5" aria-hidden="true"></i>
            </div>
          </div>
        </article>
      </div>

      <!-- #6 -->
      <div class="col-lg-4 col-md-6 fade-in-up">
        <article class="card h-100 border-0 shadow-sm cooperative-card">
          <div class="position-relative overflow-hidden">
            <img src="https://images.unsplash.com/photo-1532629345422-7515f3d16bb6?w=600&h=400&fit=crop" 
                 class="card-img-top" 
                 alt="Éducation Formation"
                 style="height: 250px; object-fit: cover;"
                 loading="lazy">
            <span class="position-absolute top-0 start-0 m-3 badge bg-secondary text-white fs-5 px-3 py-2">
              <i class="bi bi-star-fill me-1"></i>#6
            </span>
            <span class="position-absolute top-0 end-0 m-3 badge bg-success">Éducation</span>
          </div>
          <div class="card-body d-flex flex-column">
            <div class="mb-3 d-flex flex-wrap gap-2">
              <span class="badge bg-light text-dark">
                <i class="bi bi-people-fill me-1"></i>800 membres
              </span>
              <span class="badge bg-light text-dark">
                <i class="bi bi-geo-alt-fill me-1"></i>Ziguinchor
              </span>
            </div>
            <h5 class="card-title fw-bold mb-3">
              <a href="#cooperative-6" class="text-decoration-none text-dark stretched-link">
                Coopérative Éducation & Formation
              </a>
            </h5>
            <p class="card-text text-muted mb-3 flex-grow-1">
              Centre de formation professionnelle et alphabétisation. 
              5,000+ personnes formées, 87% d'insertion.
            </p>
            <div class="row g-2 mb-3">
              <div class="col-4">
                <div class="text-center p-2 bg-light rounded">
                  <div class="fw-bold text-success small">5K</div>
                  <small class="text-muted" style="font-size: 0.7rem;">Formés</small>
                </div>
              </div>
              <div class="col-4">
                <div class="text-center p-2 bg-light rounded">
                  <div class="fw-bold text-primary small">87%</div>
                  <small class="text-muted" style="font-size: 0.7rem;">Insertion</small>
                </div>
              </div>
              <div class="col-4">
                <div class="text-center p-2 bg-light rounded">
                  <div class="fw-bold text-warning small">B+</div>
                  <small class="text-muted" style="font-size: 0.7rem;">Note</small>
                </div>
              </div>
            </div>
            <div class="d-flex align-items-center justify-content-between mt-auto">
              <small class="text-muted"><i class="bi bi-calendar3 me-1"></i>Depuis 2011</small>
              <i class="bi bi-arrow-right text-primary fs-5" aria-hidden="true"></i>
            </div>
          </div>
        </article>
      </div>

    </div>

    <!-- Actions -->
    <div class="text-center mt-5 fade-in-up">
      <a href="#toutes-cooperatives" class="btn btn-primary btn-lg px-4 px-lg-5 py-3 me-2 mb-3">
        <i class="bi bi-building me-2"></i>Toutes les coopératives
      </a>
      <a href="#criteres" class="btn btn-outline-primary btn-lg px-4 px-lg-5 py-3 mb-3">
        <i class="bi bi-info-circle me-2"></i>Critères d'excellence
      </a>
    </div>

  </div>
</section>


<!-- ============================================================ -->
<!-- SCRIPTS -->
<!-- ============================================================ -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>