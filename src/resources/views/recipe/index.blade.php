<x-layouts.base>
    <x-hero heading="Now we're cookin' with <em>grease</em>" text='Here are your recipes so far!' background='/images/banner-recipes.jpg' />
    <section class="container large-3 med-lar-2">
        @foreach ($recipes as $recipe)
        <x-recipe-card :recipe="$recipe" />
        @endforeach
    </section>
</x-layouts.base>
