<?php

namespace Sudoku3698\Todo;

use Illuminate\Support\ServiceProvider;

class DemoTodoServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        require __DIR__.'/Http/routes.php';

        $this->publishes([__DIR__.'/migrations/2018_08_13_102158_create_todos_table.php'=>base_path('database/migrations/2018_08_13_102158_create_todos_table.php')]);

        $this->loadViewsFrom(__DIR__.'/views','demo-todo');

        $this->publishes([__DIR__.'/views'=>resource_path('views/vendor/demo-todo')]);

        $this->publishes([__DIR__.'/config'=>config_path()]);

    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__."/config/demo-config.php","demo-config");
    }
}
