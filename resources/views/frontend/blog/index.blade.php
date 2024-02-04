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
                        <div class="col-md-7 text-center hero-text">
                            <h1 data-aos="fade-up" data-aos-delay="">
                                {{ CompanyHelper::get() && CompanyHelper::get()['nickname'] ? CompanyHelper::get()['nickname'] : 'Kuroyasha' }}
                                Blog</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
@endpush

@section('content')
    <section class="section">
        <div class="container">
            <div class="row mb-5">
                @if ($blog->count())
                    @foreach ($blog as $item)
                        <div class="col-md-4">
                            <div class="post-entry">
                                <a href="{{ route('frontend.blog.show', $item->id) }}" class="d-block mb-4">
                                    <img src="{{ $item->image ? asset('storage/' . $item->image) : asset('assets/frontend/assets/img/img_1.jpg') }}"
                                        alt="Image" class="img-fluid"
                                        style="object-fit: contain; width: 500px; height: 500px;">
                                </a>
                                <div class="post-text">
                                    <span class="post-meta">
                                        @if ($item->created_at->diffInWeeks(\Carbon\Carbon::now()) < 1)
                                            {{ \Carbon\Carbon::parse($item->created_at)->diffForHumans() }}
                                        @else
                                            {{ \Carbon\Carbon::parse($item->created_at)->isoFormat('D MMMM Y') }}
                                        @endif
                                        &bullet; By <a href="#">{{ $item->author->name }}</a>
                                    </span>
                                    <h3><a href="{{ route('frontend.blog.show', $item->id) }}">{{ $item->title }}</a></h3>
                                    <p>
                                        @if ($item->subarticle)
                                            {{ strlen($item->subarticle) >= 100 ? substr($item->subarticle, 0, 100) . '..' : $item->subarticle }}
                                        @else
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem, optio.
                                        @endif
                                    </p>
                                    <p><a href="{{ route('frontend.blog.show', $item->id) }}" class="readmore">Read more</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <div class="col-md-4">
                        <div class="post-entry">
                            <a href="blog-single.html" class="d-block mb-4">
                                <img src="assets/img/img_1.jpg" alt="Image" class="img-fluid">
                            </a>
                            <div class="post-text">
                                <span class="post-meta">December 13, 2019 &bullet; By <a href="#">Admin</a></span>
                                <h3><a href="#">Chrome now alerts you when someone steals your password</a></h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem, optio.</p>
                                <p><a href="#" class="readmore">Read more</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="post-entry">
                            <a href="blog-single.html" class="d-block mb-4">
                                <img src="assets/img/img_2.jpg" alt="Image" class="img-fluid">
                            </a>
                            <div class="post-text">
                                <span class="post-meta">December 13, 2019 &bullet; By <a href="#">Admin</a></span>
                                <h3><a href="#">Chrome now alerts you when someone steals your password</a></h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem, optio.</p>
                                <p><a href="#" class="readmore">Read more</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="post-entry">
                            <a href="blog-single.html" class="d-block mb-4">
                                <img src="assets/img/img_3.jpg" alt="Image" class="img-fluid">
                            </a>
                            <div class="post-text">
                                <span class="post-meta">December 13, 2019 &bullet; By <a href="#">Admin</a></span>
                                <h3><a href="#">Chrome now alerts you when someone steals your password</a></h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem, optio.</p>
                                <p><a href="#" class="readmore">Read more</a></p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="post-entry">
                            <a href="blog-single.html" class="d-block mb-4">
                                <img src="assets/img/img_4.jpg" alt="Image" class="img-fluid">
                            </a>
                            <div class="post-text">
                                <span class="post-meta">December 13, 2019 &bullet; By <a href="#">Admin</a></span>
                                <h3><a href="#">Chrome now alerts you when someone steals your password</a></h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem, optio.</p>
                                <p><a href="#" class="readmore">Read more</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="post-entry">
                            <a href="blog-single.html" class="d-block mb-4">
                                <img src="assets/img/img_3.jpg" alt="Image" class="img-fluid">
                            </a>
                            <div class="post-text">
                                <span class="post-meta">December 13, 2019 &bullet; By <a href="#">Admin</a></span>
                                <h3><a href="#">Chrome now alerts you when someone steals your password</a></h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem, optio.</p>
                                <p><a href="#" class="readmore">Read more</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="post-entry">
                            <a href="blog-single.html" class="d-block mb-4">
                                <img src="assets/img/img_2.jpg" alt="Image" class="img-fluid">
                            </a>
                            <div class="post-text">
                                <span class="post-meta">December 13, 2019 &bullet; By <a href="#">Admin</a></span>
                                <h3><a href="#">Chrome now alerts you when someone steals your password</a></h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem, optio.</p>
                                <p><a href="#" class="readmore">Read more</a></p>
                            </div>
                        </div>
                    </div>
                @endif
            </div>

            <div class="row">
                <div class="col-12 d-flex justify-content-center">
                    {{ $blog->links() }}
                </div>
            </div>
        </div>

    </section>
@endsection
