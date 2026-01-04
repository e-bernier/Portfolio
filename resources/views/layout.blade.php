<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon-16x16.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('apple-touch-icon.png') }}">
    <link rel="manifest" href="{{ asset('site.webmanifest') }}">
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@400;500;600;700&display=swap" rel="stylesheet">
    <title>@yield('title', 'Portfolio')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-black min-h-screen flex flex-col">
    <!-- Background gradient effect -->
    <div id="light">
        <div id="gradient-orb1"></div>
        <div id="gradient-orb2"></div>
        <div id="gradient-orb3"></div>
    </div>

    <!-- Header/Navigation -->
    <nav id="header" class="sticky top-0 z-20 text-gray-400">
        <div class="max-w-4xl mx-auto px-4 py-4">
            <div class="flex items-center justify-between">
                <!-- Home -->
                <a href="{{ route('home', ['locale' => app()->getLocale()]) }}" class="px-3 py-1.5 rounded transition text-xl font-bold bg-gray-900 hover:text-white hover:bg-gray-800 flex items-center gap-2">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                        <polyline points="9 22 9 12 15 12 15 22"></polyline>
                    </svg>
                </a>

                <!-- Optional space (back button, etc.) -->
                <div>
                    @yield('header-actions')
                </div>

                <!-- Language selection -->
                <div class="flex items-center gap-2">
                    <a href="{{ route(Route::currentRouteName(), array_merge(Route::current()->parameters(), ['locale' => 'fr'])) }}" 
                    class="px-3 py-1.5 rounded transition {{ app()->getLocale() == 'fr' ? 'bg-blue-600 text-white' : 'text-gray-400 bg-gray-900 hover:text-white hover:bg-gray-800' }}">
                        FR
                    </a>
                    <a href="{{ route(Route::currentRouteName(), array_merge(Route::current()->parameters(), ['locale' => 'en'])) }}" 
                    class="px-3 py-1.5 rounded transition {{ app()->getLocale() == 'en' ? 'bg-blue-600 text-white' : 'text-gray-400 bg-gray-900 hover:text-white hover:bg-gray-800' }}">
                        EN
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main content -->
    <main class="flex-grow relative z-10">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer id="footer" class="relative z-10 mt-16 py-8 bg-gray-900/50 backdrop-blur-sm border-t border-gray-800">
        <div class="max-w-4xl mx-auto px-4">
            <div class="text-center text-gray-400">
                <p class="mb-2">&copy; {{ date('Y') }} - My Portfolio</p>
                <div class="flex justify-center gap-4 text-sm">
                    <a href="https://github.com/e-bernier" target="_blank" class="hover:text-blue-400 transition">GitHub</a>
                    <a href="https://www.linkedin.com/in/eloi-bernier-13310037a/" target="_blank" class="hover:text-blue-400 transition">LinkedIn</a>
                    <a href="mailto:eloimarie.bernier@epfl.ch" class="hover:text-blue-400 transition">Contact</a>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>