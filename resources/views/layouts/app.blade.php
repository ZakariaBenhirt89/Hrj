<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="theme-color" content="#526484">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="icon" href="{{ asset('assets/images/rename.svg') }}">
        <title>{{ config('app.name', 'SARP hrj') }}</title>
        <link
            href="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.css"
            rel="stylesheet"
        />
        <link href="https://unpkg.com/filepond-plugin-image-edit/dist/filepond-plugin-image-edit.css"
            rel="stylesheet"/>
        <link href="https://unpkg.com/filepond/dist/filepond.css" rel="stylesheet">


        <!-- Fonts -->

        <!-- Styles -->


        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600" rel="stylesheet">

        <!-- BEGIN: Vendor CSS-->
        <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/vendors.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/charts/apexcharts.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/extensions/toastr.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/forms/select/select2.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/tables/datatable/dataTables.bootstrap5.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/tables/datatable/responsive.bootstrap5.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/tables/datatable/buttons.bootstrap5.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/tables/datatable/rowGroup.bootstrap5.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/pickers/flatpickr/flatpickr.min.css') }}">
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/2.1.0/css/buttons.dataTables.min.css">
        <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/forms/wizard/bs-stepper.min.css') }}">

        <!-- END: Vendor CSS-->
        <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/core/menu/menu-types/vertical-menu.css') }}">

        <!-- BEGIN: Theme CSS-->
        <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/bootstrap.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/bootstrap-extended.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/colors.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/components.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/themes/dark-layout.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/themes/bordered-layout.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/themes/semi-dark-layout.css') }}">

        <!-- BEGIN: Page CSS-->
        <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/pickers/pickadate/pickadate.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/pickers/flatpickr/flatpickr.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/plugins/forms/pickers/form-flat-pickr.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/plugins/forms/pickers/form-pickadate.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/forms/select/select2.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/core/menu/menu-types/vertical-menu.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/plugins/forms/form-validation.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/core/menu/menu-types/vertical-menu.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/pages/dashboard-ecommerce.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/plugins/charts/chart-apex.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/plugins/extensions/ext-component-toastr.css') }}">
        <!-- END: Page CSS-->
        <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/plugins/forms/form-validation.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/plugins/forms/form-wizard.css') }}">
        <script src="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.js"></script>
        <!-- StyleSheets  -->
        <script src="https://unpkg.com/filepond-plugin-image-crop/dist/filepond-plugin-image-crop.js"></script>
        <script src="https://unpkg.com/filepond-plugin-file-validate-type/dist/filepond-plugin-file-validate-type.js"></script>
        <script src="https://unpkg.com/filepond-plugin-image-exif-orientation/dist/filepond-plugin-image-exif-orientation.js"></script>
        <script src="https://unpkg.com/filepond-plugin-image-resize/dist/filepond-plugin-image-resize.js"></script>
        <script src="https://unpkg.com/filepond-plugin-image-transform/dist/filepond-plugin-image-transform.js"></script>
        <script src="https://unpkg.com/filepond-plugin-image-edit/dist/filepond-plugin-image-edit.js"></script>
        <script src="{{ asset('app-assets/vendors/js/forms/select/select2.full.min.js') }}"></script>
        <link
            href="https://unpkg.com/filepond-plugin-image-edit/dist/filepond-plugin-image-edit.css"
            rel="stylesheet"
        />

        <link href="https://unpkg.com/filepond@^4/dist/filepond.css" rel="stylesheet" />
        <script src="https://unpkg.com/filepond@^4/dist/filepond.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>



        <!-- Scripts -->
        <link
            href="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.css"
            rel="stylesheet"
        />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/instantsearch.css@7.1.0/themes/algolia.css" />


        <!-- add before </body> -->

        <script src="{{ mix('js/app.js') }}" defer></script>
        <script src="{{ asset('js/buttonComp.js') }}" defer></script>
        <script src="{{ asset('app-assets/vendors/js/forms/validation/jquery.validate.min.js') }}"></script>
        <script async src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBNlBv0dK-iotdgWbs9-CJzVWFZ1zwwFqM&libraries=places&callback=initMap"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/2.0.8/clipboard.min.js"></script>

    </head>
    <body class="vertical-layout vertical-menu-modern  navbar-floating footer-static" data-open="click" data-menu="vertical-menu-modern" data-col="">

    <!-- BEGIN: Header-->
    <nav class="header-navbar navbar navbar-expand-lg align-items-center floating-nav navbar-light navbar-shadow container-xxl">
        <div class="navbar-container d-flex content">
            <div class="bookmark-wrapper d-flex align-items-center">
                <ul class="nav navbar-nav d-xl-none">
                    <li class="nav-item"><a class="nav-link menu-toggle" href="#"><i class="ficon" data-feather="menu"></i></a></li>
                </ul>
                 <img class="coip-logo" src="" height="60" width="120" alt="coip-logo">
            </div>
            <ul class="nav navbar-nav align-items-center ms-auto">
                <li class="nav-item dropdown dropdown-language"><a class="nav-link dropdown-toggle" id="dropdown-flag" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="flag-icon flag-icon-fr"></i><span class="selected-language">Français</span></a>
                </li>
                <li class="nav-item d-none d-lg-block"><a class="nav-link nav-link-style"><i class="ficon" data-feather="moon"></i></a></li>
                <li class="nav-item nav-search"><a class="nav-link nav-link-search"><i class="ficon" data-feather="search"></i></a>
                    <div class="search-input">
                        <div class="search-input-icon"><i data-feather="search"></i></div>
                        <input class="form-control input" type="text" placeholder="Explore SARP..." tabindex="-1" data-search="search">
                        <div class="search-input-close"><i data-feather="x"></i></div>
                        <ul class="search-list search-list-main"></ul>
                    </div>
                </li>

                <li class="nav-item dropdown dropdown-user"><a class="nav-link dropdown-toggle dropdown-user-link" id="dropdown-user" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="user-nav d-sm-flex d-none"><span class="user-name fw-bolder"> {{ Auth::user()->name }}
                            </span><span class="user-status">
                                @switch( Auth::user()->center)
                                    @case( "BN" )
                                    Bèlveder
                                    @break
                                    @case( "SM" )
                                    Sidi Maarouf
                                    @break
                                    @case( "MK" )
                                    Mkansaa
                                    @break
                                    @case( "PJN" )
                                    PJN
                                    @break
                                    @case( "BO" )
                                    Bouskoura
                                    @break
                                    @default
                                @endswitch
                                @if(Auth::user()->is_res)
                                    Responsable
                                @elseif(Auth::user()->is_super)
                                    Super
                                @else
                                    Admin
                                @endif
                            </span></div><span class="avatar">@if(Auth::user()->profile_photo_path !== null) <img class="round" src="{{ Auth::user()->profile_photo_path }}" alt="avatar" height="40" width="40"> @else <img class="round" src="https://res.cloudinary.com/dy6vgsgr8/image/upload/v1638950709/Teamwork_ycjdaz.png" alt="avatar" height="40" width="40">  @endif<span class="avatar-status-online"></span></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdown-user">
                        <div class="dropdown-divider"></div><form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                this.closest('form').submit();" >
                                <i class="me-50" data-feather="power"></i> Logout
                            </a>
                        </form>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
    <ul class="main-search-list-defaultlist d-none">
    </ul>
    <ul class="main-search-list-defaultlist-other-list d-none">

    </ul>
    <!-- END: Header-->


    <!-- BEGIN: Main Menu-->
    <div class="main-menu menu-fixed menu-light menu-accordion menu-shadow content-right" data-scroll-to-active="true">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item me-auto"><a class="navbar-brand" href="{{ route('center.dashboard' , ['center' => Auth::user()->center]) }}"><span class="brand-logo">
<svg  height="24" viewBox="0 0 135 95" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg">
  <defs>
    <path d="M0 0L135 0L135 95L0 95L0 0Z" id="path_1" />
    <clipPath id="mask_1">
      <use xlink:href="#path_1" />
    </clipPath>
  </defs>
  <g id="svg">
    <path d="M0 0L135 0L135 95L0 95L0 0Z" id="Background" fill="none" fill-rule="evenodd" stroke="none" />
    <g clip-path="url(#mask_1)">
      <g id="Group">
        <path d="M71.1404 0.0248278L75.2738 0.524482C76.1903 0.636247 76.9419 1.1096 77.2168 1.74732L87.729 26.3159C88.0498 27.0588 89.003 27.565 90.0844 27.5584L121.089 27.5124C121.978 27.5124 122.794 27.8543 123.234 28.4065L124.755 30.3328C125.681 31.5031 124.508 32.9626 122.629 32.9691L85.1353 33.0546C84.0356 33.0546 83.0641 32.5352 82.7616 31.7792L75.448 13.4432C74.7881 11.7799 71.5162 11.7273 70.7555 13.3709L55.2484 46.6044C54.7168 47.7484 52.7738 48.1823 51.4266 47.446L38.4582 40.3719C36.5702 39.3397 37.615 37.1768 39.9887 37.203L49.8777 37.3214C50.95 37.3345 51.9123 36.848 52.2514 36.1117L68.4001 1.20164C68.7759 0.379845 69.9398 -0.119809 71.1404 0.0248278L71.1404 0.0248278L71.1404 0.0248278Z" id="Shape" fill="#F3C538" fill-rule="evenodd" stroke="none" />
        <path d="M134.333 38.7743L134.929 41.7525C135.057 42.41 134.663 43.074 133.893 43.4487L104.455 58.0965C103.566 58.5369 103.181 59.3456 103.511 60.0819L112.988 81.2582C113.263 81.863 113.052 82.527 112.456 82.9938L110.366 84.6177C109.092 85.6104 106.801 85.2488 106.224 83.9603L94.7218 58.3594C94.3827 57.6099 94.786 56.7882 95.7025 56.3477L117.836 45.7826C119.843 44.8228 118.926 42.5743 116.507 42.5546L67.6394 42.0549C65.9531 42.0352 64.7983 40.8387 65.3574 39.7013L70.8105 28.6892C71.6079 27.085 74.7973 27.1376 75.4846 28.7747L78.335 35.5726C78.6466 36.3089 79.5814 36.8217 80.6629 36.8283L131.932 37.2622C133.141 37.2688 134.159 37.9131 134.333 38.7743L134.333 38.7743L134.333 38.7743Z" id="Shape#1" fill="#419C47" fill-rule="evenodd" stroke="none" />
        <path d="M102.631 93.3683L98.901 94.7423C98.0762 95.0448 97.0772 94.9922 96.3257 94.5977L67.4378 79.3977C66.5671 78.9375 65.3757 78.9441 64.5142 79.4043L39.6863 92.724C38.9806 93.1053 38.0366 93.1842 37.2209 92.9278L34.3981 92.0403C32.6751 91.4946 32.4093 89.8247 33.9123 89.0161L63.9093 72.8825C64.7891 72.4091 65.9989 72.4157 66.8787 72.8891L88.0132 84.4666C89.9286 85.5185 92.5956 84.1642 91.844 82.514L76.5936 49.2014C76.0712 48.0509 77.2718 46.874 78.949 46.8872L95.2442 47.0055C97.6179 47.0253 98.5803 49.208 96.6556 50.2007L88.6272 54.3426C87.7565 54.7896 87.3899 55.5983 87.729 56.328L103.85 91.2448C104.226 92.0731 103.713 92.9738 102.631 93.3683L102.631 93.3683L102.631 93.3683Z" id="Shape#2" fill="#46A0D4" fill-rule="evenodd" stroke="none" />
        <path d="M19.9358 89.1672L16.9572 87.0502C16.2973 86.5835 16.059 85.8866 16.3523 85.2489L27.4786 60.8183C27.8177 60.0819 27.4419 59.2733 26.5529 58.8262L1.16595 46.0588C0.441921 45.6906 0.0478272 45.0792 0.130311 44.4415L0.432756 42.239C0.616055 40.8979 2.74233 40.1944 4.29121 40.9636L35.0122 56.3871C35.9103 56.8408 36.2861 57.6691 35.9287 58.412L27.1853 76.426C26.3879 78.063 29.0183 79.4502 30.9613 78.4246L70.3248 57.6494C71.6812 56.9328 73.615 57.3864 74.1283 58.537L79.059 69.6741C79.7739 71.298 77.1894 72.6326 75.2647 71.6333L67.2729 67.452C66.4022 66.9983 65.2291 66.9983 64.3584 67.4585L23.1344 89.3316C22.1537 89.8509 20.7973 89.7786 19.9358 89.1672L19.9358 89.1672L19.9358 89.1672Z" id="Shape#3" fill="#C33C52" fill-rule="evenodd" stroke="none" />
        <path d="M0.258565 31.1349L2.12822 28.446C2.54064 27.8477 3.39298 27.4729 4.31864 27.4664L40.1445 27.4138C41.226 27.4138 42.1791 26.901 42.4907 26.1581L51.4724 4.87015C51.729 4.25873 52.4255 3.79853 53.2871 3.66046L56.2932 3.17396C58.1262 2.87811 59.73 4.1141 59.1893 5.40268L48.3746 31.1546C48.0539 31.9107 47.0824 32.4235 45.9826 32.4103L19.395 32.0816C16.9846 32.0487 15.9581 34.2774 17.9286 35.2833L57.7321 55.6179C59.1068 56.3214 59.1068 57.7809 57.7412 58.4844L44.5253 65.3217C42.6007 66.3212 40.0162 64.9733 40.7494 63.3494L43.8013 56.5975C44.1313 55.8612 43.7555 55.0591 42.8848 54.6186L1.03758 33.357C0.0477702 32.8574 -0.282168 31.9107 0.258565 31.1349L0.258565 31.1349L0.258565 31.1349Z" id="Shape#4" fill="#DB682C" fill-rule="evenodd" stroke="none" />
      </g>
    </g>
  </g>
</svg>
                        </span>
                        <h1 class="brand-text">SARP
                            @if(Auth::user()->is_super)
                                <sub>Super Admin</sub>
                            @else
                            @switch( Auth::user()->center)
                                @case( "BN" )
                                <sub>Bèlveder</sub>
                                @break
                                @case( "SM" )
                                <sub>Sidi Maarouf</sub>
                                @break
                                @case( "MK" )
                                <sub>Mkansaa</sub>
                                @break
                                @case( "PJN" )
                                <sub>PJN</sub>
                                @break
                                    @case( "BO" )
                                    <sub>Bouskoura</sub>
                                    @break
                                @default
                            @endswitch
                            @endif
                        </h1>

                    </a></li>
                <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pe-0" data-bs-toggle="collapse"><i class="d-block d-xl-none text-primary toggle-icon font-medium-4" data-feather="x"></i><i class="d-none d-xl-block collapse-toggle-icon font-medium-4  text-primary" data-feather="disc" data-ticon="disc"></i></a></li>
            </ul>
        </div>
        <div class="shadow-bottom"></div>
        <div class="main-menu-content ">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                <li class=" nav-item"><a class="d-flex align-items-center" href="{{ route('center.dashboard' , Auth::user()->center) }}"><i data-feather="home"></i><span class="menu-title text-truncate" data-i18n="Dashboards">Dashboards</span></a>
                    <ul class="menu-content">

                    </ul>
                </li>
                <hr>
                @if( Auth::user()->is_res)
                <li><a class="d-flex align-items-center holla" href="{{ route('indexMobi') }}"><img class="sideIcon" src="{{ asset('app-assets/icons/social-svgrepo-com.svg') }}" alt="icon" height="20" width="20"> <span class="menu-item text-truncate" data-i18n="Analytics" >Mobilisation</span></a>
                </li>
                    <li ><a class="d-flex align-items-center holla" href="{{ route('ficheAcc') }}"><img class="sideIcon" src="{{ asset('app-assets/icons/welcome-svgrepo-com.svg') }}" alt="icon" height="20" width="20"><span class="menu-item text-truncate" data-i18n="eCommerce">Acceuil</span></a>
                    </li>
                @elseif(Auth::user()->is_super)
                    <li ><a class="d-flex align-items-center holla" href="#"><img class="sideIcon" src="{{ asset('app-assets/icons/wheel.svg') }}" alt="icon" height="20" width="20"><span class="menu-item text-truncate" data-i18n="eCommerce">Les admins des centres</span></a>
                    </li>
                @else
                    <li><a class="d-flex align-items-center holla" href="{{ route('indexMobi') }}"><img class="sideIcon" src="{{ asset('app-assets/icons/social-svgrepo-com.svg') }}" alt="icon" height="20" width="20"> <span class="menu-item text-truncate" data-i18n="Analytics" >Mobilisation</span></a>
                    </li>
                    <li ><a class="d-flex align-items-center holla" href="{{ route('ficheAcc') }}"><img class="sideIcon" src="{{ asset('app-assets/icons/welcome-svgrepo-com.svg') }}" alt="icon" height="20" width="20"><span class="menu-item text-truncate" data-i18n="eCommerce">Acceuil</span></a>
                    </li>

                <li ><a class="d-flex align-items-center holla" href="{{ route('admin.orientation.go') }}"><img class="sideIcon" src="{{ asset('app-assets/icons/directions-svgrepo-com.svg') }}" alt="icon" height="20" width="20"><span class="menu-item text-truncate" data-i18n="eCommerce">Orientation</span></a>
                </li>
                <li ><a class="d-flex align-items-center holla" href="{{ route('admin.rfc.go') }}"><img class="sideIcon" src="{{ asset('app-assets/icons/reinforcement.svg') }}" alt="icon" height="20" width="20"><span class="menu-item text-truncate" data-i18n="eCommerce">RFC</span></a>
                </li>
                <li ><a class="d-flex align-items-center holla" href="{{ route('admin.placement.go') }}"><img class="sideIcon" src="{{ asset('app-assets/icons/rating-graphic-svgrepo-com.svg') }}" alt="icon" height="20" width="20"><span class="menu-item text-truncate" data-i18n="eCommerce">Placement</span></a>
                </li>
                <li ><a class="d-flex align-items-center holla" href="{{ route('admin.suivi.go') }}"><img class="sideIcon" src="{{ asset('app-assets/icons/train-track-svgrepo-com.svg') }}" alt="icon" height="30" width="30"><span class="menu-item text-truncate" data-i18n="eCommerce">Suivi</span></a>
                </li>
                <li ><a class="d-flex align-items-center holla" href="{{route('admin.data.go')}}"><img class="sideIcon" src="{{ asset('app-assets/icons/all.svg') }}" alt="icon" height="30" width="30"><span class="menu-item text-truncate" data-i18n="eCommerce">Tous les données</span></a>
                </li>

                <li ><a class="d-flex align-items-center holla" href="{{ route('admin.administration.go') }}"><img class="sideIcon" src="{{ asset('app-assets/icons/partner.svg') }}" alt="icon" height="30" width="30"><span class="menu-item text-truncate" data-i18n="eCommerce">Administration</span></a>
                </li>
                <li ><a class="d-flex align-items-center holla" href="{{ route('admin.charge.go') }}"><img class="sideIcon" src="{{ asset('app-assets/icons/person.svg') }}" alt="icon" height="30" width="30"><span class="menu-item text-truncate" data-i18n="eCommerce">Chargé d’accompagnement</span></a>
                </li>
                @endif
                <li class=" nav-item">
                    <hr>
                    <img class="coip-logo" src="https://res.cloudinary.com/dy6vgsgr8/image/upload/v1639577068/Sans_titre_500_x_250_px_gflzv8.png" width="250">
                </li>


            </ul>
        </div>
    </div>
    <!-- END: Main Menu-->

    <!-- BEGIN: Content-->
    {{ $slot }}
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Footer-->
    <footer class="footer footer-static footer-light">
        <p class="clearfix mb-0"><span class="float-md-start d-block d-md-inline-block mt-25">COPYRIGHT &copy; 2021-2022<a class="ms-25" href="#" target="_blank">SARP by AOBC</a><span class="d-none d-sm-inline-block">, All rights Reserved</span></span><span class="float-md-end d-none d-md-block">Hand-crafted & Made with<i data-feather="heart"></i> By AOBC labs</span></p>
    </footer>
    <button class="btn btn-primary btn-icon scroll-top" type="button"><i data-feather="arrow-up"></i></button>
    <!-- END: Footer-->

    <style>
        .sideIcon{
            margin-right: 15.4px;
        }
        .vertical-layout.vertical-menu-modern.menu-expanded .main-menu .navigation li.has-sub > a:after {
            display: none;
        }
    </style>
    <!-- BEGIN: Vendor JS-->
    <!-- BEGIN: Vendor JS-->
    <script src="{{ asset('app-assets/vendors/js/vendors.min.js') }}"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="{{ asset('app-assets/vendors/js/forms/select/select2.full.min.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/tables/datatable/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/tables/datatable/dataTables.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/tables/datatable/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/tables/datatable/responsive.bootstrap5.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/tables/datatable/datatables.buttons.min.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/tables/datatable/jszip.min.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/tables/datatable/pdfmake.min.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/tables/datatable/vfs_fonts.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/tables/datatable/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/tables/datatable/buttons.print.min.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/tables/datatable/dataTables.rowGroup.min.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/forms/cleave/cleave.min.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/forms/cleave/addons/cleave-phone.us.js') }}"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="{{ asset('app-assets/js/core/app-menu.js') }}"></script>
    <script src="{{ asset('app-assets/js/core/app.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/pickers/pickadate/picker.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/pickers/pickadate/picker.date.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/pickers/pickadate/picker.time.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/pickers/pickadate/legacy.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/pickers/flatpickr/flatpickr.min.js') }}"></script>
    <script src="{{ asset('app-assets/js/scripts/forms/pickers/form-pickers.js') }}"></script>
    <script src="{{ asset('app-assets/js/scripts/components/components-popovers.js') }}"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->


    <!-- END: Page JS-->
    <script>

        $(window).on('load', function() {

            if (feather) {
                feather.replace({
                    width: 14,
                    height: 14
                });
            }
            if (localStorage.getItem('theme') === 'dark'){
                $('.nav-link-style').click()
            }
            checkDark()
            const length = $('.holla').length
            $('.numberOf').text(length)
        })
        function checkDark(){
            const listClass = document.querySelector('html').classList
            console.dir(listClass)
            if(listClass.contains('dark-layout')){
                console.log("seems like dar")
                localStorage.setItem('theme' , 'dark')
                $('tr').css('border-top' , 'solid 1px cornsilk')
                $('.coip-title').css('border-bottom-color' , 'cornsilk')
                if (typeof $('.comp-logo') !== undefined && $('.comp-logo') !== null ){
                    $('.comp-logo').attr('src' , 'https://res.cloudinary.com/dy6vgsgr8/image/upload/v1639397584/Group_1_sfcyrg.svg')
                    $('.coip-logo').attr('src' , 'https://res.cloudinary.com/dy6vgsgr8/image/upload/v1639397584/Group_1_sfcyrg.svg')
                }

            }else {
                console.log("noop look light")
                localStorage.setItem('theme' , 'light')
                if (typeof $('.comp-logo') !== undefined && $('.comp-logo') !== null ){
                    $('.comp-logo').attr('src' , 'https://res.cloudinary.com/dy6vgsgr8/image/upload/v1639399302/Group_2_obm2zi.svg')
                    $('.coip-logo').attr('src' , 'https://res.cloudinary.com/dy6vgsgr8/image/upload/v1639399302/Group_2_obm2zi.svg')
                }
                $('tr').css('border-top' , 'solid 1px #685ed9')
                $('.coip-title').css('border-bottom-color' , ' #685ed9')
            }
        }
        $('.nav-link-style').on('click' , function (evt) {
            checkDark()
        })
        $(document).on('scroll', function (evt) {
            evt.preventDefault()
            if (document.documentElement.scrollTop === 0){
                $('nav').css('background-color' , '')
            }else {
                $('nav').css('background-color' , '#00000000')
            }


        })
    </script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/scriptjs@2.5.9/dist/script.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/algoliasearch@4/dist/algoliasearch-lite.umd.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/places.js@^1.17.0"></script>
    <script src="https://cdn.jsdelivr.net/npm/instantsearch.js@4"></script>
    <script src="{{ asset('app-assets/vendors/js/charts/chart.min.js') }}"></script>
    <script src="//cdn.rawgit.com/rainabba/jquery-table2excel/1.1.0/dist/jquery.table2excel.min.js"></script>

    <script>

    </script>

    </body>
</html>
