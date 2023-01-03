<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description"
        content="Berani Lain dan Beda - Media Masa Kini Kumpulan Kabar Berita Terkini Informasi Lengkap Seputar Berita Bangka Belitung Serta Kejadian Hari Ini Meliputi Berita Politik, Teknologi dan Berita Nasional." />
    <meta name="keywords"
        content="Berita Lain, News, berita hari ini, berita terkini, Berita Bangka Belitung, Indonesia, info politik, nasional, budaya, sepakbola, berita hiburan, berita pangkalpinang" />
    <meta http-equiv="Copyright" content="beritalain.id" />
    <meta name="author" content="beritalain.id" />

    <title inertia>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Scripts -->
    @routes
    @viteReactRefresh
    @vite(['resources/js/app.jsx', "resources/js/Pages/{$page['component']}.jsx"])
    @inertiaHead
</head>

<body class="font-sans antialiased">
    @inertia
</body>

</html>
