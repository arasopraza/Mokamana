@extends('layouts/main')

@section('title', 'Mokamana')

@section('navbar')
<nav id="navbar" class="navbar navbar-expand-lg navbar-light bg-white position-fixed z-index-3 full-width">
    <div class="container">
        <a class="navbar-brand" href="/">
            <img src="{{ asset('assets/img/logo.png') }}" style="width: 150px;" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ml-auto navbar-config text-sedang">
                <a class="nav-link pl-4" href="galeri">Galeri<span class="sr-only">(current)</span></a>
                <a class="nav-link pl-4" href="tentang-kami/#kontak">Kontak</a>
                <a class="nav-link pl-4" href="/tentang-kami">Tentang Kami</a>
                <a class="nav-link pl-4 profile-icon" href="/login" tabindex="-1" aria-disabled="true">
                    <button type="submit" class="btn btn-block text-biasa mt-n1">Masuk</button>
                </a>
            </div>
        </div>
    </div>
</nav>
@endsection

@section('content')
<div class="jumbotron jumbotron-fluid jumbotron-index">
    <div class="container">
        <section class="row">
            <section class="col-lg-6">
                <h1 class="text-tebal-banget font-40 mt-lg-5">EH <span class="accent-text-color">Kamu</span>,<br>Mau kemana
                    nih?
                </h1>
                <p class="text-biasa font-16 mt-3 mb-0">Cukup ketik kota yang ingin anda tuju</p>
                <p class="text-biasa font-16 mb-lg-n5">lalu klik cari, gampang kan?</p>

                {{-- #TODO search box index blom selesai --}}
                <form class="form-margin" method="GET" action="/hasil-pencarian">
                    <div class="tabs" id="tabs">
                        <div class="container-search-box mt-lg-n3 pb-0">
                            <div class="form-group">
                                <p class="text-sedang font-18">Mulai cari liburanmu</p>
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
                                <div class="spinner-border text-light" id="loader-index" role="status">
                                    <span class="sr-only">Loading...</span>
                                  </div>
                                <button type="submit" onclick="loadfunction()" class="btn accent-box-color search-box-btn text-sedang" id="search-btn">
                                    <p class="mb-0" id="pcari">Cari</p>
                                </button>
                            </div>

                        </div>


                    </div>
                </form>
                <!-- <div class="box-form primary-box-color p-4">


                    </div> -->
            </section>


            <section class="col-lg-6 pl-4">
                {{-- <div class="grid-hero pt-lg-4">
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
                </div> --}}
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img src="https://img.freepik.com/free-photo/aerial-view-young-woman-swimming-pink-swim-ring_159067-1.jpg?size=626&ext=jpg&uid=P32456831&ga=GA1.2.1071532805.1610099719" class="d-block w-100 img-carousel-index" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="https://img.freepik.com/free-photo/modern-buildings-with-glass-windows-cloudy-sky-during-sunset-evening_181624-21988.jpg?size=626&ext=jpg&uid=P32456831&ga=GA1.2.1071532805.1610099719" class="d-block w-100 img-carousel-index" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="https://img.freepik.com/free-photo/female-tourists-spread-their-arms-held-their-wings_1150-7462.jpg?size=626&ext=jpg&uid=P32456831&ga=GA1.2.1071532805.1610099719" class="d-block w-100 img-carousel-index" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="https://img.freepik.com/free-photo/parked-bicycles-sharing-with-green-illuminationt-night-bucharest-romania_1268-16392.jpg?size=626&ext=jpg&uid=P32456831&ga=GA1.2.1071532805.1610099719" class="d-block w-100 img-carousel-index" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="https://img.freepik.com/free-photo/group-three-friends-lying-retro-bus-sandy-beach_247147-36.jpg?size=664&ext=jpg&ga=GA1.2.1071532805.1610099719" class="d-block w-100 img-carousel-index" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="https://img.freepik.com/free-photo/city-park_1127-3322.jpg?size=626&ext=jpg&uid=P32456831&ga=GA1.2.1071532805.1610099719" class="d-block w-100 img-carousel-index" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="https://img.freepik.com/free-photo/boatman-punting-boat-river-arashiyama-autumn-season-along-river-kyoto-japan_335224-26.jpg?size=626&ext=jpg&uid=P32456831&ga=GA1.2.1071532805.1610099719" class="d-block w-100 img-carousel-index" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="https://img.freepik.com/free-photo/road-with-illuminated-streetlights_1127-2084.jpg?size=626&ext=jpg&uid=P32456831&ga=GA1.2.1071532805.1610099719" class="d-block w-100 img-carousel-index" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="https://img.freepik.com/free-photo/woman-walking-kelingking-beach-nusa-penida-island-bali-indonesia_335224-337.jpg?size=626&ext=jpg&uid=P32456831&ga=GA1.2.1071532805.1610099719" class="d-block w-100 img-carousel-index" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="https://img.freepik.com/free-photo/girl-drinking-tea-istanbul_1157-8843.jpg?size=626&ext=jpg&uid=P32456831&ga=GA1.2.1071532805.1610099719" class="d-block w-100 img-carousel-index" alt="...">
                      </div>
                      {{-- <div class="carousel-item">
                        <img src="..." class="d-block w-100 img-carousel-index" alt="...">
                      </div> --}}
                      
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                    </a>
                  </div>
            </section>
        </section>
    </div>
</div>

<!-- //* end jumbotron -->

<!-- //* Container CONTENT -->

<div class="container justify-content-center">

    <!-- //*Destinasi Populer -->
    <section class="row" data-aos="fade-up">
        <section class="col-lg-12 mt-lg-5 mb-lg-5">
            <p class="judul text-tebal font-30">Destinasi Pilihan</p>
        </section>
    </section>
    <section class="row pb-xl-5" data-aos="fade-up">
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

    <section class="row pb-xl-5" data-aos="fade-up">
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
    <section class="row" data-aos="fade-up">
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

<div class="jumbotron jumbotron-fluid galery-box" data-aos="fade-up">
    <section class="row">
        <section class="col-lg-6">
            <img src="{{ ('assets/img/galery.png') }}" class="img-galery" alt="">
        </section>
        <section class="col-lg-6">
            <h1 class="galery-title font-34 text-tebal">Serunya liburan bersama <span class="accent-text-color text-tebal">Mokamana</span></h1>
            <a href="galeri" class="ahref-no-decor">
                <button type="submit" class="btn text-sedang btn-galery">Ke Galeri</button>
            </a>
        </section>
    </section>
</div>
@endsection