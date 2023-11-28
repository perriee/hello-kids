<section>
    <header>
        <h2 class="text-xl font-semibold text-gray-900">
            {{ __('Ganti Password') }}
        </h2>

        {{-- <p class="mt-1 text-sm text-gray-600">
            {{ __('Ensure your account is using a long, random password to stay secure.') }}
        </p> --}}
    </header>

    <form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('put')

        <div class="flex flex-col gap-1">
            <x-input-label for="current_password" :value="__('Password Lama')" />
            <x-text-input id="current_password" name="current_password" type="password" class="block w-full mt-1" autocomplete="current-password" placeholder="Masukkan Password Lama" />
            <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />
        </div>

        <div class="flex flex-col gap-1">
            <x-input-label for="password" :value="__('Password Baru')" />
            <x-text-input id="password" name="password" type="password" class="block w-full mt-1" autocomplete="new-password" placeholder="Masukkan Password Baru" />
            <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />
        </div>

        <div class="flex flex-col gap-1">
            <x-input-label for="password_confirmation" :value="__('Konfirmasi Password')" />
            <x-text-input id="password_confirmation" name="password_confirmation" type="password" class="block w-full mt-1" autocomplete="new-password" placeholder="Ulangi Password Baru" />
            <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-between gap-4">
            <x-primary-button>{{ __('Simpan') }}</x-primary-button>

            @if (session('status') === 'password-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="italic font-semibold text-green-500"
                >{{ __('Password berhasil diperbarui') }}</p>
            @endif
        </div>
    </form>
</section>
