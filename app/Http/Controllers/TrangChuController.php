<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tin;
use App\travel;
use App\hotel;
use App\car;
use App\loaitin;
use Storage;
use Mail;
use Illuminate\Support\Facades\Session;

class TrangChuController extends Controller
{
    //trang chủ
    public function trangchu(){
        $travelkm = travel::where('khuyenMai',1)->orderBy('id','DESC')->limit(3)->get();
        $travel = travel::where('khuyenMai',0)->orderBy('id','DESC')->limit(4)->get();
        $hotel = hotel::orderBy('id','DESC')->limit(4)->get();
        $news = tin::orderBy('id','DESC')->limit(5)->get();
        $car = car::orderBy('id','DESC')->limit(3)->get();
        return view('trangchu.pages.trangchu',['travelkm'=>$travelkm,'travel'=>$travel,'hotel'=>$hotel,'news'=>$news,'car'=>$car]);
    }

    //trang chủ
    public function gioithieu(){
        return view('trangchu.pages.gioithieu');
    }

    //dịch vụ
    public function dichvu(){
        $travelkm = travel::where('khuyenMai',1)->orderBy('id','DESC')->limit(3)->get();
        $travel = travel::where('khuyenMai',0)->orderBy('id','DESC')->limit(4)->get();
        $hotel = hotel::orderBy('id','DESC')->limit(4)->get();
        $car = car::orderBy('id','DESC')->limit(3)->get();
        return view('trangchu.pages.dichvu',['travel'=>$travel,'hotel'=>$hotel,'travelkm'=>$travelkm,'car'=>$car]);
    }

    //dịch vụ
    public function tintuc(){
        $loaitin = loaitin::all();
        $tin = tin::orderBy('id','DESC')->paginate(5);
        $news = tin::orderBy('id','DESC')->offset(5)->limit(4)->get();
        return view('trangchu.pages.tintuc',['tin'=>$tin,'news'=>$news,'loaitin'=>$loaitin]);
    }

    //liên hệ
    public function lienhe(){
        return view('trangchu.pages.lienhe');
    }

    //chi tiết du lịch
    public function chiTietDuLich($slug, $id){
        $travel = travel::where('khuyenMai',0)->orderBy('id','DESC')->limit(4)->get();
        $chitiet = travel::find($id);
        return view('trangchu.chitiet.travel',['chitiet'=>$chitiet,'travel'=>$travel]);
    }

    //chi tiết hotel
    public function chiTietHotel($slug,$id){
        $hotel = hotel::orderBy('id','DESC')->limit(4)->get();
        $chitiet = hotel::find($id);
        return view('trangchu.chitiet.hotel',['chitiet'=>$chitiet,'hotel'=>$hotel]);
    }

    public function chiTietCar($slug ,$id){
        $car = car::orderBy('id','DESC')->limit(4)->get();
        $chitiet = car::find($id);
        return view('trangchu.chitiet.car',['chitiet'=>$chitiet,'car'=>$car]);
    }

    public function chiTietNews($slug ,$id){
        $loaitin = loaitin::all();
        $chitiet = tin::find($id);
        $news = tin::orderBy('id','DESC')->offset(5)->limit(4)->get();
        return view('trangchu.chitiet.news',['chitiet'=>$chitiet,'news'=>$news,'loaitin'=>$loaitin]);
    }

    public function loaiTin($slug,$id){
        // dd($slug);
        $tin = tin::where('maLoaiTin',$id)->orderBy('id','DESC')->paginate(5);
        $loaitin = loaitin::all();
        $news = tin::orderBy('id','DESC')->offset(5)->limit(4)->get();
        return view('trangchu.pages.loaitin',['tin'=>$tin,'loaitin'=>$loaitin,'news'=>$news]);
    }



    //liên hệ send email
    public function sendEmail(Request $request){
        $input = $request->all();
        Mail::send('mailfb',array('name'=>$input["name"],'email'=>$input["email"],'sdt'=>$input["sdt"],'comment'=>$input["comment"]),function($message){
            $message->to('lehongphongcntt@gmail.com','Visitor')->subject('Khách Hàng Liên Hệ!');
        });
        return redirect()->route('trangchu.pages.lienhe')->with('thongbao','Liên hệ thành công');
    }

     //trang chủ gởi email
     public function goiEmail(Request $request){
        $input = $request->all();
        Mail::send('mailfb',array('name'=>$input["name"],'email'=>$input["email"],'sdt'=>$input["sdt"],'comment'=>$input["comment"]),function($message){
            $message->to('lehongphongcntt@gmail.com','Visitor')->subject('Khách Hàng Liên Hệ!');
        });
        return redirect()->route('trangchu.pages.trangchu')->with('thongbao','Đặt tour thành công');
    }

    //tìm kiếm
    public function timkiem(Request $request){
        $tukhoa = $request->tukhoa;
        $loaitin = loaitin::all();
        $news = tin::orderBy('id','DESC')->offset(5)->limit(4)->get();
        $ketqua = tin::where('tieuDe','like','%'.$tukhoa.'%')->orwhere('description','like','%'.$tukhoa.'%')->paginate(5);
        return view('trangchu.timkiem.news',['ketqua'=>$ketqua,'news'=>$news,'loaitin'=>$loaitin]);
    }


    public function tauSupper(){
        return view('trangchu.pages.taulyson');
    }
}
