
<div class="left_menu_corner"></div>
<ul class="menu">
    {{--@foreach($menuItems as $menuItem)
        <li>
            <a href="/{{ $menuItem->url }}" class="{{ $menuItem->class }}"> {{ $menuItem->name }}</a>
        </li>
        <li class="divider"></li>
    @endforeach--}}
    <li>{{ HTML::link('home', 'Home', array('class' => 'nav1'))}}</li>
    <li class="divider"></li>
    <li>{{ HTML::link('about', 'About me', array('class' => 'nav6'))}}</li>
    <li class="divider"></li>
    @if(\Illuminate\Support\Facades\Auth::check())
        <li>{{ HTML::link('profile', 'Profile', array('class' => 'nav5'))}}</li>
        <li class="divider"></li>
        <li>{{ HTML::link('logout', 'Logout ('.\Illuminate\Support\Facades\Auth::user()->username.')', array('class' => 'nav5'))}}</li>
        <li class="divider"></li>
    @else
        <li>{{ HTML::link('register', 'Sign up', array('class' => 'nav4'))}}</li>
        <li class="divider"></li>
        <li>{{ HTML::link('login', 'Log in', array('class' => 'nav6'))}}</li>
        <li class="divider"></li>
    @endif
</ul>
<div class="right_menu_corner"></div>