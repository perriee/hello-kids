@props([
    'disabled' => false,
    'placeholder' => '',
])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge([
    'class' => 'border-gray-300 focus:border-primary focus:ring-primary rounded-md shadow-sm placeholder-slate-400',
]) !!} placeholder="{{ $placeholder ?? '' }}">
