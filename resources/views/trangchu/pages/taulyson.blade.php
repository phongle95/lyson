@extends('trangchu.menu.master') @section('noidung')
<!-- Home -->
<div class="home1">
    <div class="home_background1 parallax-window" data-parallax="scroll" data-image-src="travel/images/tau.jpg"></div>
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
                    <h1 style="font-family: Times, serif;color:black; font-size: 200%;font-weight:700;text-align:center">Vé Tàu Đi Lý Sơn Năm : 2019</h1>
                    <br>
                    <img class="custom-img" height="99%" width="99%" src="/travel/images/tausupper.jpg" alt="tàu supper biển đông lý sơn">
                    <br>
                    <br>
                    <h2 style="font-family:Arial, sans-serif;color:black; font-size: 200%;font-weight:600;text-align:left">Tàu Supper Biển Đông</h2>
                    <br>
                    <div class="fb-like" data-href="{{ route('trangchu.pages.taulyson') }}" data-layout="standard" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>
                    <p style="font-family:Arial, sans-serif;font-size: 130%;color:black;font-weight:500;text-align:left">So với vé tàu đi Lý Sơn năm 2018 thì trong năm 2019 có nhiều sự thay đổi nhất định. Vì thế, Lysonvn xin tổng hợp lại các thông tin về vé tàu trong năm nay để du khách có thể dễ dàng nắm bắt thông tin.</p>

                    <table>
                        <tr>
                            <th style="color:black;font-weight:600;font-size: 130%">Tên Tàu</th>
                            <th style="color:black;font-weight:600;font-size: 130%">Số Ghế</th>
                            <th style="color:black;font-weight:600;font-size: 130%">Giá Tiền</th>
                            <th style="color:black;font-weight:600;font-size: 130%">Thời Gian</th>
                        </tr>
                        <tr>
                            <td style="color:black;font-weight:530;font-size: 100%">Chính Nghĩa Express 07</td>
                            <td style="color:black;font-weight:530;font-size: 100%">168</td>
                            <td style="color:black;font-weight:530;font-size: 100%">178</td>
                            <td style="color:black;font-weight:530;font-size: 100%">35 phút</td>

                        </tr>
                        <tr>
                            <td style="color:black;font-weight:530;font-size: 100%">An Vĩnh Express</td>
                            <td style="color:black;font-weight:530;font-size: 100%">152</td>
                            <td style="color:black;font-weight:530;font-size: 100%">178</td>
                            <td style="color:black;font-weight:530;font-size: 100%">35 phút</td>

                        </tr>
                        <tr>
                            <td style="color:black;font-weight:530;font-size: 100%">Super Biển Đông 2</td>
                            <td style="color:black;font-weight:530;font-size: 100%">152</td>
                            <td style="color:black;font-weight:530;font-size: 100%">170</td>
                            <td style="color:black;font-weight:530;font-size: 100%">35 phút</td>

                        </tr>
                        <tr>
                            <td style="color:black;font-weight:530;font-size: 100%">Super Biển Đông</td>
                            <td style="color:black;font-weight:530;font-size: 100%">139</td>
                            <td style="color:black;font-weight:530;font-size: 100%">170</td>
                            <td style="color:black;font-weight:530;font-size: 100%">35 phút</td>

                        </tr>
                        <tr>
                            <td style="color:black;font-weight:530;font-size: 100%">An Vĩnh 04</td>
                            <td style="color:black;font-weight:530;font-size: 100%">78</td>
                            <td style="color:black;font-weight:530;font-size: 100%">168</td>
                            <td style="color:black;font-weight:530;font-size: 100%">35 phút</td>

                        </tr>

                        <tr>
                            <td style="color:black;font-weight:530;font-size: 100%">Chính Nghĩa 03</td>
                            <td style="color:black;font-weight:530;font-size: 100%">78</td>
                            <td style="color:black;font-weight:530;font-size: 100%">168</td>
                            <td style="color:black;font-weight:530;font-size: 100%">35 phút</td>

                        </tr>

                    </table>
                    <br>
                    <h3 style="font-family:Arial, sans-serif;color:black; font-size: 200%;font-weight:600;text-align:left">Mua Vé Từ Cảng Sa Kỳ Đến Đảo Lý Sơn</h3>
                    <p style="font-family:Arial, sans-serif;font-size: 130%;color:black;font-weight:500;text-align:left">Tàu Super Biển Đông là con tàu hiện đại đóng mới hoàn toàn bằng vỏ hợp kim nhôm ý, lắp đặt 02 máy tốc độ cao Yanmar (Nhật Bản) và các thiết bị hiện đại, tàu gồm 139 ghế và 01 phòng VIP, có tốc độ tối đa 30 hải lý/giờ, tương đương 30–35 phút, khoảng cách đảo Lý Sơn với đất liền sẽ được gần hơn, tàu Super Biển Đông phục vụ 3-6 chuyến/ngày (tùy theo các ngày).</p>
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
                    <div class="button book_button trans_200"><a href="tel:0944224455">Gọi hotline 0944224455</a></div>
                    <br>   <br>
                    <p style="font-family:Arial, sans-serif;font-size: 130%;color:black;font-weight:500;text-align:left">Cần mua vé tàu đi Lý Sơn năm 2019 hãy liên hệ ngay cho chúng tôi 0944.22.44.55 để được tư vấn chi tiết nhất.</p>
                    <div class="fb-comments" data-href="{{ route('trangchu.pages.taulyson') }}" data-numposts="5"></div>
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
<title>Giá Vé Tàu Lý Sơn - Du Lịch Lý Sơn</title>
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
<meta name="og:url" content="{{ route('trangchu.pages.taulyson') }}" /> @endsection
