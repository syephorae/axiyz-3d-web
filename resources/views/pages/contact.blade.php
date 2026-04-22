<x-public-layout>
    <div class="bg-white dot-grid interactive-grid relative overflow-hidden">
        <!-- Spotlight Layer (follows mouse) -->
        <div class="spotlight-bg"></div>
        <div class="max-w-7xl mx-auto py-16 px-4 sm:px-6 lg:py-24 lg:px-8">
            <div class="lg:grid lg:grid-cols-3 lg:gap-8">
                <div>
                    <h2 class="text-3xl font-extrabold text-brand-darkblue">Get in <span class="text-brand-red">Touch</span></h2>
                    <p class="mt-4 text-lg text-gray-500">
                        Whether you need a custom 3D model, reverse engineering for a broken part, or a quote for an exclusive print, we're here to help. Drop us a message below!
                    </p>
                    
                    <div class="mt-8 overflow-hidden rounded-lg shadow-md border border-gray-100">
                         <div class="bg-brand-darkblue p-6 text-white text-center rounded-t-lg">
                            <h3 class="text-xl font-bold">Contact Info</h3>
                         </div>
                         <div class="p-6 bg-gray-50 space-y-4">
                             <div class="flex items-center">
                                 <svg class="h-6 w-6 text-brand-red mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                                 <span class="text-gray-700">hello@axiyz3d.xyz</span>
                             </div>
                             <div class="flex items-center">
                                 <svg class="h-6 w-6 text-brand-red mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                                 <span class="text-gray-700">+60 11-6501 9369</span>
                             </div>
                             <div class="flex items-start">
                                 <svg class="h-6 w-6 text-brand-red mr-3 mt-1" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                                 <span class="text-gray-700">291-A, 2, Jalan Sungai Ujong, Taman Ast, 70200 Seremban, Negeri Sembilan</span>
                             </div>
                         </div>
                    </div>
                </div>
                
                <div class="mt-12 lg:mt-0 lg:col-span-2">
                    @if(session('success'))
                        <div class="mb-6 p-4 rounded-md bg-green-50 text-green-800 border border-green-200 shadow-sm">
                            <p class="font-medium text-sm">{{ session('success') }}</p>
                        </div>
                    @endif
                    <form id="contact-form" action="{{ route('quotes.store') }}" method="POST" class="bg-white p-8 rounded-lg outline outline-1 outline-gray-200 shadow-xl border-t-4 border-brand-yellow">
                        @csrf
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-y-6 gap-x-8">
                            <div>
                                <label for="first-name" class="block text-sm font-medium text-gray-700">First name</label>
                                <div class="mt-1">
                                    <input type="text" name="first-name" id="first-name" autocomplete="given-name" value="{{ old('first-name') }}" required class="py-3 px-4 block w-full shadow-sm focus:ring-brand-red focus:border-brand-red border-gray-300 rounded-md">
                                </div>
                            </div>
                            <div>
                                <label for="last-name" class="block text-sm font-medium text-gray-700">Last name</label>
                                <div class="mt-1">
                                    <input type="text" name="last-name" id="last-name" autocomplete="family-name" class="py-3 px-4 block w-full shadow-sm focus:ring-brand-red focus:border-brand-red border-gray-300 rounded-md">
                                </div>
                            </div>
                            
                            <div class="sm:col-span-2">
                                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                                <div class="mt-1">
                                    <input id="email" name="email" type="email" autocomplete="email" value="{{ old('email') }}" required class="py-3 px-4 block w-full shadow-sm focus:ring-brand-red focus:border-brand-red border-gray-300 rounded-md">
                                </div>
                            </div>

                            <div class="sm:col-span-2">
                                <label for="phone" class="block text-sm font-medium text-gray-700">Mobile Phone</label>
                                <div class="mt-1">
                                    <input id="phone" name="phone" type="tel" autocomplete="tel" value="{{ old('phone') }}" placeholder="e.g. +6012-3456789" class="py-3 px-4 block w-full shadow-sm focus:ring-brand-red focus:border-brand-red border-gray-300 rounded-md">
                                </div>
                            </div>
                            
                            <div class="sm:col-span-2">
                                <label for="inquiry-type" class="block text-sm font-medium text-gray-700">Inquiry Type</label>
                                <div class="mt-1">
                                    <select id="inquiry-type" name="inquiry-type" class="py-3 px-4 block w-full shadow-sm focus:ring-brand-red focus:border-brand-red border-gray-300 rounded-md">
                                        <option>General Question</option>
                                        <option>Request a Quote (3D Design)</option>
                                        <option>Request a Quote (3D Printing)</option>
                                        <option>Request a Quote (Reverse Eng.)</option>
                                    </select>
                                </div>
                            </div>

                            <div class="sm:col-span-2">
                                <label for="message" class="block text-sm font-medium text-gray-700">Message</label>
                                <div class="mt-1">
                                    <textarea id="message" name="message" rows="4" required class="py-3 px-4 block w-full shadow-sm focus:ring-brand-red focus:border-brand-red border border-gray-300 rounded-md">{{ old('message') }}</textarea>
                                </div>
                                <p class="mt-2 text-sm text-gray-500">Please provide dimensions, material preferences, or issue details if requesting a quote.</p>
                            </div>

                            <div class="sm:col-span-2">
                                <button type="submit" id="submit-button" class="w-full inline-flex items-center justify-center px-6 py-3 border border-transparent rounded-md shadow-sm text-base font-medium text-white bg-brand-darkblue hover:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-brand-red transition duration-300">
                                    <span id="button-text">Submit Inquiry</span>
                                    <svg id="loading-spinner" class="hidden animate-spin ml-3 h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                        <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- EmailJS SDK -->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@emailjs/browser@4/dist/email.min.js"></script>
    <script type="text/javascript">
        (function() {
            // Using the professional config system
            const publicKey = "{{ config('services.emailjs.public_key') }}";
            
            if (publicKey && publicKey !== 'your_public_key' && publicKey !== '') {
                emailjs.init(publicKey);
            }
        })();

        document.getElementById('contact-form').addEventListener('submit', async function(e) {
            e.preventDefault();
            
            const form = this;
            const submitBtn = document.getElementById('submit-button');
            const buttonText = document.getElementById('button-text');
            const spinner = document.getElementById('loading-spinner');
            
            submitBtn.disabled = true;
            buttonText.textContent = 'Sending...';
            spinner.classList.remove('hidden');

            const formData = new FormData(form);
            const data = Object.fromEntries(formData.entries());

            try {
                // 1. EmailJS Params (Database Backup removed for database-free deployment)
                const templateParams = {
                    name: data['first-name'] + ' ' + (data['last-name'] || ''),
                    from_email: data['email'],
                    phone: data['phone'] || 'Not provided',
                    inquiry_type: data['inquiry-type'],
                    message: data['message'],
                    time: new Date().toLocaleString(),
                    to_name: 'aXiYZ 3D Studios'
                };

                const serviceId = "{{ config('services.emailjs.service_id') }}";
                const templateId = "{{ config('services.emailjs.template_id') }}";

                // Safety check
                if (!serviceId || serviceId === 'your_service_id' || serviceId === '') {
                    throw new Error("Missing Service ID. Please run 'php artisan config:clear' and 'php artisan view:clear'");
                }

                await emailjs.send(serviceId, templateId, templateParams);

                form.reset();
                alert('Thank you! Your message has been received.');
                
            } catch (error) {
                console.error('EmailJS Error:', error);
                alert('Oops! ' + (error.text || error.message || 'Check your .env keys and clear cache'));
            } finally {
                submitBtn.disabled = false;
                buttonText.textContent = 'Submit Inquiry';
                spinner.classList.add('hidden');
            }
        });
    </script>
</x-public-layout>
