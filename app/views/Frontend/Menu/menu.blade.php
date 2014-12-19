
<div class="left_menu_corner"></div>
<ul class="menu">
    @foreach($menuItems as $menuItem)
        <li>
            <a href="{{ $menuItem->url }}" class="{{ $menuItem->class }}"> {{ $menuItem->name }}</a>
        </li>
        <li class="divider"></li>
    @endforeach
</ul>
<div class="right_menu_corner"></div>