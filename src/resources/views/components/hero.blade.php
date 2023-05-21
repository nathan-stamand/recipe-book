<div class="hero">
    <div class="container hero__container">
        <h1 class="hero__title h1">{!! $heading !!}</h1>
        <hr>
        @if (isset($text))
        <p class="hero__text">{!! $text !!}</p>
        @endif
    </div>
</div>
@if (isset($background))
<style>
    .hero {
        background-image: url({{ $background }});
    }
</style>
@endif
