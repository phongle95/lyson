<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tin;
use App\travel;
use App\hotel;
use App\car;

class SiteMapController extends Controller
{
    public function sitemap(){
        $tin = tin::all();
        $travel = travel::all();
        $hotel = hotel::all();
        $car = car::all();
         return response()->view('trangchu.menu.sitemap', [
            'tin' => $tin,
            'travel' => $travel,
            'hotel' => $hotel,
            'car' => $car,
      ])->header('Content-Type', 'text/xml');
    }
}
