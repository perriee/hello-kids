    <nav class="flex justify-between px-20 py-4 backdrop-blur-md">
        <a href="{{ route('home') }}">
        <div class="flex items-center justify-center gap-4">
                <img src="{{ url('/img/logo.webp') }}" alt="Hello Kids" class="w-20">
                <span class="text-2xl font-bold text-primary">Hello Kids</span>
            </div>
        </a>
        <div class="flex items-center justify-center gap-10 text-lg font-semibold text-primary">
            <div><a href="#hero">Beranda</a></div>
            <div><a href="#tentang-kami">Tentang Kami</a></div>
            <div><a href="#agenda">Agenda</a></div>
        </div>
        <div class="flex items-center justify-center">
            <a href="{{ route('login') }}" class="px-8 py-2 font-semibold transition-all border-2 rounded-lg text-slate-200 bg-primary hover:bg-white hover:text-primary hover:outline-primary border-primary">Login</a>
        </div>
    </nav>
