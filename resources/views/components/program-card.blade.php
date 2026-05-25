@props(['program', 'index'])

<div class="bg-white rounded-2xl shadow-lg hover:shadow-xl transform hover:-translate-y-2 transition-all duration-300 overflow-hidden border border-gray-100">
    <div class="p-6">
        <div class="flex items-center mb-4">
            <div class="w-14 h-14 bg-gradient-to-br from-green-400 to-green-600 rounded-xl flex items-center justify-center text-white font-bold text-xl">
                {{ $program['level'] }}
            </div>
            <div class="ml-4">
                <h3 class="text-xl font-bold text-gray-800">{{ $program['name'] }}</h3>
                <span class="text-sm text-green-600 font-medium">{{ $program['duration'] }}</span>
            </div>
        </div>
        <p class="text-gray-600">{{ $program['description'] }}</p>
    </div>
    <div class="bg-gradient-to-r from-green-50 to-emerald-50 px-6 py-4">
        <div class="flex items-center justify-between">
            <span class="text-sm text-gray-500">{{ $lang === 'id' ? 'Level' : 'Level' }} {{ $program['level'] }}</span>
            <div class="flex space-x-1">
                @for($i = 1; $i <= $program['level']; $i++)
                    <div class="w-2 h-2 rounded-full bg-green-500"></div>
                @endfor
                @for($i = $program['level'] + 1; $i <= 7; $i++)
                    <div class="w-2 h-2 rounded-full bg-green-200"></div>
                @endfor
            </div>
        </div>
    </div>
</div>
