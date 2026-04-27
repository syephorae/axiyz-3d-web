<x-public-layout>
    <div class="bg-white dot-grid interactive-grid relative overflow-hidden py-16 sm:py-24">
        <!-- Spotlight Layer (follows mouse) -->
        <div class="spotlight-bg"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="lg:grid lg:grid-cols-2 lg:gap-16 items-center">
                <div>
                    <h2 class="text-4xl font-extrabold text-brand-darkblue tracking-tight sm:text-5xl">
                        About <span class="text-brand-red">aXiYZ 3D Studios</span>
                    </h2>
                    <p class="mt-4 text-xl text-gray-500">
                        We are a passionate team dedicated to bringing your digital models into the physical world through precision 3D printing and modeling.
                    </p>
                    
                    <div class="mt-8 space-y-6">
                        <div class="flex">
                            <div class="flex-shrink-0">
                                <div class="flex items-center justify-center h-12 w-12 rounded-md bg-brand-yellow text-brand-darkblue">
                                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                                </div>
                            </div>
                            <div class="ml-4">
                                <h3 class="text-lg leading-6 font-medium text-gray-900">Innovation</h3>
                                <p class="mt-2 text-base text-gray-500">
                                    We stay at the cutting edge of 3D printing technology to offer you the best possible products.
                                </p>
                            </div>
                        </div>

                        <div class="flex">
                            <div class="flex-shrink-0">
                                <div class="flex items-center justify-center h-12 w-12 rounded-md bg-brand-yellow text-brand-darkblue">
                                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
                                </div>
                            </div>
                            <div class="ml-4">
                                <h3 class="text-lg leading-6 font-medium text-gray-900">Quality</h3>
                                <p class="mt-2 text-base text-gray-500">
                                    Our stringent quality checks ensure that every model and print meets the highest standards of durability and accuracy.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="mt-12 lg:mt-0 relative h-[600px] overflow-visible">
                    <!-- Background Peeking Model (Consistency) -->
                    <div class="absolute -right-16 lg:-right-20 top-1/2 -translate-y-1/2 w-48 lg:w-80 h-48 lg:h-80 pointer-events-none z-0 opacity-20 lg:opacity-30 transition-opacity">
                        <model-viewer src="/models/car.glb" auto-rotate rotation-per-second="-30deg" class="w-full h-full bg-transparent border-none" loading="lazy" reveal="auto" shadow-intensity="1" camera-orbit="0deg 75deg 150%"></model-viewer>
                    </div>

                    <!-- THE BENTO COLLAGE -->
                    <div class="grid grid-cols-6 grid-rows-6 gap-3 h-full relative z-10 p-2">
                        <!-- Large Feature Tiles -->
                        <div class="col-span-4 row-span-3 rounded-2xl overflow-hidden shadow-lg reveal-hidden border-2 border-brand-red/10" style="transition-delay: 0.1s;">
                            <img src="/images/gundam.jpg" class="w-full h-full object-cover hover:scale-110 transition duration-500" alt="Gundam">
                        </div>
                        <div class="col-span-2 row-span-2 rounded-2xl overflow-hidden shadow-md reveal-hidden border-2 border-brand-yellow/10" style="transition-delay: 0.2s;">
                            <img src="/images/helmet.jpg" class="w-full h-full object-cover hover:scale-110 transition duration-500" alt="Helmet">
                        </div>
                        
                        <!-- Medium Tiles -->
                        <div class="col-span-2 row-span-2 rounded-2xl overflow-hidden shadow-md reveal-hidden" style="transition-delay: 0.4s;">
                            <img src="/images/car.jpg" class="w-full h-full object-cover hover:scale-110 transition duration-500" alt="Car">
                        </div>
                        <div class="col-span-2 row-span-2 rounded-2xl overflow-hidden shadow-sm reveal-hidden" style="transition-delay: 0.5s;">
                            <img src="/images/gear.jpg" class="w-full h-full object-cover hover:scale-110 transition duration-500" alt="Gear">
                        </div>

                        <!-- Small "Accent" Tiles -->
                        <div class="col-span-1 row-span-1 rounded-xl overflow-hidden shadow-sm reveal-hidden" style="transition-delay: 0.6s;">
                            <img src="/images/eevee.jpg" class="w-full h-full object-cover hover:scale-110 transition duration-500" alt="Eevee">
                        </div>
                        <div class="col-span-1 row-span-1 rounded-xl overflow-hidden shadow-sm reveal-hidden" style="transition-delay: 0.7s;">
                            <img src="/images/goku.jpg" class="w-full h-full object-cover hover:scale-110 transition duration-500" alt="Goku">
                        </div>
                        <div class="col-span-2 row-span-1 rounded-xl overflow-hidden shadow-sm reveal-hidden" style="transition-delay: 0.8s;">
                            <img src="/images/mech.jpg" class="w-full h-full object-cover hover:scale-110 transition duration-500" alt="Mech">
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</x-public-layout>
