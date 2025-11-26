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
                <div class="hero-img-overlay"></div>
                <img src="assets/img/hero-carousel/hero-carousel-4.jpg" 
                     alt="Enrôlement ESS" 
                     class="hero-img"
                     onerror="this.style.display='none'">
                <div class="carousel-container">
                    <span class="hero-tag">
                        <i class="bi bi-clipboard-check"></i>
                        Enrôlement Simplifié
                    </span>
                    <h2 class="animate-slide-up">Bienvenue sur la plateforme numérique des OESS</h2>
                    <p class="animate-slide-up-delay">Inscrivez votre organisation et accédez aux avantages exclusifs de la reconnaissance officielle en Économie Sociale et Solidaire</p>
                    <div class="hero-cta animate-slide-up-delay-2">
                        <a href="#registerModal" class="btn-primary-cta" data-bs-toggle="modal" data-bs-target="#registerModal">
                            <span>Démarrer Mon Enrôlement</span>
                            <i class="bi bi-arrow-right"></i>
                        </a>
                        <a href="#benefits" class="btn-secondary-cta">
                            <span>En Savoir Plus</span>
                            <i class="bi bi-info-circle"></i>
                        </a>
                    </div>
                    <div class="hero-stats animate-fade-in">
                        <div class="stat-item">
                            <span class="stat-number">500+</span>
                            <span class="stat-label">Organisations agréées</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">500+</span>
                            <span class="stat-label">CPS créées</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">98%</span>
                            <span class="stat-label">Taux de satisfaction</span>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Slide 2: Avantages Agrément --}}
            <div class="carousel-item">
                <div class="hero-img-overlay"></div>
                <img src="assets/img/hero-carousel/hero-carousel-3.jpg" 
                     alt="Avantages Agrément" 
                     class="hero-img"
                     onerror="this.style.display='none'">
                <div class="carousel-container">
                    <span class="hero-tag">
                        <i class="bi bi-stars"></i>
                        Reconnaissance Officielle
                    </span>
                    <h2 class="animate-slide-up">Demandez votre agrément en toute sécurité</h2>
                    <p class="animate-slide-up-delay">Bénéficiez d'un statut reconnu, d'un accompagnement personnalisé et d'un accès privilégié aux financements dédiés</p>
                    
                    <div class="benefits-grid animate-slide-up-delay-2">
                        <div class="benefit-card">
                            <i class="bi bi-shield-check"></i>
                            <span>Statut Officiel</span>
                        </div>
                        <div class="benefit-card">
                            <i class="bi bi-cash-stack"></i>
                            <span>Financements</span>
                        </div>
                        <div class="benefit-card">
                            <i class="bi bi-people"></i>
                            <span>Réseau ESS</span>
                        </div>
                        <div class="benefit-card">
                            <i class="bi bi-headset"></i>
                            <span>Accompagnement</span>
                        </div>
                    </div>
                    
                    <a href="#registerModal" class="btn-primary-cta mt-4" data-bs-toggle="modal" data-bs-target="#registerModal">
                        <span>Obtenir Mon Agrément</span>
                        <i class="bi bi-shield-check"></i>
                    </a>
                </div>
            </div>

            {{-- Slide 3: Processus Simple --}}
            <div class="carousel-item">
                <div class="hero-img-overlay"></div>
                <img src="assets/img/hero-carousel/hero-carousel-2.jpg" 
                     alt="Processus Simple" 
                     class="hero-img"
                     onerror="this.style.display='none'">
                <div class="carousel-container">
                    <span class="hero-tag">
                        <i class="bi bi-rocket-takeoff"></i>
                        Processus Rapide
                    </span>
                    <h2 class="animate-slide-up">Mettez en place votre CPS</h2>
                    <p class="animate-slide-up-delay">Inscription en ligne, vérification des critères et obtention de votre agrément officiel</p>
                    
                    <div class="process-steps animate-slide-up-delay-2">
                        <div class="step">
                            <div class="step-number">1</div>
                            <div class="step-content">
                                <h4>Inscription</h4>
                                <p>Remplissez le formulaire en ligne</p>
                            </div>
                        </div>
                        <div class="step-arrow"><i class="bi bi-arrow-right"></i></div>
                        <div class="step">
                            <div class="step-number">2</div>
                            <div class="step-content">
                                <h4>Vérification</h4>
                                <p>Validation de vos critères ESS</p>
                            </div>
                        </div>
                        <div class="step-arrow"><i class="bi bi-arrow-right"></i></div>
                        <div class="step">
                            <div class="step-number">3</div>
                            <div class="step-content">
                                <h4>Agrément</h4>
                                <p>Recevez votre certification</p>
                            </div>
                        </div>
                    </div>
                    
                    <a href="#registerModal" class="btn-primary-cta mt-4" data-bs-toggle="modal" data-bs-target="#registerModal">
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

<style>
/* === Hero Section === */
.hero {
    position: relative;
    width: 100%;
    min-height: 100vh;
    overflow: hidden;
}

/* === Carousel === */
.carousel-inner {
    height: 100vh;
}

.carousel-item {
    height: 100vh;
    position: relative;
    background: linear-gradient(135deg, #66ea66 0%, #764ba2 100%);
}

.hero-img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    position: absolute;
    top: 0;
    left: 0;
}

.hero-img-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: linear-gradient(
        135deg,
        rgba(0, 0, 0, 0.427) 0%,
        rgba(0, 0, 0, 0.507) 100%
    );
    z-index: 1;
}

/* === Badge Flottant === */
.floating-badge {
    position: absolute;
    top: 2rem;
    right: 2rem;
    background: rgba(255, 255, 255, 0.95);
    backdrop-filter: blur(10px);
    padding: 0.75rem 1.5rem;
    border-radius: 50px;
    display: flex;
    align-items: center;
    gap: 0.5rem;
    font-weight: 600;
    color: #667eea;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
    z-index: 10;
    animation: float 3s ease-in-out infinite;
}

.badge-icon {
    font-size: 1.2rem;
    animation: spin 4s linear infinite;
}

@keyframes float {
    0%, 100% { transform: translateY(0px); }
    50% { transform: translateY(-10px); }
}

@keyframes spin {
    0%, 90%, 100% { transform: rotate(0deg); }
    95% { transform: rotate(20deg); }
}

/* === Carousel Container === */
.carousel-container {
    position: absolute;
    top: 50%;
    left: 10%;
    /* transform: translateY(-50%); */
    /* max-width: 700px; */
    z-index: 2;
    color: white;
}

/* === Hero Tag === */
.hero-tag {
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
    background: rgba(255, 255, 255, 0.2);
    backdrop-filter: blur(10px);
    border: 1px solid rgba(255, 255, 255, 0.3);
    padding: 0.5rem 1rem;
    border-radius: 50px;
    font-size: 0.9rem;
    font-weight: 500;
    margin-bottom: 1.5rem;
}

/* === Typography === */
h2 {
    font-size: 3.5rem;
    font-weight: 800;
    line-height: 1.2;
    margin-bottom: 1.5rem;
    text-shadow: 0 4px 20px rgba(0, 0, 0, 0.3);
}

.carousel-container p {
    font-size: 1.2rem;
    line-height: 1.6;
    margin-bottom: 2rem;
    opacity: 0.95;
    text-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
}

/* === CTA Buttons === */
.hero-cta {
    display: flex;
    gap: 1rem;
    flex-wrap: wrap;
    margin-bottom: 2rem;
}

.btn-primary-cta,
.btn-secondary-cta {
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
    padding: 1rem 2rem;
    border-radius: 50px;
    font-weight: 600;
    font-size: 1rem;
    text-decoration: none;
    transition: all 0.3s ease;
    position: relative;
    overflow: hidden;
}

.btn-primary-cta {
    background: white;
    color: #667eea;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
}

.btn-primary-cta:hover {
    transform: translateY(-3px);
    box-shadow: 0 15px 40px rgba(0, 0, 0, 0.3);
    color: #667eea;
}

.btn-primary-cta i {
    transition: transform 0.3s ease;
}

.btn-primary-cta:hover i {
    transform: translateX(5px);
}

.btn-secondary-cta {
    background: rgba(255, 255, 255, 0.2);
    backdrop-filter: blur(10px);
    color: white;
    border: 2px solid rgba(255, 255, 255, 0.5);
}

.btn-secondary-cta:hover {
    background: rgba(255, 255, 255, 0.3);
    border-color: white;
    color: white;
    transform: translateY(-3px);
}

/* === Hero Stats === */
.hero-stats {
    display: flex;
    gap: 2rem;
    margin-top: 2rem;
}

.stat-item {
    display: flex;
    flex-direction: column;
    gap: 0.25rem;
}

.stat-number {
    font-size: 2rem;
    font-weight: 800;
    color: white;
}

.stat-label {
    font-size: 0.9rem;
    opacity: 0.9;
}

/* === Benefits Grid === */
.benefits-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 1rem;
    margin-top: 2rem;
}

.benefit-card {
    background: rgba(255, 255, 255, 0.2);
    backdrop-filter: blur(10px);
    border: 1px solid rgba(255, 255, 255, 0.3);
    padding: 1.5rem 1rem;
    border-radius: 15px;
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 0.75rem;
    text-align: center;
    transition: all 0.3s ease;
}

.benefit-card:hover {
    transform: translateY(-5px);
    background: rgba(255, 255, 255, 0.3);
}

.benefit-card i {
    font-size: 2rem;
}

.benefit-card span {
    font-size: 0.9rem;
    font-weight: 600;
}

/* === Process Steps === */
.process-steps {
    display: flex;
    align-items: center;
    gap: 1rem;
    margin-top: 2rem;
}

.step {
    flex: 1;
    background: rgba(255, 255, 255, 0.2);
    backdrop-filter: blur(10px);
    border: 1px solid rgba(255, 255, 255, 0.3);
    padding: 1.5rem;
    border-radius: 15px;
    display: flex;
    gap: 1rem;
    align-items: center;
    transition: all 0.3s ease;
}

.step:hover {
    transform: translateY(-5px);
    background: rgba(255, 255, 255, 0.3);
}

.step-number {
    width: 50px;
    height: 50px;
    background: white;
    color: #667eea;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.5rem;
    font-weight: 800;
    flex-shrink: 0;
}

.step-content h4 {
    margin: 0;
    font-size: 1.1rem;
    font-weight: 700;
}

.step-content p {
    margin: 0.25rem 0 0;
    font-size: 0.85rem;
    opacity: 0.9;
}

.step-arrow {
    font-size: 1.5rem;
    opacity: 0.7;
}

/* === Animations === */
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

@keyframes fadeIn {
    from { opacity: 0; }
    to { opacity: 1; }
}

.carousel-item.active .animate-slide-up {
    animation: slideUp 0.8s ease forwards;
}

.carousel-item.active .animate-slide-up-delay {
    animation: slideUp 0.8s ease 0.2s forwards;
    opacity: 0;
}

.carousel-item.active .animate-slide-up-delay-2 {
    animation: slideUp 0.8s ease 0.4s forwards;
    opacity: 0;
}

.carousel-item.active .animate-fade-in {
    animation: fadeIn 1s ease 0.6s forwards;
    opacity: 0;
}

/* === Carousel Controls === */
.carousel-control-prev,
.carousel-control-next {
    width: 60px;
    height: 60px;
    top: 50%;
    transform: translateY(-50%);
    background: rgba(255, 255, 255, 0.2);
    backdrop-filter: blur(10px);
    border-radius: 50%;
    border: 1px solid rgba(255, 255, 255, 0.3);
    opacity: 1;
    transition: all 0.3s ease;
}

.carousel-control-prev {
    left: 2rem;
}

.carousel-control-next {
    right: 2rem;
}

.carousel-control-prev:hover,
.carousel-control-next:hover {
    background: rgba(255, 255, 255, 0.3);
    transform: translateY(-50%) scale(1.1);
}

.carousel-control-prev-icon,
.carousel-control-next-icon {
    width: auto;
    height: auto;
    background: none;
}

.carousel-control-prev-icon i,
.carousel-control-next-icon i {
    font-size: 1.5rem;
    color: white;
}

/* === Carousel Indicators === */
.carousel-indicators {
    bottom: 2rem;
}

.carousel-indicators button {
    width: 12px;
    height: 12px;
    border-radius: 50%;
    border: 2px solid white;
    background: transparent;
    opacity: 0.5;
    transition: all 0.3s ease;
}

.carousel-indicators button.active {
    opacity: 1;
    background: white;
    width: 40px;
    border-radius: 10px;
}

/* === Responsive Design === */
@media (max-width: 1200px) {
    .carousel-container {
        left: 5%;
        max-width: 600px;
    }
    
    h2 {
        font-size: 2.8rem;
    }
    
    .process-steps {
        flex-direction: column;
    }
    
    .step-arrow {
        transform: rotate(90deg);
    }
}

@media (max-width: 992px) {
    .carousel-container {
        max-width: 85%;
        padding: 2rem;
    }
    
    h2 {
        font-size: 2.2rem;
    }
    
    .carousel-container p {
        font-size: 1.1rem;
    }
    
    .benefits-grid {
        grid-template-columns: repeat(2, 1fr);
    }
    
    .hero-stats {
        gap: 1.5rem;
    }
    
    .stat-number {
        font-size: 1.5rem;
    }
}

@media (max-width: 768px) {
    .carousel-inner,
    .carousel-item {
        height: auto;
        min-height: 100vh;
    }
    
    .carousel-container {
        position: relative;
        top: auto;
        left: auto;
        transform: none;
        max-width: 100%;
        padding: 6rem 1.5rem 4rem;
        text-align: center;
    }
    
    h2 {
        font-size: 1.8rem;
    }
    
    .carousel-container p {
        font-size: 1rem;
    }
    
    .floating-badge {
        top: 1rem;
        right: 1rem;
        font-size: 0.85rem;
        padding: 0.5rem 1rem;
    }
    
    .hero-cta {
        flex-direction: column;
    }
    
    .btn-primary-cta,
    .btn-secondary-cta {
        width: 100%;
        justify-content: center;
    }
    
    .hero-stats {
        flex-direction: column;
        gap: 1rem;
        align-items: center;
    }
    
    .benefits-grid {
        grid-template-columns: 1fr;
    }
    
    .process-steps {
        gap: 0.5rem;
    }
    
    .step {
        flex-direction: column;
        text-align: center;
        padding: 1rem;
    }
    
    .carousel-control-prev,
    .carousel-control-next {
        width: 45px;
        height: 45px;
    }
    
    .carousel-control-prev {
        left: 1rem;
    }
    
    .carousel-control-next {
        right: 1rem;
    }
}

@media (max-width: 576px) {
    h2 {
        font-size: 1.5rem;
    }
    
    .carousel-container p {
        font-size: 0.9rem;
    }
    
    .stat-number {
        font-size: 1.3rem;
    }
    
    .stat-label {
        font-size: 0.8rem;
    }
}
</style>