<meta name="csrf-token" content="{{ csrf_token() }}">
{{-- ========================================
         MODALS
    ======================================== --}}
{{-- Login Modal --}}
<div class="modal fade {{ session('open_modal') ? 'show' : '' }}" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            {{-- Header --}}
            <div class="modal-header position-relative">
                <img src="{{ asset('images/logo.png') }}" alt="Logo" style="height: 40px;">
                <div class="position-absolute w-100 text-center">
                    <h5 class="modal-title" id="loginModalLabel"><strong>CONNEXION</strong></h5>
                </div>
                <button type="button" class="btn-close position-absolute top-0 end-0 m-3" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            {{-- Body --}}
            <div class="modal-body">
                <form id="loginForm" action="{{ route('handleLogin') }}" method="POST">
                    @csrf
                    
                    @if(session('error_msg'))
                        <div class="alert alert-danger">
                            {{ session('error_msg') }}
                        </div>
                    @endif

                    <div class="mb-3">
                        <label for="email" class="form-label">Adresse email</label>
                        <input type="email" name="email" class="form-control form-control-sm" id="logEmail" placeholder="Veuillez saisir votre email" required aria-label="Adresse email">
                    </div>

                    <div class="mb-3 position-relative">
                        <label for="password" class="form-label">Mot de passe</label>
                        <div class="input-group">
                            <input type="password" name="password" class="form-control form-control-sm" id="logPassword" placeholder="Veuillez saisir votre mot de passe" required aria-label="Mot de passe">
                            <button type="button" class="btn btn-outline-secondary" id="togglePassword" tabindex="-1" style="border-left: none;" aria-pressed="false">
                                <i class="fas fa-eye" id="togglePasswordIcon"></i>
                            </button>
                        </div>
                    </div>

                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-success" id="logSubmitBtn">Se connecter</button>
                        {{-- Cube de chargement --}}
                        <div id="loadingCubes" class="loading-cubes">
                            <div class="loading-cube"></div>
                            <div class="loading-cube"></div>
                            <div class="loading-cube"></div>
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
