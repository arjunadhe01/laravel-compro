@extends('frontend.layouts.main')

@push('hero')
    <section class="hero-section inner-page">
        <div class="wave">

            <svg width="1920px" height="265px" viewBox="0 0 1920 265" version="1.1" xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink">
                <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <g id="Apple-TV" transform="translate(0.000000, -402.000000)" fill="#FFFFFF">
                        <path
                            d="M0,439.134243 C175.04074,464.89273 327.944386,477.771974 458.710937,477.771974 C654.860765,477.771974 870.645295,442.632362 1205.9828,410.192501 C1429.54114,388.565926 1667.54687,411.092417 1920,477.771974 L1920,667 L1017.15166,667 L0,667 L0,439.134243 Z"
                            id="Path"></path>
                    </g>
                </g>
            </svg>

        </div>

        <div class="container">
            <div class="row align-items-center">
                <div class="col-12">
                    <div class="row justify-content-center">
                        <div class="col-md-10 text-center hero-text">
                            <h1 data-aos="fade-up" data-aos-delay="">{{ $blog->title }}
                            </h1>
                            <p class="mb-5" data-aos="fade-up" data-aos-delay="100">
                                @if ($blog->created_at->diffInWeeks(\Carbon\Carbon::now()) < 1)
                                    {{ \Carbon\Carbon::parse($blog->created_at)->diffForHumans() }}
                                @else
                                    {{ \Carbon\Carbon::parse($blog->created_at)->isoFormat('D MMMM Y') }}
                                @endif
                                &bullet; By <a href="#" class="text-white">{{ $blog->author->name }}</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
@endpush

@section('content')
    <section class="site-section mb-4">
        <div class="container">
            <div class="row">
                <div class="col-md-8 blog-content">

                    <div class="row mb-5">
                        <div class="col-md-6">
                            <figure><img
                                    src="{{ $blog->image ? asset('storage/' . $blog->image) : asset('assets/frontend/assets/img/img_1.jpg') }}"
                                    alt="{{ $blog->title ?? 'Kuroyasha' }}" class="img-fluid"
                                    style="object-fit: contain; width: 100%">
                                <figcaption>{{ $blog->subtitle }}</figcaption>
                            </figure>
                        </div>
                    </div>

                    @if ($blog->subarticle)
                        <blockquote>
                            <p>{{ $blog->subarticle }}</p>
                        </blockquote>
                    @endif

                    <article>{!! $blog->article !!}</article>

                    <div class="pt-5">
                        <p>Categories:
                            @if ($blog->category->count())
                                @foreach ($blog->category as $item)
                                    <a
                                        href="{{ route('frontend.blog.index', 'category=' . $item->category->category) }}">{{ $item->category->category }}</a>,
                                @endforeach
                            @endif
                            Tags:
                            @if ($blog->tag->count())
                                @foreach ($blog->tag as $item)
                                    <a
                                        href="{{ route('frontend.blog.index', 'tag=' . $item->tag->tag) }}">#{{ $item->tag->tag }}</a>,
                                @endforeach
                            @endif
                        </p>
                    </div>
                </div>
                <div class="col-md-4 sidebar">
                    <div class="sidebar-box">
                        <form class="search-form" action="{{ route('frontend.blog.index') }}">
                            <div class="form-group">
                                <span class="icon fa fa-search"></span>
                                <input type="text" class="form-control" placeholder="Type a keyword and hit enter"
                                    name="search">
                            </div>
                        </form>
                    </div>
                    <div class="sidebar-box">
                        <div class="categories">
                            <h3>Categories</h3>
                            @if ($category->count())
                                @foreach ($category as $item)
                                    <li><a href="{{ route('frontend.blog.index', 'category=' . $item->category) }}">{{ $item->category }}
                                            <span>({{ $item->blog->count() }})</span></a></li>
                                @endforeach
                            @else
                                <li><a href="#">Dog <span>(12)</span></a></li>
                                <li><a href="#">Dog Food <span>(22)</span></a></li>
                                <li><a href="#">Vetenirarian <span>(37)</span></a></li>
                                <li><a href="#">Events<span>(42)</span></a></li>
                            @endif
                        </div>
                    </div>
                    {{-- <div class="sidebar-box">
                        <img src="{{ asset('assets/img/Kuroyasha.png') }}" alt="Image placeholder" class="img-fluid mb-4"
                            style="object-fit: contain; width: 100px; height: 100px;">
                        <h3>About The Author</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus itaque, autem necessitatibus
                            voluptate quod mollitia delectus aut, sunt placeat nam vero culpa sapiente consectetur
                            similique, inventore eos fugit cupiditate numquam!</p>
                        <p><a href="#" class="btn btn-primary btn-sm">Read More</a></p>
                    </div> --}}

                    <div class="sidebar-box">
                        <h3>Paragraph</h3>
                        <p style="text-align: justify;">{{ $blog->paragraph }}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
