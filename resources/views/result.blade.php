@extends('layouts/main')

@section('title', 'Hasil Pencarian')

@section('navbar')

<?php
function get_CURL($url)
{
    $curl = curl_init();
    curl_setopt_array($curl, [
        CURLOPT_URL => $url,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "GET",
        CURLOPT_HTTPHEADER => [
            "x-rapidapi-host: hotels4.p.rapidapi.com",
            "x-rapidapi-key: 113cb26e4amsh499fd121b18f736p140474jsne9bd9414c208"
        ],
    ]);
    $response = curl_exec($curl);
    $err = curl_error($curl);
    curl_close($curl);
    return json_decode($response, TRUE);
}

$cityName = $data->cari;
$getHotel = get_CURL("https://hotels4.p.rapidapi.com/locations/search?query=$cityName&locale=en_US");
$hotel = $getHotel["suggestions"][1]["entities"];

foreach ($hotel as $hotels) {
    $id = $hotels["destinationId"];
}
$getDetailHotel = get_CURL("https://hotels4.p.rapidapi.com/properties/get-details?id=$id&locale=en_US&currency=USD&checkOut=2020-01-15&adults1=1&checkIn=2020-01-08");

$getPhotoHotel = get_CURL("https://hotels4.p.rapidapi.com/properties/get-hotel-photos?id=$id");
$url = $getPhotoHotel["hotelImages"][0]["baseUrl"];
$sizeImage = 'z';
$urlPhoto = str_replace("{size}", $sizeImage, $url);

?>

<nav id="navbar" class="navbar navbar-expand-lg navbar-light bg-white position-fixed z-index-3 full-width">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="assets/img/logo.png" style="width: 150px;" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ml-auto navbar-config text-sedang font-18">
                <a class="nav-link pl-4" href="#">Galeri<span class="sr-only">(current)</span></a>
                <a class="nav-link pl-4" href="#">Kontak</a>
                <a class="nav-link pl-4" href="#">Tentang Kami</a>
                <a class="nav-link pl-4 profile-icon" href="/logout" tabindex="-1" aria-disabled="true">
                    <button type="submit" class="btn btn-block text-biasa mt-n1">Keluar</button>
                </a>
            </div>
        </div>
    </div>
</nav>
@endsection

@section('content')
<section class="row justify-content-center">
    <form class="form-container-search-hotel">
        <div class="inputwith_icon margin-top-160 search-hotel-box">
            <Span>
                <img src="assets/icon/search_icon.png" alt="">
            </Span>
            <input type="text" class="form-control search-box searchinput" id="search_hotel" aria-describedby="emailHelp" placeholder="Mau kemana nih?" value="Bandung" autofocus>
        </div>
        <button class="clear-btn rounded-circle clear-btn-search del" id="clear_search" onclick="document.getElementById('search_hotel').value=''">
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
                        <?php foreach ($hotel as $hotels) : ?>
                            {{-- //*CONTAINER GRID --}}
                            <div class="grid-result-container">

                                <!-- #TODO four points -->
                                <button type="submit" class="card mb-3 full-width card-hotel">
                                    <div class="row no-gutters">
                                        <div class="col-md-4">
                                            <img src="<?= $urlPhoto; ?>" class="card-img full-height" alt="...">
                                        </div>
                                        <div class="col-md-8">
                                            <div class="card-body position-relative">
                                                <section class="row">
                                                    <section class="col-lg-7">
                                                        <h5 class="card-title text-tebal font-16 mb-0 text-left"><?= $hotels["name"]; ?></h5>
                                                    </section>
                                                    <section class="col-lg-5">
                                                        <div class="rating-hotel">
                                                            <p class="accent-text-color text-biasa mb-0 font-14 text-right">
                                                                Terkesan
                                                            </p>
                                                            <p class="unactived-text-color text-biasa font-12 text-right">229
                                                                review</p>

                                                        </div>
                                                        <p class="primary-text-color text-biasa font-16 rating-hotel-iconn">8.4
                                                        </p>
                                                    </section>
                                                </section>

                                                <section class="row padding-left-18">
                                                    <img src="assets/icon/rating-icon.png" class="rating-icon " alt="">
                                                    <img src="assets/icon/rating-icon.png" class="rating-icon " alt="">
                                                    <img src="assets/icon/rating-icon.png" class="rating-icon " alt="">
                                                    <img src="assets/icon/rating-icon.png" class="rating-icon " alt="">
                                                </section>
                                                <p class="card-text text-biasa font-14 unactived-text-color mt-1 text-left">
                                                    <?= $getDetailHotel["data"]["body"]["pdpHeader"]["hotelLocation"]["locationName"]; ?>
                                                </p>


                                                <p class="text-biasa mb-lg-1 text-left">Fasilitas</p>
                                                <section class="row padding-left-18 fasilitas height-20">
                                                    <img class="margin-right-15 fasilitas-icon" data-toggle="tooltip" data-placement="top" title="Lift" src="assets/icon/lift-pink.png" alt="">
                                                    <img class="margin-right-15 fasilitas-icon" data-toggle="tooltip" data-placement="top" title="Parkir" src="assets/icon/parkir-pink.png" alt="">
                                                    <img class="margin-right-15" data-toggle="tooltip" data-placement="top" title="Wifi" src="assets/icon/wifi-pink.png" alt="">
                                                    <img class="margin-right-15 fasilitas-icon" data-toggle="tooltip" data-placement="top" title="24 jam Resepsionis" src="assets/icon/24h-pink.png" alt="">
                                                    <p class="unactived-text-color text-tebal more-fasilitas font-12" data-toggle="tooltip" data-placement="top" data-html="true" title="Restoran <br> AC <br> Kolam renang <br> TV <br> Single Bed <br> Large Bed">
                                                        6+
                                                    </p>
                                                </section>
                                                <p class="text-tebal font-18 mb-0 mt-3 text-left accent-text-color">Rp 1.000.000<span class="text-sedang font-14 second-text-color">/malam</span></p>
                                            </div>
                                        </div>
                                    </div>
                                </button>

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

                                <!-- //*ISI CARD HOTEL -->

                                <!-- #TODO aryaduta -->
                                <button type="submit" class="card mb-4 full-width card-hotel">
                                    <div class="row no-gutters">
                                        <div class="col-md-4">
                                            <img src="/assets/img/hotel/aryaduta.png" class="card-img full-height" alt="...">
                                        </div>
                                        <div class="col-md-8">
                                            <div class="card-body">
                                                <section class="row">
                                                    <section class="col-lg-7">
                                                        <h5 class="card-title text-tebal font-16 mb-0 text-left"><?= $hotels["name"]; ?></h5>
                                                    </section>
                                                    <section class="col-lg-5">
                                                        <div class="rating-hotel">
                                                            <p class="accent-text-color text-biasa mb-0 font-14 text-right">
                                                                Terkesan
                                                            </p>
                                                            <p class="unactived-text-color text-biasa font-12 text-right">1310
                                                                review</p>

                                                        </div>
                                                        <p class="primary-text-color text-biasa font-16 rating-hotel-iconn">8.4
                                                        </p>
                                                    </section>
                                                </section>
                                                <section class="row padding-left-18">
                                                    <img src="assets/icon/rating-icon.png" class="rating-icon " alt="">
                                                    <img src="assets/icon/rating-icon.png" class="rating-icon " alt="">
                                                    <img src="assets/icon/rating-icon.png" class="rating-icon " alt="">
                                                    <img src="assets/icon/rating-icon.png" class="rating-icon " alt="">
                                                </section>
                                                <p class="card-text text-biasa font-14 unactived-text-color mt-1 text-left">
                                                    <?= $getDetailHotel["data"]["body"]["pdpHeader"]["hotelLocation"]["locationName"]; ?>
                                                </p>


                                                <p class="text-biasa mb-lg-1 text-left">Fasilitas</p>
                                                <section class="row padding-left-18 fasilitas height-20">
                                                    <img class="margin-right-15 fasilitas-icon" data-toggle="tooltip" data-placement="top" title="Lift" src="assets/icon/lift-pink.png" alt="">
                                                    <img class="margin-right-15 fasilitas-icon" data-toggle="tooltip" data-placement="top" title="Parkir" src="assets/icon/parkir-pink.png" alt="">
                                                    <img class="margin-right-15" data-toggle="tooltip" data-placement="top" title="Wifi" src="assets/icon/wifi-pink.png" alt="">
                                                    <img class="margin-right-15 fasilitas-icon" data-toggle="tooltip" data-placement="top" title="24 jam Resepsionis" src="assets/icon/24h-pink.png" alt="">
                                                    <p class="unactived-text-color text-tebal more-fasilitas font-12" data-toggle="tooltip" data-placement="top" data-html="true" title="Restoran <br> AC <br> Kolam renang <br> TV <br> Single Bed <br> Large Bed">
                                                        6+
                                                    </p>
                                                </section>
                                                <p class="text-tebal font-18 mb-0 mt-3 text-left accent-text-color">Rp 1.000.000<span class="text-sedang font-14 second-text-color">/malam</span></p>
                                            </div>
                                        </div>
                                    </div>
                                </button>
                            </div>
                        <?php endforeach; ?>
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
                            <div class="grid-result-container">

                                <!-- #TODO Isi Deskripsi -->
                                <!-- //*Kawah Putih -->
                                <button type="submit" class="card mb-3 full-width card-hotel">
                                    <div class="row no-gutters">
                                        <div class="col-md-6">
                                            <img src="/assets/img/wisata/kawah-putih.png" class="card-img full-height" alt="...">
                                        </div>
                                        <div class="col-md-6">
                                            <div class="card-body">
                                                <h5 class="card-title text-tebal font-18 mb-0 text-left">Kawah Putih</h5>
                                                <section class="row padding-left-18">
                                                    <img src="assets/icon/rating-icon.png" class="rating-icon " alt="">
                                                    <img src="assets/icon/rating-icon.png" class="rating-icon " alt="">
                                                    <img src="assets/icon/rating-icon.png" class="rating-icon " alt="">
                                                    <img src="assets/icon/rating-icon.png" class="rating-icon " alt="">
                                                    <img src="assets/icon/rating-half.png" class="rating-icon " alt="">
                                                    <p class="text-biasa font-14 unactived-text-color margin-top-2">
                                                        (4.499)</p>
                                                </section>
                                                <p class="card-text text-biasa font-14 unactived-text-color mt-lg-n2 text-left">
                                                    Bandung,
                                                    Jawa Barat
                                                </p>
                                                <p class="text-biasa"></p>

                                            </div>
                                        </div>
                                    </div>
                                </button>

                                <!-- #TODO Isi Deskripsi -->
                                <!-- //*asia afrika -->
                                <button type="submit" class="card mb-3 full-width card-hotel">
                                    <div class="row no-gutters">
                                        <div class="col-md-6">
                                            <img src="/assets/img/wisata/asia-afrika.png" class="card-img full-height" alt="...">
                                        </div>
                                        <div class="col-md-6">
                                            <div class="card-body">
                                                <h5 class="card-title text-tebal font-18 mb-0 text-left">The Great Asia Afrika
                                                </h5>
                                                <section class="row padding-left-18">
                                                    <img src="assets/icon/rating-icon.png" class="rating-icon " alt="">
                                                    <img src="assets/icon/rating-icon.png" class="rating-icon " alt="">
                                                    <img src="assets/icon/rating-icon.png" class="rating-icon " alt="">
                                                    <img src="assets/icon/rating-icon.png" class="rating-icon " alt="">
                                                    <img src="assets/icon/rating-half.png" class="rating-icon " alt="">
                                                    <p class="text-biasa font-14 unactived-text-color margin-top-2">
                                                        (7.551)</p>
                                                </section>
                                                <p class="card-text text-biasa font-14 unactived-text-color mt-lg-n2 text-left">
                                                    Bandung,
                                                    Jawa Barat
                                                </p>
                                                <p class="text-biasa"></p>

                                            </div>
                                        </div>
                                    </div>
                                </button>
                                <!-- #TODO Isi Deskripsi -->
                                <!-- //*taman hutan raya -->
                                <button type="submit" class="card mb-3 full-width card-hotel">
                                    <div class="row no-gutters">
                                        <div class="col-md-6">
                                            <img src="/assets/img/wisata/taman-hutan.png" class="card-img full-height" alt="...">
                                        </div>
                                        <div class="col-md-6">
                                            <div class="card-body">
                                                <h5 class="card-title text-tebal font-18 mb-0 text-left">Taman Hutan Raya</h5>
                                                <section class="row padding-left-18">
                                                    <img src="assets/icon/rating-icon.png" class="rating-icon " alt="">
                                                    <img src="assets/icon/rating-icon.png" class="rating-icon " alt="">
                                                    <img src="assets/icon/rating-icon.png" class="rating-icon " alt="">
                                                    <img src="assets/icon/rating-icon.png" class="rating-icon " alt="">
                                                    <img src="assets/icon/rating-half.png" class="rating-icon " alt="">
                                                    <p class="text-biasa font-14 unactived-text-color margin-top-2">
                                                        (11.393)</p>
                                                </section>
                                                <p class="card-text text-biasa font-14 unactived-text-color mt-lg-n2 text-left">
                                                    Bandung,
                                                    Jawa Barat
                                                </p>
                                                <p class="text-biasa"></p>

                                            </div>
                                        </div>
                                    </div>
                                </button>

                                <!-- #TODO Isi Deskripsi -->
                                <!-- //*Tangkuban Perahu -->
                                <button type="submit" class="card mb-3 full-width card-hotel">
                                    <div class="row no-gutters">
                                        <div class="col-md-6">
                                            <img src="/assets/img/wisata/tangkuban.png" class="card-img full-height" alt="...">
                                        </div>
                                        <div class="col-md-6">
                                            <div class="card-body">
                                                <h5 class="card-title text-tebal font-18 mb-0 text-left">Tangkuban Perahu</h5>
                                                <section class="row padding-left-18">
                                                    <img src="assets/icon/rating-icon.png" class="rating-icon " alt="">
                                                    <img src="assets/icon/rating-icon.png" class="rating-icon " alt="">
                                                    <img src="assets/icon/rating-icon.png" class="rating-icon " alt="">
                                                    <img src="assets/icon/rating-icon.png" class="rating-icon " alt="">
                                                    <img src="assets/icon/rating-half.png" class="rating-icon " alt="">
                                                    <p class="text-biasa font-14 unactived-text-color margin-top-2">
                                                        (4.148)</p>
                                                </section>
                                                <p class="card-text text-biasa font-14 unactived-text-color mt-lg-n2 text-left">
                                                    Bandung,
                                                    Jawa Barat
                                                </p>
                                                <p class="text-biasa"></p>

                                            </div>
                                        </div>
                                    </div>
                                </button>
                                <!-- #TODO Isi Deskripsi -->
                                <!-- //*Dago dreampark-->
                                <button type="submit" class="card mb-3 full-width card-hotel">
                                    <div class="row no-gutters">
                                        <div class="col-md-6">
                                            <img src="/assets/img/wisata/dago-park.png" class="card-img full-height" alt="...">
                                        </div>
                                        <div class="col-md-6">
                                            <div class="card-body">
                                                <h5 class="card-title text-tebal font-18 mb-0 text-left">Dago Dreampark</h5>
                                                <section class="row padding-left-18">
                                                    <img src="assets/icon/rating-icon.png" class="rating-icon " alt="">
                                                    <img src="assets/icon/rating-icon.png" class="rating-icon " alt="">
                                                    <img src="assets/icon/rating-icon.png" class="rating-icon " alt="">
                                                    <img src="assets/icon/rating-icon.png" class="rating-icon " alt="">
                                                    <img src="assets/icon/rating-half.png" class="rating-icon " alt="">
                                                    <p class="text-biasa font-14 unactived-text-color margin-top-2">
                                                        (15.285)</p>
                                                </section>
                                                <p class="card-text text-biasa font-14 unactived-text-color mt-lg-n2 text-left">
                                                    Bandung,
                                                    Jawa Barat
                                                </p>
                                                <p class="text-biasa"></p>

                                            </div>
                                        </div>
                                    </div>
                                </button>
                                <!-- #TODO Isi Deskripsi -->
                                <!-- //*Kampung Tulip -->
                                <button type="submit" class="card mb-3 full-width card-hotel">
                                    <div class="row no-gutters">
                                        <div class="col-md-6">
                                            <img src="/assets/img/wisata/kampung-tulip.png" class="card-img full-height" alt="...">
                                        </div>
                                        <div class="col-md-6">
                                            <div class="card-body">
                                                <h5 class="card-title text-tebal font-18 mb-0 text-left">Kampoeng Tulip</h5>
                                                <section class="row padding-left-18">
                                                    <img src="assets/icon/rating-icon.png" class="rating-icon " alt="">
                                                    <img src="assets/icon/rating-icon.png" class="rating-icon " alt="">
                                                    <img src="assets/icon/rating-icon.png" class="rating-icon " alt="">
                                                    <img src="assets/icon/rating-icon.png" class="rating-icon " alt="">
                                                    <img src="assets/icon/rating-half.png" class="rating-icon " alt="">
                                                    <p class="text-biasa font-14 unactived-text-color margin-top-2">
                                                        (3.359)</p>
                                                </section>
                                                <p class="card-text text-biasa font-14 unactived-text-color mt-lg-n2 text-left">
                                                    Bandung,
                                                    Jawa Barat
                                                </p>
                                                <p class="text-biasa"></p>

                                            </div>
                                        </div>
                                    </div>
                                </button>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </form>

    </section>
</section>
<!-- //* end content -->
@endsection