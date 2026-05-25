<nav class="bg-white shadow-md sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-20">
            <div class="flex items-center">
                <a href="{{ route('home', ['lang' => $lang]) }}" class="flex items-center space-x-3">
                    <div class="w-12 h-12 bg-gradient-to-br from-green-400 to-green-600 rounded-xl flex items-center justify-center">
                        <span class="text-white font-bold text-xl">R</span>
                    </div>
                    <div class="hidden sm:block">
                        <span class="text-2xl font-bold bg-gradient-to-r from-green-600 to-green-700 bg-clip-text text-transparent">ROBOBRICK</span>
                        <span class="text-2xl font-bold text-gray-700">LAB</span>
                    </div>
                </a>
            </div>

            <div class="hidden md:flex items-center space-x-8">
                <a href="{{ route('home', ['lang' => $lang]) }}" class="text-gray-700 hover:text-green-600 font-medium transition-colors">{{ $config['navigation'][$lang]['home'] }}</a>
                <a href="{{ route('about', ['lang' => $lang]) }}" class="text-gray-700 hover:text-green-600 font-medium transition-colors">{{ $config['navigation'][$lang]['about'] }}</a>
                <a href="{{ route('program', ['lang' => $lang]) }}" class="text-gray-700 hover:text-green-600 font-medium transition-colors">{{ $config['navigation'][$lang]['program'] }}</a>
                <a href="{{ route('services', ['lang' => $lang]) }}" class="text-gray-700 hover:text-green-600 font-medium transition-colors">{{ $config['navigation'][$lang]['services'] }}</a>
                <a href="{{ route('legal', ['lang' => $lang]) }}" class="text-gray-700 hover:text-green-600 font-medium transition-colors">{{ $config['navigation'][$lang]['legal'] }}</a>
                <a href="{{ route('contact', ['lang' => $lang]) }}" class="text-gray-700 hover:text-green-600 font-medium transition-colors">{{ $config['navigation'][$lang]['contact'] }}</a>
            </div>

            <div class="flex items-center space-x-4">
                <x-language-switcher :lang="$lang" />
                <a href="{{ route('contact', ['lang' => $lang]) }}" class="hidden sm:inline-flex items-center px-6 py-3 bg-gradient-to-r from-green-500 to-green-600 text-white font-semibold rounded-xl shadow-lg hover:shadow-xl transform hover:-translate-y-0.5 transition-all duration-300">
                    {{ $config['navigation'][$lang]['cta'] }}
                </a>

                <button id="mobile-menu-btn" class="md:hidden p-2 rounded-lg hover:bg-gray-100 transition-colors">
                    <svg class="w-6 h-6 text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <div id="mobile-menu" class="hidden md:hidden bg-white border-t">
        <div class="px-4 py-4 space-y-3">
            <a href="{{ route('home', ['lang' => $lang]) }}" class="block px-4 py-3 rounded-lg hover:bg-green-50 text-gray-700 font-medium">{{ $config['navigation'][$lang]['home'] }}</a>
            <a href="{{ route('about', ['lang' => $lang]) }}" class="block px-4 py-3 rounded-lg hover:bg-green-50 text-gray-700 font-medium">{{ $config['navigation'][$lang]['about'] }}</a>
            <a href="{{ route('program', ['lang' => $lang]) }}" class="block px-4 py-3 rounded-lg hover:bg-green-50 text-gray-700 font-medium">{{ $config['navigation'][$lang]['program'] }}</a>
            <a href="{{ route('services', ['lang' => $lang]) }}" class="block px-4 py-3 rounded-lg hover:bg-green-50 text-gray-700 font-medium">{{ $config['navigation'][$lang]['services'] }}</a>
            <a href="{{ route('legal', ['lang' => $lang]) }}" class="block px-4 py-3 rounded-lg hover:bg-green-50 text-gray-700 font-medium">{{ $config['navigation'][$lang]['legal'] }}</a>
            <a href="{{ route('contact', ['lang' => $lang]) }}" class="block px-4 py-3 rounded-lg hover:bg-green-50 text-gray-700 font-medium">{{ $config['navigation'][$lang]['contact'] }}</a>
            <a href="{{ route('contact', ['lang' => $lang]) }}" class="block px-4 py-3 bg-gradient-to-r from-green-500 to-green-600 text-white font-semibold rounded-xl text-center">
                {{ $config['navigation'][$lang]['cta'] }}
            </a>
        </div>
    </div>
</nav>

<script>
    document.getElementById('mobile-menu-btn').addEventListener('click', function() {
        const menu = document.getElementById('mobile-menu');
        menu.classList.toggle('hidden');
    });
</script>
