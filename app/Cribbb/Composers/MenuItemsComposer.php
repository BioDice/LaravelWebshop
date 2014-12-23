<?php namespace Cribbb\Composers;

class MenuItemsComposer {

    public function compose($view)
    {
        $menuItems = \MenuItem::get();
        $view->with('menuItems', $menuItems);
    }
}