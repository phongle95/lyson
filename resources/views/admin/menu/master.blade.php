<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>Admin Travel Lý Sơn</title>
      <!-- plugins:css -->
      <link rel="stylesheet" href="/admin/vendors/iconfonts/mdi/css/materialdesignicons.min.css">
      <link rel="stylesheet" href="/admin/vendors/css/vendor.bundle.base.css">
      <!-- endinject -->
      <!-- inject:css -->
      <link rel="stylesheet" href="/admin/css/style.css">
      <!-- endinject -->
      <link rel="icon" type="image/x-icon" href="/travel/images/logo.png">
   </head>
   <body>
      <div class="container-scroller">
         <!-- partial:partials/_navbar.html -->
         <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
            <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
               <div class="logo">
                  <a href="{{ route('trangchu.pages.trangchu') }}"><img src="/travel/images/logo.png" alt="travel ly son"></a>
               </div>
            </div>
            <div class="navbar-menu-wrapper d-flex align-items-stretch">
               <div class="search-field d-none d-md-block">
                  <form class="d-flex align-items-center h-100" action="#">
                     <div class="input-group">
                        <div class="input-group-prepend bg-transparent">
                           <i class="input-group-text border-0 mdi mdi-magnify"></i>
                        </div>
                        <input type="text" class="form-control bg-transparent border-0" placeholder="Search projects">
                     </div>
                  </form>
               </div>
               <ul class="navbar-nav navbar-nav-right">
                  <li class="nav-item d-none d-lg-block full-screen-link">
                     <a class="nav-link">
                     <i class="mdi mdi-fullscreen" id="fullscreen-button"></i>
                     </a>
                  </li>
                  <li class="nav-item dropdown">
                     <a class="nav-link count-indicator dropdown-toggle" id="messageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                     <i class="mdi mdi-email-outline"></i>
                     <span class="count-symbol bg-warning"></span>
                     </a>
                  </li>
                  <li class="nav-item dropdown">
                     <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
                     <i class="mdi mdi-bell-outline"></i>
                     <span class="count-symbol bg-danger"></span>
                     </a>
                  </li>
                  <li class="nav-item nav-logout d-none d-lg-block">
                     <a class="nav-link" href="#">
                     <i class="mdi mdi-power"></i>
                     </a>
                  </li>
                  <li class="nav-item nav-settings d-none d-lg-block">
                     <a class="nav-link" href="#">
                     <i class="mdi mdi-format-line-spacing"></i>
                     </a>
                  </li>
               </ul>
               <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
               <span class="mdi mdi-menu"></span>
               </button>
            </div>
         </nav>
         <!-- partial -->
         <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_sidebar.html -->
            <nav class="sidebar sidebar-offcanvas" id="sidebar">
               <ul class="nav">
                  <li class="nav-item nav-profile">
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="{{ route('admin.pages.loaitin.danhsach') }}">
                     <span class="menu-title">Loại Tin</span>
                     <i class="mdi mdi-food-fork-drink menu-icon"></i>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="{{ route('admin.pages.tin.danhsach') }}">
                     <span class="menu-title">Tin Tức</span>
                     <i class="mdi mdi-newspaper menu-icon"></i>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="{{ route('admin.pages.car.danhsach') }}">
                     <span class="menu-title">Thuê Xe</span>
                     <i class="mdi mdi-car menu-icon"></i>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="{{ route('admin.pages.travel.danhsach') }}">
                     <span class="menu-title">Du Lịch</span>
                     <i class="mdi mdi-white-balance-sunny menu-icon"></i>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="{{ route('admin.pages.hotel.danhsach') }}">
                     <span class="menu-title">Khách Sạn</span>
                     <i class="mdi mdi-hospital-building menu-icon"></i>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="{{ route('admin.login.login') }}">
                     <span class="menu-title">Đăng Xuất</span>
                     <i class="mdi mdi-logout menu-icon"></i>
                     </a>
                  </li>
               </ul>
            </nav>
            <!-- partial -->
            <div class="main-panel">
               <div class="content-wrapper">
                  @yield('noidung')
               </div>
            </div>
            <!-- main-panel ends -->
         </div>
         <!-- page-body-wrapper ends -->
      </div>
      <!-- container-scroller -->
      <!-- plugins:js -->
      <script src="/admin/vendors/js/vendor.bundle.base.js"></script>
      <script src="/admin/vendors/js/vendor.bundle.addons.js"></script>
      <!-- endinject -->
      <!-- Plugin js for this page-->
      <!-- End plugin js for this page-->
      <!-- inject:js -->
      <script src="/admin/js/off-canvas.js"></script>
      <script src="js/misc.js"></script>
      <!-- endinject -->
      <!-- Custom js for this page-->
      <script src="/admin/js/dashboard.js"></script>
      <!-- End custom js for this page-->
      <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
      <script src="{{ asset('ckfinder/ckfinder.js') }}"></script>
      <script>
         CKFinder.setupCKEditor();
         CKEDITOR.replace('editor1');
      </script>
      <script>
         CKFinder.setupCKEditor();
         CKEDITOR.replace('editor2');
      </script>
      <script>
         CKFinder.setupCKEditor();
         CKEDITOR.replace('editor3');
      </script>
      <script type="text/javascript">
         CKEDITOR.replace('editor1', {
             filebrowserBrowseUrl: '{{ asset('
             ckfinder / ckfinder.html ') }}',
             filebrowserImageBrowseUrl: '{{ asset('
             ckfinder / ckfinder.html ? type = Images ') }}',
             filebrowserFlashBrowseUrl : '{{ asset('
             ckfinder / ckfinder.html ? type = Flash ') }}',
             filebrowserUploadUrl : '{{ asset('
             ckfinder / core / connector / php / connector.php ? command = QuickUpload & type = Files ') }}',
             filebrowserImageUploadUrl : '{{ asset('
             ckfinder / core / connector / php / connector.php ? command = QuickUpload & type = Images ') }}',
             filebrowserFlashUploadUrl : '{{ asset('
             ckfinder / core / connector / php / connector.php ? command = QuickUpload & type = Flash ') }}'
         });
         CKEDITOR.replace('editor2', {
             filebrowserBrowseUrl: '{{ asset('
             ckfinder / ckfinder.html ') }}',
             filebrowserImageBrowseUrl: '{{ asset('
             ckfinder / ckfinder.html ? type = Images ') }}',
             filebrowserFlashBrowseUrl : '{{ asset('
             ckfinder / ckfinder.html ? type = Flash ') }}',
             filebrowserUploadUrl : '{{ asset('
             ckfinder / core / connector / php / connector.php ? command = QuickUpload & type = Files ') }}',
             filebrowserImageUploadUrl : '{{ asset('
             ckfinder / core / connector / php / connector.php ? command = QuickUpload & type = Images ') }}',
             filebrowserFlashUploadUrl : '{{ asset('
             ckfinder / core / connector / php / connector.php ? command = QuickUpload & type = Flash ') }}'
         });
         CKEDITOR.replace('editor3', {
             filebrowserBrowseUrl: '{{ asset('
             ckfinder / ckfinder.html ') }}',
             filebrowserImageBrowseUrl: '{{ asset('
             ckfinder / ckfinder.html ? type = Images ') }}',
             filebrowserFlashBrowseUrl : '{{ asset('
             ckfinder / ckfinder.html ? type = Flash ') }}',
             filebrowserUploadUrl : '{{ asset('
             ckfinder / core / connector / php / connector.php ? command = QuickUpload & type = Files ') }}',
             filebrowserImageUploadUrl : '{{ asset('
             ckfinder / core / connector / php / connector.php ? command = QuickUpload & type = Images ') }}',
             filebrowserFlashUploadUrl : '{{ asset('
             ckfinder / core / connector / php / connector.php ? command = QuickUpload & type = Flash ') }}'
         });
      </script>
   </body>
</html>
