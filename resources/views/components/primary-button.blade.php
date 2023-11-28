<button
    {{ $attributes->merge([
        'type' => 'submit',
        'class' =>
            'px-8 py-2 font-semibold rounded-lg text-slate-200 bg-primary hover:bg-primary-hover',
    ]) }}>

    {{ $slot }}

</button>
