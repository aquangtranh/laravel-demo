<?php

namespace App\Providers;

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
        // view()->share('category', $cate);
        // view()->composer(['form-create-user' , 'welcome'], function($view) {
        //     // $view->with('category', $cate);
        //     $cate = 'this is share data';
        //     $view->with(['category' => $cate]);
        // });
        view()->composer(['users.*', 'welcome'], function($view) {
            // $view->with('category', $cate);
            $cate = 'this is share data';
            $view->with(['category' => $cate]);
        });
    }
}
