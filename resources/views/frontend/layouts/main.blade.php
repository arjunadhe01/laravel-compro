<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>{{ $title }} |
        {{ CompanyHelper::get() && CompanyHelper::get()['nickname'] ? CompanyHelper::get()['nickname'] : 'Kuroyasha' }}
    </title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link
        href="{{ CompanyHelper::get() && CompanyHelper::get()['ico'] ? asset('storage/' . CompanyHelper::get()['ico']) : asset('assets/ico/Kuroyasha.ico') }}"
        rel="icon">
    <link
        href="{{ CompanyHelper::get() && CompanyHelper::get()['logos'] ? asset('storage/' . CompanyHelper::get()['logos']) : asset('assets/img/Kuroyasha.png') }}"
        rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/frontend/assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/frontend/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/frontend/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/frontend/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/frontend/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('assets/frontend/assets/css/style.css') }}" rel="stylesheet">
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center">
        <div class="container d-flex justify-content-between align-items-center">

            <div class="logo">
               <!-- <h1><a
                        href="{{ route('frontend.home.index') }}">{{ CompanyHelper::get() && CompanyHelper::get()['nickname'] ? CompanyHelper::get()['nickname'] : 'Kuroyasha' }}</a>
                </h1> -->
                <!-- Uncomment below if you prefer to use an image logo -->
                 <a href="{{ route('frontend.home.index') }}">
                    <img src="{{ CompanyHelper::get() && CompanyHelper::get()['logos'] ? asset('storage/' . CompanyHelper::get()['logos']) : asset('assets/img/Kuroyasha.png') }}"
                        alt="Kuroyasha" style="width: 80px; height: 80px; object-fit: contain;" class="img-fluid">
                </a> 
            </div>

            @include('frontend.layouts.nav')<!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    @stack('hero')
    <!-- End Hero -->

    <main id="main">

        <!-- ======= Home Section ======= -->
        @yield('content')

        <!-- ======= Testimonials Section ======= -->
        @include('frontend.layouts.review')
        <!-- End Testimonials Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    @include('frontend.layouts.footer')

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('assets/frontend/assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('assets/frontend/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/assets/vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('assets/frontend/assets/js/main.js') }}"></script>

</body>

</html>
