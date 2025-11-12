<script>
  // ============================================================
  // GESTION DES MODALS (Connexion et Inscription)
  // ============================================================
  
  document.addEventListener('DOMContentLoaded', function() {
    // Afficher le modal de connexion si la session est définie
    @if(session('open_modal'))
      const loginModal = new bootstrap.Modal(document.getElementById('loginModal'));
      loginModal.show();
    @endif

    // Gestion de la transition Login → Register
    $('#registerModal').on('show.bs.modal', function () {
      $('#loginModal').modal('hide');
    });

    // Gestion de la transition Register → Login
    $('#loginModal').on('show.bs.modal', function () {
      $('#registerModal').modal('hide');
    });

    // Nettoyage du backdrop quand les deux modals sont fermés
    $('#loginModal, #registerModal').on('hidden.bs.modal', function () {
      if (!$('#loginModal').hasClass('show') && !$('#registerModal').hasClass('show')) {
        $('body').removeClass('modal-open');
        $('.modal-backdrop').remove();
      }
    });
  });

  
  // ============================================================
  // TOGGLE VISIBILITÉ DES MOTS DE PASSE - CONNEXION
  // ============================================================
  
  document.addEventListener('DOMContentLoaded', function() {
    const togglePassword = document.getElementById('togglePassword');
    const passwordField = document.getElementById('logPassword');
    const passwordIcon = document.getElementById('togglePasswordIcon');

    if (togglePassword && passwordField && passwordIcon) {
      togglePassword.addEventListener('click', function() {
        if (passwordField.type === 'password') {
          passwordField.type = 'text';
          passwordIcon.classList.remove('fa-eye');
          passwordIcon.classList.add('fa-eye-slash');
          togglePassword.setAttribute('aria-pressed', 'true');
        } else {
          passwordField.type = 'password';
          passwordIcon.classList.remove('fa-eye-slash');
          passwordIcon.classList.add('fa-eye');
          togglePassword.setAttribute('aria-pressed', 'false');
        }
      });
    }

    // Afficher le spinner lors de la soumission du formulaire de connexion
    const loginForm = document.getElementById('loginForm');
    if (loginForm) {
      loginForm.addEventListener('submit', function() {
        const submitButton = document.getElementById('logSubmitBtn');
        const loadingCubes = document.getElementById('loadingCubes');
        if (submitButton) submitButton.disabled = true;
        if (loadingCubes) loadingCubes.style.display = 'block';
      });
    }
  });

  
  // ============================================================
  // TOGGLE VISIBILITÉ DES MOTS DE PASSE - INSCRIPTION
  // ============================================================
  
  document.addEventListener('DOMContentLoaded', function() {
    // Toggle pour le mot de passe
    const toggleRegPassword = document.getElementById('toggleRegPassword');
    const regPasswordField = document.getElementById('regPassword');
    const regPasswordIcon = document.getElementById('toggleRegPasswordIcon');

    if (toggleRegPassword && regPasswordField && regPasswordIcon) {
      toggleRegPassword.addEventListener('click', function() {
        if (regPasswordField.type === 'password') {
          regPasswordField.type = 'text';
          regPasswordIcon.classList.remove('fa-eye');
          regPasswordIcon.classList.add('fa-eye-slash');
          toggleRegPassword.setAttribute('aria-pressed', 'true');
        } else {
          regPasswordField.type = 'password';
          regPasswordIcon.classList.remove('fa-eye-slash');
          regPasswordIcon.classList.add('fa-eye');
          toggleRegPassword.setAttribute('aria-pressed', 'false');
        }
      });
    }

    // Toggle pour la confirmation du mot de passe
    const toggleRegPasswordConfirm = document.getElementById('toggleRegPasswordConfirm');
    const regPasswordConfirmField = document.getElementById('regPasswordConfirm');
    const regPasswordConfirmIcon = document.getElementById('toggleRegPasswordConfirmIcon');

    if (toggleRegPasswordConfirm && regPasswordConfirmField && regPasswordConfirmIcon) {
      toggleRegPasswordConfirm.addEventListener('click', function() {
        if (regPasswordConfirmField.type === 'password') {
          regPasswordConfirmField.type = 'text';
          regPasswordConfirmIcon.classList.remove('fa-eye');
          regPasswordConfirmIcon.classList.add('fa-eye-slash');
          toggleRegPasswordConfirm.setAttribute('aria-pressed', 'true');
        } else {
          regPasswordConfirmField.type = 'password';
          regPasswordConfirmIcon.classList.remove('fa-eye-slash');
          regPasswordConfirmIcon.classList.add('fa-eye');
          toggleRegPasswordConfirm.setAttribute('aria-pressed', 'false');
        }
      });
    }
  });

  
  // ============================================================
  // SOUMISSION DU FORMULAIRE D'INSCRIPTION (AJAX)
  // ============================================================
  
  $(document).ready(function() {
    $('#registerForm').on('submit', function (e) {
      e.preventDefault();

      $('#submitBtn').hide();
      $('#loadingSpinner').show();
      $('.text-danger, .invalid-feedback').remove();
      $('.form-control').removeClass('is-invalid');

      if ($('#regPassword').val() !== $('#regPasswordConfirm').val()) {
        $('#regPasswordConfirm').after('<div class="text-danger small mt-1">Les mots de passe ne correspondent pas.</div>');
        $('#submitBtn').show();
        $('#loadingSpinner').hide();
        return;
      }

      $.ajax({
        url: '{{ route("register") }}',
        method: 'POST',
        data: $(this).serialize(),
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
        },
        success: function (response) {
          if (response.status == "success") {
            $('#registerModal').modal('hide');
            $('#confirmationModal').modal('show');
            $('#registerForm')[0].reset();
          }
        },
        error: function (xhr) {
          if (xhr.status === 422) {
            let errors = xhr.responseJSON.errors;
            for (let field in errors) {
              let input = $(`[name="${field}"]`);
              input.addClass('is-invalid');
              input.after(`<div class="invalid-feedback">${errors[field][0]}</div>`);
            }
          } else {
            alert(xhr.responseJSON.message || 'Erreur interne, veuillez réessayer.');
          }
          $('#submitBtn').show();
          $('#loadingSpinner').hide();
        }
      });
    });
  });

  
  // ============================================================
  // SYSTÈME DE FILTRAGE DES ARTICLES
  // ============================================================
  
  const filterButtons = document.querySelectorAll('.filter-btn');
  const articles = document.querySelectorAll('#articles-grid > div[data-category]');

  filterButtons.forEach(btn => {
    btn.addEventListener('click', function() {
      const filter = this.getAttribute('data-filter');
      
      filterButtons.forEach(b => {
        b.classList.remove('active');
        b.setAttribute('aria-pressed', 'false');
      });
      this.classList.add('active');
      this.setAttribute('aria-pressed', 'true');
      
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
  
  const newsletterForm = document.getElementById('newsletter-form');
  if (newsletterForm) {
    newsletterForm.addEventListener('submit', function(e) {
      e.preventDefault();
      const email = this.querySelector('input[type="email"]').value;
      alert(`Merci de vous être abonné avec l'email : ${email}`);
      this.reset();
    });
  }

  
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

    function animateProgressBars() {
      const progressBars = document.querySelectorAll('.stat-progress .progress-bar');
      progressBars.forEach(bar => {
        const progress = bar.getAttribute('data-progress');
        setTimeout(() => {
          bar.style.width = progress + '%';
        }, 100);
      });
      
      const horizontalBars = document.querySelectorAll('.progress-bar-fill');
      horizontalBars.forEach(bar => {
        const width = bar.getAttribute('data-width');
        setTimeout(() => {
          bar.style.width = width + '%';
        }, 100);
      });
    }

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

    document.querySelectorAll('.fade-in-up').forEach(el => {
      statsObserver.observe(el);
    });
  });
</script>