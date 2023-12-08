<x-app-layout>

    @section('title', $page_title)

    <div class="px-32 py-20">

        <div class="mx-auto rounded-xl">
            <span class="text-2xl font-semibold text-slate-600">Layanan Ibu Hamil</span>
        </div>

        <section class="mt-6 rounded-xl">
            <div class="max-w-screen-xl mx-auto">
                <div class="relative overflow-hidden bg-white shadow-md rounded-xl">
                    <div class="overflow-x-auto">
                        <table class="w-full text-slate-500">
                            <thead class="text-slate-700 bg-slate-50 dark:bg-slate-700">
                                <tr class="text-center">
                                    <th scope="col" class="w-10 px-4 py-3 text-center">No</th>
                                    <th scope="col" class="px-4 py-3 w-44">Usia Kandungan</th>
                                    <th scope="col" class="w-[10rem] px-4 py-3">Berat Badan</th>
                                    <th scope="col" class="px-4 py-3 w-[10rem]">Tensi</th>
                                    <th scope="col" class="w-[10rem] px-4 py-3">Lingkar Lengan</th>
                                    <th scope="col" class="px-4 py-3 w-[20rem]">Keluhan</th>
                                    <th scope="col" class="px-4 py-3 w-[9rem]">Jadwal Periksa</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $no = 1;
                                @endphp
                                @if (!$layananBumil)
                                    <tr>
                                        <td colspan="7" class="p-6 italic text-center">Data Tidak Tersedia</td>
                                    </tr>
                                @elseif (count($layananBumil) > 0)
                                    @foreach ($layananBumil as $row)
                                        <tr class="text-center border-b">
                                            <td class="px-4 py-3">{{ $no++ }}</td>
                                            <td class="px-4 py-3">
                                                {{ $row->usia_kandungan }} bulan
                                            </td>
                                            <td class="px-4 py-3">
                                                {{ $row->berat_badan }} kg
                                            </td>
                                            <td class="px-4 py-3">
                                                {{ $row->tensi }} mmHg
                                            </td>
                                            <td class="px-4 py-3">
                                                {{ $row->lingkar_lengan }} cm
                                            </td>
                                            <td class="px-4 py-3">
                                                {{ $row->keluhan }}
                                            </td>
                                            <td class="px-4 py-3">
                                                {{ $row->created_at->format('d M Y') }}
                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <td colspan="7" class="p-6 italic text-center">Data Tidak Tersedia</td>
                                    </tr>
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
    </div>
    </div>
    </section>
    </div>


</x-app-layout>
