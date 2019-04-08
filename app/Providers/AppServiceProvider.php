<?php

namespace App\Providers;
use App\tin;
use App\loaitin;
use App\travel;
use App\hotel;
use App\car;
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
        $dulich = travel::where('khuyenMai',1)->orderBy('id','DESC')->limit(3)->get();
        $nhanghi = hotel::orderBy('id','DESC')->limit(3)->get();
        $xe = car::orderBy('id','DESC')->limit(3)->get();
        view::share('tintuc',$tintuc);
        view::share('dulich',$dulich);
        view::share('nhanghi',$nhanghi);
        view::share('xe',$xe);
        view::share('loaitin',$loaitin);
    }
}
