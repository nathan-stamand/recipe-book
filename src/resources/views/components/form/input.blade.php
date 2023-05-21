@props(['name', 'label'])
<x-form.group>
    <label for="{{ $name }}" class="form__label">
        <input name="{{ $name }}" id="{{ $name }}" class="form__input" {{ $attributes(['value' => old($name)]) }} />
        <span>{{ $label }}</span>
    </label>
</x-form.group>
