<?php

namespace simpleMenu;

use Illuminate\Support\ServiceProvider;


class SimpleMenuServiceProvider extends ServiceProvider
{


    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->make('simpleMenu\MenuController');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {

        $this->loadRoutesFrom(__DIR__.'/routes.php');
        $this->loadMigrationsFrom(__DIR__.'/migrations');
        $this->publishes([
            __DIR__.'/views' => resource_path('views/vendor/menu'),
        ]);
        $this->loadViewComponentsAs('menu',[MenuComponent::class]);




    }
}
