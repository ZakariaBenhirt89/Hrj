<x-app-layout>
    <!-- BEGIN: Content-->
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper container-xxl p-0">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-start mb-0"> Formulaire D'acceuil</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Home</a>
                                    </li>
                                    <li class="breadcrumb-item active"> Wizard D'acceuil
                                    </li>

                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content-header-right text-md-end col-md-3 col-12 d-md-block d-none">
                    <div class="mb-1 breadcrumb-right">
                        <div class="dropdown">
                            <button class="btn-icon btn btn-primary btn-round btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i data-feather="grid"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">

                <!-- Modern Horizontal Wizard -->
                <section class="modern-horizontal-wizard">
                    <div class="bs-stepper wizard-modern modern-wizard-example">
                        <form id="formAcc" action="{{ route('admin.acc.create') }}" method="POST">
                            @csrf
                            <div class="bs-stepper-header">
                                <div class="step" data-target="#account-details-modern" role="tab" id="account-details-modern-trigger" disabled="true">
                                    <button type="button" class="step-trigger" onclick="function f(e) {
                                  return true;
                                }">
                                    <span class="bs-stepper-box">
                                                                                <i data-feather="user" class="font-medium-3"></i>
                                    </span>
                                        <span class="bs-stepper-label">
                                        <span class="bs-stepper-title">Informations <br>personnelles</span>
                                            <hr class="hr">
                                            <span class="bs-stepper-title title-bs">معلومات شخصية</span>
                                    </span>
                                    </button>
                                </div>
                                <div class="line">
                                    <i data-feather="chevron-right" class="font-medium-2"></i>
                                </div>
                                <div class="step" data-target="#personal-info-modern" role="tab" id="personal-info-modern-trigger">
                                    <button type="button" class="step-trigger" onclick="function f(e) {
                                  e.preventDefault()
                                }">
                                    <span class="bs-stepper-box">
                                        <i data-feather="file-text" class="font-medium-3"></i>
                                    </span>
                                        <span class="bs-stepper-label">
                                        <span class="bs-stepper-title">Informations <br>générales</span>
                                            <hr class="hr">
                                            <span class="bs-stepper-title title-bs">معلومات عامة</span>
                                    </span>
                                    </button>
                                </div>
                                <div class="line">
                                    <i data-feather="chevron-right" class="font-medium-2"></i>
                                </div>
                                <div class="step" data-target="#address-step-modern" role="tab" id="address-step-modern-trigger">
                                    <button type="button" class="step-trigger" onclick="function f(e) {
                                  e.preventDefault()
                                }">
                                    <span class="bs-stepper-box">
                                        <i data-feather='activity'></i>
                                    </span>
                                            <span class="bs-stepper-label">
                                            <span class="bs-stepper-title">État <br> physique </span>
                                                <hr class="hr">
                                            <span class="bs-stepper-title title-bs">حالة جسدية</span>
                                    </span>
                                    </button>
                                </div>
                                <div class="line">
                                    <i data-feather="chevron-right" class="font-medium-2"></i>
                                </div>
                                <div class="step" data-target="#social-links-modern" role="tab" id="social-links-modern-trigger">
                                    <button type="button" class="step-trigger" onclick="function f(e) {
                                  e.preventDefault()
                                }">
                                    <span class="bs-stepper-box">
                                        <i data-feather='briefcase'></i>
                                    </span>
                                        <span class="bs-stepper-label">
                                        <span class="bs-stepper-title">Informations <br> professionnelles</span>
                                            <hr class="hr">
                                        <span class="bs-stepper-title title-bs">معلومات مهنية</span>
                                    </span>
                                    </button>
                                </div>
                                <div class="line">
                                    <i data-feather="chevron-right" class="font-medium-2"></i>
                                </div>
                                <div class="step" data-target="#last" role="tab" id="last-modern-trigger">
                                    <button type="button" class="step-trigger" onclick="function f(e) {
                                  e.preventDefault()
                                }">
                                    <span class="bs-stepper-box">
                                        <i data-feather='check'></i>
                                    </span>
                                        <span class="bs-stepper-label">
                                        <span class="bs-stepper-title">Acceptabilité</span>
                                            <hr class="hr">
                                         <span class="bs-stepper-title title-bs">قبول</span>
                                    </span>
                                    </button>
                                </div>
                            </div>
                            <div class="bs-stepper-content">
                                <div id="account-details-modern" class="content" role="tabpanel" aria-labelledby="account-details-modern-trigger">
                                    <div class="content-header">
                                        <h5 class="mb-0">Référence dossier : <span class="refNum"></span></h5>
                                    </div>
                                    <img class="comp-logo" src="https://res.cloudinary.com/dy6vgsgr8/image/upload/v1639397584/Group_1_sfcyrg.svg" height="150" width="250" alt="comp-logo">
                                    <div class="container1">
                                        <div class="row">
                                            <div class="mb-1 col-md-6">
                                                <label class="form-label" for="photo">Photo</label>
                                                <label class="form-label form-lable-rtl" for="photo" style="margin-left: 116px;">صورة</label>
                                                <input type="file"
                                                       class="filepond"
                                                       name="filepond"
                                                       accept="image/png, image/jpeg, image/gif"/>
                                                <input type="text" name="photo" hidden="true">
                                                <input type="text" name="ref" hidden="true">
                                            </div>
                                            <div class="mb-1 col-md-6">
                                                <label class="form-label" for="name">Nom</label>
                                                <label class="form-label-rtl" for="name"  >اﻹسم</label>
                                                <input type="text" id="modern-username" name="nom" class="form-control stepOne" placeholder="nom" required pattern="^[A-Za-zأ-ي]+$" />
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="mb-1 col-md-6">
                                                <label class="form-label-rtl"  >النسب</label>
                                                <label class="form-label" for="prenom">Prénom</label>
                                                <input type="text" id="prenom" name="prenom" class="form-control stepOne" placeholder="prénom" aria-label="prenom" required pattern="^[A-Za-zأ-ي]+$"/>

                                            </div>
                                            <div class="mb-1 form-password-toggle col-md-6">
                                                <label class="form-label-rtl"  >عنوان</label>
                                                <label class="form-label" for="adress">Adresse</label>
                                                <input type="text" id="adresse" name="adresse" class="form-control stepOne" placeholder="adresse" required />
                                            </div>
                                            <div class="mb-1 col-md-6">
                                                <label class="form-label-rtl"  >نوع</label>
                                                <label class="form-label" for="genre">Genre</label>
                                                <select class="form-select stepOne" name="sex" id="sex">
                                                    <option></option>
                                                    <option value="homme">homme</option>
                                                    <option value="femme">femme</option>
                                                </select>
                                            </div>
                                            <div class="mb-1 col-md-6">
                                                <label class="form-label-rtl"  >جنسية</label>
                                                <label class="form-label" for="nationaité">Nationalité</label>
                                                <select class="form-select stepOne" name="nation" id="nationalité" required >
                                                    <option value="Maroc">Maroc</option>  <option value="Afghanistan">Afghanistan</option><option value="Åland Islands">Åland Islands</option><option value="Albanie">Albanie</option><option value="Algérie">Algérie</option><option value="Samoa">Samoa</option><option value="Andorre">Andorre</option><option value="Angola">Angola</option><option value="Anguilla">Anguilla</option><option value="Antarctique">Antarctique</option><option value="Antigua et Barbuda">Antigua et Barbuda</option><option value="Argentine">Argentine</option><option value="Arménie">Arménie</option><option value="Aruba">Aruba</option><option value="Australie">Australie</option><option value="Autriche">Autriche</option><option value="Azerbaïdjan">Azerbaïdjan</option><option value="Bahamas">Bahamas</option><option value="Bahrain">Bahrain</option><option value="Bangladesh">Bangladesh</option><option value="Barbade">Barbade</option><option value="Belarus">Belarus</option><option value="Belgique">Belgique</option><option value="Belize">Belize</option><option value="Bénin">Bénin</option><option value="Bermuda">Bermuda</option><option value="Bhutan">Bhutan</option><option value="Bolivie">Bolivie</option><option value="Bonaire, Saint-Eustache et Saba">Bonaire, Saint-Eustache et Saba</option><option value="Bosnie-Herzégovine">Bosnie-Herzégovine</option><option value="Botswana">Botswana</option><option value="Île Bouvet">Île Bouvet</option><option value="Brésil">Brésil</option><option value="Territoire britannique de l'océan Indien">Territoire britannique de l'océan Indien</option><option value="Brunéi Darussalam">Brunéi Darussalam</option><option value="Bulgarie">Bulgarie</option><option value="Burkina Faso">Burkina Faso</option><option value="Burundi">Burundi</option><option value="Cambodge">Cambodge</option><option value="Cameroun">Cameroun</option><option value="Canada">Canada</option><option value="Cap-Vert">Cap-Vert</option><option value="Îles Caïmans">Îles Caïmans</option><option value="République centrafricaine">République centrafricaine</option><option value="Tchad">Tchad</option><option value="Chili">Chili</option><option value="Chine">Chine</option><option value="Île Christmas">Île Christmas</option><option value="Îles Cocos (Keeling)">Îles Cocos (Keeling)</option><option value="Colombie">Colombie</option><option value="Comores">Comores</option><option value="Congo">Congo</option><option value="Congo, République démocratique du Congo">Congo, République démocratique du Congo</option><option value="Îles Cook">Îles Cook</option><option value="Costa Rica">Costa Rica</option><option value="Côte d'Ivoire">Côte d'Ivoire</option><option value="Croatie">Croatie</option><option value="Cuba">Cuba</option><option value="Curaçao">Curaçao</option><option value="Chypre">Chypre</option><option value="République tchèque">République tchèque</option><option value="Danemark">Danemark</option><option value="Djibouti">Djibouti</option><option value="Dominique">Dominique</option><option value="République dominicaine">République dominicaine</option><option value="Équateur">Équateur</option><option value="Égypte">Égypte</option><option value="El Salvador">El Salvador</option><option value="Guinée équatoriale">Guinée équatoriale</option><option value="Érythrée">Érythrée</option><option value="Estonie">Estonie</option><option value="Éthiopie">Éthiopie</option><option value="Îles Falkland (Malvinas)">Îles Falkland (Malvinas)</option><option value="Îles Féroé">Îles Féroé</option><option value="Fidji">Fidji</option><option value="Finlande">Finlande</option><option value="France">France</option><option value="Guyane française">Guyane française</option><option value="Polynésie française">Polynésie française</option><option value="Terres australes françaises">Terres australes françaises</option><option value="Gabon">Gabon</option><option value="Gambie">Gambie</option><option value="Géorgie">Géorgie</option><option value="Allemagne">Allemagne</option><option value="Ghana">Ghana</option><option value="Gibraltar">Gibraltar</option><option value="Grèce">Grèce</option><option value="Groenland">Groenland</option><option value="Grenade">Grenade</option><option value="Guadeloupe">Guadeloupe</option><option value="Guam">Guam</option><option value="Guatemala">Guatemala</option><option value="Guernesey">Guernesey</option><option value="Guinée">Guinée</option><option value="Guinée-Bissau">Guinée-Bissau</option><option value="Guyane">Guyane</option><option value="Haïti">Haïti</option><option value="Île Heard et îles McDonald">Île Heard et îles McDonald</option><option value="Saint-Siège (État de la Cité du Vatican)">Saint-Siège (État de la Cité du Vatican)</option><option value="Honduras">Honduras</option><option value="Hong Kong">Hong Kong</option><option value="Hongrie">Hongrie</option><option value="Islande">Islande</option><option value="Inde">Inde</option><option value="Indonésie">Indonésie</option><option value="Iran, République islamique d Iran'">Iran, République islamique d Iran'</option><option value="Irak">Irak</option><option value="Irlande">Irlande</option><option value="Île de Man">Île de Man</option><option value="Israël">Israël</option><option value="Italie">Italie</option><option value="Jamaïque">Jamaïque</option><option value="Japon">Japon</option><option value="Jersey">Jersey</option><option value="Jordanie">Jordanie</option><option value="Kazakhstan">Kazakhstan</option><option value="Kenya">Kenya</option><option value="Kiribati">Kiribati</option><option value="Corée, République populaire démocratique de Corée">Corée, République populaire démocratique de Corée</option><option value="Corée, République de Corée">Corée, République de Corée</option><option value="Koweït">Koweït</option><option value="Kirghizistan">Kirghizistan</option><option value="République démocratique populaire lao">République démocratique populaire lao</option><option value="Lettonie">Lettonie</option><option value="Liban">Liban</option><option value="Lesotho">Lesotho</option><option value="Liberia">Liberia</option><option value="Libye">Libye</option><option value="Liechtenstein">Liechtenstein</option><option value="Lituanie">Lituanie</option><option value="Luxembourg">Luxembourg</option><option value="Macao">Macao</option><option value="Macédoine, ancienne République de Yougoslavie">Macédoine, ancienne République de Yougoslavie</option><option value="Madagascar">Madagascar</option><option value="Malawi">Malawi</option><option value="Malaisie">Malaisie</option><option value="Maldives">Maldives</option><option value="Mali">Mali</option><option value="Malte">Malte</option><option value="Îles Marshall">Îles Marshall</option><option value="Martinique">Martinique</option><option value="Mauritanie">Mauritanie</option><option value="Maurice">Maurice</option><option value="Mayotte">Mayotte</option><option value="Mexique">Mexique</option><option value="Micronésie, États fédérés de Micronésie">Micronésie, États fédérés de Micronésie</option><option value="Moldavie, République de Moldavie">Moldavie, République de Moldavie</option><option value="Monaco">Monaco</option><option value="Mongolie">Mongolie</option><option value="Monténégro">Monténégro</option><option value="Montserrat">Montserrat</option><option value="Mozambique">Mozambique</option><option value="Myanmar">Myanmar</option><option value="Namibie">Namibie</option><option value="Nauru">Nauru</option><option value="Népal">Népal</option><option value="Pays-Bas">Pays-Bas</option><option value="Nouvelle-Calédonie">Nouvelle-Calédonie</option><option value="Nouvelle-Zélande">Nouvelle-Zélande</option><option value="Nicaragua">Nicaragua</option><option value="Niger">Niger</option><option value="Nigéria">Nigéria</option><option value="Niue">Niue</option><option value="Île Norfolk">Île Norfolk</option><option value="Îles Mariannes du Nord">Îles Mariannes du Nord</option><option value="Norvège">Norvège</option><option value="Oman">Oman</option><option value="Pakistan">Pakistan</option><option value="Palau">Palau</option><option value="Territoire palestinien occupé">Territoire palestinien occupé</option><option value="Panama">Panama</option><option value="Papouasie-Nouvelle-Guinée">Papouasie-Nouvelle-Guinée</option><option value="Paraguay">Paraguay</option><option value="Pérou">Pérou</option><option value="Philippines">Philippines</option><option value="Pitcairn">Pitcairn</option><option value="Pologne">Pologne</option><option value="Portugal">Portugal</option><option value="Porto Rico">Porto Rico</option><option value="Qatar">Qatar</option><option value="Réunion">Réunion</option><option value="Roumanie">Roumanie</option><option value="Fédération de Russie">Fédération de Russie</option><option value="Rwanda">Rwanda</option><option value="Saint Barthélemy">Saint Barthélemy</option><option value="Sainte-Hélène, Ascension et Tristan da Cunha">Sainte-Hélène, Ascension et Tristan da Cunha</option><option value="Saint-Kitts-et-Nevis">Saint-Kitts-et-Nevis</option><option value="Sainte-Lucie">Sainte-Lucie</option><option value="Saint-Martin (partie française)">Saint-Martin (partie française)</option><option value="Saint-Pierre-et-Miquelon">Saint-Pierre-et-Miquelon</option><option value="Saint-Vincent-et-les Grenadines">Saint-Vincent-et-les Grenadines</option><option value="Samoa">Samoa</option><option value="Saint-Marin">Saint-Marin</option><option value="Sao Tomé-et-Principe">Sao Tomé-et-Principe</option><option value="Arabie saoudite">Arabie saoudite</option><option value="Sénégal">Sénégal</option><option value="Serbie">Serbie</option><option value="Seychelles">Seychelles</option><option value="Sierra Leone">Sierra Leone</option><option value="Singapour">Singapour</option><option value="Sint Maarten (partie néerlandaise)">Sint Maarten (partie néerlandaise)</option><option value="Slovaquie">Slovaquie</option><option value="Slovénie">Slovénie</option><option value="Îles Salomon">Îles Salomon</option><option value="Somalie">Somalie</option><option value="Afrique du Sud">Afrique du Sud</option><option value="Géorgie du Sud et îles Sandwich du Sud">Géorgie du Sud et îles Sandwich du Sud</option><option value="Soudan du Sud">Soudan du Sud</option><option value="Espagne">Espagne</option><option value="Sri Lanka">Sri Lanka</option><option value="Soudan">Soudan</option><option value="Suriname">Suriname</option><option value="Svalbard et Jan Mayen">Svalbard et Jan Mayen</option><option value="Swaziland">Swaziland</option><option value="Suède">Suède</option><option value="Suisse">Suisse</option><option value="République arabe syrienne">République arabe syrienne</option><option value="Taïwan, province de Chine">Taïwan, province de Chine</option><option value="Tadjikistan">Tadjikistan</option><option value="Tanzanie, République-Unie de Tanzanie">Tanzanie, République-Unie de Tanzanie</option><option value="Thaïlande">Thaïlande</option><option value="Timor-Leste">Timor-Leste</option><option value="Togo">Togo</option><option value="Tokelau">Tokelau</option><option value="Tonga">Tonga</option><option value="Trinité-et-Tobago">Trinité-et-Tobago</option><option value="Tunisie">Tunisie</option><option value="Turquie">Turquie</option><option value="Turkménistan">Turkménistan</option><option value="Îles Turques et Caïques">Îles Turques et Caïques</option><option value="Tuvalu">Tuvalu</option><option value="Ouganda">Ouganda</option><option value="Ukraine">Ukraine</option><option value="Émirats arabes unis">Émirats arabes unis</option><option value="Royaume-Uni">Royaume-Uni</option><option value="États-Unis">États-Unis</option><option value="Îles mineures éloignées des États-Unis">Îles mineures éloignées des États-Unis</option><option value="Uruguay">Uruguay</option><option value="Ouzbékistan">Ouzbékistan</option><option value="Vanuatu">Vanuatu</option><option value="Venezuela, République bolivarienne">Venezuela, République bolivarienne</option><option value="Viet Nam">Viet Nam</option><option value="Îles Vierges britanniques">Îles Vierges britanniques</option><option value="Îles Vierges américaines.">Îles Vierges américaines.</option><option value="Wallis et Futuna">Wallis et Futuna</option><option value="Sahara occidental">Sahara occidental</option><option value="Yémen">Yémen</option><option value="Zambie">Zambie</option><option value="Zimbabwe">Zimbabwe</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row brd">
                                            <div class="mb-1 col-md-6">
                                                <label class="form-label-rtl"  >مكان الإزدياد</label>
                                                <label class="form-label" for="prenom">Lieu de naissance</label>
                                                <input type="text" id="lncss" name="lieu-naissance" class="form-control stepOne" placeholder="lieu de naissance" aria-label="prenom" required/>
                                            </div>
                                            <div class="col-md-6 mb-1">
                                                <label class="form-label-rtl"  >تاريخ الإزدياد</label>
                                                <label class="form-label" for="fp-default">Date de naissance</label>
                                                <input type="text" id="data-de-naissance" name="date-naisance" class="form-control flatpickr-basic flatpickr-input stepOne" placeholder="YYYY-MM-DD" readonly="readonly" required>
                                            </div>
                                            <div class="mb-1 col-md-6">
                                                <label class="form-label-rtl"  >السن</label>
                                                <label class="form-label" for="age">age</label>
                                                <input type="text" class="form-control " id="age" name="age" readonly="readonly" >
                                            </div>
                                            <div class="mb-1 col-md-6">
                                                <label class="form-label-rtl"  >رقم البطاقة وطنية</label>
                                                <label class="form-label" for="cin">N° de CIN</label>
                                                <input type="text" id="cin" name="cin" class="form-control stepOne" placeholder="CIN" required pattern="[a-zA-Z]+[0-9]+" />

                                            </div>
                                            <div class="mb-1 col-md-6">
                                                <label class="form-label-rtl"  >رقم الهاتف</label>
                                                <label class="form-label" for="gsm">Numéro de telephone</label>
                                                <input type="text" id="gsm" name="phone" class="form-control stepOne" placeholder="+212.........." pattern="^(06)([0-9]{8})$"/>
                                            </div>
                                            <div class="mb-1 col-md-6">
                                                <label class="form-label-rtl" >بريد اﻹلكتروني</label>
                                                <label class="form-label" for="gsm">Email Personnel</label>
                                                <input type="text" id="email" name="email" class="form-control stepOne" placeholder="example@email.com" pattern="^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$"/>
                                            </div>
                                            <div class="mb-1 col-md-6">
                                                <label class="form-label-rtl" >كيف تم التعرف على خدماتنا</label>
                                                <label class="form-label" for="conaissance">moyens de prise de connaissance </label>
                                                <select class="form-select stepOne" name="conaissance" id="conaissance">
                                                    <option></option>
                                                    <option value="Bouche à oreille">Bouche à oreille - شخص ما أخبرك</option>
                                                    <option value="internet">internet - اﻷنترنت</option>
                                                    <option value="resaux-media">resaux sociaux - مواقع التواصل</option>
                                                    <option value="mobilisation">mobilisation - التعبئة</option>
                                                    <option value="partenaire">partenaire - شركاء</option>
                                                    <option value="embcoip">embassadeures coip - سفراء كواب</option>
                                                    <option value="autre">autre - أخرى</option>
                                                </select>
                                            </div>
                                            <div class="mb-1 col-md-6">
                                                <label class="form-label" for="exampleFormControlTextarea1">Remarques</label>
                                                <label class="form-label form-label-rtl" for="exampleFormControlTextarea1">ملاحظات</label>
                                                <textarea class="form-control stepOne" id="remarque" rows="3" placeholder="Textarea" name="remarque" spellcheck="true"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <div >

                                        </div>
                                        <button class="btn btn-primary next next1" disabled>
                                            <span class="align-middle d-sm-inline-block d-none">Next</span>
                                            <i data-feather="arrow-right" class="align-middle ms-sm-25 ms-0"></i>
                                        </button>
                                    </div>
                                </div>
                                <div id="personal-info-modern" class="content" role="tabpanel" aria-labelledby="personal-info-modern-trigger">
                                    <div class="content-header">
                                        <h5 class="mb-0">Situation socio-économique du foyer</h5>
                                        <hr>
                                    </div>
                                    <div class="row">

                                    </div>
                                    <div class="row parentsStat">
                                        <div class="mb-1 col-md-6 situationFam">
                                            <label class="form-label" for="modern-country">Situation sociale</label>
                                            <label class="form-label form-label-rtl" for="modern-country">حالة اﻹجتماعية</label>
                                            <select class="select2 form-select w-100" id="" name="SituationFam">
                                                <option label=" ">choisire</option>
                                                <option value="Ressources propres">Ressources propres - مصادر داتية </option>
                                                <option value="Pris en charge par les parents ">Pris en charge par les parents - الأسرة</option>
                                                <option value="Autre">Autre - أخرى</option>
                                            </select>
                                        </div>
                                        <div class="mb-1 col-md-6 ">
                                            <label class="form-label form-label-par" for="modern-language">Père</label>
                                            <label class="form-label form-label-rtl" for="dad">الأب</label>
                                            <select class="form-select parents" id="dad" name="dad" >
                                                <option></option>
                                                <option value="vivant">vivant</option>
                                                <option value="décédé">décédé</option>
                                            </select>
                                        </div>
                                        <div class="mb-1 col-md-6 ">
                                            <label class="form-label form-label-par" for="modern-language">Mère</label>
                                            <label class="form-label form-label-rtl" for="mom">الأم</label>
                                            <select class="form-select parents" id="mom" name="mom" >
                                                <option></option>
                                                <option value="vivant">vivant</option>
                                                <option value="décédé">décédé</option>
                                            </select>
                                        </div>

                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <button class="btn btn-primary prev">
                                            <i data-feather="arrow-left" class="align-middle me-sm-25 me-0"></i>
                                            <span class="align-middle d-sm-inline-block d-none">Previous</span>
                                        </button>
                                        <button class="btn btn-primary next " >
                                            <span class="align-middle d-sm-inline-block d-none">Next</span>
                                            <i data-feather="arrow-right" class="align-middle ms-sm-25 ms-0"></i>
                                        </button>
                                    </div>
                                </div>
                                <div id="address-step-modern" class="content" role="tabpanel" aria-labelledby="address-step-modern-trigger">
                                    <div class="content-header">
                                        <h5 class="mb-0">État physique de la personne</h5>
                                        <hr>
                                    </div>
                                    <div class="row">
                                        <h5>La personne souffre-t-elle d’un handicap quelconque ?</h5>
                                        <div class="mb-1 col-md-6" style="margin-top: 12px">
                                           <span> <label class="form-label" for="yesOne"> oui</label>
                                            <input class="form-check-input" type="radio" name="handicape" id="yesOne" value="yes" >
                                           </span>
                                            <span style="margin-left: 90px">
                                                <label class="form-label" for="noOne"> non</label>
                                                <input class="form-check-input" type="radio" name="handicape" id="noOne" value="no" >
                                            </span>
                                        </div>
                                    </div>
                                    <div class="row handicap" hidden style="margin-bottom: 15px ;margin-top: 15px;">
                                        <div class=" d-flex">
                                            <div class="container">
                                                <h5> Type de handicap </h5>
                                                <hr>
                                                <div style="margin-top: 15px;">
                                                    <div class="radioInline">

                                                        <input class="form-check-input" type="radio" name="handicapType"  value="Physique" >
                                                        <label class="form-label" for="handicapType">Physique</label>
                                                    </div>
                                                    <div class="radioInline">
                                                        <input class="form-check-input" type="radio" name="handicapType"  value="Sensoriel" >
                                                        <label class="form-label" for="handicapType">Sensoriel</label>

                                                    </div>
                                                    <div class="radioInline">
                                                        <input class="form-check-input" type="radio" name="handicapType"  value="Mental" >
                                                        <label class="form-label" for="handicapType">Mental</label>

                                                    </div>
                                                    <div class="radioInline">
                                                        <input class="form-check-input" type="radio" name="handicapType"  value="Intellectuel" >
                                                        <label class="form-label" for="handicapType">Intellectuel</label>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="container">
                                                <h5> Cause de handicap </h5>
                                                <hr>
                                                <div style="margin-top: 15px;">
                                                    <div class="radioInline">
                                                        <input class="form-check-input" type="radio" name="handicapCause"  value="Naissance" >
                                                        <label class="form-label" for="handicapCause">Naissance</label>
                                                    </div>
                                                    <div class="radioInline">
                                                        <input class="form-check-input" type="radio" name="handicapCause"  value="Maladie" >
                                                        <label class="form-label" for="handicapCause">Maladie</label>
                                                    </div>
                                                    <div class="radioInline">
                                                        <input class="form-check-input" type="radio" name="handicapCause"  value="Accident" >
                                                        <label class="form-label" for="handicapCause">Accident</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="container">
                                                <h5> Mobilité </h5>
                                                <hr>
                                                <div style="margin-top: 15px;">
                                                    <div class="radioInline">

                                                        <input class="form-check-input" type="radio" name="mobilité"  value="Déplacement sans aide" >
                                                        <label class="form-label" for="mobilité">Déplacement sans aide</label>
                                                    </div>
                                                    <div class="radioInline">
                                                        <input class="form-check-input" type="radio" name="mobilité"  value="Possibilité de travailler debout" >
                                                        <label class="form-label" >Possibilité de travailler debout</label>

                                                    </div>
                                                    <div class="radioInline">
                                                        <input class="form-check-input" type="radio" name="mobilité"  value="Possibilité de monter des escaliers" >
                                                        <label class="form-label" >Possibilité de monter des escaliers</label>

                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="mb-1 col-md-6" style="margin-top: 12px">
                                            <h5> Le bénéficiaire souffre-t-il d’une maladie chronique  - هل تعاني من مرض مزمن</h5>
                                            <hr>
                                           <span> <label class="form-label" for="yesOne"> oui</label>
                                            <input class="form-check-input" type="radio" name="chronicDes"  value="yes" >
                                           </span>
                                            <span style="margin-left: 90px">
                                                <label class="form-label" for="noOne"> non</label>
                                                <input class="form-check-input" type="radio" name="chronicDes"  value="no" >
                                            </span>
                                        </div>
                                        <div class="mb-1 col-md-6" style="margin-top: 12px">
                                            <h5> Le bénéficiaire a-t-il eu un antécédent médical qui pourrait affecter son rendement au travail  - هل تعاني من مرض يمنعك من مزاولة نشاط مهني</h5>
                                            <hr>
                                            <span> <label class="form-label" for="yesOne"> oui</label>
                                            <input class="form-check-input" type="radio" name="chronicDes1"  value="yes" >
                                           </span>
                                            <span style="margin-left: 90px">
                                                <label class="form-label" for="noOne"> non</label>
                                                <input class="form-check-input" type="radio" name="chronicDes1"  value="no" >
                                            </span>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <button class="btn btn-primary prev">
                                            <i data-feather="arrow-left" class="align-middle me-sm-25 me-0"></i>
                                            <span class="align-middle d-sm-inline-block d-none">Previous</span>
                                        </button>
                                        <button class="btn btn-primary next">
                                            <span class="align-middle d-sm-inline-block d-none">Next</span>
                                            <i data-feather="arrow-right" class="align-middle ms-sm-25 ms-0"></i>
                                        </button>
                                    </div>
                                </div>
                                <div id="social-links-modern" class="content" role="tabpanel" aria-labelledby="social-links-modern-trigger">
                                    <div class="content-header">
                                        <h5 class="mb-0">Informations professionnelles</h5>
                                        <hr>
                                    </div>
                                    <div class="row">
                                        <div class="mb-1 col-md-6" style="margin-top: 12px">
                                            <h5>Niveau scolaire- مستوى الدراسي</h5>
                                            <hr>
                                            <select class="form-select" name="niveauScholaire" >
                                                <option></option>
                                                <option value="Aucun">Aucun</option>
                                                <option value="Niveau primaire">Niveau primaire</option>
                                                <option value="Niveau primaire">Fin de parcours scolaire</option>
                                                <option value="Niveau collège">Niveau collège</option>
                                                <option value="Niveau lycée">Niveau lycée</option>
                                                <option value="Universitaire">Universitaire</option>
                                            </select>

                                        </div>
                                        <div class="mb-1 col-md-6" style="margin-top: 12px">
                                            <h5>Diplomé - شهادة دراسية</h5>
                                            <hr>
                                            <select class="form-select" name="diplom" >
                                                <option></option>
                                                <option value="oui">oui</option>
                                                <option value="non">non</option>
                                            </select>

                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="mb-1 col-md-6 typeDep" hidden>
                                            <label class="form-label" for="modern-google">Type de deplome - نوع شهادة محصل عليها</label>
                                            <input type="text" name="typeDeplome" class="form-control"  />
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <button class="btn btn-primary prev">
                                            <i data-feather="arrow-left" class="align-middle me-sm-25 me-0"></i>
                                            <span class="align-middle d-sm-inline-block d-none">Previous</span>
                                        </button>
                                        <button class="btn btn-primary next">
                                            <span class="align-middle d-sm-inline-block d-none">Next</span>
                                            <i data-feather="arrow-right" class="align-middle ms-sm-25 ms-0"></i>
                                        </button>
                                    </div>
                                </div>
                                <div id="last" class="content" role="tabpanel" aria-labelledby="last-modern-trigger">
                                    <div class="content-header">
                                        <h5 class="mb-0">Acceptabilité </h5>
                                            <hr>
                                    </div>
                                    <div class="row">
                                        <div class="mb-1 col-md-6">
                                            <label class="form-label" >La personne correspond aux critères de la COIP ? - هل مرشح مؤهل ؟</label>
                                            <select class="form-select" name="accepted" >
                                                <option></option>
                                                <option value="oui">oui</option>
                                                <option value="non">non</option>
                                            </select>
                                        </div>
                                        <div class="mb-1 col-md-6">
                                            <label class="form-label" for="modern-facebook">La personne est-elle disponible pour suivre la formation ? </label>
                                            <label class="form-label form-label-rtl">المترشح يمتلك القدرة على مواصلة تدريب</label>
                                            <select class="form-select" name="despo" >
                                                <option></option>
                                                <option value="oui">oui</option>
                                                <option value="non">non</option>
                                            </select>
                                        </div>
                                        <div class="mb-1 col-md-6">
                                            <label class="form-label" for="modern-facebook">La personne est orienté vers - توجيه</label>
                                            <select class="form-select" name="orientation" >
                                                <option></option>
                                                <option value="coip">Coip</option>
                                                <option value="hors coip">hors Coip</option>
                                                <option value="autre">Autre...</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <button class="btn btn-primary prev">
                                            <i data-feather="arrow-left" class="align-middle me-sm-25 me-0"></i>
                                            <span class="align-middle d-sm-inline-block d-none">Previous</span>
                                        </button>
                                        <button class="btn btn-success submit">Submit</button>
                                    </div>
                                </div>

                            </div>
                        </form>

                    </div>
                </section>
                <!-- /Modern Horizontal Wizard -->


            </div>
        </div>
    </div>
    <!-- END: Content-->
    <style>
        .step {
            pointer-events: none !important; /**<-----------*/
        }
        input:invalid {
            border: red solid 1px;
        }
        .filepond--root{
            width : 190px;
        }
        [for="name"]{
            margin-top: 167px;
        }
        @media (max-width: 1165px) {
            .filepond--root{
                width : 100px;
            }
            [for="name"]{
                margin-top: 0;
            }
            .comp-logo{
                display: none;
            }
        }
        .comp-logo{
            position: absolute;
            top: -55px;
            right: -31px
        }
        .form-label-rtl{
            float: right;
        }
        label {
            width: max-content;
        }
        .container{
            padding: 0  12px 0 0 ;
        }
        .form-check-inline {
            margin-bottom: 16px;
        }
        .hr{
            margin: 0.25rem 0px;
        }

    </style>
    <!-- BEGIN: Page JS-->
    <script src="{{ asset('app-assets/vendors/js/forms/wizard/bs-stepper.min.js') }}"></script>


    <script>
        if (!localStorage.getItem('ref')){
            localStorage.setItem('ref' , "#BL"+Math.floor(Math.random() * Date.now()))
            $('[name="ref"]').val("#BL"+Math.floor(Math.random() * Date.now()))
        }
        $('[name="ref"]').val(localStorage.getItem('ref'))
        $('.refNum').text(localStorage.getItem('ref'))

        $('.step-trigger').on('click' , function (evt) {
            console.dir(evt)
        })
            const form = $('.submit')
        form.on('click' , function (evt) {
            evt.preventDefault()
            console.log('submited')
            localStorage.removeItem('ref')
            console.dir($('form').serializeArray() );
            this.closest('form').submit()
        })
        const fr = $('form')
        fr.submit(function (e) {
            console.dir(e.target)
        })
        const stepper = new Stepper(document.querySelector('.bs-stepper'))

        $.validator.addMethod("regex",
            function(value, element , regexR) {
                var re = new RegExp(regexR)
                console.log(element.id)
                if (re.test(value) && value !== ''){
                    $(`#${element.id}`).hasClass('is-invalid') ? $(`#${element.id}`).removeClass('is-invalid') : ''
                    $(`#${element.id}`).hasClass('is-valid') ? '' : $(`#${element.id}`).addClass('is-valid')
                }else {
                    $(`#${element.id}`).hasClass('is-valid') ? $(`#${element.id}`).removeClass('is-valid') : ''
                    $(`#${element.id}`).hasClass('is-invalid') ? '' : $(`#${element.id}`).addClass('is-invalid')
                }
                return this.optional(element) || re.test(value);
            },
            "Désole . vérifier l'écriture dans le champ"
        );
        $.validator.addMethod('range' ,
          function (value , element ) {
            console.log('the age value : ', value)
              if (value> 0 && value < 35){
                  $(`#${element.id}`).hasClass('is-invalid') ? $(`#${element.id}`).removeClass('is-invalid') : ''
                  $(`#${element.id}`).hasClass('is-valid') ? '' : $(`#${element.id}`).addClass('is-valid')
              }else {
                  $(`#${element.id}`).hasClass('is-valid') ? $(`#${element.id}`).removeClass('is-valid') : ''
                  $(`#${element.id}`).hasClass('is-invalid') ? '' : $(`#${element.id}`).addClass('is-invalid')
              }
              return this.optional(element) || (value> 0 && value < 35);
          } ,
            "svp voir l'intervalle d'age"
        )
        var validator = $('#formAcc').validate({
            rules : {
                nom : {
                    required : true,
                    regex : '([A-Za-zء-ي]|\s)+$'
                },
                prenom : {
                    required : true,
                    regex : '^[A-Za-zء-ي]+$'
                },
                adresse : {
                    required : true
                } ,
                lncss : {
                    required : true
                },
                'date-naisance' : {
                    required : true
                },
                sex : {
                    required : true
                } ,
                cin : {
                    required : true ,
                    regex : '[a-zA-Z]+[0-9]+'
                } ,
                phone : {
                    required : true,
                    regex : '^(06|05|07)([0-9]{8})$'
                } ,
                email : {
                    email : true
                } ,
                age : {
                    required : true,
                    range : true
                }

            }
        })
        let map = new Map()
        function canGo() {
           let result = [...map.values()]
            if (result.includes(false)){
                $('.next1').attr('disabled' , true)
            }else {
                $('.next1').attr('disabled' , false)
            }
        }

        $('.stepOne').each((i , e) => {
            console.log('********************')
            console.log(i , e.id)
            console.log('********************')
            const element = $(`#${e.id}`)
            map.set(e.id , false)
            element.on('change input' , function (evt){
                if (element.valid()){
                    map.set(e.id , true)
                    canGo()
                    $(`#${e.id}`).hasClass('is-invalid') ? $(`#${e.id}`).removeClass('is-invalid') : ''
                    $(`#${e.id}`).hasClass('is-valid') ? '' : $(`#${e.id}`).addClass('is-valid')
                }else {
                    map.set(e.id , false)
                    canGo()
                    $(`#${e.id}`).hasClass('is-valid') ? $(`#${e.id}`).removeClass('is-valid') : ''
                    $(`#${e.id}`).hasClass('is-invalid') ? '' : $(`#${e.id}`).addClass('is-invalid')
                }

                console.table(map)
            })

        })
        $('#data-de-naissance').on('change' , function (evt) {
            console.log(evt.target.value)
            const currentDate = Date.now()
            const givvenDat = new Date(evt.target.value)
            const years = Math.floor(Math.abs(givvenDat - currentDate) / (1000 * 60 * 60 * 24 * 365))
            $("#age").val(years)
            if (years <= 35){
                map.set('age' , true)
                canGo()
            }else {
                map.set('age' , false)
                canGo()
            }
        })
         $('#age').on('change' , function (evt) {
             console.log($(this).valid())
         })
        $('.next').on('click',function (evt) {
            evt.preventDefault()
            stepper.next()
        })
        $('.prev').on('click',function (evt) {
            evt.preventDefault()
            stepper.previous()
        })
        $('.parents').on('change' , function (evt) {
            console.log(evt.target.value)
            const text = $(this).siblings('.form-label-par').text()
            console.log(text)
            if(evt.target.value === 'vivant' && text !== null){
                console.log('*************')
                console.log( $('.'+text).length)
               if ($('.'+text).length === 0){
                   console.log('$$$$$$$$$$$$$$$$$$$$')
                   $('.parentsStat').append(`<div class="mb-1 col-md-6 ${text}">
                                            <label class="form-label form-label-par" for="modern-language">acitivité ${text}</label>
                                            <label class="form-label form-label-rtl" for="work${text}">عمل</label>
                                            <select class="form-select parents" id="work${text}" name="work${text}" >
                                                <option></option>
                                                <option value="travail">travail</option>
                                                <option value="chomage">chomage</option>
                                            </select>
                                        </div>`)
               }
            }else {
                if (typeof $('.'+text) !== undefined || $('.'+text) !== null){
                    $('.'+text).remove()
                }
            }
        })
        let dad = ''
        let mom = ''
        function testParentStat(){
            if (dad === 'décédé' && mom === 'décédé'){
                console.log('here .................... here')
                if ( $('.tuteur').length === 0 && $('.tuteurWork').length === 0){
                    $('.parentsStat').append(`<div class="mb-1 col-md-6 tuteur">
                                            <label class="form-label form-label-par" for="tuteur">Tuteur</label>
                                            <label class="form-label form-label-rtl" for="tuteur">الواصي</label>
                                            <select class="form-select parents" id="tuteur" name="tuteur" >
                                                <option></option>
                                                <option value="famille">famille</option>
                                                <option value="autre">autre</option>
                                            </select>
                                        </div>
                                       <div class="mb-1 col-md-6 tuteurWork">
                                            <label class="form-label form-label-par" for="tuteurWork">activité du tuteur</label>
                                            <label class="form-label form-label-rtl" for="tuteurWork">عمل الواصي</label>
                                            <input type="text" id="tuteurWork" name="tuteurWork" class="form-control" placeholder="tuteur travail"  />
                                        </div>

`)
                }else {
                    $('.tuteur').remove()
                    $('.tuteurWork').remove()
                }
            }else {
                if(!( $('.tuteur').length === 0 && $('.tuteurWork').length === 0)){
                    $('.tuteur').remove()
                    $('.tuteurWork').remove()
                }
            }
        }
        $('#dad').on('change' , function(evt){
            dad = evt.target.value
            console.log(dad)
            testParentStat()

        })
        $('#mom').on('change' , function(evt){
            mom = evt.target.value
            console.log(mom)
             testParentStat()
        })

        console.dir(validator)

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
        FilePond.create(
            document.querySelector('.filepond'),
            {
                labelIdle: `Drag & Drop your picture or <span class="filepond--label-action">Browse</span>`,
                imagePreviewHeight: 50,
                imageCropAspectRatio: '1:1',
                imageResizeTargetWidth: 60,
                imageResizeTargetHeight: 60,
                stylePanelLayout: 'compact circle',
                styleLoadIndicatorPosition: 'center bottom',
                styleProgressIndicatorPosition: 'right bottom',
                styleButtonRemoveItemPosition: 'left bottom',
                styleButtonProcessItemPosition: 'right bottom',
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
                $('[name="photo"]').val(urlPhoto)
                console.log('*************************')

            }
                }
            }
            )
    </script>
    <script>
        $('#situationFam').on('change' , function (evt) {
            evt.preventDefault()
            console.log('**************** last select *********************')
            if (evt.target.value === 'Marié'){
                $('.situationFam').append(`<div class="sonsNum" style="margin-top: 12px">  <label class="form-label" for="modern-last-name">Nombre des membres enfants :</label>
                                            <label class="form-label form-label-rtl" for="modern-last-name">عدد الأبناء</label>
                                            <input type="text" id="nbSons" class="form-control" name="nbSons" pattern="[0-9]+" /> </div>`)
            }else{
                if (typeof $('.sonsNum') === undefined || $('.sonsNum') === null){

                }else {
                    $('.sonsNum').remove()
                }
            }
        })
        $('[name="handicape"]').on('change' , function (evt) {
            evt.preventDefault()
            console.log(evt.target.value)
            if (evt.target.value === 'yes'){
             $('.handicap').attr('hidden') ?   $('.handicap').removeAttr('hidden') : console.log('removed')
            }else {
                $('.handicap').attr('hidden' , true)
            }
        })
        $('[name="diplom"]').on('change' , function (evt) {
            evt.preventDefault()
            if (evt.target.value === 'oui'){
                $('.typeDep').removeAttr('hidden')
            }else {
                $('.typeDep').attr('hidden' , true)
            }
        })
    </script>
    <script>
       $(document).ready(function () {
           $script(
               'https://maps.googleapis.com/maps/api/js?v=weekly&key=AIzaSyBawL8VbstJDdU5397SUX7pEt9DslAwWgQ',
               () => {
                   const searchClient = algoliasearch(
                       'latency',
                       '6be0576ff61c053d5f9a3225e2a90f76'
                   );
                   const search = instantsearch({
                       indexName: 'streets',
                       searchClient,
                   });
                   search.addWidgets([
                       instantsearch.widgets.places({
                           container: '#adresse',
                           placesReference: window.places,
                       })
                   ]);

                   search.start();
               }
           );
           $script(
               'https://maps.googleapis.com/maps/api/js?v=weekly&key=AIzaSyBawL8VbstJDdU5397SUX7pEt9DslAwWgQ',
               () => {
                   const searchClient = algoliasearch(
                       'latency',
                       '6be0576ff61c053d5f9a3225e2a90f76'
                   );
                   const search = instantsearch({
                       indexName: 'cities',
                       searchClient,
                   });
                   search.addWidgets([
                       instantsearch.widgets.places({
                           container: '#lncss',
                           placesReference: window.places,
                       })
                   ]);

                   search.start();
               }
           );
           //

       })
    </script>
    <script>
        let searchName = ''
        let searchPrenom = ''
        function searchDublicate(nom , prenom , ref) {


            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            })
            $.ajax({
                type:'GET',
                url:"{{ route('admin.search.dup') }}",
                data:{name:nom, second:prenom},
                success:function(data){
                    console.log(data);
                    if (data.hasOwnProperty('ref')){
                        let comp = ` <button type="button" id="alertExist" class="btn btn-outline-danger waves-effect mt-1" data-bs-toggle="popover" data-bs-placement="top" data-bs-container="body" title="" data-bs-content="il exist un dossier dans la base de données avec le meme nom et prénom reference ${data['ref']}" data-bs-original-title="Popover on top">
                                                   <i data-feather='alert-triangle'></i> duplication - يوجد إسم مشابه <i data-feather='alert-triangle'></i>
                                                </button>`
                        $('#prenom').after(comp)
                        $('#alertExist').popover({
                            title: 'Click Inside',
                            placement: 'bottom',
                            template: '<div class="popover fade show bs-popover-top" role="tooltip" id="popover121799" style="position: absolute; inset: auto auto 0px 0px; margin: 0px; transform: translate(248px, -82px);" data-popper-placement="top"><div class="popover-arrow" style="position: absolute; transform: translate(131px, 0px); left: 0px;"></div><h3 class="popover-header">Popover on top</h3><div class="popover-body">Macaroon chocolate candy. I love carrot cake gingerbread cake lemon drops. Muffin sugar plum marzipan pie.</div></div>'
                        });
                    }
                    if (data.hasOwnProperty('center') && data.hasOwnProperty('ref')){
                        let comp = ` <button type="button" id="alertExist" class="btn btn-outline-danger waves-effect mt-1" data-bs-toggle="popover" data-bs-placement="top" data-bs-container="body" title="" data-bs-content="il exist un dossier dans la base de données avec le meme nom et prénom reference ${data['ref']} mais dans le center ${data['center']}" data-bs-original-title="Popover on top">
                                                   <i data-feather='alert-triangle'></i> duplication - يوجد إسم مشابه <i data-feather='alert-triangle'></i>
                                                </button>`
                        $('#prenom').after(comp)
                        $('#alertExist').popover({
                            title: 'Click Inside',
                            placement: 'bottom',
                            template: '<div class="popover fade show bs-popover-top" role="tooltip" id="popover121799" style="position: absolute; inset: auto auto 0px 0px; margin: 0px; transform: translate(248px, -82px);" data-popper-placement="top"><div class="popover-arrow" style="position: absolute; transform: translate(131px, 0px); left: 0px;"></div><h3 class="popover-header">Popover on top</h3><div class="popover-body">Macaroon chocolate candy. I love carrot cake gingerbread cake lemon drops. Muffin sugar plum marzipan pie.</div></div>'
                        });
                    }

                }
            });
        }
        $('#modern-username').on('change' , function (evt) {
            searchName = evt.target.value
        })
        $('#prenom').on('change' , function (evt) {
            if (evt.target.value === ''){
                if ($('#alertExist').length !== 0){
                    $('#alertExist').remove()
                }
            }else {
                searchPrenom = evt.target.value
                searchDublicate(searchName , searchPrenom)
            }

        })
    </script>
    <!-- END: Page JS-->
</x-app-layout>
