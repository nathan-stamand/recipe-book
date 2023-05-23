<?php
$nav = [
    'Home' => '/',
    "Recipes" => [
        'Recipes' => '/recipes',
        'New' => '/recipes/new',
    ],
    'Menus' => '/',
    'Grocery Lists' => '/',
    'Settings' => '/'
];
?>
<header class="header">
    <nav>
        <ul class="header__nav">
            @foreach ($nav as $nav_item => $nav_link)
            @if (is_array($nav_link))
            <li class="header__nav-item">
                <a class="header__nav-link" href="{{ $nav_link[$nav_item] }}">{{ $nav_item }}</a>
                @unset($nav_link[$nav_item])
                <ul class="header__submenu">
                    @foreach ($nav_link as $submenu_item => $submenu_link)
                    <li class="header__submenu-item">
                        <a class="header__submenu-link" href="{{ $submenu_link }}">{{ $submenu_item }}</a>
                    </li>
                    @endforeach
                </ul>
            </li>
            @else
            <li class="header__nav-item">
                <a class="header__nav-link" href="{{ $nav_link }}">{{ $nav_item }}</a>
            </li>
            @endif
            @endforeach
        </ul>
    </nav>
</header>
