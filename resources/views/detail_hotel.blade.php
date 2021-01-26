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
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
    <title>Hello, world!</title>
</head>

<body>
    <!-- //*navbar -->

    <nav id="navbar" class="navbar navbar-expand-lg navbar-light bg-white position-fixed z-index-3 full-width">
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
    <div class="container justify-content-center cont-single-destinasi">
        <section class="row">
            <section class="col-lg-6 gambar">
                <button class="btn-slide-right position-absolute rounded-circle primary-box-color"
                    id="btn_slide_right"><span class="fa fa-chevron-right accent-text-color"></span></button>
                <button class="btn-slide-left position-absolute rounded-circle primary-box-color"
                    id="btn_slide_left"><span class="fa fa-chevron-left accent-text-color"></span></button>
                <img src="assets/img/hotel/hilton.png" class="full-width object-cover" id="product_img" alt="">
                <div class="grid-many-img img-bawah">
                    <img src="assets/img/hotel/hilton.png" class="small-img active object-cover" alt="">
                    <img src="assets/img/hotel/hilton2.png" class="small-img object-cover" alt="">
                    <img src="assets/img/hotel/hilton3.png" class="small-img object-cover" alt="">
                    <img src="assets/img/hotel/hilton4.png" class="small-img object-cover" alt="">
                </div>
            </section>
            <section class="col-lg-6">
                <div class="card">
                    <div class="card-detail-hotel card-body">
                        <h5 class="card-title text-tebal font-18 mb-0">Hilton Bandung</h5>
                        <section class="row padding-left-18">
                            <img src="assets/icon/rating-icon.png" class="rating-icon " alt="">
                            <img src="assets/icon/rating-icon.png" class="rating-icon " alt="">
                            <img src="assets/icon/rating-icon.png" class="rating-icon " alt="">
                            <img src="assets/icon/rating-icon.png" class="rating-icon " alt="">
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
                                            <img class="fasilitas-icon-detail" src="assets/icon/lift-pink.png" alt="">
                                            <p class="text-biasa mt-2">Lift</p>
                                        </section>
                                        <section class="width-content col text-center fasilitas-detail-hotel card-icon">
                                            <img class="fasilitas-icon-detail" src="assets/icon/parkir-pink.png" alt="">
                                            <p class="text-biasa mt-2">Parkir</p>
                                        </section>
                                        <section class="width-content col text-center fasilitas-detail-hotel card-icon">
                                            <img class="fasilitas-wifi" src="assets/icon/wifi-pink.png" alt="">
                                            <p class="text-biasa mt-2">Wifi</p>
                                        </section>
                                        <section class="width-content col text-center fasilitas-detail-hotel card-icon">
                                            <img class="fasilitas-icon-detail" src="assets/icon/24h-pink.png" alt="">
                                            <p class="text-biasa mt-2">24 jam</p>
                                        </section>
                                        <section class="width-content col text-center fasilitas-detail-hotel card-icon">
                                            <img class="fasilitas-ac" src="assets/icon/ac-pink.png" alt="">
                                            <p class="text-biasa mt-2">AC</p>
                                        </section>

                                    </section>
                                </div>

                                <!-- //*slider 2 -->
                                <div class="carousel-item">
                                    <section class="row  pl-4 pr-4">
                                        <section class="width-content col text-center fasilitas-detail-hotel card-icon">
                                            <img class="fasilitas-restoran" src="assets/icon/restoran.png" alt="">
                                            <p class="text-biasa mt-2">Restoran</p>
                                        </section>
                                        <section class="width-content col text-center fasilitas-detail-hotel card-icon">
                                            <img class="fasilitas-icon-detail" src="assets/icon/kolam-renang.png"
                                                alt="">
                                            <p class="text-biasa mt-2">Kolam renang</p>
                                        </section>
                                        <section class="width-content col text-center fasilitas-detail-hotel card-icon">
                                            <img class="fasilitas-tv" src="assets/icon/tv.png" alt="">
                                            <p class="text-biasa mt-2">TV</p>
                                        </section>
                                        <section class="width-content col text-center fasilitas-detail-hotel card-icon">
                                            <img class="fasilitas-icon-detail" src="assets/icon/single-bed.png" alt="">
                                            <p class="text-biasa mt-2">Single Bed</p>
                                        </section>
                                        <section class="width-content col text-center fasilitas-detail-hotel card-icon">
                                            <img class="fasilitas-icon-detail" src="assets/icon/large-bed.png" alt="">
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

                        <form action="">
                            <div class="mt-lg-3">
                                <label class="mb-lg-n3 text-tebal font-16" for="daterange">Check in - Check out</label>
                                <div class="inputwith_icon mb-5">
                                    <Span>
                                        <img src="{{ asset('assets/icon/calendar.png') }}" alt="">
                                    </Span>
                                    <input id="daterange"type="text" class="form-control searchinput" aria-describedby="emailHelp"
                                        name="daterange" value="01/25/2021 - 02/14/2021">
                                </div>
                            </div>
                            <div class="mt-lg-n4">
                                <label class="text-tebal font-16" for="select">Pilih kamar</label>
                                <div class="inputwith_icon mb-5">
                                    <Span>
                                        <img class="large-bed-icon" src="{{ asset('assets/icon/large-bed.png') }}" alt="">
                                    </Span>
                                    <select class="custom-select second-text-color" id="select">
                                        <option>1 kamar, 1 tamu</option>
                                        <option>2 kamar, 1 tamu</option>
                                        <option>4 kamar, 1 tamu</option>
                                        <option>5 kamar, 2 tamu</option>
                                    </select>
                                </div>
                            </div>
                            <p class="text-biasa font-16 mb-0">Harga</p>
                            <p class="text-tebal font-18 mb-0">Rp. <span class="accent-text-color">1.000.000</span> <span class="text-sedang font-14">/malam</span></p>
                            <button type="submit" class="btn text-sedang font-18 position-absolute pl-3 pr-3">Pesan</button>
                        </form>
                    </div>
                </div>
            </section>
        </section>
    </div>

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
    <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
</body>

</html>