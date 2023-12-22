<x-app-layout>

    @section('title', $page_title)

    <div class="px-32 py-20">

        <div class="mx-auto rounded-xl">
            <span class="text-2xl font-semibold text-slate-600">Data Imunisasi {{ $anak->name }}</span>
        </div>

        <section class="mt-6 rounded-xl">
            <div class="max-w-screen-xl mx-auto">
                <div class="relative overflow-hidden bg-white shadow-md rounded-xl">
                    <div class="overflow-x-auto">
                        <table class="w-full text-slate-500">
                            <thead class="text-slate-700 bg-slate-50 dark:bg-slate-700">
                                <tr class="text-center text-slate-600">
                                    <th scope="col" class="w-10 px-4 py-3 text-center">No</th>
                                    <th scope="col" class="px-4 py-3">Jenis Imunisasi</th>
                                    <th scope="col" class="px-4 py-3">Tanggal Imunisasi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $no = 1;
                                @endphp
                                @forelse ($imunisasi_anak as $row)
                                    <tr class="text-center border-b">
                                        <td class="px-4 py-3">{{ $no++ }}</td>
                                        <td class="px-4 py-3">{{ $row->jenis_imun->nama_imun }}</td>
                                        <td class="px-4 py-3">
                                            {{ $row->created_at->translatedFormat('d M Y') }}</td>
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
