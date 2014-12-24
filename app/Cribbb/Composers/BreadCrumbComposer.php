<?php namespace Cribbb\Composers;

class BreadCrumbComposer {

    public function compose($view)
    {
        $view->with('breadcrums', \Breadcrumbs::render());
    }
}