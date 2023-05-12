<x-layouts.base>
    <h1>Now we're cookin' with <em>grease</em></h1>
    @foreach ($recipes as $recipe)
    <h3>{{ $recipe->title }}</h3>
    <img src="{{ $recipe->imageMain }}" alt="{{ $recipe->title }}" />
    <ul>
        @foreach ($recipe->ingredients as $ingredient)
        <li>{{ $ingredient->name }}</li>
        @endforeach
    </ul>
    @endforeach
</x-layouts.base>
