@extends('trangchu.menu.master')
@section('noidung')
<!-- Home -->
<div class="home1">
   <div class="home_background1 parallax-window" data-parallax="scroll" data-image-src="travel/images/lienhe.jpg"></div>
   <div class="home_content1">
   </div>
</div>
<!-- Contact -->
<div class="contact_form_section">
   <div class="container">
      <div class="row">
         <div class="col">
            <!-- Contact Form -->
            <div class="contact_form_container">
               @if (Session::has('thongbao'))
               <div style="color:white;font-weight: 600; text-align:center; font-style:Arial Helvetica; font-size:30px;">
                  Thông Báo :   {{ Session::get('thongbao') }}
               </div>
               @endif
               <h2 class="contact_title text-center">Liên Hệ Ngay</h2>
               <form action="{{ route('front.fb') }}" method="POST" id="contact_form" class="contact_form text-center">
                  <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
                  <input name="name" type="text" id="contact_form_name" class="contact_form_name input_field" placeholder="Name" required="required" data-error="Name is required.">
                  <input name="email" type="text" id="contact_form_email" class="contact_form_email input_field" placeholder="E-mail" required="required" data-error="Email is required.">
                  <input name="sdt" type="number" id="contact_form_subject" class="contact_form_subject input_field" placeholder="Nhập Số Điện Thoại" required="required" data-error="Subject is required.">
                  <textarea id="contact_form_message" class="text_field contact_form_message" name="comment" rows="4" placeholder="Message" required="required" data-error="Please, write us a message."></textarea>
                  <button type="submit" id="form_submit_button" class="form_submit_button button trans_200">Liên Hệ<span></span><span></span><span></span></button>
               </form>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- About -->
<div class="about">
   <div class="container">
      <div class="row">
         <div class="col-lg-5">
            <!-- About - Image -->
            <div class="about_image">
               <img src="travel/images/man.png" alt="">
            </div>
         </div>
         <div class="col-lg-4">
            <!-- About - Content -->
            <div class="about_content">
               <div class="logo_container about_logo">
                  <h1 class="logo"><a href="#"><img src="travel/images/logo.png" alt="logo">Lý Sơn</a></h1>
               </div>
               <h3 class="about_text">Kênh thông tin online, hỗ trợ đặt tour, đặt phòng khách sạn cho thuê xe giá rẻ khi đi du lịch Lý Sơn.</h3>
               <ul class="about_social_list">
                  <li class="about_social_item"><a href="#"><i class="fa fa-pinterest"></i></a></li>
                  <li class="about_social_item"><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                  <li class="about_social_item"><a href="#"><i class="fa fa-twitter"></i></a></li>
                  <li class="about_social_item"><a href="#"><i class="fa fa-dribbble"></i></a></li>
                  <li class="about_social_item"><a href="#"><i class="fa fa-behance"></i></a></li>
               </ul>
            </div>
         </div>
         <div class="col-lg-3">
            <!-- About Info -->
            <div class="about_info">
               <ul class="contact_info_list">
                  <li class="contact_info_item d-flex flex-row">
                     <div>
                        <div class="contact_info_icon"><img src="travel/images/placeholder.svg" alt="icon"></div>
                     </div>
                     <div class="contact_info_text">Thành Phố : Đà Nẵng</div>
                  </li>
                  <li class="contact_info_item d-flex flex-row">
                     <div>
                        <div class="contact_info_icon"><img src="travel/images/phone-call.svg" alt="icon"></div>
                     </div>
                     <div class="contact_info_text">0944-22-44-55</div>
                  </li>
                  <li class="contact_info_item d-flex flex-row">
                     <div>
                        <div class="contact_info_icon"><img src="travel/images/message.svg" alt="icon"></div>
                     </div>
                     <div class="contact_info_text"><a href="mailto:lysonqnvn@gmail.com?Subject=Hello ly son" target="_top">lysonqnvn@gmail.com</a></div>
                  </li>
                  <li class="contact_info_item d-flex flex-row">
                     <div>
                        <div class="contact_info_icon"><img src="travel/images/planet-earth.svg" alt="icon"></div>
                     </div>
                     <div class="contact_info_text"><a href="http://lysonvn.com/">lysonvn.com</a></div>
                  </li>
               </ul>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- Google Map -->
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3834.083795173063!2d108.22486931596313!3d16.06114088761182!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x314219cd0b3b5c7f%3A0x4a4d8fb2a6169930!2zQ-G6p3UgUuG7k25n!5e0!3m2!1svi!2s!4v1553505386528" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
@endsection
@section('meta')
<title>Du Lịch Lý Sơn - Thuê Xe Đà Nẵng - Khách Sạn Lý Sơn</title>
<meta name="keywords" content="du lịch lý sơn ,tour lý sơn,du lịch lý sơn giá rẻ,du lịch quảng ngãi lý sơn,du lịch đà nẵng lý sơn , du lịch hội an lý sơn" />
<meta name="description" content='lysonvn là kênh thông tin online hổ trợ đặt tour , đặt phòng khách sạn cho thuê xe giá rẻ khi đi du lịch lý sơn , đà nẵng , hội an , huế và nhận đặt vé tàu khi đi lý sơn' />
<!--meta facebook-->
<meta property="og:title" content="Du Lịch Lý Sơn - Tour Lý Sơn - Thuê Xe Đà Nẵng" />
<meta property="og:description" content="lysonvn là kênh thông tin online hổ trợ đặt tour , đặt phòng khách sạn cho thuê xe giá rẻ khi đi du lịch lý sơn , đà nẵng , hội an , huế và nhận đặt vé tàu khi đi lý sơn" />
<meta property="og:image" content= "travel/images/dulich.jpg" />
<!--meta google-->
<meta itemprop="name" content="du lịch lý sơn chuyên tổ chức các tour du lịch lý sơn , đà nẵng , hội an , huế và cho thuê xe du lịch" />
<meta itemprop="description" content="lysonvn là kênh thông tin online hổ trợ đặt tour , đặt phòng khách sạn cho thuê xe giá rẻ khi đi du lịch lý sơn , đà nẵng , hội an , huế và nhận đặt vé tàu khi đi lý sơn" />
<meta itemprop="image" content= "travel/images/dulich.jpg" />
<meta name="og:url" content="{{ route('trangchu.pages.lienhe') }}"/>
@endsection
