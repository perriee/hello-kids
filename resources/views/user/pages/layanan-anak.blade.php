<x-app-layout>

    @section('title', $page_title)

    <div class="px-32 py-20">

        <div class="mx-auto rounded-xl flex justify-between items-center">
            <span class="text-2xl font-semibold text-slate-600">Data Perkembangan {{ $anak->name }}</span>
            {{-- <a href="{{ route('export') }}"
                class="bg-slate-100 rounded-xl px-3 py-2 text-sm border-2 font-semibold border-primary text-primary transition-all hover:bg-primary hover:text-white">Export
                Data</a> --}}
        </div>

        <section class="mt-6 rounded-xl">
            <div class="max-w-screen-xl mx-auto">
                <div class="relative overflow-hidden bg-white shadow-md rounded-xl">
                    <div class="overflow-x-auto">
                        <table class="w-full text-slate-500">
                            <thead class="text-slate-700 bg-slate-50 dark:bg-slate-700">
                                <tr class="text-center text-sm">
                                    <th scope="col" class="w-10 px-4 py-3 text-center">No</th>
                                    <th scope="col" class="px-4 py-3">Lingkar Kepala</th>
                                    <th scope="col" class="px-4 py-3">Tinggi Badan</th>
                                    <th scope="col" class="px-4 py-3">Berat Badan</th>
                                    <th scope="col" class="px-4 py-3">IMT</th>
                                    <th scope="col" class="px-4 py-3">Status BB</th>
                                    <th scope="col" class="px-4 py-3">Saran</th>
                                    <th scope="col" class="px-4 py-3">Jadwal Periksa</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $no = 1;
                                @endphp
                                @forelse ($layanan_anak as $row)
                                    <tr class="text-center border-b text-sm">
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
                                            @php
                                                $tinggi_badan_meter = $row->tinggi_badan / 100;
                                                $imt = $row->berat_badan / ($tinggi_badan_meter * $tinggi_badan_meter);
                                            @endphp
                                            {{ number_format($imt, 2, '.', '') }}
                                        </td>
                                        <td class="px-4 py-3">
                                            @php
                                                $tinggi_badan_meter = $row->tinggi_badan / 100;
                                                $imt = $row->berat_badan / ($tinggi_badan_meter * $tinggi_badan_meter);
                                            @endphp
                                            @if ($imt < 18.5)
                                                <span
                                                    class="bg-amber-400 text-sm px-3 py-1 rounded-full text-white font-medium">Kurus</span>
                                            @elseif ($imt >= 18.5 && $imt < 25)
                                                <span
                                                    class="bg-green-500 text-sm px-3 py-1 rounded-full text-white font-medium">Normal</span>
                                            @elseif ($imt >= 25 && $imt < 30)
                                                <span
                                                    class="bg-amber-400 text-sm px-3 py-1 rounded-full text-white font-medium">Gemuk</span>
                                            @elseif ($imt >= 30)
                                                <span
                                                    class="bg-red-500 text-sm px-3 py-1 rounded-full text-white font-medium">Obesitas</span>
                                            @endif
                                        </td>
                                        <td class="px-4 py-3">
                                            @php
                                                $tinggi_badan_meter = $row->tinggi_badan / 100;
                                                $imt = $row->berat_badan / ($tinggi_badan_meter * $tinggi_badan_meter);
                                            @endphp
                                            @if ($imt < 18.5)
                                                <span class="text-sm px-3 py-1">Berfokus pada makanan
                                                    bergizi tinggi dan camilan sehat. Konsultasikan dengan ahli gizi
                                                    untuk rencana nutrisi yang tepat.</span>
                                            @elseif ($imt >= 18.5 && $imt < 25)
                                                <span class="text-sm px-3 py-1">Jaga kestabilan pola makan
                                                    dan aktivitas fisik. Pertahankan kebiasaan hidup sehat untuk
                                                    mendukung pertumbuhan optimal.</span>
                                            @elseif ($imt >= 25 && $imt < 30)
                                                <span class="text-sm px-3 py-1">Kurangi konsumsi makanan
                                                    tinggi lemak dan gula. Ajak anak berpartisipasi dalam kegiatan fisik
                                                    yang menyenangkan.</span>
                                            @elseif ($imt >= 30)
                                                <span class="text-sm px-3 py-1">Sertakan lebih banyak
                                                    sayuran dan buah dalam pola makan. Rencanakan program olahraga
                                                    ringan bersama keluarga secara teratur.</span>
                                            @endif
                                        </td>
                                        <td class="px-4 py-3 w-40">
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

        @if (count($layanan_anak) > 0)
            <!-- Grafik Perkembangan Anak -->
            <div class="mt-10 bg-white shadow-md rounded-xl">
                <div class="px-6 py-4 text-lg font-semibold text-center text-slate-600">Grafik Perkembangan
                    {{ $anak->name }}</div>
                <canvas id="grafikLayananAnak" width="800" height="350"></canvas>
            </div>
        @endif
    </div>

    @push('javascript')
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <script src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/chartjs-adapter-moment"></script>

        <script>
            const labels = {!! $data_grafik->pluck('created_at') !!}
            const dataLingkarKepala = {!! $data_grafik->pluck('lingkar_kepala') !!}
            const dataBeratBadan = {!! $data_grafik->pluck('berat_badan') !!}
            const dataTinggiBadan = {!! $data_grafik->pluck('tinggi_badan') !!}

            console.log("labels:", labels)
            console.log("dataBeratBadan:", dataBeratBadan)
            console.log("dataTinggiBadan:", dataTinggiBadan)

            const grafikData = {
                labels: labels,
                datasets: [{
                        label: 'Lingkar Kepala',
                        data: dataLingkarKepala,
                        fill: false,
                        borderColor: 'rgb(220, 38, 38)',
                        tension: 0.1,
                        pointBorderWidth: 2
                    },
                    {
                        label: 'Berat Badan',
                        data: dataBeratBadan,
                        fill: false,
                        borderColor: 'rgb(14, 165, 233)',
                        tension: 0.1,
                        pointBorderWidth: 2
                    },
                    {
                        label: 'Tinggi Badan',
                        data: dataTinggiBadan,
                        fill: false,
                        borderColor: 'rgb(245, 158, 11)',
                        tension: 0.1,
                        pointBorderWidth: 2
                    }
                ]
            };

            // Chart setup with dummy data
            const ctx = document.getElementById('grafikLayananAnak').getContext('2d');
            const myChart = new Chart(ctx, {
                type: 'line',
                data: grafikData,
                options: {
                    plugins: {
                        legend: {
                            labels: {
                                font: {
                                    size: 14
                                },
                                boxWidth: 20,
                                padding: 50,
                                usePointStyle: true,
                            },
                            position: 'top',
                        }
                    },
                    scales: {
                        x: {
                            type: 'time',
                            position: 'bottom',
                            time: {
                                unit: 'month',
                                displayFormats: {
                                    day: 'MMM YYYY'
                                }
                            }
                        },
                        y: {
                            min: 0,
                        }
                    },
                    layout: {
                        padding: 40
                    }
                }
            });
        </script>
    @endpush

</x-app-layout>
