<x-layouts.base>

    <section class="container">
        <h1 class="h1">Start a Recipe...</h1>
        <form action="/recipes" method="POST" class="form">
            @csrf

            <x-form.input name="title" label="Title" />
            <x-form.textarea name="description" label="Description" />
            <div class="form__group">
                <label for="imageMain" class="form__label form__label-file-upload">
                    <span>Upload Main Image</span>
                    <input type="file" name="imageMain" id="imageMain" class="form__input form__file-upload" tabindex="0">
                </label>
            </div>
            <x-form.input name="servingsMade" label="Servings Made" min='1' type='number' />
            <x-form.input name="caloriesTotal" label="Calories Total" min='1' type='number' />
            <div class="form__group">
                <label for="save" class="form__submit-button"><span>Save</span>
                    <input type="submit" value="Save" id="save" class="form__submit">
                </label>
            </div>
        </form>
    </section>
</x-layouts.base>
