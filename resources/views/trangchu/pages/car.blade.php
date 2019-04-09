@extends('trangchu.menu.master') @section('noidung')
<!-- Home -->
<div class="home1">
    <div class="home_background1 parallax-window" data-parallax="scroll" data-image-src="travel/images/dichvu.jpg"></div>
    <div class="home_content1">
    </div>
</div>
<!-- Offers -->
<div class="search">
    <!-- Search Contents -->
    <div class="container fill_height">
        <div class="row fill_height">
            <div class="col fill_height">
                <!-- Search Tabs -->
                <div class="search_tabs_container">
                    <div class="search_tabs d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start">
                        <div class="search_tab active d-flex flex-row align-items-center justify-content-lg-center justify-content-start">
                            <a style="color:#2d2c2c" href="{{ route('trangchu.pages.hotel') }}"><img src="travel/images/suitcase.png" alt="">KHÁCH SẠN</a>
                        </div>
                        <div class="search_tab d-flex flex-row align-items-center justify-content-lg-center justify-content-start">
                            <a style="color:#2d2c2c" href="{{ route('trangchu.pages.car') }}"><img src="travel/images/bus.png" alt="">XE DU LỊCH</a>
                        </div>
                        <div class="search_tab d-flex flex-row align-items-center justify-content-lg-center justify-content-start">
                            <a style="color:#2d2c2c" href="{{ route('trangchu.pages.maybay') }}"><img src="travel/images/departure.png" alt="">MÁY BAY</a>
                        </div>
                        {{--
                        <div class="search_tab d-flex flex-row align-items-center justify-content-lg-center justify-content-start"><img src="travel/images/island.png" alt="">trips</div>
                        --}}
                        <div class="search_tab d-flex flex-row align-items-center justify-content-lg-center justify-content-start">
                            <a style="color:#2d2c2c" href="{{ route('trangchu.pages.taulyson') }}"><img src="travel/images/cruise.png" alt="">TÀU CAO TỐC</a>
                        </div>
                        {{--
                        <div class="search_tab d-flex flex-row align-items-center justify-content-lg-center justify-content-start"><img src="travel/images/diving.png" alt="">activities</div>
                        --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Testimonials -->
<div class="testimonials">
    <div class="test_border"></div>
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <h2 class="section_title">Các Dịch Vụ Thuê Xe Của Chúng Tôi</h2>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <!-- Testimonials Slider -->
                <div class="test_slider_container">
                    <div class="owl-carousel owl-theme test_slider">
                        @foreach ($car as $item)

                        <!-- Testimonial Item -->
                        <div class="owl-item">
                            <div class="test_item">
                                <a href="{{ route('trangchu.chitiet.car',['slug'=>str_slug($item->todo),'id'=>$item->id]) }}">
                                    <div class="test_image"><img src="/upload/{{ $item->img }}" alt="thue xe o to"></div>
                                </a>
                                <a href="{{ route('trangchu.chitiet.car',['slug'=>str_slug($item->todo),'id'=>$item->id]) }}">
                                    <div class="test_icon"><img src="https://img.icons8.com/dotty/48/000000/convertible.png" alt="icon"></div>
                                </a>
                                <div class="test_content_container">
                                    <div class="test_content">
                                        <div class="test_quote_title">" {{ $item->todo }} "</div>
                                        <p class="test_quote_text">{{ $item->description }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <!-- Testimonials Slider Nav - Prev -->
                    <div class="test_slider_nav test_slider_prev">
                        <svg version="1.1" id="Layer_6" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="28px" height="33px" viewBox="0 0 28 33" enable-background="new 0 0 28 33" xml:space="preserve">
                            <defs>
                                <linearGradient id='test_grad_prev'>
                                    <stop offset='0%' stop-color='#fa9e1b' />
                                    <stop offset='100%' stop-color='#8d4fff' />
                                </linearGradient>
                            </defs>
                            <path class="nav_path" fill="#F3F6F9" d="M19,0H9C4.029,0,0,4.029,0,9v15c0,4.971,4.029,9,9,9h10c4.97,0,9-4.029,9-9V9C28,4.029,23.97,0,19,0z
                        M26,23.091C26,27.459,22.545,31,18.285,31H9.714C5.454,31,2,27.459,2,23.091V9.909C2,5.541,5.454,2,9.714,2h8.571
                        C22.545,2,26,5.541,26,9.909V23.091z" />
                            <polygon class="nav_arrow" fill="#F3F6F9" points="15.044,22.222 16.377,20.888 12.374,16.885 16.377,12.882 15.044,11.55 9.708,16.885 11.04,18.219
                        11.042,18.219 " />
                        </svg>
                    </div>
                    <!-- Testimonials Slider Nav - Next -->
                    <div class="test_slider_nav test_slider_next">
                        <svg version="1.1" id="Layer_7" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="28px" height="33px" viewBox="0 0 28 33" enable-background="new 0 0 28 33" xml:space="preserve">
                            <defs>
                                <linearGradient id='test_grad_next'>
                                    <stop offset='0%' stop-color='#fa9e1b' />
                                    <stop offset='100%' stop-color='#8d4fff' />
                                </linearGradient>
                            </defs>
                            <path class="nav_path" fill="#F3F6F9" d="M19,0H9C4.029,0,0,4.029,0,9v15c0,4.971,4.029,9,9,9h10c4.97,0,9-4.029,9-9V9C28,4.029,23.97,0,19,0z
                        M26,23.091C26,27.459,22.545,31,18.285,31H9.714C5.454,31,2,27.459,2,23.091V9.909C2,5.541,5.454,2,9.714,2h8.571
                        C22.545,2,26,5.541,26,9.909V23.091z" />
                            <polygon class="nav_arrow" fill="#F3F6F9" points="13.044,11.551 11.71,12.885 15.714,16.888 11.71,20.891 13.044,22.224 18.379,16.888 17.048,15.554
                        17.046,15.554 " />
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Intro -->
<div class="intro">
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="intro_title text-center">Du Lịch Lý Sơn</h1>
                <p style="font-family:Arial, sans-serif;color:black;font-weight:540;text-align:center;font-size:121%">Lý Sơn là một huyện đảo của tỉnh Quảng Ngãi, nằm cách Cảng Sa Kỳ khoảng 30km. Vì thế để di chuyển đến đảo Lý Sơn, các bạn cần phải di chuyển ra cảng Sa Kỳ rồi sau đó bắt tàu Super biển đông để đi ra đảo Lý Sơn</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="intro_text text-center">
                    <div class="cta_title">Đây là những tour khuyến mãi của chúng tôi</div>
                    <br>

                </div>
            </div>
        </div>
        <div class="row intro_items">
            <!-- Intro Item -->
            @foreach ($travelkm as $item)
            <div class="col-lg-4 intro_col">
                <div class="intro_item">
                    <div class="intro_item_overlay"></div>
                    <!-- Image by https://unsplash.com/@dnevozhai -->
                    <div class="intro_item_background" style="background-image:url(/upload/{{ $item->img }})"></div>
                    <div class="intro_item_content d-flex flex-column align-items-center justify-content-center">
                        <div class="intro_date">ngày {{ date("d-m-Y", strtotime($item->date)) }}</div>
                        <div class="button intro_button">
                            <div class="button_bcg"></div>
                            <a href="{{ route('trangchu.chitiet.travel',['slug'=>str_slug($item->tenTour),'id'=>$item->id]) }}">Chi Tiết<span></span><span></span><span></span></a>
                        </div>
                        <div class="intro_center text-center">
                            <h3 style="font-family: Times, serif;color:white; font-size: 300%;font-weight:700">{{ $item->tenTour }}</h3>
                            <div class="intro_price">Giá : {{ number_format($item->gia) }}vnđ</div>
                            <div class="rating rating_4">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

<!-- Offers -->
<div class="offers">
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <h2 class="section_title">Các tour du lịch của chúng tôi</h2>
                <p style="font-family:Arial, sans-serif;color:black;font-weight:540;text-align:center;font-size:121%">Nếu quý khách đặt tour online của Lysonvn quý khách sẽ được giảm giá và có cơ hội nhận được nhiều phần quà hấp dẫn</p>
            </div>
        </div>
        <div class="row offers_items">
            @foreach ($travel as $item)
            <!-- Offers Item -->
            <div class="col-lg-6 offers_col">
                <div class="offers_item">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="offers_image_container">
                                <!-- Image by https://unsplash.com/@kensuarez -->
                                <a href="{{ route('trangchu.chitiet.travel',['slug'=>str_slug($item->tenTour),'id'=>$item->id]) }}"><div class="offers_image_background" style="background-image:url(/upload/{{ $item->img }})"></div></a>
                                <div class="offer_name"><a href="{{ route('trangchu.chitiet.travel',['slug'=>str_slug($item->tenTour),'id'=>$item->id]) }}">{{ $item->tenTour }}</a></div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="offers_content">
                                <div class="offers_price">{{ number_format($item->gia) }}vnđ</div>
                                <div class="rating_r rating_r_4 offers_rating">
                                    <i></i>
                                    <i></i>
                                    <i></i>
                                    <i></i>
                                    <i></i>
                                </div>
                                <p class="offers_text">{{ $item->tomTat }}.</p>
                                <div class="offers_icons">
                                    <ul class="offers_icons_list">
                                        <li class="offers_icons_item"><img src="travel/images/post.png" alt=""></li>
                                        <li class="offers_icons_item"><img src="travel/images/compass.png" alt=""></li>
                                        <li class="offers_icons_item"><img src="travel/images/bicycle.png" alt=""></li>
                                        <li class="offers_icons_item"><img src="travel/images/sailboat.png" alt=""></li>
                                    </ul>
                                </div>
                                <div class="offers_link"><a href="{{ route('trangchu.chitiet.travel',['slug'=>str_slug($item->tenTour),'id'=>$item->id]) }}">chi tiết</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<div class="trending">
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <h2 class="section_title">Khách Sạn Tốt Nhất</h2>
            </div>
        </div>
        <div class="row trending_container">
            @foreach ($hotel as $item)
            <!-- Trending Item -->
            <div class="col-lg-3 col-sm-6">
                <div class="trending_item clearfix">
                    <div class="trending_image"><img style="height:100px;" src="/upload/{{ $item->img }}" alt="khách sạn lý sơn"></div>
                    <div class="trending_content">
                        <div class="trending_title"><a href="{{ route('trangchu.chitiet.hotel',['slug'=>str_slug($item->tenHotel),'id'=>$item->id]) }}">{{ $item->tenHotel }}</a></div>
                        <div class="trending_price">From {{ number_format($item->gia) }}.vnđ</div>
                        <div class="trending_location">{{ $item->diaChi }}</div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<br>
<br>
<br> @endsection @section('meta')
<title>Thuê Xe Quảng Ngãi - Thuê Xe Đà Nẵng - Du Lịch Lý Sơn</title>
<meta name="keywords" content="du lịch lý sơn ,tour lý sơn,du lịch lý sơn giá rẻ,du lịch quảng ngãi lý sơn,du lịch đà nẵng lý sơn , du lịch hội an lý sơn" />
<meta name="description" content='lysonvn là kênh thông tin online hổ trợ đặt tour , đặt phòng khách sạn cho thuê xe giá rẻ khi đi du lịch lý sơn , đà nẵng , hội an , huế và nhận đặt vé tàu khi đi lý sơn' />
<!--meta facebook-->
<meta property="og:title" content="Du Lịch Lý Sơn - Tour Lý Sơn - Thuê Xe Đà Nẵng" />
<meta property="og:description" content="lysonvn là kênh thông tin online hổ trợ đặt tour , đặt phòng khách sạn cho thuê xe giá rẻ khi đi du lịch lý sơn , đà nẵng , hội an , huế và nhận đặt vé tàu khi đi lý sơn" />
<meta property="og:image" content="travel/images/dulich.jpg" />
<!--meta google-->
<meta itemprop="name" content="du lịch lý sơn chuyên tổ chức các tour du lịch lý sơn , đà nẵng , hội an , huế và cho thuê xe du lịch" />
<meta itemprop="description" content="lysonvn là kênh thông tin online hổ trợ đặt tour , đặt phòng khách sạn cho thuê xe giá rẻ khi đi du lịch lý sơn , đà nẵng , hội an , huế và nhận đặt vé tàu khi đi lý sơn" />
<meta itemprop="image" content="travel/images/dulich.jpg" />
<meta name="og:url" content="{{ route('trangchu.pages.car') }}" /> @endsection
