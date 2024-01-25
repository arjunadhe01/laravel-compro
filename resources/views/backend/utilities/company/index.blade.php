@extends('backend.layouts.main')

@section('content')
    <div class="row mx-1">
        <!-- Basic Breadcrumb -->
        <nav aria-label="breadcrumb mx-1">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{ route('dashboard.index') }}">Home</a>
                </li>
                <li class="breadcrumb-item active">Company</li>
            </ol>
        </nav>
        <!-- Basic Breadcrumb -->

        <div class="card">
            <h3 class="card-head my-2 mx-2 mt-3">Company {{ $company->nickname ?? '' }}</h3>
            <div class="card-body mx-2">
                <form action="{{ route('company.update') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="name">Name <span
                                class="text-danger fw-bolder">*</span></label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                                id="name" placeholder="CV Kuroyasha" value="{{ old('name', $company->name ?? '') }}" />
                            @error('name')
                                <div class="form-text text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="nickname">Nickname <span
                                class="text-danger fw-bolder">*</span></label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control @error('nickname') is-invalid @enderror"
                                name="nickname" id="nickname" placeholder="Kuroyasha"
                                value="{{ old('nickname', $company->nickname ?? '') }}" />
                            @error('nickname')
                                <div class="form-text text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="logos" class="col-sm-2 col-form-label"> Logos</label>
                        <div class="col-sm-10">
                            <img src="{{ $company && $company->logos !== null ? asset('storage/' . $company->logos) : asset('assets/img/Kuroyasha.png') }}"
                                alt="logos" class="img-fluid d-block rounded my-2"
                                style="object-fit: contain; width: 100px; height: 100px;" id="uploadedAvatar" />
                            <div class="button-wrapper">
                                <label for="logos"
                                    class="btn @error('logos')
                                btn-danger
                                @else
                                btn-primary
                                @enderror me-2 mb-2"
                                    tabindex="0">
                                    <span class="d-none d-sm-block">Upload Logo</span>
                                    <i class="bx bx-upload d-block d-sm-none"></i>
                                    <input type="file" name="logos" id="logos" class="account-file-input" hidden
                                        accept="image/png, image/jpeg, image/jpg" onchange="previewImage()" />
                                </label>
                            </div>
                            <div class="form-text">
                                @error('logos')
                                    <span class="text-danger">{{ $message }}</span>
                                @else
                                    JPG, JPEG or PNG. Maksimal 800Kb
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="ico" class="col-sm-2 col-form-label"> Icon</label>
                        <div class="col-sm-10">
                            <img src="{{ $company && $company->ico !== null ? asset('storage/' . $company->ico) : asset('assets/ico/Kuroyasha.ico') }}"
                                alt="ico" class="img-fluid d-block rounded my-2"
                                style="object-fit: contain; width: 100px; height: 100px;" id="uploadedAvatar2" />
                            <div class="button-wrapper">
                                <label for="ico"
                                    class="btn @error('ico')
                                btn-danger
                                @else
                                btn-primary
                                @enderror me-2 mb-2"
                                    tabindex="0">
                                    <span class="d-none d-sm-block">Upload Icon</span>
                                    <i class="bx bx-upload d-block d-sm-none"></i>
                                    <input type="file" name="ico" id="ico" class="account-file-input" hidden
                                        accept=".ico" onchange="previewImage2()" />
                                </label>
                            </div>
                            <div class="form-text">
                                @error('ico')
                                    <span class="text-danger">{{ $message }}</span>
                                @else
                                    ico. Maksimal 500Kb
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="description" class="col-sm-2 col-form-label"> Description</label>
                        <div class="col-sm-10">
                            <textarea name="description" id="description" class="form-control @error('description') is-invalid @enderror"
                                placeholder="Description" aria-label="Description">{{ old('description', $company->description ?? '') }}</textarea>
                            @error('description')
                                <div class="form-text text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@push('script')
    <script>
        function previewImage() {
            const logos = document.querySelector('#logos');
            const imgPreview = document.querySelector('#uploadedAvatar');

            imgPreview.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(logos.files[0]);

            oFReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result;
            }

        }

        function previewImage2() {
            const ico = document.querySelector('#ico');
            const imgPreview = document.querySelector('#uploadedAvatar2');

            imgPreview.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(ico.files[0]);

            oFReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result;
            }

        }
    </script>
@endpush
