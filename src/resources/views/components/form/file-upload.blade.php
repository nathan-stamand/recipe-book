<x-form.group>
    <label for="{{ $name }}" class="form__label form__label-file-upload">
        <span>{{ $label }}</span>
        <input type="file" name="{{ $name }}" id="{{ $name }}" class="form__input form__file-upload" tabindex="0">
    </label>
</x-form.group>
