<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <div class="w-full px-6 py-4 mt-6 overflow-hidden bg-white shadow-md sm:max-w-md sm:rounded-lg">

        <div class="flex flex-col gap-2 pb-10">
            <a href="{{ route('home') }}" class="text-xl font-semibold text-center text-primary">Hello Kids</a>
            <div class="text-3xl font-semibold text-center">Login</div>
        </div>

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-input-label for="email" :value="__('Email')" />

                <x-text-input id="email" class="block w-full mt-1" type="email" name="email" :value="old('email')"
                    required autofocus autocomplete="username" placeholder="Masukkan Email" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-input-label for="password" :value="__('Password')" />

                <x-text-input id="password" class="block w-full mt-1" type="password" name="password" required
                    autocomplete="current-password" placeholder="Masukkan Password" />

                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <div class="flex items-center justify-between mt-6">
                <a class="text-sm rounded-md text-slate-400 hover:text-slate-500" href="{{ route('register') }}">
                    Belum Punya Akun? <span class="font-semibold">Klik di sini.</span>
                </a>

                <button type="submit"
                    class="px-8 py-2 font-semibold text-white transition-all border-2 rounded-lg bg-primary hover:bg-white border-primary hover:text-primary">
                    Login
                </button>

            </div>
        </form>

    </div>

</x-guest-layout>
