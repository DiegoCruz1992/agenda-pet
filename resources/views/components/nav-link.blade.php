@props(['active'])

@php
$classes = ($active ?? false)
            ? 'inline-flex w-full bg-white items-center pl-4 py-1 text-md font-medium leading-5 text-[#292929] transition duration-150 ease-in-out'
            : 'inline-flex w-full items-center pl-4 py-1 text-md font-medium leading-5 text-gray-400 hover:text-white transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
