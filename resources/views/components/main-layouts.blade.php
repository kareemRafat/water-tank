<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Water Tank | خــزان مــيــاه</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Cairo:wght@200..500&display=swap');

    * {
        font-family: "Cairo", sans-serif !important;
    }

  </style>
</head>

<body {{ $attributes }}>

  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

      <a href="/" class="logo d-flex align-items-center">
        <h1 class="sitename">Water Tank | خــزان مــيــاه</h1>
      </a>

      <nav id="navmenu" class="navmenu" dir="rtl">
        <ul>
          <li><a href="{{ route('home') }}" class="{{ request()->is('/') ? 'active' : '' }}">الرئيسية</a></li>


          <li><a href="{{ route('about') }}" class="{{ request()->is('about') ? 'active' : '' }}">عن الموقع</a></li>
          <li><a href="{{ route('services') }}" class="{{ request()->is('services') ? 'active' : '' }}">الخدمات</a></li>
          <li><a href="{{ route('contact') }}" class="{{ request()->is('contact') ? 'active' : '' }}">اتصل بنا</a></li>
            @guest
                <li style="margin-right: 12px"><a href="{{ route('register') }}" class="{{ request()->is('register') ? 'active' : '' }}">انضم الينا </a></li>
            @endguest
            @auth
                <li><a href="{{ route('user_service') }}" class="{{ request()->is('my-service') ? 'active' : '' }}">تفاصيل خدماتي</a></li>
            @endauth
            @auth
                <li style="margin-right: 15px;"><a style="color:#feb900" href="{{ route('auth.logout') }}" >تسجيل الخروج </a></li>
            @endauth
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

    </div>
  </header>

  {{ $slot }}

  <footer id="footer" class="footer" dir="rtl">

    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-4 col-md-6 footer-about">
          <a href="index.html" class="logo d-flex align-items-center">
            <span class="sitename">Water Tank | خــزان مــيــاه</span>
          </a>
          <div class="footer-contact pt-3">
            <p class="fs-5">حــفــر الــبــاطــن</p>
            <p class="fs-5">المملكة العربية السعودية</p>
            <p class="mt-3 fs-5"><strong>Phone:</strong> <span>0966265987223</span></p>
            <p class="fs-5"><strong>Email:</strong> <span>info@watertank.com</span></p>
          </div>
          <div class="social-links d-flex mt-4 ">
            <a href=""><i class="bi bi-twitter-x"></i></a>
            <a href=""><i class="bi bi-facebook"></i></a>
            <a href=""><i class="bi bi-instagram"></i></a>
            <a href=""><i class="bi bi-linkedin"></i></a>
          </div>
        </div>


        <div class="col-lg-8 col-md-3 footer-links fs-5">
          <h4 class="fs-5">تم العمل على هذا المشروع تحت اشراف </h4>
          <h4 class="fs-5">الدكتور حسين الهاشم بالكلية التقنية بحفر الباطن </h4>
          <ul>
            <li>الطلاب : </li>
            <li><a href="#">سلطان عبدالله الحربي</a></li>
            <li><a href="#">عبدالله احمد الشمري</a></li>
            <li><a href="#">فايز صالح الحمياني</a></li>
            <li><a href="#">عبدالمحسن سعد الشمري</a></li>
          </ul>
        </div>

      </div>
    </div>

    <div class="container copyright text-center mt-4">
      <p>© <span>Copyright</span> <strong class="px-1 sitename">Water Tank | خــزان مــيــاه</strong> <span>All Rights Reserved</span></p>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you've purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
      </div>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src=" {{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src=" {{ asset('assets/vendor/aos/aos.js')}}"></script>
  <script src=" {{ asset('assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src=" {{ asset('assets/vendor/imagesloaded/imagesloaded.pkgd.min.js')}}"></script>
  <script src=" {{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src=" {{ asset('assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src=" {{ asset('assets/vendor/purecounter/purecounter_vanilla.js')}}"></script>

  <!-- Main JS File -->
  <script src="{{ asset('assets/js/main.js')}}"></script>

</body>

</html>
