
<div class="title_box">Categories</div>
<ul class="left_menu">
    @foreach($categories as $category)

        <?php
            $dashes = "";
            $temp = $category;
            while ($temp->parent != null)
            {
                $dashes .= "-";
                $temp = $temp->parent;
            }
        ?>
        <li class="odd">
            <a href="/ViewCategory/{{ $category->id }}">{{ $dashes . " " . $category->name }}</a>
        </li>
    @endforeach
</ul>