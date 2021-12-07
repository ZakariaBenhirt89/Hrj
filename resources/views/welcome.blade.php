<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{ asset('assets/images/rename.svg') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

@livewireStyles

<!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
</head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center  bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0 h-auto ">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>


                    @endauth
                </div>
            @endif

            <!-- This example requires Tailwind CSS v2.0+ -->

                <!--
      Welcome to Tailwind Play, the official Tailwind CSS playground!

      Everything here works just like it does when you're running Tailwind locally
      with a real build pipeline. You can customize your config file, use features
      like `@apply`, or even add third-party plugins.

      Feel free to play with this example if you're just learning, or trash it and
      start from scratch if you know enough to be dangerous. Have fun!
    -->
        </div>
        <div class="min-h-screen bg-gray-100 py-6 flex flex-col justify-center sm:py-12">
            <div class="relative py-3 sm:max-w-xl sm:mx-auto">
                <div class="absolute inset-0 bg-gradient-to-r from-cyan-400 to-sky-500 shadow-lg transform -skew-y-6 sm:skew-y-0 sm:-rotate-6 sm:rounded-3xl"></div>
                <div class="relative px-4 py-10 bg-white shadow-lg sm:rounded-3xl sm:p-20">
                    <div class="max-w-md mx-auto">
                        <div>
                            <img src="https://res.cloudinary.com/dy6vgsgr8/image/upload/v1634466399/hrj_teuu0s.png" class="h-17 sm:h-17" />
                        </div>
                        <div class="divide-y divide-gray-200">
                            <div class="py-8 text-base leading-6 space-y-4 text-gray-700 sm:text-lg sm:leading-7">
                                <p class="text-justify">Active depuis 1959, l'association l’Heure Joyeuse, reconnue d’utilité publique, à but non lucratif, est engagée pour la lutte contre l’exclusion sociale et professionnelle. L’Heure Joyeuse développe à Casablanca et pour certaines régions rurales du Maroc des programmes de santé, d’éducation, de formation et d’insertion.</p>
                               <div>
                                   <h3> Notre Mission :</h3>
                               </div>
                                <ul class="list-disc space-y-2">
                                    <li class="flex items-start">
                <span class="h-6 flex items-center sm:h-7">
                  <svg class="flex-shrink-0 h-5 w-5 text-cyan-500" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                  </svg>
                </span>
                                        <p class="ml-2">
                                            Lutter contre toutes les formes d’exclusion.
                                        </p>
                                    </li>
                                    <li class="flex items-start">
                <span class="h-6 flex items-center sm:h-7">
                  <svg class="flex-shrink-0 h-5 w-5 text-cyan-500" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                  </svg>
                </span>
                                        <p class="ml-2">
                                            Santé, Education et Formation.
                                        </p>
                                    </li>
                                    <li class="flex items-start">
                <span class="h-6 flex items-center sm:h-7">
                  <svg class="flex-shrink-0 h-5 w-5 text-cyan-500" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                  </svg>
                </span>
                                        <p class="ml-2">Ethique, Tolérance, Solidarité et Efficacité.</p>
                                    </li>
                                </ul>
                                <p>Lutte contre l’exclusion sociale sous toutes ses formes en créant des programmes et des services à fort impact social.</p>
                            </div>
                            <div class="pt-6 text-base leading-6 font-bold sm:text-lg sm:leading-7">
                                <p>Savoir plus sur l'association ?</p>
                                <p>
                                    <a href="https://tailwindcss.com/docs" class="text-cyan-600 hover:text-cyan-700"> siteweb officiel&rarr; </a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
