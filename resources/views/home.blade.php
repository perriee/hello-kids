@extends('layouts.global')

@section('title', 'Homepage')

@section('content')
    {{-- Hero Start --}}
    <section id="hero" class="relative flex items-center justify-between px-20 h-[90vh] scroll-mt-16">
        <div class="absolute left-0 z-10">
            <img src="{{ url('/img/circle.png') }}" alt="Circle" class="w-[70%]" data-aos="fade-right"
                data-aos-duration="2000">
        </div>
        <div class="z-20 flex flex-col gap-6">
            <div class="text-6xl font-bold tracking-wide text-slate-700" data-aos="fade-right" data-aos-duration="1000">
                Selamat Datang di
            </div>
            <div class="font-bold tracking-wide text-7xl text-primary" data-aos="fade-right" data-aos-duration="1500">Posyandu</div>
            <div class="text-4xl font-semibold tracking-wide text-slate-500" data-aos="fade-right" data-aos-duration="2000">
                Sehat Ceria</div>
        </div>
        <div class="flex justify-end w-1/3" data-aos="zoom-in" data-aos-duration="2000">
            <img src="{{ url('/img/hospital.webp') }}" alt="Hospital" class="w-[80%]">
        </div>
    </section>
    {{-- Hero End --}}

    {{-- Tentang Kami Start --}}
    <section id="tentang-kami" class="flex flex-col px-40 py-10 bg-slate-100 scroll-mt-16">
        <div class="pb-10 text-4xl font-semibold text-center text-primary" data-aos="fade-down" data-aos-duration="1000">
            Tentang Kami</div>
        <div class="flex items-center">
            <div class="flex justify-end w-1/3" data-aos="zoom-in" data-aos-duration="1500"><img
                    src="{{ url('/img/posyandu.webp') }}" alt="" class="w-[30rem] rounded-xl shadow-2xl"></div>
            <div class="w-2/3 p-16 text-xl leading-10 text-slate-500" data-aos="fade-right" data-aos-duration="2000">
                Pelaksanaan Posyandu rutin dilakukan setiap bulan.
                Pengurus
                posyandu
                terdiri
                dari 15 orang yang berasal
                dari anggota PKK. Kader tersebut dilatih setiap bulannya oleh pihak Puskesmas. Pelaksanaan Posyandu rutin
                dilakukan setiap bulan. Pengurus posyandu terdiri dari 15 orang yang berasal dari anggota PKK. Kader
                tersebut dilatih setiap bulannya oleh pihak Puskesmas.</div>
        </div>
    </section>
    {{-- Tentang Kami End --}}

    {{-- Agenda Start --}}
    <section id="agenda" class="flex flex-col px-40 pt-10 pb-20 scroll-mt-16">
        <div class="pb-10 text-4xl font-semibold text-center text-primary" data-aos="fade-down" data-aos-duration="1000">
            Agenda</div>
        <div class="flex items-center">
            <div class="w-2/3 text-xl leading-10 text-slate-500" data-aos="fade-left" data-aos-duration="2000"> <div>Kegiatan yang dilakukan oleh kader di Posyandu Sehat Cerita Dusun Sanggrahan RW 46 kelurahan Maguwoharjo, yaitu:</div>
<div>1.	Pengukuran dan pencatatan tinggi badan pada anak</div>
<div>2.	Penimbangan dan pencatatan berat badan pada balita</div>
<div>3.	Pengukuran dan pencatatan lingkar kepala</div>
<div>4.	Layanan pemeriksaan ibu hamil</div>
<div>5.	Pembagian makanan bergizi seperti bubur kacang hijau pada anak</div>
<div>6.	Penyuluhan mengenai kesehatan</div>  
</div>
            <div class="flex justify-end w-1/3" data-aos="zoom-in" data-aos-duration="1500"><img
                    src="{{ url('/img/task.webp') }}" alt="" class="w-[20rem]">
            </div>
        </div>
    </section>
    {{-- Agenda End --}}

    {{-- Jadwal Start --}}
    <section id="jadwal" class="flex flex-col px-40 pt-10 pb-20 bg-slate-100  scroll-mt-16">
        <div class="pb-10 text-4xl font-semibold text-center text-primary" data-aos="fade-down" data-aos-duration="1000">
            Jadwal Pelayanan</div>
        <section class="mt-6 rounded-xl" data-aos="fade-down" data-aos-duration="2000">
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
        </section>
        </div>
    </section>
    {{-- Jadwal End --}}
@endsection

@push('javascript')
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script>
        AOS.init();
    </script>
@endpush
