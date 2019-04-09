<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Travelix Project">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @yield('meta')
        <!-- Structure data -->
        <script type="application/ld+json">
            {
                "@context": "http://schema.org",
                "@type": "Organization",
                "address": {
                    "@type": "PostalAddress",
                    "addressLocality": "Việt Nam",
                    "addressRegion": "TP Đà Nẵng",
                    "streetAddress": "121 Cù Chính Lan, Thành Phố Đà Nẵng"
                },
                "description": "lysonvn là kênh thông tin online hổ trợ đặt tour , đặt phòng khách sạn cho thuê xe giá rẻ khi đi du lịch lý sơn , đà nẵng , hội an , huế và nhận đặt vé tàu khi đi lý sơn",
                "name": "Lysonvn",
                "telephone": "0944224455"
            }
            </script>
            <script type="application/ld+json">
            {
                "@context": "http://schema.org",
                "@type": "WebSite",
                "name": "Lysonvn",
                "url": "https://lysonvn.com",
                "sameAs": ["https://www.facebook.com/hoangphuc.car.quangngai"]
            }
            </script>


    <link rel="icon" type="image/x-icon" href="travel/images/logo.png">


    <link rel="stylesheet" type="text/css" href="travel/styles/bootstrap4/bootstrap.min.css">
    <link href="travel/plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="travel/plugins/OwlCarousel2-2.2.1/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="travel/plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="travel/plugins/OwlCarousel2-2.2.1/animate.css">
    <link rel="stylesheet" type="text/css" href="travel/styles/main_styles.css">
    <link rel="stylesheet" type="text/css" href="travel/styles/responsive.css">

    <link rel="stylesheet" type="text/css" href="travel/styles/about_styles.css">
    <link rel="stylesheet" type="text/css" href="travel/styles/about_responsive.css">

    <link rel="stylesheet" type="text/css" href="travel/styles/offers_styles.css">
    <link rel="stylesheet" type="text/css" href="travel/styles/offers_responsive.css">

    <link href="travel/plugins/colorbox/colorbox.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="travel/styles/blog_styles.css">
    <link rel="stylesheet" type="text/css" href="travel/styles/blog_responsive.css">


    <link rel="stylesheet" type="text/css" href="travel/styles/contact_styles.css">
    <link rel="stylesheet" type="text/css" href="travel/styles/contact_responsive.css">

    <link rel="stylesheet" type="text/css" href="css/phone.css">
    <style>
            table {
              font-family: arial, sans-serif;
              border-collapse: collapse;
              width: 100%;
            }

            td, th {
              border: 1px solid #dddddd;
              text-align: left;
              padding: 8px;
            }

            tr:nth-child(even) {
              background-color: #dddddd;
            }
            #my_centered_buttons { display: flex; justify-content: center; }
    </style>
</head>

<body>

    <div class="super_container">

        <!-- Header -->

        <header class="header">

            <!-- Top Bar -->

            <div class="top_bar">
                <div class="container">
                    <div class="row">
                        <div class="col d-flex flex-row">
                            <div class="phone">+0944-22-44-55</div>
                            <div class="social">
                                <ul class="social_list">
                                    <li class="social_list_item"><a href="https://www.facebook.com/hoangphuc.car.quangngai"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li class="social_list_item"><a href="https://www.facebook.com/hoangphuc.car.quangngai"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>

                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <!-- Main Navigation -->

            <nav class="main_nav">
                <div class="container">
                    <div class="row">
                        <div class="col main_nav_col d-flex flex-row align-items-center justify-content-start">
                            <div class="logo_container">
                                <div class="logo">
                                    <a href="{{ route('trangchu.pages.trangchu') }}"><img src="travel/images/logo.png" alt="">LÝ SƠN</a>
                                </div>
                            </div>
                            <div class="main_nav_container ml-auto">
                                <ul class="main_nav_list">
                                    <li class="main_nav_item"><a href="{{ route('trangchu.pages.trangchu') }}">Trang Chủ</a></li>
                                    <li class="main_nav_item"><a href="{{ route('trangchu.pages.gioithieu') }}">Giới Thiệu</a></li>
                                    <li class="main_nav_item"><a href="{{ route('trangchu.pages.dichvu') }}">Dịch Vụ</a></li>
                                    <li class="main_nav_item"><a href="{{ route('trangchu.pages.tintuc') }}">Tin Tức</a></li>
                                    <li class="main_nav_item"><a href="{{ route('trangchu.pages.lienhe') }}">Liên Hệ</a></li>
                                </ul>
                            </div>
                            <div class="content_search ml-lg-0 ml-auto">

                                </div>



                            <div class="hamburger">
                                <i class="fa fa-bars trans_200"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>

        </header>

        <div class="menu trans_500">
            <div class="menu_content d-flex flex-column align-items-center justify-content-center text-center">
                <div class="menu_close_container">
                    <div class="menu_close"></div>
                </div>
                <div class="logo menu_logo">
                    <a href="{{ route('trangchu.pages.trangchu') }}"><img src="travel/images/logo.png" alt=""></a>
                </div>
                <ul>
                    <li class="menu_item"><a href="{{ route('trangchu.pages.trangchu') }}">Trang Chủ</a></li>
                    <li class="menu_item"><a href="{{ route('trangchu.pages.gioithieu') }}">Giới Thiệu</a></li>
                    <li class="menu_item"><a href="{{ route('trangchu.pages.dichvu') }}">Dịch Vụ</a></li>
                    <li class="menu_item"><a href="{{ route('trangchu.pages.tintuc') }}">Tin Tức</a></li>
                    <li class="menu_item"><a href="{{ route('trangchu.pages.lienhe') }}">Liên Hệ</a></li>
                </ul>
            </div>
        </div>

        <!-- Home -->

        @yield('noidung')
        <div class='quick-call-button'></div>
            <div class='call-now-button'>
            <div><p class='call-text'></p>
            <a href='tel:0944224455' title='Gọi ngay' >
            <div class='quick-alo-ph-circle active'></div>
            <div class='quick-alo-ph-circle-fill active'></div>
            <div class='quick-alo-ph-img-circle shake'></div>
            </a>
            </div>
            </div>
        <div id="fb-root"></div>
        <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v3.2&appId=453100318560380&autoLogAppEvents=1"></script>
        <!-- Footer -->

        <footer class="footer">
            <div class="container">
                <div class="row">

                    <!-- Footer Column -->
                    <div class="col-lg-3 footer_column">
                        <div class="footer_col">
                            <div class="footer_content footer_about">
                                <div class="logo_container footer_logo">
                                    <div class="logo">
                                        <a href="{{ route('trangchu.pages.trangchu') }}"><img src="travel/images/logo.png" alt="">Lý Sơn</a>
                                    </div>
                                </div>
                                <p class="footer_about_text">Kênh thông tin online, hỗ trợ đặt tour, đặt phòng khách sạn cho thuê xe giá rẻ khi đi du lịch Lý Sơn.</p>
                                <ul class="footer_social_list">
                                    <li class="footer_social_item"><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                    <li class="footer_social_item"><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                                    <li class="footer_social_item"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li class="footer_social_item"><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                    <li class="footer_social_item"><a href="#"><i class="fa fa-behance"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Footer Column -->
                    <div class="col-lg-3 footer_column">
                        <div class="footer_col">
                            <div class="footer_title">Tin Tức</div>
                            <div class="footer_content footer_blog">
                                @foreach ($tintuc as $item)

                                <!-- Footer blog item -->
                                <div class="footer_blog_item clearfix">
                                    <div class="footer_blog_content1">
                                        <div class="footer_blog_title"><a href="{{ route('trangchu.chitiet.news',['slug'=>str_slug($item->tieuDe),'id'=>$item->id]) }}">{{ $item->tieuDe }}</a></div>
                                        <div class="footer_blog_date">{{ date("d-m-Y", strtotime($item->date)) }}</div>
                                    </div>
                                </div>
                                @endforeach


                            </div>
                        </div>
                    </div>

                    <!-- Footer Column -->
                    <div class="col-lg-3 footer_column">
                        <div class="footer_col">
                            <div class="footer_title">tags</div>
                            <div class="footer_content footer_tags">
                                <ul class="tags_list clearfix">
                                    @foreach ($loaitin as $item)

                                    <li class="tag_item"><a href="{{ route('trangchu.pages.loaitin',['slug'=>str_slug($item->tenLoaiTin),'id'=>$item->maLoaiTin]) }}">{{ $item->tenLoaiTin }}</a></li>
                                    @endforeach

                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Footer Column -->
                    <div class="col-lg-3 footer_column">
                        <div class="footer_col">
                            <div class="footer_title">Liên Hệ</div>
                            <div class="footer_content footer_contact">
                                <ul class="contact_info_list">
                                    <li class="contact_info_item d-flex flex-row">
                                        <div>
                                            <div class="contact_info_icon"><img src="travel/images/placeholder.svg" alt=""></div>
                                        </div>
                                        <div class="contact_info_text">Thành Phố : Đà Nẵng</div>
                                    </li>
                                    <li class="contact_info_item d-flex flex-row">
                                        <div>
                                            <div class="contact_info_icon"><img src="travel/images/phone-call.svg" alt=""></div>
                                        </div>
                                        <div class="contact_info_text">0944-22-44-55</div>
                                    </li>
                                    <li class="contact_info_item d-flex flex-row">
                                        <div>
                                            <div class="contact_info_icon"><img src="travel/images/message.svg" alt=""></div>
                                        </div>
                                        <div class="contact_info_text"><a href="mailto:lysonqnvn@gmail.com?Subject=Hello" target="_top">lysonqnvn@gmail.com</a></div>
                                    </li>
                                    <li class="contact_info_item d-flex flex-row">
                                        <div>
                                            <div class="contact_info_icon"><img src="travel/images/planet-earth.svg" alt=""></div>
                                        </div>
                                        <div class="contact_info_text"><a href="https://vinasofts.vn/">vinasofts.vn</a></div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </footer>

        <!-- Copyright -->

        <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 order-lg-1 order-2  ">
                        <div class="copyright_content d-flex flex-row align-items-center">
                            <div>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                Copyright &copy;
                                <script>
                                    document.write(new Date().getFullYear());
                                </script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://vinasofts.vn/" target="_blank">VinaSoft</a>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9 order-lg-2 order-1">
                        <div class="footer_nav_container d-flex flex-row align-items-center justify-content-lg-end">
                            <div class="footer_nav">
                                <ul class="footer_nav_list">
                                    <li class="footer_nav_item"><a href="{{ route('trangchu.pages.trangchu') }}">Trang Chủ</a></li>
                                    <li class="footer_nav_item"><a href="{{ route('trangchu.pages.gioithieu') }}">Giới Thiệu</a></li>
                                    <li class="footer_nav_item"><a href="{{ route('trangchu.pages.dichvu') }}">Dịch Vụ</a></li>
                                    <li class="footer_nav_item"><a href="{{ route('trangchu.pages.tintuc') }}">Tin Tức</a></li>
                                    <li class="footer_nav_item"><a href="{{ route('trangchu.pages.lienhe') }}">Liên Hệ</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <script src="travel/js/jquery-3.2.1.min.js"></script>
    <script src="travel/styles/bootstrap4/popper.js"></script>
    <script src="travel/styles/bootstrap4/bootstrap.min.js"></script>
    <script src="travel/plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
    <script src="travel/plugins/easing/easing.js"></script>
    <script src="travel/js/custom.js"></script>

    <script src="travel/plugins/greensock/TweenMax.min.js"></script>
    <script src="travel/plugins/greensock/TimelineMax.min.js"></script>
    <script src="travel/plugins/scrollmagic/ScrollMagic.min.js"></script>
    <script src="travel/plugins/greensock/animation.gsap.min.js"></script>
    <script src="travel/plugins/greensock/ScrollToPlugin.min.js"></script>
    <script src="travel/plugins/parallax-js-master/parallax.min.js"></script>
    <script src="travel/js/about_custom.js"></script>
    <script src="travel/js/offers_custom.js"></script>

    <script src="travel/plugins/colorbox/jquery.colorbox-min.js"></script>
    <script src="travel/js/blog_custom.js"></script>


    <script src="travel/js/contact_custom.js"></script>
     {{--  Global site tag (gtag.js) - Google Analytics   --}}
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-137791324-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'UA-137791324-1');
    </script>


</body>

</html>
