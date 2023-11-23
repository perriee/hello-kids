<x-app-layout>

    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>

        <div class="max-w-2xl p-6 mx-auto mt-10 bg-slate-300 rounded-xl">
            Selamat Datang, {{ Auth::user()->name }}.
        </div>

        @if (Auth::user()->is_pregnant === 1)
            <div class="max-w-2xl p-6 mx-auto mt-10 bg-slate-300 rounded-xl">
                Anda sedang hamil
            </div>
        @else
            <div class="max-w-2xl p-6 mx-auto mt-10 bg-slate-300 rounded-xl">
                Anda sedang tidak hamil
            </div>
        @endif

        <div class="max-w-2xl p-6 mx-auto mt-10 bg-slate-300 rounded-xl">
            <div>Daftar Anak Anda:</div>
            {{-- @foreach ($collection as $item)

            @endforeach --}}
        </div>

    </div>


</x-app-layout>
