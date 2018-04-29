<?php

namespace App\Providers;
use Illuminate\Support\Facades\Schema;


use Illuminate\Support\ServiceProvider;
use App\Category;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
       Schema::defaultStringLength(191);
       view()->composer('front.layouts.master',function ($view)
       {
           $view->with('items',Category::all());

       });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
