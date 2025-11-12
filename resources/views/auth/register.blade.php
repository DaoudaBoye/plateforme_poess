<meta name="csrf-token" content="{{ csrf_token() }}">

<!-- Modal d'inscription -->
<div class="modal fade" id="registerModal" tabindex="-1" aria-labelledby="registerModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <img src="{{ asset('images/logo.png') }}" alt="Logo" style="height: 40px;">
        <div class="position-absolute w-100 text-center">
          <h5 class="modal-title" id="registerModalLabel"><strong>INSCRIPTION</strong></h5>
        </div>
        <button type="button" class="btn-close position-absolute top-0 end-0 m-3" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="registerForm" action="{{ route('register') }}">
          @csrf
          
          <div class="mb-3">
            <div class="form-group">
              <label>Type structure<span class="required"></span></label>
                <select class="form-control" name="nom-structure" required>
                  <option value="">Sélectionner...</option>
                  <option value="association">SCOOP</option>
                  <option value="ong">AER</option>
                  <option value="entreprise">ES</option>
                </select>
            </div>
          </div>

          <div class="mb-3">
            <label for="regEmail" class="form-label">Adresse email</label>
            <input type="email" class="form-control" id="regEmail" name="email" placeholder="Votre email" required>
          </div>

          <div class="mb-3">
            <label for="regPassword" class="form-label">Mot de passe</label>
            <div class="input-group">
              <input type="password" class="form-control" id="regPassword" name="password" placeholder="Choisissez un mot de passe" required>
              <button type="button" class="btn btn-outline-secondary" id="toggleRegPassword" tabindex="-1" aria-label="Afficher/Masquer le mot de passe">
                <i class="fas fa-eye" id="toggleRegPasswordIcon"></i>
              </button>
            </div>
          </div>

          <div class="mb-3">
            <label for="regPasswordConfirm" class="form-label">Confirmez le mot de passe</label>
            <div class="input-group">
              <input type="password" class="form-control" id="regPasswordConfirm" name="password_confirmation" placeholder="Confirmez votre mot de passe" required>
              <button type="button" class="btn btn-outline-secondary" id="toggleRegPasswordConfirm" tabindex="-1" aria-label="Afficher/Masquer la confirmation">
                <i class="fas fa-eye" id="toggleRegPasswordConfirmIcon"></i>
              </button>
            </div>
          </div>

          <div class="d-grid gap-2">
            <button type="submit" class="btn btn-success" id="submitBtn">Créer un compte</button>
            <div id="loadingSpinner" class="text-center" style="display: none;">
              <div class="spinner-border text-success" role="status">
                <span class="visually-hidden">Chargement...</span>
              </div>
            </div>
          </div>
        </form>
        <hr>
        <div class="text-center">
          <p>Déjà un compte ? <a href="#loginModal" data-bs-toggle="modal" data-bs-dismiss="modal">Se connecter</a></p>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Lien vers Animate.css pour les animations -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">

<!-- Modal de confirmation amélioré -->
<div class="modal fade" id="confirmationModal" tabindex="-1" aria-labelledby="confirmationModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content shadow-lg border-0 rounded-4 animate__animated animate__fadeInDown">
      
      <!-- Header -->
      <div class="modal-header bg-gradient text-white">
        <h5 class="modal-title fw-bold" id="confirmationModalLabel">🎉 Inscription réussie !</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      
      <!-- Body -->
      <div class="modal-body text-center p-4">
        <div class="icon-container mb-3">
          <i class="fas fa-check-circle fa-4x text-success glow"></i>
        </div>
        <p class="fs-5 fw-semibold">Un e-mail de confirmation vous a été envoyé.</p>
        <p class="text-muted small">Veuillez vérifier votre boîte de réception et votre dossier spam.</p>
        
        <div class="alert alert-info small rounded-3 mt-3">
          <strong>📩 Vous ne trouvez pas l'email ?</strong><br>
          Essayez de <a href="#" class="text-decoration-none fw-bold" data-bs-toggle="modal" data-bs-target="#registerModal">renvoyer la confirmation</a>.
        </div>        
      </div>
      
      <!-- Footer -->
      <div class="modal-footer d-flex justify-content-center border-0 pb-4">
        <button type="button" class="btn btn-success px-4 fw-bold shadow-sm" data-bs-dismiss="modal">OK</button>
      </div>

    </div>
  </div>
</div>

<!-- Styles CSS personnalisés -->
<style>
  .bg-gradient {
    background: linear-gradient(135deg, #28a745, #218838);
  }

  .icon-container {
    display: flex;
    justify-content: center;
    align-items: center;
  }

  .glow {
    text-shadow: 0 0 10px rgba(40, 167, 69, 0.7);
  }

  .btn-success:hover {
    background-color: #1e7e34 !important;
    transform: scale(1.05);
    transition: 0.3s;
  }

  /* Style pour les boutons toggle password */
  .input-group .btn-outline-secondary {
    border-color: #ced4da;
    background-color: #fff;
    transition: all 0.3s ease;
  }

  .input-group .btn-outline-secondary:hover {
    background-color: #e9ecef;
    border-color: #ced4da;
  }

  .input-group .btn-outline-secondary:focus {
    box-shadow: none;
    border-color: #ced4da;
  }

  .input-group .form-control {
    border-right: none;
  }

  .input-group .form-control:focus {
    border-color: #ced4da;
    box-shadow: none;
  }

  .input-group .form-control:focus + .btn-outline-secondary {
    border-color: #86b7fe;
  }
</style>