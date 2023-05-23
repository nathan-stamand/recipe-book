@props(['name', 'label'])
<x-form.group>
    <label for="{{ $name }}" class="form__submit-button"><span>{{ $slot }}</span>
        <input type="submit" value="{{ $slot }}" id="{{ $name }}" class="form__submit" tabindex="0">
    </label>
</x-form.group>
