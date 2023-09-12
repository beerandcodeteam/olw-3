@props(['value'])

<label {{ $attributes->merge(['class' => 'block text-sm font-medium text-white']) }}>
    {{ $value ?? $slot }}
</label>
