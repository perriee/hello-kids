<x-guest-layout>

    <div class="w-full px-8 py-8 mt-6 overflow-hidden bg-white shadow-md sm:max-w-3xl sm:rounded-lg">

        <div class="flex flex-col gap-2 pb-10">
            <a href="{{ route('home') }}" class="text-xl font-semibold text-center text-primary">Sehat Ceria</a>
            <div class="text-3xl font-semibold text-center">Register</div>
        </div>

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="flex gap-10">
                <div class="w-1/2">
                    <!-- NIK -->
                    <div>
                        <div class="flex gap-1">
                            <x-input-label for="nik" :value="__('NIK')" />
                            <span class="text-red-500">*</span>
                        </div>
                        <x-text-input id="nik" class="block w-full mt-1" type="number" name="nik"
                            :value="old('nik')" required autofocus autocomplete="nik" placeholder="Masukkan NIK" />
                        <x-input-error :messages="$errors->get('nik')" class="mt-2" />
                    </div>

                    <!-- Name -->
                    <div class="mt-4">
                        <div class="flex gap-1">
                            <x-input-label for="name" :value="__('Nama Lengkap')" />
                            <span class="text-red-500">*</span>
                        </div>
                        <x-text-input id="name" class="block w-full mt-1" type="text" name="name"
                            :value="old('name')" required autofocus autocomplete="name"
                            placeholder="Masukkan Nama Lengkap" />
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    </div>

                    <!-- No HP -->
                    <div class="mt-4">
                        <div class="flex gap-1">
                            <x-input-label for="no_hp" :value="__('No HP')" />
                            <span class="text-red-500">*</span>
                        </div>
                        <x-text-input id="no_hp" class="block w-full mt-1" type="number" name="no_hp"
                            :value="old('no_hp')" required autofocus autocomplete="no_hp" placeholder="Masukkan No HP" />
                        <x-input-error :messages="$errors->get('no_hp')" class="mt-2" />
                    </div>

                    <!-- Alamat -->
                    <div class="mt-4">
                        <div class="flex gap-1">
                            <x-input-label for="alamat" :value="__('Alamat')" />
                            <span class="text-red-500">*</span>
                        </div>
                        <x-text-input id="alamat" class="block w-full mt-1" type="text" name="alamat"
                            :value="old('alamat')" required autofocus autocomplete="alamat" placeholder="Masukkan Alamat" />
                        <x-input-error :messages="$errors->get('alamat')" class="mt-2" />
                    </div>
                </div>

                <div class="w-1/2">
                    <!-- Email Address -->
                    <div>
                        <div class="flex gap-1">
                            <x-input-label for="email" :value="__('Email')" />
                            <span class="text-red-500">*</span>
                        </div>
                        <x-text-input id="email" class="block w-full mt-1" type="email" name="email"
                            :value="old('email')" required autocomplete="username" placeholder="Masukkan Email" />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <!-- Password -->
                    <div class="mt-4">
                        <div class="flex gap-1">
                            <x-input-label for="password" :value="__('Password')" />
                            <span class="text-red-500">*</span>
                        </div>

                        <x-text-input id="password" class="block w-full mt-1" type="password" name="password" required
                            autocomplete="new-password" placeholder="Masukkan Password" />

                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>

                    <!-- Confirm Password -->
                    <div class="mt-4">
                        <div class="flex gap-1">
                            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
                            <span class="text-red-500">*</span>
                        </div>

                        <x-text-input id="password_confirmation" class="block w-full mt-1" type="password"
                            name="password_confirmation" placeholder="Masukkan Ulang Password" required />

                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>

                    <div class="mt-7">
                        <label class="relative inline-flex items-center cursor-pointer">
                            <input type="checkbox" value="1" class="sr-only peer" name="is_pregnant"
                                id="is_pregnant">
                            <div
                                class="w-11 h-6 bg-gray-200 peer-focus:outline-none rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-primary">
                            </div>
                            <span class="text-sm font-medium text-gray-900 ms-3 dark:text-gray-300">Apakah anda sedang
                                hamil?</span>
                        </label>
                    </div>
                </div>
            </div>


            <div class="flex items-center justify-end mt-6">
                <a class="text-sm rounded-md text-slate-400 hover:text-slate-500" href="{{ route('login') }}">
                    Sudah punya akun? <span class="font-semibold">Klik di sini.</span>
                </a>

                <button type="submit" class="px-8 py-2 font-semibold rounded-lg ms-4 text-slate-200 bg-primary hover:bg-primary-hover">
                    Register
                </button>
            </div>
        </form>

    </div>

</x-guest-layout>
