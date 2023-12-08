<x-app-layout>

    @section('title', 'Dashboard')

    <div class="px-32">

        <div class="mx-auto mt-20 rounded-xl">
            <span class="text-2xl tracking-wider text-slate-600">Selamat Datang, Bu {{ Auth::user()->name }}.</span>
        </div>

        <div class="grid grid-cols-4 gap-6 mt-14">
            <a href="{{ route('user.anak') }}">
                <div
                    class="flex flex-col justify-between overflow-hidden transition-all border-4 h-72 border-slate-300 hover:border-primary rounded-xl">
                    <div class="flex items-center justify-center h-full"><img src="{{ asset('img/playtime.webp') }}"
                            alt="Anak" class="w-[50%]"></div>
                    <div class="w-full p-8 text-lg font-semibold text-center text-white bg-primary">Data Anak</div>
                </div>
            </a>

            @if (Auth::user()->is_pregnant == 1)
                <a href="{{ route('user.hamil') }}">
                    <div
                        class="flex flex-col justify-between overflow-hidden transition-all border-4 h-72 border-slate-300 rounded-xl hover:border-primary">
                        <div class="flex items-center justify-center h-full"><img src="{{ asset('img/pregnant.webp') }}"
                                alt="Ibu Hamil" class="w-[50%]"></div>
                        <div class="w-full p-8 text-lg font-semibold text-center text-white bg-primary">Data Ibu Hamil
                        </div>
                    </div>
                </a>
            @endif

            <a href="{{ route('user.jenis-imun') }}">
                <div
                    class="flex flex-col justify-between overflow-hidden transition-all border-4 h-72 border-slate-300 rounded-xl hover:border-primary">
                    <div class="flex items-center justify-center h-full"><img src="{{ asset('img/antibiotics.webp') }}"
                            alt="Imun" class="w-[50%]"></div>
                    <div class="w-full p-8 text-lg font-semibold text-center text-white bg-primary">Data Imunisasi</div>
                </div>
            </a>

            <a href="{{ route('user.jadwal') }}">
                <div
                    class="flex flex-col justify-between overflow-hidden transition-all border-4 h-72 border-slate-300 rounded-xl hover:border-primary">
                    <div class="flex items-center justify-center h-full"><img src="{{ asset('img/task.webp') }}"
                            alt="Jadwal" class="w-[50%]"></div>
                    <div class="w-full p-8 text-lg font-semibold text-center text-white bg-primary">Jadwal Periksa</div>
                </div>
            </a>
        </div>

    </div>


</x-app-layout>
