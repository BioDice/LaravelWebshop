
<div class="title_box">Categories</div>
<ul class="left_menu">
    @foreach($categories as $category)

        <li class="odd">
            <a href="/ViewCategory/{{ $category->id }}">{{ $category->name }}</a>
        </li>

        @foreach($category->children as $child)
            <li class="odd">
                <a href="/ViewCategory/{{ $child->id }}"> - {{ $child->name }}</a>
            </li>
        @endforeach
    @endforeach
</ul>