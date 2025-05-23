@extends('frontend.layouts.main')

@push('hero')

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
                            <h1 data-aos="fade-right">
                                {{ $hero && $hero->title ? $hero->title : 'Selamat Datang di Company Profile' }}
                                
                            </h1>
                            <p class="mb-5" data-aos="fade-right" data-aos-delay="100">
                                {{ $hero && $hero->subtitle ? $hero->subtitle : 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.' }}
                            </p>
                            <p data-aos="fade-right" data-aos-delay="200" data-aos-offset="-500"><a href="#main"
                                    class="btn btn-outline-white">Get started</a></p>
                        </div>
                        <div class="col-lg-4 text-center text-lg-end">
                            <img src="{{ $hero && $hero->image ? asset('storage/' . $hero->image) : asset('assets/img/Kuroyasha.png') }}"
                                alt="Hero Image" data-aos="fade-left"
                                style="object-fit: contain; width: 300px; height: 100px;">
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
@endpush

@section('content')
    @include('frontend.home.about')

    @include('frontend.home.highlight')
@endsection
