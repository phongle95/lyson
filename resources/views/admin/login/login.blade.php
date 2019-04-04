<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">
    <link rel="icon" type="image/x-icon" href="/travel/images/logo.png">

    <!-- Title Page-->
    <title>Login Travel Lý Sơn</title>

    <!-- Fontfaces CSS-->
    <link href="/assetsadmin1/css/font-face.css" rel="stylesheet" media="all">
    <link href="/assetsadmin1/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="/assetsadmin1/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="/assetsadmin1/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="/assetsadmin1/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- /assetsadmin1/vendor CSS-->
    <link href="/assetsadmin1/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="/assetsadmin1/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="/assetsadmin1/vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="/assetsadmin1/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="/assetsadmin1/vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="/assetsadmin1/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="/assetsadmin1/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="/assetsadmin1/css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <div class="page-content--bge5">
            <div class="container">
                <div class="login-wrap">
                    <div class="login-content">
                        <div class="login-logo">
                            <a href="{{ route('trangchu.pages.trangchu') }}">
                                <img src="/travel/images/logo.png"  alt="salem piano">
                            </a>
                            @if (session('thongbao'))
                            <div style="color:red;font-weight: 400">
                            {{ session('thongbao') }}
                            </div>

                   @endif
                        </div>
                        <div class="login-form">
                            <form action="" method="post">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
                                <div class="form-group">
                                    <span class="badge badge-warning">Nhập Username</span><br>
                                    <input class="au-input au-input--full" type="text" name="username" placeholder="username">
                                </div>
                                <div class="form-group">
                                        <span class="badge badge-warning">Nhập Password</span><br>
                                    <input class="au-input au-input--full" type="password" name="password" placeholder="Password">
                                </div>

                                <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">Đăng Nhập</button>

                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="/assetsadmin1/vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="/assetsadmin1/vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="/assetsadmin1/vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- /assetsadmin1/vendor JS       -->
    <script src="/assetsadmin1/vendor/slick/slick.min.js">
    </script>
    <script src="/assetsadmin1/vendor/wow/wow.min.js"></script>
    <script src="/assetsadmin1/vendor/animsition/animsition.min.js"></script>
    <script src="/assetsadmin1/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="/assetsadmin1/vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="/assetsadmin1/vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="/assetsadmin1/vendor/circle-progress/circle-progress.min.js"></script>
    <script src="/assetsadmin1/vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="/assetsadmin1/vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="/assetsadmin1/vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="/assetsadmin1/js/main.js"></script>

</body>

</html>
<!-- end document-->
