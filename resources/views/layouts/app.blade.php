<!DOCTYPE html>
<html lang="{{ $lang === 'id' ? 'id' : 'en' }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $seo['title'] ?? 'Robobrick Lab' }}</title>
    <meta name="description" content="{{ $seo['description'] ?? '' }}">
    
    <meta property="og:title" content="{{ $seo['title'] ?? 'Robobrick Lab' }}">
    <meta property="og:description" content="{{ $seo['description'] ?? '' }}">
    <meta property="og:image" content="{{ asset('assets/og-image.jpg') }}">
    <meta property="og:type" content="website">
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-white font-sans">
    <x-navbar :lang="$lang" :config="$config" />
    
    <main class="min-h-screen">
        {{ $slot }}
    </main>
    
    <x-footer :lang="$lang" :config="$config" />
    
    <x-floating-whatsapp :lang="$lang" :config="$config" />
</body>
</html>
