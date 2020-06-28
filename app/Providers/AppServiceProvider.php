<?php

namespace Birdbord\Providers;

use Birdbord\Task;
use Birdbord\Project;
use Birdbord\Observers\TaskObserver;
use Birdbord\Observers\ProjectObserver;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        
    }
}
