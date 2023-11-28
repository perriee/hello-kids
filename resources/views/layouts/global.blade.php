<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">

<head>

    @include('layouts.global_partials.head')

</head>

<body class="font-poppins">

    <header class="sticky top-0 z-50">
        @include('layouts.global_partials.navbar')
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        @include('layouts.global_partials.footer')
    </footer>

</body>

</html>
