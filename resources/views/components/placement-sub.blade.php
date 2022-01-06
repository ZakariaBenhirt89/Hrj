<x-app-layout>
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper container-xxl p-0">

            <div class="content-body">
                <div class="row">
                    <div class="col-12">


                        <!-- profile -->
                        <div class="card">
                            <div class="card-header border-bottom">
                                <h4 class="card-title">Details de profile</h4>
                            </div>
                            <div class="card-body py-2 my-25">
                                <!-- header section -->
                                <div class="d-flex justify-content-between">
                                    <a href="#" class="me-25">
                                        <img src="{{ $url }}" id="account-upload-img" class="uploadedAvatar rounded me-50" alt="profile image" height="100" width="100">
                                    </a>
                                    <!-- upload and reset button -->
                                    <div class="coipLogo">
                                        <div>
                                            <img  src="https://res.cloudinary.com/dy6vgsgr8/image/upload/v1640792373/Sans_titre_500_x_250_px_hqg4sn.png">
                                        </div>
                                    </div>
                                    <!--/ upload and reset button -->
                                </div>
                                <!--/ header section -->

                                <!-- form -->

                                    <div class="row">
                                        <div class="col-12 col-sm-6 mb-1">
                                            <label class="form-label" for="accountFirstName">nom</label>
                                            <input type="text" class="form-control" id="accountFirstName" name="firstName"  readonly="readonly" value="{{ $nom }}" >
                                        </div>
                                        <div class="col-12 col-sm-6 mb-1">
                                            <label class="form-label" for="accountLastName">prenom</label>
                                            <input type="text" class="form-control" id="accountLastName" name="lastName" readonly="readonly" value="{{ $prenom }}" >
                                        </div>
                                        <div class="col-12 col-sm-6 mb-1">
                                            <label class="form-label" for="accountEmail">Email</label>
                                            <input type="email" class="form-control" id="accountEmail" name="email" readonly="readonly" value="{{ $email }}">
                                        </div>
                                        <div class="col-12 col-sm-6 mb-1">
                                            <label class="form-label" for="accountOrganization">CIN</label>
                                            <input type="text" class="form-control" id="accountOrganization" name="cin" readonly="readonly" value="{{ $cin }}">
                                        </div>
                                        <div class="col-12 col-sm-6 mb-1">
                                            <label class="form-label" for="accountPhoneNumber">Adresse</label>
                                            <input type="text" class="form-control account-number-mask" id="accountPhoneNumber" name="adresse" readonly="readonly" value="{{ $address }}">
                                        </div>
                                        <div class="col-12 col-sm-6 mb-1">
                                            <label class="form-label" for="phone">Phone</label>
                                            <input type="text" class="form-control account-number-mask" id="phone" name="phone" readonly="readonly" value="{{ $phone }}">
                                        </div>
                                        <div class="col-12 col-sm-6 mb-1">
                                            <label class="form-label" for="niveau-scholaire">Niveau Scholaire</label>
                                            <input type="text" class="form-control account-number-mask" id="niveau-scholaire" name="niveau-scholaire" readonly="readonly" value="{{ $nscholaire }}">
                                        </div>

                                        <hr>
                                        <h1> Placement</h1>
                                        <div class="col-12 col-sm-6 mb-1 " id="ori">
                                            <label class="form-label" >Type de placement</label>
                                            <select id="typeplacement" class="form-select" name="typeplacement">
                                                <option value=""></option>
                                                <option value="Formation">Formation</option>
                                                <option value="Stage">Stage</option>
                                                <option value="Emploi">Emploi</option>
                                                <option value="Entrepreneuriat">Entrepreneuriat</option>
                                            </select>
                                        </div>
                                        <hr>

                                        <div class="row" id="Formation" hidden>
                                            <form class="validate-form row" action="{{ route('admin.store.placement' , ['id' =>$id]) }}" method="POST" novalidate="novalidate">
                                                @csrf
                                            <div class="col-12 col-sm-6 mb-1" >
                                                <h3 class="coip-title">Formation</h3>
                                            </div>
                                                <div class="col-12 col-sm-6 mb-1" >
                                                    <input type="text" name="typePlacement" value="Formation" hidden>
                                                </div>
                                                <div class="col-12 col-sm-6 mb-1" >
                                                    <label class="form-label">Objet et contenue de la rencontree</label>
                                                    <input type="text" class="form-control" name="ObjectDerencontre" >
                                                </div>
                                                <div class="col-12 col-sm-6 mb-1" >
                                                    <label class="form-label">Date de l'entretien</label>
                                                    <input type="text" id="fp-date-time" class="form-control flatpickr-date-time flatpickr-input active" placeholder="YYYY-MM-DD HH:MM" readonly="readonly" name="Date de l'entretien">
                                                </div>
                                                <div class="col-12 col-sm-6 mb-1">
                                                    <label class="form-label" >nom du chargé</label>
                                                    <select class="form-select" name="nom du chargé">
                                                        <option value=""></option>
                                                        @foreach(\App\Models\Form::where('center_form',Auth::user()->center)->where('identifiant' , 'charger de comité')->get() as $charge)
                                                            <option value="{{ $charge->fields()->where('data' ,'nomcharger')->first() }} {{$charge->fields()->where('data' ,'prenomcharger')->first()}}"> {{ $charge->fields()->where('type' ,'nomcharger')->first()->data }} {{$charge->fields()->where('type' ,'prenomcharger')->first()->data }} </option>
                                                        @endforeach
                                                    </select>
                                                </div>

                                        <div class="col-12 col-sm-6 mb-1" >

                                                <label class="form-label" >Intitulé de la formation</label>
                                                <input type="text" class="form-control"  name="Intitulé de la formation">


                                        </div>
                                        <div class="col-12 col-sm-6 mb-1">
                                            <label class="form-label" >Nature du diplôme</label>
                                            <select class="form-select"  name="Nature du diplôme">
                                                <option value="Technicien">Technicien</option>
                                                <option value="Technicien Spé">Technicien Spé</option>
                                                <option value="deug">DEUG</option>
                                                <option value="licence">LICENCE</option>
                                                <option value="bachelor">Bachelor</option>
                                                <option value="master">MASTER</option>
                                                <option value="autre">autre</option>
                                            </select>
                                        </div>
                                        <div class="col-12 col-sm-6 mb-1">
                                            <label class="form-label" >Type de formation</label>
                                            <select class="form-select"  name="Type de formation">
                                                <option value="privé">privé</option>
                                                <option value="etatique">etatique</option>
                                            </select>
                                        </div>
                                        <div class="col-12 col-sm-6 mb-1">
                                            <label class="form-label" >Titre obtenu</label>
                                            <select class="form-select"  name="Titre obtenu">
                                                <option value="diplôme">diplôme</option>
                                                <option value="certificat">certificat</option>
                                                <option value="attestation">attestation</option>
                                                <option value="brevet">brevet</option>
                                                <option value="autres">autres</option>
                                            </select>
                                        </div>
                                        <div class="col-12 col-sm-6 mb-1">
                                            <label class="form-label" >Institut / école de formation</label>
                                            <input type="text" class="form-control"  name="Institut / école de formation">
                                        </div>
                                            <div class="col-12 col-sm-6 mb-1">
                                                <label class="form-label" >Type de l’institut</label>
                                                <select class="form-select"  name="Type de l’institut">
                                                    <option value="privé">privé</option>
                                                    <option value="publique">publique</option>
                                                    <option value="association">association</option>
                                                    <option value="autres">autres</option>
                                                </select>
                                            </div>
                                            <div class="col-12 col-sm-6 mb-1">
                                                <label class="form-label" >Lieu de la formation</label>
                                                <select class="form-select"  name="Lieu de la formation">
                                                    <option value="CASA">CASA</option>
                                                    <option value="Hors CASA">Hors CASA</option>
                                                </select>
                                            </div>
                                            <div class="col-12 col-sm-6 mb-1">
                                                <label class="form-label" >Date de début de la formation</label>
                                                <input type="text" id="debut" class="form-control flatpickr-basic flatpickr-input active" name="debut formation suivi" placeholder="YYYY-MM-DD" readonly="readonly">
                                            </div>
                                            <div class="col-12 col-sm-6 mb-1">
                                                <label class="form-label" >Date de fin de la formation</label>
                                                <input type="text" id="fin"  class="form-control flatpickr-basic flatpickr-input active" name="fin formation suivi" placeholder="YYYY-MM-DD" readonly="readonly">
                                            </div>
                                            <div class="col-12 col-sm-6 mb-1" >
                                                <label class="form-label" >Frais d’inscription</label>
                                                <input type="text" class="form-control"  name="frais">
                                            </div>
                                            <div class="col-12 col-sm-6 mb-1" >
                                                <label class="form-label" >Commentaires</label>
                                                <textarea class="form-control" rows="3" placeholder="commentaire" name="commentairesFormation"></textarea>
                                            </div>
                                                <hr>
                                                <div class="col-12 d-flex justify-content-between">
                                                    <button id="storePlacement" type="submit" class="btn btn-gradient-success mt-1 me-1 waves-effect waves-float waves-light">Sauvegarder &nbsp;<i data-feather='save'></i></button>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="row " id="Stage" hidden>
                                            <form class="validate-form row" action="{{ route('admin.store.placement' , ['id' =>$id]) }}" method="POST" novalidate="novalidate">
                                                @csrf
                                            <div class="col-12 col-sm-6 mb-1" >
                                                <h3 class="coip-title">Stage</h3>
                                            </div>
                                            <div class="col-12 col-sm-6 mb-1" >
                                                <input type="text" name="typePlacement" value="Stage" hidden>
                                            </div>
                                                <div class="col-12 col-sm-6 mb-1" >
                                                    <label class="form-label">Objet et contenue de la rencontree</label>
                                                    <input type="text" class="form-control" name="ObjectDerencontre" >
                                                </div>
                                                <div class="col-12 col-sm-6 mb-1" >
                                                    <label class="form-label">Date de l'entretien</label>
                                                    <input type="text" id="fp-date-time" class="form-control flatpickr-date-time flatpickr-input active" placeholder="YYYY-MM-DD HH:MM" readonly="readonly" name="Date de l'entretien">
                                                </div>
                                                <div class="col-12 col-sm-6 mb-1">
                                                    <label class="form-label" >nom du chargé</label>
                                                    <select class="form-select" name="nom du chargé">
                                                        <option value=""></option>
                                                        @foreach(\App\Models\Form::where('center_form',Auth::user()->center)->where('identifiant' , 'charger de comité')->get() as $charge)
                                                            <option value="{{ $charge->fields()->where('data' ,'nomcharger')->first() }} {{$charge->fields()->where('data' ,'prenomcharger')->first()}}"> {{ $charge->fields()->where('type' ,'nomcharger')->first()->data }} {{$charge->fields()->where('type' ,'prenomcharger')->first()->data }} </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            <div class="col-12 col-sm-6 mb-1 " id="ori">
                                                <label class="form-label" >Type de stage</label>
                                                <select class="form-select" name="typestage">
                                                    <option value="alternance">alternance</option>
                                                    <option value="observation">observation</option>
                                                    <option value="pré-embauche">pré-embauche</option>
                                                </select>
                                            </div>
                                            <div class="col-12 col-sm-6 mb-1 " >
                                                <label class="form-label" >Date de début du stage</label>
                                                <input type="text" id="debutStage" class="form-control flatpickr-basic flatpickr-input active" name="debut stage" placeholder="YYYY-MM-DD" readonly="readonly">
                                            </div>
                                            <div class="col-12 col-sm-6 mb-1">
                                                <label class="form-label" >Date de fin du stage</label>
                                                <input type="text" id="finStage"  class="form-control flatpickr-basic flatpickr-input active" name="fin stage" placeholder="YYYY-MM-DD" readonly="readonly">
                                            </div>
                                            <div class="col-12 col-sm-6 mb-1" >
                                                <label class="form-label" >Nom de l’établissement d’accueil</label>
                                                <input type="text" class="form-control"  name="Nom de l’établissement d’accueil">
                                            </div>
                                            <div class="col-12 col-sm-6 mb-1 " >
                                                <label class="form-label" >Type d'établisement</label>
                                                <select class="form-select" name="Type d'établisement">
                                                    <option value="entreprise">entreprise</option>
                                                    <option value="association">association</option>
                                                    <option value="école">école</option>
                                                    <option value="autre">autre</option>
                                                </select>
                                            </div>
                                            <div class="col-12 col-sm-6 mb-1 " >
                                                <label class="form-label" >Secteur d’activités de l’organisation</label>
                                                <select class="form-select" name="TypeActivité">
                                                    <option value="Agroalimentaire">Agroalimentaire</option>
                                                    <option value="Banque / Assurance">Banque / Assurance</option>
                                                    <option value="Bois / Papier / Carton / Imprimerie">Bois / Papier / Carton / Imprimerie</option>
                                                    <option value="BTP / Matériaux de construction">BTP / Matériaux de construction</option>
                                                    <option value="Chimie / Parachimie">Chimie / Parachimie</option>
                                                    <option value="Commerce / Négoce / Distribution.">Commerce / Négoce / Distribution.</option>
                                                    <option value="Édition / Communication / Multimédia">Édition / Communication / Multimédia</option>
                                                    <option value="Électronique / Électricité">Électronique / Électricité</option>
                                                    <option value=" Études et conseils"> Études et conseils</option>
                                                    <option value="Industrie pharmaceutique">Industrie pharmaceutique</option>
                                                    <option value="Informatique / Télécoms">Informatique / Télécoms</option>
                                                    <option value="Machines et équipements / Automobile">Machines et équipements / Automobile</option>
                                                    <option value="Métallurgie / Travail du métal">Métallurgie / Travail du métal</option>
                                                    <option value="Plastique / Caoutchouc">Plastique / Caoutchouc</option>
                                                    <option value="Services aux entreprises">Services aux entreprises</option>
                                                    <option value="Textile / Habillement / Chaussure">Textile / Habillement / Chaussure</option>
                                                    <option value="Transports / Logistique">Transports / Logistique</option>
                                                </select>
                                            </div>
                                            <div class="col-12 col-sm-6 mb-1 " >
                                                <label class="form-label" >Ville ou Province</label>
                                                <select class="form-select" name="villeStage" >
                                                    <option  value="M'diq-Fnideq Prefecture">M'diq-Fnideq Prefecture</option>
                                                    <option  value="Tangier-Assilah Prefecture">Tangier-Assilah Prefecture</option>
                                                    <option  value="Al Hoceïma Province">Al Hoceïma Province</option>
                                                    <option  value="Chefchaouen Province">Chefchaouen Province</option>
                                                    <option  value="Fahs-Anjra Province">Fahs-Anjra Province</option>
                                                    <option value="Larache Province">Larache Province</option>
                                                    <option  value="Ouezzane Province">Ouezzane Province</option>
                                                    <option  value="Tétouan Province">Tétouan Province</option>
                                                    <option value="Oujda-Angad Prefecture">Oujda-Angad</option>
                                                    <option value="Berkane Province">Berkane Province</option>
                                                    <option value="Driouch Province">Driouch Province</option>
                                                    <option value="Figuig Province">Figuig Province</option>
                                                    <option value="Guercif Province">Guercif Province</option>
                                                    <option value="Jerada Province">Jerada Province</option>
                                                    <option value="Nador Province">Nador Province</option>
                                                    <option value="Taourirt Province">Taourirt Province</option>
                                                    <option value="Fès">Fès</option>
                                                    <option value="Meknès Prefecture">Meknès</option>
                                                    <option value="Boulemane Province">Boulemane Province</option>
                                                    <option value="El Hajeb Province">El Hajeb Province</option>
                                                    <option value="Ifrane Province">Ifrane Province</option>
                                                    <option value="Sefrou Province">Sefrou Province</option>
                                                    <option value="Taounate Province">Taounate Province</option>
                                                    <option value="Taza Province">Taza Province</option>
                                                    <option value="Moulay Yacoub Province">Moulay Yacoub Province</option>
                                                    <option value="Rabat">Rabat</option>
                                                    <option  value="Salé">Salé</option>
                                                    <option value="Skhirat-Témara">Skhirat-Témara</option>
                                                    <option value="Kénitra Province">Kénitra Province</option>
                                                    <option value="Khémisset Province">Khémisset Province</option>
                                                    <option value="Sidi Kacem Province">Sidi Kacem Province</option>
                                                    <option value="Sidi Soptionmane Province">Sidi Soptionmane Province</option>
                                                    <option value="Azilal Province">Azilal Province</option>
                                                    <option value="Béni-Mellal Province">Béni-Mellal Province</option>
                                                    <option value="Fquih Ben Salah Province">Fquih Ben Salah Province</option>
                                                    <option value="Khénifra Province">Khénifra Province</option>
                                                    <option value="Khouribga Province">Khouribga Province</option>
                                                    <option value="Anfa">Casablanca Anfa</option>
                                                    <option value="Al Fida - Mers Sultan">Al Fida - Mers Sultan</option>
                                                    <option value="Aïn Sebaâ - Hay Mohammadi">Aïn Sebaâ - Hay Mohammadi</option>
                                                    <option value="Hay Hassani">Hay Hassani</option>
                                                    <option value="Aïn Chock">Aïn Chock</option>
                                                    <option value="Sidi Bernoussi">Sidi Bernoussi</option>
                                                    <option value="Ben M'Sick">Ben M'Sick</option>
                                                    <option value="Moulay Rachid (district)">Moulay Rachid</option>
                                                    <option value="Mohammedia">Mohammedia</option>
                                                    <option value="Ben Slimane Province">Ben Slimane Province</option>
                                                    <option value="Berrechid Province">Berrechid Province</option>
                                                    <option value="El Jadida Province">El Jadida Province</option>
                                                    <option value="Médiouna Province">Médiouna Province</option>
                                                    <option value="Nouaceur Province">Nouaceur Province</option>
                                                    <option value="Settat Province">Settat Province</option>
                                                    <option value="Sidi Bennour Province">Sidi Bennour Province</option>
                                                    <option value="Préfecture de Marrakech">Préfecture de Marrakech</option>
                                                    <option value="Al Haouz Province">Al Haouz Province</option>
                                                    <option value="Chichaoua Province">Chichaoua Province</option>
                                                    <option value="El Kelâat Es-Sraghna Province">El Kelâat Es-Sraghna Province</option>
                                                    <option value="Essaouira Province">Essaouira Province</option>
                                                    <option value="Rehamna Province">Rehamna Province</option>
                                                    <option value="Safi Province">Safi Province</option>
                                                    <option value="Youssoufia Province">Youssoufia Province</option>
                                                    <option value="Errachidia Province">Errachidia Provinceoption</option>
                                                    <option value="Midelt Province">Midelt Provinceoption</option>
                                                    <option value="Ouarzazate Province">Ouarzazate Provinceoption</option>
                                                    <option value="Tinghir Province">Tinghir Provinceoption</option>
                                                    <option value="Zagora Province">Zagora Provinceoption</option>
                                                    <option value="Agadir-Ida Ou Tanane">Agadir-Ida Ou Tanane</option>
                                                    <option value="Inezgane-Aït Melloul">Inezgane-Aït Melloul</option>
                                                    <option value="Chtouka Aït Baha Province">Chtouka Aït Baha Province</option>
                                                    <option value="Taroudant Province">Taroudant Province</option>
                                                    <option value="Tata Province">Tata Province</option>
                                                    <option value="Tiznit Province">Tiznit Province</option>
                                                    <option value="Assa-Zag Province">Assa-Zag Province </option>
                                                    <option value="Sidi Ifni Province">Sidi Ifni Province </option>
                                                    <option value="Guelmim Province">Guelmim Province </option>
                                                    <option value="Tan-Tan Province">Tan-Tan Province </option>
                                                    <option value="Boujdour Province">Boujdour Province</option>
                                                    <option value="Es Semara Province">Es Semara Province</option>
                                                    <option value="Laâyoune Province">Laâyoune Province</option>
                                                    <option value="Tarfaya Province">Tarfaya Province </option>
                                                    <option value="Aousserd Province">Aousserd Province</option>
                                                    <option value="Oued Ed-Dahab Province">Oued Ed-Dahab Province</option>
                                                </select>
                                            </div>
                                            <div class="col-12 col-sm-6 mb-1 " id="contract" >
                                                <label class="form-label" >Contrat</label>
                                                <select class="form-select" id="isContract" name="isContract">
                                                    <option value=""></option>
                                                   <option value="avecContract"> avec</option>
                                                    <option value="sanscontract"> sans</option>
                                                </select>
                                            </div>
                                            <div class="col-12 col-sm-6 mb-1 " id="Rum" >
                                                <label class="form-label" >Rémunération</label>
                                                <select class="form-select" id="isRum" name="isRum">
                                                    <option value=""></option>
                                                    <option value="ouiRum"> oui</option>
                                                    <option value="nonRum"> non</option>
                                                </select>
                                            </div>
                                            <div class="col-12 col-sm-6 mb-1 " >
                                                <label class="form-label" >Commentaire</label>
                                                <textarea class="form-control" rows="3" placeholder="commentaire" name="commentairesStage"></textarea>

                                            </div>
                                              <hr>
                                                <div class="col-12 d-flex justify-content-between">
                                                    <button id="storePlacement" type="submit" class="btn btn-gradient-success mt-1 me-1 waves-effect waves-float waves-light">Sauvegarder &nbsp;<i data-feather='save'></i></button>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="row " id="Emploi" hidden>
                                            <form class="validate-form row" action="{{ route('admin.store.placement' , ['id' =>$id]) }}" method="POST" novalidate="novalidate">
                                                @csrf
                                            <div class="col-12 col-sm-6 mb-1" >
                                                <h3 class="coip-title">Emploi</h3>
                                            </div>
                                            <div class="col-12 col-sm-6 mb-1" >
                                             <input type="text" name="typePlacement" value="Emploi" hidden>
                                            </div>
                                            <div class="col-12 col-sm-6 mb-1" >
                                                <label class="form-label"> type d'emploi</label>
                                                <select class="form-select" name="typeEmp">
                                                    <option value="mi-temps">mi-temps</option>
                                                    <option value="temps plein">temps plein</option>
                                                    <option value="télétravail">télétravail</option>
                                                </select>
                                            </div>
                                            <div class="col-12 col-sm-6 mb-1">
                                                <label class="form-label" >Date de début du travail</label>
                                                <input type="text" data-time="debut" class="form-control flatpickr-basic flatpickr-input active" name="debut formation suivi" placeholder="YYYY-MM-DD" readonly="readonly">
                                            </div>
                                            <div class="col-12 col-sm-6 mb-1">
                                                <label class="form-label" >Date de fin du travail</label>
                                                <input type="text" data-time="fin" class="form-control flatpickr-basic flatpickr-input active" name="debut formation suivi" placeholder="YYYY-MM-DD" readonly="readonly">
                                            </div>
                                            <div class="col-12 col-sm-6 mb-1" >
                                                <label class="form-label">Nom de l’Organisation</label>
                                               <input type="text" class="form-control" name="organisationNom">
                                            </div>
                                            <div class="col-12 col-sm-6 mb-1" >
                                                <label class="form-label">Type de l’organisation</label>
                                                <select class="form-select" name="typeOrganization">
                                                    <option value="privé">privé</option>
                                                    <option value="public">public</option>
                                                    <option value="semi-public">semi-public</option>
                                                </select>
                                            </div>
                                            <div class="col-12 col-sm-6 mb-1 " >
                                                <label class="form-label" >Secteur d’activités de l’organisation</label>
                                                <select class="form-select" name="TypeActivitéEmploi">
                                                    <option value="Agroalimentaire">Agroalimentaire</option>
                                                    <option value="Banque / Assurance">Banque / Assurance</option>
                                                    <option value="Bois / Papier / Carton / Imprimerie">Bois / Papier / Carton / Imprimerie</option>
                                                    <option value="BTP / Matériaux de construction">BTP / Matériaux de construction</option>
                                                    <option value="Chimie / Parachimie">Chimie / Parachimie</option>
                                                    <option value="Commerce / Négoce / Distribution.">Commerce / Négoce / Distribution.</option>
                                                    <option value="Édition / Communication / Multimédia">Édition / Communication / Multimédia</option>
                                                    <option value="Électronique / Électricité">Électronique / Électricité</option>
                                                    <option value=" Études et conseils"> Études et conseils</option>
                                                    <option value="Industrie pharmaceutique">Industrie pharmaceutique</option>
                                                    <option value="Informatique / Télécoms">Informatique / Télécoms</option>
                                                    <option value="Machines et équipements / Automobile">Machines et équipements / Automobile</option>
                                                    <option value="Métallurgie / Travail du métal">Métallurgie / Travail du métal</option>
                                                    <option value="Plastique / Caoutchouc">Plastique / Caoutchouc</option>
                                                    <option value="Services aux entreprises">Services aux entreprises</option>
                                                    <option value="Textile / Habillement / Chaussure">Textile / Habillement / Chaussure</option>
                                                    <option value="Transports / Logistique">Transports / Logistique</option>
                                                </select>
                                            </div>
                                            <div class="col-12 col-sm-6 mb-1 " >
                                                <label class="form-label" >Ville ou Province</label>
                                                <select class="form-select" name="villeEmp" >
                                                    <option  value="M'diq-Fnideq Prefecture">M'diq-Fnideq Prefecture</option>
                                                    <option  value="Tangier-Assilah Prefecture">Tangier-Assilah Prefecture</option>
                                                    <option  value="Al Hoceïma Province">Al Hoceïma Province</option>
                                                    <option  value="Chefchaouen Province">Chefchaouen Province</option>
                                                    <option  value="Fahs-Anjra Province">Fahs-Anjra Province</option>
                                                    <option value="Larache Province">Larache Province</option>
                                                    <option  value="Ouezzane Province">Ouezzane Province</option>
                                                    <option  value="Tétouan Province">Tétouan Province</option>
                                                    <option value="Oujda-Angad Prefecture">Oujda-Angad</option>
                                                    <option value="Berkane Province">Berkane Province</option>
                                                    <option value="Driouch Province">Driouch Province</option>
                                                    <option value="Figuig Province">Figuig Province</option>
                                                    <option value="Guercif Province">Guercif Province</option>
                                                    <option value="Jerada Province">Jerada Province</option>
                                                    <option value="Nador Province">Nador Province</option>
                                                    <option value="Taourirt Province">Taourirt Province</option>
                                                    <option value="Fès">Fès</option>
                                                    <option value="Meknès Prefecture">Meknès</option>
                                                    <option value="Boulemane Province">Boulemane Province</option>
                                                    <option value="El Hajeb Province">El Hajeb Province</option>
                                                    <option value="Ifrane Province">Ifrane Province</option>
                                                    <option value="Sefrou Province">Sefrou Province</option>
                                                    <option value="Taounate Province">Taounate Province</option>
                                                    <option value="Taza Province">Taza Province</option>
                                                    <option value="Moulay Yacoub Province">Moulay Yacoub Province</option>
                                                    <option value="Rabat">Rabat</option>
                                                    <option  value="Salé">Salé</option>
                                                    <option value="Skhirat-Témara">Skhirat-Témara</option>
                                                    <option value="Kénitra Province">Kénitra Province</option>
                                                    <option value="Khémisset Province">Khémisset Province</option>
                                                    <option value="Sidi Kacem Province">Sidi Kacem Province</option>
                                                    <option value="Sidi Soptionmane Province">Sidi Soptionmane Province</option>
                                                    <option value="Azilal Province">Azilal Province</option>
                                                    <option value="Béni-Mellal Province">Béni-Mellal Province</option>
                                                    <option value="Fquih Ben Salah Province">Fquih Ben Salah Province</option>
                                                    <option value="Khénifra Province">Khénifra Province</option>
                                                    <option value="Khouribga Province">Khouribga Province</option>
                                                    <option value="Anfa">Casablanca Anfa</option>
                                                    <option value="Al Fida - Mers Sultan">Al Fida - Mers Sultan</option>
                                                    <option value="Aïn Sebaâ - Hay Mohammadi">Aïn Sebaâ - Hay Mohammadi</option>
                                                    <option value="Hay Hassani">Hay Hassani</option>
                                                    <option value="Aïn Chock">Aïn Chock</option>
                                                    <option value="Sidi Bernoussi">Sidi Bernoussi</option>
                                                    <option value="Ben M'Sick">Ben M'Sick</option>
                                                    <option value="Moulay Rachid (district)">Moulay Rachid</option>
                                                    <option value="Mohammedia">Mohammedia</option>
                                                    <option value="Ben Slimane Province">Ben Slimane Province</option>
                                                    <option value="Berrechid Province">Berrechid Province</option>
                                                    <option value="El Jadida Province">El Jadida Province</option>
                                                    <option value="Médiouna Province">Médiouna Province</option>
                                                    <option value="Nouaceur Province">Nouaceur Province</option>
                                                    <option value="Settat Province">Settat Province</option>
                                                    <option value="Sidi Bennour Province">Sidi Bennour Province</option>
                                                    <option value="Préfecture de Marrakech">Préfecture de Marrakech</option>
                                                    <option value="Al Haouz Province">Al Haouz Province</option>
                                                    <option value="Chichaoua Province">Chichaoua Province</option>
                                                    <option value="El Kelâat Es-Sraghna Province">El Kelâat Es-Sraghna Province</option>
                                                    <option value="Essaouira Province">Essaouira Province</option>
                                                    <option value="Rehamna Province">Rehamna Province</option>
                                                    <option value="Safi Province">Safi Province</option>
                                                    <option value="Youssoufia Province">Youssoufia Province</option>
                                                    <option value="Errachidia Province">Errachidia Provinceoption</option>
                                                    <option value="Midelt Province">Midelt Provinceoption</option>
                                                    <option value="Ouarzazate Province">Ouarzazate Provinceoption</option>
                                                    <option value="Tinghir Province">Tinghir Provinceoption</option>
                                                    <option value="Zagora Province">Zagora Provinceoption</option>
                                                    <option value="Agadir-Ida Ou Tanane">Agadir-Ida Ou Tanane</option>
                                                    <option value="Inezgane-Aït Melloul">Inezgane-Aït Melloul</option>
                                                    <option value="Chtouka Aït Baha Province">Chtouka Aït Baha Province</option>
                                                    <option value="Taroudant Province">Taroudant Province</option>
                                                    <option value="Tata Province">Tata Province</option>
                                                    <option value="Tiznit Province">Tiznit Province</option>
                                                    <option value="Assa-Zag Province">Assa-Zag Province </option>
                                                    <option value="Sidi Ifni Province">Sidi Ifni Province </option>
                                                    <option value="Guelmim Province">Guelmim Province </option>
                                                    <option value="Tan-Tan Province">Tan-Tan Province </option>
                                                    <option value="Boujdour Province">Boujdour Province</option>
                                                    <option value="Es Semara Province">Es Semara Province</option>
                                                    <option value="Laâyoune Province">Laâyoune Province</option>
                                                    <option value="Tarfaya Province">Tarfaya Province </option>
                                                    <option value="Aousserd Province">Aousserd Province</option>
                                                    <option value="Oued Ed-Dahab Province">Oued Ed-Dahab Province</option>
                                                </select>
                                            </div>
                                            <div class="col-12 col-sm-6 mb-1" id="workcontract">
                                                <label class="form-label">contract</label>
                                                <select class="form-select" id="isWorkContract" name="isWorkContract">
                                                    <option value=""></option>
                                                    <option value="oui">Oui</option>
                                                    <option value="non">Non</option>
                                                </select>
                                            </div>
                                            <div class="col-12 col-sm-6 mb-1" id="workSalaire">
                                                <label class="form-label">Salaire mensuel</label>
                                                <select class="form-select"  name="workSalaire">
                                                    <option value="- 1000">< 1000dh</option>
                                                    <option value="1000-2000">1000dh-2000dh</option>
                                                    <option value="2001-3000">2001dh-3000dh</option>
                                                    <option value="3001-4000">3001dh-4000dh</option>
                                                    <option value="+4000"> +4000dh</option>
                                                </select>
                                            </div>
                                            <div class="col-12 col-sm-6 mb-1 " >
                                                <label class="form-label" >Commentaire</label>
                                                <textarea class="form-control" rows="3" placeholder="commentaire" name="commentairesEmploi"></textarea>
                                            </div>
                                            <hr>
                                                <div class="col-12 d-flex justify-content-between">
                                                    <button id="storePlacement" type="submit" class="btn btn-gradient-success mt-1 me-1 waves-effect waves-float waves-light">Sauvegarder &nbsp;<i data-feather='save'></i></button>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="row" id="Entrepreneuriat" hidden>
                                            <div class="col-12 col-sm-6 mb-1">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h4 class="card-title">type de parcoure entrepreneurial</h4>
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="row custom-options-checkable g-1">
                                                            <div class="col-md-6">
                                                                <input class="custom-option-item-check" type="radio" name="customOptionsCheckableRadios" id="customOptionsCheckableRadios1" value="ass">
                                                                <label class="custom-option-item p-1" for="customOptionsCheckableRadios1">
                                            <span class="d-flex justify-content-between flex-wrap mb-50">
                                                <span class="fw-bolder">Avec le Dispositif </span>
                                            </span>
                                                                    <small class="d-block">au sien de l'heure joyeuse</small>
                                                                </label>
                                                            </div>

                                                            <div class="col-md-6">
                                                                <input class="custom-option-item-check" type="radio" name="customOptionsCheckableRadios" id="customOptionsCheckableRadios2" value="ind">
                                                                <label class="custom-option-item p-1" for="customOptionsCheckableRadios2">
                                            <span class="d-flex justify-content-between flex-wrap mb-50">
                                                <span class="fw-bolder">A son compte</span>
                                                <br>
                                            </span>
                                                                    <small class="d-block">parcours individuel</small>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <form class="validate-form row" id="fromSonCompte" action="{{ route('admin.store.placement' , ['id' =>$id]) }}" method="POST" novalidate="novalidate" hidden>
                                                @csrf
                                            <div class="col-12 col-sm-6 mb-1" >
                                                <h3 class="coip-title">Entrepreneuriat A son compte</h3>
                                            </div>
                                            <div class="col-12 col-sm-6 mb-1" >
                                                <input type="text" name="typePlacement" value="EntrepreneuriatAsonCompte" hidden>
                                            </div>
                                                <div class="col-12 col-sm-6 mb-1" >
                                                    <label class="form-label">Objet et contenue de la rencontree</label>
                                                    <input type="text" class="form-control" name="ObjectDerencontre" >
                                                </div>
                                                <div class="col-12 col-sm-6 mb-1" >
                                                    <label class="form-label">Date de l'entretien</label>
                                                    <input type="text" id="fp-date-time" class="form-control flatpickr-date-time flatpickr-input active" placeholder="YYYY-MM-DD HH:MM" readonly="readonly" name="Date de l'entretien">
                                                </div>
                                            <div class="col-12 col-sm-6 mb-1">
                                                <label class="form-label" >Date de début du formation</label>
                                                <input type="text" data-time="debut" class="form-control flatpickr-basic flatpickr-input active" name="debut formation Entrepreneuriat" placeholder="YYYY-MM-DD" readonly="readonly">
                                            </div>
                                            <div class="col-12 col-sm-6 mb-1">
                                                <label class="form-label" >Date de fin du formation</label>
                                                <input type="text" data-time="fin" class="form-control flatpickr-basic flatpickr-input active" name="debut formation Entrepreneuriat" placeholder="YYYY-MM-DD" readonly="readonly">
                                            </div>
                                            <div class="col-12 col-sm-6 mb-1">
                                                <label class="form-label" >Idee du project</label>
                                                <input type="text" class="form-control" name="ideeProject">
                                            </div>
                                            <div class="col-12 col-sm-6 mb-1">
                                                <label class="form-label" >Nom du project</label>
                                                <input type="text" class="form-control" name="nomProject">
                                            </div>
                                            <div class="col-12 col-sm-6 mb-1">
                                                <label class="form-label" >Logo du project</label>
                                                <input type="file" id="logoProject2" class="form-control filepond" name="filepond">
                                                <input id="realLogo" type="text" name="logoProject" hidden>
                                            </div>
                                            <div class="col-12 col-sm-6 mb-1">
                                                <label class="form-label" >status juridique</label>
                                                <select class="form-select" name="juridiquestatus">
                                                 <option value=""></option>
                                                 <option value="SARL">SARL</option>
                                                    <option value="Autoentrepreneur">Autoentrepreneur</option>
                                                </select>
                                            </div>
                                            <div class="col-12 col-sm-6 mb-1 " >
                                                <label class="form-label" >Secteur d’activités </label>
                                                <select class="form-select" name="TypeActivitéEntrprunarit">
                                                    <option value="Agroalimentaire">Agroalimentaire</option>
                                                    <option value="Banque / Assurance">Banque / Assurance</option>
                                                    <option value="Bois / Papier / Carton / Imprimerie">Bois / Papier / Carton / Imprimerie</option>
                                                    <option value="BTP / Matériaux de construction">BTP / Matériaux de construction</option>
                                                    <option value="Chimie / Parachimie">Chimie / Parachimie</option>
                                                    <option value="Commerce / Négoce / Distribution.">Commerce / Négoce / Distribution.</option>
                                                    <option value="Édition / Communication / Multimédia">Édition / Communication / Multimédia</option>
                                                    <option value="Électronique / Électricité">Électronique / Électricité</option>
                                                    <option value=" Études et conseils"> Études et conseils</option>
                                                    <option value="Industrie pharmaceutique">Industrie pharmaceutique</option>
                                                    <option value="Informatique / Télécoms">Informatique / Télécoms</option>
                                                    <option value="Machines et équipements / Automobile">Machines et équipements / Automobile</option>
                                                    <option value="Métallurgie / Travail du métal">Métallurgie / Travail du métal</option>
                                                    <option value="Plastique / Caoutchouc">Plastique / Caoutchouc</option>
                                                    <option value="Services aux entreprises">Services aux entreprises</option>
                                                    <option value="Textile / Habillement / Chaussure">Textile / Habillement / Chaussure</option>
                                                    <option value="Transports / Logistique">Transports / Logistique</option>
                                                </select>
                                            </div>
                                                <div class="col-12 d-flex justify-content-between">
                                                    <button id="storePlacement" type="submit" class="btn btn-gradient-success mt-1 me-1 waves-effect waves-float waves-light">Sauvegarder &nbsp;<i data-feather='save'></i></button>
                                                </div>
                                            </form>
                                            <form class="validate-form row" id="fromHrj" action="{{ route('admin.store.placement' , ['id' =>$id]) }}" method="POST" novalidate="novalidate" hidden>
                                                @csrf
                                                <div class="col-12 col-sm-6 mb-1" >
                                                    <h3 class="coip-title"> Avec le Dispositif Entrepreneuriat</h3>
                                                </div>
                                                <div class="col-12 col-sm-6 mb-1" >
                                                    <input type="text" name="typePlacement" value="EntrepreneuriatAvecDispositif" hidden>
                                                </div>
                                                <div class="col-12 col-sm-6 mb-1" >
                                                    <label class="form-label">Objet et contenue de la rencontree</label>
                                                    <input type="text" class="form-control" name="ObjectDerencontre" >
                                                </div>
                                                <div class="col-12 col-sm-6 mb-1" >
                                                    <label class="form-label">Date de l'entretien</label>
                                                    <input type="text" id="fp-date-time" class="form-control flatpickr-date-time flatpickr-input active" placeholder="YYYY-MM-DD HH:MM" readonly="readonly" name="Date de l'entretien">
                                                </div>
                                                <div class="col-12 col-sm-6 mb-1">
                                                    <label class="form-label" >Date de début du formation</label>
                                                    <input type="text" data-time="debut" class="form-control flatpickr-basic flatpickr-input active" name="debut formation Entrepreneuriat" placeholder="YYYY-MM-DD" readonly="readonly">
                                                </div>
                                                <div class="col-12 col-sm-6 mb-1">
                                                    <label class="form-label" >Date de fin du formation</label>
                                                    <input type="text" data-time="fin" class="form-control flatpickr-basic flatpickr-input active" name="debut formation Entrepreneuriat" placeholder="YYYY-MM-DD" readonly="readonly">
                                                </div>
                                                <div class="col-12 col-sm-6 mb-1">
                                                    <label class="form-label" >Idee du project</label>
                                                    <input type="text" class="form-control" name="ideeProject">
                                                </div>
                                                <div class="col-12 col-sm-6 mb-1">
                                                    <label class="form-label" >Nom du project</label>
                                                    <input type="text" class="form-control" name="nomProject">
                                                </div>
                                                <div class="col-12 col-sm-6 mb-1">
                                                    <label class="form-label" >Logo du project</label>
                                                    <input type="file" id="logoProject" class="form-control filepond" name="filepond">
                                                    <input id="realLogo" type="text" name="logoProject" hidden>
                                                </div>
                                                <div class="col-12 col-sm-6 mb-1">
                                                    <label class="form-label" >nom du chargé</label>
                                                    <select class="form-select" name="nom du chargé">
                                                        <option value=""></option>
                                                        @foreach(\App\Models\Form::where('center_form',Auth::user()->center)->where('identifiant' , 'charger de comité')->get() as $charge)
                                                            <option value="{{ $charge->fields()->where('data' ,'nomcharger')->first() }} {{$charge->fields()->where('data' ,'prenomcharger')->first()}}"> {{ $charge->fields()->where('type' ,'nomcharger')->first()->data }} {{$charge->fields()->where('type' ,'prenomcharger')->first()->data }} </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="col-12 col-sm-6 mb-1 " >
                                                    <label class="form-label" >Secteur d’activités </label>
                                                    <select class="form-select" name="TypeActivitéEntrprunarit">
                                                        <option value="Agroalimentaire">Agroalimentaire</option>
                                                        <option value="Banque / Assurance">Banque / Assurance</option>
                                                        <option value="Bois / Papier / Carton / Imprimerie">Bois / Papier / Carton / Imprimerie</option>
                                                        <option value="BTP / Matériaux de construction">BTP / Matériaux de construction</option>
                                                        <option value="Chimie / Parachimie">Chimie / Parachimie</option>
                                                        <option value="Commerce / Négoce / Distribution.">Commerce / Négoce / Distribution.</option>
                                                        <option value="Édition / Communication / Multimédia">Édition / Communication / Multimédia</option>
                                                        <option value="Électronique / Électricité">Électronique / Électricité</option>
                                                        <option value=" Études et conseils"> Études et conseils</option>
                                                        <option value="Industrie pharmaceutique">Industrie pharmaceutique</option>
                                                        <option value="Informatique / Télécoms">Informatique / Télécoms</option>
                                                        <option value="Machines et équipements / Automobile">Machines et équipements / Automobile</option>
                                                        <option value="Métallurgie / Travail du métal">Métallurgie / Travail du métal</option>
                                                        <option value="Plastique / Caoutchouc">Plastique / Caoutchouc</option>
                                                        <option value="Services aux entreprises">Services aux entreprises</option>
                                                        <option value="Textile / Habillement / Chaussure">Textile / Habillement / Chaussure</option>
                                                        <option value="Transports / Logistique">Transports / Logistique</option>
                                                    </select>
                                                </div>
                                                <div class="col-12 d-flex justify-content-between">
                                                    <button id="storePlacement" type="submit" class="btn btn-gradient-success mt-1 me-1 waves-effect waves-float waves-light">Sauvegarder &nbsp;<i data-feather='save'></i></button>
                                                </div>
                                            </form>

                                        </div>



                                    </div>

                                <!--/ form -->
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="modal" id="addNewCard" tabindex="-1" aria-labelledby="addNewCardTitle"  aria-modal="true" role="dialog">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-transparent">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body px-sm-5 mx-50 pb-5">
                    <h1 class="text-center mb-1" id="addNewCardTitle">Definire un membre de comité </h1>
                    <p class="text-center"> nom et prenom du membre</p>
                    <!-- form -->
                    <form id="addNewCardValidation" class="row gy-1 gx-2 mt-75" action="{{ route('admin.add.member') }}" method="POST" novalidate="novalidate">
                        @csrf
                        <div class="col-12">
                            <label class="form-label" for="modalAddCardNumber">Nom et Prenom</label>
                            <div class="input-group input-group-merge">
                                <input  name="nameDeMembre" class="form-control add-credit-card-mask" type="text" >
                                <input  name="id" class="form-control add-credit-card-mask" type="text" value="{{ $id }}" hidden>

                                <span class="input-group-text cursor-pointer p-25" id="modalAddCard2">
                                                <span class="add-card-type"></span>
                                            </span>
                            </div>
                        </div>
                        <div class="col-12 text-center">
                            <button type="submit" id="modalCommité" class="btn btn-primary me-1 mt-1 waves-effect waves-float waves-light">Definir</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <style>
        .coipLogo{
            margin-right:-49px;
        }
        .coip-title{
            width: fit-content;
            margin-top : 8px;
            margin-left: 8px;
            border-bottom: 1px solid white;
        }
    </style>
    <script>
        const map = new Map()
        function checkDate(){
            if (typeof map.get('debut') !== undefined && map.get('fin') !== undefined){
                const d1 = new Date(map.get('debut'))
                const d2 = new Date(map.get('fin'))
                const diff  = d2 - d1
                if (diff < 0 ){
                    $('#debut').hasClass('is-valid') ? $('#debut').removeClass('is-valid').addClass('is-invalid') : $('#debut').addClass('is-invalid')
                    $('#fin').hasClass('is-valid') ? $('#fin').removeClass('is-valid').addClass('is-invalid') : $('#fin').addClass('is-invalid')

                }else {
                    $('#debut').hasClass('is-invalid') ? $('#debut').removeClass('is-invalid').addClass('is-valid') : $('#debut').addClass('is-valid')
                    $('#fin').hasClass('is-invalid') ? $('#fin').removeClass('is-invalid').addClass('is-valid') : $('#fin').addClass('is-valid')
                }
            }
        }
        $('#debut').on('change' , function (evt) {
            map.set('debut' , evt.target.value)
            checkDate()
        })
        $('#fin').on('change' , function (evt) {
            map.set('fin' , evt.target.value)
            checkDate()
        })
    </script>
    <script>
        $('#isContract').on("change" , function (evt) {
            console.log(evt.target.value)
            if (evt.target.value === 'avecContract'){
                if ($('#typeDeContract').length === 0){
                    $('#contract').after(`<div class="col-12 col-sm-6 mb-1 " id="typeDeContract" >
                                                <label class="form-label" >Type de contrat</label>
                                                <select class="form-select" name="typeContract">
                                                    <option value="contrat de stage"> contrat de stage</option>
                                                    <option value="contrat ANAPEC"> contrat ANAPEC</option>
                                                     <option value="autre"> autre</option>
                                                </select>
                                            </div>`)
                }
            }else {
                if ($('#typeDeContract').length !== 0){
                    $('#typeDeContract').remove()
                }
            }
        })
        $('#isRum').on("change" , function (evt) {
            console.log(evt.target.value)
            if (evt.target.value === 'ouiRum'){
                if ($('#typeDeRum').length === 0){
                    $('#Rum').after(`<div class="col-12 col-sm-6 mb-1 " id="typeDeRum" >
                                                <label class="form-label" >Montant de la rémunération</label>
                                                <select class="form-select" name="montantRum">
                                                    <option value="<500">  < 500dhs</option>
                                                    <option value="500-1000">  500dhs - 1000dhs</option>
                                                     <option value="1001 - 1500"> 1001dhs - 1500dhs</option>
<option value="1501 - 2000"> 1501dhs - 2000dhs</option>
<option value=" +2000">+2000dhs</option>
                                                </select>
                                            </div>`)
                }
            }else {
                if ($('#typeDeRum').length !== 0){
                    $('#typeDeRum').remove()
                }
            }
        })
    </script>
    <script>
        const map1 = new Map()
        function checkDate1(){
            if (typeof map1.get('debutStage') !== undefined && map1.get('finStage') !== undefined){
                const d1 = new Date(map1.get('debutStage'))
                const d2 = new Date(map1.get('finStage'))
                const diff  = d2 - d1
                if (diff < 0 ){
                    $('#debutStage').hasClass('is-valid') ? $('#debutStage').removeClass('is-valid').addClass('is-invalid') : $('#debutStage').addClass('is-invalid')
                    $('#finStage').hasClass('is-valid') ? $('#finStage').removeClass('is-valid').addClass('is-invalid') : $('#finStage').addClass('is-invalid')

                }else {
                    $('#debutStage').hasClass('is-invalid') ? $('#debutStage').removeClass('is-invalid').addClass('is-valid') : $('#debutStage').addClass('is-valid')
                    $('#finStage').hasClass('is-invalid') ? $('#finStage').removeClass('is-invalid').addClass('is-valid') : $('#finStage').addClass('is-valid')
                }
            }
        }
        $('#debutStage').on('change' , function (evt) {
            map1.set('debutStage' , evt.target.value)
            checkDate1()
        })
        $('#finStage').on('change' , function (evt) {
            map1.set('finStage' , evt.target.value)
            checkDate1()
        })
    </script>
    <script>
        $('#isWorkContract').on('change',function (evt) {
            if (evt.target.value === 'oui'){
                if ($('#typeWorkContract').length === 0){
                    $('#workcontract').after(`<div class="col-12 col-sm-6 mb-1" id="typeWorkContract">
                                                <label class="form-label">type de contract de travail</label>
                                                <select class="form-select"  name="typeWorkContract">
                                                    <option value="CDI">CDI</option>
                                                    <option value="CDD">CDD</option>
                                                    <option value="Intérim">Intérim</option>
                                                    <option value="autre">Autre</option>
                                                </select>
                                            </div>`)
                }
            }else{
                if ($('#typeWorkContract').length !== 0){
                    $('#typeWorkContract').remove()
                }
            }
        })
    </script>
    <script>
        const map2 = new Map()

        function checkDuration(elm1 , elm2) {

            if (typeof map2.get('debut') !== undefined && map2.get('fin') !== undefined) {
                console.log('inside the one')
                const d1 = new Date(map2.get('debut'))
                const d2 = new Date(map2.get('fin'))
                const diff = d2 - d1
                if (diff < 0) {
                    elm1.hasClass('is-valid') ? elm1.removeClass('is-valid').addClass('is-invalid') : elm1.addClass('is-invalid')
                    elm2.hasClass('is-valid') ? elm2.removeClass('is-valid').addClass('is-invalid') : elm2.addClass('is-invalid')

                } else {
                    elm1.hasClass('is-invalid') ? elm1.removeClass('is-invalid').addClass('is-valid') : elm1.addClass('is-valid')
                    elm2.hasClass('is-invalid') ? elm2.removeClass('is-invalid').addClass('is-valid') : elm2.addClass('is-valid')
                }
            }
        }
        $('[data-time="debut"]').on("change" , function (evt) {
            console.log('debut' , evt.target.value , $(this).attr('name'))
            map2.set('debut' , evt.target.value)
            checkDuration($('[data-time="debut"]') ,$('[data-time="fin"]') )
        })
        $('[data-time="fin"]').on("change" , function (evt) {
            console.log('fin' , evt.target.value , $(this).attr('name'))
            map2.set('fin' , evt.target.value)
            checkDuration($('[data-time="debut"]') ,$('[data-time="fin"]') )
        })
    </script>
    <script>
        FilePond.registerPlugin(
            FilePondPluginFileValidateType,
            FilePondPluginImageExifOrientation,
            FilePondPluginImagePreview,
            FilePondPluginImageCrop,
            FilePondPluginImageResize,
            FilePondPluginImageTransform,
            FilePondPluginImageEdit
        );

        // Select the file input and use
        // create() to turn it into a pond
        FilePond.create(
            document.querySelector('#logoProject'),
            {
                labelIdle: `Drag & Drop your picture or <span class="filepond--label-action">Browse</span>`,
                server: {
                    process: {
                        url: '{{ route('admin.image.store') }}',
                        method: 'POST',
                        headers: {
                            'Access-Control-Allow-Origin':'{{ route('admin.image.store') }} | *',
                            'X-CSRF-TOKEN': '{{ csrf_token() }}' ,
                            'Methods':'POST'
                        }
                    }
                    ,
                    revert: {
                        url: '{{ route('admin.image.delete') }}',
                        method: 'POST',
                        headers: {
                            'Access-Control-Allow-Origin':'{{ route('admin.image.delete') }} | *',
                            'X-CSRF-TOKEN':'{{ csrf_token() }}',
                            '_method': 'DELETE'
                        }
                    }
                },
                onaddfile : (error , file)=>{
                    if (error){
                        console.error(error)
                    }else {
                        console.dir(file)
                        console.log(file.filename)

                    }
                },
                onremovefile : (error , file)=> {
                    if (error){
                        console.error(error)
                    }else {
                        console.log('the file will be '+file.filename)
                        console.log(file.fileExtention)

                    }
                } ,
                onprocessfile : (error , file) => {
                    if (error){
                        console.log(error)
                    }else {
                        console.log('*************************')
                        console.dir(JSON.parse(file.serverId)['result'])
                        const urlPhoto = "https://aobcrhrn2.eu-central-1.linodeobjects.com/"+JSON.parse(file.serverId)['result']
                        console.log(urlPhoto)
                        $('[name="logoProject"]').val(urlPhoto)
                        console.log('*************************')

                    }
                }
            }
        );
        FilePond.create(
            document.querySelector('#logoProject2'),
            {
                labelIdle: `Drag & Drop your picture or <span class="filepond--label-action">Browse</span>`,
                server: {
                    process: {
                        url: '{{ route('admin.image.store') }}',
                        method: 'POST',
                        headers: {
                            'Access-Control-Allow-Origin':'{{ route('admin.image.store') }} | *',
                            'X-CSRF-TOKEN': '{{ csrf_token() }}' ,
                            'Methods':'POST'
                        }
                    }
                    ,
                    revert: {
                        url: '{{ route('admin.image.delete') }}',
                        method: 'POST',
                        headers: {
                            'Access-Control-Allow-Origin':'{{ route('admin.image.delete') }} | *',
                            'X-CSRF-TOKEN':'{{ csrf_token() }}',
                            '_method': 'DELETE'
                        }
                    }
                },
                onaddfile : (error , file)=>{
                    if (error){
                        console.error(error)
                    }else {
                        console.dir(file)
                        console.log(file.filename)

                    }
                },
                onremovefile : (error , file)=> {
                    if (error){
                        console.error(error)
                    }else {
                        console.log('the file will be '+file.filename)
                        console.log(file.fileExtention)

                    }
                } ,
                onprocessfile : (error , file) => {
                    if (error){
                        console.log(error)
                    }else {
                        console.log('*************************')
                        console.dir(JSON.parse(file.serverId)['result'])
                        const urlPhoto = "https://aobcrhrn2.eu-central-1.linodeobjects.com/"+JSON.parse(file.serverId)['result']
                        console.log(urlPhoto)
                        $('[name="logoProject"]').val(urlPhoto)
                        console.log('*************************')

                    }
                }
            }
        );
    </script>
    <script>
        //handling blocks
        const ids = ['Formation' , 'Stage' , 'Emploi' , 'Entrepreneuriat']
        const track = new Map()
        $('#typeplacement').on('change' , function (evt) {
            console.log(evt.target.value)
            const id = "#"+evt.target.value
            if (typeof track.get('id') === undefined || track.get('id') === null){
                track.set('id' , id)
                $(id).attr('hidden' , false)
            }else {
                const oldId = track.get('id')
                $(oldId).attr('hidden' , true)
                $(id).attr('hidden' , false)
                track.set('id' , id)
            }
            if (typeof evt.target.value === undefined || evt.target.value === null || evt.target.value === ''){
                if (typeof track.get('id') !== undefined || track.get('id') !== null){
                    const oldId = track.get('id')
                    $(oldId).attr('hidden' , true)
                }
            }
            console.log('state of hidden ', $(id).attr('hidden'))
        })
       $('#customOptionsCheckableRadios1').on('change', function (evt) {
           console.log(evt.target.value)
           if ($('#fromHrj').attr('hidden')){
               $('#fromHrj').attr('hidden' , false)
               if (!$('#fromSonCompte').attr('hidden')){
                   $('#fromSonCompte').attr('hidden' , true)
               }
           }
       })
        $('#customOptionsCheckableRadios2').on('change', function (evt) {
            console.log(evt.target.value)
            if ($('#fromSonCompte').attr('hidden')){
                $('#fromSonCompte').attr('hidden' , false)
                if (!$('#fromHrj').attr('hidden')){
                    $('#fromHrj').attr('hidden' , true)
                }
            }
        })
    </script>
    <script>
        $('#storePlacement').on('click' , function (evt) {
            evt.preventDefault()
            $(this).closest('form').submit()
        })
    </script>
</x-app-layout>
