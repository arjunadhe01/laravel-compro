@if ($highlight->count())
    <div class="container text-center mb-2">
        <h2 class="section-heading">Highlight</h2>
    </div>

    @foreach ($highlight as $key => $item)
        <section class="section py-0">

            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-4 {{ $key % 2 == 0 ? 'me-auto' : 'ms-auto order-2' }}">
                        <h2 class="mb-2">{{ $item->title }}</h2>
                        <p class="mb-2">{{ $item->description }}</p>

                    </div>
                    <div class="col-md-2" data-aos="{{ $key % 2 == 0 ? 'fade-left' : 'fade-right' }}">
                        <img src="{{ $item->image ? asset('storage/' . $item->image) : asset('assets/img/Kuro.png') }}"
                            alt="Highlight" class="img-fluid" style="object-fit: contain; width: 600px; height: 100px;">
                    </div>
                </div>
            </div>
        </section>
    @endforeach
@else
    <div class="container text-center mb-0">
        <h2 class="section-heading">Highlight</h2>
    </div>

    <section class="section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-4 me-auto">
                    <h2 class="mb-4">Seamlessly Communicate</h2>
                    <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur at
                        reprehenderit optio, laudantium eius quod, eum maxime molestiae porro omnis. Dolores aspernatur delectus impedit
                        incidunt dolore mollitia esse natus beatae.</p>
                </div>
                <div class="col-md-6" data-aos="fade-left">
                    <img src="{{ asset('assets/img/Kuro.png') }}" alt="Highlight" class="img-fluid"
                        style="object-fit: contain; width: 600px; height: 600px;">
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
                        reprehenderit optio, laudantium eius quod, eum maxime molestiae porro omnis. Dolores aspernatur delectus impedit
                        incidunt dolore mollitia esse natus beatae.</p>
                </div>
                <div class="col-md-6" data-aos="fade-right">
                    <img src="{{ asset('assets/img/Kuro.png') }}" alt="Highlight" class="img-fluid"
                        style="object-fit: contain; width: 600px; height: 600px;">
                </div>
            </div>
        </div>
    </section>
@endif
