<?php namespace Cribbb\Composers;

use App\Models\MenuItem;

class MenuItemsComposer {

    public function compose($view)
    {
        $menuItems = MenuItem::get();
        $view->with('menuItems', $menuItems);
    }
}