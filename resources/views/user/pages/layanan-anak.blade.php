<x-app-layout>

    @section('title', $page_title)

    <div class="px-32">

        <div class="mx-auto mt-20 rounded-xl">
            <span class="text-2xl font-semibold">Data Perkembangan {{ $anak->name }}</span>
        </div>

        <section class="mt-6 rounded-xl">
            <div class="max-w-screen-xl mx-auto">
                <div class="relative overflow-hidden bg-white shadow-md rounded-xl">
                    <div class="overflow-x-auto">
                        <table class="w-full text-gray-500">
                            <thead class="text-gray-700 bg-gray-50 dark:bg-gray-700">
                                <tr class="text-center">
                                    <th scope="col" class="w-10 px-4 py-3 text-center">No</th>
                                    <th scope="col" class="px-4 py-3">Lingkar Kepala</th>
                                    <th scope="col" class="px-4 py-3">Tinggi Badan</th>
                                    <th scope="col" class="px-4 py-3">Berat Badan</th>
                                    <th scope="col" class="px-4 py-3">Jadwal Periksa</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $no = 1;
                                @endphp
                                @forelse ($layanan_anak as $row)
                                    <tr class="text-center border-b">
                                        <td class="px-4 py-3">{{ $no++ }}</td>
                                        <td class="px-4 py-3">
                                            {{ optional($row)->lingkar_kepala ? $row->lingkar_kepala . ' cm' : '-' }}
                                        </td>
                                        <td class="px-4 py-3">
                                            {{ optional($row)->tinggi_badan ? $row->tinggi_badan . ' cm' : '-' }}
                                        </td>
                                        <td class="px-4 py-3">
                                            {{ optional($row)->berat_badan ? $row->berat_badan . ' kg' : '-' }}
                                        </td>
                                        <td class="px-4 py-3">
                                            {{ $row === null ? '-' : $row->created_at->translatedFormat('d M Y') }}
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="8" class="p-6 italic text-center">Data Tidak Tersedia</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
    </div>

</x-app-layout>
