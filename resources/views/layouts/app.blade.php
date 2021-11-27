<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="theme-color" content="#526484">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="icon" href="{{ asset('favicon.ico') }}">
        <title>{{ config('app.name', 'SARP hrj') }}</title>
        <link href="https://unpkg.com/filepond/dist/filepond.css" rel="stylesheet">
        <link
            href="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.css"
            rel="stylesheet"
        />

        <!-- Fonts -->

        <!-- Styles -->
        @livewireStyles
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
       <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/2.0.1/js/dataTables.buttons.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
        <script src="https://cdn.datatables.net/buttons/2.0.1/js/buttons.html5.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/2.0.1/js/buttons.print.min.js"></script>

        <!-- Scripts -->
        <!-- Scripts -->
        <!-- StyleSheets  -->
        <link rel="stylesheet" href="{{ asset('assets/css/dashlite.css?ver=2.8.0') }}">
        <link id="skin-default" rel="stylesheet" href="{{ asset('assets/css/theme.css?ver=2.8.0') }}">
        <script src="{{ mix('js/app.js') }}" defer></script>

    </head>
    <body class="font-sans antialiased">
        <x-jet-banner />

        <div class="min-h-screen bg-gray-100">


            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                <div class="nk-app-root">
                    <!-- main @s -->
                    <div class="nk-main ">
                        <!-- sidebar @s -->
                        <div class="nk-sidebar nk-sidebar-fixed is-dark " data-content="sidebarMenu">
                            <div class="nk-sidebar-element nk-sidebar-head">
                                <div class="nk-menu-trigger mr-n2">
                                    <a href="#" class="nk-nav-toggle nk-quick-nav-icon d-xl-none" data-target="sidebarMenu"><em class="icon ni ni-arrow-left"></em></a>
                                </div>
                                <div class="nk-sidebar-brand" style="width:100%">
                                    <a href="#" class="logo-link nk-sidebar-logo">
                                        <img class="logo-light logo-img" src="{{ asset('assets/images/logo_BN.svg') }}" srcset="{{ asset('assets/images/logo_BN.svg') }} 2x" alt="logo" width="300">
                                    </a>
                                </div>
                            </div><!-- .nk-sidebar-element -->
                            <div class="nk-sidebar-element">
                                <div class="nk-sidebar-content">
                                    <div class="nk-sidebar-menu" data-simplebar>
                                        <ul class="nk-menu">
                                            <li class="nk-menu-item">
                                                <a href="{{ route('center.dashboard', ['center' => Auth::user()->center]) }}" class="nk-menu-link">
                                                    <span class="nk-menu-icon"><svg width="309" height="273" viewBox="0 0 309 273" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M162.886 0.0695738L172.349 1.50417C174.442 1.83208 176.17 3.1847 176.807 5.00869L200.874 75.6523C201.602 77.7837 203.785 79.2388 206.265 79.2388L277.258 79.1159C279.283 79.1159 281.171 80.0996 282.172 81.6776L285.652 87.2111C287.79 90.5926 285.083 94.7735 280.784 94.794L194.914 95.0399C192.389 95.0399 190.183 93.5438 189.477 91.3714L172.736 38.6397C171.212 33.8441 163.75 33.7006 161.976 38.4348L126.514 134.02C125.285 137.32 120.85 138.549 117.779 136.438L88.0939 116.108C83.772 113.136 86.1604 106.927 91.597 107.009L114.253 107.357C116.71 107.398 118.916 105.984 119.69 103.893L156.653 3.49211C157.495 1.09429 160.156 -0.340311 162.886 0.0695738Z" fill="#808C8F"/>
<path d="M307.58 111.497L308.945 120.043C309.241 121.949 308.331 123.834 306.579 124.921L239.18 167.036C237.155 168.307 236.268 170.623 237.019 172.754L258.72 233.643C259.334 235.385 258.879 237.29 257.491 238.623L252.692 243.295C249.78 246.144 244.525 245.099 243.206 241.41L216.865 167.795C216.092 165.643 217.001 163.265 219.094 162.015L269.775 131.643C274.369 128.876 272.277 122.42 266.749 122.359L154.879 120.904C151.035 120.863 148.374 117.399 149.648 114.141L162.136 82.4771C163.955 77.8659 171.257 78.0298 172.827 82.723L179.355 102.274C180.06 104.406 182.221 105.861 184.678 105.881L302.075 107.132C304.85 107.193 307.193 109.038 307.58 111.497Z" fill="#808C8F"/>
<path d="M234.994 268.503L226.464 272.438C224.576 273.319 222.279 273.155 220.573 272.008L154.424 228.293C152.422 226.982 149.716 226.982 147.737 228.314L90.8918 266.618C89.2768 267.704 87.1158 267.929 85.2506 267.192L78.7904 264.63C74.8552 263.072 74.241 258.256 77.6758 255.94L146.372 209.541C148.396 208.189 151.171 208.189 153.173 209.562L201.533 242.885C205.923 245.918 212.02 242.004 210.291 237.27L175.397 141.48C174.191 138.18 176.944 134.799 180.811 134.819L218.116 135.147C223.552 135.188 225.759 141.48 221.346 144.329L202.944 156.236C200.942 157.527 200.123 159.843 200.896 161.954L237.792 262.375C238.656 264.773 237.474 267.355 234.994 268.503Z" fill="#808C8F"/>
<path d="M45.6687 256.432L38.8446 250.345C37.3206 248.993 36.7974 246.984 37.457 245.16L62.9337 174.906C63.7071 172.795 62.8427 170.459 60.8182 169.188L2.67685 132.462C1.01632 131.417 0.106436 129.634 0.311159 127.81L0.99357 121.477C1.40302 117.624 6.29362 115.596 9.81941 117.809L80.176 162.138C82.2459 163.429 83.0876 165.827 82.2687 167.958L62.2513 219.747C60.4315 224.461 66.4368 228.457 70.8952 225.506L161.019 165.765C164.112 163.716 168.548 165.007 169.708 168.307L180.991 200.339C182.629 205.012 176.692 208.865 172.301 205.975L153.99 193.945C152.011 192.633 149.304 192.654 147.325 193.966L52.9478 256.862C50.7413 258.379 47.625 258.174 45.6687 256.432Z" fill="#808C8F"/>
<path d="M0.586196 89.5269L4.86264 81.8005C5.81801 80.079 7.75151 78.9928 9.88973 78.9928L91.9155 78.8289C94.3949 78.8289 96.5786 77.3533 97.2838 75.2219L117.847 14.0056C118.439 12.2636 120.031 10.9315 122.01 10.5216L128.902 9.12797C133.11 8.2877 136.773 11.8127 135.522 15.5427L110.773 89.6088C110.045 91.7812 107.816 93.2568 105.291 93.2158L44.4197 92.2731C38.8922 92.1911 36.5492 98.5853 41.0531 101.475L132.2 159.945C135.34 161.954 135.362 166.155 132.223 168.184L101.97 187.838C97.5567 190.707 91.6425 186.834 93.3258 182.161L100.286 162.732C101.037 160.621 100.195 158.326 98.1937 157.035L2.38321 95.9211C0.108509 94.4865 -0.642144 91.7607 0.586196 89.5269Z" fill="#808C8F"/>
</svg>
</span>
                                                    <span class="nk-menu-text">Tableau de bord</span>
                                                </a>
                                            </li><!-- .nk-menu-item -->
                                         <!-- .nk-menu-item -->
                                            <li class="nk-menu-heading">
                                                <h6 class="overline-title text-primary-alt">Coip</h6>
                                            </li><!-- .nk-menu-heading -->
                                            <li class="nk-menu-item has-sub">
                                                <a href="#" class="nk-menu-link nk-menu-toggle">
                                                    <span class="nk-menu-icon"><em class="icon ni ni-box"></em></span>
                                                    <span class="nk-menu-text">Mobilisation et Accueil</span>
                                                </a>
                                                <ul class="nk-menu-sub">
                                                    <li class="nk-menu-item">
                                                        <a href="{{ route('indexMobi') }}" class="nk-menu-link"><span class="nk-menu-text">index</span></a>
                                                    </li>
                                                    <li class="nk-menu-item">
                                                        <a href="#" class="nk-menu-link"><span class="nk-menu-text">fiche d'accueil</span></a>
                                                    </li>
                                                </ul><!-- .nk-menu-sub -->
                                            </li><!-- .nk-menu-item -->
                                            <li class="nk-menu-item has-sub">
                                                <a href="#" class="nk-menu-link nk-menu-toggle">
                                                    <span class="nk-menu-icon"><em class="icon ni ni-disk"></em></span>
                                                    <span class="nk-menu-text">Orientation</span>
                                                </a>
                                                <ul class="nk-menu-sub">
                                                    <li class="nk-menu-item">
                                                        <a href="#" class="nk-menu-link"><em class="icon ni ni-property"></em><span class="nk-menu-text"> index</span></a>
                                                    </li>
                                                    <li class="nk-menu-item">
                                                        <a href="#" class="nk-menu-link"><em class="icon ni ni-file-text"></em><span class="nk-menu-text">fiche d'orientation</span></a>
                                                    </li>


                                                </ul><!-- .nk-menu-sub -->
                                            </li><!-- .nk-menu-item -->
                                            <li class="nk-menu-item has-sub">
                                                <a href="#" class="nk-menu-link nk-menu-toggle">
                                                    <span class="nk-menu-icon"><em class="icon ni ni-spark"></em></span>
                                                    <span class="nk-menu-text">RFC</span>
                                                </a>
                                                <ul class="nk-menu-sub">
                                                    <li class="nk-menu-item">
                                                        <a href="#" class="nk-menu-link"><em class="icon ni ni-property"></em><span class="nk-menu-text"> index</span></a>
                                                    </li>
                                                    <li class="nk-menu-item">
                                                        <a href="#" class="nk-menu-link"><em class="icon ni ni-file-text"></em><span class="nk-menu-text">Dossier RFC et Suivi</span></a>
                                                    </li>

                                                </ul><!-- .nk-menu-sub -->
                                            </li><!-- .nk-menu-item -->
                                            <li class="nk-menu-item has-sub">
                                                <a href="#" class="nk-menu-link nk-menu-toggle">
                                                    <span class="nk-menu-icon"><em class="icon ni ni-thumbs-up"></em></span>
                                                    <span class="nk-menu-text">
                                                        Placement
                                                    </span>
                                                </a>
                                                <ul class="nk-menu-sub">
                                                    <li class="nk-menu-item">
                                                        <a href="#" class="nk-menu-link"><em class="icon ni ni-property"></em><span class="nk-menu-text">index</span></a>
                                                    </li>
                                                    <li class="nk-menu-item">
                                                        <a href="#" class="nk-menu-link"><em class="icon ni ni-file-text"></em><span class="nk-menu-text">Fiche Jeune et Suivi</span></a>
                                                    </li>

                                                </ul><!-- .nk-menu-sub -->
                                            </li><!-- .nk-menu-item -->
                                            <li class="nk-menu-item has-sub">
                                                <a href="#" class="nk-menu-link nk-menu-toggle">
                                                    <span class="nk-menu-icon"><em class="icon ni ni-list-check"></em></span>
                                                    <span class="nk-menu-text">
                                                        Suivi
                                                    </span>
                                                </a>
                                                <ul class="nk-menu-sub">
                                                    <li class="nk-menu-item">
                                                        <a href="#" class="nk-menu-link"><em class="icon ni ni-property"></em><span class="nk-menu-text"> Indicateur Suivi</span></a>
                                                    </li>
                                                    <li class="nk-menu-item">
                                                        <a href="#" class="nk-menu-link"><em class="icon ni ni-file-text"></em><span class="nk-menu-text">Fiche  Suivi</span></a>
                                                    </li>
                                                    <li class="nk-menu-item">
                                                        <a href="#" class="nk-menu-link"><em class="icon ni ni-growth"></em><span class="nk-menu-text">visualisation et charts</span></a>
                                                    </li>

                                                </ul><!-- .nk-menu-sub -->
                                            </li><!-- .nk-menu-item -->
                                            <li class="nk-menu-item has-sub">
                                                <a href="#" class="nk-menu-link nk-menu-toggle">
                                                    <span class="nk-menu-icon"><em class="icon ni ni-menu-squared"></em></span>
                                                    <span class="nk-menu-text">
                                                        KPI'S
                                                    </span>
                                                </a>
                                                <ul class="nk-menu-sub">
                                                    <li class="nk-menu-item">
                                                        <a href="#" class="nk-menu-link"><em class="icon ni ni-property"></em><span class="nk-menu-text"> Indicateur Mobilisation</span></a>
                                                    </li>
                                                    <li class="nk-menu-item">
                                                        <a href="#" class="nk-menu-link"><em class="icon ni ni-file-text"></em><span class="nk-menu-text">Indicateur  Accueil</span></a>
                                                    </li>
                                                    <li class="nk-menu-item">
                                                        <a href="#" class="nk-menu-link"><em class="icon ni ni-growth"></em><span class="nk-menu-text">Indicateur Orientation</span></a>
                                                    </li>
                                                    <li class="nk-menu-item">
                                                        <a href="#" class="nk-menu-link"><em class="icon ni ni-growth"></em><span class="nk-menu-text">Indicateur RFC</span></a>
                                                    </li>
                                                    <li class="nk-menu-item">
                                                        <a href="#" class="nk-menu-link"><em class="icon ni ni-growth"></em><span class="nk-menu-text">Indicateur Placement</span></a>
                                                    </li>
                                                    <li class="nk-menu-item">
                                                        <a href="#" class="nk-menu-link"><em class="icon ni ni-growth"></em><span class="nk-menu-text">Indicateur Suivi</span></a>
                                                    </li>

                                                </ul><!-- .nk-menu-sub -->
                                            </li><!-- .nk-menu-item -->

                                            <!-- .nk-menu-item -->
                                            <li class="nk-menu-heading">
                                                <h6 class="overline-title text-primary-alt">Outils</h6>
                                            </li><!-- .nk-menu-heading -->
                                            <li class="nk-menu-item has-sub">
                                                <a href="#" class="nk-menu-link nk-menu-toggle">
                                                    <span class="nk-menu-icon"><em class="icon ni ni-comments"></em></span>
                                                    <span class="nk-menu-text">Messages</span>
                                                </a>
                                                <ul class="nk-menu-sub">
                                                    <li class="nk-menu-item">
                                                        <a href="#" class="nk-menu-link" ><span class="nk-menu-text">Messages Super Admin</span></a>
                                                    </li>
                                                    <li class="nk-menu-item">
                                                        <a href="#" class="nk-menu-link" ><span class="nk-menu-text">Messages Entre Admin</span></a>
                                                    </li>

                                                </ul><!-- .nk-menu-sub -->
                                            </li><!-- .nk-menu-item -->
                                            <li class="nk-menu-item has-sub">
                                                <a href="#" class="nk-menu-link nk-menu-toggle">
                                                    <span class="nk-menu-icon"><em class="icon ni ni-emails"></em></span>
                                                    <span class="nk-menu-text">Emails</span>
                                                </a>
                                                <ul class="nk-menu-sub">
                                                    <li class="nk-menu-item">
                                                        <a href="#" target="_blank" class="nk-menu-link"><span class="nk-menu-text">Envoyer un email</span></a>
                                                    </li>
                                                </ul><!-- .nk-menu-sub -->
                                            </li><!-- .nk-menu-item -->

                                            <li class="nk-menu-item has-sub">
                                                <a href="#" class="nk-menu-link ">
                                                    <svg width="648" height="488" viewBox="0 0 648 488" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                        <rect width="648" height="430.313" fill="url(#pattern0)"/>
                                                        <path d="M89.0393 423.755H109.696V430.067H81.1331V384.567H89.0393V423.755ZM107.602 398.067L103.727 395.661C105.602 392.932 106.571 390.046 106.633 387.005V382.067H113.289V386.38C113.289 388.525 112.737 390.692 111.633 392.88C110.55 395.046 109.206 396.775 107.602 398.067ZM127.383 399.942C129.862 397.067 132.998 395.63 136.789 395.63C143.998 395.63 147.654 399.744 147.758 407.973V430.067H140.164V408.255C140.164 405.921 139.654 404.275 138.633 403.317C137.633 402.338 136.154 401.848 134.196 401.848C131.154 401.848 128.883 403.202 127.383 405.911V430.067H119.789V382.067H127.383V399.942ZM170.352 430.692C165.539 430.692 161.633 429.182 158.633 426.161C155.654 423.119 154.164 419.077 154.164 414.036V413.098C154.164 409.723 154.81 406.713 156.102 404.067C157.414 401.4 159.248 399.327 161.602 397.848C163.956 396.369 166.581 395.63 169.477 395.63C174.081 395.63 177.633 397.098 180.133 400.036C182.654 402.973 183.914 407.13 183.914 412.505V415.567H161.821C162.05 418.359 162.977 420.567 164.602 422.192C166.248 423.817 168.31 424.63 170.789 424.63C174.268 424.63 177.102 423.223 179.289 420.411L183.383 424.317C182.029 426.338 180.216 427.911 177.946 429.036C175.696 430.14 173.164 430.692 170.352 430.692ZM169.446 401.723C167.362 401.723 165.675 402.452 164.383 403.911C163.112 405.369 162.3 407.4 161.946 410.005H176.414V409.442C176.248 406.9 175.571 404.984 174.383 403.692C173.196 402.38 171.55 401.723 169.446 401.723ZM210.321 426.755C208.091 429.38 204.925 430.692 200.821 430.692C197.154 430.692 194.373 429.619 192.477 427.473C190.602 425.327 189.664 422.223 189.664 418.161V396.255H197.258V418.067C197.258 422.359 199.039 424.505 202.602 424.505C206.289 424.505 208.779 423.182 210.071 420.536V396.255H217.664V430.067H210.508L210.321 426.755ZM243.102 403.192C242.102 403.025 241.071 402.942 240.008 402.942C236.529 402.942 234.185 404.275 232.977 406.942V430.067H225.383V396.255H232.633L232.821 400.036C234.654 397.098 237.196 395.63 240.446 395.63C241.529 395.63 242.425 395.775 243.133 396.067L243.102 403.192ZM262.164 430.692C257.352 430.692 253.446 429.182 250.446 426.161C247.466 423.119 245.977 419.077 245.977 414.036V413.098C245.977 409.723 246.623 406.713 247.914 404.067C249.227 401.4 251.06 399.327 253.414 397.848C255.768 396.369 258.393 395.63 261.289 395.63C265.893 395.63 269.446 397.098 271.946 400.036C274.466 402.973 275.727 407.13 275.727 412.505V415.567H253.633C253.862 418.359 254.789 420.567 256.414 422.192C258.06 423.817 260.123 424.63 262.602 424.63C266.081 424.63 268.914 423.223 271.102 420.411L275.196 424.317C273.841 426.338 272.029 427.911 269.758 429.036C267.508 430.14 264.977 430.692 262.164 430.692ZM261.258 401.723C259.175 401.723 257.487 402.452 256.196 403.911C254.925 405.369 254.112 407.4 253.758 410.005H268.227V409.442C268.06 406.9 267.383 404.984 266.196 403.692C265.008 402.38 263.362 401.723 261.258 401.723ZM316.946 384.567H324.821V416.473C324.821 420.827 323.456 424.286 320.727 426.848C318.018 429.411 314.435 430.692 309.977 430.692C305.227 430.692 301.56 429.494 298.977 427.098C296.393 424.702 295.102 421.369 295.102 417.098H302.977C302.977 419.515 303.571 421.338 304.758 422.567C305.966 423.775 307.706 424.38 309.977 424.38C312.102 424.38 313.789 423.682 315.039 422.286C316.31 420.869 316.946 418.921 316.946 416.442V384.567ZM331.727 412.848C331.727 409.536 332.383 406.557 333.696 403.911C335.008 401.244 336.852 399.202 339.227 397.786C341.602 396.348 344.331 395.63 347.414 395.63C351.977 395.63 355.675 397.098 358.508 400.036C361.362 402.973 362.904 406.869 363.133 411.723L363.164 413.505C363.164 416.838 362.518 419.817 361.227 422.442C359.956 425.067 358.123 427.098 355.727 428.536C353.352 429.973 350.602 430.692 347.477 430.692C342.706 430.692 338.883 429.109 336.008 425.942C333.154 422.755 331.727 418.515 331.727 413.223V412.848ZM339.321 413.505C339.321 416.984 340.039 419.713 341.477 421.692C342.914 423.65 344.914 424.63 347.477 424.63C350.039 424.63 352.029 423.63 353.446 421.63C354.883 419.63 355.602 416.702 355.602 412.848C355.602 409.432 354.862 406.723 353.383 404.723C351.925 402.723 349.935 401.723 347.414 401.723C344.935 401.723 342.966 402.713 341.508 404.692C340.05 406.65 339.321 409.588 339.321 413.505ZM390.071 426.755C387.841 429.38 384.675 430.692 380.571 430.692C376.904 430.692 374.123 429.619 372.227 427.473C370.352 425.327 369.414 422.223 369.414 418.161V396.255H377.008V418.067C377.008 422.359 378.789 424.505 382.352 424.505C386.039 424.505 388.529 423.182 389.821 420.536V396.255H397.414V430.067H390.258L390.071 426.755ZM416.977 419.192L423.852 396.255H431.946L418.508 435.192C416.446 440.88 412.946 443.723 408.008 443.723C406.904 443.723 405.685 443.536 404.352 443.161V437.286L405.789 437.38C407.706 437.38 409.143 437.025 410.102 436.317C411.081 435.63 411.852 434.463 412.414 432.817L413.508 429.911L401.633 396.255H409.821L416.977 419.192ZM450.789 430.692C445.977 430.692 442.071 429.182 439.071 426.161C436.091 423.119 434.602 419.077 434.602 414.036V413.098C434.602 409.723 435.248 406.713 436.539 404.067C437.852 401.4 439.685 399.327 442.039 397.848C444.393 396.369 447.018 395.63 449.914 395.63C454.518 395.63 458.071 397.098 460.571 400.036C463.091 402.973 464.352 407.13 464.352 412.505V415.567H442.258C442.487 418.359 443.414 420.567 445.039 422.192C446.685 423.817 448.748 424.63 451.227 424.63C454.706 424.63 457.539 423.223 459.727 420.411L463.821 424.317C462.466 426.338 460.654 427.911 458.383 429.036C456.133 430.14 453.602 430.692 450.789 430.692ZM449.883 401.723C447.8 401.723 446.112 402.452 444.821 403.911C443.55 405.369 442.737 407.4 442.383 410.005H456.852V409.442C456.685 406.9 456.008 404.984 454.821 403.692C453.633 402.38 451.987 401.723 449.883 401.723ZM490.758 426.755C488.529 429.38 485.362 430.692 481.258 430.692C477.591 430.692 474.81 429.619 472.914 427.473C471.039 425.327 470.102 422.223 470.102 418.161V396.255H477.696V418.067C477.696 422.359 479.477 424.505 483.039 424.505C486.727 424.505 489.216 423.182 490.508 420.536V396.255H498.102V430.067H490.946L490.758 426.755ZM524.789 420.88C524.789 419.525 524.227 418.494 523.102 417.786C521.998 417.077 520.154 416.452 517.571 415.911C514.987 415.369 512.831 414.682 511.102 413.848C507.31 412.015 505.414 409.359 505.414 405.88C505.414 402.963 506.643 400.525 509.102 398.567C511.56 396.609 514.685 395.63 518.477 395.63C522.518 395.63 525.779 396.63 528.258 398.63C530.758 400.63 532.008 403.223 532.008 406.411H524.414C524.414 404.952 523.873 403.744 522.789 402.786C521.706 401.807 520.268 401.317 518.477 401.317C516.81 401.317 515.446 401.702 514.383 402.473C513.341 403.244 512.821 404.275 512.821 405.567C512.821 406.734 513.31 407.64 514.289 408.286C515.268 408.932 517.248 409.588 520.227 410.255C523.206 410.9 525.539 411.682 527.227 412.598C528.935 413.494 530.196 414.577 531.008 415.848C531.841 417.119 532.258 418.661 532.258 420.473C532.258 423.515 530.998 425.984 528.477 427.88C525.956 429.755 522.654 430.692 518.571 430.692C515.8 430.692 513.331 430.192 511.164 429.192C508.998 428.192 507.31 426.817 506.102 425.067C504.893 423.317 504.289 421.432 504.289 419.411H511.664C511.768 421.202 512.446 422.588 513.696 423.567C514.946 424.525 516.602 425.005 518.664 425.005C520.664 425.005 522.185 424.63 523.227 423.88C524.268 423.109 524.789 422.109 524.789 420.88ZM553.789 430.692C548.977 430.692 545.071 429.182 542.071 426.161C539.091 423.119 537.602 419.077 537.602 414.036V413.098C537.602 409.723 538.248 406.713 539.539 404.067C540.852 401.4 542.685 399.327 545.039 397.848C547.393 396.369 550.018 395.63 552.914 395.63C557.518 395.63 561.071 397.098 563.571 400.036C566.091 402.973 567.352 407.13 567.352 412.505V415.567H545.258C545.487 418.359 546.414 420.567 548.039 422.192C549.685 423.817 551.748 424.63 554.227 424.63C557.706 424.63 560.539 423.223 562.727 420.411L566.821 424.317C565.466 426.338 563.654 427.911 561.383 429.036C559.133 430.14 556.602 430.692 553.789 430.692ZM552.883 401.723C550.8 401.723 549.112 402.452 547.821 403.911C546.55 405.369 545.737 407.4 545.383 410.005H559.852V409.442C559.685 406.9 559.008 404.984 557.821 403.692C556.633 402.38 554.987 401.723 552.883 401.723Z" fill="white"/>
                                                        <defs>
                                                            <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
                                                                <use xlink:href="#image0_4952_42" transform="translate(0 -0.0447408) scale(0.00378788 0.00570409)"/>
                                                            </pattern>
                                                            <image id="image0_4952_42" width="264" height="191" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAQgAAAC/CAYAAAACTkKGAAAACXBIWXMAAA7EAAAOxAGVKw4bAAADnGlUWHRYTUw6Y29tLmFkb2JlLnhtcAAAAAAAPD94cGFja2V0IGJlZ2luPSfvu78nIGlkPSdXNU0wTXBDZWhpSHpyZVN6TlRjemtjOWQnPz4KPHg6eG1wbWV0YSB4bWxuczp4PSdhZG9iZTpuczptZXRhLyc+CjxyZGY6UkRGIHhtbG5zOnJkZj0naHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyc+CgogPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9JycKICB4bWxuczpBdHRyaWI9J2h0dHA6Ly9ucy5hdHRyaWJ1dGlvbi5jb20vYWRzLzEuMC8nPgogIDxBdHRyaWI6QWRzPgogICA8cmRmOlNlcT4KICAgIDxyZGY6bGkgcmRmOnBhcnNlVHlwZT0nUmVzb3VyY2UnPgogICAgIDxBdHRyaWI6Q3JlYXRlZD4yMDIxLTExLTI1PC9BdHRyaWI6Q3JlYXRlZD4KICAgICA8QXR0cmliOkV4dElkPjE0MDUzMWY0LTAzZDMtNGQ0Ny1hMmIxLWNiMmIwNjJhMTk0ZTwvQXR0cmliOkV4dElkPgogICAgIDxBdHRyaWI6RmJJZD41MjUyNjU5MTQxNzk1ODA8L0F0dHJpYjpGYklkPgogICAgIDxBdHRyaWI6VG91Y2hUeXBlPjI8L0F0dHJpYjpUb3VjaFR5cGU+CiAgICA8L3JkZjpsaT4KICAgPC9yZGY6U2VxPgogIDwvQXR0cmliOkFkcz4KIDwvcmRmOkRlc2NyaXB0aW9uPgoKIDxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PScnCiAgeG1sbnM6cGRmPSdodHRwOi8vbnMuYWRvYmUuY29tL3BkZi8xLjMvJz4KICA8cGRmOkF1dGhvcj5aYWtpIEJlbmhpcnQ8L3BkZjpBdXRob3I+CiA8L3JkZjpEZXNjcmlwdGlvbj4KCiA8cmRmOkRlc2NyaXB0aW9uIHJkZjphYm91dD0nJwogIHhtbG5zOnhtcD0naHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLyc+CiAgPHhtcDpDcmVhdG9yVG9vbD5D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"/>
                                                        </defs>
                                                    </svg>

                                                </a>

                                            </li>

                                        </ul><!-- .nk-menu -->
                                    </div><!-- .nk-sidebar-menu -->
                                </div><!-- .nk-sidebar-content -->
                            </div><!-- .nk-sidebar-element -->
                        </div>
                        <div class="nk-wrap ">
                            <!-- main header @s -->
                            <div class="nk-header nk-header-fixed is-light">
                                <div class="container-fluid">
                                    <div class="nk-header-wrap">
                                        <div class="nk-menu-trigger d-xl-none ml-n1">
                                            <a href="#" class="nk-nav-toggle nk-quick-nav-icon" data-target="sidebarMenu"><em class="icon ni ni-menu"></em></a>
                                        </div>
                                        <div class="nk-header-brand d-xl-none">
                                            <a href="#" class="logo-link">
                                                <img class="logo-light logo-img" src="{{ asset('assets/images/logo.png') }}" srcset="{{ asset('assets/images/logo2x.png') }} 2x" alt="logo">
                                                <img class="logo-dark logo-img" src="{{ asset('assets/images/logo-dark.png') }}" srcset="{{ asset('assets/images/logo-dark2x.png') }} 2x" alt="logo-dark">
                                            </a>
                                        </div><!-- .nk-header-brand -->
                                        <div class="nk-header-news d-none d-xl-block">
                                            <div class="nk-news-list">
                                                <a class="nk-news-item" href="#">
                                                    <div class="nk-news-icon">
                                                        <em class="icon ni ni-card-view"></em>
                                                    </div>
                                                    <div class="nk-news-text">

                                                    </div>
                                                </a>
                                            </div>
                                        </div><!-- .nk-header-news -->
                                        <div class="nk-header-tools">
                                            <ul class="nk-quick-nav">
                                                <li class="dropdown user-dropdown">
                                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                                        <div class="user-toggle">
                                                            <div class="user-avatar">
                                                                <img src="https://res.cloudinary.com/dy6vgsgr8/image/upload/v1634063559/javier-trueba-iQPr1XkF5F0-unsplash_ji8rab.jpg" alt="" style="width:inherit; height: inherit;">
                                                            </div>
                                                            <div class="user-info d-none d-md-block">
                                                                <div class="user-status">Administrator</div>
                                                                <div class="user-name dropdown-indicator">Abu Bin Ishityak</div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-md dropdown-menu-right dropdown-menu-s1">
                                                        <div class="dropdown-inner user-card-wrap bg-lighter d-none d-md-block">
                                                            <div class="user-card">
                                                                <div class="user-avatar">
                                                                    <span>AB</span>
                                                                </div>
                                                                <div class="user-info">
                                                                    <span class="lead-text">Abu Bin Ishtiyak</span>
                                                                    <span class="sub-text">info@softnio.com</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="dropdown-inner">
                                                            <ul class="link-list">
                                                                <li><a href="#"><em class="icon ni ni-user-alt"></em><span>View Profile</span></a></li>
                                                                <li><a href="#"><em class="icon ni ni-setting-alt"></em><span>Account Setting</span></a></li>
                                                                <li><a href="#"><em class="icon ni ni-activity-alt"></em><span>Login Activity</span></a></li>
                                                                <li><a class="dark-switch" href="#"><em class="icon ni ni-moon"></em><span>Dark Mode</span></a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="dropdown-inner">
                                                            <ul class="link-list">
                                                                <li><form method="POST" action="{{ route('logout') }}">
                                                                        @csrf

                                                                        <a href="{{ route('logout') }}"
                                                                                             onclick="event.preventDefault();
                                                this.closest('form').submit();" class="">
                                                                            {{ __('Log Out') }}
                                                                        </a>
                                                                    </form></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </li><!-- .dropdown -->
                                                <li class="dropdown notification-dropdown mr-n1">
                                                    <a href="#" class="dropdown-toggle nk-quick-nav-icon" data-toggle="dropdown">
                                                        <div class="icon-status icon-status-info"><em class="icon ni ni-bell"></em></div>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-xl dropdown-menu-right dropdown-menu-s1">
                                                        <div class="dropdown-head">
                                                            <span class="sub-title nk-dropdown-title">Notifications</span>
                                                            <a href="#">Mark All as Read</a>
                                                        </div>
                                                        <div class="dropdown-body">
                                                            <div class="nk-notification">
                                                                <div class="nk-notification-item dropdown-inner">
                                                                    <div class="nk-notification-icon">
                                                                        <em class="icon icon-circle bg-warning-dim ni ni-curve-down-right"></em>
                                                                    </div>
                                                                    <div class="nk-notification-content">
                                                                        <div class="nk-notification-text">You have requested to <span>Widthdrawl</span></div>
                                                                        <div class="nk-notification-time">2 hrs ago</div>
                                                                    </div>
                                                                </div>
                                                                <div class="nk-notification-item dropdown-inner">
                                                                    <div class="nk-notification-icon">
                                                                        <em class="icon icon-circle bg-success-dim ni ni-curve-down-left"></em>
                                                                    </div>
                                                                    <div class="nk-notification-content">
                                                                        <div class="nk-notification-text">Your <span>Deposit Order</span> is placed</div>
                                                                        <div class="nk-notification-time">2 hrs ago</div>
                                                                    </div>
                                                                </div>
                                                                <div class="nk-notification-item dropdown-inner">
                                                                    <div class="nk-notification-icon">
                                                                        <em class="icon icon-circle bg-warning-dim ni ni-curve-down-right"></em>
                                                                    </div>
                                                                    <div class="nk-notification-content">
                                                                        <div class="nk-notification-text">You have requested to <span>Widthdrawl</span></div>
                                                                        <div class="nk-notification-time">2 hrs ago</div>
                                                                    </div>
                                                                </div>
                                                                <div class="nk-notification-item dropdown-inner">
                                                                    <div class="nk-notification-icon">
                                                                        <em class="icon icon-circle bg-success-dim ni ni-curve-down-left"></em>
                                                                    </div>
                                                                    <div class="nk-notification-content">
                                                                        <div class="nk-notification-text">Your <span>Deposit Order</span> is placed</div>
                                                                        <div class="nk-notification-time">2 hrs ago</div>
                                                                    </div>
                                                                </div>
                                                                <div class="nk-notification-item dropdown-inner">
                                                                    <div class="nk-notification-icon">
                                                                        <em class="icon icon-circle bg-warning-dim ni ni-curve-down-right"></em>
                                                                    </div>
                                                                    <div class="nk-notification-content">
                                                                        <div class="nk-notification-text">You have requested to <span>Widthdrawl</span></div>
                                                                        <div class="nk-notification-time">2 hrs ago</div>
                                                                    </div>
                                                                </div>
                                                                <div class="nk-notification-item dropdown-inner">
                                                                    <div class="nk-notification-icon">
                                                                        <em class="icon icon-circle bg-success-dim ni ni-curve-down-left"></em>
                                                                    </div>
                                                                    <div class="nk-notification-content">
                                                                        <div class="nk-notification-text">Your <span>Deposit Order</span> is placed</div>
                                                                        <div class="nk-notification-time">2 hrs ago</div>
                                                                    </div>
                                                                </div>
                                                            </div><!-- .nk-notification -->
                                                        </div><!-- .nk-dropdown-body -->
                                                        <div class="dropdown-foot center">
                                                            <a href="#">View All</a>
                                                        </div>
                                                    </div>
                                                </li><!-- .dropdown -->
                                            </ul><!-- .nk-quick-nav -->
                                        </div><!-- .nk-header-tools -->
                                    </div><!-- .nk-header-wrap -->
                                </div><!-- .container-fliud -->
                            </div>
                            <!-- main header @e -->
                            <!-- content @s -->
                            <div class="nk-content">
                                {{ $slot }}
                            </div>
                            <!-- content @e -->
                            <!-- footer @s -->
                            <div class="nk-footer">
                                <div class="container-fluid">
                                    <div class="nk-footer-wrap">
                                        <div class="nk-footer-copyright"> &copy; 2021 SARP.
                                        </div>
                                        <div class="nk-footer-links">
                                            <ul class="nav nav-sm">
                                                <li class="nav-item"><a class="nav-link" href="#">Terms</a></li>
                                                <li class="nav-item"><a class="nav-link" href="#">Privacy</a></li>
                                                <li class="nav-item"><a class="nav-link" href="#">Help</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- footer @e -->
                        </div>
                    </div>
                </div>
            </main>
        </div>
        <style>
            .logo-img {
                max-height: 50px;
            }
            .nk-menu-icon:nth-of-type(1) {
                margin-right: 10px;
            }
            .nk-menu-item + .nk-menu-heading {
                padding-top: 1rem;
            }
        </style>

        @stack('modals')

        @livewireScripts
        <script src="{{ asset('assets/js/bundle.js') }}"></script>
        <script src="{{ asset('assets/js/scripts.js') }}"></script>
        <script src="{{ asset('assets/js/charts/gd-default.js') }}"></script>
        <script src="{{ asset('assets/js/libs/datatable-btns.js') }}"></script>
        <script src="https://unpkg.com/filepond-plugin-file-validate-size/dist/filepond-plugin-file-validate-size.js"></script>
        <script src="https://unpkg.com/filepond-plugin-image-exif-orientation/dist/filepond-plugin-image-exif-orientation.js"></script>
        <script src="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.js"></script>
        <script src="https://unpkg.com/filepond/dist/filepond.js"></script>
    </body>
</html>
