@props(['title', 'description' => null])

<div class="pb-16 border-b border-gray-200 last:border-0 last:pb-0">
    <div class="mb-8">
        <h2 class="text-2xl font-bold text-gray-900 sm:text-3xl">{{ $title }}</h2>
        @if($description)
            <p class="mt-2 text-base text-gray-500">{{ $description }}</p>
        @endif
    </div>

    <div class="flex flex-wrap justify-center gap-6">
        {{ $slot }}
    </div>
</div>
