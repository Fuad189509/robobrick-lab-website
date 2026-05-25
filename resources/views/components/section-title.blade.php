@props(['title', 'subtitle' => null])

<div class="text-center mb-12">
    <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">{{ $title }}</h2>
    @if($subtitle)
        <p class="text-lg text-gray-600 max-w-3xl mx-auto">{{ $subtitle }}</p>
    @endif
    <div class="w-24 h-1.5 bg-gradient-to-r from-green-400 to-green-600 mx-auto mt-6 rounded-full"></div>
</div>
