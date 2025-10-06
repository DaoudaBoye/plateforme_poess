<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>@yield('title', 'Accueil') - Prix de l'inclusion financière</title>
  <meta name="description" content="Plateforme numérique des organisations de l'Économie Sociale et Solidaire">
  <meta name="keywords" content="ESS, inclusion financière, microfinance, Sénégal">

  <!-- Favicons -->
  <link rel="icon" type="image/x-icon" href="{{ asset('assets/img/favicon.ico') }}">
  <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Bootstrap 5.3.0 (UNE SEULE VERSION) -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  
  <!-- Bootstrap Icons -->
  <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  
  <!-- Vendor CSS Files -->
  <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">

  <style>
    body {
      background-color: #1d1d1d !important;
      font-family: "Asap", sans-serif;
      color: #989898;
      font-size: 16px;
      margin: 0;
      padding: 0;
    }

    /* Fix pour le carousel */
    .hero {
      position: relative;
      width: 100%;
      min-height: 100vh;
    }

    .carousel {
      height: 100vh;
    }

    .carousel-inner,
    .carousel-item {
      height: 100%;
    }

    /* Smooth transitions */
    .carousel-item {
      transition: transform 0.6s ease-in-out;
    }

    /* Fix modal backdrop issues */
    .modal-backdrop {
      z-index: 1040;
    }

    .modal {
      z-index: 1050;
    }

    /* Preloader styles */
    #preloader {
      position: fixed;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      z-index: 9999;
      overflow: hidden;
      background: #1d1d1d;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    #preloader:before {
      content: "";
      width: 60px;
      height: 60px;
      border: 6px solid #20b2aa;
      border-top-color: transparent;
      border-radius: 50%;
      animation: preloader-spin 1s linear infinite;
    }

    @keyframes preloader-spin {
      to {
        transform: rotate(360deg);
      }
    }

    /* Scroll top button */
    .scroll-top {
      position: fixed;
      visibility: hidden;
      opacity: 0;
      right: 15px;
      bottom: 15px;
      z-index: 99999;
      background: #20b2aa;
      width: 40px;
      height: 40px;
      border-radius: 4px;
      transition: all 0.4s;
    }

    .scroll-top i {
      font-size: 24px;
      color: #fff;
      line-height: 0;
    }

    .scroll-top:hover {
      background: #008b8b;
      color: #fff;
    }

    .scroll-top.active {
      visibility: visible;
      opacity: 1;
    }
  </style>

  @stack('styles')
</head>

<body class="index-page">

  <!-- Navbar -->
  @include('layouts.template-accueil.accueil-topbar')

  <!-- Main Content -->
  <div class="content-wrapper main-content">
    @yield('content')
  </div>

  <!-- Footer -->
  @include('layouts.template-accueil.accueil-footer')

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center">
    <i class="bi bi-arrow-up-short"></i>
  </a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- jQuery (chargé en premier si nécessaire) -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

  <!-- Bootstrap 5.3.0 Bundle (UNE SEULE VERSION) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

  <!-- Vendor JS Files -->
  <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
  <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
  <script src="{{ asset('assets/vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>

  <!-- Main JS File -->
  <script src="{{ asset('assets/js/main.js') }}"></script>

  <!-- Global Scripts -->
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      // Initialize AOS (Animate On Scroll)
      if (typeof AOS !== 'undefined') {
        AOS.init({
          duration: 1000,
          easing: 'ease-in-out',
          once: true,
          mirror: false
        });
      }

      // Preloader
      const preloader = document.querySelector('#preloader');
      if (preloader) {
        window.addEventListener('load', () => {
          setTimeout(() => {
            preloader.style.opacity = '0';
            setTimeout(() => {
              preloader.style.display = 'none';
            }, 300);
          }, 500);
        });
      }

      // Scroll top button
      const scrollTop = document.querySelector('.scroll-top');
      if (scrollTop) {
        const toggleScrollTop = function() {
          if (window.scrollY > 100) {
            scrollTop.classList.add('active');
          } else {
            scrollTop.classList.remove('active');
          }
        };
        
        window.addEventListener('load', toggleScrollTop);
        document.addEventListener('scroll', toggleScrollTop);
        
        scrollTop.addEventListener('click', (e) => {
          e.preventDefault();
          window.scrollTo({
            top: 0,
            behavior: 'smooth'
          });
        });
      }

      // Initialize all carousels
      const carousels = document.querySelectorAll('.carousel');
      carousels.forEach(carousel => {
        if (typeof bootstrap !== 'undefined') {
          new bootstrap.Carousel(carousel, {
            interval: 5000,
            ride: 'carousel',
            pause: 'hover',
            wrap: true
          });
        }
      });

      // Form validation for register modal
      const registerForm = document.getElementById("registerForm");
      const passwordInput = document.getElementById("register-password");
      const confirmPasswordInput = document.getElementById("confirm-password");
      const passwordAlert = document.getElementById("passwordAlert");

      if (registerForm && passwordInput && confirmPasswordInput) {
        registerForm.addEventListener("submit", (e) => {
          if (passwordInput.value !== confirmPasswordInput.value) {
            e.preventDefault();
            if (passwordAlert) {
              passwordAlert.style.display = "block";
            }
          } else {
            if (passwordAlert) {
              passwordAlert.style.display = "none";
            }
          }
        });

        // Reset form when modal is closed
        const registerModal = document.getElementById("registerModal");
        if (registerModal) {
          registerModal.addEventListener("hidden.bs.modal", () => {
            registerForm.reset();
            if (passwordAlert) {
              passwordAlert.style.display = "none";
            }
          });
        }
      }

      // Fix modal backdrop issues
      document.querySelectorAll('.modal').forEach(modal => {
        modal.addEventListener('hidden.bs.modal', function() {
          setTimeout(() => {
            if (!document.querySelector('.modal.show')) {
              document.body.classList.remove('modal-open');
              const backdrops = document.querySelectorAll('.modal-backdrop');
              backdrops.forEach(backdrop => backdrop.remove());
            }
          }, 100);
        });
      });

      console.log('✅ Bootstrap version:', typeof bootstrap !== 'undefined' ? 'Loaded' : 'Not loaded');
      console.log('✅ jQuery version:', typeof jQuery !== 'undefined' ? jQuery.fn.jquery : 'Not loaded');
    });
  </script>

  @stack('scripts')

</body>

</html>