<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">


    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/template.css')}}">
    <link rel="icon" href="{{ asset('assets/icon/logo_title.png') }}" type="image/icon type">
    <title>serunya liburan</title>
</head>

<body>

    <!-- //*navbar -->

    <nav class="navbar navbar-expand-lg navbar-light bg-white">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="assets/img/logo.png" class="logo-navbar" alt="">
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
                    <a class="nav-link pl-4 profile-icon" href="{{ url('/logout') }}" tabindex="-1" aria-disabled="true">
                        <button type="submit" class="btn btn-block text-biasa mt-n1">Keluar</button>
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <!-- //* end navbar -->

    <!-- //* Jumbroton-->
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <section class="row">
                <section class="col-lg-6">
                    <h1 class="text-tebal font-40 mt-lg-5">EH <span class="accent-text-color">{{ Auth::user()->name }}</span>,<br>Mau kemana
                        nih?
                    </h1>
                    <div class="box-form primary-box-color p-4">
                        <form class="p-2">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Tujuan</label>
                                <input type="email" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" placeholder="Cari Destinasi">

                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Check In - Check Out</label>
                                <input type="password" class="form-control checkIN-form" id="exampleInputPassword1">
                            </div>
                            <div class="form-group-transportasi">
                                <label for="exampleInputPassword1">Transportasi</label>
                                <select name="" id="" class="transportasi">
                                    <option value="Pesawat">Pesawat</option>
                                    <option value="kereta">Kereta</option>
                                    <option value="Bus">Bus</option>
                                </select>
                            </div>
                            <div class="form-group margin-bottom-35">
                                <label for="exampleInputPassword1">Tamu & Kamar</label>
                                <select name="" id="" class="tamukamar">
                                    <option value="">1 tamu, 1 kamar</option>
                                    <option value="">1 tamu, 2 kamar</option>
                                    <option value="">1 tamu, 4 kamar</option>
                                    <option value="">2 tamu, 5 kamar</option>
                                </select>                              
                            </div>
                            <button type="submit" class="btn btn-block text-biasa btn-form-index">Pesan</button>
                        </form>

                    </div>
                </section>


                <section class="col-lg-6 pl-4">
                    <div class="grid-hero pt-lg-4">
                        <img src="assets/img/labuan-bajo.png" alt="">
                        <img src="assets/img/bali.png" alt="">
                        <img src="assets/img/raja-ampat.png  " alt="">
                    </div>
                    <div class="location-box">
                        <div class="font-20 text-biasa position-absolute accent-text-color primary-box-color pl-4 pr-4">
                            Labuan
                            Bajo</div>
                        <div class="font-20 text-biasa position-absolute accent-text-color primary-box-color pl-4 pr-4">
                            Raja Ampat
                        </div>
                        <div
                            class="font-20 text-biasa position-absolute accent-text-color primary-box-color pt-2 pl-4 pr-4 pb-2">
                            Bali</div>
                    </div>
                </section>
            </section>
            <!-- <h1 class="display-4">Fluid jumbotron</h1>
            <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p> -->
        </div>
    </div>

    <!-- //* end jumbotron -->

    <!-- //* Container CONTENT -->

    <div class="container justify-content-center">

        <!-- //*Destinasi Populer -->
        <section class="row">
            <section class="col-lg-12 mt-lg-5 mb-lg-5">
                <p class="judul text-tebal font-30">Destinasi Populer</p>
                <a href="populer"
                    class=" accent-text-color mr-5 font-20 position-absolute selengkapnya">Selengkapnya</a>
            </section>
        </section>
        <section class="row pb-xl-5">
            <section class="col-lg-4">
                <a href="#" class="ahref-no-decor second-text-color ">
                    <div class="card">
                        <div class="border-image">
                            <img src="assets/img/labuan-bajo.png" class="card-img-top" alt="..."></div>
                        <div class="card-body">
                            <h5 class="card-title text-sedang">Labuan Bajo</h5>
                            <div class="pulau">
                                <p class="card-text text-biasa font-14">Nusa Tenggara Timur</p>
                            </div>
                            <p class="text-kecil font-12 mt-4 mb-n1">Mulai dari</p>
                            <p class="text-tebal mb-0">Rp <span class="warna-harga">600.000</span><span
                                    class="text-biasa kecil">/org</span>
                            </p>
                            <div class="rating">
                                <img src="assets/icon/rating-icon.png" alt="">
                                <p class="text-sedang">4.9</p>
                            </div>
                            <div class="text-right btn-card">
                                <a href="#" class="btn btn-primary text-biasa">Pesan</a>
                            </div>
                        </div>
                    </div>
                </a>


            </section>
            <section class="col-lg-4">
                <a href="#" class="ahref-no-decor second-text-color ">
                    <div class="card border-image">
                        <img src="assets/img/raja-ampat.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Raja Ampat</h5>
                            <div class="pulau">
                                <p class="card-text text-biasa">Papua Barat</p>
                            </div>
                            <p class="text-kecil font-12 mt-4 mb-n1">Mulai dari</p>
                            <p class="text-tebal mb-0">Rp <span class="warna-harga">600.000</span><span
                                    class="text-biasa kecil">/org</span>
                            </p>
                            <div class="rating">
                                <img src="assets/icon/rating-icon.png" alt="">
                                <p class="text-sedang">4.9</p>
                            </div>
                            <div class="text-right btn-card">
                                <a href="#" class="btn btn-primary text-biasa">Pesan</a>
                            </div>
                        </div>
                    </div>
                </a>

            </section>
            <section class="col-lg-4">
                <a href="#" class="ahref-no-decor second-text-color">
                    <div class="card border-image">
                        <img src="assets/img/bali.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Bali</h5>
                            <div class="pulau">
                                <p class="card-text text-biasa">Bali</p>
                            </div>
                            <p class="text-kecil font-12 mt-4 mb-n1">Mulai dari</p>
                            <p class="text-tebal mb-0">Rp <span class="warna-harga">600.000</span><span
                                    class="text-biasa kecil">/org</span>
                            </p>
                            <div class="rating">
                                <img src="assets/icon/rating-icon.png" alt="">
                                <p class="text-sedang">4.9</p>
                            </div>
                            <div class="text-right btn-card">
                                <a href="#" class="btn btn-primary text-biasa">Pesan</a>
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
                <p class="text-biasa font-22 subtitle-santai">Nikmati beragam apartemen <br>dan villa di <span
                        class="accent-text-color text-tebal">Mokamana</span></p>
            </section>
            <section class="col-lg-3 text-center">
                <img src="assets/img/villa.png" alt="" class="img-villa">
                <p class="text-biasa font-18 mt-2">17.000 lebih Villa</p>
            </section>
            <section class="col-lg-4 text-center">
                <img src="assets/img/apartemen.png" alt="" class="img-apartemen">
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
                <img src="assets/img/galery.png" class="img-galery" alt="">
            </section>
            <section class="col-lg-6">
                <h1 class="galery-title font-34 text-tebal">Serunya liburan bersama <span
                        class="accent-text-color text-tebal">Mokamana</span></h1>
                <a href="login.html" class="ahref-no-decor">
                    <button type="submit" class="btn text-sedang btn-galery">Ke Galeri</button>
                </a>
            </section>
        </section>
    </div>

    <!-- //* END Galery -->



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




    <!-- //* END CONTENT -->

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
</body>

</html>