<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'SARP hrj') }}</title>

        <!-- Fonts -->

        <!-- Styles -->
        <link rel="stylesheet" href=" {{ asset('assets/css/dashlite.css?ver=2.2.0') }}">
        <link id="skin-default" rel="stylesheet" href=" {{ asset('assets/css/theme.css?ver=2.2.0') }} ">
        <!-- Scripts -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="{{ asset('js/typed.js/lib/typed.min.js') }}" ></script>

    </head>
    <body>
        <div class="nk-app-root">
            {{ $slot }}
        </div>
        <style>


            .text-slider-items {
                display: none;
            }

            .heading {
                margin-top: 200px;
                text-align: center;
            }

            .heading h1 {
                color: limegreen;
                font-size: 70px;
            }

            .heading h3 {
                color: black;
                font-size: 20px;
            }
        </style>
        <script>
            if ($(".text-slider").length == 1) {

                var typed_strings =
                    $(".text-slider-items").text();

                var typed = new Typed(".text-slider", {
                    strings: typed_strings.split(", "),
                    typeSpeed: 50,
                    loop: true,
                    backDelay: 900,
                    backSpeed: 30,
                });
            }
        </script>
        <!-- JavaScript -->
        <script src=" {{ asset('assets/js/bundle.js?ver=2.2.0') }}"></script>
        <script src=" {{ asset('assets/js/scripts.js?ver=2.2.0') }} "></script>
        <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>

    </body>
</html>
