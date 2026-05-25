<x-layouts.app :lang="$lang" :config="$config" :seo="$seo">
    <section class="py-20 bg-gradient-to-br from-green-50 via-white to-emerald-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <x-section-title :title="$config['robotics_section'][$lang]['title']" />
            <div class="max-w-4xl mx-auto mb-16">
                <div class="bg-white rounded-3xl shadow-xl p-8 md:p-10">
                    <p class="text-lg text-gray-700 leading-relaxed mb-6">{{ $config['robotics_section'][$lang]['content'] }}</p>
                    <p class="text-lg text-gray-700 leading-relaxed">{{ $config['robotics_section'][$lang]['content2'] }}</p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <x-section-title :title="$config['programs'][$lang]['title']" />
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($config['programs'][$lang]['items'] as $index => $program)
                    <x-program-card :program="$program" :index="$index" :lang="$lang" />
                @endforeach
            </div>
        </div>
    </section>
</x-layouts.app>
