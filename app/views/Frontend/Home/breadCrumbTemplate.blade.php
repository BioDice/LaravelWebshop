@if ($breadcrumbs)
    <div class="crumb_navigation"> Navigation:
        @foreach ($breadcrumbs as $breadcrumb)
            @if (!$breadcrumb->last)
                <span><a href="{{ $breadcrumb->url }}">{{ $breadcrumb->title }}</a></span>
            @else
                <span class="current">{{ $breadcrumb->title }}</span>
            @endif
            /
        @endforeach
    </div>
@endif