{{-- Section Hero Carousel --}}
<section class="hero">
    <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="6000">
        
        {{-- Badge flottant avec animation --}}
        <div class="floating-badge">
            <span class="badge-icon">🏆</span>
            <span class="badge-text">Agrément ESS 2025</span>
        </div>

        {{-- Slides --}}
        <div class="carousel-inner">
            {{-- Slide 1: Enrôlement --}}
            <div class="carousel-item active">
                <img src="assets/img/hero-carousel/hero-carousel-4.jpg" 
                     alt="Enrôlement ESS" 
                     onerror="this.style.display='none'">
                <div class="carousel-container">
                    <span class="hero-tag">📋 Enrôlement Simplifié</span>
                    <h2 class="animate-slide-up">Obtenez Votre Agrément d'Organisation ESS</h2>
                    <p class="animate-slide-up-delay">Inscrivez votre organisation et accédez aux avantages exclusifs de la reconnaissance officielle en Économie Sociale et Solidaire</p>
                    <div class="hero-cta animate-slide-up-delay-2">
                        <a href="#registerModal" class="btn-primary-cta" data-bs-toggle="modal" data-bs-target="#registerModal">
                            <span>Démarrer Mon Enrôlement</span>
                            <i class="bi bi-arrow-right"></i>
                        </a>
                        <a href="#benefits" class="btn-secondary-cta">
                            En Savoir Plus
                        </a>
                    </div>
                </div>
            </div>

            {{-- Slide 2: Avantages Agrément --}}
            <div class="carousel-item">
                <img src="assets/img/hero-carousel/hero-carousel-3.jpg" 
                     alt="Avantages Agrément" 
                     onerror="this.style.display='none'">
                <div class="carousel-container">
                    <span class="hero-tag">✨ Reconnaissance Officielle</span>
                    <h2 class="animate-slide-up">Les Avantages de l'Agrément ESS</h2>
                    <p class="animate-slide-up-delay">Bénéficiez d'un statut reconnu, d'un accompagnement personnalisé et d'un accès privilégié aux financements dédiés</p>
                    
                    <a href="#registerModal" class="btn-primary-cta" data-bs-toggle="modal" data-bs-target="#registerModal">
                        <span>Obtenir Mon Agrément</span>
                        <i class="bi bi-shield-check"></i>
                    </a>
                </div>
            </div>

            {{-- Slide 3: Processus Simple --}}
            <div class="carousel-item">
                <img src="assets/img/hero-carousel/hero-carousel-2.jpg" 
                     alt="Processus Simple" 
                     onerror="this.style.display='none'">
                <div class="carousel-container">
                    <span class="hero-tag">🚀 Processus Rapide</span>
                    <h2 class="animate-slide-up">Un Processus d'Enrôlement en 3 Étapes</h2>
                    <p class="animate-slide-up-delay">Inscription en ligne, vérification des critères et obtention de votre agrément officiel</p>
                    
                    <a href="#registerModal" class="btn-primary-cta" data-bs-toggle="modal" data-bs-target="#registerModal">
                        <span>Commencer Maintenant</span>
                        <i class="bi bi-rocket-takeoff"></i>
                    </a>
                </div>
            </div>
        </div>

        {{-- Contrôles personnalisés --}}
        <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev" aria-label="Slide précédent">
            <span class="carousel-control-prev-icon">
                <i class="bi bi-chevron-left"></i>
            </span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next" aria-label="Slide suivant">
            <span class="carousel-control-next-icon">
                <i class="bi bi-chevron-right"></i>
            </span>
        </button>

        {{-- Indicateurs stylisés --}}
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="0" class="active" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
    </div>

</section>