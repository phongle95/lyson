<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\loaitin;
use App\tin;
use App\travel;
use App\hotel;
use App\car;
use App\Http\Requests\TinRequest;
use App\Http\Requests\TravelRequest;
use App\Http\Requests\TravelSuaRequest;
use App\Http\Requests\TinSuaRequest;
use App\Http\Requests\HotelRequest;
use App\Http\Requests\HotelSuaRequest;
use App\Http\Requests\CarRequest;
use App\Http\Requests\CarSuaRequest;
use Illuminate\Support\Facades\Auth;
use Storage;

class AdminController extends Controller
{
    public function admin(){
        return view('admin.trangchu');
    }

    //danh sách loại tin
    public function getDanhSachLoai(){
        $loaitin = loaitin::all();
        return view('admin.pages.loaitin.danhsach',['loaitin'=>$loaitin]);
    }

    public function getThemLoai(){
        return view('admin.pages.loaitin.them');
    }

    public function postThemLoai(Request $request){
        $loaitin  = new loaitin;
        $loaitin->tenLoaiTin = $request->tenLoaiTin;
        $loaitin->save();
        return redirect(route('admin.pages.loaitin.danhsach'))->with('thongbao','Thêm thành công');
    }

    public function getSuaLoai($id){
        $loaitin = loaitin::find($id);

        return view('admin.pages.loaitin.sua',['loaitin'=>$loaitin]);
    }

    public function postSuaLoai(Request $request,$id){
        $loaitin = loaitin::find($id);
        $loaitin->tenLoaiTin = $request->tenLoaiTin;
        $loaitin->save();
        return redirect(route('admin.pages.loaitin.danhsach'))->with('thongbao','Sửa thành công');
    }

    public function getXoaLoai($id){
        $loaitin = loaitin::find($id);
        $loaitin->delete();
        return redirect(route('admin.pages.loaitin.danhsach'))->with('xoa','Xóa thành công');
    }

    // tin tức
    public function getDanhSachTin(){
        $tin = tin::orderBy('id','DESC')->get();
        return view('admin.pages.tin.danhsach',['tin'=>$tin]);
    }

    public function getThemTin(){
        $loaitin = loaitin::all();
        return view('admin.pages.tin.them',['loaitin'=>$loaitin]);
    }

    public function postThemTin(TinRequest $request){

        $tin = new tin;
        $tin->tieuDe = $request->tieuDe;
        $tin->title = $request->title;
        $tin->description = $request->description;
        $tin->keyword = $request->keyword;
        $tin->date = $request->date;
        $tin->noiDung = $request->noiDung;
        $tin->maLoaiTin = $request->maLoaiTin;

        $file = $request->file('img');


        if ($file !="") {
            $img = $file->store("/", ['disk'=>'upload']);
            $tin->img=$img;
        }
        else{
            $tin->img="defau.png";
        }


        $tin->save();
        return redirect(route('admin.pages.tin.danhsach'))->with('thongbao','Thêm thành công');
    }

    public function getSuaTin($id){
        $loaitin = loaitin::all();
        $tin = tin::find($id);
        return view('admin.pages.tin.sua',['tin'=>$tin,'loaitin'=>$loaitin]);
    }

    public function postSuaTin(TinSuaRequest $request,$id){
        $tin = tin::find($id);
        $tin->tieuDe = $request->tieuDe;
        $tin->title = $request->title;
        $tin->description = $request->description;
        $tin->keyword = $request->keyword;
        $tin->date = $request->date;
        $tin->noiDung = $request->noiDung;
        $tin->maLoaiTin = $request->maLoaiTin;

        $file = $request->file('img');
        if ($file !="") {
            $img = $file->store("/", ['disk'=>'upload']);
            // unlink(public_path()."/upload/".$tin->img);
            $tin->img=$img;
        }
        $tin->save();
        return redirect(route('admin.pages.tin.danhsach'))->with('thongbao','Sửa thành công');
    }

    public function getXoaTin($id){
        $tin = tin::find($id);
        $tin->delete();
        return redirect(route('admin.pages.tin.danhsach'))->with('xoa','Xóa thành công');
    }

    //travel

    public function getDanhSachTravel(){
        $travel = travel::orderBy('id','DESC')->get();
        return view('admin.pages.travel.danhsach',['travel'=>$travel]);
    }

    public function getThemTravel(){
        return view('admin.pages.travel.them');
    }

    public function postThemTravel(TravelRequest $request){
        $travel = new travel;
        $travel->tenTour = $request->tenTour;
        $travel->title = $request->title;
        $travel->tomTat = $request->tomTat;
        $travel->keyword = $request->keyword;
        $travel->gia = $request->gia;
        $travel->date = $request->date;
        $travel->noiDung = $request->noiDung;
        $travel->khuyenMai = $request->khuyenMai;

        $file = $request->file('img');

        if ($file !="") {
            $img = $file->store("/", ['disk'=>'upload']);
            $travel->img=$img;
        }
        else{
            $travel->img="defau.png";
        }
        $travel->save();
        return redirect(route('admin.pages.travel.danhsach'))->with('thongbao','Thêm thành công');
    }

    public function getSuaTravel($id){
        $travel = travel::find($id);
        return view('admin.pages.travel.sua',['travel'=>$travel]);
    }

    public function postSuaTravel(TravelSuaRequest $request,$id){
        $travel = travel::find($id);
        $travel->tenTour = $request->tenTour;
        $travel->title = $request->title;
        $travel->tomTat = $request->tomTat;
        $travel->keyword = $request->keyword;
        $travel->gia = $request->gia;
        $travel->date = $request->date;
        $travel->noiDung = $request->noiDung;
        $travel->khuyenMai = $request->khuyenMai;

        $file = $request->file('img');

        if ($file !="") {
            $img = $file->store("/", ['disk'=>'upload']);
            // unlink(public_path()."/upload/".$travel->img);
            $travel->img=$img;
        }
        $travel->save();
        return redirect(route('admin.pages.travel.danhsach'))->with('thongbao','Sửa thành công');

    }

    public function getXoaTravel($id){
        $travel = travel::find($id);
        $travel->delete();
        return redirect(route('admin.pages.travel.danhsach'))->with('xoa','Xóa thành công');
    }


    //hotel
    public function getDanhSachHotel(){
        $hotel = hotel::orderBy('id','DESC')->get();
        return view('admin.pages.hotel.danhsach',['hotel'=>$hotel]);
    }

    public function getThemHotel(){
       return view('admin.pages.hotel.them');
    }

    public function postThemHotel(HotelRequest $request){
        $hotel = new hotel;
        $hotel->tenHotel = $request->tenHotel;
        $hotel->title = $request->title;
        $hotel->description = $request->description;
        $hotel->keyword = $request->keyword;
        $hotel->gia = $request->gia;
        $hotel->diaChi = $request->diaChi;
        $hotel->noiDung = $request->noiDung;

        $file = $request->file('img');

        if ($file !="") {
            $img = $file->store("/", ['disk'=>'upload']);
            $hotel->img=$img;
        }
        else{
            $hotel->img="defau.png";
        }
        $hotel->save();
        return redirect(route('admin.pages.hotel.danhsach'))->with('thongbao','Thêm thành công');
    }

    public function getSuaHotel($id){
        $hotel = hotel::find($id);
        return view('admin.pages.hotel.sua',['hotel'=>$hotel]);
    }

    public function postSuaHotel(HotelSuaRequest $request,$id){
        $hotel = hotel::find($id);
        $hotel->tenHotel = $request->tenHotel;
        $hotel->title = $request->title;
        $hotel->description = $request->description;
        $hotel->keyword = $request->keyword;
        $hotel->gia = $request->gia;
        $hotel->diaChi = $request->diaChi;
        $hotel->noiDung = $request->noiDung;

        $file = $request->file('img');

        if ($file !="") {
            $img = $file->store("/", ['disk'=>'upload']);
            // unlink(public_path()."/upload/".$hotel->img);
            $hotel->img=$img;
        }

        $hotel->save();
        return redirect(route('admin.pages.hotel.danhsach'))->with('thongbao','Sửa thành công');
    }

    public function getXoaHotel($id){
        $hotel = hotel::find($id);
        $hotel->delete();
        return redirect(route('admin.pages.hotel.danhsach'))->with('xoa','Xóa thành công');
    }

    //car
    public function getDanhSachCar(){
        $car = Car::orderBy('id','DESC')->get();
        return view('admin.pages.car.danhsach',['car'=>$car]);
    }

    public function getThemCar(){
        return view('admin.pages.car.them');
    }

    public function postThemCar(CarRequest $request){
        $car = new car;
        $car->todo = $request->todo;
        $car->title = $request->title;
        $car->description = $request->description;
        $car->keyword = $request->keyword;
        $car->noiDung = $request->noiDung;
        $file = $request->file('img');

        if ($file !="") {
            $img = $file->store("/", ['disk'=>'upload']);
            $car->img=$img;
        }
        else{
            $car->img="defau.png";
        }
        $car->save();
        return redirect(route('admin.pages.car.danhsach'))->with('thongbao','Thêm thành công');
    }

    public function getSuaCar($id){
        $car = car::find($id);
        return view('admin.pages.car.sua',['car'=>$car]);
    }

    public function postSuaCar(CarSuaRequest $request,$id){
        $car = car::find($id);
        $car->todo = $request->todo;
        $car->title = $request->title;
        $car->description = $request->description;
        $car->keyword = $request->keyword;
        $car->noiDung = $request->noiDung;
        $file = $request->file('img');

        if ($file !="") {
            $img = $file->store("/", ['disk'=>'upload']);
            // unlink(public_path()."/upload/".$car->img);
            $car->img=$img;
        }

        $car->save();
        return redirect(route('admin.pages.car.danhsach'))->with('thongbao','Sửa thành công');
    }

    public function getXoaCar($id){
        $car = car::find($id);
        $car->delete();
        return redirect(route('admin.pages.car.danhsach'))->with('xoa','Xóa thành công');
    }

    public function login(){
        return view('admin.login.login');
    }

    public function postLogin(Request $request){
        if (Auth::attempt(['username' =>$request->username, 'password' =>$request->password])) {
            $value = $request->session()->put('username',$request->username);
            return redirect(route('admin.trangchu'));

        }
        else {

            return redirect(route('admin.login.login'))->with('thongbao','Tên tài khoản hặc mật khẩu không chính sác mời nhập lại');
        }
    }

    public function logout(){

        Auth::logout();
        return redirect()->route('admin.login.login');
    }
}
