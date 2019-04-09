@extends('trangchu.menu.master') @section('noidung')
<!-- Home -->
<div class="home1">
    <div class="home_background1 parallax-window" data-parallax="scroll" data-image-src="travel/images/maybay.jpg"></div>
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
                    <h1 style="font-family: Times, serif;color:black; font-size: 200%;font-weight:700;text-align:center">Đặt Vé Máy Bay Online</h1>
                    <br>
                    <img class="custom-img" height="99%" width="99%" src="/travel/images/maybayvn.jpg" alt="tàu supper biển đông lý sơn">
                    <br>
                    <br>
                    <h2 style="font-family:Arial, sans-serif;color:black; font-size: 200%;font-weight:600;text-align:left">Máy Bay Việt Nam Airline</h2>
                    <br>
                    <div class="fb-like" data-href="{{ route('trangchu.pages.maybay') }}" data-layout="standard" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>
                    <p style="font-family:Arial, sans-serif;font-size: 130%;color:black;font-weight:500;text-align:left">Lysonvn cảm ơn các bạn lựa chọn dịch
                        vụ của chúng tôi, chúng tôi sẽ mang đến cho các bạn những trải nghiệm tốt nhất chuyến du lịch, Lysonvn hỗ trợ các bạn đặt vé máy bay du lịch giá rẻ,
                         đặt vé máy bay du lịch theo đoàn. Các điểm đến được lựa chọn nhiều nhất như TP Hồ Chí Minh, Hà Nội, Lý Sơn, ĐÀ Nẵng, Huế, Hội An, Quy Nhơn, Nha Trang hãy liên hệ
                         ngay với Lysonvn để có được những vé máy bay để đi du lịch nào.
                            Liên hệ hotline 0944224455 hoặc hỗ trợ trực tuyến để được giảm ngay 10% nhé</p>

                            <div id="my_centered_buttons" class="button book_button trans_200"><a href="tel:0944224455">Gọi hotline 0944224455</a></div>
                            <br>  <br>
                    <h3 style="font-family:Arial, sans-serif;color:black; font-size: 200%;font-weight:600;text-align:left">Dưới đây là bảng giá tàu đi lý sơn</h3>

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
                    <div class="fb-comments" data-href="{{ route('trangchu.pages.maybay') }}" data-numposts="5"></div>
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
<title>Đặt Vé Máy Bay Online - Du Lịch Lý Sơn</title>
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
<meta name="og:url" content="{{ route('trangchu.pages.maybay') }}" /> @endsection
