<?php namespace Cribbb\Composers;

class CribbbListComposer {

    public function compose($view)
    {
        $menuItems = \MenuItem::get();
        $view->with('menuItems', $menuItems);
    }

}