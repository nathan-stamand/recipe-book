<x-layouts.base>
    <section class="container ">
        <div class="recipe-hero">
            <h1 class="h2 recipe-hero__title">{{ $recipe->title }}</h1>
            <p class="recipe-hero__date">Created <time>{{ $recipe->created_at->format('M d, Y') }}</time></p>
            <img src="{{ $recipe->imageMain }}" alt="{{ $recipe->title }}" class="recipe-hero__image">
        </div>
    </section>
    <section class='container'>
        <h2 class="h3">Ingredients</h2>
        <ul class="ingredient-list">
            @foreach ($recipe->ingredients as $ingredient)
            <li class="ingredient-list__item">
                {{ $ingredient->quantity }} {{ $ingredient->unit }}
                <strong>{{ $ingredient->name }}</strong>
            </li>
            @endforeach
        </ul>
    </section>
    <section class="container">
        <h2 class="h3">Directions</h2>
        <ol class="direction-list">
            @foreach ($recipe->directions as $direction)
            <li class="direction-list__item">{{ $direction->stepDescription }}</li>
            @endforeach
        </ol>
    </section>
</x-layouts.base>
