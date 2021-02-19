@extends('layouts/main')

@section('title', 'Detail Wisata')

@section('content')
    <!-- //*content -->
    <div class="container justify-content-center cont-single-destinasi">
        <section class="row">
            @foreach ($detailWisata as $wisata)
            <section class="col-lg-6 gambar">
                <button class="btn-slide-right position-absolute rounded-circle primary-box-color"
                        id="btn_slide_right"><span class="fa fa-chevron-right accent-text-color"></span></button>
                <button class="btn-slide-left position-absolute rounded-circle primary-box-color"
                    id="btn_slide_left"><span class="fa fa-chevron-left accent-text-color"></span></button>
                <img src="{{ $wisata['foto'] }}" class="full-width object-cover" id="product_img" alt="">
                <div class="grid-many-img img-bawah">
                    <img src="assets/img/wisata/kampung-tulip.png" class="small-img active object-cover" alt="">
                    <img src="assets/img/wisata/kampung-tulip2.png" class="small-img object-cover" alt="">
                    <img src="assets/img/wisata/kampung-tulip3.png" class="small-img object-cover" alt="">
                    <img src="assets/img/wisata/kampung-tulip4.png" class="small-img object-cover" alt="">
                </div>
            </section>
            <section class="col-lg-6">
                <div class="card">
                    <div class="card-detail-hotel card-body">
                        <h5 class="card-title text-tebal font-18 mb-1">{{ $wisata['nama'] }}</h5>
                        <p class="card-text text-biasa font-14 unactived-text-color mt-lg-2">
                            {{ $wisata['alamat'] }}
                        </p>
                        {{ $wisata['deskripsi'] }}
                    </div>
                </div>
            </section>
            @endforeach   
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