<x-layouts.app :lang="$lang" :config="$config" :seo="$seo">
    <section class="py-20 bg-gradient-to-br from-green-50 via-white to-emerald-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <x-section-title :title="$config['legal'][$lang]['title']" />
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                <div class="bg-white rounded-3xl shadow-xl overflow-hidden">
                    <div class="bg-gradient-to-r from-green-500 to-green-600 px-8 py-6">
                        <h3 class="text-2xl font-bold text-white">{{ $config['legal'][$lang]['foundation']['title'] }}</h3>
                    </div>
                    <div class="p-8">
                        <ul class="space-y-4">
                            @foreach($config['legal'][$lang]['foundation']['items'] as $item)
                                <li class="border-b border-gray-100 pb-3 last:border-0 last:pb-0">
                                    <span class="block text-sm font-medium text-gray-500 mb-1">{{ $item['label'] }}</span>
                                    <span class="block text-lg font-semibold text-gray-800">{{ $item['value'] }}</span>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>

                <div class="bg-white rounded-3xl shadow-xl overflow-hidden">
                    <div class="bg-gradient-to-r from-yellow-400 to-orange-500 px-8 py-6">
                        <h3 class="text-2xl font-bold text-white">{{ $config['legal'][$lang]['institution']['title'] }}</h3>
                    </div>
                    <div class="p-8">
                        <ul class="space-y-4">
                            @foreach($config['legal'][$lang]['institution']['items'] as $item)
                                <li class="border-b border-gray-100 pb-3 last:border-0 last:pb-0">
                                    <span class="block text-sm font-medium text-gray-500 mb-1">{{ $item['label'] }}</span>
                                    <span class="block text-lg font-semibold text-gray-800">{{ $item['value'] }}</span>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-layouts.app>
