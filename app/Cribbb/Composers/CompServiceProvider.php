<?php namespace Cribbb\Composers;

use Illuminate\Support\ServiceProvider;

class ComposerServiceProvider extends ServiceProvider {

    public function register()
    {
        $this->app->view->composer('Frontend.Menu.menu', 'Cribbb\Composers\MenuItemsComposer');
        $this->app->view->composer('Frontend.Category.categoryMenu', 'Cribbb\Composers\CategoryMenuComposer');
        $this->app->view->composer('Frontend.Cart.miniCart', 'Cribbb\Composers\MiniCartComposer');
        //$this->app->view->composer('Frontend.Home.breadCrumbTemplate', 'Cribbb\Composers\BreadCrumbComposer');
    }

}