<x-public-layout>
    <div class="relative bg-brand-darkblue overflow-hidden">
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
                                <a href="{{ route('services') }}" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-brand-red hover:bg-red-700 md:py-4 md:text-lg md:px-10 transition">
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
            <!-- 3D Model Viewer Example using Google's model-viewer component -->
            <model-viewer src="https://modelviewer.dev/shared-assets/models/Astronaut.glb" auto-rotate camera-controls shadow-intensity="1" ar class="w-full h-[300px] lg:h-full bg-transparent"></model-viewer>
        </div>
    </div>
    
    <!-- Services Overview -->
    <div class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
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
                    <div class="text-center p-6 bg-gray-50 rounded-lg shadow-sm border border-gray-100 hover:shadow-lg hover:border-brand-yellow transition duration-300 transform hover:-translate-y-1">
                        <div class="flex items-center justify-center h-16 w-16 rounded-full bg-brand-darkblue text-white mx-auto mb-4 shadow-md">
                            <svg class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 4a2 2 0 114 0v1a1 1 0 001 1h3a1 1 0 011 1v3a1 1 0 01-1 1h-1a2 2 0 100 4h1a1 1 0 011 1v3a1 1 0 01-1 1h-3a1 1 0 01-1-1v-1a2 2 0 10-4 0v1a1 1 0 01-1 1H7a1 1 0 01-1-1v-3a1 1 0 00-1-1H4a2 2 0 110-4h1a1 1 0 001-1V7a1 1 0 00-1-1H4a1 1 0 01-1-1V4a1 1 0 011-1h3a1 1 0 001-1v-1z"></path></svg>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900">3D CAD Design</h3>
                        <p class="mt-2 text-base text-gray-500">Custom 3D design for printing, prototyping & product development. Engineering & mechanical design with print-ready files.</p>
                    </div>
                    
                    <div class="text-center p-6 bg-gray-50 rounded-lg shadow-sm border border-gray-100 hover:shadow-lg hover:border-brand-red transition duration-300 transform hover:-translate-y-1">
                        <div class="flex items-center justify-center h-16 w-16 rounded-full bg-brand-red text-white mx-auto mb-4 shadow-md">
                            <svg class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"></path></svg>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900">Reverse Engineering</h3>
                        <p class="mt-2 text-base text-gray-500">Recreate broken or unavailable parts into printable 3D models. Accurate measurement, modeling and functional replacements.</p>
                    </div>
                    
                    <div class="text-center p-6 bg-gray-50 rounded-lg shadow-sm border border-gray-100 hover:shadow-lg hover:border-brand-darkblue transition duration-300 transform hover:-translate-y-1">
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

    <!-- Call to action -->
    <div class="bg-brand-red">
        <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:py-16 lg:px-8 lg:flex lg:items-center lg:justify-between">
            <h2 class="text-3xl font-extrabold tracking-tight text-white sm:text-4xl">
                <span class="block">Ready for a custom part?</span>
                <span class="block text-brand-yellow text-opacity-90">Request a quote today.</span>
            </h2>
            <div class="mt-8 flex lg:mt-0 lg:flex-shrink-0">
                <div class="inline-flex rounded-md shadow">
                    <a href="{{ route('contact') }}" class="inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-brand-red bg-white hover:bg-gray-50 transition duration-300">
                        Contact Sales
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-public-layout>
