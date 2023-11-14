<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">

<head>

    @include('layouts.partials.head')

</head>

<body class="font-inter">

    <header class="sticky top-0 z-50">
        @include('layouts.partials.navbar')
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        @include('layouts.partials.footer')
    </footer>

</body>

</html>
