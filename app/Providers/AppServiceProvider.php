<?php

namespace App\Providers;
use App\Models\Categories;
use App\Models\Brand;
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
        view()->composer('layout',function($view){
            $product_type = Categories::all();
            $product_brand = Brand::all();
            $view->with('product_type',$product_type)->with('product_brand',$product_brand);
        });
    }
}
