<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use \App\Category;
use \App\Skill;



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


        view()->share('skills', Skill::get());
        view()->share('categorys',Category::get());

    }
}
