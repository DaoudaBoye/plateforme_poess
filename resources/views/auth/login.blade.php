<meta name="csrf-token" content="{{ csrf_token() }}">

<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">

            <div class="modal-header position-relative">
                <img src="{{ asset('images/logo.png') }}" alt="Logo" style="height: 40px;">
                <div class="position-absolute w-100 text-center">
                    <h5 class="modal-title" id="loginModalLabel"><strong>CONNEXION</strong></h5>
                </div>
                <button type="button" class="btn-close position-absolute top-0 end-0 m-3" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                <form id="loginForm" action="{{ route('handleLogin') }}" method="POST">
                    @csrf

                    @if(session('error_msg'))
                        <div class="alert alert-danger">
                            {{ session('error_msg') }}
                        </div>
                    @endif

                    <div class="mb-3">
                        <label for="logEmail" class="form-label">Adresse email</label>
                        <input type="email" name="email" class="form-control" id="logEmail"
                               placeholder="Veuillez saisir votre email"
                               value="{{ old('email') }}" required>
                    </div>

                    <div class="mb-3">
                        <label for="logPassword" class="form-label">Mot de passe</label>
                        <div class="input-group">
                            <input type="password" name="password" class="form-control" id="logPassword"
                                   placeholder="Veuillez saisir votre mot de passe" required>
                            <button type="button" class="btn btn-outline-secondary" id="togglePassword" tabindex="-1" aria-label="Afficher/Masquer le mot de passe">
                                <i class="fas fa-eye" id="togglePasswordIcon"></i>
                            </button>
                        </div>
                    </div>

                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-success" id="logSubmitBtn">Se connecter</button>
                        <div id="loadingCubes" class="text-center" style="display: none;">
                            <div class="spinner-border text-success" role="status">
                                <span class="visually-hidden">Chargement...</span>
                            </div>
                        </div>
                    </div>
                </form>

                <hr>
                <div class="text-center">
                    <p>Pas encore de compte ? <a href="#registerModal" data-bs-toggle="modal" data-bs-dismiss="modal">Créer un compte</a></p>
                </div>
            </div>

        </div>
    </div>
</div>

<style>
  /* Style pour les boutons toggle password */
  .input-group .btn-outline-secondary {
    border-color: #ced4da;
    background-color: #fff;
    transition: all 0.3s ease;
  }

  .input-group .btn-outline-secondary:hover {
    background-color: #e9ecef;
    border-color: #ced4da;
    color: #495057;
  }

  .input-group .btn-outline-secondary:focus {
    box-shadow: none;
    border-color: #ced4da;
  }

  .input-group .btn-outline-secondary:active {
    background-color: #e9ecef !important;
    border-color: #ced4da !important;
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

  .input-group .btn-outline-secondary i {
    transition: transform 0.2s ease;
  }

  .input-group .btn-outline-secondary:hover i {
    transform: scale(1.1);
  }

  .btn-success:hover {
    background-color: #1e7e34 !important;
    transform: scale(1.02);
    transition: 0.3s;
  }
</style>