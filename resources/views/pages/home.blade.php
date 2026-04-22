<x-public-layout>
    <div class="relative z-10 bg-brand-darkblue shadow-2xl shadow-black/50">
        <div class="max-w-7xl mx-auto">
            <div class="relative z-10 pb-8 bg-brand-darkblue sm:pb-16 md:pb-20 lg:max-w-2xl lg:w-full lg:pb-28 xl:pb-32 pt-20">
                <main class="mt-10 mx-auto max-w-7xl px-4 sm:mt-12 sm:px-6 md:mt-16 lg:mt-20 lg:px-8 xl:mt-28">
                    <div class="sm:text-center lg:text-left">
                        <h1 class="text-4xl tracking-tight font-extrabold text-white sm:text-5xl md:text-6xl">
                            <span class="block xl:inline">Precision 3D Printing</span>
                            <span class="block text-brand-red">for your ideas</span>
                        </h1>
                        <p class="mt-3 text-base text-gray-300 sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0">
                            aXiYZ 3D Studios provides top-tier reverse engineering, custom 3D design, and high-quality printing services. Turn your concepts into reality today.
                        </p>
                        <div class="mt-5 sm:mt-8 sm:flex sm:justify-center lg:justify-start">
                            <div class="rounded-md shadow">
                                <a href="https://wa.me/601165019369?text=axiyz3dstudio-I+would+like+to+get+started" target="_blank" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-brand-red hover:bg-red-700 md:py-4 md:text-lg md:px-10 transition">
                                    Get Started
                                </a>
                            </div>
                            <div class="mt-3 sm:mt-0 sm:ml-3">
                                <a href="{{ route('gallery') }}" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-brand-darkblue bg-brand-yellow hover:bg-yellow-500 md:py-4 md:text-lg md:px-10 transition">
                                    View Portfolio
                                </a>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
        <div class="lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2 bg-gray-900 border-l-4 border-brand-red flex items-center justify-center p-8">
            <model-viewer src="/models/jeep.glb" auto-rotate camera-controls shadow-intensity="1" ar class="w-full h-[300px] lg:h-full bg-transparent"></model-viewer>
        </div>
    </div>
    
    
    <div class="py-16 bg-white relative z-0 overflow-hidden dot-grid interactive-grid">
        <!-- Background 3D Model (Classic Sonic Peeking) -->
        <div class="absolute -left-20 inset-y-0 w-80 pointer-events-none z-0 hidden lg:block opacity-100">
            <model-viewer src="/models/classic_sonic.glb" auto-rotate rotation-per-second="30deg" class="w-full h-full bg-transparent border-none" camera-orbit="0deg 75deg 150%" loading="lazy" reveal="auto" shadow-intensity="1"></model-viewer>
        </div>

        <!-- Spotlight Layer (follows mouse) -->
        <div class="spotlight-bg"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center reveal-hidden">
                <h2 class="text-base text-brand-red font-semibold tracking-wide uppercase">Services</h2>
                <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-brand-darkblue sm:text-4xl">
                    Everything you need to build it
                </p>
                <p class="mt-4 max-w-2xl text-xl text-gray-500 mx-auto">
                    From concept to physical object, we guide you through the entire manufacturing process.
                </p>
            </div>
            
            <div class="mt-10">
                <div class="space-y-10 md:space-y-0 md:grid md:grid-cols-2 lg:grid-cols-3 md:gap-x-8 md:gap-y-10">
                    <div class="text-center p-6 bg-gray-50 rounded-lg shadow-sm border border-gray-100 hover:shadow-lg hover:border-brand-yellow transition duration-300 transform hover:-translate-y-1 reveal-hidden" style="transition-delay: 0.1s;">
                        <div class="flex items-center justify-center h-16 w-16 rounded-full bg-brand-darkblue text-white mx-auto mb-4 shadow-md">
                            <svg class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 4a2 2 0 114 0v1a1 1 0 001 1h3a1 1 0 011 1v3a1 1 0 01-1 1h-1a2 2 0 100 4h1a1 1 0 011 1v3a1 1 0 01-1 1h-3a1 1 0 01-1-1v-1a2 2 0 10-4 0v1a1 1 0 01-1 1H7a1 1 0 01-1-1v-3a1 1 0 00-1-1H4a2 2 0 110-4h1a1 1 0 001-1V7a1 1 0 00-1-1H4a1 1 0 01-1-1V4a1 1 0 011-1h3a1 1 0 001-1v-1z"></path></svg>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900">3D CAD Design</h3>
                        <p class="mt-2 text-base text-gray-500">Custom 3D design for printing, prototyping & product development. Engineering & mechanical design with print-ready files.</p>
                    </div>
                    
                    <div class="text-center p-6 bg-gray-50 rounded-lg shadow-sm border border-gray-100 hover:shadow-lg hover:border-brand-red transition duration-300 transform hover:-translate-y-1 reveal-hidden" style="transition-delay: 0.2s;">
                        <div class="flex items-center justify-center h-16 w-16 rounded-full bg-brand-red text-white mx-auto mb-4 shadow-md">
                            <svg class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"></path></svg>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900">Reverse Engineering</h3>
                        <p class="mt-2 text-base text-gray-500">Recreate broken or unavailable parts into printable 3D models. Accurate measurement, modeling and functional replacements.</p>
                    </div>
                    
                    <div class="text-center p-6 bg-gray-50 rounded-lg shadow-sm border border-gray-100 hover:shadow-lg hover:border-brand-darkblue transition duration-300 transform hover:-translate-y-1 reveal-hidden" style="transition-delay: 0.3s;">
                        <div class="flex items-center justify-center h-16 w-16 rounded-full bg-brand-yellow text-brand-darkblue mx-auto mb-4 shadow-md">
                            <svg class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"></path></svg>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900">3D Printing Service</h3>
                        <p class="mt-2 text-base text-gray-500">High-resolution printing services using various durable materials including filaments with precise infill percentage.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Google Reviews Section -->
    <div class="py-16 bg-white relative z-0 overflow-hidden dot-grid interactive-grid border-t border-gray-200">
        <!-- Background 3D Model (Sneasler Peeking) -->
        <div class="absolute -right-20 inset-y-0 w-80 pointer-events-none z-0 hidden lg:block opacity-100">
            <model-viewer src="/models/mobile_-_pokemon_home_-_903_sneasler.glb" auto-rotate rotation-per-second="-30deg" class="w-full h-full bg-transparent border-none" camera-orbit="0deg 75deg 150%" loading="lazy" reveal="auto" shadow-intensity="1"></model-viewer>
        </div>

        <!-- Spotlight Layer (follows mouse) -->
        <div class="spotlight-bg"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h2 class="text-base text-brand-red font-semibold tracking-wide uppercase">Testimonials</h2>
                <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-brand-darkblue sm:text-4xl">
                    What Our Clients Say
                </p>
                <div class="mt-4 flex justify-center items-center gap-2">
                    <span class="text-xl font-bold text-gray-900">5.0</span>
                    <div class="flex text-yellow-400">
                        @for($i = 0; $i < 5; $i++)
                        <svg class="h-5 w-5 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                        @endfor
                    </div>
                </div>
            </div>

            <div class="mt-12 space-y-8 md:space-y-0 md:grid md:grid-cols-3 md:gap-x-8">
                <!-- Review 1 -->
                <div class="bg-white p-8 rounded-xl shadow-sm border border-gray-200 relative hover:shadow-md transition">
                    <div class="flex text-yellow-400 mb-4">
                        @for($i = 0; $i < 5; $i++)
                        <svg class="h-5 w-5 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                        @endfor
                    </div>
                    <p class="text-gray-600 mb-6 italic relative z-10">"I printed my final year project parts here using PLA and PETG, and the results were awesome! The print quality was clean and accurate, and the staff were super friendly and helpful. They gave me great tips on which material to use for different parts. The price was fair, and everything was ready on time. Definitely recommend this shop for any 3D printing or student projects!"</p>
                    <div class="flex items-center">
                        <div class="h-10 w-10 rounded-full bg-brand-darkblue flex items-center justify-center text-white font-bold uppercase">JD</div>
                        <div class="ml-3 text-sm font-medium text-gray-900">Thurgesswaran</div>
                    </div>
                    <svg class="absolute top-6 right-6 h-8 w-8 text-gray-100" fill="currentColor" viewBox="0 0 32 32" aria-hidden="true"><path d="M9.352 4C4.456 7.456 1 13.12 1 19.36c0 5.088 3.072 8.064 6.624 8.064 3.36 0 5.856-2.688 5.856-5.856 0-3.168-2.208-5.472-5.088-5.472-.576 0-1.344.096-1.536.192.48-3.264 3.552-7.104 6.624-9.024L9.352 4zm16.512 0c-4.8 3.456-8.256 9.12-8.256 15.36 0 5.088 3.072 8.064 6.624 8.064 3.264 0 5.856-2.688 5.856-5.856 0-3.168-2.304-5.472-5.184-5.472-.576 0-1.248.096-1.44.192.48-3.264 3.456-7.104 6.528-9.024L25.864 4z"></path></svg>
                </div>

                <!-- Review 2 -->
                <div class="bg-white p-8 rounded-xl shadow-sm border border-gray-200 relative mt-8 md:mt-0 hover:shadow-md transition">
                    <div class="flex text-yellow-400 mb-4">
                        @for($i = 0; $i < 5; $i++)
                        <svg class="h-5 w-5 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                        @endfor
                    </div>
                    <p class="text-gray-600 mb-6 italic relative z-10">"I had a great experience with this 3D printing shop! The print quality was excellent — smooth surface, accurate dimensions, and very durable. The staff were friendly and helpful, giving good advice on materials and print settings. The turnaround time was fast, and the price was reasonable for the quality I received. Highly recommended for anyone who needs professional and reliable 3D printing services!"</p>
                    <div class="flex items-center">
                        <div class="h-10 w-10 rounded-full bg-brand-red flex items-center justify-center text-white font-bold uppercase">SM</div>
                        <div class="ml-3 text-sm font-medium text-gray-900">Arvindan Shunmugam</div>
                    </div>
                    <svg class="absolute top-6 right-6 h-8 w-8 text-gray-100" fill="currentColor" viewBox="0 0 32 32" aria-hidden="true"><path d="M9.352 4C4.456 7.456 1 13.12 1 19.36c0 5.088 3.072 8.064 6.624 8.064 3.36 0 5.856-2.688 5.856-5.856 0-3.168-2.208-5.472-5.088-5.472-.576 0-1.344.096-1.536.192.48-3.264 3.552-7.104 6.624-9.024L9.352 4zm16.512 0c-4.8 3.456-8.256 9.12-8.256 15.36 0 5.088 3.072 8.064 6.624 8.064 3.264 0 5.856-2.688 5.856-5.856 0-3.168-2.304-5.472-5.184-5.472-.576 0-1.248.096-1.44.192.48-3.264 3.456-7.104 6.528-9.024L25.864 4z"></path></svg>
                </div>

                <!-- Review 3 -->
                <div class="bg-white p-8 rounded-xl shadow-sm border border-gray-200 relative mt-8 md:mt-0 hover:shadow-md transition">
                    <div class="flex text-yellow-400 mb-4">
                        @for($i = 0; $i < 5; $i++)
                        <svg class="h-5 w-5 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                        @endfor
                    </div>
                    <p class="text-gray-600 mb-6 italic relative z-10">"I recently purchased a Coolie Arm Tag from Axiyz 3D Studios, and I must say the 3D print quality is excellent. The detailing is sharp, the finishing feels smooth, and the overall durability is impressive. It looks and feels premium compared to many other 3D-printed items I've seen. Delivery was also fast and well-packed. Definitely a reliable studio for custom 3D prints, and I'm very satisfied with this purchase."</p>
                    <div class="flex items-center">
                        <div class="h-10 w-10 rounded-full bg-brand-yellow flex items-center justify-center text-brand-darkblue font-bold uppercase">MP</div>
                        <div class="ml-3 text-sm font-medium text-gray-900">MR XL STUDIO</div>
                    </div>
                    <svg class="absolute top-6 right-6 h-8 w-8 text-gray-100" fill="currentColor" viewBox="0 0 32 32" aria-hidden="true"><path d="M9.352 4C4.456 7.456 1 13.12 1 19.36c0 5.088 3.072 8.064 6.624 8.064 3.36 0 5.856-2.688 5.856-5.856 0-3.168-2.208-5.472-5.088-5.472-.576 0-1.344.096-1.536.192.48-3.264 3.552-7.104 6.624-9.024L9.352 4zm16.512 0c-4.8 3.456-8.256 9.12-8.256 15.36 0 5.088 3.072 8.064 6.624 8.064 3.264 0 5.856-2.688 5.856-5.856 0-3.168-2.304-5.472-5.184-5.472-.576 0-1.248.096-1.44.192.48-3.264 3.456-7.104 6.528-9.024L25.864 4z"></path></svg>
                </div>
            </div>

            <!-- Button to real Google Reviews -->
            <div class="mt-12 text-center">
                <a href="{{ route('testimonials') }}" class="inline-flex items-center space-x-2 text-brand-darkblue font-semibold hover:text-brand-red transition border border-gray-300 rounded-full px-8 py-3 bg-white hover:border-brand-red hover:shadow-md shadow-sm group">
                    <svg class="w-5 h-5 text-brand-yellow group-hover:text-brand-red transition" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                    </svg>
                    <span>View All Testimonials</span>
                    <svg class="w-4 h-4 ml-1 transform group-hover:translate-x-1 transition" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                    </svg>
                </a>
            </div>
        </div>
    </div>

    <!-- Call to action with depth -->
    <div class="bg-brand-red relative shadow-[inset_0_15px_15px_-15px_rgba(0,0,0,0.4),inset_0_-15px_15px_-15px_rgba(0,0,0,0.4)]">
        <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:py-16 lg:px-8 lg:flex lg:items-center lg:justify-between">
            <h2 class="text-3xl font-extrabold tracking-tight text-white sm:text-4xl">
                <span class="block">Ready for a custom part?</span>
                <span class="block text-brand-yellow text-opacity-90">Request a quote today.</span>
            </h2>
            <div class="mt-8 flex lg:mt-0 lg:flex-shrink-0">
                <div class="inline-flex rounded-md shadow">
                    <a href="https://wa.me/601165019369?text=axiyz3dstudio-I+would+like+a+quote" target="_blank" class="inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-brand-red bg-white hover:bg-gray-50 transition duration-300">
                        Contact Sales
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-public-layout>
