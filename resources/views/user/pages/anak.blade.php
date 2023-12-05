<x-app-layout>

    @section('title', $page_title)

    <div class="px-32">

        <div class="mx-auto mt-20 rounded-xl">
            <span class="text-2xl font-semibold">Layanan Anak</span>
        </div>

        <section class="mt-6 rounded-xl">
            <div class="max-w-screen-xl mx-auto">
                <div class="relative overflow-hidden bg-white shadow-md rounded-xl">
                    <div class="overflow-x-auto">
                        <table class="w-full text-gray-500">
                            <thead class="text-gray-700 bg-gray-50 dark:bg-gray-700">
                                <tr class="text-center">
                                    <th scope="col" class="w-10 px-4 py-3 text-center">No</th>
                                    <th scope="col" class="px-4 py-3">Nama</th>
                                    <th scope="col" class="px-4 py-3">Umur</th>
                                    <th scope="col" class="px-4 py-3">Jenis Kelamin</th>
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
                                @if (!$anakData)
                                    <tr>
                                        <td colspan="8" class="p-6 italic text-center">Data Tidak Tersedia</td>
                                    </tr>
                                @elseif (count($anakData) > 0)
                                    @foreach ($anakData as $row)
                                        <tr class="text-center border-b">
                                            <td class="px-4 py-3">{{ $no++ }}</td>
                                            <td class="px-4 py-3">{{ $row['anak']->name }}</td>
                                            <td class="px-4 py-3">{{ $row['anak']->umur }} tahun</td>
                                            <td class="px-4 py-3">
                                                {{ $row['anak']->jenis_kelamin === 'L' ? 'Laki - laki' : 'Perempuan' }}
                                            </td>
                                            <td class="px-4 py-3">
                                                {{ optional($row['layanan_anak'])->lingkar_kepala ? optional($row['layanan_anak'])->lingkar_kepala . ' cm' : '-' }}
                                            </td>
                                            <td class="px-4 py-3">
                                                {{ optional($row['layanan_anak'])->tinggi_badan ? optional($row['layanan_anak'])->tinggi_badan . ' cm' : '-' }}
                                            </td>
                                            <td class="px-4 py-3">
                                                {{ optional($row['layanan_anak'])->berat_badan ? optional($row['layanan_anak'])->berat_badan . ' kg' : '-' }}
                                            </td>
                                            <td class="px-4 py-3">
                                                {{ $row['layanan_anak'] === null ? '-' : $row['layanan_anak']->created_at->translatedFormat('d M Y') }}
                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <td colspan="8" class="p-6 italic text-center">Data Tidak Tersedia</td>
                                    </tr>
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
    </div>


</x-app-layout>
