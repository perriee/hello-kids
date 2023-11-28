@extends('layouts.global')

@section('content')
    {{-- Hero Start --}}
    <section id="hero" class="relative flex items-center justify-between px-20 h-[90vh] scroll-mt-16">
        <div class="absolute left-0 z-10">
            <img src="{{ url('/img/circle.png') }}" alt="" class="w-[70%]">
        </div>
        <div class="z-10 flex flex-col w-1/2 gap-2">
            <div class="font-bold text-[2.8rem] text-slate-700">Selamat Datang di <span class="text-primary">Hello Kids</span>
            </div>
            <div class="text-4xl font-semibold text-slate-500">Yogyakarta</div>
        </div>
        <div class="flex justify-end w-1/2">
            <img src="{{ url('/img/hospital.webp') }}" alt="Hospital" class="w-[60%]">
        </div>
    </section>
    {{-- Hero End --}}

    {{-- Tentang Kami Start --}}
    <section id="tentang-kami" class="flex flex-col px-40 py-10 bg-slate-100 scroll-mt-16">
        <div class="pb-10 text-4xl font-semibold text-center text-primary">Tentang Kami</div>
        <div class="flex items-center">
            <div class="flex justify-end w-1/3"><img src="{{ url('/img/posyandu.webp') }}" alt=""
                    class="w-[30rem] rounded-xl shadow-2xl"></div>
            <div class="w-2/3 p-16 text-xl leading-10 text-slate-500">Pelaksanaan Posyandu rutin dilakukan setiap bulan.
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
    <section id="agenda" class="flex flex-col px-40 pt-10 pb-20">
        <div class="pb-10 text-4xl font-semibold text-center text-primary">Agenda</div>
        <div class="flex items-center">
            <div class="w-2/3 text-xl leading-10 text-slate-500">Pelaksanaan Posyandu rutin dilakukan setiap bulan. Pengurus
                posyandu
                terdiri
                dari 15 orang yang berasal
                dari anggota PKK. Kader tersebut dilatih setiap bulannya oleh pihak Puskesmas. Pelaksanaan Posyandu rutin
                dilakukan setiap bulan. Pengurus posyandu terdiri dari 15 orang yang berasal dari anggota PKK. Kader
                tersebut dilatih setiap bulannya oleh pihak Puskesmas.</div>
            <div class="flex justify-end w-1/3"><img src="{{ url('/img/task.webp') }}" alt="" class="w-[20rem]">
            </div>
        </div>
    </section>
    {{-- Agenda End --}}
@endsection
