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
                        <h1 style="font-family: Times, serif;color:black; font-size: 200%;font-weight:700;">Điểm Đi Đến : {{ $chitiet->todo }}</h1>
                        <div class="rating_r rating_r_4 hotel_rating">
                            <i></i>
                            <i></i>
                            <i></i>
                            <i></i>
                            <i></i>
                        </div>
                        <br>
                        <div class="fb-like" data-href="{{ route('trangchu.chitiet.car',['slug'=>str_slug($chitiet->todo),'id'=>$chitiet->id]) }}" data-layout="standard" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>
                        <div>
                            {!! $chitiet->noiDung !!}
                            <h4 style="font-family:Arial, sans-serif;color:orange; font-size: 150%;font-weight:600;text-align:center">Bảng giờ tàu đi từ cảng Sa Kỳ đến Đảo Lý Sơn</h4>
                            <table>
                                <tr>
                                    <th style="color:black;font-weight:600;font-size: 130%">Tên Tàu</th>
                                    <th style="color:black;font-weight:600;font-size: 130%">Giờ Đi - Giờ Đến</th>
                                    <th style="color:black;font-weight:600;font-size: 130%">Giá Tiền</th>
                                    <th style="color:black;font-weight:600;font-size: 130%">Thời Gian</th>
                                </tr>
                                <tr>
                                    <td style="color:black;font-weight:530;font-size: 100%">Super Biển Đông</td>
                                    <td style="color:black;font-weight:530;font-size: 100%">7h30 - 8h05</td>
                                    <td style="color:black;font-weight:530;font-size: 100%">170k</td>
                                    <td style="color:black;font-weight:530;font-size: 100%">35 phút</td>

                                </tr>
                                <tr>
                                    <td style="color:black;font-weight:530;font-size: 100%">Super Biển Đông 2</td>
                                    <td style="color:black;font-weight:530;font-size: 100%">9h00 - 9h35</td>
                                    <td style="color:black;font-weight:530;font-size: 100%">170k</td>
                                    <td style="color:black;font-weight:530;font-size: 100%">35 phút</td>

                                </tr>

                                <tr>
                                    <td style="color:black;font-weight:530;font-size: 100%">Super Biển Đông</td>
                                    <td style="color:black;font-weight:530;font-size: 100%">10h20 - 10h55</td>
                                    <td style="color:black;font-weight:530;font-size: 100%">170k</td>
                                    <td style="color:black;font-weight:530;font-size: 100%">35 phút</td>

                                </tr>
                                <tr>
                                    <td style="color:black;font-weight:530;font-size: 100%">Super Biển Đông 2</td>
                                    <td style="color:black;font-weight:530;font-size: 100%">13h00 - 13h35</td>
                                    <td style="color:black;font-weight:530;font-size: 100%">170k</td>
                                    <td style="color:black;font-weight:530;font-size: 100%">35 phút</td>

                                </tr>
                                <tr>
                                    <td style="color:black;font-weight:530;font-size: 100%">Super Biển Đông</td>
                                    <td style="color:black;font-weight:530;font-size: 100%">15h00 - 15h35 </td>
                                    <td style="color:black;font-weight:530;font-size: 100%">170k</td>
                                    <td style="color:black;font-weight:530;font-size: 100%">35 phút</td>

                                </tr>

                            </table>
                            <br>
                            <h4 style="font-family:Arial, sans-serif;color:orange; font-size: 150%;font-weight:600;text-align:center">Bảng giờ tàu đi từ Đảo Lý Sơn về Cảng Sa Kỳ</h4>
                            <br>
                            <table>
                                <tr>
                                    <th style="color:black;font-weight:600;font-size: 130%">Tên Tàu</th>
                                    <th style="color:black;font-weight:600;font-size: 130%">Giờ Đi - Giờ Đến</th>
                                    <th style="color:black;font-weight:600;font-size: 130%">Giá Tiền</th>
                                    <th style="color:black;font-weight:600;font-size: 130%">Thời Gian</th>
                                </tr>
                                <tr>
                                    <td style="color:black;font-weight:530;font-size: 100%">Super Biển Đông 2</td>
                                    <td style="color:black;font-weight:530;font-size: 100%">8h00 - 8h30</td>
                                    <td style="color:black;font-weight:530;font-size: 100%">170k</td>
                                    <td style="color:black;font-weight:530;font-size: 100%">35 phút</td>

                                </tr>
                                <tr>
                                    <td style="color:black;font-weight:530;font-size: 100%">Super Biển Đông</td>
                                    <td style="color:black;font-weight:530;font-size: 100%">9h00 - 9h35</td>
                                    <td style="color:black;font-weight:530;font-size: 100%">170k</td>
                                    <td style="color:black;font-weight:530;font-size: 100%">35 phút</td>

                                </tr>

                                <tr>
                                    <td style="color:black;font-weight:530;font-size: 100%">Super Biển Đông 2</td>
                                    <td style="color:black;font-weight:530;font-size: 100%">10h20 - 10h55</td>
                                    <td style="color:black;font-weight:530;font-size: 100%">170k</td>
                                    <td style="color:black;font-weight:530;font-size: 100%">35 phút</td>

                                </tr>
                                <tr>
                                    <td style="color:black;font-weight:530;font-size: 100%">Super Biển Đông</td>
                                    <td style="color:black;font-weight:530;font-size: 100%">13h00 - 13h35</td>
                                    <td style="color:black;font-weight:530;font-size: 100%">170k</td>
                                    <td style="color:black;font-weight:530;font-size: 100%">35 phút</td>

                                </tr>
                                <tr>
                                    <td style="color:black;font-weight:530;font-size: 100%">Super Biển Đông 2</td>
                                    <td style="color:black;font-weight:530;font-size: 100%">15h00 - 15h35 </td>
                                    <td style="color:black;font-weight:530;font-size: 100%">170k</td>
                                    <td style="color:black;font-weight:530;font-size: 100%">35 phút</td>

                                </tr>

                            </table>
                            <div id="my_centered_buttons" class="button book_button trans_200"><a href="tel:0944224455">Gọi hotline 0944224455</a></div>
                            <br>   <br>
                            <p style="font-family:Arial, sans-serif;font-size: 130%;color:black;font-weight:500;text-align:left">Cần mua vé tàu đi Lý Sơn năm 2019 hãy liên hệ ngay cho chúng tôi 0944.22.44.55 để được tư vấn chi tiết nhất.</p>
                        </div>
                        <br>
                        <div class="fb-comments" data-href="{{ route('trangchu.chitiet.car',['slug'=>str_slug($chitiet->todo),'id'=>$chitiet->id]) }}" data-numposts="5"></div>
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
<meta name="og:url" content="{{ route('trangchu.chitiet.car',['slug'=>str_slug($chitiet->todo),'id'=>$chitiet->id]) }}" /> @endsection
