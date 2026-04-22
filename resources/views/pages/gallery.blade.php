<x-public-layout>
    <div class="bg-white dot-grid interactive-grid relative overflow-hidden py-12">
        <!-- Spotlight Layer (follows mouse) -->
        <div class="spotlight-bg"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <!-- Header -->
            <div class="text-center mb-12">
                <h1 class="text-3xl font-extrabold text-brand-darkblue sm:text-4xl">
                    Our <span class="text-brand-red">Portfolio</span>
                </h1>
                <p class="mt-3 max-w-2xl mx-auto text-xl text-gray-500 sm:mt-4">
                    Explore our recent projects. Hover over a card to interact!
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
            -->            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                {{-- Item 1 --}}
                <div class="gallery-card" onclick="openLightbox(Array.from(document.querySelectorAll('.gallery-card')).indexOf(this))">
                    <div class="photo-view">
                        <img src="/images/helmet.jpg" alt="Sci-Fi Helmet">
                    </div>
                    <div class="gallery-overlay">
                        <p class="text-xs font-semibold text-brand-yellow uppercase tracking-widest">3D Modeling & Design</p>
                        <p class="text-white font-bold text-base mt-1">Sci-Fi Helmet Prop</p>
                        <p class="text-gray-300 text-xs mt-1 line-clamp-2">High-resolution prop for a short film. Designed from scratch and printed in durable resin.</p>
                    </div>
                </div>
                {{-- Item 3 --}}
                <div class="gallery-card" onclick="openLightbox(Array.from(document.querySelectorAll('.gallery-card')).indexOf(this))">
                    <div class="photo-view">
                        <img src="/images/bday.jpg" alt="Thanos Birthday Gift">
                    </div>
                    <div class="gallery-overlay">
                        <p class="text-xs font-semibold text-brand-yellow uppercase tracking-widest">FDM Printing Service</p>
                        <p class="text-white font-bold text-base mt-1">Thanos Birthday Gift</p>
                        <p class="text-gray-300 text-xs mt-1 line-clamp-2">Custom character print finished with high-quality paint application.</p>
                    </div>
                </div>

                {{-- Item 4 --}}
                <div class="gallery-card" onclick="openLightbox(Array.from(document.querySelectorAll('.gallery-card')).indexOf(this))">
                    <div class="photo-view">
                        <img src="/images/car.jpg" alt="Car Miniatures">
                    </div>
                    <div class="gallery-overlay">
                        <p class="text-xs font-semibold text-brand-yellow uppercase tracking-widest">FDM Printing Service</p>
                        <p class="text-white font-bold text-base mt-1">Classic Car Model</p>
                        <p class="text-gray-300 text-xs mt-1 line-clamp-2">Scaled miniature with extreme detail, showcasing our FDM print resolution.</p>
                    </div>
                </div>

                {{-- Item 5 --}}
                <div class="gallery-card" onclick="openLightbox(Array.from(document.querySelectorAll('.gallery-card')).indexOf(this))">
                    <div class="photo-view">
                        <img src="/images/gear.jpg" alt="Mechanical Gear">
                    </div>
                    <div class="gallery-overlay">
                        <p class="text-xs font-semibold text-brand-yellow uppercase tracking-widest">Engineering Services</p>
                        <p class="text-white font-bold text-base mt-1">Functional Mechanical Gear</p>
                        <p class="text-gray-300 text-xs mt-1 line-clamp-2">High-strength mechanical component designed for industrial load-bearing.</p>
                    </div>
                </div>

                {{-- Item 6 --}}
                <div class="gallery-card" onclick="openLightbox(Array.from(document.querySelectorAll('.gallery-card')).indexOf(this))">
                    <div class="photo-view">
                        <img src="/images/mech.jpg" alt="Mech Prototype">
                    </div>
                    <div class="gallery-overlay">
                        <p class="text-xs font-semibold text-brand-yellow uppercase tracking-widest">Custom Fabrication</p>
                        <p class="text-white font-bold text-base mt-1">Mecha Prototype</p>
                        <p class="text-gray-300 text-xs mt-1 line-clamp-2">End-to-end engineering prototype developed for a functional testing phase.</p>
                    </div>
                </div>

                {{-- Item 7 --}}
                <div class="gallery-card" onclick="openLightbox(Array.from(document.querySelectorAll('.gallery-card')).indexOf(this))">
                    <div class="photo-view">
                        <img src="/images/eevee.jpg" alt="Eevee Pokémon">
                    </div>
                    <div class="gallery-overlay">
                        <p class="text-xs font-semibold text-brand-yellow uppercase tracking-widest">Character Modeling</p>
                        <p class="text-white font-bold text-base mt-1">Eevee Figure</p>
                        <p class="text-gray-300 text-xs mt-1 line-clamp-2">High-detail Pokémon display model, optimized for smooth resin printing.</p>
                    </div>
                </div>

                {{-- Item 8 --}}
                <div class="gallery-card" onclick="openLightbox(Array.from(document.querySelectorAll('.gallery-card')).indexOf(this))">
                    <div class="photo-view">
                        <img src="/images/goku.jpg" alt="Goku Statue">
                    </div>
                    <div class="gallery-overlay">
                        <p class="text-xs font-semibold text-brand-yellow uppercase tracking-widest">Collectible Figures</p>
                        <p class="text-white font-bold text-base mt-1">Goku Martial Arts Figure</p>
                        <p class="text-gray-300 text-xs mt-1 line-clamp-2">Dynamic pose character print with intricate clothing and muscle definition.</p>
                    </div>
                </div>

                {{-- Item 9 --}}
                <div class="gallery-card" onclick="openLightbox(Array.from(document.querySelectorAll('.gallery-card')).indexOf(this))">
                    <div class="photo-view">
                        <img src="/images/gundam.jpg" alt="Gundam RX-78">
                    </div>
                    <div class="gallery-overlay">
                        <p class="text-xs font-semibold text-brand-yellow uppercase tracking-widest">Model Kits & Props</p>
                        <p class="text-white font-bold text-base mt-1">Gundam RX-78 Model</p>
                        <p class="text-gray-300 text-xs mt-1 line-clamp-2">Detailed gundam build, printed in parts and assembled for maximum mechanical fidelity.</p>
                    </div>
                </div>

                {{-- Item 11 --}}
                <div class="gallery-card" onclick="openLightbox(Array.from(document.querySelectorAll('.gallery-card')).indexOf(this))">
                    <div class="photo-view">
                        <img src="/images/naruto.jpg" alt="Naruto Uzumaki Collectible">
                    </div>
                    <div class="gallery-overlay">
                        <p class="text-xs font-semibold text-brand-yellow uppercase tracking-widest">Post-Processing Service</p>
                        <p class="text-white font-bold text-base mt-1">Naruto Uzumaki Figure</p>
                        <p class="text-gray-300 text-xs mt-1 line-clamp-2">Showcasing the transition from raw print to professional paint application (available in colored & uncolored variants).</p>
                    </div>
                </div>

                {{-- Item 12 --}}
                <div class="gallery-card" onclick="openLightbox(Array.from(document.querySelectorAll('.gallery-card')).indexOf(this))">
                    <div class="photo-view">
                        <img src="/images/PIE.jpg" alt="Industrial Part - PIE">
                    </div>
                    <div class="gallery-overlay">
                        <p class="text-xs font-semibold text-brand-yellow uppercase tracking-widest">Industrial Engineering</p>
                        <p class="text-white font-bold text-base mt-1">Precision Part (PIE)</p>
                        <p class="text-gray-300 text-xs mt-1 line-clamp-2">Technical component designed for precision industrial applications with tight tolerances.</p>
                    </div>
                </div>

                {{-- Item 13 --}}
                <div class="gallery-card" onclick="openLightbox(Array.from(document.querySelectorAll('.gallery-card')).indexOf(this))">
                    <div class="photo-view">
                        <img src="/images/plate.jpg" alt="Infill Pattern Plate">
                    </div>
                    <div class="gallery-overlay">
                        <p class="text-xs font-semibold text-brand-yellow uppercase tracking-widest">R&D & Testing</p>
                        <p class="text-white font-bold text-base mt-1">Infill Test Plate</p>
                        <p class="text-gray-300 text-xs mt-1 line-clamp-2">Structural testing of various 3D infill patterns to optimize strength-to-weight ratios.</p>
                    </div>
                </div>

                {{-- Item 14 --}}
                <div class="gallery-card" onclick="openLightbox(Array.from(document.querySelectorAll('.gallery-card')).indexOf(this))">
                    <div class="photo-view">
                        <img src="/images/prototype.jpg" alt="Custom Electronics Housing">
                    </div>
                    <div class="gallery-overlay">
                        <p class="text-xs font-semibold text-brand-yellow uppercase tracking-widest">Rapid Prototyping</p>
                        <p class="text-white font-bold text-base mt-1">Prototype Housing</p>
                        <p class="text-gray-300 text-xs mt-1 line-clamp-2">Custom-fit electronic enclosure prototype designed for functional testing.</p>
                    </div>
            </div>

                {{-- Item 16 --}}
                <div class="gallery-card" onclick="openLightbox(Array.from(document.querySelectorAll('.gallery-card')).indexOf(this))">
                    <div class="photo-view">
                        <img src="/images/tyre.jpg" alt="Model Tyre">
                    </div>
                    <div class="gallery-overlay">
                        <p class="text-xs font-semibold text-brand-yellow uppercase tracking-widest">Scaled Miniatures</p>
                        <p class="text-white font-bold text-base mt-1">Scale Model Tyre & Rim</p>
                        <p class="text-gray-300 text-xs mt-1 line-clamp-2">Extreme detail on a scaled transport component, including realistic tread texture.</p>
                    </div>
                </div>
                {{-- Item 17 --}}
                <div class="gallery-card" onclick="openLightbox(Array.from(document.querySelectorAll('.gallery-card')).indexOf(this))">
                    <div class="photo-view">
                        <img src="/images/fyp.jpeg" alt="Final Year Project Print">
                    </div>
                    <div class="gallery-overlay">
                        <p class="text-xs font-semibold text-brand-yellow uppercase tracking-widest">Student Printing Service</p>
                        <p class="text-white font-bold text-base mt-1">Final Year Project Print</p>
                        <p class="text-gray-300 text-xs mt-1 line-clamp-2">Clean and accurate parts for engineering students, optimized for functional assembly and high-precision testing.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Lightbox Modal -->
    <div id="lightbox" class="fixed inset-0 z-[9999] hidden bg-black bg-opacity-95 flex-col items-center justify-center p-4 md:p-8" onclick="closeLightbox()">
        <!-- Close Button (Fixed Top Right) -->
        <div class="fixed top-6 right-6 z-[10000]">
            <button class="text-white hover:text-brand-yellow transition bg-gray-900 bg-opacity-80 p-3 rounded-full border border-gray-700 shadow-2xl" onclick="closeLightbox()">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M6 18L18 6M6 6l12 12"/></svg>
            </button>
        </div>

        <!-- Navigation Arrows (Fixed Sides) -->
        <div class="fixed left-4 md:left-8 top-1/2 -translate-y-1/2 z-[10000]">
            <button class="text-white hover:text-brand-yellow transition-all hover:scale-110 bg-brand-darkblue bg-opacity-90 p-4 md:p-6 rounded-full border-2 border-brand-yellow shadow-[0_0_20px_rgba(35,30,111,0.5)]" onclick="changeLightbox(-1, event)" title="Previous">
                <svg class="w-8 h-8 md:w-12 md:h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M15 19l-7-7 7-7"/></svg>
            </button>
        </div>
        <div class="fixed right-4 md:right-8 top-1/2 -translate-y-1/2 z-[10000]">
            <button class="text-white hover:text-brand-yellow transition-all hover:scale-110 bg-brand-darkblue bg-opacity-90 p-4 md:p-6 rounded-full border-2 border-brand-yellow shadow-[0_0_20px_rgba(35,30,111,0.5)]" onclick="changeLightbox(1, event)" title="Next">
                <svg class="w-8 h-8 md:w-12 md:h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M9 5l7 7-7 7"/></svg>
            </button>
        </div>

        <!-- Content Area (Centered) -->
        <div class="flex flex-col items-center justify-center w-full h-full max-w-5xl mx-auto pointer-events-none">
            <div class="relative pointer-events-auto">
                <img id="lightbox-img" src="" alt="Portfolio Full View" 
                     class="max-w-full max-h-[70vh] object-contain rounded-lg shadow-[0_0_50px_rgba(0,0,0,0.5)]">
            </div>
            
            <!-- Text Info (Centered with Background) -->
            <div class="mt-8 text-center pointer-events-auto bg-gray-900 bg-opacity-80 p-6 rounded-2xl border border-gray-700 max-w-2xl shadow-xl">
                <h3 id="lightbox-title" class="text-2xl md:text-3xl font-bold text-brand-yellow mb-2"></h3>
                <p id="lightbox-desc" class="text-gray-200 text-sm md:text-base leading-relaxed mb-4"></p>
                <div id="lightbox-counter" class="text-xs text-gray-500 font-mono tracking-widest uppercase"></div>
            </div>
        </div>
    </div>

    <script>
        let currentIdx = 0;
        const cards = document.querySelectorAll('.gallery-card');

        function openLightbox(index) {
            currentIdx = index;
            updateLightbox();
            const lb = document.getElementById('lightbox');
            lb.classList.remove('hidden');
            lb.classList.add('flex');
            document.body.style.overflow = 'hidden';
        }

        function closeLightbox() {
            const lb = document.getElementById('lightbox');
            lb.classList.add('hidden');
            lb.classList.remove('flex');
            document.body.style.overflow = '';
        }

        function changeLightbox(dir, event) {
            if (event) event.stopPropagation();
            currentIdx = (currentIdx + dir + cards.length) % cards.length;
            updateLightbox();
        }

        function updateLightbox() {
            const card = cards[currentIdx];
            const imgSource = card.querySelector('.photo-view img');
            const title = card.querySelector('.font-bold').innerText;
            const desc = card.querySelector('.text-gray-300').innerText;
            
            const lbImg = document.getElementById('lightbox-img');
            lbImg.src = imgSource.src;
            document.getElementById('lightbox-title').innerText = title;
            document.getElementById('lightbox-desc').innerText = desc;
            document.getElementById('lightbox-counter').innerText = 'PROJECT ' + (currentIdx + 1) + ' OF ' + cards.length;
        }

        // Support keyboard navigation
        document.addEventListener('keydown', function(e) {
            const lb = document.getElementById('lightbox');
            if (lb.classList.contains('hidden')) return;
            
            if (e.key === 'ArrowLeft') changeLightbox(-1);
            if (e.key === 'ArrowRight') changeLightbox(1);
            if (e.key === 'Escape') closeLightbox();
        });

        function toggleModel(btn) {
            event.stopPropagation();
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
