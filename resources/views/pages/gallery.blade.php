<x-public-layout>
    <div class="bg-gray-50 py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h1 class="text-3xl font-extrabold text-brand-darkblue sm:text-4xl">
                    Our <span class="text-brand-red">Portfolio</span>
                </h1>
                <p class="mt-3 max-w-2xl mx-auto text-xl text-gray-500 sm:mt-4">
                    Explore our recent projects and interactive 3D models.
                </p>
            </div>
            
            <!-- 3D Modeling Work Section -->
            <div class="mt-16">
                <h2 class="text-2xl font-bold text-gray-900 mb-8 border-b-2 border-brand-yellow pb-2 inline-block">3D Modeling Work</h2>
                <div class="max-w-lg mx-auto grid gap-8 lg:grid-cols-2 lg:max-w-none">
                    
                    <!-- Gallery Item 1 -->
                    <div class="flex flex-col rounded-lg shadow-lg overflow-hidden bg-white hover:shadow-xl transition-shadow duration-300 relative">
                        <!-- 'Also Printed' Badge -->
                        <div class="absolute top-4 right-4 bg-brand-red text-white text-xs font-bold px-3 py-1 rounded-full z-10 shadow-md">
                            Also Printed In-House
                        </div>
                        <div class="flex-shrink-0 h-64 bg-gray-200 relative group">
                            <model-viewer src="https://modelviewer.dev/shared-assets/models/glTF-Sample-Assets/Models/DamagedHelmet/glTF-Binary/DamagedHelmet.glb" auto-rotate camera-controls shadow-intensity="1" class="w-full h-full object-cover"></model-viewer>
                            <div class="absolute inset-0 bg-brand-darkblue opacity-0 group-hover:opacity-10 transition duration-300 pointer-events-none"></div>
                        </div>
                        <div class="flex-1 bg-white p-6 flex flex-col justify-between">
                            <div class="flex-1">
                                <p class="text-sm font-medium text-brand-red">
                                    3D Modeling & Design
                                </p>
                                <div class="block mt-2">
                                    <p class="text-xl font-semibold text-gray-900">
                                        Damaged Sci-Fi Helmet
                                    </p>
                                    <p class="mt-3 text-base text-gray-500">
                                        A high-resolution recreation of a complex prop for a short film. Designed from scratch and printed in durable resin.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Gallery Item 2 -->
                    <div class="flex flex-col rounded-lg shadow-lg overflow-hidden bg-white hover:shadow-xl transition-shadow duration-300 relative">
                        <!-- 'Also Printed' Badge -->
                        <div class="absolute top-4 right-4 bg-brand-red text-white text-xs font-bold px-3 py-1 rounded-full z-10 shadow-md">
                            Also Printed In-House
                        </div>
                        <div class="flex-shrink-0 h-64 bg-gray-200 relative group">
                            <model-viewer src="https://modelviewer.dev/shared-assets/models/ToyCar.glb" auto-rotate camera-controls shadow-intensity="1" class="w-full h-full object-cover"></model-viewer>
                            <div class="absolute inset-0 bg-brand-darkblue opacity-0 group-hover:opacity-10 transition duration-300 pointer-events-none"></div>
                        </div>
                        <div class="flex-1 bg-white p-6 flex flex-col justify-between">
                            <div class="flex-1">
                                <p class="text-sm font-medium text-brand-red">
                                    Reverse Engineering
                                </p>
                                <div class="block mt-2">
                                    <p class="text-xl font-semibold text-gray-900">
                                        Custom Toy Car Shell
                                    </p>
                                    <p class="mt-3 text-base text-gray-500">
                                        Re-designed and enhanced from an original broken piece. Highly accurate to the micrometer and test-printed perfectly.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 3D Printing Work Section -->
            <div class="mt-16">
                <h2 class="text-2xl font-bold text-gray-900 mb-8 border-b-2 border-brand-yellow pb-2 inline-block">3D Printing Work</h2>
                <div class="max-w-lg mx-auto grid gap-8 lg:grid-cols-2 lg:max-w-none">
                    
                    <!-- Gallery Item 3 -->
                    <div class="flex flex-col rounded-lg shadow-lg overflow-hidden bg-white hover:shadow-xl transition-shadow duration-300">
                        <div class="flex-shrink-0 h-64 bg-gray-200 relative group">
                            <img src="https://images.unsplash.com/photo-1616423640778-28d1b53229bd?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" alt="3D Printing In progress" class="w-full h-full object-cover">
                            <div class="absolute inset-0 bg-brand-darkblue opacity-0 group-hover:opacity-10 transition duration-300 pointer-events-none"></div>
                        </div>
                        <div class="flex-1 bg-white p-6 flex flex-col justify-between">
                            <div class="flex-1">
                                <p class="text-sm font-medium text-brand-yellow">
                                    FDM Printing Service
                                </p>
                                <div class="block mt-2">
                                    <p class="text-xl font-semibold text-gray-900">
                                        Batch Print: Mechanical Parts
                                    </p>
                                    <p class="mt-3 text-base text-gray-500">
                                        High strength PETG parts printed for industrial application. Showcasing our clean layer lines and reliable batch production.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Gallery Item 4 -->
                    <div class="flex flex-col rounded-lg shadow-lg overflow-hidden bg-white hover:shadow-xl transition-shadow duration-300">
                        <div class="flex-shrink-0 h-64 bg-gray-200 relative group">
                            <img src="https://images.unsplash.com/photo-1631481177699-2a91e52db163?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" alt="Resin Print" class="w-full h-full object-cover">
                            <div class="absolute inset-0 bg-brand-darkblue opacity-0 group-hover:opacity-10 transition duration-300 pointer-events-none"></div>
                        </div>
                        <div class="flex-1 bg-white p-6 flex flex-col justify-between">
                            <div class="flex-1">
                                <p class="text-sm font-medium text-brand-yellow">
                                    Resin Printing Service
                                </p>
                                <div class="block mt-2">
                                    <p class="text-xl font-semibold text-gray-900">
                                        High-Detail Miniatures
                                    </p>
                                    <p class="mt-3 text-base text-gray-500">
                                        Extremely crisp detail achieved using 8K resin printers for tabletop games and collectors.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-public-layout>
