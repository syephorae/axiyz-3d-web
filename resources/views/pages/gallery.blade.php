<x-public-layout>
    <div class="bg-gray-50 py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <!-- Header -->
            <div class="text-center mb-12">
                <h1 class="text-3xl font-extrabold text-brand-darkblue sm:text-4xl">
                    Our <span class="text-brand-red">Portfolio</span>
                </h1>
                <p class="mt-3 max-w-2xl mx-auto text-xl text-gray-500 sm:mt-4">
                    Explore our recent projects. Hover over a card to interact — some have a live 3D viewer!
                </p>
            </div>

            <style>
                .gallery-card { position: relative; overflow: hidden; border-radius: 0.75rem; background: #111; cursor: pointer; }
                .gallery-card .photo-view,
                .gallery-card .model-view { width: 100%; height: 280px; }
                .gallery-card .photo-view img { width: 100%; height: 100%; object-fit: cover; display: block; transition: transform 0.4s ease; }
                .gallery-card:hover .photo-view img { transform: scale(1.05); }
                .gallery-card .model-view { display: none; }
                .gallery-card.show-model .photo-view { display: none; }
                .gallery-card.show-model .model-view { display: block; }

                .gallery-overlay {
                    position: absolute; inset: 0;
                    background: linear-gradient(to top, rgba(35,30,111,0.85) 0%, rgba(35,30,111,0.2) 60%, transparent 100%);
                    opacity: 0; transition: opacity 0.3s ease;
                    display: flex; flex-direction: column; justify-content: flex-end; padding: 1.25rem;
                    pointer-events: none;
                }
                .gallery-card:hover .gallery-overlay { opacity: 1; pointer-events: auto; }
                .gallery-card.show-model .gallery-overlay { opacity: 1; pointer-events: none; background: linear-gradient(to top, rgba(35,30,111,0.7) 0%, transparent 40%); }
                .gallery-card.show-model .gallery-overlay .btn-3d { pointer-events: auto; }

                .btn-3d {
                    display: inline-flex; align-items: center; gap: 6px;
                    background: #fff; color: #231e6f;
                    font-size: 0.8rem; font-weight: 700;
                    padding: 6px 14px; border-radius: 9999px;
                    border: none; cursor: pointer;
                    box-shadow: 0 2px 8px rgba(0,0,0,0.2);
                    transition: background 0.2s, transform 0.2s;
                    margin-top: 8px; align-self: flex-start;
                }
                .btn-3d:hover { background: #f3f4f6; transform: scale(1.05); }
                .btn-3d svg { width: 14px; height: 14px; }
            </style>

            <!--
                HOW TO ADD YOUR OWN ITEMS:
                1. Copy one of the <div class="gallery-card"> blocks below
                2. Set data-has-model="true" if you have a 3D model, or "false" if photo only
                3. Replace the <img src="..."> with your photo
                4. Replace the model-viewer src="..." with your GLB/STL file path e.g. src="/models/mypart.glb"
                5. Update title, category, and description
            -->

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">

                {{-- Item 1 – Has 3D model --}}
                <div class="gallery-card" data-has-model="true">
                    <div class="photo-view">
                        <img src="https://images.unsplash.com/photo-1559827260-dc66d52bef19?w=800&q=80" alt="Sci-Fi Helmet">
                    </div>
                    <div class="model-view">
                        <model-viewer src="https://modelviewer.dev/shared-assets/models/glTF-Sample-Assets/Models/DamagedHelmet/glTF-Binary/DamagedHelmet.glb"
                            auto-rotate camera-controls shadow-intensity="1"
                            style="width:100%;height:280px;background:#111;">
                        </model-viewer>
                    </div>
                    <div class="gallery-overlay">
                        <p class="text-xs font-semibold text-brand-yellow uppercase tracking-widest">3D Modeling & Design</p>
                        <p class="text-white font-bold text-base mt-1">Damaged Sci-Fi Helmet</p>
                        <p class="text-gray-300 text-xs mt-1 line-clamp-2">High-resolution prop for a short film. Designed from scratch and printed in durable resin.</p>
                        <button class="btn-3d" onclick="toggleModel(this)">
                            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 10V11"/></svg>
                            Switch to 3D
                        </button>
                    </div>
                </div>

                {{-- Item 2 – Has 3D model --}}
                <div class="gallery-card" data-has-model="true">
                    <div class="photo-view">
                        <img src="https://images.unsplash.com/photo-1581091226033-d5c48150dbaa?w=800&q=80" alt="Toy Car">
                    </div>
                    <div class="model-view">
                        <model-viewer src="https://modelviewer.dev/shared-assets/models/ToyCar.glb"
                            auto-rotate camera-controls shadow-intensity="1"
                            style="width:100%;height:280px;background:#111;">
                        </model-viewer>
                    </div>
                    <div class="gallery-overlay">
                        <p class="text-xs font-semibold text-brand-yellow uppercase tracking-widest">Reverse Engineering</p>
                        <p class="text-white font-bold text-base mt-1">Custom Toy Car Shell</p>
                        <p class="text-gray-300 text-xs mt-1 line-clamp-2">Re-engineered from a broken original. Accurate to the micrometer and test-printed perfectly.</p>
                        <button class="btn-3d" onclick="toggleModel(this)">
                            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 10V11"/></svg>
                            Switch to 3D
                        </button>
                    </div>
                </div>

                {{-- Item 3 - Thanos Bday– Photo only, no 3D model --}}
                <div class="gallery-card" data-has-model="false">
                    <div class="photo-view">
                        <img src="/images/bday.jpg " alt="Mechanical Parts">
                    </div>
                    <div class="gallery-overlay">
                        <p class="text-xs font-semibold text-brand-yellow uppercase tracking-widest">FDM Printing Service</p>
                        <p class="text-white font-bold text-base mt-1">Thanos Birthday Gift</p>
                        <p class="text-gray-300 text-xs mt-1 line-clamp-2">High-strength PETG parts printed for industrial application.</p>
                    </div>
                </div>

                {{-- Item 4 – Car Model - Photo only, no 3D model --}}
                <div class="gallery-card" data-has-model="false">
                    <div class="photo-view">
                        <img src="/images/car.jpg" alt="Car Miniatures">
                    </div>
                    <div class="gallery-overlay">
                        <p class="text-xs font-semibold text-brand-yellow uppercase tracking-widest">FDM Printing Service</p>
                        <p class="text-white font-bold text-base mt-1">Car Model</p>
                        <p class="text-gray-300 text-xs mt-1 line-clamp-2">Extremely crisp detail using 8K resin printers for tabletop games and collectors.</p>
                    </div>
                </div>

                {{-- Item 5 – Gear - Photo only --}}
                <div class="gallery-card" data-has-model="false">
                    <div class="photo-view">
                        <img src="/images/gear.jpg" alt="Gear">
                    </div>
                    <div class="gallery-overlay">
                        <p class="text-xs font-semibold text-brand-yellow uppercase tracking-widest">FDM Printing Service</p>
                        <p class="text-white font-bold text-base mt-1">Gear</p>
                        <p class="text-gray-300 text-xs mt-1 line-clamp-2">Custom PLA part finished with premium chrome electroplating treatment.</p>
                    </div>
                </div>

                {{-- Item 6 – Has 3D model --}}
                <div class="gallery-card" data-has-model="true">
                    <div class="photo-view">
                        <img src="https://images.unsplash.com/photo-1605732562742-3023a888e56e?w=800&q=80" alt="Engineering Part">
                    </div>
                    <div class="model-view">
                        <model-viewer src="https://modelviewer.dev/shared-assets/models/Astronaut.glb"
                            auto-rotate camera-controls shadow-intensity="1"
                            style="width:100%;height:280px;background:#111;">
                        </model-viewer>
                    </div>
                    <div class="gallery-overlay">
                        <p class="text-xs font-semibold text-brand-yellow uppercase tracking-widest">Engineering Services</p>
                        <p class="text-white font-bold text-base mt-1">Industrial Prototype Part</p>
                        <p class="text-gray-300 text-xs mt-1 line-clamp-2">End-to-end engineering prototype developed for a manufacturing client.</p>
                        <button class="btn-3d" onclick="toggleModel(this)">
                            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 10V11"/></svg>
                            Switch to 3D
                        </button>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <script>
        function toggleModel(btn) {
            var card = btn.closest('.gallery-card');
            var isModel = card.classList.toggle('show-model');
            var svg = '<svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 10V11"/></svg>';
            var imgSvg = '<svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>';
            btn.innerHTML = isModel
                ? imgSvg + ' Switch to Photo'
                : svg + ' Switch to 3D';
        }
    </script>
</x-public-layout>
