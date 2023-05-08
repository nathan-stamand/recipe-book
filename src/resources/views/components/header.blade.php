<?php
$nav = [
    ['Home', '/'],
    ['Recipes', '/'],
    ['Menus', '/'],
    ['Grocery Lists', '/'],
    ['Settings', '/']
];
?>
<header class="header">
    <nav>
        <ul class="header__nav">
            @foreach ($nav as $nav_item)
            <li class="header__nav-item">
                <a class="header__nav-link" href="{{ $nav_item[1] }}">{{ $nav_item[0] }}</a>
            </li>
            @endforeach
        </ul>
    </nav>
</header>
