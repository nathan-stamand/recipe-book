<x-layouts.base>
    <h1 class="h1">Now we're cookin' with <em>grease</em></h1>
    <section class="container large-3 med-lar-2">
        @foreach ($recipes as $recipe)
        <x-recipe-card :recipe="$recipe" />
        @endforeach
    </section>
</x-layouts.base>
