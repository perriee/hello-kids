<x-app-layout>

    @section('title', $page_title)

    <div class="px-32">

        <div class="mx-auto mt-20 rounded-xl">
            <span class="text-2xl font-semibold">Data Jenis Imun</span>
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
                                    <th scope="col" class="px-4 py-3 w-44">Nama Imun</th>
                                    <th scope="col" class="px-4 py-3 w-44">Deskripsi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $no = 1;
                                @endphp
                                @if (!$jenis_imun)
                                    <tr>
                                        <td colspan="3" class="p-6 italic text-center">Data Tidak Tersedia</td>
                                    </tr>
                                @elseif (count($jenis_imun) > 0)
                                    @foreach ($jenis_imun as $row)
                                        <tr class="text-center border-b">
                                            <td class="px-4 py-3">{{ $no++ }}</td>
                                            <td class="px-4 py-3">
                                                {{ $row->nama_imun }}
                                            </td>
                                            <td class="px-4 py-3">
                                                {{ $row->deskripsi }}
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
