<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/template.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <title>Hello, world!</title>
</head>

<body>
    <!-- //*navbar -->

    <nav id="navbar" class="navbar navbar-expand-lg navbar-light bg-white position-fixed z-index-1 full-width">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="assets/img/logo.png" style="width: 150px;" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ml-auto navbar-config text-sedang font-18">
                    <a class="nav-link pl-4" href="#">Galeri<span class="sr-only">(current)</span></a>
                    <a class="nav-link pl-4" href="#">Kontak</a>
                    <a class="nav-link pl-4" href="#">Tentang Kami</a>
                    <a class="nav-link pl-4 profile-icon" href="#" tabindex="-1" aria-disabled="true">
                        <button type="submit" class="btn btn-block text-biasa mt-n1">Masuk</button>
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <!-- //* end navbar -->

    <!-- //*content -->

    <section class="row justify-content-center">
        <form class="form-container-search-hotel">
            <div class="inputwith_icon margin-top-160 search-hotel-box">
                <Span>
                    <img src="assets/icon/search_icon.png" alt="">
                </Span>
                <input type="text" class="form-control search-box searchinput" id="search_hotel"
                    aria-describedby="emailHelp" placeholder="Mau kemana nih?" value="Bandung" autofocus>
            </div>
            <button class="clear-btn rounded-circle clear-btn-search del" id="clear_search"
                onclick="document.getElementById('search_hotel').value=''">
                <img src="assets/icon/clear.png" alt="">
            </button>
        </form>


    </section>
    <section class="row justify-content-center">
        <p class="text-tebal font-26 mt-lg-4 mb-lg-n4">Hasil Pencarian {{ $data->cari }}</p>
    </section>
    <section class="container justify-content-center">
        <section class="col-lg-12 pl-0 pr-0">
            <form class="form-margin">
                <div class="tabs-search" id="tabs">

                    <!-- //* Tab hotel -->
                    <input type="radio" class="tabs-radio" id="hotel" name="tabs" checked="checked">
                    <label for="hotel" class="tabone-hotel text-biasa font-16 clicktab" id="search-hotel-wisata">
                        Hotel
                    </label>

                    <!-- //*isi tab hotel -->
                    <div class="tab-search">
                        <section class="row">

                            <!-- //* ISI FILTER DI KIRI -->
                            <section class="col-lg-6">
                                <!-- #TODO four points -->
                                <div class="card mb-3 full-width card-hotel">
                                    <div class="row no-gutters">
                                        <div class="col-md-4">
                                            <img src="/assets/img/hotel/four-points.png" class="card-img full-height"
                                                alt="...">
                                        </div>
                                        <div class="col-md-8">
                                            <div class="card-body">
                                                <h5 class="card-title text-tebal font-16 mb-0">Four Points by <br>
                                                    Sheraton
                                                    Bandung</h5>
                                                <section class="row padding-left-18">
                                                    <img src="assets/icon/rating-icon.png" class="rating-icon " alt="">
                                                    <img src="assets/icon/rating-icon.png" class="rating-icon " alt="">
                                                    <img src="assets/icon/rating-icon.png" class="rating-icon " alt="">
                                                    <img src="assets/icon/rating-icon.png" class="rating-icon " alt="">
                                                </section>
                                                <p class="card-text text-biasa font-14 unactived-text-color mt-1">
                                                    Bandung,
                                                    Jawa Barat
                                                </p>
                                                <div class="rating-hotel">
                                                    <p class="accent-text-color text-biasa mb-0 font-14 text-right">
                                                        Terkesan
                                                    </p>
                                                    <p class="unactived-text-color text-biasa font-12 text-right">229
                                                        review</p>

                                                </div>
                                                <p class="primary-text-color text-biasa font-16 rating-hotel-iconn">8.4
                                                </p>

                                                <p class="text-biasa mb-lg-1">Fasilitas</p>
                                                <section class="row padding-left-18 fasilitas height-20">
                                                    <img class="margin-right-15 fasilitas-icon" data-toggle="tooltip"
                                                        data-placement="top" title="Lift"
                                                        src="assets/icon/lift-pink.png" alt="">
                                                    <img class="margin-right-15 fasilitas-icon" data-toggle="tooltip"
                                                        data-placement="top" title="Parkir"
                                                        src="assets/icon/parkir-pink.png" alt="">
                                                    <img class="margin-right-15" data-toggle="tooltip"
                                                        data-placement="top" title="Wifi"
                                                        src="assets/icon/wifi-pink.png" alt="">
                                                    <img class="margin-right-15 fasilitas-icon" data-toggle="tooltip"
                                                        data-placement="top" title="24 jam Resepsionis"
                                                        src="assets/icon/24h-pink.png" alt="">
                                                    <p class="unactived-text-color text-tebal more-fasilitas font-12"
                                                        data-toggle="tooltip" data-placement="top" data-html="true"
                                                        title="Restoran <br> AC <br> Kolam renang <br> TV <br> Single Bed <br> Large Bed">
                                                        6+
                                                    </p>
                                                </section>
                                                <button class="btn btn-card-hotel">Lihat harga</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <!-- #TODO Jayakarta -->
                                <div class="card mb-3 full-width card-hotel">
                                    <div class="row no-gutters">
                                        <div class="col-md-4">
                                            <img src="/assets/img/hotel/jayakarta.png" class="card-img full-height"
                                                alt="...">
                                        </div>
                                        <div class="col-md-8">
                                            <div class="card-body">
                                                <h5 class="card-title text-tebal font-16 mb-0">The Jayakarta Suites <br>
                                                    Bandung</h5>
                                                <section class="row padding-left-18">
                                                    <img src="assets/icon/rating-icon.png" class="rating-icon " alt="">
                                                    <img src="assets/icon/rating-icon.png" class="rating-icon " alt="">
                                                    <img src="assets/icon/rating-icon.png" class="rating-icon " alt="">
                                                    <img src="assets/icon/rating-icon.png" class="rating-icon " alt="">
                                                </section>
                                                <p class="card-text text-biasa font-14 unactived-text-color mt-1">
                                                    Bandung,
                                                    Jawa Barat
                                                </p>
                                                <div class="rating-hotel">
                                                    <p class="accent-text-color text-biasa mb-0 font-14 text-right">
                                                        Mantap
                                                    </p>
                                                    <p class="unactived-text-color text-biasa font-12 text-right">1310
                                                        review</p>

                                                </div>
                                                <p class="primary-text-color text-biasa font-16 rating-hotel-iconn">7.7
                                                </p>

                                                <p class="text-biasa mb-lg-1">Fasilitas</p>
                                                <section class="row padding-left-18 fasilitas height-20">
                                                    <img class="margin-right-15 fasilitas-icon" data-toggle="tooltip"
                                                        data-placement="top" title="Lift"
                                                        src="assets/icon/lift-pink.png" alt="">
                                                    <img class="margin-right-15 fasilitas-icon" data-toggle="tooltip"
                                                        data-placement="top" title="Parkir"
                                                        src="assets/icon/parkir-pink.png" alt="">
                                                    <img class="margin-right-15" data-toggle="tooltip"
                                                        data-placement="top" title="Wifi"
                                                        src="assets/icon/wifi-pink.png" alt="">
                                                    <img class="margin-right-15 fasilitas-icon" data-toggle="tooltip"
                                                        data-placement="top" title="24 jam Resepsionis"
                                                        src="assets/icon/24h-pink.png" alt="">
                                                    <p class="unactived-text-color text-tebal more-fasilitas font-12"
                                                        data-toggle="tooltip" data-placement="top" data-html="true"
                                                        title="Restoran <br> AC <br> Kolam renang <br> TV <br> Single Bed <br> Large Bed">
                                                        6+
                                                    </p>
                                                </section>
                                                <button class="btn btn-card-hotel">Lihat harga</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <!-- #TODO Hilton -->
                                <div class="card mb-3 full-width card-hotel">
                                    <div class="row no-gutters">
                                        <div class="col-md-4">
                                            <img src="/assets/img/hotel/hilton.png" class="card-img full-height"
                                                alt="...">
                                        </div>
                                        <div class="col-md-8">
                                            <div class="card-body">
                                                <h5 class="card-title text-tebal font-16 mb-0">Hilton Bandung</h5>
                                                <section class="row padding-left-18">
                                                    <img src="assets/icon/rating-icon.png" class="rating-icon " alt="">
                                                    <img src="assets/icon/rating-icon.png" class="rating-icon " alt="">
                                                    <img src="assets/icon/rating-icon.png" class="rating-icon " alt="">
                                                    <img src="assets/icon/rating-icon.png" class="rating-icon " alt="">
                                                </section>
                                                <p class="card-text text-biasa font-14 unactived-text-color mt-1">
                                                    Bandung,
                                                    Jawa Barat
                                                </p>
                                                <div class="rating-hotel">
                                                    <p class="accent-text-color text-biasa mb-0 font-14 text-right">
                                                        Terkesan
                                                    </p>
                                                    <p class="unactived-text-color text-biasa font-12 text-right">667
                                                        review</p>

                                                </div>
                                                <p class="primary-text-color text-biasa font-16 rating-hotel-iconn">8.9
                                                </p>

                                                <p class="text-biasa mb-lg-1">Fasilitas</p>
                                                <section class="row padding-left-18 fasilitas height-20">
                                                    <img class="margin-right-15 fasilitas-icon" data-toggle="tooltip"
                                                        data-placement="top" title="Lift"
                                                        src="assets/icon/lift-pink.png" alt="">
                                                    <img class="margin-right-15 fasilitas-icon" data-toggle="tooltip"
                                                        data-placement="top" title="Parkir"
                                                        src="assets/icon/parkir-pink.png" alt="">
                                                    <img class="margin-right-15" data-toggle="tooltip"
                                                        data-placement="top" title="Wifi"
                                                        src="assets/icon/wifi-pink.png" alt="">
                                                    <img class="margin-right-15 fasilitas-icon" data-toggle="tooltip"
                                                        data-placement="top" title="24 jam Resepsionis"
                                                        src="assets/icon/24h-pink.png" alt="">
                                                    <p class="unactived-text-color text-tebal more-fasilitas font-12"
                                                        data-toggle="tooltip" data-placement="top" data-html="true"
                                                        title="Restoran <br> AC <br> Kolam renang <br> TV <br> Single Bed <br> Large Bed">
                                                        6+
                                                    </p>
                                                </section>
                                                <button class="btn btn-card-hotel">Lihat harga</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                                <!-- <div class="card" style="width: 18rem;">
                                    <div class="card-body">
                                        <h5 class="card-title text-tebal">Filter Berdasarkan:</h5>
                                        <hr>
                                        <form action="">
                                            <h6 class="card-subtitle mb-2 text-muted text-sedang">Bintang dan Peringkat
                                            </h6>
                                            <label class="container-check-filter text-biasa font-15">Bintang 1
                                                <input type="checkbox">
                                                <span class="checkmark"></span>
                                            </label>
                                            <label class="container-check-filter text-biasa font-15">Bintang 2
                                                <input type="checkbox">
                                                <span class="checkmark"></span>
                                            </label>
                                            <label class="container-check-filter text-biasa font-15">Bintang 3
                                                <input type="checkbox">
                                                <span class="checkmark"></span>
                                            </label>
                                            <label class="container-check-filter text-biasa font-15">Bintang 4
                                                <input type="checkbox">
                                                <span class="checkmark"></span>
                                            </label>
                                            <label class="container-check-filter text-biasa font-15">Bintang 5
                                                <input type="checkbox">
                                                <span class="checkmark"></span>
                                            </label>
                                            <label class="container-check-filter text-biasa font-15">Tidak
                                                berperingkat
                                                <input type="checkbox">
                                                <span class="checkmark"></span>
                                            </label>
                                            <hr>
                                            <h6 class="card-subtitle mb-2 text-muted text-sedang">Nilai Feedback
                                            </h6>
                                            <label class="container-check-filter text-biasa font-15">Terbaik : 9+
                                                <input type="checkbox">
                                                <span class="checkmark"></span>
                                            </label>
                                            <label class="container-check-filter text-biasa font-15">Terkesan : 8+
                                                <input type="checkbox">
                                                <span class="checkmark"></span>
                                            </label>
                                            <label class="container-check-filter text-biasa font-15">Mantap : 7+
                                                <input type="checkbox">
                                                <span class="checkmark"></span>
                                            </label>
                                            <label class="container-check-filter text-biasa font-15">Bagus : 6+
                                                <input type="checkbox">
                                                <span class="checkmark"></span>
                                            </label>
                                        </form>
                                    </div>
                                </div> -->
                            </section>

                            <!-- //*ISI CARD HOTEL -->
                            <section class="col-lg-6">

                                <!-- #TODO aryaduta -->
                                <div class="card mb-4 full-width card-hotel">
                                    <div class="row no-gutters">
                                        <div class="col-md-4">
                                            <img src="/assets/img/hotel/aryaduta.png" class="card-img full-height"
                                                alt="...">
                                        </div>
                                        <div class="col-md-8">
                                            <div class="card-body">
                                                <h5 class="card-title text-tebal font-16 mb-0">Aryaduta Bandung</h5>
                                                <section class="row padding-left-18">
                                                    <img src="assets/icon/rating-icon.png" class="rating-icon " alt="">
                                                    <img src="assets/icon/rating-icon.png" class="rating-icon " alt="">
                                                    <img src="assets/icon/rating-icon.png" class="rating-icon " alt="">
                                                    <img src="assets/icon/rating-icon.png" class="rating-icon " alt="">
                                                </section>
                                                <p class="card-text text-biasa font-14 unactived-text-color mt-1">
                                                    Bandung,
                                                    Jawa Barat
                                                </p>
                                                <div class="rating-hotel">
                                                    <p class="accent-text-color text-biasa mb-0 font-14 text-right">
                                                        Terkesan
                                                    </p>
                                                    <p class="unactived-text-color text-biasa font-12 text-right">1310
                                                        review</p>

                                                </div>
                                                <p class="primary-text-color text-biasa font-16 rating-hotel-iconn">8.4
                                                </p>

                                                <p class="text-biasa mb-lg-1">Fasilitas</p>
                                                <section class="row padding-left-18 fasilitas height-20">
                                                    <img class="margin-right-15 fasilitas-icon" data-toggle="tooltip"
                                                        data-placement="top" title="Lift"
                                                        src="assets/icon/lift-pink.png" alt="">
                                                    <img class="margin-right-15 fasilitas-icon" data-toggle="tooltip"
                                                        data-placement="top" title="Parkir"
                                                        src="assets/icon/parkir-pink.png" alt="">
                                                    <img class="margin-right-15" data-toggle="tooltip"
                                                        data-placement="top" title="Wifi"
                                                        src="assets/icon/wifi-pink.png" alt="">
                                                    <img class="margin-right-15 fasilitas-icon" data-toggle="tooltip"
                                                        data-placement="top" title="24 jam Resepsionis"
                                                        src="assets/icon/24h-pink.png" alt="">
                                                    <p class="unactived-text-color text-tebal more-fasilitas font-12"
                                                        data-toggle="tooltip" data-placement="top" data-html="true"
                                                        title="Restoran <br> AC <br> Kolam renang <br> TV <br> Single Bed <br> Large Bed">
                                                        6+
                                                    </p>
                                                </section>
                                                <button class="btn btn-card-hotel">Lihat harga</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- #TODO courtyard by Mariot -->
                                <div class="card mb-4 full-width card-hotel">
                                    <div class="row no-gutters">
                                        <div class="col-md-4">
                                            <img src="/assets/img/hotel/courtyard.png" class="card-img full-height"
                                                alt="...">
                                        </div>
                                        <div class="col-md-8">
                                            <div class="card-body">
                                                <h5 class="card-title text-tebal font-16 mb-0">Courtyard by <br>
                                                    Marriott
                                                    Bandung</h5>
                                                <section class="row padding-left-18">
                                                    <img src="assets/icon/rating-icon.png" class="rating-icon " alt="">
                                                    <img src="assets/icon/rating-icon.png" class="rating-icon " alt="">
                                                    <img src="assets/icon/rating-icon.png" class="rating-icon " alt="">
                                                    <img src="assets/icon/rating-icon.png" class="rating-icon " alt="">
                                                </section>
                                                <p class="card-text text-biasa font-14 unactived-text-color mt-1">
                                                    Bandung,
                                                    Jawa Barat
                                                </p>
                                                <div class="rating-hotel">
                                                    <p class="accent-text-color text-biasa mb-0 font-14 text-right">
                                                        Terkesan
                                                    </p>
                                                    <p class="unactived-text-color text-biasa font-12 text-right">363
                                                        review</p>

                                                </div>
                                                <p class="primary-text-color text-biasa font-16 rating-hotel-iconn">8.6
                                                </p>

                                                <p class="text-biasa mb-lg-1">Fasilitas</p>
                                                <section class="row padding-left-18 fasilitas height-20">
                                                    <img class="margin-right-15 fasilitas-icon" data-toggle="tooltip"
                                                        data-placement="top" title="Lift"
                                                        src="assets/icon/lift-pink.png" alt="">
                                                    <img class="margin-right-15 fasilitas-icon" data-toggle="tooltip"
                                                        data-placement="top" title="Parkir"
                                                        src="assets/icon/parkir-pink.png" alt="">
                                                    <img class="margin-right-15" data-toggle="tooltip"
                                                        data-placement="top" title="Wifi"
                                                        src="assets/icon/wifi-pink.png" alt="">
                                                    <img class="margin-right-15 fasilitas-icon" data-toggle="tooltip"
                                                        data-placement="top" title="24 jam Resepsionis"
                                                        src="assets/icon/24h-pink.png" alt="">
                                                    <p class="unactived-text-color text-tebal more-fasilitas font-12"
                                                        data-toggle="tooltip" data-placement="top" data-html="true"
                                                        title="Restoran <br> AC <br> Kolam renang <br> TV <br> Single Bed <br> Large Bed">
                                                        6+
                                                    </p>
                                                </section>
                                                <button class="btn btn-card-hotel">Lihat harga</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- #TODO Swiss belresort -->
                                <div class="card mb-3 full-width card-hotel">
                                    <div class="row no-gutters">
                                        <div class="col-md-4">
                                            <img src="/assets/img/hotel/swiss-belresort.png"
                                                class="card-img full-height" alt="...">
                                        </div>
                                        <div class="col-md-8">
                                            <div class="card-body">
                                                <h5 class="card-title text-tebal font-16 mb-0">Swiss-Belresort <br>
                                                    Bandung
                                                    Dago</h5>
                                                <section class="row padding-left-18">
                                                    <img src="assets/icon/rating-icon.png" class="rating-icon " alt="">
                                                    <img src="assets/icon/rating-icon.png" class="rating-icon " alt="">
                                                    <img src="assets/icon/rating-icon.png" class="rating-icon " alt="">
                                                    <img src="assets/icon/rating-icon.png" class="rating-icon " alt="">
                                                </section>
                                                <p class="card-text text-biasa font-14 unactived-text-color mt-1">
                                                    Bandung,
                                                    Jawa Barat
                                                </p>
                                                <div class="rating-hotel">
                                                    <p class="accent-text-color text-biasa mb-0 font-14 text-right">
                                                        Terkesan
                                                    </p>
                                                    <p class="unactived-text-color text-biasa font-12 text-right">317
                                                        review</p>

                                                </div>
                                                <p class="primary-text-color text-biasa font-16 rating-hotel-iconn">8.0
                                                </p>

                                                <p class="text-biasa mb-lg-1">Fasilitas</p>
                                                <section class="row padding-left-18 fasilitas height-20">
                                                    <img class="margin-right-15 fasilitas-icon" data-toggle="tooltip"
                                                        data-placement="top" title="Lift"
                                                        src="assets/icon/lift-pink.png" alt="">
                                                    <img class="margin-right-15 fasilitas-icon" data-toggle="tooltip"
                                                        data-placement="top" title="Parkir"
                                                        src="assets/icon/parkir-pink.png" alt="">
                                                    <img class="margin-right-15" data-toggle="tooltip"
                                                        data-placement="top" title="Wifi"
                                                        src="assets/icon/wifi-pink.png" alt="">
                                                    <img class="margin-right-15 fasilitas-icon" data-toggle="tooltip"
                                                        data-placement="top" title="24 jam Resepsionis"
                                                        src="assets/icon/24h-pink.png" alt="">
                                                    <p class="unactived-text-color text-tebal more-fasilitas font-12"
                                                        data-toggle="tooltip" data-placement="top" data-html="true"
                                                        title="Restoran <br> AC <br> Kolam renang <br> TV <br> Single Bed <br> Large Bed">
                                                        6+
                                                    </p>
                                                </section>
                                                <button class="btn btn-card-hotel">Lihat harga</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </section>
                        </section>
                    </div>

                    <!-- //* Tab wisata -->
                    <input type="radio" class="tabs-radio" name="tabs" id="wisata">
                    <label for="wisata" class="tabtwo-wisata text-biasa font-16 clicktab" id="search-hotel-wisata">
                        Wisata
                    </label>

                    <!-- //*isi tab wisata -->
                    <div class="tab-search">
                        <div class="form-group">


                            <section class="row">
                                <section class="col-lg-6">
                                    <!-- #TODO Isi Deskripsi -->
                                    <!-- //*Kawah Putih -->
                                    <div class="card mb-3 full-width card-hotel">
                                        <div class="row no-gutters">
                                            <div class="col-md-6">
                                                <img src="/assets/img/wisata/kawah-putih.png"
                                                    class="card-img full-height" alt="...">
                                            </div>
                                            <div class="col-md-6">
                                                <div class="card-body">
                                                    <h5 class="card-title text-tebal font-18 mb-0">Kawah Putih</h5>
                                                    <section class="row padding-left-18">
                                                        <img src="assets/icon/rating-icon.png" class="rating-icon "
                                                            alt="">
                                                        <img src="assets/icon/rating-icon.png" class="rating-icon "
                                                            alt="">
                                                        <img src="assets/icon/rating-icon.png" class="rating-icon "
                                                            alt="">
                                                        <img src="assets/icon/rating-icon.png" class="rating-icon "
                                                            alt="">
                                                        <img src="assets/icon/rating-half.png" class="rating-icon "
                                                            alt="">
                                                        <p class="text-biasa font-14 unactived-text-color margin-top-2">
                                                            (4.499)</p>
                                                    </section>
                                                    <p
                                                        class="card-text text-biasa font-14 unactived-text-color mt-lg-n2">
                                                        Bandung,
                                                        Jawa Barat
                                                    </p>
                                                    <p class="text-biasa"></p>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- #TODO Isi Deskripsi -->
                                    <!-- //*asia afrika -->
                                    <div class="card mb-3 full-width card-hotel">
                                        <div class="row no-gutters">
                                            <div class="col-md-6">
                                                <img src="/assets/img/wisata/asia-afrika.png"
                                                    class="card-img full-height" alt="...">
                                            </div>
                                            <div class="col-md-6">
                                                <div class="card-body">
                                                    <h5 class="card-title text-tebal font-18 mb-0">The Great Asia Afrika
                                                    </h5>
                                                    <section class="row padding-left-18">
                                                        <img src="assets/icon/rating-icon.png" class="rating-icon "
                                                            alt="">
                                                        <img src="assets/icon/rating-icon.png" class="rating-icon "
                                                            alt="">
                                                        <img src="assets/icon/rating-icon.png" class="rating-icon "
                                                            alt="">
                                                        <img src="assets/icon/rating-icon.png" class="rating-icon "
                                                            alt="">
                                                        <img src="assets/icon/rating-half.png" class="rating-icon "
                                                            alt="">
                                                        <p class="text-biasa font-14 unactived-text-color margin-top-2">
                                                            (7.551)</p>
                                                    </section>
                                                    <p
                                                        class="card-text text-biasa font-14 unactived-text-color mt-lg-n2">
                                                        Bandung,
                                                        Jawa Barat
                                                    </p>
                                                    <p class="text-biasa"></p>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- #TODO Isi Deskripsi -->
                                    <!-- //*taman hutan raya -->
                                    <div class="card mb-3 full-width card-hotel">
                                        <div class="row no-gutters">
                                            <div class="col-md-6">
                                                <img src="/assets/img/wisata/taman-hutan.png"
                                                    class="card-img full-height" alt="...">
                                            </div>
                                            <div class="col-md-6">
                                                <div class="card-body">
                                                    <h5 class="card-title text-tebal font-18 mb-0">Taman Hutan Raya</h5>
                                                    <section class="row padding-left-18">
                                                        <img src="assets/icon/rating-icon.png" class="rating-icon "
                                                            alt="">
                                                        <img src="assets/icon/rating-icon.png" class="rating-icon "
                                                            alt="">
                                                        <img src="assets/icon/rating-icon.png" class="rating-icon "
                                                            alt="">
                                                        <img src="assets/icon/rating-icon.png" class="rating-icon "
                                                            alt="">
                                                        <img src="assets/icon/rating-half.png" class="rating-icon "
                                                            alt="">
                                                        <p class="text-biasa font-14 unactived-text-color margin-top-2">
                                                            (11.393)</p>
                                                    </section>
                                                    <p
                                                        class="card-text text-biasa font-14 unactived-text-color mt-lg-n2">
                                                        Bandung,
                                                        Jawa Barat
                                                    </p>
                                                    <p class="text-biasa"></p>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>

                                <section class="col-lg-6">
                                    <!-- #TODO Isi Deskripsi -->
                                    <!-- //*Tangkuban Perahu -->
                                    <div class="card mb-3 full-width card-hotel">
                                        <div class="row no-gutters">
                                            <div class="col-md-6">
                                                <img src="/assets/img/wisata/tangkuban.png" class="card-img full-height"
                                                    alt="...">
                                            </div>
                                            <div class="col-md-6">
                                                <div class="card-body">
                                                    <h5 class="card-title text-tebal font-18 mb-0">Tangkuban Perahu</h5>
                                                    <section class="row padding-left-18">
                                                        <img src="assets/icon/rating-icon.png" class="rating-icon "
                                                            alt="">
                                                        <img src="assets/icon/rating-icon.png" class="rating-icon "
                                                            alt="">
                                                        <img src="assets/icon/rating-icon.png" class="rating-icon "
                                                            alt="">
                                                        <img src="assets/icon/rating-icon.png" class="rating-icon "
                                                            alt="">
                                                        <img src="assets/icon/rating-half.png" class="rating-icon "
                                                            alt="">
                                                        <p class="text-biasa font-14 unactived-text-color margin-top-2">
                                                            (4.148)</p>
                                                    </section>
                                                    <p
                                                        class="card-text text-biasa font-14 unactived-text-color mt-lg-n2">
                                                        Bandung,
                                                        Jawa Barat
                                                    </p>
                                                    <p class="text-biasa"></p>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- #TODO Isi Deskripsi -->
                                    <!-- //*Dago dreampark-->
                                    <div class="card mb-3 full-width card-hotel">
                                        <div class="row no-gutters">
                                            <div class="col-md-6">
                                                <img src="/assets/img/wisata/dago-park.png" class="card-img full-height"
                                                    alt="...">
                                            </div>
                                            <div class="col-md-6">
                                                <div class="card-body">
                                                    <h5 class="card-title text-tebal font-18 mb-0">Dago Dreampark</h5>
                                                    <section class="row padding-left-18">
                                                        <img src="assets/icon/rating-icon.png" class="rating-icon "
                                                            alt="">
                                                        <img src="assets/icon/rating-icon.png" class="rating-icon "
                                                            alt="">
                                                        <img src="assets/icon/rating-icon.png" class="rating-icon "
                                                            alt="">
                                                        <img src="assets/icon/rating-icon.png" class="rating-icon "
                                                            alt="">
                                                        <img src="assets/icon/rating-half.png" class="rating-icon "
                                                            alt="">
                                                        <p class="text-biasa font-14 unactived-text-color margin-top-2">
                                                            (15.285)</p>
                                                    </section>
                                                    <p
                                                        class="card-text text-biasa font-14 unactived-text-color mt-lg-n2">
                                                        Bandung,
                                                        Jawa Barat
                                                    </p>
                                                    <p class="text-biasa"></p>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- #TODO Isi Deskripsi -->
                                    <!-- //*Kampung Tulip -->
                                    <div class="card mb-3 full-width card-hotel">
                                        <div class="row no-gutters">
                                            <div class="col-md-6">
                                                <img src="/assets/img/wisata/kampung-tulip.png"
                                                    class="card-img full-height" alt="...">
                                            </div>
                                            <div class="col-md-6">
                                                <div class="card-body">
                                                    <h5 class="card-title text-tebal font-18 mb-0">Kampoeng Tulip</h5>
                                                    <section class="row padding-left-18">
                                                        <img src="assets/icon/rating-icon.png" class="rating-icon "
                                                            alt="">
                                                        <img src="assets/icon/rating-icon.png" class="rating-icon "
                                                            alt="">
                                                        <img src="assets/icon/rating-icon.png" class="rating-icon "
                                                            alt="">
                                                        <img src="assets/icon/rating-icon.png" class="rating-icon "
                                                            alt="">
                                                        <img src="assets/icon/rating-half.png" class="rating-icon "
                                                            alt="">
                                                        <p class="text-biasa font-14 unactived-text-color margin-top-2">
                                                            (3.359)</p>
                                                    </section>
                                                    <p
                                                        class="card-text text-biasa font-14 unactived-text-color mt-lg-n2">
                                                        Bandung,
                                                        Jawa Barat
                                                    </p>
                                                    <p class="text-biasa"></p>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </section>
                        </div>
                    </div>
                </div>
            </form>

        </section>
    </section>
    <!-- //* end content -->

    <!-- //*FOOTER -->
    <div class="container justify-content-center">
        <section class="row margin-footer">
            <section class="col-lg-4">
                <img src="assets/img/logo.png" class="logo-footer" alt="">
                <p class="accent-text-color text-tebal font-18">2021 © Copyright</p>
            </section>
            <section class="col-lg-2 mt-2">
                <div class="cont-footer">
                    <a href="#" class="border-footer accent-text-color text-biasa font-16">Beranda</a>
                </div>
                <div class="cont-footer-text-panjang mt-4">
                    <a href="#" class="border-footer accent-text-color text-biasa font-16">Kontak<span
                            class="opacity-0">..</span>kami</a>
                </div>
            </section>
            <section class="col-lg-2 mt-2">
                <div class="cont-footer">
                    <a href="#" class="border-footer accent-text-color text-biasa font-16">Galeri</a>
                </div>
                <div class="cont-footer-text-panjang mt-4">
                    <a href="#" class="border-footer accent-text-color text-biasa font-16">Tentang<span
                            class="opacity-0">..</span>kami</a>
                </div>
            </section>
            <section class="col-lg-4 mt-2">
                <p class="font-16 text-sedang">Ikuti kami</p>
                <a href="#" class="ahref-no-decor">
                    <img src="assets/icon/fb.png" alt="" class="icon-footer">
                </a>
                <a href="https://www.instagram.com/gya.af/" target="blank" class="ahref-no-decor">
                    <img src="assets/icon/ig.png" alt="" class="icon-footer">
                </a>

            </section>
        </section>



        <hr class="accent-box-color mt-5">
    </div>
    <!-- //* END FOOTER -->

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
    <script type="text/javaScript" src="{{ asset('js/main.js') }}"></script>
</body>

</html>