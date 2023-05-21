@props(['name', 'label'])
<x-form.group>
    <label for="description" class="form__label grow-wrap">
        <textarea data-replicated-value="{{ old($name) }}" name="description" rows="1" id="description" class="form__input">
            {{ old($name) }}
        </textarea>
        <span>{{ $label }}</span>
    </label>
</x-form.group>
