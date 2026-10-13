<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
</head>
<body>
    {{-- Include Navbar --}}
    @include('layouts.navbar')

    <div style="padding: 20px;">
        {{-- Tempat konten utama --}}
        @yield('content')
    </div>
</body>
</html>