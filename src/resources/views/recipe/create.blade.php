<x-layouts.base>
    <h1 class="h1">Create a Recipe</h1>

    <form action="/recipes" method="POST" class="form">
        @csrf
        <div class="form__group">
            <label for="title" class="form__label">Title</label>
            <input type="text" name="title" id="title" class="form__input">
        </div>
        <div class="form__group">
            <label for="description" class="form__label">Description</label>
            <textarea name="description" id="description" class="form__input"></textarea>
        </div>
        <div class="form__group">
            <label for="imageMain" class="form__label">Main Image</label>
            <input type="text" name="imageMain" id="imageMain" class="form__input">
        </div>
        <div class="form__group">
            <label for="servings" class="form__label">Servings</label>
            <input type="text" name="servings" id="servings" class="form__input">
        </div>
        <div class="form__group">
            <input type="submit" value="Save" id="prepTime" class="form__input">
        </div>
    </form>
</x-layouts.base>
