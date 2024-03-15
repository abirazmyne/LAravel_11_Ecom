<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\Customer;
use Illuminate\Support\ServiceProvider;
use Illuminate\View\View;

//use Viewr;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {

//        Viewr::composer(['website.master'], function ($view){
//            $view->with([
//                'categories'=> Category::all(),
//            ]);
//        });
    }
}
