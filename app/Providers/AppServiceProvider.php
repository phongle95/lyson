<?php

namespace App\Providers;
use App\tin;
use App\loaitin;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
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
        $loaitin = loaitin::all();
        $tintuc = tin::orderBy('id','DESC')->offset(5)->limit(3)->get();
        view::share('tintuc',$tintuc);
        view::share('loaitin',$loaitin);
    }
}
