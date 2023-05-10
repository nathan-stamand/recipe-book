<?php
$qs = [
    [
        "icon" => file_get_contents('images/kitchen-set.svg'),
        "link" => "#link",
        "heading" => "Quick Link",
        "description" => "This is a short description of the heading.",
    ],
    [
        "icon" => file_get_contents('images/kitchen-set.svg'),
        "link" => "#link",
        "heading" => "Quick Link",
        "description" => "This is a short description of the heading.",
    ],
    [
        "icon" => file_get_contents('images/kitchen-set.svg'),
        "link" => "#link",
        "heading" => "Quick Link",
        "description" => "This is a short description of the heading.",
    ],
    [
        "icon" => file_get_contents('images/kitchen-set.svg'),
        "link" => "#link",
        "heading" => "Quick Link",
        "description" => "This is a short description of the heading.",
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
            <span class="quickstart__heading">{{ $quickLink['heading'] }}</span>
            <span class="quickstart__description">{{ $quickLink['description'] }}</span>
        </a>
    </article>
    @endforeach
</section>
