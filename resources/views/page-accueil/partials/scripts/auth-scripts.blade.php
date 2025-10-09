<script>
  // ============================================================
  // GESTION DES MODALS (Connexion et Inscription)
  // ============================================================
  
  // Afficher le modal si la session est définie
  @if(session('open_modal'))
    document.addEventListener('DOMContentLoaded', function () {
      const loginModal = new bootstrap.Modal(document.getElementById('loginModal'));
      loginModal.show();
    });
  @endif

  // Lors de la fermeture du modal de connexion, ne pas supprimer la couche sombre immédiatement
  $('#loginModal').on('hidden.bs.modal', function () {
    if (!$('#registerModal').hasClass('show')) {
      $('body').removeClass('modal-open');
      $('.modal-backdrop').remove();
    }
  });

  // Lors de l'ouverture du modal d'inscription, on ferme le modal de connexion
  $('#loginModal').on('hide.bs.modal', function () {
    $('#registerModal').modal('show');
  });

  
  // ============================================================
  // GESTION DU FORMULAIRE DE CONNEXION
  // ============================================================
  
  // Toggle visibilité du mot de passe
  document.getElementById('togglePassword').addEventListener('click', function () {
    const passwordField = document.getElementById('logPassword');
    const passwordIcon = document.getElementById('togglePasswordIcon');
    const toggleButton = document.getElementById('togglePassword');

    if (passwordField.type === 'password') {
      passwordField.type = 'text';
      passwordIcon.classList.remove('fa-eye');
      passwordIcon.classList.add('fa-eye-slash');
      toggleButton.setAttribute('aria-pressed', 'true');
    } else {
      passwordField.type = 'password';
      passwordIcon.classList.remove('fa-eye-slash');
      passwordIcon.classList.add('fa-eye');
      toggleButton.setAttribute('aria-pressed', 'false');
    }
  });

  // Afficher les cubes de chargement lors de la soumission
  document.getElementById('loginForm').addEventListener('submit', function(event) {
    const submitButton = document.getElementById('logSubmitBtn');
    const loadingCubes = document.getElementById('loadingCubes');

    submitButton.disabled = true;
    loadingCubes.style.display = 'flex';
  });

  
  // ============================================================
  // SYSTÈME DE FILTRAGE DES ARTICLES
  // ============================================================
  
  const filterButtons = document.querySelectorAll('.filter-btn');
  const articles = document.querySelectorAll('#articles-grid > div[data-category]');

  filterButtons.forEach(btn => {
    btn.addEventListener('click', function() {
      const filter = this.getAttribute('data-filter');
      
      // Mise à jour des boutons actifs
      filterButtons.forEach(b => {
        b.classList.remove('active');
        b.setAttribute('aria-pressed', 'false');
      });
      this.classList.add('active');
      this.setAttribute('aria-pressed', 'true');
      
      // Filtrage des articles
      articles.forEach(article => {
        const category = article.getAttribute('data-category');
        if (filter === 'all' || category === filter) {
          article.style.display = 'block';
          article.classList.add('fade-in-up');
        } else {
          article.style.display = 'none';
        }
      });
    });
  });

  
  // ============================================================
  // GESTION DE LA NEWSLETTER
  // ============================================================
  
  document.getElementById('newsletter-form').addEventListener('submit', function(e) {
    e.preventDefault();
    const email = this.querySelector('input[type="email"]').value;
    
    alert(`Merci de vous être abonné avec l'email : ${email}`);
    this.reset();
  });

  
  // ============================================================
  // ANIMATIONS AU SCROLL (Intersection Observer de base)
  // ============================================================
  
  const observerOptions = {
    threshold: 0.1,
    rootMargin: '0px 0px -50px 0px'
  };

  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.style.opacity = '1';
        entry.target.style.transform = 'translateY(0)';
      }
    });
  }, observerOptions);

  document.querySelectorAll('.fade-in-up').forEach(el => {
    el.style.opacity = '0';
    el.style.transform = 'translateY(30px)';
    el.style.transition = 'all 0.6s ease-out';
    observer.observe(el);
  });

  
  // ============================================================
  // ANIMATIONS DES STATISTIQUES
  // ============================================================
  
  document.addEventListener('DOMContentLoaded', function() {
    
    // Animation des nombres
    function animateNumbers() {
      const counters = document.querySelectorAll('.stat-number');
      
      counters.forEach(counter => {
        const target = parseInt(counter.getAttribute('data-target'));
        const duration = 2000;
        const increment = target / (duration / 16);
        let current = 0;
        
        const updateCounter = () => {
          current += increment;
          if (current < target) {
            counter.textContent = Math.ceil(current).toLocaleString('fr-FR');
            requestAnimationFrame(updateCounter);
          } else {
            counter.textContent = target.toLocaleString('fr-FR');
          }
        };
        
        updateCounter();
      });
    }

    // Animation des barres de progression
    function animateProgressBars() {
      const progressBars = document.querySelectorAll('.stat-progress .progress-bar');
      
      progressBars.forEach(bar => {
        const progress = bar.getAttribute('data-progress');
        setTimeout(() => {
          bar.style.width = progress + '%';
        }, 100);
      });
      
      // Barres horizontales
      const horizontalBars = document.querySelectorAll('.progress-bar-fill');
      horizontalBars.forEach(bar => {
        const width = bar.getAttribute('data-width');
        setTimeout(() => {
          bar.style.width = width + '%';
        }, 100);
      });
    }

    // Animation du graphique circulaire
    function animateCircularProgress() {
      const circularProgress = document.querySelector('.circular-progress');
      if (circularProgress) {
        const percentage = circularProgress.getAttribute('data-percentage');
        const circle = circularProgress.querySelector('.progress-circle');
        const offset = 502 - (502 * percentage) / 100;
        
        setTimeout(() => {
          circle.style.strokeDashoffset = offset;
        }, 100);
      }
    }

    // Observer pour les statistiques
    const statsObserver = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.style.opacity = '1';
          entry.target.style.transform = 'translateY(0)';
          
          if (!entry.target.classList.contains('animated')) {
            if (entry.target.closest('.stats-section')) {
              animateNumbers();
              animateProgressBars();
              animateCircularProgress();
              entry.target.classList.add('animated');
            }
          }
        }
      });
    }, { threshold: 0.1 });

    // Observer tous les éléments fade-in-up
    document.querySelectorAll('.fade-in-up').forEach(el => {
      statsObserver.observe(el);
    });
  });
</script>