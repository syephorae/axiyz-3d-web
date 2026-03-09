<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'aXiYZ 3D Studios') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600,700,800&display=swap" rel="stylesheet" />

        <!-- 3D Model Viewer -->
        <script type="module" src="https://ajax.googleapis.com/ajax/libs/model-viewer/3.4.0/model-viewer.min.js"></script>

        <!-- PWA Setup -->
        <link rel="manifest" href="/manifest.json">
        <meta name="theme-color" content="#231e6f">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased bg-gray-50 text-brand-darkblue">
        <div class="min-h-screen flex flex-col">
            <!-- Navigation -->
            <nav class="bg-white shadow">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="flex justify-between h-16">
                        <div class="flex">
                            <!-- Logo -->
                            <div class="shrink-0 flex items-center mr-8">
                                <a href="{{ route('home') }}" class="text-2xl font-extrabold text-brand-darkblue tracking-tight hover:text-brand-red transition-colors duration-300">
                                    aXiYZ 3D <span class="text-brand-red">Studios</span>
                                </a>
                            </div>

                            <!-- Navigation Links -->
                            <div class="hidden space-x-8 sm:-my-px sm:flex">
                                <a href="{{ route('home') }}" class="inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium leading-5 transition duration-150 ease-in-out {{ request()->routeIs('home') ? 'border-brand-red text-brand-darkblue focus:outline-none focus:border-brand-red' : 'border-transparent text-gray-500 hover:text-brand-darkblue hover:border-gray-300 focus:outline-none focus:text-brand-darkblue focus:border-gray-300' }}">
                                    Home
                                </a>
                                <a href="{{ route('about') }}" class="inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium leading-5 transition duration-150 ease-in-out {{ request()->routeIs('about') ? 'border-brand-red text-brand-darkblue focus:outline-none focus:border-brand-red' : 'border-transparent text-gray-500 hover:text-brand-darkblue hover:border-gray-300 focus:outline-none focus:text-brand-darkblue focus:border-gray-300' }}">
                                    About Us
                                </a>
                                <a href="{{ route('gallery') }}" class="inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium leading-5 transition duration-150 ease-in-out {{ request()->routeIs('gallery') ? 'border-brand-red text-brand-darkblue focus:outline-none focus:border-brand-red' : 'border-transparent text-gray-500 hover:text-brand-darkblue hover:border-gray-300 focus:outline-none focus:text-brand-darkblue focus:border-gray-300' }}">
                                    Gallery
                                </a>
                                <a href="{{ route('services') }}" class="inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium leading-5 transition duration-150 ease-in-out {{ request()->routeIs('services') ? 'border-brand-red text-brand-darkblue focus:outline-none focus:border-brand-red' : 'border-transparent text-gray-500 hover:text-brand-darkblue hover:border-gray-300 focus:outline-none focus:text-brand-darkblue focus:border-gray-300' }}">
                                    Products & Services
                                </a>
                                <a href="{{ route('contact') }}" class="inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium leading-5 transition duration-150 ease-in-out {{ request()->routeIs('contact') ? 'border-brand-red text-brand-darkblue focus:outline-none focus:border-brand-red' : 'border-transparent text-gray-500 hover:text-brand-darkblue hover:border-gray-300 focus:outline-none focus:text-brand-darkblue focus:border-gray-300' }}">
                                    Contact
                                </a>
                            </div>
                        </div>
                        <div class="hidden sm:flex sm:items-center sm:ml-6 space-x-4">
                            @auth
                                <a href="{{ url('/dashboard') }}" class="text-sm font-semibold text-gray-600 hover:text-brand-darkblue">Dashboard</a>
                            @else
                                <a href="{{ route('login') }}" class="text-sm font-semibold text-gray-600 hover:text-brand-darkblue">Log in</a>
                                <a href="{{ route('register') }}" class="px-4 py-2 bg-brand-yellow text-white text-sm font-semibold rounded-md shadow-md hover:bg-yellow-500 transition duration-300">Get a Quote</a>
                            @endauth
                        </div>
                    </div>
                </div>
            </nav>

            <!-- Page Content -->
            <main class="flex-grow">
                {{ $slot }}
            </main>

            <!-- Footer -->
            <footer class="bg-brand-darkblue text-white py-12 mt-12">
                <div class="max-w-7xl mx-auto px-4 grid grid-cols-1 md:grid-cols-3 gap-8 text-center md:text-left">
                    <div>
                        <h3 class="text-2xl font-bold mb-4">aXiYZ 3D <span class="text-brand-red">Studios</span></h3>
                        <p class="text-gray-300">Bringing your ideas to life with precision 3D printing and modeling.</p>
                    </div>
                    <div>
                        <h4 class="text-lg font-semibold mb-4 text-brand-yellow">Quick Links</h4>
                        <ul class="space-y-2 text-gray-300">
                            <li><a href="{{ route('home') }}" class="hover:text-white transition">Home</a></li>
                            <li><a href="{{ route('services') }}" class="hover:text-white transition">Products & Services</a></li>
                            <li><a href="{{ route('gallery') }}" class="hover:text-white transition">Gallery</a></li>
                            <li><a href="{{ route('about') }}" class="hover:text-white transition">About Us</a></li>
                        </ul>
                    </div>
                    <div>
                        <h4 class="text-lg font-semibold mb-4 text-brand-yellow">Contact Us</h4>
                        <p class="text-gray-300">Email: info@axiyz3d.com</p>
                        <p class="text-gray-300">Phone: (123) 456-7890</p>
                    </div>
                </div>
                <div class="max-w-7xl mx-auto px-4 mt-8 pt-8 border-t border-gray-700 text-center text-sm text-gray-400">
                    <p>&copy; {{ date('Y') }} aXiYZ 3D Studios. All rights reserved.</p>
                </div>
            </footer>
        </div>
        <script>
            if ('serviceWorker' in navigator) {
                window.addEventListener('load', () => {
                    navigator.serviceWorker.register('/sw.js').then(registration => {
                        console.log('SW registered: ', registration);
                    }).catch(registrationError => {
                        console.log('SW registration failed: ', registrationError);
                    });
                });
            }
        </script>
    </body>
</html>
