@props(['href', 'active' => false])

@php

$classes = ($active ?? false)
            ? 'bg-white text-teal-900 border-b-2 border-teal-600 rounded-none transition delay-150 scale-105'
            : 'text-teal-600 hover:bg-gray-100 hover:text-teal-700 rounded-none transition delay-60 ease-in-out hover:border-b-2 hover:border-teal-600'

@endphp

<a {{ $attributes->merge(['class' => 'px-3 mx-1 py-2 rounded-none text-sm font-medium ' . $classes]) }} href="{{ $href }}">
    {{ $slot }}
</a>
