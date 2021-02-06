@extends('layouts/main')

@section('title', 'Detail Hotel')

@section('navbar')

    <nav id="navbar" class="navbar navbar-expand-lg navbar-light bg-white position-fixed z-index-3 full-width">
        <div class="container">
            <a class="navbar-brand" href="/">
                <img src="assets/img/logo.png" style="width: 150px;" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ml-auto navbar-config text-sedang font-16">
                    <a class="nav-link pl-4" href="galeri">Galeri<span class="sr-only">(current)</span></a>
                    <a class="nav-link pl-4" href="">Favorit</a>
                    <a class="nav-link pl-4" href="tentang-kami">Tentang Kami</a>
                    <a class="nav-link pl-4 profile-icon" href="#" tabindex="-1" aria-disabled="true">
                        <button type="submit" class="btn btn-block text-biasa mt-n1">Masuk</button>
                    </a>
                </div>
            </div>
        </div>
    </nav>
@endsection
    <!-- //* end navbar -->
@section('content')
    <!-- //*content -->
    <div class="container justify-content-center cont-single-destinasi">
        <section class="row">
            <section class="col-lg-6 gambar">
                <button class="btn-slide-right position-absolute rounded-circle primary-box-color"
                    id="btn_slide_right"><span class="fa fa-chevron-right accent-text-color"></span></button>
                <button class="btn-slide-left position-absolute rounded-circle primary-box-color"
                    id="btn_slide_left"><span class="fa fa-chevron-left accent-text-color"></span></button>
                <img src="{{ asset('assets/img/hotel/hilton.png') }}" class="full-width object-cover" id="product_img" alt="">
                <div class="grid-many-img img-bawah">
                    <img src="{{ asset('assets/img/hotel/hilton.png') }}" class="small-img active object-cover" alt="">
                    <img src="{{ asset('assets/img/hotel/hilton2.png') }}" class="small-img object-cover" alt="">
                    <img src="{{ asset('assets/img/hotel/hilton3.png') }}" class="small-img object-cover" alt="">
                    <img src="{{ asset('assets/img/hotel/hilton4.png') }}" class="small-img object-cover" alt="">
                </div>
            </section>
            <section class="col-lg-6">
                <div class="card">
                    <div class="card-detail-hotel card-body">
                         @foreach ($dataHotel as $hotels)
                        <h5 class="card-title text-tebal font-18 mb-0">{{ $hotels['name'] }}</h5>
                        @endforeach
                        {{-- <h5 class="card-title text-tebal font-18 mb-0">Hilton Bandung</h5> --}}
                        <section class="row padding-left-18">
                            <img src="{{ asset('assets/icon/rating-icon.png') }}" class="rating-icon " alt="">
                            <img src="{{ asset('assets/icon/rating-icon.png') }}" class="rating-icon " alt="">
                            <img src="{{ asset('assets/icon/rating-icon.png') }}" class="rating-icon " alt="">
                            <img src="{{ asset('assets/icon/rating-icon.png') }}" class="rating-icon " alt="">
                        </section>
                        <p class="card-text text-biasa font-14 unactived-text-color mt-lg-2">
                            Jl. HOS Tjokroaminoto No.41-43, Arjuna, Kec. Cicendo, Kota Bandung, Jawa Barat 40172
                        </p>
                        <div class="rating-detail-hotel">
                            <p class="accent-text-color text-biasa mb-0 font-14 text-right">
                                Terkesan
                            </p>
                            <p class="unactived-text-color text-biasa font-12 text-right">1310
                                review</p>

                        </div>
                        <p class="primary-text-color text-biasa font-16 rating-hotel-iconn">8.4
                        </p>

                        <p class="text-biasa">Fasilitas</p>

                        {{-- CAROUSEL ICON --}}
                        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">

                                <!-- //*slider 1 -->
                                <div class="carousel-item active">
                                    <section class="row pl-4 pr-4">
                                        <section class="width-content col text-center fasilitas-detail-hotel card-icon">
                                            <img class="fasilitas-icon-detail" src="{{ asset('assets/icon/lift-pink.png') }}" alt="">
                                            <p class="text-biasa mt-2">Lift</p>
                                        </section>
                                        <section class="width-content col text-center fasilitas-detail-hotel card-icon">
                                            <img class="fasilitas-icon-detail" src="{{ asset('assets/icon/parkir-pink.png') }}" alt="">
                                            <p class="text-biasa mt-2">Parkir</p>
                                        </section>
                                        <section class="width-content col text-center fasilitas-detail-hotel card-icon">
                                            <img class="fasilitas-wifi" src="{{ asset('assets/icon/wifi-pink.png') }}" alt="">
                                            <p class="text-biasa mt-2">Wifi</p>
                                        </section>
                                        <section class="width-content col text-center fasilitas-detail-hotel card-icon">
                                            <img class="fasilitas-icon-detail" src="{{ asset('assets/icon/24h-pink.png') }}" alt="">
                                            <p class="text-biasa mt-2">24 jam</p>
                                        </section>
                                        <section class="width-content col text-center fasilitas-detail-hotel card-icon">
                                            <img class="fasilitas-ac" src="{{ asset('assets/icon/ac-pink.png') }}" alt="">
                                            <p class="text-biasa mt-2">AC</p>
                                        </section>

                                    </section>
                                </div>

                                <!-- //*slider 2 -->
                                <div class="carousel-item">
                                    <section class="row  pl-4 pr-4">
                                        <section class="width-content col text-center fasilitas-detail-hotel card-icon">
                                            <img class="fasilitas-restoran" src="{{ asset('assets/icon/restoran.png') }}" alt="">
                                            <p class="text-biasa mt-2">Restoran</p>
                                        </section>
                                        <section class="width-content col text-center fasilitas-detail-hotel card-icon">
                                            <img class="fasilitas-icon-detail" src="{{ asset('assets/icon/kolam-renang.png') }}"
                                                alt="">
                                            <p class="text-biasa mt-2">Kolam renang</p>
                                        </section>
                                        <section class="width-content col text-center fasilitas-detail-hotel card-icon">
                                            <img class="fasilitas-tv" src="{{ asset('assets/icon/tv.png') }}" alt="">
                                            <p class="text-biasa mt-2">TV</p>
                                        </section>
                                        <section class="width-content col text-center fasilitas-detail-hotel card-icon">
                                            <img class="fasilitas-icon-detail" src="{{ asset('assets/icon/single-bed.png') }}" alt="">
                                            <p class="text-biasa mt-2">Single Bed</p>
                                        </section>
                                        <section class="width-content col text-center fasilitas-detail-hotel card-icon">
                                            <img class="fasilitas-icon-detail" src="{{ asset('assets/icon/large-bed.png') }}" alt="">
                                            <p class="text-biasa mt-2">Large Bed</p>
                                        </section>

                                    </section>
                                </div>
                            </div>
                            <a class="carousel-control-prev nav-prev-btn mt-2 ml-n2" href="#carouselExampleControls"
                                role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next nav-next-btn mt-2 mr-n2" href="#carouselExampleControls"
                                role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
            </section>
        </section>
    </div>
@endsection