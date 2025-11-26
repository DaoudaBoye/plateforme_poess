<div class="form-card">
        <!-- Header -->
        <div class="form-header">
            <h1><i class="fas fa-user-plus" aria-hidden="true"></i> Formulaire d'Enrôlement</h1>
            <p>Complétez les informations pour votre enrôlement</p>
        </div>

        <!-- Progress Bar -->
        <div class="progress-bar-custom" role="progressbar" aria-valuenow="1" aria-valuemin="1" aria-valuemax="7">
            <div class="progress-step active" data-step="1">
                <div class="step-circle"><i class="fas fa-building" aria-hidden="true"></i></div>
                <div class="step-label">Structure</div>
            </div>
            <div class="progress-step" data-step="2">
                <div class="step-circle"><i class="fas fa-users" aria-hidden="true"></i></div>
                <div class="step-label">Équipe dirigeante</div>
            </div>
            <div class="progress-step" data-step="3">
                <div class="step-circle"><i class="fas fa-map-marker-alt" aria-hidden="true"></i></div>
                <div class="step-label">Localisation</div>
            </div>
            <div class="progress-step" data-step="4">
                <div class="step-circle"><i class="fas fa-bullseye" aria-hidden="true"></i></div>
                <div class="step-label">Analyse & Objectifs</div>
            </div>
            <div class="progress-step" data-step="5">
                <div class="step-circle"><i class="fas fa-handshake" aria-hidden="true"></i></div>
                <div class="step-label">ESS</div>
            </div>
            <div class="progress-step" data-step="6">
                <div class="step-circle"><i class="fas fa-file-alt" aria-hidden="true"></i></div>
                <div class="step-label">Documents</div>
            </div>
            <div class="progress-step" data-step="7">
                <div class="step-circle"><i class="fas fa-check" aria-hidden="true"></i></div>
                <div class="step-label">Confirmation</div>
            </div>
        </div>

        <!-- Form Body -->
        <form id="enrollmentForm" action="" method="POST" enctype="multipart/form-data" novalidate>
            @csrf
            <div class="form-body">
                
                {{-- SECTION 1: INFORMATIONS SUR LA STRUCTURE --}}
                <div class="form-section active" data-section="1">
                    <h2 class="section-title">Informations sur la Structure</h2>
                    <p class="section-subtitle">Renseignez les informations principales de votre structure</p>

                    <div class="alert alert-info">
                        <i class="fas fa-info-circle" aria-hidden="true"></i>
                        <span>Les champs marqués d'un astérisque (<span class="required">*</span>) sont obligatoires</span>
                    </div>

                    <h3 class="subsection-title">Informations générales</h3>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="nom_structure">Nom de la structure <span class="required">*</span></label>
                                <div class="input-group-custom">
                                    <i class="fas fa-building input-icon" aria-hidden="true"></i>
                                    <input type="text" class="form-control" id="nom_structure" name="nom_structure" required aria-required="true">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="type_structure">Type de structure <span class="required">*</span></label>
                                <select class="form-control" id="type_structure" name="type_structure" required aria-required="true">
                                    <option value="">Sélectionner...</option>
                                    <option value="aer">AER</option>
                                    <option value="scoop">SCOOP</option>
                                    <option value="es">ES</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        {{-- <div class="col-md-6">
                            <div class="form-group">
                                <label for="num_agrement">Numéro d'agrément</label>
                                <div class="input-group-custom">
                                    <i class="fas fa-certificate input-icon" aria-hidden="true"></i>
                                    <input type="text" class="form-control" id="num_agrement" name="num_agrement">
                                </div>
                            </div>
                        </div> --}}
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="date_creation">Date de création <span class="required">*</span></label>
                                <div class="input-group-custom">
                                    <i class="fas fa-calendar input-icon" aria-hidden="true"></i>
                                    <input type="date" class="form-control" id="date_creation" name="date_creation" required aria-required="true">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="ninea">NINEA</label>
                                <div class="input-group-custom">
                                    <i class="fas fa-id-card input-icon" aria-hidden="true"></i>
                                    <input type="text" class="form-control" id="ninea" name="ninea" placeholder="Ex: 1234567890">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="num_rc">Numéro du registre de commerce (RC) <span class="required">*</span></label>
                                <div class="input-group-custom">
                                    <i class="fas fa-file-contract input-icon" aria-hidden="true"></i>
                                    <input type="text" class="form-control" id="num_rc" name="num_rc" required aria-required="true" placeholder="Ex: SN-DKR-2024-A-12345">
                                </div>
                            </div>
                        </div>
                    </div>
                    
                   <div class="row">
                        <!-- Numéro d'agrément SCOOP -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="num_agrement_scoop">Numéro d'agrément de la SCOOP</label>
                                <div class="input-group-custom">
                                    <i class="fas fa-certificate input-icon" aria-hidden="true"></i>
                                    <input type="text" class="form-control" id="num_agrement_scoop" 
                                        name="num_agrement_scoop" placeholder="Si applicable">
                                </div>
                            </div>
                        </div>

                        <!-- Numéro de récépissé de l’association -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="num_recepisse_association">Numéro de récépissé de l’association</label>
                                <div class="input-group-custom">
                                    <i class="fas fa-file-alt input-icon" aria-hidden="true"></i>
                                    <input type="text" class="form-control" id="num_recepisse_association" 
                                        name="num_recepisse_association" placeholder="Si applicable">
                                </div>
                            </div>
                        </div>
                    </div>


                    <h3 class="subsection-title">Contact de la structure</h3>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="email">Email <span class="required">*</span></label>
                                <div class="input-group-custom">
                                    <i class="fas fa-envelope input-icon" aria-hidden="true"></i>
                                    <input type="email" class="form-control" id="email" name="email" required aria-required="true">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="telephone">Téléphone <span class="required">*</span></label>
                                <div class="input-group-custom">
                                    <i class="fas fa-phone input-icon" aria-hidden="true"></i>
                                    <input type="tel" class="form-control" id="telephone" name="telephone" pattern="^(77|78|76|75|70|33|30|71)\d{7}$" required aria-required="true">
                                </div>
                            </div>
                        </div>
                    </div>

                    <h3 class="subsection-title">Secteur d'activité</h3>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="secteur">Secteur d'activité <span class="required">*</span></label>
                                <select class="form-control" id="secteur" name="secteur" required aria-required="true">
                                    <option value="">Sélectionner...</option>
                                    <option value="primaire">Primaire</option>
                                    <option value="secondaire">Secondaire</option>
                                    <option value="tertiaire">Tertiaire</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="domaine">Domaine d'activité <span class="required">*</span></label>
                                <select class="form-control" id="domaine" name="domaine" required aria-required="true">
                                    <option value="">Sélectionner...</option>
                                    <option value="sante">Santé</option>
                                    <option value="education">Éducation</option>
                                    <option value="agriculture">Agriculture</option>
                                    <option value="environnement">Environnement</option>
                                    <option value="technologie">Technologie</option>
                                    <option value="commerce">Commerce</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="activite_principale">Description de l'activité principale <span class="required">*</span></label>
                        <textarea class="form-control" id="activite_principale" name="activite_principale" rows="4" required aria-required="true" placeholder="Décrivez brièvement vos activités principales..."></textarea>
                    </div>

                    <h3 class="subsection-title">Composition des membres</h3>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="nombre_hommes">Nombre total de membres<span class="required">*</span></label>
                                <div class="input-group-custom">
                                    <i class="fas fa-users input-icon" aria-hidden="true"></i>
                                    <input type="number" class="form-control" id="nombre_total_membres" name="nombre_total_membres" required min="0" aria-required="true">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="nombre_hommes">Nombre d'hommes <span class="required">*</span></label>
                                <div class="input-group-custom">
                                    <i class="fas fa-male input-icon" aria-hidden="true"></i>
                                    <input type="number" class="form-control" id="nombre_hommes" name="nombre_hommes" required min="0" aria-required="true">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="nombre_femmes">Nombre de femmes <span class="required">*</span></label>
                                <div class="input-group-custom">
                                    <i class="fas fa-female input-icon" aria-hidden="true"></i>
                                    <input type="number" class="form-control" id="nombre_femmes" name="nombre_femmes" required min="0" aria-required="true">
                                </div>
                            </div>
                        </div>
                        
                    </div>

                    <div class="d-flex justify-content-between mt-4">
                        <button type="button" class="btn btn-secondary" disabled>
                            <i class="fas fa-arrow-left" aria-hidden="true"></i> Précédent
                        </button>
                        <div class="d-flex gap-2">
                            <button type="button" class="btn btn-outline-primary" onclick="saveAsDraft()">
                                <i class="fas fa-save" aria-hidden="true"></i> Enregistrer brouillon
                            </button>
                            <button type="button" class="btn btn-primary-custom" onclick="nextSection(2)">
                                Suivant <i class="fas fa-arrow-right" aria-hidden="true"></i>
                            </button>
                        </div>
                    </div>
                </div>

                {{-- SECTION 2: ÉQUIPE DIRIGEANTE --}}
                <div class="form-section" data-section="2">
                    <h2 class="section-title">Équipe Dirigeante</h2>
                    <p class="section-subtitle">Informations sur les responsables de la structure</p>

                    {{-- Président(e) --}}
                    <h3 class="subsection-title"><i class="fas fa-crown"></i> Président(e) de la structure</h3>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="president_prenom">Prénom <span class="required">*</span></label>
                                <div class="input-group-custom">
                                    <i class="fas fa-user input-icon"></i>
                                    <input type="text" class="form-control" id="president_prenom" name="president_prenom" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="president_nom">Nom <span class="required">*</span></label>
                                <div class="input-group-custom">
                                    <i class="fas fa-user input-icon"></i>
                                    <input type="text" class="form-control" id="president_nom" name="president_nom" required>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="president_email">Email <span class="required">*</span></label>
                                <div class="input-group-custom">
                                    <i class="fas fa-envelope input-icon"></i>
                                    <input type="email" class="form-control" id="president_email" name="president_email" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="president_tel">Téléphone <span class="required">*</span></label>
                                <div class="input-group-custom">
                                    <i class="fas fa-mobile-alt input-icon"></i>
                                    <input type="tel" class="form-control" id="president_tel" name="president_tel" required>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="president_adresse">Adresse <span class="required">*</span></label>
                                <div class="input-group-custom">
                                    <i class="fas fa-map-marker-alt input-icon"></i>
                                    <input type="text" class="form-control" id="president_adresse" name="president_adresse" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="president_sexe">Sexe <span class="required">*</span></label>
                                <select class="form-control" id="president_sexe" name="president_sexe" required>
                                    <option value="">Sélectionner...</option>
                                    <option value="masculin">Masculin</option>
                                    <option value="feminin">Féminin</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="president_nationalite">Nationalité <span class="required">*</span></label>
                                <div class="input-group-custom">
                                    <i class="fas fa-flag input-icon"></i>
                                    <input type="text" class="form-control" id="president_nationalite" name="president_nationalite" required>
                                </div>
                            </div>
                        </div>
                    </div>

                    <hr class="my-4">

                    {{-- Directeur/Directrice --}}
                    <h3 class="subsection-title"><i class="fas fa-briefcase"></i> Directeur/Directrice de la structure</h3>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="directeur_prenom">Prénom <span class="required">*</span></label>
                                <div class="input-group-custom">
                                    <i class="fas fa-user input-icon"></i>
                                    <input type="text" class="form-control" id="directeur_prenom" name="directeur_prenom" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="directeur_nom">Nom <span class="required">*</span></label>
                                <div class="input-group-custom">
                                    <i class="fas fa-user input-icon"></i>
                                    <input type="text" class="form-control" id="directeur_nom" name="directeur_nom" required>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="directeur_email">Email <span class="required">*</span></label>
                                <div class="input-group-custom">
                                    <i class="fas fa-envelope input-icon"></i>
                                    <input type="email" class="form-control" id="directeur_email" name="directeur_email" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="directeur_tel">Téléphone <span class="required">*</span></label>
                                <div class="input-group-custom">
                                    <i class="fas fa-mobile-alt input-icon"></i>
                                    <input type="tel" class="form-control" id="directeur_tel" name="directeur_tel" required>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="directeur_adresse">Adresse <span class="required">*</span></label>
                                <div class="input-group-custom">
                                    <i class="fas fa-map-marker-alt input-icon"></i>
                                    <input type="text" class="form-control" id="directeur_adresse" name="directeur_adresse" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="directeur_sexe">Sexe <span class="required">*</span></label>
                                <select class="form-control" id="directeur_sexe" name="directeur_sexe" required>
                                    <option value="">Sélectionner...</option>
                                    <option value="masculin">Masculin</option>
                                    <option value="feminin">Féminin</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="directeur_nationalite">Nationalité <span class="required">*</span></label>
                                <div class="input-group-custom">
                                    <i class="fas fa-flag input-icon"></i>
                                    <input type="text" class="form-control" id="directeur_nationalite" name="directeur_nationalite" required>
                                </div>
                            </div>
                        </div>
                    </div>

                    <hr class="my-4">

                    {{-- Secrétaire général(e) --}}
                    <h3 class="subsection-title"><i class="fas fa-pen"></i> Secrétaire général(e) de la structure</h3>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="secretaire_prenom">Prénom <span class="required">*</span></label>
                                <div class="input-group-custom">
                                    <i class="fas fa-user input-icon"></i>
                                    <input type="text" class="form-control" id="secretaire_prenom" name="secretaire_prenom" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="secretaire_nom">Nom <span class="required">*</span></label>
                                <div class="input-group-custom">
                                    <i class="fas fa-user input-icon"></i>
                                    <input type="text" class="form-control" id="secretaire_nom" name="secretaire_nom" required>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="secretaire_email">Email <span class="required">*</span></label>
                                <div class="input-group-custom">
                                    <i class="fas fa-envelope input-icon"></i>
                                    <input type="email" class="form-control" id="secretaire_email" name="secretaire_email" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="secretaire_tel">Téléphone <span class="required">*</span></label>
                                <div class="input-group-custom">
                                    <i class="fas fa-mobile-alt input-icon"></i>
                                    <input type="tel" class="form-control" id="secretaire_tel" name="secretaire_tel" required>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="secretaire_adresse">Adresse <span class="required">*</span></label>
                                <div class="input-group-custom">
                                    <i class="fas fa-map-marker-alt input-icon"></i>
                                    <input type="text" class="form-control" id="secretaire_adresse" name="secretaire_adresse" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="secretaire_sexe">Sexe <span class="required">*</span></label>
                                <select class="form-control" id="secretaire_sexe" name="secretaire_sexe" required>
                                    <option value="">Sélectionner...</option>
                                    <option value="masculin">Masculin</option>
                                    <option value="feminin">Féminin</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="secretaire_nationalite">Nationalité <span class="required">*</span></label>
                                <div class="input-group-custom">
                                    <i class="fas fa-flag input-icon"></i>
                                    <input type="text" class="form-control" id="secretaire_nationalite" name="secretaire_nationalite" required>
                                </div>
                            </div>
                        </div>
                    </div>

                    <hr class="my-4">

                    {{-- Trésorier(ère) général(e) --}}
                    <h3 class="subsection-title"><i class="fas fa-coins"></i> Trésorier(ère) général(e) de la structure</h3>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="tresorier_prenom">Prénom <span class="required">*</span></label>
                                <div class="input-group-custom">
                                    <i class="fas fa-user input-icon"></i>
                                    <input type="text" class="form-control" id="tresorier_prenom" name="tresorier_prenom" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="tresorier_nom">Nom <span class="required">*</span></label>
                                <div class="input-group-custom">
                                    <i class="fas fa-user input-icon"></i>
                                    <input type="text" class="form-control" id="tresorier_nom" name="tresorier_nom" required>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="tresorier_email">Email <span class="required">*</span></label>
                                <div class="input-group-custom">
                                    <i class="fas fa-envelope input-icon"></i>
                                    <input type="email" class="form-control" id="tresorier_email" name="tresorier_email" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="tresorier_tel">Téléphone <span class="required">*</span></label>
                                <div class="input-group-custom">
                                    <i class="fas fa-mobile-alt input-icon"></i>
                                    <input type="tel" class="form-control" id="tresorier_tel" name="tresorier_tel" required>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="tresorier_adresse">Adresse <span class="required">*</span></label>
                                <div class="input-group-custom">
                                    <i class="fas fa-map-marker-alt input-icon"></i>
                                    <input type="text" class="form-control" id="tresorier_adresse" name="tresorier_adresse" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="tresorier_sexe">Sexe <span class="required">*</span></label>
                                <select class="form-control" id="tresorier_sexe" name="tresorier_sexe" required>
                                    <option value="">Sélectionner...</option>
                                    <option value="masculin">Masculin</option>
                                    <option value="feminin">Féminin</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="tresorier_nationalite">Nationalité <span class="required">*</span></label>
                                <div class="input-group-custom">
                                    <i class="fas fa-flag input-icon"></i>
                                    <input type="text" class="form-control" id="tresorier_nationalite" name="tresorier_nationalite" required>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="d-flex justify-content-between mt-4">
                        <button type="button" class="btn btn-secondary" onclick="prevSection(1)">
                            <i class="fas fa-arrow-left"></i> Précédent
                        </button>
                        <div class="d-flex gap-2">
                            <button type="button" class="btn btn-outline-primary" onclick="saveAsDraft()">
                                <i class="fas fa-save"></i> Enregistrer brouillon
                            </button>
                            <button type="button" class="btn btn-primary-custom" onclick="nextSection(3)">
                                Suivant <i class="fas fa-arrow-right"></i>
                            </button>
                        </div>
                    </div>
                </div>

                {{-- SECTION 3: LOCALISATION --}}
                <div class="form-section" data-section="3">
                    <h2 class="section-title">Localisation</h2>
                    <p class="section-subtitle">Adresse et zone géographique de votre structure</p>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="region">Région <span class="required">*</span></label>
                                <select class="form-control" id="region" name="region" required>
                                    <option value="">Sélectionner...</option>
                                    <option value="dakar">Dakar</option>
                                    <option value="thies">Thiès</option>
                                    <option value="saint-louis">Saint-Louis</option>
                                    <option value="diourbel">Diourbel</option>
                                    <option value="louga">Louga</option>
                                    <option value="kaolack">Kaolack</option>
                                    <option value="fatick">Fatick</option>
                                    <option value="ziguinchor">Ziguinchor</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="departement">Département <span class="required">*</span></label>
                                <select class="form-control" id="departement" name="departement" required>
                                    <option value="">Sélectionner d'abord une région</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="commune">Commune <span class="required">*</span></label>
                        <select class="form-control" id="commune" name="commune" required>
                            <option value="">Sélectionner d'abord un département</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="adresse">Adresse complète <span class="required">*</span></label>
                        <div class="input-group-custom">
                            <i class="fas fa-map-marker-alt input-icon"></i>
                            <input type="text" class="form-control" id="adresse" name="adresse" required placeholder="Rue, quartier, numéro...">
                        </div>
                    </div>

                    <div class="d-flex justify-content-between mt-4">
                        <button type="button" class="btn btn-secondary" onclick="prevSection(2)">
                            <i class="fas fa-arrow-left"></i> Précédent
                        </button>
                        <div class="d-flex gap-2">
                            <button type="button" class="btn btn-outline-primary" onclick="saveAsDraft()">
                                <i class="fas fa-save"></i> Enregistrer brouillon
                            </button>
                            <button type="button" class="btn btn-primary-custom" onclick="nextSection(4)">
                                Suivant <i class="fas fa-arrow-right"></i>
                            </button>
                        </div>
                    </div>
                </div>

                {{-- SECTION 4: ANALYSE & OBJECTIFS --}}
                <div class="form-section" data-section="4">
                    <h2 class="section-title">Analyse & Objectifs</h2>
                    <p class="section-subtitle">Problématiques identifiées et solutions proposées</p>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="problemes_identifies">Description des problèmes identifiés <span class="required">*</span></label>
                                <textarea class="form-control" id="problemes_identifies" name="problemes_identifies" rows="4" required></textarea>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="solutions_proposees">Description des solutions à apporter <span class="required">*</span></label>
                                <textarea class="form-control" id="solutions_proposees" name="solutions_proposees" rows="4" required></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="capital_social">Capital social <span class="required">*</span></label>
                        <div class="input-group-custom">
                            <i class="fas fa-coins input-icon"></i>
                            <input type="number" class="form-control" id="capital_social" name="capital_social" required min="0">
                        </div>
                    </div>

                    <div class="d-flex justify-content-between mt-4">
                        <button type="button" class="btn btn-secondary" onclick="prevSection(3)">
                            <i class="fas fa-arrow-left"></i> Précédent
                        </button>
                        <div class="d-flex gap-2">
                            <button type="button" class="btn btn-outline-primary" onclick="saveAsDraft()">
                                <i class="fas fa-save"></i> Enregistrer brouillon
                            </button>
                            <button type="button" class="btn btn-primary-custom" onclick="nextSection(5)">
                                Suivant <i class="fas fa-arrow-right"></i>
                            </button>
                        </div>
                    </div>
                </div>

                {{-- SECTION 5: CARACTÉRISTIQUES DE L'ESS --}}
                <div class="form-section" data-section="5">
                    <h2 class="section-title">Caractéristiques de l'ESS</h2>
                    <p class="section-subtitle">Informations spécifiques à l'Économie Sociale et Solidaire</p>

                    <div class="form-group">
                        <label for="element_caracterisant">Élément caractérisant l'ESS <span class="required">*</span></label>
                        <textarea class="form-control" id="element_caracterisant" name="element_caracterisant" rows="4" required aria-required="true" placeholder="Décrivez les éléments qui caractérisent votre structure comme acteur de l'ESS..."></textarea>
                        <small class="form-text text-muted">Expliquez comment votre structure s'inscrit dans les principes de l'économie sociale et solidaire</small>
                    </div>

                    <div class="form-group">
                        <label>Disponibilité des états financiers <span class="required">*</span></label>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="checkbox-custom">
                                    <input type="radio" id="etats_financiers_oui" name="etats_financiers_disponible" value="oui" required>
                                    <label for="etats_financiers_oui" style="cursor: pointer; margin: 0;">
                                        Oui, j'ai des états financiers à fournir
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="checkbox-custom">
                                    <input type="radio" id="etats_financiers_non" name="etats_financiers_disponible" value="non" required>
                                    <label for="etats_financiers_non" style="cursor: pointer; margin: 0;">
                                        Non, pas d'états financiers disponibles
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group" id="etats_financiers_upload_container" style="display: none;">
                        <label for="etats_financiers_fichier">Télécharger les états financiers <span class="required">*</span></label>
                        <div class="file-upload-wrapper">
                            <input type="file" id="etats_financiers_fichier" name="etats_financiers_fichier" accept=".pdf,.xlsx,.xls">
                            <label for="etats_financiers_fichier" class="file-upload-label">
                                <i class="fas fa-cloud-upload-alt"></i>
                                <span>Cliquez pour télécharger les états financiers</span>
                            </label>
                        </div>
                        <small class="form-text text-muted">Formats acceptés: PDF, Excel (XLSX, XLS)</small>
                    </div>

                    {{-- <div class="form-group">
                        <label for="date_demande_agrement">Date de la demande d'agrément ESS <span class="required">*</span></label>
                        <div class="input-group-custom">
                            <i class="fas fa-calendar input-icon" aria-hidden="true"></i>
                            <input type="date" class="form-control" id="date_demande_agrement" name="date_demande_agrement" required aria-required="true">
                        </div>
                        <small class="form-text text-muted">Date à laquelle vous avez déposé ou prévoyez de déposer votre demande d'agrément</small>
                    </div> --}}

                    <div class="d-flex justify-content-between mt-4">
                        <button type="button" class="btn btn-secondary" onclick="prevSection(4)">
                            <i class="fas fa-arrow-left"></i> Précédent
                        </button>
                        <div class="d-flex gap-2">
                            <button type="button" class="btn btn-outline-primary" onclick="saveAsDraft()">
                                <i class="fas fa-save"></i> Enregistrer brouillon
                            </button>
                            <button type="button" class="btn btn-primary-custom" onclick="nextSection(6)">
                                Suivant <i class="fas fa-arrow-right"></i>
                            </button>
                        </div>
                    </div>
                </div>

                {{-- SECTION 6: DOCUMENTS JUSTIFICATIFS --}}
                <div class="form-section" data-section="6">
                    <h2 class="section-title">Documents Justificatifs</h2>
                    <p class="section-subtitle">Téléchargez les documents requis</p>

                    <div class="alert alert-info">
                        <i class="fas fa-info-circle"></i>
                        <span>Formats acceptés: PDF, JPG, PNG. Taille max: 5 Mo</span>
                    </div>

                    <div class="form-group">
                        <label for="pv_assemblee">PV de l'assemblée générale <span class="required">*</span></label>
                        <div class="file-upload-wrapper">
                            <input type="file" id="pv_assemblee" name="pv_assemblee" accept=".pdf,.jpg,.jpeg,.png" required>
                            <label for="pv_assemblee" class="file-upload-label">
                                <i class="fas fa-cloud-upload-alt"></i>
                                <span>Cliquez pour télécharger le PV</span>
                            </label>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="reglement_interieur">Règlement intérieur <span class="required">*</span></label>
                        <div class="file-upload-wrapper">
                            <input type="file" id="reglement_interieur" name="reglement_interieur" accept=".pdf" required>
                            <label for="reglement_interieur" class="file-upload-label">
                                <i class="fas fa-cloud-upload-alt"></i>
                                <span>Cliquez pour télécharger le règlement</span>
                            </label>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="statuts">Statuts <span class="required">*</span></label>
                        <div class="file-upload-wrapper">
                            <input type="file" id="statuts" name="statuts" accept=".pdf" required>
                            <label for="statuts" class="file-upload-label">
                                <i class="fas fa-cloud-upload-alt"></i>
                                <span>Cliquez pour télécharger les statuts</span>
                            </label>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="autres_docs">Autres documents (facultatif)</label>
                        <div class="file-upload-wrapper">
                            <input type="file" id="autres_docs" name="autres_docs[]" accept=".pdf,.jpg,.jpeg,.png" multiple>
                            <label for="autres_docs" class="file-upload-label">
                                <i class="fas fa-cloud-upload-alt"></i>
                                <span>Cliquez pour télécharger (plusieurs fichiers possibles)</span>
                            </label>
                        </div>
                    </div>

                    <div class="d-flex justify-content-between mt-4">
                        <button type="button" class="btn btn-secondary" onclick="prevSection(5)">
                            <i class="fas fa-arrow-left"></i> Précédent
                        </button>
                        <div class="d-flex gap-2">
                            <button type="button" class="btn btn-outline-primary" onclick="saveAsDraft()">
                                <i class="fas fa-save"></i> Enregistrer brouillon
                            </button>
                            <button type="button" class="btn btn-primary-custom" onclick="nextSection(7)">
                                Suivant <i class="fas fa-arrow-right"></i>
                            </button>
                        </div>
                    </div>
                </div>

                {{-- SECTION 7: RÉCAPITULATIF --}}
                <div class="form-section" data-section="7">
                    <h2 class="section-title">Récapitulatif</h2>
                    <p class="section-subtitle">Vérifiez vos informations avant de soumettre</p>

                    <div class="summary-card">
                        <h3><i class="fas fa-building"></i> Informations Structure</h3>
                        <div class="summary-item">
                            <span class="summary-label">Nom:</span>
                            <span class="summary-value" id="summary-nom">-</span>
                        </div>
                        <div class="summary-item">
                            <span class="summary-label">Type:</span>
                            <span class="summary-value" id="summary-type">-</span>
                        </div>
                        <div class="summary-item">
                            <span class="summary-label">Email:</span>
                            <span class="summary-value" id="summary-email">-</span>
                        </div>
                    </div>

                    <div class="summary-card">
                        <h3><i class="fas fa-users"></i> Équipe Dirigeante</h3>
                        <div class="summary-item">
                            <span class="summary-label">Président(e):</span>
                            <span class="summary-value" id="summary-president">-</span>
                        </div>
                        <div class="summary-item">
                            <span class="summary-label">Directeur/Directrice:</span>
                            <span class="summary-value" id="summary-directeur">-</span>
                        </div>
                        <div class="summary-item">
                            <span class="summary-label">Secrétaire général(e):</span>
                            <span class="summary-value" id="summary-secretaire">-</span>
                        </div>
                        <div class="summary-item">
                            <span class="summary-label">Trésorier(ère):</span>
                            <span class="summary-value" id="summary-tresorier">-</span>
                        </div>
                    </div>

                    <div class="summary-card">
                        <h3><i class="fas fa-map-marker-alt"></i> Localisation</h3>
                        <div class="summary-item">
                            <span class="summary-label">Région:</span>
                            <span class="summary-value" id="summary-region">-</span>
                        </div>
                        <div class="summary-item">
                            <span class="summary-label">Département:</span>
                            <span class="summary-value" id="summary-departement">-</span>
                        </div>
                        <div class="summary-item">
                            <span class="summary-label">Commune:</span>
                            <span class="summary-value" id="summary-commune">-</span>
                        </div>
                        <div class="summary-item">
                            <span class="summary-label">Adresse:</span>
                            <span class="summary-value" id="summary-adresse">-</span>
                        </div>
                    </div>

                    <div class="summary-card">
                        <h3><i class="fas fa-handshake"></i> Caractéristiques ESS</h3>
                        <div class="summary-item">
                            <span class="summary-label">Élément caractérisant:</span>
                            <span class="summary-value" id="summary-element-ess">-</span>
                        </div>
                        <div class="summary-item">
                            <span class="summary-label">États financiers:</span>
                            <span class="summary-value" id="summary-etats-financiers">-</span>
                        </div>
                        <div class="summary-item">
                            <span class="summary-label">Date demande agrément:</span>
                            <span class="summary-value" id="summary-date-agrement">-</span>
                        </div>
                    </div>

                    <div class="form-group mt-4">
                        <div class="checkbox-custom">
                            <input type="checkbox" id="accept_terms" name="accept_terms" required>
                            <label for="accept_terms" style="cursor: pointer; margin: 0;">
                                J'accepte les termes et conditions <span class="required">*</span>
                            </label>
                        </div>
                    </div>

                    <div class="d-flex justify-content-between mt-4">
                        <button type="button" class="btn btn-secondary" onclick="prevSection(6)">
                            <i class="fas fa-arrow-left"></i> Précédent
                        </button>
                        <button type="submit" class="btn btn-primary-custom">
                            <i class="fas fa-paper-plane"></i> Soumettre
                        </button>
                    </div>
                </div>

                {{-- SECTION 8: SUCCÈS --}}
                <div class="form-section" data-section="8">
                    <div class="success-message">
                        <div class="success-icon">
                            <i class="fas fa-check-circle"></i>
                        </div>
                        <h2>Enrôlement Soumis avec Succès !</h2>
                        <p>Votre demande a été enregistrée. Vous recevrez un email de confirmation.</p>
                        
                        <div style="display: flex; gap: 15px; justify-content: center; margin-top: 30px;">
                            <a href="{{ route('struct.dashboard') }}" class="btn btn-primary-custom">
                                <i class="fas fa-home"></i> Retour au tableau de bord
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </form>
    </div>