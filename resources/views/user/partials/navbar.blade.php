<header class="sticky top-0 z-50">
    <nav id="navbar" class="flex justify-between px-20 py-4 backdrop-blur-md transition-all">
        <a href="{{ route('dashboard') }}">
            <div class="flex items-center justify-center gap-4">
                <img src="{{ url('/img/logo.webp') }}" alt="Hello Kids" class="w-20">
                <span class="text-2xl font-bold text-primary">Hello Kids</span>
            </div>
        </a>
        <div class="flex items-center justify-center gap-10 text-lg font-semibold text-primary">
            <div><a href="{{ route('profile.edit') }}">Profil</a></div>
            <div><a href="{{ route('user.anak') }}">Anak</a></div>
            @if (Auth::user()->is_pregnant == 1)
                <div><a href="{{ route('user.hamil') }}">Hamil</a></div>
            @endif
            <div><a href="{{ route('user.jenis-imun') }}">Imunisasi</a></div>
            <div><a href="{{ route('user.jadwal') }}">Jadwal</a></div>
            <div><a href="{{ route('chatbot.index') }}">Chatbot</a></div>
        </div>
        <div class="flex items-center justify-center">
            <!-- Authentication -->
            <form method="POST" action="{{ route('logout') }}">
                @csrf

                <button
                    class="px-8 py-2 font-semibold text-white transition-all border-2 rounded-lg hover:text-primary bg-primary hover:bg-slate-100 border-primary"
                    href="route('logout')" onclick="event.preventDefault();this.closest('form').submit();">
                    Logout
                </button>
            </form>
        </div>
    </nav>
</header>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        var navbar = document.getElementById("navbar");

        window.addEventListener("scroll", function() {
            if (window.scrollY > 0) {
                navbar.classList.add("shadow-lg");
            } else {
                navbar.classList.remove("shadow-lg");
            }
        });
    });
</script>
