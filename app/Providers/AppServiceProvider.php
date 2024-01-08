<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind('App\Repositories\IMovieRepository', 'App\Repositories\MovieRepository');
        $this->app->bind('App\Repositories\IGenreRepository', 'App\Repositories\GenreRepository');
        $this->app->bind('App\Repositories\IListRepository', 'App\Repositories\ListRepository');
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
