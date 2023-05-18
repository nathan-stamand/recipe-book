<a href="/recipes/{{ $recipe->slug }}" class="recipe-card">
    <div class="recipe-card__image image-wrapper">
        <img src="{{ $recipe->imageMain }}" alt="{{ $recipe->title }}" />
    </div>
    <div class="recipe-card__content">
        <h3 class="recipe-card__title">{{ $recipe->title }}</h3>
        <hr />
        <p><strong>Serves: </strong>{{ $recipe->servingsMade }}</p>
        <p><strong>Calories Per Serving: </strong>{{ $recipe->caloriesPerServing }}</p>
    </div>
</a>
