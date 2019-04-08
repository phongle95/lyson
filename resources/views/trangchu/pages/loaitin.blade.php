@extends('trangchu.menu.master') @section('noidung')
<!-- Home -->
<div class="home1">
    <div class="home_background1 parallax-window" data-parallax="scroll" data-image-src="travel/images/blog_background.jpg"></div>
    <div class="home_content1">
    </div>
</div>
<!-- Blog -->
<div class="blog">
    <div class="container">
        <div class="row">
            <!-- Blog Content -->
            <div class="col-lg-8">
                <div class="blog_post_container">
                    <!-- Blog Post -->
                    @foreach ($tin as $item)
                    <div class="blog_post">
                        <div class="blog_post_image">
                            <a href="{{ route('trangchu.chitiet.news',['slug'=>str_slug($item->tieuDe),'id'=>$item->id]) }}"><img class="custom-img" src="/upload/{{ $item->img }}" alt="du lịch lý sơn"></a>
                            <div class="blog_post_date d-flex flex-column align-items-center justify-content-center">
                                <div class="blog_post_day">{{ $item->id }}</div>
                                <div class="blog_post_month">{{ date("d-m-Y", strtotime($item->date)) }}</div>
                            </div>
                        </div>
                        <div class="blog_post_title"><a href="{{ route('trangchu.chitiet.news',['slug'=>str_slug($item->tieuDe),'id'=>$item->id]) }}">{{ $item->tieuDe }}</a></div>
                        <div class="blog_post_text">
                            <p style="text-align:left;font-weight: 600;color:#262d38">{{ $item->description }}.</p>
                        </div>
                        <div class="blog_post_link"><a href="{{ route('trangchu.chitiet.news',['slug'=>str_slug($item->tieuDe),'id'=>$item->id]) }}">Xem Thêm</a></div>
                    </div>
                    @endforeach
                </div>
                <div class="blog_navigation">
                    <ul>
                        <li class="blog_dot">
                            <div></div>
                            {!! $tin->links() !!}
                        </li>
                    </ul>
                </div>
            </div>
            <!-- Blog Sidebar -->
            <div class="col-lg-4 sidebar_col">
                    @include('trangchu.menu.sidebar')
            </div>
        </div>
    </div>
</div>
<br> @endsection @section('meta')
<title>Du Lịch Lý Sơn - Thuê Xe Đà Nẵng - Khách Sạn Lý Sơn</title>
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
<meta name="og:url" content="{{ route('trangchu.pages.tintuc') }}" /> @endsection
