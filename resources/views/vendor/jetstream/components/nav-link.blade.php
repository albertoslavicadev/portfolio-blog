@props(['active'])

@php
$classes = ($active ?? false)
            ? 'opacity-100 inline-flex items-center px-1 pt-1 border-b-2 border-indigo-400 text-sm font-medium leading-5 text-gray-400 focus:outline-none focus:border-gray-100 transition'
            : 'opacity-100 inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium leading-5 text-gray-100 hover:text-gray-100 hover:border-gray-100 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
