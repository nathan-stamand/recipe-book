<x-layouts.base>
    <section class="container">
        <h1 class="h1">Start a Recipe...</h1>
        <form action="/recipes" method="POST" class="form">
            @csrf

            <x-form.input name="title" label="Title" />
            <x-form.textarea name="description" label="Description" />
            <x-form.file-upload name="imageMain" label="Upload Main Image" />
            <x-form.input name="servingsMade" label="Servings Made" min='1' type='number' />
            <x-form.input name="caloriesTotal" label="Calories Total" min='1' type='number' />

            <x-form.submit name='save'>Add Instructions</x-form.submit>
        </form>
    </section>
</x-layouts.base>
