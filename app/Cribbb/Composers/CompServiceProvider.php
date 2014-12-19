<?php namespace Cribbb\Composers;

use Illuminate\Support\ServiceProvider;

class ComposerServiceProvider extends ServiceProvider {

    public function register()
    {
        $this->app->view->composer('Frontend.Menu.menu', 'Cribbb\Composers\CribbbListComposer');
    }

}