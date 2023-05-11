<x-layouts.base>
    @foreach ($recipes as $recipe)
        <p>{{ $recipe->title }}</p>
    @endforeach
</x-layouts.base>
