<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'aXiYZ 3D Studios') }}</title>
        <link rel="icon" type="image/png" href="{{ asset('images/favicon.png') }}?v={{ time() }}">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600,700,800&display=swap" rel="stylesheet" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">

        <!-- 3D Model Viewer -->
        <script type="module" src="https://ajax.googleapis.com/ajax/libs/model-viewer/3.4.0/model-viewer.min.js"></script>

        <!-- PWA Setup -->
        <link rel="manifest" href="/manifest.json">
        <meta name="theme-color" content="#231e6f">
        
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <style>
            /* 1. THE GLOBAL DOT GRID */
            .dot-grid {
                background-image: radial-gradient(circle, #e5e7eb 1px, transparent 1px);
                background-size: 30px 30px;
            }

            /* 2. THE GLOBAL SPOTLIGHT (Follows mouse) */
            .spotlight-bg {
                position: absolute;
                inset: 0;
                pointer-events: none;
                background: radial-gradient(
                    800px circle at var(--mouse-x, 50%) var(--mouse-y, 50%),
                    rgba(35, 30, 111, 0.15),
                    transparent 80%
                );
                z-index: 1;
            }

            /* 3. THE GLOBAL SCROLL REVEAL (Fades in on scroll) */
            .reveal-hidden {
                opacity: 0;
                transform: translateY(30px);
                transition: all 0.8s cubic-bezier(0.4, 0, 0.2, 1);
            }
            .reveal-visible {
                opacity: 1;
                transform: translateY(0);
            }

        </style>
    </head>
    <body class="font-sans antialiased bg-gradient-to-r from-brand-darkblue to-blue-900 text-brand-darkblue">
        <div class="min-h-screen flex flex-col">
            <!-- Navigation -->
            <nav class="bg-white shadow">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="flex justify-between h-16">
                        <div class="flex">
                            <!-- Logo -->
                            <div class="shrink-0 flex items-center mr-8">
                                <a href="{{ route('home') }}" class="flex items-center hover:opacity-80 transition-opacity duration-300">
                                    <img src="/images/logo-text-left.jpeg" alt="" class="h-12 w-auto object-contain">
                                </a>
                            </div>

                            <!-- Navigation Links -->
                            <div class="hidden space-x-8 sm:-my-px sm:flex">
                                <a href="{{ route('home') }}" class="inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium leading-5 transition duration-150 ease-in-out {{ request()->routeIs('home') ? 'border-brand-red text-brand-darkblue' : 'border-transparent text-gray-500 hover:text-brand-darkblue hover:border-gray-300' }}">
                                    Home
                                </a>
                                <a href="{{ route('about') }}" class="inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium leading-5 transition duration-150 ease-in-out {{ request()->routeIs('about') ? 'border-brand-red text-brand-darkblue' : 'border-transparent text-gray-500 hover:text-brand-darkblue hover:border-gray-300' }}">
                                    About Us
                                </a>
                                <a href="{{ route('testimonials') }}" class="inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium leading-5 transition duration-150 ease-in-out {{ request()->routeIs('testimonials') ? 'border-brand-red text-brand-darkblue' : 'border-transparent text-gray-500 hover:text-brand-darkblue hover:border-gray-300' }}">
                                    Testimonials
                                </a>
                                <a href="{{ route('gallery') }}" class="inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium leading-5 transition duration-150 ease-in-out {{ request()->routeIs('gallery') ? 'border-brand-red text-brand-darkblue' : 'border-transparent text-gray-500 hover:text-brand-darkblue hover:border-gray-300' }}">
                                    Gallery
                                </a>
                                <a href="{{ route('services') }}" class="inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium leading-5 transition duration-150 ease-in-out {{ request()->routeIs('services') ? 'border-brand-red text-brand-darkblue' : 'border-transparent text-gray-500 hover:text-brand-darkblue hover:border-gray-300' }}">
                                    Products & Services
                                </a>
                                <a href="{{ route('contact') }}" class="inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium leading-5 transition duration-150 ease-in-out {{ request()->routeIs('contact') ? 'border-brand-red text-brand-darkblue' : 'border-transparent text-gray-500 hover:text-brand-darkblue hover:border-gray-300' }}">
                                    Contact
                                </a>
                            </div>
                        </div>

                        <!-- Get a Quote → WhatsApp -->
                        <div class="hidden sm:flex sm:items-center sm:ml-6">
                            <a href="https://wa.me/601165019369?text=axiyz3dstudio-I+would+like+to+get+a+quote" target="_blank" class="px-4 py-2 bg-brand-yellow text-white text-sm font-semibold rounded-md shadow-md hover:bg-yellow-500 transition duration-300">
                                Get a Quote
                            </a>
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
                    <!-- Brand -->
                    <div>
                        <img src="/images/logo-text-left.jpeg" alt="" class="h-16 w-auto object-contain mb-4">
                        <p class="text-gray-300 mb-4">Bringing your ideas to life with precision 3D printing and modeling.</p>
                        <!-- Social Media Links -->
                        <div class="flex justify-center md:justify-start gap-2 mt-4">
                            <!-- WhatsApp -->
                            <a href="https://wa.me/601165019369" target="_blank" title="WhatsApp" class="p-2 text-[#25D366] hover:bg-white/10 rounded-full transition-all duration-300 transform hover:scale-110">
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
                            </a>
                            <!-- Instagram -->
                            <a href="https://www.instagram.com/axiyz.3d.studios/" target="_blank" title="Instagram" class="p-2 text-[#E4405F] hover:bg-white/10 rounded-full transition-all duration-300 transform hover:scale-110">
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z"/></svg>
                            </a>
                            <!-- TikTok -->
                            <a href="https://www.tiktok.com/@axiyz.3d.studios" target="_blank" title="TikTok" class="p-2 text-white hover:bg-white/10 rounded-full transition-all duration-300 transform hover:scale-110">
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M19.59 6.69a4.83 4.83 0 01-3.77-4.25V2h-3.45v13.67a2.89 2.89 0 01-2.88 2.5 2.89 2.89 0 01-2.89-2.89 2.89 2.89 0 012.89-2.89c.28 0 .54.04.79.1V9.01a6.27 6.27 0 00-.79-.05 6.34 6.34 0 00-6.34 6.34 6.34 6.34 0 006.34 6.34 6.34 6.34 0 006.33-6.34V8.69a8.18 8.18 0 004.78 1.52V6.76a4.85 4.85 0 01-1.01-.07z"/></svg>
                            </a>
                            <!-- Email -->
                            <a href="mailto:hello@axiyz3d.xyz" title="Email" class="p-2 text-brand-yellow hover:bg-white/10 rounded-full transition-all duration-300 transform hover:scale-110">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                            </a>
                        </div>
                    </div>

                    <!-- Quick Links -->
                    <div>
                        <h4 class="text-lg font-semibold mb-4 text-brand-yellow">Quick Links</h4>
                        <ul class="space-y-2 text-gray-300">
                            <li><a href="{{ route('home') }}" class="hover:text-white transition">Home</a></li>
                            <li><a href="{{ route('services') }}" class="hover:text-white transition">Products & Services</a></li>
                            <li><a href="{{ route('about') }}" class="hover:text-white transition">About Us</a></li>
                            <li><a href="{{ route('testimonials') }}" class="hover:text-white transition">Testimonials</a></li>
                            <li><a href="{{ route('gallery') }}" class="hover:text-white transition">Gallery</a></li>
                            <li><a href="{{ route('contact') }}" class="hover:text-white transition">Contact</a></li>
                        </ul>
                    </div>

                    <!-- Contact Details -->
                    <div>
                        <h4 class="text-lg font-semibold mb-4 text-brand-yellow">Contact Us</h4>
                        <ul class="space-y-2 text-gray-300">
                            <li class="flex items-center justify-center md:justify-start gap-2">
                                <svg class="w-4 h-4 shrink-0" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
                                <a href="https://wa.me/601165019369" target="_blank" class="hover:text-white transition">+60 11-6501 9369</a>
                            </li>
                            <li class="flex items-center justify-center md:justify-start gap-2">
                                <svg class="w-4 h-4 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                                <a href="mailto:hello@axiyz3d.xyz" class="hover:text-white transition">hello@axiyz3d.xyz</a>
                            </li>
                            <li class="flex items-start justify-center md:justify-start gap-2">
                                <svg class="w-4 h-4 shrink-0 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                                <a href="https://maps.app.goo.gl/PhfnQpA9QRQHu6Q49" target="_blank" class="hover:text-white transition text-sm">291-A, 2, Jalan Sungai Ujong, Taman Ast, 70200 Seremban, Negeri Sembilan</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="max-w-7xl mx-auto px-4 mt-8 pt-8 border-t border-gray-700 text-center text-sm text-gray-400">
                    <p>&copy; {{ date('Y') }} aXiYZ 3D Studios. All rights reserved.</p>
                </div>
            </footer>
        </div>

        <!-- Floating Social Media Sidebar (Desktop Only for better UX, or mobile sticky) -->
        <div id="social-sidebar" class="fixed left-0 top-1/2 -translate-y-1/2 z-[10001] flex flex-col gap-1 p-1 bg-brand-darkblue bg-opacity-90 backdrop-blur-sm rounded-r-2xl border-y border-r border-brand-yellow/30 shadow-2xl transition-transform duration-300 hover:translate-x-1 group">
            <a href="https://wa.me/601165019369" target="_blank" title="WhatsApp" class="p-3 text-[#25D366] hover:bg-white/10 rounded-full transition-all duration-300 transform hover:scale-110">
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
            </a>
            <a href="https://www.instagram.com/axiyz.3d.studios/" target="_blank" title="Instagram" class="p-3 text-[#E4405F] hover:bg-white/10 rounded-full transition-all duration-300 transform hover:scale-110">
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z"/></svg>
            </a>
            <a href="https://www.tiktok.com/@axiyz.3d.studios" target="_blank" title="TikTok" class="p-3 text-white hover:bg-white/10 rounded-full transition-all duration-300 transform hover:scale-110">
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M19.59 6.69a4.83 4.83 0 01-3.77-4.25V2h-3.45v13.67a2.89 2.89 0 01-2.88 2.5 2.89 2.89 0 01-2.89-2.89 2.89 2.89 0 012.89-2.89c.28 0 .54.04.79.1V9.01a6.27 6.27 0 00-.79-.05 6.34 6.34 0 00-6.34 6.34 6.34 6.34 0 006.34 6.34 6.34 6.34 0 006.33-6.34V8.69a8.18 8.18 0 004.78 1.52V6.76a4.85 4.85 0 01-1.01-.07z"/></svg>
            </a>
        </div>

        <!-- <script>
            if ('serviceWorker' in navigator) {
                window.addEventListener('load', () => {
                    navigator.serviceWorker.register('/sw.js').then(registration => {
                        console.log('SW registered: ', registration);
                    }).catch(registrationError => {
                        console.log('SW registration failed: ', registrationError);
                    });
                });
            }
        </script> -->
        <!-- Global Reveal & Spotlight Script -->
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                // 1. GLOBAL SCROLL REVEAL (Observes all .reveal-hidden elements)
                const observerOptions = { threshold: 0.15 };
                const observer = new IntersectionObserver((entries) => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            entry.target.classList.add('reveal-visible');
                        }
                    });
                }, observerOptions);

                document.querySelectorAll('.reveal-hidden').forEach(el => {
                    observer.observe(el);
                });

                // 2. GLOBAL MOUSE SPOTLIGHT (Observes all .interactive-grid elements)
                const interactiveSections = document.querySelectorAll('.interactive-grid');
                
                interactiveSections.forEach(section => {
                    section.addEventListener('mousemove', (e) => {
                        const rect = section.getBoundingClientRect();
                        const x = e.clientX - rect.left;
                        const y = e.clientY - rect.top;

                        section.style.setProperty('--mouse-x', `${x}px`);
                        section.style.setProperty('--mouse-y', `${y}px`);
                    });
                });
            });
        </script>
    </body>
</html>
