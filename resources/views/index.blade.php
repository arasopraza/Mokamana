@extends('layouts/main')

@section('title', 'Mokamana')

@section('navbar')
<nav id="navbar" class="navbar navbar-expand-lg navbar-light bg-white position-fixed z-index-1 full-width">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="{{ asset('assets/img/logo.png') }}" style="width: 150px;" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ml-auto navbar-config text-sedang font-18">
                <a class="nav-link pl-4" href="#">Galeri<span class="sr-only">(current)</span></a>
                <a class="nav-link pl-4" href="#">Kontak</a>
                <a class="nav-link pl-4" href="#">Tentang Kami</a>
                <a class="nav-link pl-4 profile-icon" href="/login" tabindex="-1" aria-disabled="true">
                    <button type="submit" class="btn btn-block text-biasa mt-n1">Masuk</button>
                </a>
            </div>
        </div>
    </div>
</nav>
@endsection

@section('content')
<div class="jumbotron jumbotron-fluid">
    <div class="container">
        <section class="row">
            <section class="col-lg-6">
                <h1 class="text-tebal font-40 mt-lg-5">EH <span class="accent-text-color">Kamu</span>,<br>Mau kemana
                    nih?
                </h1>

                {{-- #TODO search box index blom selesai --}}
                <form class="form-margin" method="POST" action="/hasil_pencarian">
                    @csrf
                    <div class="tabs" id="tabs">
                        <div class="container-search-box pb-0">
                            <div class="form-group">
                                {{-- <p class="text-sedang accent-text-color font-18">Cari Hotel</p> --}}
                                <div class="inputwith_icon">
                                    <Span>
                                        <img src="{{ asset('assets/icon/search_icon.png') }}" alt="">
                                    </Span>
                                    {{-- #FIXME FIX Ketika value diclear tidak mau autofocus  --}}
                                    <input type="text" name="cari" class="form-control search-box searchinput" aria-describedby="emailHelp" placeholder="Mau liburan kemana?" autofocus>
                                </div>
                                <button type="button" class="clear-btn clear-btn-index rounded-circle del">
                                    <img src="{{ asset('assets/icon/clear.png') }}" alt="">
                                </button>

                                <button type="submit" class="btn accent-box-color search-box-btn text-sedang">Cari</button>
                            </div>

                        </div>


                    </div>
                </form>
                <!-- <div class="box-form primary-box-color p-4">


                    </div> -->
            </section>


            <section class="col-lg-6 pl-4">
                <div class="grid-hero pt-lg-4">
                    <img src="{{ asset('assets/img/labuan-bajo.png') }}" alt="">
                    <img src="{{ asset('assets/img/bali.png') }}" alt="">
                    <img src="{{ asset('assets/img/raja-ampat.png') }}" alt="">
                </div>
                <div class="location-box">
                    <div class="font-20 text-biasa position-absolute accent-text-color primary-box-color pl-4 pr-4">
                        Labuan
                        Bajo</div>
                    <div class="font-20 text-biasa position-absolute accent-text-color primary-box-color pl-4 pr-4">
                        Raja Ampat
                    </div>
                    <div class="font-20 text-biasa position-absolute accent-text-color primary-box-color pt-2 pl-4 pr-4 pb-2">
                        Bali</div>
                </div>
            </section>
        </section>
    </div>
</div>

<!-- //* end jumbotron -->

<!-- //* Container CONTENT -->

<div class="container justify-content-center">

    <!-- //*Destinasi Populer -->
    <section class="row">
        <section class="col-lg-12 mt-lg-5 mb-lg-5">
            <p class="judul text-tebal font-30">Destinasi Pilihan</p>
        </section>
    </section>
    <section class="row pb-xl-5">
        <section class="col-lg-4">
            <a href="#" class="ahref-no-decor second-text-color ">
                <div class="card">
                    <div class="border-image">
                        <img src="{{ asset('assets/img/labuan-bajo.png') }}" class="card-img-top" alt="...">
                    </div>
                    <div class="card-body-custom">
                        <h5 class="card-title text-tebal mt-lg-3 mb-0">Labuan Bajo</h5>
                        <div class="pulau">
                            <p class="unactived-text-color text-biasa margin-top-5 font-14 mb-0">
                                1.439
                                Tempat
                                wisata & hotel</p>
                        </div>
                    </div>
                </div>
            </a>


        </section>
        <section class="col-lg-4">
            <a href="#" class="ahref-no-decor second-text-color ">
                <div class="card border-image">
                    <img src="{{ asset('assets/img/raja-ampat.png') }}" class="card-img-top" alt="...">
                    <div class="card-body-custom">
                        <h5 class="card-title text-tebal mt-lg-3 mb-0">Raja Ampat</h5>
                        <div class="pulau">
                            <p class="unactived-text-color text-biasa margin-top-5 font-14 mb-0">
                                576
                                Tempat
                                wisata & hotel</p>
                        </div>
                    </div>
                </div>
            </a>

        </section>
        <section class="col-lg-4">
            <a href="#" class="ahref-no-decor second-text-color">
                <div class="card border-image">
                    <img src="{{ asset('assets/img/bali.png') }}" class="card-img-top" alt="...">
                    <div class="card-body-custom">
                        <h5 class="card-title text-tebal mt-lg-3 mb-0">Bali</h5>
                        <div class="pulau">
                            <p class="unactived-text-color text-biasa margin-top-5 font-14 mb-0">
                                1.573
                                Tempat
                                wisata & hotel</p>
                        </div>
                    </div>
                </div>
            </a>

        </section>
    </section>

    <section class="row pb-xl-5">
        <section class="col-lg-4">
            <a href="#" class="ahref-no-decor second-text-color ">
                <div class="card">
                    <div class="border-image">
                        <img src="{{ asset('assets/img/bandung.png') }}" class="card-img-top" alt="...">
                    </div>
                    <div class="card-body-custom">
                        <h5 class="card-title text-tebal mt-lg-3 mb-0">Bandung</h5>
                        <div class="pulau">
                            <p class="unactived-text-color text-biasa margin-top-5 font-14 mb-0">
                                1.895
                                Tempat
                                wisata & hotel</p>
                        </div>
                    </div>
                </div>
            </a>


        </section>
        <section class="col-lg-4">
            <a href="#" class="ahref-no-decor second-text-color ">
                <div class="card border-image">
                    <img src="{{ asset('assets/img/bogor.png') }}" class="card-img-top" alt="...">
                    <div class="card-body-custom">
                        <h5 class="card-title text-tebal mt-lg-3 mb-0">Bogor</h5>
                        <div class="pulau">
                            <p class="unactived-text-color text-biasa margin-top-5 font-14 mb-0">
                                1.532
                                Tempat
                                wisata & hotel</p>
                        </div>
                    </div>
                </div>
            </a>

        </section>
        <section class="col-lg-4">
            <a href="#" class="ahref-no-decor second-text-color">
                <div class="card border-image">
                    <img src="{{ asset('assets/img/yogyakarta.png') }}" class="card-img-top" alt="...">
                    <div class="card-body-custom">
                        <h5 class="card-title text-tebal mt-lg-3 mb-0">Yogyakarta</h5>
                        <div class="pulau">
                            <p class="unactived-text-color text-biasa margin-top-5 font-14 mb-0">
                                1.645
                                Tempat
                                wisata & hotel</p>
                        </div>
                    </div>
                </div>
            </a>

        </section>
    </section>
    <!-- //*END Destinasi Populer -->

    <!-- //*banner -->
    <section class="row">
        <section class="col-lg-5">
            <h1 class="font-34 text-tebal title-santai">Santai Bersama Keluarga <br> dan Teman
            </h1>
            <p class="text-biasa font-22 subtitle-santai">Nikmati beragam apartemen <br>dan villa di <span class="accent-text-color text-tebal">Mokamana</span></p>
        </section>
        <section class="col-lg-3 text-center">
            <img class="img-villa" src="{{ asset('assets/img/villa.png') }}" alt="">
            <p class="text-biasa font-18 mt-2">17.000 lebih Villa</p>
        </section>
        <section class="col-lg-4 text-center">
            <img src="{{ asset('assets/img/apartemen.png') }}" alt="" class="img-apartemen">
            <p class="text-biasa font-18 mt-2">25.000 lebih Apartemen</p>
        </section>
    </section>

    <!-- //*END banner -->
</div>
<!-- //* END Container CONTENT -->

<!-- //*Galery -->

<div class="jumbotron jumbotron-fluid galery-box">
    <section class="row">
        <section class="col-lg-6">
            <img src="{{ ('assets/img/galery.png') }}" class="img-galery" alt="">
        </section>
        <section class="col-lg-6">
            <h1 class="galery-title font-34 text-tebal">Serunya liburan bersama <span class="accent-text-color text-tebal">Mokamana</span></h1>
            <a href="login.html" class="ahref-no-decor">
                <button type="submit" class="btn text-sedang btn-galery">Ke Galeri</button>
            </a>
        </section>
    </section>
</div>
@endsection