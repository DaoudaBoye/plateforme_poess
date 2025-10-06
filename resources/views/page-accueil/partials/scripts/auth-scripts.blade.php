  <script>
      // Cacher ou afficher le mot de passe et changer l'icône
      document.getElementById('togglePassword').addEventListener('click', function () {
        const passwordField = document.getElementById('logPassword');
        const passwordIcon = document.getElementById('togglePasswordIcon');
        const toggleButton = document.getElementById('togglePassword');
    
        // Toggle le type du champ de mot de passe
        if (passwordField.type === 'password') {
          passwordField.type = 'text';
          passwordIcon.classList.remove('fa-eye');
          passwordIcon.classList.add('fa-eye-slash'); // Modifier l'icône pour 'mot de passe visible'
          toggleButton.setAttribute('aria-pressed', 'true'); // Indiquer que le mot de passe est visible
        } else {
          passwordField.type = 'password'; // Correction ici: 'password' au lieu de 'logPassword'
          passwordIcon.classList.remove('fa-eye-slash');
          passwordIcon.classList.add('fa-eye'); // Remettre l'icône pour 'mot de passe caché'
          toggleButton.setAttribute('aria-pressed', 'false'); // Indiquer que le mot de passe est caché
        }
      });
    
      // Afficher le modal si la session est définie
      @if(session('open_modal'))
        document.addEventListener('DOMContentLoaded', function () {
          const loginModal = new bootstrap.Modal(document.getElementById('loginModal'));
          loginModal.show(); // Ouvre le modal
        });
      @endif
    
      // Afficher ou masquer les cubes animés lors de la soumission du formulaire
      document.getElementById('loginForm').addEventListener('submit', function(event) {
        const submitButton = document.getElementById('logSubmitBtn');
        const loadingCubes = document.getElementById('loadingCubes');
    
        // Désactiver le bouton de soumission
        submitButton.disabled = true;
        // Afficher les cubes
        loadingCubes.style.display = 'flex';
      });
      
      
    </script>
    <script>
      // Lors de la fermeture du modal de connexion, ne pas supprimer la couche sombre immédiatement
      $('#loginModal').on('hidden.bs.modal', function () {
        // Vérifie si le modal d'inscription est ouvert
        if (!$('#registerModal').hasClass('show')) {
          // Si le modal d'inscription est fermé, on enlève la couche sombre
          $('body').removeClass('modal-open');
          $('.modal-backdrop').remove();
        }
      });
    
      // Lors de l'ouverture du modal d'inscription, on ferme le modal de connexion
      $('#loginModal').on('hide.bs.modal', function () {
        $('#registerModal').modal('show');  // Ouvre le modal d'inscription
      });
    </script>