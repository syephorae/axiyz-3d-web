<x-public-layout>
    <div class="bg-white">
        <!-- Header -->
        <div class="bg-brand-darkblue py-16">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                <h1 class="text-4xl font-extrabold text-white tracking-tight">Products <span class="text-brand-red">&</span> Services</h1>
                <p class="mt-4 max-w-2xl mx-auto text-xl text-gray-300">
                    Purchase 3D printing supplies directly, or request customized quotes for our expert design and printing services.
                </p>
            </div>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
            
            <!-- Standard Products -->
            <div class="pb-12 border-b border-gray-200">
                <h2 class="text-2xl font-bold text-gray-900 sm:text-3xl mb-8">Standard Products (Filaments & Resins)</h2>
                
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-y-10 gap-x-6 xl:gap-x-8">
                    <!-- Product Card -->
                    <div class="group relative">
                        <div class="w-full min-h-80 bg-gray-200 aspect-w-1 aspect-h-1 rounded-md overflow-hidden group-hover:opacity-75 lg:h-80 lg:aspect-none">
                            <img src="https://images.unsplash.com/photo-1628126235206-52627d35ec61?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" alt="PLA Filament" class="w-full h-full object-center object-cover lg:w-full lg:h-full">
                        </div>
                        <div class="mt-4 flex justify-between">
                            <div>
                                <h3 class="text-sm text-gray-700">
                                    <a href="#">
                                        <span aria-hidden="true" class="absolute inset-0"></span>
                                        Premium PLA Filament (1KG) - Red
                                    </a>
                                </h3>
                                <p class="mt-1 text-sm text-gray-500">1.75mm</p>
                            </div>
                            <p class="text-sm font-medium text-gray-900">$25.00</p>
                        </div>
                        <div class="mt-4">
                            <button class="w-full bg-brand-yellow text-brand-darkblue px-4 py-2 rounded-md font-semibold hover:bg-yellow-500 transition shadow-sm z-10 relative">Add to Cart</button>
                        </div>
                    </div>

                    <!-- Product Card -->
                    <div class="group relative">
                        <div class="w-full min-h-80 bg-gray-200 aspect-w-1 aspect-h-1 rounded-md overflow-hidden group-hover:opacity-75 lg:h-80 lg:aspect-none">
                            <img src="https://images.unsplash.com/photo-1628126235206-52627d35ec61?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" alt="PETG Filament" class="w-full h-full object-center object-cover lg:w-full lg:h-full" style="filter: hue-rotate(200deg);">
                        </div>
                        <div class="mt-4 flex justify-between">
                            <div>
                                <h3 class="text-sm text-gray-700">
                                    <a href="#">
                                        <span aria-hidden="true" class="absolute inset-0"></span>
                                        High-Strength PETG (1KG) - Blue
                                    </a>
                                </h3>
                                <p class="mt-1 text-sm text-gray-500">1.75mm</p>
                            </div>
                            <p class="text-sm font-medium text-gray-900">$30.00</p>
                        </div>
                        <div class="mt-4">
                            <button class="w-full bg-brand-yellow text-brand-darkblue px-4 py-2 rounded-md font-semibold hover:bg-yellow-500 transition shadow-sm z-10 relative">Add to Cart</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Custom Services -->
            <div class="py-12">
                <h2 class="text-2xl font-bold text-gray-900 sm:text-3xl mb-8">Custom Services (Request a Quote)</h2>
                
                <div class="space-y-8">
                    <div class="bg-gray-50 border border-gray-200 rounded-lg p-6 sm:p-8 flex flex-col sm:flex-row items-center justify-between hover:shadow-lg transition">
                        <div class="mb-4 sm:mb-0 sm:mr-6 flex-1">
                            <h3 class="text-xl font-bold text-brand-darkblue">Custom 3D Printing Service</h3>
                            <p class="mt-2 text-gray-600">Have a model already? Upload your STL or GLB file and specify your material requires for a rapid quote.</p>
                        </div>
                        <a href="{{ route('contact') }}" class="px-6 py-3 bg-brand-red text-white rounded-md font-semibold hover:bg-red-700 transition shadow">Request Quote</a>
                    </div>
                    
                    <div class="bg-gray-50 border border-gray-200 rounded-lg p-6 sm:p-8 flex flex-col sm:flex-row items-center justify-between hover:shadow-lg transition">
                        <div class="mb-4 sm:mb-0 sm:mr-6 flex-1">
                            <h3 class="text-xl font-bold text-brand-darkblue">Reverse Engineering & CAD Design</h3>
                            <p class="mt-2 text-gray-600">Need a broken part replaced or a new idea drawn up? Our experts can design accurate, functional parts.</p>
                        </div>
                        <a href="{{ route('contact') }}" class="px-6 py-3 bg-brand-red text-white rounded-md font-semibold hover:bg-red-700 transition shadow">Request Quote</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-public-layout>
