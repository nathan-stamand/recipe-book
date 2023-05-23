<x-layouts.base>
    <x-hero heading="Now we're cookin' with <em>grease</em>" text='Here are your recipes so far!' background='/images/banner-recipes.jpg' />
    <section class="container">
        <form class="search-form" action="/recipes" method="GET">
            @if (request('tag'))
            <input type="hidden" name="tag" value="{{ request('tag') }}">
            @endif

            <x-form.input className='search-form__search' name="search" label="Search for a recipe" />
            <div class="search-form__select" name="tag" id="tag">
                @foreach ($tags as $tag)
                <div class="search-form__select-option">
                    <a href='?tag={{ $tag->slug }}'>{{ $tag->name }}</a>
                </div>
                @endforeach
            </div>
            <x-form.submit name="search">Search</x-form.submit>
        </form>
    </section>
    <section class="container large-3 med-lar-2">
        @foreach ($recipes as $recipe)
        <x-recipe-card :recipe="$recipe" />
        @endforeach
    </section>
    {{ $recipes->links() }}
</x-layouts.base>
