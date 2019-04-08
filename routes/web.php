<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// Route::any('home', function () {
//     return view('trangchu.pages.trangchu');
// });

//trang chủ
Route::get('',['uses'=>'TrangChuController@trangchu','as'=>'trangchu.pages.trangchu']);

//giới thiệu
Route::get('gioi-thieu',['uses'=>'TrangChuController@gioithieu','as'=>'trangchu.pages.gioithieu']);

//dịch vụ
Route::get('dich-vu',['uses'=>'TrangChuController@dichvu','as'=>'trangchu.pages.dichvu']);

//tin tức
Route::get('tin-tuc',['uses'=>'TrangChuController@tintuc','as'=>'trangchu.pages.tintuc']);

//liên hệ
Route::get('lien-he',['uses'=>'TrangChuController@lienhe','as'=>'trangchu.pages.lienhe']);

//tim kiếm
Route::get('tim-kiem',['uses'=>'TrangChuController@timkiem','as'=>'trangchu.timkiem.news']);

//tàu lý sơn
Route::get('gia-ve-tau-ly-son',['uses'=>'TrangChuController@tauSupper','as'=>'trangchu.pages.taulyson']);


Route::get('du-lich-{slug}_{id}.html', [
    'uses' => 'TrangChuController@chiTietDuLich',
    'as' => 'trangchu.chitiet.travel'
]);


Route::get('khach-san-{slug}_{id}.html', [
    'uses' => 'TrangChuController@chiTietHotel',
    'as' => 'trangchu.chitiet.hotel'
]);


Route::get('thue-xe-tu-{slug}_{id}.html', [
    'uses' => 'TrangChuController@chiTietCar',
    'as' => 'trangchu.chitiet.car'
]);


Route::get('tin-tuc-{slug}_{id}.html', [
    'uses' => 'TrangChuController@chiTietNews',
    'as' => 'trangchu.chitiet.news'
]);


Route::get('tin-tuc-{slug}_{id}', [
    'uses' => 'TrangChuController@loaiTin',
    'as' => 'trangchu.pages.loaitin'
]);




Route::get('sitemap.xml', [
    'uses' => 'SiteMapController@sitemap',
    'as' => 'trangchu.menu.sitemap'
]);



Route::post('send', [
    'uses' => 'TrangChuController@sendEmail',
    'as' => 'front.fb'
]);


Route::post('email', [
    'uses' => 'TrangChuController@goiEmail',
    'as' => 'front.email'
]);








                                // Admin
// ==========================================================================


Route::get('login', [
    'uses' => 'AdminController@login',
    'as' => 'admin.login.login'
]);

Route::post('login', [
    'uses' => 'AdminController@postLogin',
    'as' => 'admin.login.login'
]);

Route::get('logout', [
    'uses' => 'AdminController@logout',
    'as' => 'admin.logout'
]);

Route::group(['prefix' => 'chi-tiet'], function () {



});



Route::prefix('travel-admin')->middleware('auth')->group(function() {

    //admin
    Route::get('', [
        'uses' => 'AdminController@admin',
        'as' => 'admin.trangchu'
    ]);

    //danh sách loại tin
    Route::group(['prefix' => 'loai-tin'], function() {

        Route::get('danh-sach', [
            'uses' => 'AdminController@getDanhSachLoai',
            'as' => 'admin.pages.loaitin.danhsach'
        ]);

        Route::get('them', [
            'uses' => 'AdminController@getThemLoai',
            'as' => 'admin.pages.loaitin.them'
        ]);

        Route::post('them', [
            'uses' => 'AdminController@postThemLoai',
            'as' => 'admin.pages.loaitin.them'
        ]);


        Route::get('sua/{id}', [
            'uses' => 'AdminController@getSuaLoai',
            'as' => 'admin.pages.loaitin.sua'
        ]);

        Route::post('sua/{id}', [
            'uses' => 'AdminController@postSuaLoai',
            'as' => 'admin.pages.loaitin.sua'
        ]);

        Route::get('xoa/{id}', [
            'uses' => 'AdminController@getXoaLoai',
            'as' => 'admin.pages.loaitin.xoa'
        ]);
    });

    Route::group(['prefix' => 'tin-tuc'], function () {
        Route::get('danh-sach', [
            'uses' => 'AdminController@getDanhSachTin',
            'as' => 'admin.pages.tin.danhsach'
        ]);

        Route::get('them', [
            'uses' => 'AdminController@getThemTin',
            'as' => 'admin.pages.tin.them'
        ]);

        Route::post('them', [
            'uses' => 'AdminController@postThemTin',
            'as' => 'admin.pages.tin.them'
        ]);

        Route::get('sua/{id}', [
            'uses' => 'AdminController@getSuaTin',
            'as' => 'admin.pages.tin.sua'
        ]);

        Route::post('sua/{id}', [
            'uses' => 'AdminController@postSuaTin',
            'as' => 'admin.pages.tin.sua'
        ]);

        Route::get('xoa/{id}', [
            'uses' => 'AdminController@getXoaTin',
            'as' => 'admin.pages.tin.xoa'
        ]);
    });

    Route::group(['prefix' => 'du-lich'], function () {
        Route::get('danh-sach', [
            'uses' => 'AdminController@getDanhSachTravel',
            'as' => 'admin.pages.travel.danhsach'
        ]);

        Route::get('them', [
            'uses' => 'AdminController@getThemTravel',
            'as' => 'admin.pages.travel.them'
        ]);

        Route::post('them', [
            'uses' => 'AdminController@postThemTravel',
            'as' => 'admin.pages.travel.them'
        ]);

        Route::get('sua/{id}', [
            'uses' => 'AdminController@getSuaTravel',
            'as' => 'admin.pages.travel.sua'
        ]);

        Route::post('sua/{id}', [
            'uses' => 'AdminController@postSuaTravel',
            'as' => 'admin.pages.travel.sua'
        ]);

        Route::get('xoa/{id}', [
            'uses' => 'AdminController@getXoaTravel',
            'as' => 'admin.pages.travel.xoa'
        ]);
    });

    Route::group(['prefix' => 'hotel'], function () {
        Route::get('danh-sach', [
            'uses' => 'AdminController@getDanhSachHotel',
            'as' => 'admin.pages.hotel.danhsach'
        ]);

        Route::get('them', [
            'uses' => 'AdminController@getThemHotel',
            'as' => 'admin.pages.hotel.them'
        ]);

        Route::post('them', [
            'uses' => 'AdminController@postThemHotel',
            'as' => 'admin.pages.hotel.them'
        ]);

        Route::get('sua/{id}', [
            'uses' => 'AdminController@getSuaHotel',
            'as' => 'admin.pages.hotel.sua'
        ]);

        Route::post('sua/{id}', [
            'uses' => 'AdminController@postSuaHotel',
            'as' => 'admin.pages.hotel.sua'
        ]);

        Route::get('xoa/{id}', [
            'uses' => 'AdminController@getXoaHotel',
            'as' => 'admin.pages.hotel.xoa'
        ]);

    });

    Route::group(['prefix' => 'thue-xe'], function () {
        Route::get('danh-sach', [
            'uses' => 'AdminController@getDanhSachCar',
            'as' => 'admin.pages.car.danhsach'
        ]);

        Route::get('them', [
            'uses' => 'AdminController@getThemCar',
            'as' => 'admin.pages.car.them'
        ]);

        Route::post('them', [
            'uses' => 'AdminController@postThemCar',
            'as' => 'admin.pages.car.them'
        ]);

        Route::get('sua/{id}', [
            'uses' => 'AdminController@getSuaCar',
            'as' => 'admin.pages.car.sua'
        ]);

        Route::post('sua/{id}', [
            'uses' => 'AdminController@postSuaCar',
            'as' => 'admin.pages.car.sua'
        ]);

        Route::get('xoa/{id}', [
            'uses' => 'AdminController@getXoaCar',
            'as' => 'admin.pages.car.xoa'
        ]);
    });


});








// Route::get('database', function() {
//     Schema::create('table', function ($table) {
//         $table->increments('id');
//         $table->string('loaiXe',100);
//         $table->string('soCho',100);
//         $table->int('giaTien');

//     });
//     echo "da tao xong";
// });
