@props(['active'])

@php
$classes = ($active ?? false)
            ? 'inline-flex w-full bg-white items-center pl-4 border border-[#162c51] py-1 text-md font-medium leading-5 text-[#292929] transition duration-150 ease-in-out'
            : 'inline-flex w-full items-center pl-4 border border-[#162c51] py-1 text-md font-medium leading-5 text-[#fff] hover:bg-white hover:text-[#292929] transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
