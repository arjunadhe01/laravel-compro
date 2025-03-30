<section class="section border-top border-bottom">
    <div class="container">
        <div class="row justify-content-center text-center mb-5">
            <div class="col-md-4">
                <h2 class="section-heading">Our Clients</h2>
            </div>
        </div>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-4 justify-content-center">
            @if (ReviewHelper::get()->count())
                @foreach (ReviewHelper::get() as $item)
                    <div class="col d-flex justify-content-center">
                        <div class="card shadow-sm border rounded p-3" style="width: 2000px; height: 200px; display: flex; align-items: center; justify-content: center;">
                            <img src="{{ $item->image ? asset('storage/' . $item->image) : asset('assets/img/default-logo.png') }}"
                                alt="Logo" class="img-fluid" style="max-height: 100px; object-fit: contain;">
                        </div>
                    </div>
                @endforeach
            @else
                <div class="col-md-12 text-center">
                    <p>No logos available at the moment.</p>
                </div>
            @endif
        </div>
    </div>
</section>
