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
                            <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item" href="app-todo.html"><i class="me-1" data-feather="check-square"></i><span class="align-middle">Todo</span></a><a class="dropdown-item" href="app-chat.html"><i class="me-1" data-feather="message-square"></i><span class="align-middle">Chat</span></a><a class="dropdown-item" href="app-email.html"><i class="me-1" data-feather="mail"></i><span class="align-middle">Email</span></a><a class="dropdown-item" href="app-calendar.html"><i class="me-1" data-feather="calendar"></i><span class="align-middle">Calendar</span></a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">

                <!-- Modern Horizontal Wizard -->
                <section class="modern-horizontal-wizard">
                    <div class="bs-stepper wizard-modern modern-wizard-example">
                        <form class="needs-validation" action="{{ route('admin.acc.create') }}" method="POST">
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
                                        <span class="bs-stepper-title">Informations personnelles</span>
                                            <span class="bs-stepper-title">معلومات شخصية</span>
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
                                        <span class="bs-stepper-title">Informations générales</span>
                                            <span class="bs-stepper-title">معلومات عامة</span>
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
                                            <span class="bs-stepper-title">État physique </span>
                                            <span class="bs-stepper-title">حالة جسدية</span>
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
                                        <span class="bs-stepper-title">Informations professionnelles</span>
                                        <span class="bs-stepper-title">معلومات مهنية</span>
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
                                         <span class="bs-stepper-title">قبول</span>
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
                                            </div>
                                            <div class="mb-1 col-md-6">
                                                <label class="form-label" for="name">Nom</label>
                                                <label class="form-label-rtl" for="name"  >اﻹسم</label>
                                                <input type="text" id="modern-username" name="nom" class="form-control" placeholder="nom" required pattern="^[A-Za-zأ-ي]+$" />
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="mb-1 col-md-6">
                                                <label class="form-label-rtl"  >النسب</label>
                                                <label class="form-label" for="prenom">Prénom</label>
                                                <input type="text" id="prenom" name="prenom" class="form-control" placeholder="prénom" aria-label="prenom" required pattern="^[A-Za-zأ-ي]+$"/>
                                            </div>
                                            <div class="mb-1 form-password-toggle col-md-6">
                                                <label class="form-label-rtl"  >عنوان</label>
                                                <label class="form-label" for="adress">Adresse</label>
                                                <input type="text" id="adresse" name="adresse" class="form-control" placeholder="adresse" required />
                                            </div>
                                            <div class="mb-1 col-md-6">
                                                <label class="form-label-rtl"  >جنس</label>
                                                <label class="form-label" for="genre">Genre</label>
                                                <select class="form-select" name="sex" id="basicSelect">
                                                    <option value="homme">homme</option>
                                                    <option value="femme">femme</option>
                                                </select>
                                            </div>
                                            <div class="mb-1 col-md-6">
                                                <label class="form-label-rtl"  >جنسية</label>
                                                <label class="form-label" for="nationaité">Nationalité</label>
                                                <select class="form-select" name="nation" id="nationalité" required >
                                                    <option value=""></option>
                                                    <option value="moroccan">Moroccan</option>
                                                    <option value="afghan">Afghan</option>
                                                    <option value="albanian">Albanian</option>
                                                    <option value="algerian">Algerian</option>
                                                    <option value="american">American</option>
                                                    <option value="andorran">Andorran</option>
                                                    <option value="angolan">Angolan</option>
                                                    <option value="antiguans">Antiguans</option>
                                                    <option value="argentinean">Argentinean</option>
                                                    <option value="armenian">Armenian</option>
                                                    <option value="australian">Australian</option>
                                                    <option value="austrian">Austrian</option>
                                                    <option value="azerbaijani">Azerbaijani</option>
                                                    <option value="bahamian">Bahamian</option>
                                                    <option value="bahraini">Bahraini</option>
                                                    <option value="bangladeshi">Bangladeshi</option>
                                                    <option value="barbadian">Barbadian</option>
                                                    <option value="barbudans">Barbudans</option>
                                                    <option value="batswana">Batswana</option>
                                                    <option value="belarusian">Belarusian</option>
                                                    <option value="belgian">Belgian</option>
                                                    <option value="belizean">Belizean</option>
                                                    <option value="beninese">Beninese</option>
                                                    <option value="bhutanese">Bhutanese</option>
                                                    <option value="bolivian">Bolivian</option>
                                                    <option value="bosnian">Bosnian</option>
                                                    <option value="brazilian">Brazilian</option>
                                                    <option value="british">British</option>
                                                    <option value="bruneian">Bruneian</option>
                                                    <option value="bulgarian">Bulgarian</option>
                                                    <option value="burkinabe">Burkinabe</option>
                                                    <option value="burmese">Burmese</option>
                                                    <option value="burundian">Burundian</option>
                                                    <option value="cambodian">Cambodian</option>
                                                    <option value="cameroonian">Cameroonian</option>
                                                    <option value="canadian">Canadian</option>
                                                    <option value="cape verdean">Cape Verdean</option>
                                                    <option value="central african">Central African</option>
                                                    <option value="chadian">Chadian</option>
                                                    <option value="chilean">Chilean</option>
                                                    <option value="chinese">Chinese</option>
                                                    <option value="colombian">Colombian</option>
                                                    <option value="comoran">Comoran</option>
                                                    <option value="congolese">Congolese</option>
                                                    <option value="costa rican">Costa Rican</option>
                                                    <option value="croatian">Croatian</option>
                                                    <option value="cuban">Cuban</option>
                                                    <option value="cypriot">Cypriot</option>
                                                    <option value="czech">Czech</option>
                                                    <option value="danish">Danish</option>
                                                    <option value="djibouti">Djibouti</option>
                                                    <option value="dominican">Dominican</option>
                                                    <option value="dutch">Dutch</option>
                                                    <option value="east timorese">East Timorese</option>
                                                    <option value="ecuadorean">Ecuadorean</option>
                                                    <option value="egyptian">Egyptian</option>
                                                    <option value="emirian">Emirian</option>
                                                    <option value="equatorial guinean">Equatorial Guinean</option>
                                                    <option value="eritrean">Eritrean</option>
                                                    <option value="estonian">Estonian</option>
                                                    <option value="ethiopian">Ethiopian</option>
                                                    <option value="fijian">Fijian</option>
                                                    <option value="filipino">Filipino</option>
                                                    <option value="finnish">Finnish</option>
                                                    <option value="french">French</option>
                                                    <option value="gabonese">Gabonese</option>
                                                    <option value="gambian">Gambian</option>
                                                    <option value="georgian">Georgian</option>
                                                    <option value="german">German</option>
                                                    <option value="ghanaian">Ghanaian</option>
                                                    <option value="greek">Greek</option>
                                                    <option value="grenadian">Grenadian</option>
                                                    <option value="guatemalan">Guatemalan</option>
                                                    <option value="guinea-bissauan">Guinea-Bissauan</option>
                                                    <option value="guinean">Guinean</option>
                                                    <option value="guyanese">Guyanese</option>
                                                    <option value="haitian">Haitian</option>
                                                    <option value="herzegovinian">Herzegovinian</option>
                                                    <option value="honduran">Honduran</option>
                                                    <option value="hungarian">Hungarian</option>
                                                    <option value="icelander">Icelander</option>
                                                    <option value="indian">Indian</option>
                                                    <option value="indonesian">Indonesian</option>
                                                    <option value="iranian">Iranian</option>
                                                    <option value="iraqi">Iraqi</option>
                                                    <option value="irish">Irish</option>
                                                    <option value="israeli">Israeli</option>
                                                    <option value="italian">Italian</option>
                                                    <option value="ivorian">Ivorian</option>
                                                    <option value="jamaican">Jamaican</option>
                                                    <option value="japanese">Japanese</option>
                                                    <option value="jordanian">Jordanian</option>
                                                    <option value="kazakhstani">Kazakhstani</option>
                                                    <option value="kenyan">Kenyan</option>
                                                    <option value="kittian and nevisian">Kittian and Nevisian</option>
                                                    <option value="kuwaiti">Kuwaiti</option>
                                                    <option value="kyrgyz">Kyrgyz</option>
                                                    <option value="laotian">Laotian</option>
                                                    <option value="latvian">Latvian</option>
                                                    <option value="lebanese">Lebanese</option>
                                                    <option value="liberian">Liberian</option>
                                                    <option value="libyan">Libyan</option>
                                                    <option value="liechtensteiner">Liechtensteiner</option>
                                                    <option value="lithuanian">Lithuanian</option>
                                                    <option value="luxembourger">Luxembourger</option>
                                                    <option value="macedonian">Macedonian</option>
                                                    <option value="malagasy">Malagasy</option>
                                                    <option value="malawian">Malawian</option>
                                                    <option value="malaysian">Malaysian</option>
                                                    <option value="maldivan">Maldivan</option>
                                                    <option value="malian">Malian</option>
                                                    <option value="maltese">Maltese</option>
                                                    <option value="marshallese">Marshallese</option>
                                                    <option value="mauritanian">Mauritanian</option>
                                                    <option value="mauritian">Mauritian</option>
                                                    <option value="mexican">Mexican</option>
                                                    <option value="micronesian">Micronesian</option>
                                                    <option value="moldovan">Moldovan</option>
                                                    <option value="monacan">Monacan</option>
                                                    <option value="mongolian">Mongolian</option>
                                                    <option value="mosotho">Mosotho</option>
                                                    <option value="motswana">Motswana</option>
                                                    <option value="mozambican">Mozambican</option>
                                                    <option value="namibian">Namibian</option>
                                                    <option value="nauruan">Nauruan</option>
                                                    <option value="nepalese">Nepalese</option>
                                                    <option value="new zealander">New Zealander</option>
                                                    <option value="ni-vanuatu">Ni-Vanuatu</option>
                                                    <option value="nicaraguan">Nicaraguan</option>
                                                    <option value="nigerien">Nigerien</option>
                                                    <option value="north korean">North Korean</option>
                                                    <option value="northern irish">Northern Irish</option>
                                                    <option value="norwegian">Norwegian</option>
                                                    <option value="omani">Omani</option>
                                                    <option value="pakistani">Pakistani</option>
                                                    <option value="palauan">Palauan</option>
                                                    <option value="panamanian">Panamanian</option>
                                                    <option value="papua new guinean">Papua New Guinean</option>
                                                    <option value="paraguayan">Paraguayan</option>
                                                    <option value="peruvian">Peruvian</option>
                                                    <option value="polish">Polish</option>
                                                    <option value="portuguese">Portuguese</option>
                                                    <option value="qatari">Qatari</option>
                                                    <option value="romanian">Romanian</option>
                                                    <option value="russian">Russian</option>
                                                    <option value="rwandan">Rwandan</option>
                                                    <option value="saint lucian">Saint Lucian</option>
                                                    <option value="salvadoran">Salvadoran</option>
                                                    <option value="samoan">Samoan</option>
                                                    <option value="san marinese">San Marinese</option>
                                                    <option value="sao tomean">Sao Tomean</option>
                                                    <option value="saudi">Saudi</option>
                                                    <option value="scottish">Scottish</option>
                                                    <option value="senegalese">Senegalese</option>
                                                    <option value="serbian">Serbian</option>
                                                    <option value="seychellois">Seychellois</option>
                                                    <option value="sierra leonean">Sierra Leonean</option>
                                                    <option value="singaporean">Singaporean</option>
                                                    <option value="slovakian">Slovakian</option>
                                                    <option value="slovenian">Slovenian</option>
                                                    <option value="solomon islander">Solomon Islander</option>
                                                    <option value="somali">Somali</option>
                                                    <option value="south african">South African</option>
                                                    <option value="south korean">South Korean</option>
                                                    <option value="spanish">Spanish</option>
                                                    <option value="sri lankan">Sri Lankan</option>
                                                    <option value="sudanese">Sudanese</option>
                                                    <option value="surinamer">Surinamer</option>
                                                    <option value="swazi">Swazi</option>
                                                    <option value="swedish">Swedish</option>
                                                    <option value="swiss">Swiss</option>
                                                    <option value="syrian">Syrian</option>
                                                    <option value="taiwanese">Taiwanese</option>
                                                    <option value="tajik">Tajik</option>
                                                    <option value="tanzanian">Tanzanian</option>
                                                    <option value="thai">Thai</option>
                                                    <option value="togolese">Togolese</option>
                                                    <option value="tongan">Tongan</option>
                                                    <option value="trinidadian or tobagonian">Trinidadian or Tobagonian</option>
                                                    <option value="tunisian">Tunisian</option>
                                                    <option value="turkish">Turkish</option>
                                                    <option value="tuvaluan">Tuvaluan</option>
                                                    <option value="ugandan">Ugandan</option>
                                                    <option value="ukrainian">Ukrainian</option>
                                                    <option value="uruguayan">Uruguayan</option>
                                                    <option value="uzbekistani">Uzbekistani</option>
                                                    <option value="venezuelan">Venezuelan</option>
                                                    <option value="vietnamese">Vietnamese</option>
                                                    <option value="welsh">Welsh</option>
                                                    <option value="yemenite">Yemenite</option>
                                                    <option value="zambian">Zambian</option>
                                                    <option value="zimbabwean">Zimbabwean</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row brd">
                                            <div class="mb-1 col-md-6">
                                                <label class="form-label-rtl"  >مكان الإزدياد</label>
                                                <label class="form-label" for="prenom">Lieu de naissance</label>
                                                <input type="text" id="lncss" name="lieu-naissance" class="form-control" placeholder="lieu de naissance" aria-label="prenom" required/>
                                            </div>
                                            <div class="col-md-6 mb-1">
                                                <label class="form-label-rtl"  >تاريخ الإزدياد</label>
                                                <label class="form-label" for="fp-default">Date de naissance</label>
                                                <input type="text" id="data-de-naissance" name="date-naisance" class="form-control flatpickr-basic flatpickr-input" placeholder="YYYY-MM-DD" readonly="readonly" required>
                                            </div>

                                            <div class="mb-1 col-md-6">
                                                <label class="form-label-rtl"  >رقم البطاقة وطنية</label>
                                                <label class="form-label" for="cin">N° de CIN</label>
                                                <input type="text" id="cin" name="cin" class="form-control" placeholder="CIN" required pattern="[a-zA-Z]+[0-9]+" />

                                            </div>
                                            <div class="mb-1 col-md-6">
                                                <label class="form-label-rtl"  >رقم الهاتف</label>
                                                <label class="form-label" for="gsm">Numéro de telephone</label>
                                                <input type="text" id="gsm" name="phone" class="form-control" placeholder="+212.........." pattern="^(06)([0-9]{8})$"/>
                                            </div>
                                            <div class="mb-1 col-md-6">
                                                <label class="form-label-rtl" >اﻹيميل</label>
                                                <label class="form-label" for="gsm">Email Personnel</label>
                                                <input type="text" id="email" name="email" class="form-control" placeholder="example@email.com" pattern="^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$"/>
                                            </div>
                                            <div class="mb-1 col-md-6">
                                                <label class="form-label-rtl"  >كيف تم التعرف على خدماتنا ؟</label>
                                                <label class="form-label" for="basicSelect">Comment avez-vous connu notre service ?</label>
                                                <select class="form-select" name="how" id="savoir-service" required>
                                                        <option >Choisir</option>
                                                        <option value="Bo">Par le bouche à oreille</option>
                                                        <option value="In">Sur Internet</option>
                                                        <option value="Am">Agent de mobilisation</option>
                                                        <option value="Par">Par le biais d’un partenaire</option>
                                                        <option value="La">︎Lauréat / Ambassadeur</option>
                                                        <option value="Au">Autre.....</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <div >

                                        </div>
                                        <button class="btn btn-primary next" disabled>
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
                                        <div class="mb-1 col-md-6">
                                            <label class="form-label" for="Nbsalaire">Nb. de personnes ayant une activité salariale</label>
                                            <label class="form-label form-label-rtl" for="modern-first-name">عدد اﻷشخاص من دوي نشاط مهني</label>
                                            <input type="text" id="Nbsalaire" name="Nbsalaire" class="form-control" pattern="[0-9]+" />
                                        </div>
                                        <div class="mb-1 col-md-6">
                                            <label class="form-label" for="modern-last-name">Nombre des membres de famille :</label>
                                            <label class="form-label form-label-rtl" for="modern-last-name">عدد أفراد العائلة</label>
                                            <input type="text" id="nbFamille" class="form-control" name="nbFammille" pattern="[0-9]+" />
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="mb-1 col-md-6 situationFam">
                                            <label class="form-label" for="modern-country">Ressources</label>
                                            <label class="form-label form-label-rtl" for="modern-country">Ressources</label>
                                            <select class="select2 w-100" id="" name="ressource">
                                                <option label=" ">choisire</option>
                                                <option value="Ressources propres">Ressources propres - مصادر داتية </option>
                                                <option value="Pris en charge par les parents ">Pris en charge par les parents - الأسرة</option>
                                                <option value="Autre">Autre - أخرى</option>
                                            </select>
                                        </div>
                                        <div class="mb-1 col-md-6 ">
                                            <label class="form-label" for="modern-language">Situation familiale :</label>
                                            <label class="form-label form-label-rtl" for="modern-language">حالة العائلية</label>
                                            <select class="form-select" id="situationFam" name="situationFam" >
                                                <option value="Célibataire">Célibataire</option>
                                                <option value="Marié">Marié(e)</option>
                                                <option value="Divorcé">Divorcé(e)</option>
                                                <option value="Veuf">Veuf(e)</option>
                                            </select>
                                        </div>
                                        <div class="d-flex">
                                            <div class="container">
                                                <div class="content-header">
                                                    <h5 class="mb-0">Situation Parentale</h5>
                                                    <hr>
                                                </div>
                                                <div class="mb-1 col-md-6">
                                                    <div class="form-check form-check-inline ">
                                                        <label class="form-check-label" for="inlineRadio1">︎En rupture totale avec son entourage - إنقطاع كلي </label>
                                                        <input class="form-check-input" type="radio" name="situationPar" id="inlineRadio1" value="En rupture totale avec son entourage" >
                                                    </div>
                                                    <div class="form-check form-check-inline  ">
                                                        <label class="form-check-label" for="inlineRadio2">︎En rupture partielle avec son entourage - إنقطاع جزئي</label>
                                                        <input class="form-check-input" type="radio" name="situationPar" id="inlineRadio2" value="En rupture partielle avec son entourage" >
                                                    </div>
                                                    <div class="form-check form-check-inline ">
                                                        <label class="form-check-label" for="inlineRadio3">︎Est orphelin - يتيم </label>
                                                        <input class="form-check-input" type="radio" name="situationPar" id="inlineRadio3" value="Est orphelin" >
                                                    </div>
                                                    <div class="form-check form-check-inline ">
                                                        <label class="form-check-label" for="inlineRadio4">︎Du père - يتيم اﻷب</label>
                                                        <input class="form-check-input" type="radio" name="situationPar" id="inlineRadio4" value="Du père" >
                                                    </div>
                                                    <div class="form-check form-check-inline ">
                                                        <label class="form-check-label" for="inlineRadio5">De la mère - يتيم اﻷم </label>
                                                        <input class="form-check-input" type="radio" name="situationPar" id="inlineRadio5" value="De la mère" >
                                                    </div>
                                                    <div class="form-check form-check-inline ">
                                                        <label class="form-check-label" for="inlineRadio6">︎Pris en charge par les parents - في وسط عائلي </label>
                                                        <input class="form-check-input" type="radio" name="situationPar" id="inlineRadio6" value="Pris en charge par les parents" >
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="container">
                                                <div class="content-header">
                                                    <h5 class="mb-0">Logement</h5>
                                                    <hr>
                                                </div>
                                                <div class="mb-1 col-md-6">
                                                    <div class="form-check form-check-inline ">
                                                        <label class="form-check-label" for="inlineRadio21"> Locataire  - كراء</label>
                                                        <input class="form-check-input" type="radio" name="logement" id="inlineRadio21" value="︎Locataire" >
                                                    </div>
                                                    <div class="form-check form-check-inline  ">
                                                        <label class="form-check-label" for="inlineRadio22">︎Propriétaire - صاحب سكن</label>
                                                        <input class="form-check-input" type="radio" name="logement" id="inlineRadio22" value="︎Propriétaire" >
                                                    </div>
                                                    <div class="form-check form-check-inline ">
                                                        <label class="form-check-label" for="inlineRadio23">︎ Chez la famille - سكن عائلي  </label>
                                                        <input class="form-check-input" type="radio" name="logement" id="inlineRadio23" value="Chez la famille" >
                                                    </div>
                                                    <div class="form-check form-check-inline ">
                                                        <label class="form-check-label" for="inlineRadio24">︎Bidonvilles - سكن غير لائق</label>
                                                        <input class="form-check-input" type="radio" name="logement" id="inlineRadio24" value="︎Bidonvilles" >
                                                    </div>
                                                    <div class="form-check form-check-inline ">
                                                        <label class="form-check-label" for="inlineRadio25">Autres - أمور أخرى </label>
                                                        <input class="form-check-input" type="radio" name="logement" id="inlineRadio25" value="Autres" >
                                                    </div>

                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <button class="btn btn-primary prev">
                                            <i data-feather="arrow-left" class="align-middle me-sm-25 me-0"></i>
                                            <span class="align-middle d-sm-inline-block d-none">Previous</span>
                                        </button>
                                        <button class="btn btn-primary next next2" disabled>
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
                                            <h5>Niveau scolaire</h5>
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
                                            <h5>Diplomé</h5>
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
                                            <label class="form-label" for="modern-google">Type de deplome</label>
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
                                            <label class="form-label" for="modern-facebook">La personne est-elle disponible pour suivre la formation ? - المترشح يمتلك القدرة على مواصلة تدريب</label>
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
        .line{
            padding: 0px 1rem;
        }
    </style>
    <!-- BEGIN: Page JS-->
    <script src="{{ asset('app-assets/vendors/js/forms/wizard/bs-stepper.min.js') }}"></script>

    <script src="{{ asset('app-assets/js/scripts/forms/form-wizard.js') }}"></script>
    <script>
        $('.refNum').text("#BL"+Math.floor(Math.random() * Date.now()))
        const input1 = $('#modern-username')
        const requiredMemo = new Map()
        const matchMemo = new Map()
        const numberOfRequired1 = $('.container1 [required=""]').length
        function disabledNext() {
            $('.next').attr('disabled' , true)
        }
        function enableNext() {
            $('.next').attr('disabled' , false)
        }
        function canGo() {
            console.log('number of required element attached ', Array.from(requiredMemo.keys()).length)
            if (Array.from(matchMemo.values()).includes(false) || Array.from(requiredMemo.values()).includes(false) || Array.from(requiredMemo.keys()).length !== numberOfRequired1 ){
                console.log('*************')
                console.log('contain false')
                disabledNext()
            }else {
                console.log('*************')
                console.log('not containig false')
                enableNext()
            }
        }
        function doingMatch(target , pattern , elementId) {
            const element = $('#'+elementId)
            if (target.match(new RegExp(pattern))){
                console.log('**************************')
                console.log('matching')
                console.log('**************************')
                matchMemo.set(elementId , true)
                element.hasClass('is-invalid') ? element.removeClass('is-invalid').addClass('is-valid') : element.addClass('is-valid')
                if (!(typeof element.attr('required') === undefined  || element.attr('required') == null)){
                    canGo()
                }
            }else {
                matchMemo.set(elementId , false)
                console.log('**************************')
                console.log('not matching')
                console.log('**************************')
                element.hasClass('is-valid') ? element.removeClass('is-valid').addClass('is-invalid') : element.addClass('is-invalid')
                if (!(typeof element.attr('required') === undefined  || element.attr('required') == null)){
                    canGo()
                }
            }
        }
        // input1.on('change' , function (evt) {
        //     evt.preventDefault()
        //     console.log(evt.target.value)
        //     if (evt.target.value.match(/^[A-Za-z]+$/) || evt.target.value.match(/^[أ-ي]+$/)){
        //         console.log('it match')
        //         console.log(this)
        //         input1.hasClass('is-invalid') ? input1.removeClass('is-invalid').addClass('is-valid') : input1.addClass('is-valid')
        //
        //        enableNext()
        //     }else {
        //         console.log('error matching')
        //         console.log(input1.closest('.next'))
        //         input1.hasClass('is-valid') ? input1.removeClass('is-valid').addClass('is-invalid') : input1.addClass('is-invalid')
        //         disabledNext()
        //     }
        // })
        $('.step-trigger').on('click' , function (evt) {
            console.dir(evt)
        })
            const form = $('.submit')
        form.on('click' , function (evt) {
            evt.preventDefault()
            console.log('submited')
            console.dir($('form').serializeArray() );
         //   this.closest('form').submit()
        })
        const stepper = new Stepper(document.querySelector('.bs-stepper'))
        $('.next').on('click' , function (evt) {
            evt.preventDefault()
            return  stepper.next()
        })

        $('.prev').on('click' , function (evt) {
            evt.preventDefault()
            return stepper.previous()
        })
        const cin =  $('#cin')
        cin.on('change' , function (evt) {
            evt.preventDefault()
            if (evt.target.value.match(/[a-zA-Z]+[0-9]+/)) {
                cin.hasClass('is-invalid') ? cin.removeClass('is-invalid').addClass('is-valid') : cin.addClass('is-valid')
                enableNext()
            }else {
                cin.hasClass('is-valid') ? cin.removeClass('is-valid').addClass('is-invalid') : cin.addClass('is-invalid')
                disabledNext()
            }
        })
        $('input').on('change' , function (evt) {
            evt.preventDefault()
            if (this.hasAttribute('pattern')){
                console.log(evt.target.value)
                console.log(evt.target.name)
                const element = $('[name="'+`${evt.target.name}`+'"]')
                if (evt.target.value.match(new RegExp(evt.target.pattern))){
                    element.hasClass('is-invalid') ? element.removeClass('is-invalid') : console.log('tata')
                    element.hasClass('is-valid') ? console.log('it has') : element.addClass('is-valid')
                }else {
                    element.hasClass('is-valid') ? element.removeClass('is-valid') : console.log('tata')
                    element.hasClass('is-invalid') ? console.log('it has') : element.addClass('is-invalid')
                }

            }else {
                console.log('**************** it ************* ')
            }

        })
        $('[required=""]').on('change' , function (evt) {
            evt.preventDefault()
            console.log('%c ==================== ', 'background: #222; color: #bada55');
            console.log(evt.target.value)
            const target = evt.target.value
            if (this.hasAttribute("pattern")){
                console.log('pattern ' , this["pattern"])
                console.log('id ' , this['id'])
                doingMatch(target , this["pattern"] , this["id"])
            }
            const statement1 = evt.target.value === 'Au'
            const statement2 = evt.target.value === 'Par'
            if (statement1){
                console.log('%c ==================== ', 'background: red; color: #bada55');
                if ( !(typeof $('.precise') === undefined || $('.precise') === null)){
                    console.log('%c ==================== ', 'background: yellow; color: #bada55');
                    $('.precise').remove()
                    $('.brd').append(`<div class="mb-1 col-md-6 precise">
                                                <label class="form-label-rtl"  >تحديد</label>
                                                <label class="form-label" for="precise">Précisé</label>
                                                <input type="text" id="precise" name="precise" class="form-control" required/>
                                            </div>`)
                    console.log('%c ==================== ', 'background: red; color: #bada55');
                }else {
                    console.log('%c ==================== ', 'background: green; color: #bada55');
                    $('.brd').append(`<div class="mb-1 col-md-6 precise">
                                                <label class="form-label" for="precise">Précisé</label>
                                                <input type="text" id="precise" name="precise" class="form-control" required/>
                                            </div>
                                          <div class="mb-1 col-md-6 precise">
                                                <label class="form-label-rtl"  >  نوع الشريك</label>
                                                <label class="form-label" for="precise">Précisé Type de Partenaire</label>
                                                <input type="text" id="preciseType" name="preciseType" class="form-control" required/>
                                            </div>`)
                    console.log('%c ==================== ', 'background: red; color: #bada55');
                }
            }
            if (statement2){
                console.log('%c ==================== ', 'background: red; color: #bada55');
                if ( !(typeof $('.precise') === undefined || $('.precise') === null)){
                    console.log('%c ==================== ', 'background: yellow; color: #bada55');
                    $('.precise').remove()
                    $('.brd').append(`<div class="mb-1 col-md-6 precise">
                                                <label class="form-label-rtl"  >  شريك</label>
                                                <label class="form-label" for="precise">Précisé Partenaire</label>
                                                <input type="text" id="precise" name="precise" class="form-control" required/>
                                            </div>
                                            <div class="mb-1 col-md-6 precise">
                                                <label class="form-label-rtl"  >  نوع الشريك</label>
                                                <label class="form-label" for="precise">Précisé Type de Partenaire </label>
                                                <input type="text" id="preciseType" name="preciseType" class="form-control" required/>
                                            </div>`)
                    console.log('%c ==================== ', 'background: red; color: #bada55');
                }else {
                    console.log('%c ==================== ', 'background: green; color: #bada55');
                    $('.brd').append(`<div class="mb-1 col-md-6 precise">
                                                <label class="form-label-rtl"  >  شريك</label>
                                                <label class="form-label" for="precise">Précisé Partenaire</label>
                                                <input type="text" id="precise" name="precise" class="form-control" required/>
                                                <input type="text" id="preciseType" name="preciseType" class="form-control" required/>
                                            </div>`)
                    console.log('%c ==================== ', 'background: red; color: #bada55');
                }
            }
            if (!(statement1 || statement2)){
                console.log('%c ==================== ', 'background: red; color: #bada55');
                if ( !(typeof $('.precise') === undefined || $('.precise') === null)){
                    console.log('%c ==================== ', 'background: yellow; color: #bada55');
                    $('.precise').remove()
                    console.log('%c ==================== ', 'background: red; color: #bada55');
                }
            }

            if (typeof evt.target.value === undefined || evt.target.value === null || evt.target.value === 'Choisir'){
                requiredMemo.set(this['id'] , false)
               canGo()
                console.log('%c ==================== ', 'background: #222; color: #bada55');
            }else {
                requiredMemo.set(this['id'] , true)
                canGo()
                console.log('%c ==================== ', 'background: #222; color: #bada55');
            }
        })
        $('#gsm').on('change' , function (evt) {
            evt.preventDefault()
            const  target = evt.target.value
            if (this.hasAttribute("pattern")){
                console.log('pattern ' , this["pattern"])
                console.log('id ' , this['id'])
                doingMatch(target , this["pattern"] , this["id"])
            }

        })
        $('#email').on('change' , function (evt) {
            evt.preventDefault()
            const  target = evt.target.value
            if (this.hasAttribute("pattern")){
                console.log('pattern ' , this["pattern"])
                console.log('id ' , this['id'])
                doingMatch(target , this["pattern"] , this["id"])
            }
        })

    </script>
    <script>
        $('#data-de-naissance').on('change' , function (evt) {
            evt.preventDefault()
            if (!(typeof $('.ageHolder') === undefined || $('.ageHolder') === null) ){
                $('.ageHolder').remove()
            }
            console.log(evt.target.value)
            const yearOf =  Date.now() - (new Date(evt.target.value))
            const result = (new Date(yearOf)).getUTCFullYear() - 1970
            const refinedResult = Math.abs(result) + 1
            console.log(refinedResult)
            if (refinedResult > 40 || refinedResult < 15){
                $('.brd').append(`<div class="mb-1 col-md-6 ageHolder"> <label class="form-label-rtl" for="age">سن</label> <label class="form-label" for="age">Age</label> <input type="text" name="age" class="form-control is-invalid" id="readonlyInput" readonly="readonly" value=${refinedResult}> </div>`)

            }else {
                $('.brd').append(`<div class="mb-1 col-md-6 ageHolder"> <label class="form-label-rtl" for="age">سن</label> <label class="form-label" for="age">Age</label> <input type="text" name="age" class="form-control is-valid" id="readonlyInput" readonly="readonly" value=${refinedResult}> </div>`)

            }
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
    <!-- END: Page JS-->
</x-app-layout>
