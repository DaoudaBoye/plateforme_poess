<section class="hero">
    <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">
        
        {{-- Badge flottant --}}
        <div class="floating-badge">
            🌍 Initiative ESS 2025
        </div>

        {{-- Slides --}}
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="assets/img/hero-carousel/hero-carousel-2.png" 
                     alt="Plateforme ESS" 
                     onerror="this.style.display='none'">
                <div class="carousel-container">
                    <h2>Plateforme Numérique des Organisations de l'Économie Sociale et Solidaire</h2>
                    <p>Une initiative pour célébrer l'innovation en matière d'inclusion financière et de développement durable</p>
                    <a href="#registerModal" class="btn-get-started" data-bs-toggle="modal" data-bs-target="#registerModal">
                        Participez Maintenant
                    </a>
                </div>
            </div>

            <div class="carousel-item">
                <img src="assets/img/hero-carousel/hero-carousel-3.png" 
                     alt="Transformation" 
                     onerror="this.style.display='none'">
                <div class="carousel-container">
                    <h2>Participez à une Transformation Durable</h2>
                    <p>Rejoignez-nous pour honorer les acteurs qui œuvrent à réduire les inégalités grâce à des solutions financières inclusives</p>
                    <a href="#registerModal" class="btn-get-started" data-bs-toggle="modal" data-bs-target="#registerModal">
                        Rejoignez le Mouvement
                    </a>
                </div>
            </div>

            <div class="carousel-item">
                <img src="assets/img/hero-carousel/hero-carousel-3.png" 
                     alt="Innovation" 
                     onerror="this.style.display='none'">
                <div class="carousel-container">
                    <h2>Innovation et Impact Social</h2>
                    <p>Ensemble, construisons un avenir où l'économie rime avec solidarité et inclusion pour tous</p>
                    <a href="#registerModal" class="btn-get-started" data-bs-toggle="modal" data-bs-target="#registerModal">
                        Découvrez Comment
                    </a>
                </div>
            </div>
        </div>

        {{-- Contrôles --}}
        <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>

        {{-- Indicateurs --}}
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="0" class="active"></button>
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="1"></button>
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="2"></button>
        </div>
    </div>
</section>