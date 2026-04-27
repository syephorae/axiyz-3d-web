<x-public-layout>
    <!-- Header -->
    <div class="bg-[#f99d22] pt-24 pb-16 relative overflow-hidden shadow-2xl">
        <!-- Background Peeking Models (Fully Visible Flanking) -->
        <div class="absolute left-2 top-1/2 -translate-y-1/2 w-48 lg:w-80 h-48 lg:h-80 pointer-events-none z-0 opacity-40 lg:opacity-100 transition-opacity">
            <model-viewer src="/models/snowdog_-_minecraft_-_free.glb" auto-rotate rotation-per-second="30deg" class="w-full h-full bg-transparent border-none" loading="lazy" reveal="auto" shadow-intensity="1" camera-orbit="0deg 75deg 85%"></model-viewer>
        </div>
        <div class="absolute right-4 lg:right-10 top-1/2 -translate-y-1/2 w-48 lg:w-80 h-48 lg:h-80 pointer-events-none z-0 opacity-40 lg:opacity-100 transition-opacity">
            <model-viewer src="/models/boeing_737-300.glb" auto-rotate rotation-per-second="-20deg" class="w-full h-full bg-transparent border-none" loading="lazy" reveal="auto" shadow-intensity="1" camera-orbit="0deg 75deg 110%"></model-viewer>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
                <div class="mb-4 flex justify-center">
                    <h1 class="inline-block bg-[#e31e24] text-white px-8 py-3 rounded-full shadow-xl text-3xl font-extrabold tracking-tight sm:text-5xl">
                        Client Testimonials
                    </h1>
                </div>
                <p class="mt-4 max-w-2xl text-xl text-[#211d71] font-medium mx-auto">
                    We take pride in our precision. Hear directly from the community that trusts aXiYZ 3D Studios.
                </p>
                <div class="mt-8 flex flex-col items-center gap-6">
                    <div class="inline-flex items-center gap-3 bg-[#211d71] px-6 py-3 rounded-full shadow-xl border border-white/10">
                        <span class="text-2xl font-bold text-white">5.0</span>
                        <div class="flex text-yellow-400">
                            @for($i = 0; $i < 5; $i++)
                            <svg class="h-6 w-6 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                            @endfor
                        </div>
                        <span class="text-white/60 text-sm hidden sm:inline">Google Reviews</span>
                    </div>

                    <a href="https://maps.app.goo.gl/PhfnQpA9QRQHu6Q49" target="_blank" rel="noopener noreferrer" class="inline-flex items-center space-x-2 text-white font-bold hover:bg-white hover:text-brand-darkblue transition-all border-2 border-white/20 rounded-full px-8 py-3 bg-white/10 backdrop-blur-sm shadow-xl group">
                        <svg class="w-5 h-5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z" fill="#4285F4"/>
                            <path d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-1 .67-2.26 1.07-3.71 1.07-2.87 0-5.3-1.94-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z" fill="#34A853"/>
                            <path d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l3.66-2.84z" fill="#FBBC05"/>
                            <path d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.14-4.53z" fill="#EA4335"/>
                        </svg>
                        <span>Read Our 25+ Google Reviews</span>
                    </a>
                </div>

                {{-- Admin Handshake Success/Error Messages --}}
                @if(session('success') || session('error'))
                <div class="mt-4 flex justify-center">
                    <div class="px-6 py-2 rounded-full text-sm font-bold shadow-lg {{ session('success') ? 'bg-green-500 text-white' : 'bg-red-500 text-white' }}">
                        {{ session('success') ?? session('error') }}
                    </div>
                </div>
                @endif
            </div>
        </div>

    <!-- Main Reviews Content -->
    <div class="py-16 bg-white dot-grid interactive-grid relative overflow-hidden">
        <!-- Spotlight Layer (follows mouse) -->
        <div class="spotlight-bg"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <!-- Dynamic reviews will be injected here -->
            <!-- Masonry-style Dense Grid -->
            <!-- Masonry-style Dense Grid (Safelist: md:col-span-2 lg:col-span-3 grid-cols-2 grid-cols-3 grid-cols-4 grid-cols-5 grid-cols-6) -->
            <div id="google-reviews-grid" class="grid gap-8 md:grid-cols-2 lg:grid-cols-3 grid-flow-dense items-start">
                <!-- Skeleton/Loading state -->
                <template id="review-skeleton">
                    <div class="bg-gray-50 p-8 rounded-2xl border border-gray-100 animate-pulse">
                        <div class="h-4 w-24 bg-gray-200 rounded mb-4"></div>
                        <div class="h-24 bg-gray-200 rounded mb-6"></div>
                        <div class="flex items-center">
                            <div class="h-10 w-10 rounded-full bg-gray-200"></div>
                            <div class="ml-3 space-y-2">
                                <div class="h-4 w-32 bg-gray-200 rounded"></div>
                                <div class="h-3 w-20 bg-gray-200 rounded"></div>
                            </div>
                        </div>
                    </div>
                </template>

                @for($i = 0; $i < 3; $i++)
                <div class="bg-gray-50 p-8 rounded-2xl border border-gray-100 animate-pulse">
                    <div class="h-4 w-24 bg-gray-200 rounded mb-4"></div>
                    <div class="h-24 bg-gray-200 rounded mb-6"></div>
                    <div class="flex items-center">
                        <div class="h-10 w-10 rounded-full bg-gray-200"></div>
                        <div class="ml-3 space-y-2">
                            <div class="h-4 w-32 bg-gray-200 rounded"></div>
                            <div class="h-3 w-20 bg-gray-200 rounded"></div>
                        </div>
                    </div>
                </div>
                @endfor
            </div>

            <!-- Footer Info -->
            <div class="mt-16 text-center reveal-hidden" style="transition-delay: 0.4s;">
                <p id="last-updated" class="text-gray-400 text-sm font-medium">Syncing latest reviews...</p>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const grid = document.getElementById('google-reviews-grid');
            
            async function loadReviews() {
                try {
                    const response = await fetch('/api/google-reviews');
                    const data = await response.json();

                    if (data.reviews && data.reviews.length > 0) {
                        renderReviews(data.reviews);
                        if (data.last_updated) {
                            document.getElementById('last-updated').textContent = `Last updated: ${data.last_updated}`;
                        }
                    } else {
                        handleError('No reviews found.');
                    }
                } catch (error) {
                    console.error('Error fetching reviews:', error);
                    handleError('Failed to load live reviews.');
                }
            }

            function renderReviews(reviews) {
                grid.innerHTML = '';
                
                reviews.forEach((review, index) => {
                    const card = document.createElement('div');
                    card.className = 'bg-white p-8 rounded-2xl shadow-sm border border-gray-100 hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2';
                    card.style.transitionDelay = `${index * 0.1}s`;

                    // Stars logic
                    let starsHtml = '';
                    const rating = Math.round(review.rating);
                    for (let i = 0; i < 5; i++) {
                        const colorClass = i < rating ? 'text-yellow-400' : 'text-gray-200';
                        starsHtml += `<svg class="h-5 w-5 fill-current ${colorClass}" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>`;
                    }

                    // Definitive Acronym Logic: 'Ariffah kks' -> 'AK'
                    const names = review.author_name.trim().split(/\s+/);
                    const acronym = names.length > 1 
                        ? (names[0][0] + names[names.length - 1][0]).toUpperCase()
                        : names[0][0].toUpperCase();

                    const brandColors = ['bg-brand-darkblue', 'bg-brand-red', 'bg-brand-yellow'];
                    const textColor = brandColors[index % brandColors.length] === 'bg-brand-yellow' ? 'text-brand-darkblue' : 'text-white';
                    
                    const isLongText = review.text.length > 400;
                    const projectPhotos = (review.project_photos && Array.isArray(review.project_photos)) ? review.project_photos : [];
                    const numPhotos = projectPhotos.length;
                    
                    const spanFull = numPhotos >= 3;
                    const spanDouble = (numPhotos === 2) || isLongText;

                    const cardClasses = [
                        'bg-white p-8 rounded-2xl shadow-sm border border-gray-100 hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 h-fit self-start',
                        spanFull ? 'md:col-span-2 lg:col-span-3' : (spanDouble ? 'md:col-span-2' : 'col-span-1')
                    ].filter(Boolean).join(' ');

                    card.className = cardClasses;
                    card.style.transitionDelay = `${index * 0.1}s`;
                    
                    const profileInitialsHtml = `<div class="review-initials h-10 w-10 rounded-full ${brandColors[index % brandColors.length]} flex items-center justify-center ${textColor} font-bold uppercase shadow-inner text-xs tracking-tighter">${acronym}</div>`;
                    
                    const profileHtml = review.profile_photo_url 
                        ? `<div class="relative h-10 w-10">
                             <img src="${review.profile_photo_url}" 
                                  class="h-10 w-10 rounded-full object-cover shadow-sm relative z-10" 
                                  alt="" 
                                  onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                             <div style="display:none;" class="absolute inset-0 h-10 w-10 rounded-full ${brandColors[index % brandColors.length]} flex items-center justify-center ${textColor} font-bold uppercase text-xs tracking-tighter shadow-inner">${acronym}</div>
                           </div>`
                        : profileInitialsHtml;

                    // Photos logic (Project Prints)
                    let photosHtml = '';
                    if (numPhotos > 0) {
                        let gridCols = 'grid-cols-2';
                        if (numPhotos === 1) gridCols = 'grid-cols-1';
                        else if (numPhotos >= 3) gridCols = 'grid-cols-3';

                        photosHtml = `
                            <div class="mt-6 grid ${gridCols} gap-2 w-full">
                                ${projectPhotos.map(img => `
                                    <div class="aspect-square rounded-xl overflow-hidden border border-gray-100 shadow-sm hover:shadow-md transition-shadow cursor-pointer group/img bg-gray-50">
                                        <img src="${img}" class="w-full h-full object-cover group-hover/img:scale-110 transition-transform duration-500" alt="3D Project Photo">
                                    </div>
                                `).join('')}
                            </div>
                        `;
                    }

                    card.innerHTML = `
                        <div class="flex mb-4">
                            ${starsHtml}
                        </div>
                        <p class="text-gray-600 mb-6 italic leading-relaxed">"${review.text.substring(0, 400)}${review.text.length > 400 ? '...' : ''}"</p>
                        ${photosHtml}
                        <div class="mt-8 flex items-center">
                            ${profileHtml}
                            <div class="ml-3">
                                <div class="text-sm font-bold text-gray-900">${review.author_name}</div>
                                <div class="text-xs text-gray-400 capitalize">${review.relative_time_description} • Verified Google Review</div>
                            </div>
                        </div>
                    `;
                    grid.appendChild(card);
                });
            }

            function handleError(message) {
                grid.innerHTML = `
                    <div class="col-span-full text-center py-12 p-8 bg-gray-50 rounded-2xl border-2 border-dashed border-gray-200">
                        <p class="text-gray-500 font-medium">${message}</p>
                        <p class="text-sm text-gray-400 mt-2">Checking Google Maps for the latest 20+ reviews...</p>
                    </div>
                `;
            }

            loadReviews();
        });
    </script>
</x-public-layout>
