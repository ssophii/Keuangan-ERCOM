@props(['value'])

<div class="col-md-4 font-weight-bold">
    <label {{ $attributes->merge(['class' => 'block font-medium text-sm text-gray-700']) }}>
        {{ $value ?? $slot }}
    </label>
</div>

