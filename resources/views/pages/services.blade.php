<x-public-layout>
    <div class="bg-white">
        <!-- Header -->
        <div class="bg-brand-darkblue py-16">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                <h1 class="text-4xl font-extrabold text-white tracking-tight">Our <span class="text-brand-red">Products</span></h1>
                <p class="mt-4 max-w-2xl mx-auto text-xl text-gray-300">
                    Browse our full range of 3D printing, engineering, and finishing services.
                </p>
            </div>
        </div>

        <style>
            .product-card {
                position: relative;
                overflow: hidden;
                border-radius: 0.75rem;
                border: 1px solid #e5e7eb;
                background: #f9fafb;
                width: 260px;
                flex-shrink: 0;
                transition: box-shadow 0.3s ease, transform 0.3s ease;
            }
            .product-card:hover {
                box-shadow: 0 12px 32px rgba(0,0,0,0.13);
                transform: translateY(-4px);
            }
            .img-slider {
                position: relative;
                height: 160px;
                overflow: hidden;
                background: #e5e7eb;
                border-radius: 0.5rem;
            }
            .img-slider-track {
                display: flex;
                height: 100%;
                transition: transform 0.6s ease;
            }
            .img-slider-track img {
                min-width: 100%;
                width: 100%;
                height: 100%;
                object-fit: cover;
                flex-shrink: 0;
            }
            .slider-dots {
                position: absolute;
                bottom: 6px;
                left: 50%;
                transform: translateX(-50%);
                display: flex;
                gap: 5px;
            }
            .slider-dot {
                width: 6px;
                height: 6px;
                border-radius: 9999px;
                background: rgba(255,255,255,0.5);
                transition: background 0.3s;
            }
            .slider-dot.active { background: #fff; }
            .card-front { padding: 1rem; transition: transform 0.4s ease; }
            .card-details {
                position: absolute;
                inset: 0;
                padding: 1.2rem;
                background: #231e6f;
                color: white;
                transform: translateX(100%);
                transition: transform 0.4s ease;
                display: flex;
                flex-direction: column;
                justify-content: center;
                gap: 0.6rem;
            }
            .product-card:hover .card-front  { transform: translateX(-100%); }
            .product-card:hover .card-details { transform: translateX(0); }
        </style>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 space-y-16">

            {{-- ▸ CATEGORY 1: FDM Filament Printing --}}
            <x-service-category title="FDM Filament Printing" description="Standard FDM extrusion printing using engineering-grade filaments, priced per gram.">

                {{-- PLA --}}
                <div class="product-card">
                    <div class="card-front">
                        <div class="img-slider" data-count="3">
                            <div class="img-slider-track">
                                <img src="https://images.unsplash.com/photo-1581093458791-9d15482442f6?w=400&q=80" alt="PLA 1">
                                <img src="https://images.unsplash.com/photo-1619642751034-765dfdf7c58e?w=400&q=80" alt="PLA 2">
                                <img src="https://images.unsplash.com/photo-1565967511849-76a60a516170?w=400&q=80" alt="PLA 3">
                            </div>
                            <div class="slider-dots">
                                <div class="slider-dot active"></div>
                                <div class="slider-dot"></div>
                                <div class="slider-dot"></div>
                            </div>
                        </div>
                        <h3 class="font-bold text-gray-900 text-sm mt-3 leading-tight">PLA 3D Printing</h3>
                        <p class="text-xs text-gray-500 mt-1 line-clamp-2">Suitable for prototypes & display models.</p>
                        <div class="mt-2 flex items-center gap-2">
                            <span class="text-brand-red font-bold text-sm">RM 0.50/g</span>
                            <span class="text-gray-400 line-through text-xs">RM 0.65</span>
                        </div>
                    </div>
                    <div class="card-details">
                        <h3 class="font-bold text-brand-yellow text-base">PLA 3D Printing</h3>
                        <p class="text-sm text-gray-200 leading-relaxed">FDM PLA 3D Printing Service. Rate: RM0.65/g. Ideal for prototypes, display models & creative projects where heat resistance is not critical.</p>
                        <div class="flex items-center gap-2">
                            <span class="text-white font-bold text-sm">RM 0.50/g</span>
                            <span class="text-gray-400 line-through text-xs">RM 0.65</span>
                        </div>
                        <a href="https://wa.me/601165019369?text=axiyz3dstudio-PLA+3D+Printing" target="_blank" class="mt-1 inline-block text-center bg-[#25D366] text-white text-sm font-semibold px-4 py-2 rounded-md hover:bg-[#1DA851] transition">Request Quote</a>
                    </div>
                </div>

                {{-- PLA+ --}}
                <div class="product-card">
                    <div class="card-front">
                        <div class="img-slider" data-count="2">
                            <div class="img-slider-track">
                                <img src="https://images.unsplash.com/photo-1612198188060-c7c2a3b66eae?w=400&q=80" alt="PLA+ 1">
                                <img src="https://images.unsplash.com/photo-1581093458791-9d15482442f6?w=400&q=80" alt="PLA+ 2" style="filter:hue-rotate(120deg)">
                            </div>
                            <div class="slider-dots">
                                <div class="slider-dot active"></div>
                                <div class="slider-dot"></div>
                            </div>
                        </div>
                        <h3 class="font-bold text-gray-900 text-sm mt-3 leading-tight">PLA+ / Tough PLA</h3>
                        <p class="text-xs text-gray-500 mt-1 line-clamp-2">Enhanced strength and durability over standard PLA.</p>
                        <div class="mt-2 flex items-center gap-2">
                            <span class="text-brand-red font-bold text-sm">RM 0.65/g</span>
                            <span class="text-gray-400 line-through text-xs">RM 0.75</span>
                        </div>
                    </div>
                    <div class="card-details">
                        <h3 class="font-bold text-brand-yellow text-base">PLA+ / Tough PLA</h3>
                        <p class="text-sm text-gray-200 leading-relaxed">FDM PLA+ Printing Service. Enhanced strength and durability. Great for end-use components and stronger prototypes.</p>
                        <div class="flex items-center gap-2">
                            <span class="text-white font-bold text-sm">RM 0.65/g</span>
                            <span class="text-gray-400 line-through text-xs">RM 0.75</span>
                        </div>
                        <a href="https://wa.me/601165019369?text=axiyz3dstudio-PLA%2B+Tough+PLA" target="_blank" class="mt-1 inline-block text-center bg-[#25D366] text-white text-sm font-semibold px-4 py-2 rounded-md hover:bg-[#1DA851] transition">Request Quote</a>
                    </div>
                </div>

                {{-- ABS Filament --}}
                <div class="product-card">
                    <div class="card-front">
                        <div class="img-slider" data-count="2">
                            <div class="img-slider-track">
                                <img src="https://images.unsplash.com/photo-1565967511849-76a60a516170?w=400&q=80" alt="ABS 1">
                                <img src="https://images.unsplash.com/photo-1619642751034-765dfdf7c58e?w=400&q=80" alt="ABS 2" style="filter:hue-rotate(60deg)">
                            </div>
                            <div class="slider-dots">
                                <div class="slider-dot active"></div>
                                <div class="slider-dot"></div>
                            </div>
                        </div>
                        <h3 class="font-bold text-gray-900 text-sm mt-3 leading-tight">ABS 3D Printing</h3>
                        <p class="text-xs text-gray-500 mt-1 line-clamp-2">Strong, heat-resistant & suitable for functional parts.</p>
                        <div class="mt-2 flex items-center gap-2">
                            <span class="text-brand-red font-bold text-sm">RM 0.75/g</span>
                            <span class="text-gray-400 line-through text-xs">RM 0.85</span>
                        </div>
                    </div>
                    <div class="card-details">
                        <h3 class="font-bold text-brand-yellow text-base">ABS 3D Printing</h3>
                        <p class="text-sm text-gray-200 leading-relaxed">FDM ABS 3D Printing. Strong, heat-resistant & great for mechanical parts, housings, and enclosures needing higher temperature tolerance.</p>
                        <div class="flex items-center gap-2">
                            <span class="text-white font-bold text-sm">RM 0.75/g</span>
                            <span class="text-gray-400 line-through text-xs">RM 0.85</span>
                        </div>
                        <a href="https://wa.me/601165019369?text=axiyz3dstudio-ABS+3D+Printing" target="_blank" class="mt-1 inline-block text-center bg-[#25D366] text-white text-sm font-semibold px-4 py-2 rounded-md hover:bg-[#1DA851] transition">Request Quote</a>
                    </div>
                </div>

                {{-- TPU --}}
                <div class="product-card">
                    <div class="card-front">
                        <div class="img-slider" data-count="2">
                            <div class="img-slider-track">
                                <img src="https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=400&q=80" alt="TPU 1">
                                <img src="https://images.unsplash.com/photo-1581093458791-9d15482442f6?w=400&q=80" alt="TPU 2" style="filter:hue-rotate(300deg)">
                            </div>
                            <div class="slider-dots">
                                <div class="slider-dot active"></div>
                                <div class="slider-dot"></div>
                            </div>
                        </div>
                        <h3 class="font-bold text-gray-900 text-sm mt-3 leading-tight">TPU / Flexible Filament</h3>
                        <p class="text-xs text-gray-500 mt-1 line-clamp-2">Flexible, rubber-like material for gaskets & grips.</p>
                        <div class="mt-2 flex items-center gap-2">
                            <span class="text-brand-red font-bold text-sm">RM 1.00/g</span>
                            <span class="text-gray-400 line-through text-xs">RM 1.10</span>
                        </div>
                    </div>
                    <div class="card-details">
                        <h3 class="font-bold text-brand-yellow text-base">TPU / Flexible Filament</h3>
                        <p class="text-sm text-gray-200 leading-relaxed">FDM TPU 3D Printing. Flexible, rubber-like material designed for gaskets, grips, wearables, and impact-absorbing parts.</p>
                        <div class="flex items-center gap-2">
                            <span class="text-white font-bold text-sm">RM 1.00/g</span>
                            <span class="text-gray-400 line-through text-xs">RM 1.10</span>
                        </div>
                        <a href="https://wa.me/601165019369?text=axiyz3dstudio-TPU+Flexible+Filament+Printing" target="_blank" class="mt-1 inline-block text-center bg-[#25D366] text-white text-sm font-semibold px-4 py-2 rounded-md hover:bg-[#1DA851] transition">Request Quote</a>
                    </div>
                </div>

                {{-- PA / Nylon --}}
                <div class="product-card">
                    <div class="card-front">
                        <div class="img-slider" data-count="2">
                            <div class="img-slider-track">
                                <img src="https://images.unsplash.com/photo-1612198188060-c7c2a3b66eae?w=400&q=80" alt="Nylon 1" style="filter:hue-rotate(180deg)">
                                <img src="https://images.unsplash.com/photo-1565967511849-76a60a516170?w=400&q=80" alt="Nylon 2" style="filter:hue-rotate(240deg)">
                            </div>
                            <div class="slider-dots">
                                <div class="slider-dot active"></div>
                                <div class="slider-dot"></div>
                            </div>
                        </div>
                        <h3 class="font-bold text-gray-900 text-sm mt-3 leading-tight">PA / Nylon 3D Printing</h3>
                        <p class="text-xs text-gray-500 mt-1 line-clamp-2">High-performance engineering material for demanding applications.</p>
                        <div class="mt-2 flex items-center gap-2">
                            <span class="text-brand-red font-bold text-sm">RM 0.90/g</span>
                            <span class="text-gray-400 line-through text-xs">RM 0.95</span>
                        </div>
                    </div>
                    <div class="card-details">
                        <h3 class="font-bold text-brand-yellow text-base">PA / Nylon 3D Printing</h3>
                        <p class="text-sm text-gray-200 leading-relaxed">FDM PA (Nylon) 3D Printing. High-performance material for wear-resistant, high-strength functional components used in industrial settings.</p>
                        <div class="flex items-center gap-2">
                            <span class="text-white font-bold text-sm">RM 0.90/g</span>
                            <span class="text-gray-400 line-through text-xs">RM 0.95</span>
                        </div>
                        <a href="https://wa.me/601165019369?text=axiyz3dstudio-PA+Nylon+3D+Printing" target="_blank" class="mt-1 inline-block text-center bg-[#25D366] text-white text-sm font-semibold px-4 py-2 rounded-md hover:bg-[#1DA851] transition">Request Quote</a>
                    </div>
                </div>
            </x-service-category>

            {{-- ▸ CATEGORY 2: Resin Printing --}}
            <x-service-category title="Resin Printing" description="High-detail SLA/MSLA resin printing for precision and intricately detailed parts.">

                {{-- Standard Resin --}}
                <div class="product-card">
                    <div class="card-front">
                        <div class="img-slider" data-count="3">
                            <div class="img-slider-track">
                                <img src="https://images.unsplash.com/photo-1581093458791-9d15482442f6?w=400&q=80" alt="Resin 1" style="filter:hue-rotate(30deg)">
                                <img src="https://images.unsplash.com/photo-1605732562742-3023a888e56e?w=400&q=80" alt="Resin 2">
                                <img src="https://images.unsplash.com/photo-1612198188060-c7c2a3b66eae?w=400&q=80" alt="Resin 3" style="filter:hue-rotate(90deg)">
                            </div>
                            <div class="slider-dots">
                                <div class="slider-dot active"></div>
                                <div class="slider-dot"></div>
                                <div class="slider-dot"></div>
                            </div>
                        </div>
                        <h3 class="font-bold text-gray-900 text-sm mt-3 leading-tight">Standard Resin Printing</h3>
                        <p class="text-xs text-gray-500 mt-1 line-clamp-2">High precision resin for engineering & detailed components.</p>
                        <div class="mt-2 flex items-center gap-2">
                            <span class="text-brand-red font-bold text-sm">RM 0.75/g</span>
                            <span class="text-gray-400 line-through text-xs">RM 0.95</span>
                        </div>
                    </div>
                    <div class="card-details">
                        <h3 class="font-bold text-brand-yellow text-base">Standard Resin Printing</h3>
                        <p class="text-sm text-gray-200 leading-relaxed">High precision resin 3D printed components. Suitable for engineering models, detailed display pieces, and functional prototypes needing smooth surfaces.</p>
                        <div class="flex items-center gap-2">
                            <span class="text-white font-bold text-sm">RM 0.75/g</span>
                            <span class="text-gray-400 line-through text-xs">RM 0.95</span>
                        </div>
                        <a href="https://wa.me/601165019369?text=axiyz3dstudio-Standard+Resin+Printing" target="_blank" class="mt-1 inline-block text-center bg-[#25D366] text-white text-sm font-semibold px-4 py-2 rounded-md hover:bg-[#1DA851] transition">Request Quote</a>
                    </div>
                </div>

                {{-- Flexible Resin --}}
                <div class="product-card">
                    <div class="card-front">
                        <div class="img-slider" data-count="2">
                            <div class="img-slider-track">
                                <img src="https://images.unsplash.com/photo-1619642751034-765dfdf7c58e?w=400&q=80" alt="Flex Resin 1" style="filter:hue-rotate(200deg)">
                                <img src="https://images.unsplash.com/photo-1565967511849-76a60a516170?w=400&q=80" alt="Flex Resin 2" style="filter:hue-rotate(160deg)">
                            </div>
                            <div class="slider-dots">
                                <div class="slider-dot active"></div>
                                <div class="slider-dot"></div>
                            </div>
                        </div>
                        <h3 class="font-bold text-gray-900 text-sm mt-3 leading-tight">Flexible Resin 3D Printing</h3>
                        <p class="text-xs text-gray-500 mt-1 line-clamp-2">High-detail resin printing using elastomeric materials.</p>
                        <div class="mt-2 flex items-center gap-2">
                            <span class="text-brand-red font-bold text-sm">RM 1.30/g</span>
                            <span class="text-gray-400 line-through text-xs">RM 1.50</span>
                        </div>
                    </div>
                    <div class="card-details">
                        <h3 class="font-bold text-brand-yellow text-base">Flexible Resin Printing</h3>
                        <p class="text-sm text-gray-200 leading-relaxed">Flexible Resin 3D Printing using elastomeric resins. Perfect for soft-touch components, seals, and detailed articulated models.</p>
                        <div class="flex items-center gap-2">
                            <span class="text-white font-bold text-sm">RM 1.30/g</span>
                            <span class="text-gray-400 line-through text-xs">RM 1.50</span>
                        </div>
                        <a href="https://wa.me/601165019369?text=axiyz3dstudio-Flexible+Resin+Printing" target="_blank" class="mt-1 inline-block text-center bg-[#25D366] text-white text-sm font-semibold px-4 py-2 rounded-md hover:bg-[#1DA851] transition">Request Quote</a>
                    </div>
                </div>

                {{-- ABS Resin --}}
                <div class="product-card">
                    <div class="card-front">
                        <div class="img-slider" data-count="2">
                            <div class="img-slider-track">
                                <img src="https://images.unsplash.com/photo-1612198188060-c7c2a3b66eae?w=400&q=80" alt="ABS Resin 1" style="filter:hue-rotate(280deg)">
                                <img src="https://images.unsplash.com/photo-1605732562742-3023a888e56e?w=400&q=80" alt="ABS Resin 2" style="filter:hue-rotate(240deg)">
                            </div>
                            <div class="slider-dots">
                                <div class="slider-dot active"></div>
                                <div class="slider-dot"></div>
                            </div>
                        </div>
                        <h3 class="font-bold text-gray-900 text-sm mt-3 leading-tight">ABS Resin Printing</h3>
                        <p class="text-xs text-gray-500 mt-1 line-clamp-2">Engineering-grade high-strength resin for functional use.</p>
                        <div class="mt-2 flex items-center gap-2">
                            <span class="text-brand-red font-bold text-sm">RM 1.00/g</span>
                            <span class="text-gray-400 line-through text-xs">RM 1.20</span>
                        </div>
                    </div>
                    <div class="card-details">
                        <h3 class="font-bold text-brand-yellow text-base">ABS Resin Printing</h3>
                        <p class="text-sm text-gray-200 leading-relaxed">Engineering-Grade Resin 3D Printing. High-strength resin combining the detail of resin printing with the durability of ABS plastic.</p>
                        <div class="flex items-center gap-2">
                            <span class="text-white font-bold text-sm">RM 1.00/g</span>
                            <span class="text-gray-400 line-through text-xs">RM 1.20</span>
                        </div>
                        <a href="https://wa.me/601165019369?text=axiyz3dstudio-ABS+Resin+Printing" target="_blank" class="mt-1 inline-block text-center bg-[#25D366] text-white text-sm font-semibold px-4 py-2 rounded-md hover:bg-[#1DA851] transition">Request Quote</a>
                    </div>
                </div>

                {{-- Jewellery Casting Resin --}}
                <div class="product-card">
                    <div class="card-front">
                        <div class="img-slider" data-count="2">
                            <div class="img-slider-track">
                                <img src="https://images.unsplash.com/photo-1586078130702-d208859b6223?w=400&q=80" alt="Jewellery 1">
                                <img src="https://images.unsplash.com/photo-1583292650898-7d22cd27ca6f?w=400&q=80" alt="Jewellery 2">
                            </div>
                            <div class="slider-dots">
                                <div class="slider-dot active"></div>
                                <div class="slider-dot"></div>
                            </div>
                        </div>
                        <h3 class="font-bold text-gray-900 text-sm mt-3 leading-tight">Jewellery Casting Resin</h3>
                        <p class="text-xs text-gray-500 mt-1 line-clamp-2">High-resolution resin for jewellery casting patterns.</p>
                        <div class="mt-2">
                            <span class="text-brand-red font-bold text-sm">RM 1.40/g</span>
                        </div>
                    </div>
                    <div class="card-details">
                        <h3 class="font-bold text-brand-yellow text-base">Jewellery Casting Resin</h3>
                        <p class="text-sm text-gray-200 leading-relaxed">Jewelry Casting Resin 3D Printing. High-resolution printing for lost-wax casting patterns. Ideal for jewellers needing extremely fine detail.</p>
                        <div class="flex items-center gap-2">
                            <span class="text-white font-bold text-sm">RM 1.40/g</span>
                        </div>
                        <a href="https://wa.me/601165019369?text=axiyz3dstudio-Jewellery+Casting+Resin+Printing" target="_blank" class="mt-1 inline-block text-center bg-[#25D366] text-white text-sm font-semibold px-4 py-2 rounded-md hover:bg-[#1DA851] transition">Request Quote</a>
                    </div>
                </div>
            </x-service-category>

            {{-- ▸ CATEGORY 3: Specialty & Medical --}}
            <x-service-category title="Specialty & Medical Printing" description="Precision printing for dental, medical, and highly specialised industries.">
                <div class="product-card">
                    <div class="card-front">
                        <div class="img-slider" data-count="2">
                            <div class="img-slider-track">
                                <img src="https://images.unsplash.com/photo-1607619056574-7b8d3ee536b2?w=400&q=80" alt="Dental 1">
                                <img src="https://images.unsplash.com/photo-1612198188060-c7c2a3b66eae?w=400&q=80" alt="Dental 2" style="filter:grayscale(0.5)">
                            </div>
                            <div class="slider-dots">
                                <div class="slider-dot active"></div>
                                <div class="slider-dot"></div>
                            </div>
                        </div>
                        <h3 class="font-bold text-gray-900 text-sm mt-3 leading-tight">Dental & Medical Model Printing</h3>
                        <p class="text-xs text-gray-500 mt-1 line-clamp-2">Ultra-detailed resin for dental and medical applications.</p>
                        <div class="mt-2">
                            <span class="inline-block bg-brand-darkblue text-white text-xs font-semibold px-2 py-1 rounded">Custom Quote</span>
                        </div>
                    </div>
                    <div class="card-details">
                        <h3 class="font-bold text-brand-yellow text-base">Dental & Medical Printing</h3>
                        <p class="text-sm text-gray-200 leading-relaxed">High-Precision Dental & Medical Resin Printing. Ultra-detailed for surgical guides, dental study models, anatomical replicas, and medical prototypes.</p>
                        <p class="text-xs text-gray-400 italic">Custom pricing based on complexity.</p>
                        <a href="https://wa.me/601165019369?text=axiyz3dstudio-Dental+Medical+Model+Printing" target="_blank" class="mt-1 inline-block text-center bg-[#25D366] text-white text-sm font-semibold px-4 py-2 rounded-md hover:bg-[#1DA851] transition">Request Quote</a>
                    </div>
                </div>
            </x-service-category>

            {{-- ▸ CATEGORY 4: Engineering Services --}}
            <x-service-category title="Engineering Services" description="End-to-end engineering solutions from prototyping and reverse engineering to industrial fabrication.">

                {{-- Engineering & Prototype --}}
                <div class="product-card">
                    <div class="card-front">
                        <div class="img-slider" data-count="2">
                            <div class="img-slider-track">
                                <img src="https://images.unsplash.com/photo-1581091226033-d5c48150dbaa?w=400&q=80" alt="Eng 1">
                                <img src="https://images.unsplash.com/photo-1605732562742-3023a888e56e?w=400&q=80" alt="Eng 2">
                            </div>
                            <div class="slider-dots">
                                <div class="slider-dot active"></div>
                                <div class="slider-dot"></div>
                            </div>
                        </div>
                        <h3 class="font-bold text-gray-900 text-sm mt-3 leading-tight">Engineering & Prototype Development</h3>
                        <p class="text-xs text-gray-500 mt-1 line-clamp-2">End-to-end support for product development.</p>
                        <div class="mt-2">
                            <span class="inline-block bg-brand-darkblue text-white text-xs font-semibold px-2 py-1 rounded">Custom Quote</span>
                        </div>
                    </div>
                    <div class="card-details">
                        <h3 class="font-bold text-brand-yellow text-base">Engineering & Prototype Dev</h3>
                        <p class="text-sm text-gray-200 leading-relaxed">End-to-end support for product development & engineering prototypes. We bring your concept from idea to functional, testable prototype.</p>
                        <a href="https://wa.me/601165019369?text=axiyz3dstudio-Engineering+Prototype+Development" target="_blank" class="mt-1 inline-block text-center bg-[#25D366] text-white text-sm font-semibold px-4 py-2 rounded-md hover:bg-[#1DA851] transition">Request Quote</a>
                    </div>
                </div>

                {{-- Reverse Engineering --}}
                <div class="product-card">
                    <div class="card-front">
                        <div class="img-slider" data-count="2">
                            <div class="img-slider-track">
                                <img src="https://images.unsplash.com/photo-1565008647105-87a1a60df6c7?w=400&q=80" alt="RE 1">
                                <img src="https://images.unsplash.com/photo-1581091226033-d5c48150dbaa?w=400&q=80" alt="RE 2" style="filter:hue-rotate(180deg)">
                            </div>
                            <div class="slider-dots">
                                <div class="slider-dot active"></div>
                                <div class="slider-dot"></div>
                            </div>
                        </div>
                        <h3 class="font-bold text-gray-900 text-sm mt-3 leading-tight">Reverse Engineering</h3>
                        <p class="text-xs text-gray-500 mt-1 line-clamp-2">Recreate broken or unavailable parts into accurate 3D models.</p>
                        <div class="mt-2 flex items-center gap-2">
                            <span class="text-brand-red font-bold text-sm">From RM 650</span>
                            <span class="text-gray-400 line-through text-xs">RM 750</span>
                        </div>
                    </div>
                    <div class="card-details">
                        <h3 class="font-bold text-brand-yellow text-base">Reverse Engineering</h3>
                        <p class="text-sm text-gray-200 leading-relaxed">Reverse Engineering & Part Replication. Recreate broken or unavailable parts from measurement and scanning into accurate, print-ready 3D files.</p>
                        <div class="flex items-center gap-2">
                            <span class="text-white font-bold text-sm">From RM 650</span>
                            <span class="text-gray-400 line-through text-xs">RM 750</span>
                        </div>
                        <a href="https://wa.me/601165019369?text=axiyz3dstudio-Reverse+Engineering" target="_blank" class="mt-1 inline-block text-center bg-[#25D366] text-white text-sm font-semibold px-4 py-2 rounded-md hover:bg-[#1DA851] transition">Request Quote</a>
                    </div>
                </div>

                {{-- Obsolete Parts --}}
                <div class="product-card">
                    <div class="card-front">
                        <div class="img-slider" data-count="2">
                            <div class="img-slider-track">
                                <img src="https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d?w=400&q=80" alt="Parts 1">
                                <img src="https://images.unsplash.com/photo-1565008647105-87a1a60df6c7?w=400&q=80" alt="Parts 2" style="filter:hue-rotate(90deg)">
                            </div>
                            <div class="slider-dots">
                                <div class="slider-dot active"></div>
                                <div class="slider-dot"></div>
                            </div>
                        </div>
                        <h3 class="font-bold text-gray-900 text-sm mt-3 leading-tight">Obsolete / Hard-to-Find Parts</h3>
                        <p class="text-xs text-gray-500 mt-1 line-clamp-2">Reproduction of discontinued or unavailable components.</p>
                        <div class="mt-2">
                            <span class="inline-block bg-brand-darkblue text-white text-xs font-semibold px-2 py-1 rounded">Custom Quote</span>
                        </div>
                    </div>
                    <div class="card-details">
                        <h3 class="font-bold text-brand-yellow text-base">Obsolete Parts Replication</h3>
                        <p class="text-sm text-gray-200 leading-relaxed">Reverse engineering & reproduction of discontinued or unavailable components. Give old machines new life by replacing lost or broken parts.</p>
                        <a href="https://wa.me/601165019369?text=axiyz3dstudio-Obsolete+Parts+Replication" target="_blank" class="mt-1 inline-block text-center bg-[#25D366] text-white text-sm font-semibold px-4 py-2 rounded-md hover:bg-[#1DA851] transition">Request Quote</a>
                    </div>
                </div>

                {{-- Industrial --}}
                <div class="product-card">
                    <div class="card-front">
                        <div class="img-slider" data-count="2">
                            <div class="img-slider-track">
                                <img src="https://images.unsplash.com/photo-1605732562742-3023a888e56e?w=400&q=80" alt="Industrial 1">
                                <img src="https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d?w=400&q=80" alt="Industrial 2" style="filter:hue-rotate(200deg)">
                            </div>
                            <div class="slider-dots">
                                <div class="slider-dot active"></div>
                                <div class="slider-dot"></div>
                            </div>
                        </div>
                        <h3 class="font-bold text-gray-900 text-sm mt-3 leading-tight">Industrial Machine Components</h3>
                        <p class="text-xs text-gray-500 mt-1 line-clamp-2">Custom manufacturing of mechanical & machine-related components.</p>
                        <div class="mt-2">
                            <span class="inline-block bg-brand-darkblue text-white text-xs font-semibold px-2 py-1 rounded">Custom Quote</span>
                        </div>
                    </div>
                    <div class="card-details">
                        <h3 class="font-bold text-brand-yellow text-base">Industrial Machine Components</h3>
                        <p class="text-sm text-gray-200 leading-relaxed">Custom manufacturing of mechanical & machine-related components using high-performance engineering materials for industrial-grade durability and precision.</p>
                        <a href="https://wa.me/601165019369?text=axiyz3dstudio-Industrial+Machine+Components" target="_blank" class="mt-1 inline-block text-center bg-[#25D366] text-white text-sm font-semibold px-4 py-2 rounded-md hover:bg-[#1DA851] transition">Request Quote</a>
                    </div>
                </div>
            </x-service-category>

            {{-- ▸ CATEGORY 5: Design & Finishing --}}
            <x-service-category title="Design & Finishing" description="Professional CAD design services and premium finishing options including chrome electroplating.">

                {{-- 3D CAD Design --}}
                <div class="product-card">
                    <div class="card-front">
                        <div class="img-slider" data-count="2">
                            <div class="img-slider-track">
                                <img src="https://images.unsplash.com/photo-1521791136064-7986c2920216?w=400&q=80" alt="CAD 1">
                                <img src="https://images.unsplash.com/photo-1581091226033-d5c48150dbaa?w=400&q=80" alt="CAD 2" style="filter:hue-rotate(270deg)">
                            </div>
                            <div class="slider-dots">
                                <div class="slider-dot active"></div>
                                <div class="slider-dot"></div>
                            </div>
                        </div>
                        <h3 class="font-bold text-gray-900 text-sm mt-3 leading-tight">3D CAD Design Service</h3>
                        <p class="text-xs text-gray-500 mt-1 line-clamp-2">Professional 3D CAD & Modeling. Custom design for printing & development.</p>
                        <div class="mt-2 flex items-center gap-2">
                            <span class="text-brand-red font-bold text-sm">From RM 100</span>
                            <span class="text-gray-400 line-through text-xs">RM 120</span>
                        </div>
                    </div>
                    <div class="card-details">
                        <h3 class="font-bold text-brand-yellow text-base">3D CAD Design Service</h3>
                        <p class="text-sm text-gray-200 leading-relaxed">Professional 3D CAD & Modeling. Custom 3D design for printing, prototyping & product development. Fully print-ready STL/STEP files delivered.</p>
                        <div class="flex items-center gap-2">
                            <span class="text-white font-bold text-sm">From RM 100</span>
                            <span class="text-gray-400 line-through text-xs">RM 120</span>
                        </div>
                        <a href="https://wa.me/601165019369?text=axiyz3dstudio-3D+CAD+Design+Service" target="_blank" class="mt-1 inline-block text-center bg-[#25D366] text-white text-sm font-semibold px-4 py-2 rounded-md hover:bg-[#1DA851] transition">Request Quote</a>
                    </div>
                </div>

                {{-- Electroplating --}}
                <div class="product-card">
                    <div class="card-front">
                        <div class="img-slider" data-count="2">
                            <div class="img-slider-track">
                                <img src="https://images.unsplash.com/photo-1590496793929-36417d3117de?w=400&q=80" alt="Electroplating 1">
                                <img src="https://images.unsplash.com/photo-1619642751034-765dfdf7c58e?w=400&q=80" alt="Electroplating 2" style="filter:hue-rotate(45deg) brightness(1.1)">
                            </div>
                            <div class="slider-dots">
                                <div class="slider-dot active"></div>
                                <div class="slider-dot"></div>
                            </div>
                        </div>
                        <h3 class="font-bold text-gray-900 text-sm mt-3 leading-tight">Electroplating</h3>
                        <p class="text-xs text-gray-500 mt-1 line-clamp-2">Premium Chrome Electroplating. High-gloss metallic finishing for 3D printed parts.</p>
                        <div class="mt-2 flex items-center gap-2">
                            <span class="text-brand-red font-bold text-sm">From RM 160</span>
                            <span class="text-gray-400 line-through text-xs">RM 200</span>
                        </div>
                    </div>
                    <div class="card-details">
                        <h3 class="font-bold text-brand-yellow text-base">Electroplating</h3>
                        <p class="text-sm text-gray-200 leading-relaxed">Premium Chrome Electroplating Service. Transform plastic prints into professional chrome-finished display or functional pieces.</p>
                        <div class="flex items-center gap-2">
                            <span class="text-white font-bold text-sm">From RM 160</span>
                            <span class="text-gray-400 line-through text-xs">RM 200</span>
                        </div>
                        <a href="https://wa.me/601165019369?text=axiyz3dstudio-Electroplating" target="_blank" class="mt-1 inline-block text-center bg-[#25D366] text-white text-sm font-semibold px-4 py-2 rounded-md hover:bg-[#1DA851] transition">Request Quote</a>
                    </div>
                </div>
            </x-service-category>

        </div>
    </div>

    {{--
    HOW TO ADD YOUR OWN IMAGES LATER:
    1. Inside any .img-slider, add more <img> tags inside .img-slider-track
    2. Update data-count="X" to match the total number of images
    3. Add a matching <div class="slider-dot"></div> inside .slider-dots
    --}}
    <script>
        // Auto-advance every 3.5 seconds
        document.querySelectorAll('.img-slider').forEach(function(slider) {
            var total = parseInt(slider.dataset.count) || 1;
            if (total < 2) return; // nothing to slide

            slider.dataset.current = 0;
            setInterval(function() {
                var current = (parseInt(slider.dataset.current) + 1) % total;
                slider.dataset.current = current;
                slider.querySelector('.img-slider-track').style.transform = 'translateX(-' + (current * 100) + '%)';
                slider.querySelectorAll('.slider-dot').forEach(function(d, i) {
                    d.classList.toggle('active', i === current);
                });
            }, 3500);
        });
    </script>
</x-public-layout>
