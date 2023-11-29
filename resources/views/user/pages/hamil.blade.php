<x-app-layout>

    @section('title', $page_title)

    <div class="px-32">

        <div class="mx-auto mt-20 rounded-xl">
            <span class="text-2xl font-semibold">Data Ibu Hamil</span>
        </div>

        <section class="mt-6 rounded-xl">
            <div class="max-w-screen-xl mx-auto">
                <!-- Start coding here -->
                <div class="relative overflow-hidden bg-white shadow-md rounded-xl">
                    <div class="overflow-x-auto">
                        <table class="w-full text-gray-500">
                            <thead class="text-gray-700 bg-gray-50 dark:bg-gray-700">
                                <tr class="text-center">
                                    <th scope="col" class="w-10 px-4 py-3 text-center">No</th>
                                    <th scope="col" class="px-4 py-3 w-44">Usia Kandungan</th>
                                    <th scope="col" class="w-[10rem] px-4 py-3">Berat Badan</th>
                                    <th scope="col" class="px-4 py-3 w-[7rem]">Tensi</th>
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
                                                {{ $row->tensi }}
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
