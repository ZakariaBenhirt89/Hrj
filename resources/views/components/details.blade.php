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
                        <div class="dropdown">
                            <button class="btn-icon btn btn-primary btn-round btn-sm dropdown-toggle waves-effect waves-float waves-light" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-grid"><rect x="3" y="3" width="7" height="7"></rect><rect x="14" y="3" width="7" height="7"></rect><rect x="14" y="14" width="7" height="7"></rect><rect x="3" y="14" width="7" height="7"></rect></svg></button>
                            <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item" href="app-todo.html"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check-square me-1"><polyline points="9 11 12 14 22 4"></polyline><path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path></svg><span class="align-middle">Todo</span></a><a class="dropdown-item" href="app-chat.html"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-square me-1"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path></svg><span class="align-middle">Chat</span></a><a class="dropdown-item" href="app-email.html"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail me-1"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg><span class="align-middle">Email</span></a><a class="dropdown-item" href="app-calendar.html"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar me-1"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg><span class="align-middle">Calendar</span></a></div>
                        </div>
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
                                        <span class="bs-stepper-title">Account Details</span>
                                        <span class="bs-stepper-subtitle">Setup Account Details</span>
                                    </span>
                                </button>
                            </div>
                            <div class="line">
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right font-medium-2"><polyline points="9 18 15 12 9 6"></polyline></svg>
                            </div>
                            <div class="step" data-target="#personal-info-modern" role="tab" id="personal-info-modern-trigger">
                                <button type="button" class="step-trigger" aria-selected="false">
                                    <span class="bs-stepper-box">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user font-medium-3"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                                    </span>
                                    <span class="bs-stepper-label">
                                        <span class="bs-stepper-title">Personal Info</span>
                                        <span class="bs-stepper-subtitle">Add Personal Info</span>
                                    </span>
                                </button>
                            </div>
                            <div class="line">
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right font-medium-2"><polyline points="9 18 15 12 9 6"></polyline></svg>
                            </div>
                            <div class="step" data-target="#address-step-modern" role="tab" id="address-step-modern-trigger">
                                <button type="button" class="step-trigger" aria-selected="false">
                                    <span class="bs-stepper-box">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-map-pin font-medium-3"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                                    </span>
                                    <span class="bs-stepper-label">
                                        <span class="bs-stepper-title">Address</span>
                                        <span class="bs-stepper-subtitle">Add Address</span>
                                    </span>
                                </button>
                            </div>
                            <div class="line">
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right font-medium-2"><polyline points="9 18 15 12 9 6"></polyline></svg>
                            </div>
                            <div class="step" data-target="#social-links-modern" role="tab" id="social-links-modern-trigger">
                                <button type="button" class="step-trigger" aria-selected="false">
                                    <span class="bs-stepper-box">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-link font-medium-3"><path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"></path><path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"></path></svg>
                                    </span>
                                    <span class="bs-stepper-label">
                                        <span class="bs-stepper-title">Social Links</span>
                                        <span class="bs-stepper-subtitle">Add Social Links</span>
                                    </span>
                                </button>
                            </div>
                        </div>
                        <div class="bs-stepper-content">
                            <div id="account-details-modern" class="content active dstepper-block" role="tabpanel" aria-labelledby="account-details-modern-trigger">
                                <div class="content-header">
                                    <h5 class="mb-0">Account Details</h5>
                                    <small class="text-muted">Enter Your Account Details.</small>
                                    <img class="coip-logo dossier-logo" src="https://res.cloudinary.com/dy6vgsgr8/image/upload/v1639397584/Group_1_sfcyrg.svg" width="250">
                                </div>
                                <div class="row">
                                    <div class="card dossier1" id="dossier1">
                                        <div class="card-body">
                                            <div class="user-avatar-section">
                                                <div class="d-flex align-items-center flex-column">
                                                    <img class="img-fluid rounded mt-3 mb-2" src="../../../app-assets/images/portrait/small/avatar-s-2.jpg" height="110" width="110" alt="User avatar">
                                                    <div class="user-info text-center">
                                                        <h4>Gertrude Barton</h4>
                                                        <span class="badge bg-light-secondary">Author</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-around my-2 pt-75">
                                                <div class="d-flex align-items-start me-2">
                                            <span class="badge bg-light-primary p-75 rounded">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check font-medium-2"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                            </span>
                                                    <div class="ms-75">
                                                        <h4 class="mb-0">1.23k</h4>
                                                        <small>Tasks Done</small>
                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-start">
                                            <span class="badge bg-light-primary p-75 rounded">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-briefcase font-medium-2"><rect x="2" y="7" width="20" height="14" rx="2" ry="2"></rect><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path></svg>
                                            </span>
                                                    <div class="ms-75">
                                                        <h4 class="mb-0">568</h4>
                                                        <small>Projects Done</small>
                                                    </div>
                                                </div>
                                            </div>
                                            <h4 class="fw-bolder border-bottom pb-50 mb-1">Details</h4>
                                            <div class="info-container">
                                                <ul class="list-unstyled">
                                                    <li class="mb-75">
                                                        <span class="fw-bolder me-25">Username:</span>
                                                        <span>violet.dev</span>
                                                    </li>
                                                    <li class="mb-75">
                                                        <span class="fw-bolder me-25">Billing Email:</span>
                                                        <span>vafgot@vultukir.org</span>
                                                    </li>
                                                    <li class="mb-75">
                                                        <span class="fw-bolder me-25">Status:</span>
                                                        <span class="badge bg-light-success">Active</span>
                                                    </li>
                                                    <li class="mb-75">
                                                        <span class="fw-bolder me-25">Role:</span>
                                                        <span>Author</span>
                                                    </li>
                                                    <li class="mb-75">
                                                        <span class="fw-bolder me-25">Tax ID:</span>
                                                        <span>Tax-8965</span>
                                                    </li>
                                                    <li class="mb-75">
                                                        <span class="fw-bolder me-25">Contact:</span>
                                                        <span>+1 (609) 933-44-22</span>
                                                    </li>
                                                    <li class="mb-75">
                                                        <span class="fw-bolder me-25">Language:</span>
                                                        <span>English</span>
                                                    </li>
                                                    <li class="mb-75">
                                                        <span class="fw-bolder me-25">Country:</span>
                                                        <span>Wake Island</span>
                                                    </li>
                                                </ul>
                                                <div class="d-flex justify-content-center pt-2">

                                                    <a  id="downloadDossier" class="btn btn-outline-danger suspend-user waves-effect ">Telechargé Dossier <i data-feather='download-cloud'></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="d-flex justify-content-between">
                                     <div></div>
                                    <button class="btn btn-primary btn-next waves-effect waves-float waves-light">
                                        <span class="align-middle d-sm-inline-block d-none">Next</span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right align-middle ms-sm-25 ms-0"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                                    </button>
                                </div>
                            </div>
                            <div id="personal-info-modern" class="content" role="tabpanel" aria-labelledby="personal-info-modern-trigger">
                                <div class="content-header">
                                    <h5 class="mb-0">Personal Info</h5>
                                    <small>Enter Your Personal Info.</small>
                                </div>
                                <div class="row">
                                    <div class="mb-1 col-md-6">
                                        <label class="form-label" for="modern-first-name">First Name</label>
                                        <input type="text" id="modern-first-name" class="form-control" placeholder="John">
                                    </div>
                                    <div class="mb-1 col-md-6">
                                        <label class="form-label" for="modern-last-name">Last Name</label>
                                        <input type="text" id="modern-last-name" class="form-control" placeholder="Doe">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="mb-1 col-md-6">
                                        <label class="form-label" for="modern-country">Country</label>
                                        <div class="position-relative"><select class="select2 w-100 select2-hidden-accessible" id="modern-country" data-select2-id="modern-country" tabindex="-1" aria-hidden="true">
                                                <option label=" " data-select2-id="8"></option>
                                                <option>UK</option>
                                                <option>USA</option>
                                                <option>Spain</option>
                                                <option>France</option>
                                                <option>Italy</option>
                                                <option>Australia</option>
                                            </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="7" style="width: auto;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-modern-country-container"><span class="select2-selection__rendered" id="select2-modern-country-container" role="textbox" aria-readonly="true"><span class="select2-selection__placeholder">Select value</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span></div>
                                    </div>
                                    <div class="mb-1 col-md-6">
                                        <label class="form-label" for="modern-language">Language</label>
                                        <div class="position-relative"><select class="select2 w-100 select2-hidden-accessible" id="modern-language" multiple="" data-select2-id="modern-language" tabindex="-1" aria-hidden="true">
                                                <option>English</option>
                                                <option>French</option>
                                                <option>Spanish</option>
                                            </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="9" style="width: auto;"><span class="selection"><span class="select2-selection select2-selection--multiple" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1" aria-disabled="false"><ul class="select2-selection__rendered"><li class="select2-search select2-search--inline"><input class="select2-search__field" type="search" tabindex="0" autocomplete="off" autocorrect="off" autocapitalize="none" spellcheck="false" role="searchbox" aria-autocomplete="list" placeholder="Select value" style="width: 0px;"></li></ul></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span></div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <button class="btn btn-primary btn-prev waves-effect waves-float waves-light">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left align-middle me-sm-25 me-0"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>
                                        <span class="align-middle d-sm-inline-block d-none">Previous</span>
                                    </button>
                                    <button class="btn btn-primary btn-next waves-effect waves-float waves-light">
                                        <span class="align-middle d-sm-inline-block d-none">Next</span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right align-middle ms-sm-25 ms-0"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                                    </button>
                                </div>
                            </div>
                            <div id="address-step-modern" class="content" role="tabpanel" aria-labelledby="address-step-modern-trigger">
                                <div class="content-header">
                                    <h5 class="mb-0">Address</h5>
                                    <small>Enter Your Address.</small>
                                </div>
                                <div class="row">
                                    <div class="mb-1 col-md-6">
                                        <label class="form-label" for="modern-address">Address</label>
                                        <input type="text" id="modern-address" class="form-control" placeholder="98  Borough bridge Road, Birmingham">
                                    </div>
                                    <div class="mb-1 col-md-6">
                                        <label class="form-label" for="modern-landmark">Landmark</label>
                                        <input type="text" id="modern-landmark" class="form-control" placeholder="Borough bridge">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="mb-1 col-md-6">
                                        <label class="form-label" for="pincode3">Pincode</label>
                                        <input type="text" id="pincode3" class="form-control" placeholder="658921">
                                    </div>
                                    <div class="mb-1 col-md-6">
                                        <label class="form-label" for="city3">City</label>
                                        <input type="text" id="city3" class="form-control" placeholder="Birmingham">
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <button class="btn btn-primary btn-prev waves-effect waves-float waves-light">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left align-middle me-sm-25 me-0"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>
                                        <span class="align-middle d-sm-inline-block d-none">Previous</span>
                                    </button>
                                    <button class="btn btn-primary btn-next waves-effect waves-float waves-light">
                                        <span class="align-middle d-sm-inline-block d-none">Next</span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right align-middle ms-sm-25 ms-0"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                                    </button>
                                </div>
                            </div>
                            <div id="social-links-modern" class="content" role="tabpanel" aria-labelledby="social-links-modern-trigger">
                                <div class="content-header">
                                    <h5 class="mb-0">Social Links</h5>
                                    <small>Enter Your Social Links.</small>
                                </div>
                                <div class="row">
                                    <div class="mb-1 col-md-6">
                                        <label class="form-label" for="modern-twitter">Twitter</label>
                                        <input type="text" id="modern-twitter" class="form-control" placeholder="https://twitter.com/abc">
                                    </div>
                                    <div class="mb-1 col-md-6">
                                        <label class="form-label" for="modern-facebook">Facebook</label>
                                        <input type="text" id="modern-facebook" class="form-control" placeholder="https://facebook.com/abc">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="mb-1 col-md-6">
                                        <label class="form-label" for="modern-google">Google+</label>
                                        <input type="text" id="modern-google" class="form-control" placeholder="https://plus.google.com/abc">
                                    </div>
                                    <div class="mb-1 col-md-6">
                                        <label class="form-label" for="modern-linkedin">Linkedin</label>
                                        <input type="text" id="modern-linkedin" class="form-control" placeholder="https://linkedin.com/abc">
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <button class="btn btn-primary btn-prev waves-effect waves-float waves-light">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left align-middle me-sm-25 me-0"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>
                                        <span class="align-middle d-sm-inline-block d-none">Previous</span>
                                    </button>
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
