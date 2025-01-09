<x-app-layout>

    @section('title', $page_title)

    <div class="px-32 pt-8 pb-28">
        <form action="{{ route('chatbot.sendMessage') }}" method="POST">
            @csrf
            <div class="max-w-screen-xl mx-auto bg-white p-6 w-full rounded-xl">
                <!-- Bubble Chat -->
                <div class="flex justify-start">
                    <div class="flex flex-col gap-2 bg-[#5671A5] p-3 rounded-lg text-white">
                        <p class="text-lg font-semibold">Chatbot</p>
                        <p class="tracking-wide">
                            {{ $chat == null ? 'Halo ' . Auth::user()->name . ', Selamat datang di Hello Kids, ada yang bisa saya bantu?' : $chat->text() }}
                        </p>
                    </div>
                </div>

                {{-- <div class="flex justify-end mb-6">
                    <div class="flex flex-col gap-2 bg-[#F1F5F9] text-slate-700 p-3 rounded-lg">
                        <p class="font-semibold">{{ Auth::user()->name }}</p>
                        <p class="">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatum quisquam
                            ipsa
                            omnis eligendi tempora rem? lorem30</p>
                    </div>
                </div> --}}

                <!-- Fixed Text Input -->
                <div class="fixed bottom-10 left-0 w-full">
                    <div class="max-w-screen-xl mx-auto flex justify-between gap-3">
                        <input type="text" name="message" autocomplete="off" placeholder="Masukkan pesan disini..."
                            class="w-full py-2 px-4 rounded-lg placeholder:italic">
                        <button type="submit"><img src="{{ asset('img/button-send-message.png') }}" alt=""
                                class="w-[70%]"></button>
                    </div>
                </div>
            </div>
        </form>
    </div>

</x-app-layout>
