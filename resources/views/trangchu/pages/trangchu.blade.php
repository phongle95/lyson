@extends('trangchu.menu.master') @section('noidung')
<div class="home">
    <!-- Home Slider -->
    <div class="home_slider_container">
        <div class="owl-carousel owl-theme home_slider">
            <!-- Slider Item -->
            <div class="owl-item home_slider_item">
                <!-- Image by https://unsplash.com/@anikindimitry -->
                <div class="home_slider_background" style="background-image:url(travel/images/lyson1.jpg);background-image:alt('lý sơn')"></div>
                <div class="home_slider_content text-center">
                    <div class="home_slider_content_inner" data-animation-in="flipInX" data-animation-out="animate-out fadeOut">
                        <h2 style="font-family: Times, serif;color:white; font-size: 500%;font-weight:700">Du Lịch</h2>
                        <div class="button home_slider_button">
                            <div class="button_bcg"></div>
                            <a href="{{ route('trangchu.pages.tintuc') }}">Chi Tiết<span></span><span></span><span></span></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Slider Item -->
            <div class="owl-item home_slider_item">
                <div class="home_slider_background" style="background-image:url(travel/images/chualyson.jpg)"></div>
                <div class="home_slider_content text-center">
                    <div class="home_slider_content_inner" data-animation-in="flipInX" data-animation-out="animate-out fadeOut">
                        <h2 style="font-family: Times, serif;color:white; font-size: 500%;font-weight:700">Lý Sơn</h2>
                        <div class="button home_slider_button">
                            <div class="button_bcg"></div>
                            <a href="{{ route('trangchu.pages.tintuc') }}">Chi Tiết<span></span><span></span><span></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Home Slider Nav - Prev -->
        <div class="home_slider_nav home_slider_prev">
            <svg version="1.1" id="Layer_2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="28px" height="33px" viewBox="0 0 28 33" enable-background="new 0 0 28 33" xml:space="preserve">
                <defs>
                    <linearGradient id='home_grad_prev'>
                        <stop offset='0%' stop-color='#fa9e1b' />
                        <stop offset='100%' stop-color='#8d4fff' />
                    </linearGradient>
                </defs>
                <path class="nav_path" fill="#F3F6F9" d="M19,0H9C4.029,0,0,4.029,0,9v15c0,4.971,4.029,9,9,9h20c4.97,0,9-4.029,9-9V9C28,4.029,23.97,0,19,0z
               M26,23.091C26,27.459,22.545,31,18.285,31H9.714C5.454,31,2,27.459,2,23.091V9.909C2,5.541,5.454,2,9.714,2h8.571
               C22.545,2,26,5.541,26,9.909V23.091z" />
                <polygon class="nav_arrow" fill="#F3F6F9" points="15.044,22.222 16.377,20.888 12.374,16.885 16.377,12.882 15.044,11.55 9.708,16.885 11.04,18.219
               11.042,18.219 " />
            </svg>
        </div>
        <!-- Home Slider Nav - Next -->
        <div class="home_slider_nav home_slider_next">
            <svg version="1.1" id="Layer_3" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="28px" height="33px" viewBox="0 0 28 33" enable-background="new 0 0 28 33" xml:space="preserve">
                <defs>
                    <linearGradient id='home_grad_next'>
                        <stop offset='0%' stop-color='#fa9e1b' />
                        <stop offset='100%' stop-color='#8d4fff' />
                    </linearGradient>
                </defs>
                <path class="nav_path" fill="#F3F6F9" d="M19,0H9C4.029,0,0,4.029,0,9v15c0,4.971,4.029,9,9,9h20c4.97,0,9-4.029,9-9V9C28,4.029,23.97,0,19,0z
               M26,23.091C26,27.459,22.545,31,18.285,31H9.714C5.454,31,2,27.459,2,23.091V9.909C2,5.541,5.454,2,9.714,2h8.571
               C22.545,2,26,5.541,26,9.909V23.091z" />
                <polygon class="nav_arrow" fill="#F3F6F9" points="13.044,11.551 11.71,12.885 15.714,16.888 11.71,20.891 13.044,22.224 18.379,16.888 17.048,15.554
               17.046,15.554 " />
            </svg>
        </div>
        <!-- Home Slider Dots -->
        <div class="home_slider_dots">
            <ul id="home_slider_custom_dots" class="home_slider_custom_dots">
                <li class="home_slider_custom_dot active">
                    <div></div>
                    01.
                </li>
                <li class="home_slider_custom_dot">
                    <div></div>
                    02.
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- Search -->
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
<!-- Testimonials -->
<div class="testimonials">
    <div class="test_border"></div>
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <h2 class="section_title">Các cách di chuyển để đi đến Cảng Sa Kỳ - Đảo Lý Sơn</h2>
                <p style="font-family:Arial, sans-serif;color:black;font-weight:540;text-align:center;font-size:121%">Để đi đến đảo Lý Sơn, các bạn cần phải đi tàu, hoặc máy bay đến Quảng Ngãi, Sân bay Chu Lai, Sân bay Đà Nẵng, sau đó các bạn di chuyển đến cảng Sa Kỳ, tỉnh Quảng Ngãi bằng xe ô tô hoặc xe Khách. Sau đó sẽ đặt vé tàu siêu tốc đi từ cảng Sa Kỳ đến Đảo Lý Sơn</p>
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
                            <path class="nav_path" fill="#F3F6F9" d="M19,0H9C4.029,0,0,4.029,0,9v15c0,4.971,4.029,9,9,9h20c4.97,0,9-4.029,9-9V9C28,4.029,23.97,0,19,0z
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
                            <path class="nav_path" fill="#F3F6F9" d="M19,0H9C4.029,0,0,4.029,0,9v15c0,4.971,4.029,9,9,9h20c4.97,0,9-4.029,9-9V9C28,4.029,23.97,0,19,0z
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
<!-- CTA -->
<div class="cta">
    <!-- Image by https://unsplash.com/@thanni -->
    <div class="cta_background" style="background-image:url(travel/images/cta.jpg)"></div>
    <div class="container">
        <div class="row">
            <div class="col">
                <!-- CTA Slider -->
                <div class="cta_slider_container">
                    <div class="owl-carousel owl-theme cta_slider">
                        @foreach ($news as $item)
                        <!-- CTA Slider Item -->
                        <div class="owl-item cta_item text-center">
                            <div class="cta_title">Các thông tin bổ ích trước và trong khi đi du lịch đảo Lý Sơn</div>
                            <p style="font-family:Arial, sans-serif;color:black;font-weight:540;text-align:center;font-size:121%">Du lịch Lý Sơn chưa bao giờ là khó khăn</p>
                            {{-- <img style="height:350px" src="/upload/{{ $item->img }}" alt="ly son"> --}}
                            <div class="rating_r rating_r_4">
                                <i></i>
                                <i></i>
                                <i></i>
                                <i></i>
                                <i></i>
                            </div>
                            <div class="offers_link"><a href="{{ route('trangchu.chitiet.news',['slug'=>str_slug($item->tieuDe),'id'=>$item->id]) }}">{{ $item->tieuDe }}</a></div>
                            {{--
                            <p class="cta_text">{{ $item->tieuDe }}</p> --}}
                            <div class="button cta_button">
                                <div class="button_bcg"></div>
                                <a href="{{ route('trangchu.chitiet.news',['slug'=>str_slug($item->tieuDe),'id'=>$item->id]) }}">Xem Ngay<span></span><span></span><span></span></a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <!-- CTA Slider Nav - Prev -->
                    <div class="cta_slider_nav cta_slider_prev">
                        <svg version="1.1" id="Layer_4" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="28px" height="33px" viewBox="0 0 28 33" enable-background="new 0 0 28 33" xml:space="preserve">
                            <defs>
                                <linearGradient id='cta_grad_prev'>
                                    <stop offset='0%' stop-color='#fa9e1b' />
                                    <stop offset='100%' stop-color='#8d4fff' />
                                </linearGradient>
                            </defs>
                            <path class="nav_path" fill="#F3F6F9" d="M19,0H9C4.029,0,0,4.029,0,9v15c0,4.971,4.029,9,9,9h20c4.97,0,9-4.029,9-9V9C28,4.029,23.97,0,19,0z
                        M26,23.091C26,27.459,22.545,31,18.285,31H9.714C5.454,31,2,27.459,2,23.091V9.909C2,5.541,5.454,2,9.714,2h8.571
                        C22.545,2,26,5.541,26,9.909V23.091z" />
                            <polygon class="nav_arrow" fill="#F3F6F9" points="15.044,22.222 16.377,20.888 12.374,16.885 16.377,12.882 15.044,11.55 9.708,16.885 11.04,18.219
                        11.042,18.219 " />
                        </svg>
                    </div>
                    <!-- CTA Slider Nav - Next -->
                    <div class="cta_slider_nav cta_slider_next">
                        <svg version="1.1" id="Layer_5" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="28px" height="33px" viewBox="0 0 28 33" enable-background="new 0 0 28 33" xml:space="preserve">
                            <defs>
                                <linearGradient id='cta_grad_next'>
                                    <stop offset='0%' stop-color='#fa9e1b' />
                                    <stop offset='100%' stop-color='#8d4fff' />
                                </linearGradient>
                            </defs>
                            <path class="nav_path" fill="#F3F6F9" d="M19,0H9C4.029,0,0,4.029,0,9v15c0,4.971,4.029,9,9,9h20c4.97,0,9-4.029,9-9V9C28,4.029,23.97,0,19,0z
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
<!-- Testimonials -->
<div class="testimonials">
    <div class="test_border"></div>
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <h2 class="section_title">Khách Hàng Nói về chúng tôi</h2>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <!-- Testimonials Slider -->
                <div class="test_slider_container">
                    <div class="owl-carousel owl-theme test_slider">
                        <!-- Testimonial Item -->
                        <div class="owl-item">
                            <div class="test_item">
                                <div class="test_image"><img src="travel/images/gs.jpg" alt="du lịch lý sơn"></div>
                                <div class="test_icon"><img src="travel/images/backpack.png" alt="du lịch lý sơn"></div>
                                <div class="test_content_container1">
                                    <div class="test_content1">
                                        <div class="test_quote_title">" Nguyễn Như Ý "</div>
                                        <p class="test_quote_text">Một người bạn đã giới thiệu tôi đi xe của Lysonvn.Tôi đã có một chuyến đi vui vẻ với anh tài xế thân thiện , giá tiền phù hợp với tôi</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Testimonial Item -->
                        <div class="owl-item">
                            <div class="test_item">
                                <div class="test_image"><img src="travel/images/trung.jpg" alt="https://unsplash.com/@tschax"></div>
                                <div class="test_icon"><img src="travel/images/island_t.png" alt="du lịch lý sơn"></div>
                                <div class="test_content_container1">
                                    <div class="test_content1">
                                        <div class="test_quote_title">" Nguyễn Thành Trung "</div>
                                        <p class="test_quote_text">Lysonvn là một dịch vụ tốt xe ở đây sạch xẽ. Tài xế nhiệt tình,chu đáo và đúng giờ chuyến du lịch của chúng tôi thật tuyệt vời.Cảm ơn Lysonvn !</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Testimonial Item -->
                        <div class="owl-item">
                            <div class="test_item">
                                <div class="test_image"><img src="travel/images/test_3.jpg" alt="https://unsplash.com/@seefromthesky"></div>
                                <div class="test_icon"><img src="travel/images/kayak.png" alt="du lịch lý sơn"></div>
                                <div class="test_content_container1">
                                    <div class="test_content1">
                                        <div class="test_quote_title">" Annabella "</div>
                                        <p class="test_quote_text">Thanks Lysonvn, I am a foreign visitor but I am very friendly. I will recommend my friends to uses Lysonvn service.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
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
                            <path class="nav_path" fill="#F3F6F9" d="M19,0H9C4.029,0,0,4.029,0,9v15c0,4.971,4.029,9,9,9h20c4.97,0,9-4.029,9-9V9C28,4.029,23.97,0,19,0z
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
                            <path class="nav_path" fill="#F3F6F9" d="M19,0H9C4.029,0,0,4.029,0,9v15c0,4.971,4.029,9,9,9h20c4.97,0,9-4.029,9-9V9C28,4.029,23.97,0,19,0z
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
{{--
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
</div> --}}
<br>
<div class="contact">
    <div class="contact_background" style="background-image:url(travel/images/contact.jpg)"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="contact_image">
                </div>
            </div>
            <div class="col-lg-7">
                <div class="contact_form_container">
                    @if (Session::has('thongbao'))
                    <div style="color:white;font-weight: 600; text-align:center; font-style:Arial Helvetica; font-size:30px;">
                        Thông Báo : {{ Session::get('thongbao') }}
                    </div>
                    @endif
                    <div class="contact_title">Đặt Tour Ngay</div>
                    <form action="{{ route('front.email') }}" method="POST" id="contact_form" class="contact_form">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                        <input name="name" type="text" id="contact_form_name" class="contact_form_name input_field" placeholder="Tên" required="required" data-error="Name is required.">
                        <input name="email" type="text" id="contact_form_email" class="contact_form_email input_field" placeholder="E-mail" required="required" data-error="Email is required.">
                        <input name="sdt" type="number" id="contact_form_subject" class="contact_form_subject input_field" placeholder="Số Điện Thoại" required="required" data-error="Subject is required.">
                        <textarea id="contact_form_message" class="text_field contact_form_message" name="comment" rows="4" placeholder="Message" required="required" data-error="Please, write us a message."></textarea>
                        <button type="submit" id="form_submit_button" class="form_submit_button button">Đặt Tour<span></span><span></span><span></span></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection @section('meta')
<title>Du Lịch Lý Sơn - Thuê Xe Đà Nẵng - Khách Sạn Lý Sơn</title>
<meta name="keywords" content="du lịch lý sơn ,tour lý sơn,du lịch lý sơn giá rẻ,du lịch quảng ngãi lý sơn,du lịch đà nẵng lý sơn , du lịch hội an lý sơn" />
<meta name="description" content='lysonvn là kênh thông tin online hổ trợ đặt tour , đặt phòng khách sạn cho thuê xe giá rẻ khi đi du lịch lý sơn , đà nẵng , hội an , huế và nhận đặt vé tàu khi đi lý sơn ' />
<!--meta facebook-->
<meta property="og:title" content="Du Lịch Lý Sơn - Tour Lý Sơn - Thuê Xe Đà Nẵng" />
<meta property="og:description" content="lysonvn là kênh thông tin online hổ trợ đặt tour , đặt phòng khách sạn cho thuê xe giá rẻ khi đi du lịch lý sơn , đà nẵng , hội an , huế và nhận đặt vé tàu khi đi lý sơn" />
<meta property="og:image" content="travel/images/dulich.jpg" />
<!--meta google-->
<meta itemprop="name" content="du lịch lý sơn chuyên tổ chức các tour du lịch lý sơn , đà nẵng , hội an , huế và cho thuê xe du lịch" />
<meta itemprop="description" content="lysonvn là kênh thông tin online hổ trợ đặt tour , đặt phòng khách sạn cho thuê xe giá rẻ khi đi du lịch lý sơn , đà nẵng , hội an , huế và nhận đặt vé tàu khi đi lý sơn" />
<meta itemprop="image" content="travel/images/dulich.jpg" />
<meta name="og:url" content="{{ route('trangchu.pages.trangchu') }}" /> @endsection
