<?php

namespace App\Providers;

use App\Coupon;
use Illuminate\Support\ServiceProvider;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Schema;






class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {


        Schema::defaultStringLength(191);



    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        view()->composer(['pages.home','pages.cart'], function ($view) {

            $count=Cart::count();
            $data=Cart::content();
            $total = Cart::total();
            $view->with(['count'=>$count,'data'=>$data,'total'=>$total]);
        });
    }
}
