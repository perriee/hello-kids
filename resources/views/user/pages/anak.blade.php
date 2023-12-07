<x-app-layout>

    @section('title', $page_title)

    <div class="px-32">

        <div class="mx-auto mt-20 rounded-xl">
            <span class="text-2xl font-semibold">Data Anak</span>
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
                                    <th scope="col" class="px-4 py-3">Layanan Anak</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $no = 1;
                                @endphp
                                @forelse ($anaks as $row)
                                    <tr class="text-center border-b">
                                        <td class="px-4 py-3">{{ $no++ }}</td>
                                        <td class="px-4 py-3">{{ $row->name }}</td>
                                        <td class="px-4 py-3">{{ $row->umur }} bulan</td>
                                        <td class="px-4 py-3">
                                            {{ $row->jenis_kelamin === 'L' ? 'Laki - laki' : 'Perempuan' }}
                                        </td>
                                        <td class="px-4 py-3">
                                            <a href="{{ route('user.layanan.anak', ['id' => $row->id]) }}" class="font-semibold text-primary hover:underline">Detail</a>
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

    {{-- <div class="px-32">

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
                                @forelse ($data_anak as $row)
                                    @foreach ($row['layanan_anak'] as $item)
                                        <tr class="text-center border-b">
                                            <td class="px-4 py-3">{{ $no++ }}</td>
                                            <td class="px-4 py-3">{{ $row['anak']->name }}</td>
                                            <td class="px-4 py-3">
                                                {{ optional($item)->lingkar_kepala ? $item->lingkar_kepala . ' cm' : '-' }}
                                            </td>
                                            <td class="px-4 py-3">
                                                {{ optional($item)->tinggi_badan ? $item->tinggi_badan . ' cm' : '-' }}
                                            </td>
                                            <td class="px-4 py-3">
                                                {{ optional($item)->berat_badan ? $item->berat_badan . ' kg' : '-' }}
                                            </td>
                                            <td class="px-4 py-3">
                                                {{ $item === null ? '-' : $item->created_at->translatedFormat('d M Y') }}
                                            </td>
                                        </tr>
                                    @endforeach
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
    </div> --}}

</x-app-layout>
