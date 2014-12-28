
<div class="left_menu_corner"></div>
<ul class="menu">
    @foreach($menuItems as $menuItem)
        <li>
            <a href="/{{ $menuItem->url }}" class="{{ $menuItem->class }}"> {{ $menuItem->name }}</a>
        </li>
        <li class="divider"></li>
    @endforeach
    @if(\Illuminate\Support\Facades\Auth::check())
        <li>{{ HTML::link('logout', 'Logout ('.\Illuminate\Support\Facades\Auth::user()->username.')', array('class' => 'nav5'))}}</li>
        <li class="divider"></li>
    @endif
</ul>
<div class="right_menu_corner"></div>