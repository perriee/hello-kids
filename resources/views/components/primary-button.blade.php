<button
    {{ $attributes->merge([
        'type' => 'submit',
        'class' =>
            'px-8 py-2 font-semibold rounded-lg text-white bg-primary hover:bg-white border-2 border-primary hover:text-primary transition-all',
    ]) }}>

    {{ $slot }}

</button>
