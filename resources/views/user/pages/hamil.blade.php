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
        </section>

        @if (count($layananBumil) > 0)
            <!-- Grafik Perkembangan Ibu Hamil -->
            <div class="mt-10 bg-white shadow-md rounded-xl">
                <div class="px-6 py-4 text-lg font-semibold text-center text-slate-600">Grafik Perkembangan Bu
                    {{ $data_ibu->name }}</div>
                <canvas id="grafikLayananIbuHamil" width="800" height="350"></canvas>
            </div>
        @endif

    </div>

    @push('javascript')
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <script src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/chartjs-adapter-moment"></script>

        <script>
            const labels = {!! $layananBumil->pluck('created_at') !!}
            const dataBeratBadan = {!! $layananBumil->pluck('berat_badan') !!}
            const dataTensi = {!! $layananBumil->pluck('tensi') !!}
            const dataLingkarLengan = {!! $layananBumil->pluck('lingkar_lengan') !!}

            console.log("labels:", labels)
            console.log("dataBeratBadan:", dataBeratBadan)
            console.log("dataTensi:", dataTensi)
            console.log("dataLingkarLengan:", dataLingkarLengan)

            // Konversi data tensi ke format numerik
            const dataTensiNumeric = dataTensi.map(tensi => {
                const [systolic, diastolic] = tensi.split('/').map(Number);
                // Misalnya, ambil nilai rata-rata dari tekanan darah
                return (systolic + diastolic) / 2;
            });

            console.log("dataTensiNumeric:", dataTensiNumeric)

            const grafikData = {
                labels: labels,
                datasets: [{
                        label: 'Berat Badan',
                        data: dataBeratBadan,
                        fill: false,
                        borderColor: 'rgb(220, 38, 38)',
                        tension: 0.1,
                        pointBorderWidth: 2
                    },
                    {
                        label: 'Tensi',
                        data: dataTensiNumeric,
                        fill: false,
                        borderColor: 'rgb(14, 165, 233)',
                        tension: 0.1,
                        pointBorderWidth: 2
                    },
                    {
                        label: 'Lingkar Lengan',
                        data: dataLingkarLengan,
                        fill: false,
                        borderColor: 'rgb(245, 158, 11)',
                        tension: 0.1,
                        pointBorderWidth: 2
                    }
                ]
            };

            // Chart setup with dummy data
            const ctx = document.getElementById('grafikLayananIbuHamil').getContext('2d');
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
