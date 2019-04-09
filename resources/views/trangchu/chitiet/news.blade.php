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
                    <div class="blog_post">
                        <div class="blog_post_image">
                            <img class="custom-img" src="/upload/{{ $chitiet->img }}" alt="du lịch lý sơn">
                            <div class="blog_post_date d-flex flex-column align-items-center justify-content-center">
                                <div class="blog_post_day">{{ $chitiet->id }}</div>
                                <div class="blog_post_month">{{ date("d-m-Y", strtotime($chitiet->date)) }}</div>
                            </div>
                        </div>
                        <br>
                        <div class="fb-like" data-href="{{ route('trangchu.chitiet.news',['slug'=>str_slug($chitiet->tieuDe),'id'=>$chitiet->id]) }}" data-layout="standard" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>
                    </div>
                    <div class="blog_post">
                        <h1 style="font-family: Times, serif;color:black; font-size: 200%;font-weight:700;">{{ $chitiet->tieuDe }}</h1>
                        <div class="rating_r rating_r_4 hotel_rating">
                            <i></i>
                            <i></i>
                            <i></i>
                            <i></i>
                            <i></i>
                        </div>
                        <div>
                            {!! $chitiet->noiDung !!}
                        </div>
                        <br>
                        <div class="fb-comments" data-href="{{ route('trangchu.chitiet.news',['slug'=>str_slug($chitiet->tieuDe),'id'=>$chitiet->id]) }}" data-numposts="5"></div>
                    </div>
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
<title>{{ $chitiet->title }}</title>
<meta name="keywords" content="{{ $chitiet->keyword }}" />
<meta name="description" content="{{ $chitiet->description }}" />
<!--meta facebook-->
<meta property="og:title" content="{{ $chitiet->title }}" />
<meta property="og:description" content="{{ $chitiet->description }}" />
<meta property="og:image" content="/{{ $chitiet->img }}" />
<!--meta google-->
<meta itemprop="name" content="{{ $chitiet->title }}" />
<meta itemprop="description" content="{{ $chitiet->description }}" />
<meta itemprop="image" content="/{{ $chitiet->img }}" />
<meta name="og:url" content="{{ route('trangchu.chitiet.news',['slug'=>str_slug($chitiet->tieuDe),'id'=>$chitiet->id]) }}" /> @endsection
