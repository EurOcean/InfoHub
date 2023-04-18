<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Yellow - Gonzalo Baia" />
    <meta http-equiv="cleartype" content="on">
    <meta name="MobileOptimized" content="320">
    <meta name="HandheldFriendly" content="True">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="robots" content="index, follow">

    <!-- META DATA -->
    <title>{{ config('app.name', 'Ocean Infohub API') }}</title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- SOCIAL META DATA -->
    <meta property="og:title" content="InfoHub EurOcean">
    <meta property="og:description" content="">
    <meta property="og:image" content="">
    <meta property="og:url" content="">
    <meta name="twitter:title" content="InfoHub EurOcean">
    <meta name="twitter:description" content="">
    <meta name="twitter:image" content="">
    <meta name="twitter:card" content="">
    <meta property="og:type" content="website" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    {{-- ALpine JS --}}
    <script defer src="https://unpkg.com/alpinejs@3.9.0/dist/cdn.min.js"></script>
    {{-- Formating code --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/prism/1.5.0/themes/prism.min.css" />
    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/globals.css') }}" >
</head>
<body>
    <div id="app">
        <div x-data="{ sidebarOpen: true }" class="flex overflow-x-hidden">
            <aside class="flex-shrink-0 md:w-72 flex flex-col border-r transition-all duration-300 z-50" :class="{ '-ml-72': !sidebarOpen }">
                @include('docs.components.navbar')
            </aside>
            <div class="flex-1">
                <main class="pt-8 md:pt-0 px-4 md:px-0 ">
                    @yield('content')
                </main>
                <footer class="px-2 md:px-20 py-4 bg-gray-50">
                    <div class="sm:flex justify-end items-end">
                        <div>
                            <p class="text-right text-xs text-gray-500">
                                <span class="flex justify-end space-x-6">
                                    <img class="h-10" src={{ asset('images/logos/oih-logo.png') }} />
                                    <img class="h-8" alt="Licencia Creative Commons" src="https://i.creativecommons.org/l/by/4.0/88x31.png" />
                                </span>
                                <br />
                                This work is under
                                Creative Commons Attribution 4.0 International License.
                                &copy; Copyright <script>var CurrentYear = new Date().getFullYear(); document.write(CurrentYear)</script> - EurOcean API
                            </p>

                        </div>
                    </div>
                    <div class="flex items-center justify-end space-x-4 mt-4">
                        <p class="text-right text-xs text-gray-500">
                            powered by:
                        </p>
                        <a href="https://www.mindoverdata.solutions/" target="_blank">
                            <img class="h-8 opacity-50" src={{ asset('images/logos/mindoverdata_logo.jpeg') }} />
                        </a>
                    </div>
                </footer>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.5.0/prism.min.js"></script>
</body>
</html>
