@props(['name', 'label'])
<x-form.group>
    <label for="description" class="form__label grow-wrap">
        <textarea name="description" rows="1" id="description" class="form__input"></textarea>
        <span>{{ $label }}</span>
    </label>
</x-form.group>
