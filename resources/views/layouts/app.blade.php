<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.10/dist/full.min.css" rel="stylesheet" type="text/css" />
    <title>@yield('titulo','Aurora')</title>
    {{--@vite('resources/css/app.css')--}}
</head>
<body>
    <header>
        {{-- Navbar --}}
        @include('layouts.navbar')
    </header> 
    <main>
        @yield('contenido')
    </main>
    <footer>
        @include('layouts.footer')
    </footer>   
</body>
</html>
