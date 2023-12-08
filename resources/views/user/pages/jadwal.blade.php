<x-app-layout>

    @section('title', $page_title)

    <div class="px-32 py-20">

        <div class="mx-auto rounded-xl">
            <span class="text-2xl font-semibold text-slate-600">Jadwal Pemeriksaan</span>
        </div>

        <section class="mt-6 rounded-xl">
            <div class="max-w-screen-xl mx-auto">
                <div class="relative overflow-hidden bg-white shadow-md rounded-xl">
                    <div class="overflow-x-auto">
                        <table class="w-full text-slate-500">
                            <thead class="text-slate-700 bg-slate-50 dark:bg-slate-700">
                                <tr class="text-center">
                                    <th scope="col" class="w-10 px-4 py-3 text-center">No</th>
                                    <th scope="col" class="px-4 py-3">Tanggal</th>
                                    <th scope="col" class="px-4 py-3 ">Jam</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $no = 1;
                                @endphp
                                @if (!$jadwals)
                                    <tr>
                                        <td colspan="3" class="p-6 italic text-center">Data Tidak Tersedia</td>
                                    </tr>
                                @elseif (count($jadwals) > 0)
                                    @foreach ($jadwals as $row)
                                        <tr class="text-center border-b">
                                            <td class="px-4 py-3">{{ $no++ }}</td>
                                            <td class="px-4 py-3">
                                                {{ \Carbon\Carbon::parse($row->tanggal)->format('d M Y') }}
                                            </td>
                                            <td class="px-4 py-3">
                                                {{ \Carbon\Carbon::parse($row->tanggal)->format('H:i') }} WIB
                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <td colspan="3" class="p-6 italic text-center">Data Tidak Tersedia</td>
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
