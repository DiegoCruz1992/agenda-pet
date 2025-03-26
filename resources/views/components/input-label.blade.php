@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-semibold text-sm text-[#292929]']) }}>
    {{ $value ?? $slot }}
</label>
