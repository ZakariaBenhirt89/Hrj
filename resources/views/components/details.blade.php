<x-app-layout>
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper container-xxl p-0">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">

                    </div>
                </div>
                <div class="content-header-right text-md-end col-md-3 col-12 d-md-block d-none">
                    <div class="mb-1 breadcrumb-right">

                    </div>
                </div>
            </div>
            <div class="content-body">
                <section class="modern-horizontal-wizard">
                    <div class="bs-stepper wizard-modern modern-wizard-example">
                        <div class="bs-stepper-header justify-content-between">
                            <div class="step active" data-target="#account-details-modern" role="tab" id="account-details-modern-trigger">
                                <button type="button" class="step-trigger" aria-selected="true">
                                    <span class="bs-stepper-box">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text font-medium-3"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                                    </span>
                                    <span class="bs-stepper-label">
                                        <span class="bs-stepper-title">Détails du dossier</span>
                                    </span>
                                </button>
                            </div>
                        </div>
                        <div class="bs-stepper-content">
                            <div id="account-details-modern" class="content active dstepper-block" role="tabpanel" aria-labelledby="account-details-modern-trigger">
                                <div class="content-header">

                                    <img class="coip-logo dossier-logo" src="https://res.cloudinary.com/dy6vgsgr8/image/upload/v1639397584/Group_1_sfcyrg.svg" width="250">
                                </div>
                                <div class="row">
                                    <div class="card dossier1" id="dossier1">
                                        <div class="card-body">
                                            <div class="user-avatar-section">
                                                <div class="d-flex align-items-center flex-column">
                                                    @isset( $image)
                                                    <img class="img-fluid rounded mt-3 mb-2" src="{{ $image }}" height="110" width="110" alt="User avatar">
                                                    @endisset
                                                    <div class="user-info text-center">
                                                        @isset($name)
                                                        <h4>{{ $name }}</h4>
                                                        @endisset
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-around my-2 pt-75">
                                                <div class="d-flex align-items-start me-2">
                                            <span class="badge bg-light-primary p-75 rounded">
                                                <img src="{{ asset('app-assets/icons/icons8-house.svg') }}">
                                            </span>
                                                    <div class="ms-75">
                                                        <h4 class="mb-0">{{ Auth::user()->center }}</h4>
                                                        <small>Center</small>
                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-start">
                                            <span class="badge bg-light-primary p-75 rounded">
                                                 <img src="{{ asset('app-assets/icons/icons8-popular-man.svg') }}">
                                            </span>
                                                    <div class="ms-75">
                                                        @isset($charger)
                                                        <h4 class="mb-0">{{ $charger }}</h4>
                                                        @endisset
                                                        <small>nom du chargé</small>
                                                    </div>
                                                </div>
                                            </div>
                                            <h4 class="fw-bolder border-bottom pb-50 mb-1">Details</h4>
                                            <div class="info-container">
                                                <ul class="list-unstyled">
                                                    <li class="mb-75">
                                                        @isset($genre)
                                                            <span class="fw-bolder me-25">Genre : </span>
                                                            <span>{{ $genre }}</span>
                                                        @endisset
                                                    </li>
                                                    <li class="mb-75">
                                                        @isset($dateIns)
                                                        <span class="fw-bolder me-25"> Inscrit le : </span>
                                                        <span> {{ $dateIns }}</span>
                                                        @endisset
                                                    </li>
                                                    <li class="mb-75">
                                                        @isset($adress)
                                                        <span class="fw-bolder me-25">Adresse :</span>
                                                        <span >{{ $adress }}</span>
                                                        @endisset
                                                    </li>
                                                    <li class="mb-75">
                                                        @isset($phone)
                                                        <span class="fw-bolder me-25">Telephone :</span>
                                                        <span>{{ $phone }}</span>
                                                        @endisset
                                                    </li>
                                                    <li class="mb-75">
                                                        @isset($lieuDeNaissance)
                                                        <span class="fw-bolder me-25">Lieu de naissance :</span>
                                                        <span>{{ $lieuDeNaissance }}</span>
                                                        @endisset
                                                    </li>
                                                    <li class="mb-75">
                                                        @isset($cin)
                                                        <span class="fw-bolder me-25">CIN :</span>
                                                        <span>{{ $cin }}</span>
                                                        @endisset
                                                    </li>
                                                    <hr>
                                                </ul>
                                            </div>
                                            <h4 class="fw-bolder border-bottom pb-50 mb-1">Etas physique</h4>
                                            <div class="info-container">
                                                <ul class="list-unstyled">
                                                    <li class="mb-75">
                                                        @isset($handicape)
                                                            <span class="fw-bolder me-25">Est (il/elle) handicapé : </span>
                                                            <span>{{ $handicape }}</span>
                                                        @endisset
                                                    </li>
                                                    <li class="mb-75">
                                                        @isset($chronique)
                                                            <span class="fw-bolder me-25">maladie chronique : </span>
                                                            <span>{{ $chronique }}</span>
                                                        @endisset
                                                    </li>

                                                    <hr>
                                                </ul>

                                            </div>
                                            <h4 class="fw-bolder border-bottom pb-50 mb-1">Etas scholaire</h4>
                                            <div class="info-container">
                                                <ul class="list-unstyled">
                                                    <li class="mb-75">
                                                        @isset($niveau)
                                                            <span class="fw-bolder me-25">Niveau scholaire : </span>
                                                            <span>{{ $niveau }}</span>
                                                        @endisset
                                                    </li>
                                                    <li class="mb-75">
                                                        @isset($diplome)
                                                            <span class="fw-bolder me-25">Diplome : </span>
                                                            <span>{{ $diplome }}</span>
                                                        @endisset
                                                    </li>

                                                    <li class="mb-75">
                                                        @isset($typeDiplome)
                                                            <span class="fw-bolder me-25"> type de Diplome : </span>
                                                            <span>{{ $typeDiplome }}</span>
                                                        @endisset
                                                    </li>


                                                    <hr>
                                                </ul>

                                            </div>
                                            <h4 class="fw-bolder border-bottom pb-50 mb-1">Etas dans coip</h4>
                                            <div class="info-container">
                                                <ul class="list-unstyled">
                                                    <li class="mb-75">
                                                        @isset($orientation)
                                                            <span class="fw-bolder me-25">orientation : </span>
                                                            <span>{{ $orientation }}</span>
                                                        @endisset
                                                    </li>
                                                    <hr>
                                                </ul>

                                            </div>
                                            <div class="d-flex justify-content-center pt-2">

                                                <a  class="btn btn-outline-danger suspend-user waves-effect ">Telechargé Dossier <i data-feather='download-cloud'></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="d-flex justify-content-between">
                                     <div></div>

                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <style>
         .dossier-logo{
             float: right;
             margin-right: -34px;
             margin-top: -33px;
         }
         .row {
             clear: right;
         }
    </style>
    <script src="{{ asset('app-assets/vendors/js/forms/wizard/bs-stepper.min.js') }}"></script>
    <script src="{{ asset('app-assets/js/scripts/forms/form-wizard.js') }}"></script>
</x-app-layout>
