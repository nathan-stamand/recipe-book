<?php
$qs = [
    [
        "icon" => file_get_contents('images/kitchen-set.svg'),
        "link" => "#link",
        "text" => "Link Text",
    ],
];
?>
<section class="quickstart">
    @foreach ($qs as $quickLink)
    <article class="quickstart__button-container">
        <a class="quickstart__button" href="{{ $quickLink['link'] }}">
            <span class="quickstart__icon">
                {!! $quickLink['icon'] !!}
            </span>
            <span class="quickstart__text">{{ $quickLink['text'] }}</span>
        </a>
    </article>
    @endforeach
</section>
