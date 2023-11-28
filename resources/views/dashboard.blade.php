<x-app-layout>

    <div class="px-20 bg-red-200">

        <div class="p-6 mx-auto mt-10 bg-slate-300 rounded-xl">
            <span class="text-2xl">Selamat Datang, Bu {{ Auth::user()->name }}.</span>
        </div>



        {{-- @if (Auth::user()->is_pregnant === 1)
            <div class="max-w-2xl p-6 mx-auto mt-10 bg-slate-300 rounded-xl">
                Anda sedang hamil
            </div>
        @else
            <div class="max-w-2xl p-6 mx-auto mt-10 bg-slate-300 rounded-xl">
                Anda sedang tidak hamil
            </div>
        @endif --}}



        {{-- <div class="max-w-2xl p-6 mx-auto mt-10 bg-slate-300 rounded-xl">
            <div>Daftar Anak Anda:</div>
            @foreach ($data_anak as $row)
                <p>Nama: {{ $row->name }}</p>
                <p>Umur: {{ $row->umur }}</p>
                <p>Jenis Kelamin: {{ $row->jenis_kelamin }}</p>
            @endforeach
        </div> --}}

    </div>


</x-app-layout>
