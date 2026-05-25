<!DOCTYPE html>
<html lang="{{ $lang }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Preview - Robobrick Lab</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 min-h-screen">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="mb-8">
            <div class="bg-yellow-50 border-l-4 border-yellow-400 p-4 mb-6">
                <div class="flex">
                    <div class="flex-shrink-0">
                        <svg class="h-5 w-5 text-yellow-400" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/>
                        </svg>
                    </div>
                    <div class="ml-3">
                        <p class="text-sm text-yellow-700">{{ $config['admin_preview'][$lang]['alert'] }}</p>
                    </div>
                </div>
            </div>
            
            <h1 class="text-4xl font-bold text-gray-800 mb-2">{{ $config['admin_preview'][$lang]['title'] }}</h1>
            <p class="text-gray-600">Language: {{ $lang === 'id' ? 'Indonesia' : 'English' }}</p>
            <div class="mt-4 flex space-x-2">
                <a href="{{ route('admin-preview', ['lang' => 'id']) }}" class="px-4 py-2 rounded-lg {{ $lang === 'id' ? 'bg-green-500 text-white' : 'bg-gray-200 text-gray-700' }}">ID</a>
                <a href="{{ route('admin-preview', ['lang' => 'en']) }}" class="px-4 py-2 rounded-lg {{ $lang === 'en' ? 'bg-green-500 text-white' : 'bg-gray-200 text-gray-700' }}">EN</a>
                <a href="{{ route('home', ['lang' => $lang]) }}" class="px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600 ml-4">← Back to Site</a>
            </div>
        </div>

        <div class="space-y-8">
            <section class="bg-white rounded-2xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-800 mb-6 flex items-center">
                    <span class="w-10 h-10 bg-green-100 rounded-lg flex items-center justify-center mr-3">
                        <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                        </svg>
                    </span>
                    {{ $config['admin_preview'][$lang]['sections']['profile'] }}
                </h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div class="p-4 bg-gray-50 rounded-xl">
                        <span class="text-sm font-medium text-gray-500">Site Name</span>
                        <p class="text-lg font-semibold text-gray-800">{{ $config['site']['name'] }}</p>
                    </div>
                    <div class="p-4 bg-gray-50 rounded-xl">
                        <span class="text-sm font-medium text-gray-500">Full Name</span>
                        <p class="text-lg font-semibold text-gray-800">{{ $config['site']['full_name'] }}</p>
                    </div>
                    <div class="p-4 bg-gray-50 rounded-xl">
                        <span class="text-sm font-medium text-gray-500">Foundation</span>
                        <p class="text-lg font-semibold text-gray-800">{{ $config['site']['foundation'] }}</p>
                    </div>
                </div>
            </section>

            <section class="bg-white rounded-2xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-800 mb-6 flex items-center">
                    <span class="w-10 h-10 bg-blue-100 rounded-lg flex items-center justify-center mr-3">
                        <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                        </svg>
                    </span>
                    {{ $config['admin_preview'][$lang]['sections']['programs'] }}
                </h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                    @foreach($config['programs'][$lang]['items'] as $program)
                        <div class="p-4 border border-gray-200 rounded-xl">
                            <div class="flex items-center justify-between mb-2">
                                <span class="px-3 py-1 bg-green-100 text-green-700 text-sm font-semibold rounded-full">Level {{ $program['level'] }}</span>
                            </div>
                            <h3 class="text-lg font-bold text-gray-800">{{ $program['name'] }}</h3>
                            <p class="text-sm text-gray-600 mt-1">{{ $program['description'] }}</p>
                            <p class="text-sm text-green-600 font-medium mt-2">{{ $program['duration'] }}</p>
                        </div>
                    @endforeach
                </div>
            </section>

            <section class="bg-white rounded-2xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-800 mb-6 flex items-center">
                    <span class="w-10 h-10 bg-yellow-100 rounded-lg flex items-center justify-center mr-3">
                        <svg class="w-6 h-6 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/>
                        </svg>
                    </span>
                    {{ $config['admin_preview'][$lang]['sections']['services'] }}
                </h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    @foreach($config['services'][$lang]['items'] as $service)
                        <div class="p-4 border border-gray-200 rounded-xl">
                            <h3 class="text-lg font-bold text-gray-800">{{ $service['name'] }}</h3>
                            <p class="text-sm text-gray-600 mt-2">{{ $service['description'] }}</p>
                        </div>
                    @endforeach
                </div>
            </section>

            <section class="bg-white rounded-2xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-800 mb-6 flex items-center">
                    <span class="w-10 h-10 bg-purple-100 rounded-lg flex items-center justify-center mr-3">
                        <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                        </svg>
                    </span>
                    {{ $config['admin_preview'][$lang]['sections']['legal'] }}
                </h2>
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                    <div>
                        <h3 class="text-lg font-semibold text-gray-700 mb-3">{{ $config['legal'][$lang]['foundation']['title'] }}</h3>
                        <div class="space-y-2">
                            @foreach($config['legal'][$lang]['foundation']['items'] as $item)
                                <div class="flex justify-between py-2 border-b border-gray-100">
                                    <span class="text-sm text-gray-600">{{ $item['label'] }}</span>
                                    <span class="text-sm font-medium text-gray-800">{{ $item['value'] }}</span>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div>
                        <h3 class="text-lg font-semibold text-gray-700 mb-3">{{ $config['legal'][$lang]['institution']['title'] }}</h3>
                        <div class="space-y-2">
                            @foreach($config['legal'][$lang]['institution']['items'] as $item)
                                <div class="flex justify-between py-2 border-b border-gray-100">
                                    <span class="text-sm text-gray-600">{{ $item['label'] }}</span>
                                    <span class="text-sm font-medium text-gray-800">{{ $item['value'] }}</span>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </section>

            <section class="bg-white rounded-2xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-800 mb-6 flex items-center">
                    <span class="w-10 h-10 bg-red-100 rounded-lg flex items-center justify-center mr-3">
                        <svg class="w-6 h-6 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                        </svg>
                    </span>
                    {{ $config['admin_preview'][$lang]['sections']['contact'] }}
                </h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    @foreach($config['contact'][$lang]['locations'] as $location)
                        <div class="p-4 border border-gray-200 rounded-xl">
                            <h4 class="font-semibold text-gray-800">{{ $location['name'] }}</h4>
                            <p class="text-sm text-gray-600 mt-1">{{ $location['address'] }}</p>
                        </div>
                    @endforeach
                </div>
                <div class="mt-4 p-4 bg-gray-50 rounded-xl">
                    <h4 class="font-semibold text-gray-800 mb-2">WhatsApp</h4>
                    <div class="flex flex-wrap gap-2">
                        @foreach($config['contact'][$lang]['marketing']['whatsapp'] as $wa)
                            <span class="px-3 py-1 bg-green-100 text-green-700 rounded-full text-sm">{{ $wa }}</span>
                        @endforeach
                    </div>
                </div>
            </section>
        </div>
    </div>
</body>
</html>
