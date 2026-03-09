<x-public-layout>
    <div class="bg-white">
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
                                 <span class="text-gray-700">quotes@axiyz3d.com</span>
                             </div>
                             <div class="flex items-center">
                                 <svg class="h-6 w-6 text-brand-red mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                                 <span class="text-gray-700">+1 (555) 123-4567</span>
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
                    <form action="{{ route('quotes.store') }}" method="POST" class="bg-white p-8 rounded-lg outline outline-1 outline-gray-200 shadow-xl border-t-4 border-brand-yellow">
                        @csrf
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-y-6 gap-x-8">
                            <div>
                                <label for="first-name" class="block text-sm font-medium text-gray-700">First name</label>
                                <div class="mt-1">
                                    <input type="text" name="first-name" id="first-name" autocomplete="given-name" class="py-3 px-4 block w-full shadow-sm focus:ring-brand-red focus:border-brand-red border-gray-300 rounded-md">
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
                                    <input id="email" name="email" type="email" autocomplete="email" class="py-3 px-4 block w-full shadow-sm focus:ring-brand-red focus:border-brand-red border-gray-300 rounded-md">
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
                                    <textarea id="message" name="message" rows="4" class="py-3 px-4 block w-full shadow-sm focus:ring-brand-red focus:border-brand-red border border-gray-300 rounded-md"></textarea>
                                </div>
                                <p class="mt-2 text-sm text-gray-500">Please provide dimensions, material preferences, or issue details if requesting a quote.</p>
                            </div>

                            <div class="sm:col-span-2">
                                <button type="submit" class="w-full inline-flex items-center justify-center px-6 py-3 border border-transparent rounded-md shadow-sm text-base font-medium text-white bg-brand-darkblue hover:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-brand-red transition duration-300">
                                    Submit
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-public-layout>
