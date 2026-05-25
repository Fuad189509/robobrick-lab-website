<div class="flex items-center space-x-2 bg-gray-100 rounded-lg p-1">
    @php
        $currentUrl = request()->url();
        $queryParams = request()->except('lang');
    @endphp
    <a href="{{ $currentUrl }}?{{ http_build_query(array_merge($queryParams, ['lang' => 'id'])) }}" 
       class="px-3 py-1.5 rounded-md text-sm font-medium transition-all {{ $lang === 'id' ? 'bg-green-500 text-white shadow' : 'text-gray-600 hover:text-gray-800' }}">
        ID
    </a>
    <a href="{{ $currentUrl }}?{{ http_build_query(array_merge($queryParams, ['lang' => 'en'])) }}" 
       class="px-3 py-1.5 rounded-md text-sm font-medium transition-all {{ $lang === 'en' ? 'bg-green-500 text-white shadow' : 'text-gray-600 hover:text-gray-800' }}">
        EN
    </a>
</div>
