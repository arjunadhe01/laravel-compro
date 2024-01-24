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
                <h1><a
                        href="{{ route('home.index') }}">{{ CompanyHelper::get() && CompanyHelper::get()['nickname'] ? CompanyHelper::get()['nickname'] : 'Kuroyasha' }}</a>
                </h1>
                <!-- Uncomment below if you prefer to use an image logo -->
                {{-- <a href="{{ route('home.index') }}">
                    <img src="{{ CompanyHelper::get() && CompanyHelper::get()['logos'] ? asset('storage/' . CompanyHelper::get()['logos']) : asset('assets/img/Kuroyasha.png') }}"
                        alt="Kuroyasha" style="width: 46px; height: 46px; object-fit: contain;" class="img-fluid">
                </a> --}}
            </div>

            @include('frontend.layouts.nav')<!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section class="hero-section" id="hero">

        <div class="wave">

            <svg width="100%" height="355px" viewBox="0 0 1920 355" version="1.1" xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink">
                <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <g id="Apple-TV" transform="translate(0.000000, -402.000000)" fill="#FFFFFF">
                        <path
                            d="M0,439.134243 C175.04074,464.89273 327.944386,477.771974 458.710937,477.771974 C654.860765,477.771974 870.645295,442.632362 1205.9828,410.192501 C1429.54114,388.565926 1667.54687,411.092417 1920,477.771974 L1920,757 L1017.15166,757 L0,757 L0,439.134243 Z"
                            id="Path"></path>
                    </g>
                </g>
            </svg>

        </div>

        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 hero-text-image">
                    <div class="row">
                        <div class="col-lg-8 text-center text-lg-start">
                            <h1 data-aos="fade-right">Promote Your App with SoftLand</h1>
                            <p class="mb-5" data-aos="fade-right" data-aos-delay="100">Lorem ipsum dolor sit amet,
                                consectetur
                                adipisicing elit.</p>
                            <p data-aos="fade-right" data-aos-delay="200" data-aos-offset="-500"><a href="#"
                                    class="btn btn-outline-white">Get started</a></p>
                        </div>
                        <div class="col-lg-4 iphone-wrap">
                            <img src="{{ asset('assets/frontend/assets/img/phone_1.png') }}" alt="Image"
                                class="phone-1" data-aos="fade-right">
                            <img src="{{ asset('assets/frontend/assets/img/phone_2.png') }}" alt="Image"
                                class="phone-2" data-aos="fade-right" data-aos-delay="200">
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= Home Section ======= -->
        <section class="section">
            <div class="container">

                <div class="row justify-content-center text-center mb-5">
                    <div class="col-md-5" data-aos="fade-up">
                        <h2 class="section-heading">Save your time to using SoftLand</h2>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4" data-aos="fade-up" data-aos-delay="">
                        <div class="feature-1 text-center">
                            <div class="wrap-icon icon-1">
                                <i class="bi bi-people"></i>
                            </div>
                            <h3 class="mb-3">Explore Your Team</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem, optio.</p>
                        </div>
                    </div>
                    <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                        <div class="feature-1 text-center">
                            <div class="wrap-icon icon-1">
                                <i class="bi bi-brightness-high"></i>
                            </div>
                            <h3 class="mb-3">Digital Whiteboard</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem, optio.</p>
                        </div>
                    </div>
                    <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                        <div class="feature-1 text-center">
                            <div class="wrap-icon icon-1">
                                <i class="bi bi-bar-chart"></i>
                            </div>
                            <h3 class="mb-3">Design To Development</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem, optio.</p>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <section class="section">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-4 me-auto">
                        <h2 class="mb-4">Seamlessly Communicate</h2>
                        <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur at
                            reprehenderit optio,
                            laudantium eius quod, eum maxime molestiae porro omnis. Dolores aspernatur delectus impedit
                            incidunt
                            dolore mollitia esse natus beatae.</p>
                        <p><a href="#" class="btn btn-primary">Download Now</a></p>
                    </div>
                    <div class="col-md-6" data-aos="fade-left">
                        <img src="{{ asset('assets/frontend/assets/img/undraw_svg_2.svg') }}" alt="Image"
                            class="img-fluid">
                    </div>
                </div>
            </div>
        </section>

        <section class="section">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-4 ms-auto order-2">
                        <h2 class="mb-4">Gather Feedback</h2>
                        <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur at
                            reprehenderit optio,
                            laudantium eius quod, eum maxime molestiae porro omnis. Dolores aspernatur delectus impedit
                            incidunt
                            dolore mollitia esse natus beatae.</p>
                        <p><a href="#" class="btn btn-primary">Download Now</a></p>
                    </div>
                    <div class="col-md-6" data-aos="fade-right">
                        <img src="{{ asset('assets/frontend/assets/img/undraw_svg_3.svg') }}" alt="Image"
                            class="img-fluid">
                    </div>
                </div>
            </div>
        </section>

        <!-- ======= Testimonials Section ======= -->
        <section class="section border-top border-bottom">
            <div class="container">
                <div class="row justify-content-center text-center mb-5">
                    <div class="col-md-4">
                        <h2 class="section-heading">Review From Our Users</h2>
                    </div>
                </div>
                <div class="row justify-content-center text-center">
                    <div class="col-md-7">

                        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                            <div class="swiper-wrapper">

                                <div class="swiper-slide">
                                    <div class="review text-center">
                                        <p class="stars">
                                            <span class="bi bi-star-fill"></span>
                                            <span class="bi bi-star-fill"></span>
                                            <span class="bi bi-star-fill"></span>
                                            <span class="bi bi-star-fill"></span>
                                            <span class="bi bi-star-fill muted"></span>
                                        </p>
                                        <h3>Excellent App!</h3>
                                        <blockquote>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius ea
                                                delectus pariatur, numquam
                                                aperiam dolore nam optio dolorem facilis itaque voluptatum recusandae
                                                deleniti minus animi,
                                                provident voluptates consectetur maiores quos.</p>
                                        </blockquote>

                                        <p class="review-user">
                                            <img src="{{ asset('assets/frontend/assets/img/person_1.jpg') }}"
                                                alt="Image" class="img-fluid rounded-circle mb-3">
                                            <span class="d-block">
                                                <span class="text-black">Jean Doe</span>, &mdash; App User
                                            </span>
                                        </p>

                                    </div>
                                </div><!-- End testimonial item -->

                                <div class="swiper-slide">
                                    <div class="review text-center">
                                        <p class="stars">
                                            <span class="bi bi-star-fill"></span>
                                            <span class="bi bi-star-fill"></span>
                                            <span class="bi bi-star-fill"></span>
                                            <span class="bi bi-star-fill"></span>
                                            <span class="bi bi-star-fill muted"></span>
                                        </p>
                                        <h3>This App is easy to use!</h3>
                                        <blockquote>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius ea
                                                delectus pariatur, numquam
                                                aperiam dolore nam optio dolorem facilis itaque voluptatum recusandae
                                                deleniti minus animi,
                                                provident voluptates consectetur maiores quos.</p>
                                        </blockquote>

                                        <p class="review-user">
                                            <img src="{{ asset('assets/frontend/assets/img/person_2.jpg') }}"
                                                alt="Image" class="img-fluid rounded-circle mb-3">
                                            <span class="d-block">
                                                <span class="text-black">Johan Smith</span>, &mdash; App User
                                            </span>
                                        </p>

                                    </div>
                                </div><!-- End testimonial item -->

                                <div class="swiper-slide">
                                    <div class="review text-center">
                                        <p class="stars">
                                            <span class="bi bi-star-fill"></span>
                                            <span class="bi bi-star-fill"></span>
                                            <span class="bi bi-star-fill"></span>
                                            <span class="bi bi-star-fill"></span>
                                            <span class="bi bi-star-fill muted"></span>
                                        </p>
                                        <h3>Awesome functionality!</h3>
                                        <blockquote>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius ea
                                                delectus pariatur, numquam
                                                aperiam dolore nam optio dolorem facilis itaque voluptatum recusandae
                                                deleniti minus animi,
                                                provident voluptates consectetur maiores quos.</p>
                                        </blockquote>

                                        <p class="review-user">
                                            <img src="{{ asset('assets/frontend/assets/img/person_3.jpg') }}"
                                                alt="Image" class="img-fluid rounded-circle mb-3">
                                            <span class="d-block">
                                                <span class="text-black">Jean Thunberg</span>, &mdash; App User
                                            </span>
                                        </p>

                                    </div>
                                </div><!-- End testimonial item -->

                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- End Testimonials Section -->

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
