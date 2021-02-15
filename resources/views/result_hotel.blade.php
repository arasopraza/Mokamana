@extends('layouts/main')

@section('title', 'Hasil Pencarian')

<body id="loading">

</body>

@section('content')
    <section class="row justify-content-center">
        <form class="form-container-search-hotel">
            <div class="inputwith_icon margin-top-160 search-hotel-box">
                <Span>
                    <img src="assets/icon/search_icon.png" alt="">
                </Span>
                <input type="text" class="form-control search-box searchinput" id="search_hotel"
                    aria-describedby="emailHelp" placeholder="{{ $data->kota }}" autofocus>
            </div>
            <button class="clear-btn rounded-circle clear-btn-search del" id="clear_search"
                onclick="document.getElementById('search_hotel').value=''">
                <img src="assets/icon/clear.png" alt="">
            </button>
        </form>
    </section>

    <section class="row justify-content-center">
        <p id="ket-hasil" class="text-tebal font-26 mt-lg-4 mb-lg-n4">Hasil pencarian hotel di {{ $data->kota }}</p>
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
                            {{-- //*CONTAINER GRID --}}
                            <div class="grid-result-container">

                                <!-- #TODO four points -->
                                @foreach ($dataHotel as $hotels)
                                    <div class="card mb-4 full-width card-hotel ahref-no-decor">
                                        <div class="row no-gutters">
                                            <div class="col-md-4">
                                                <img src="{{ $hotels['photo'] }}" class="card-img" id="card-img" alt="..." name="photo_hotels">
                                            </div>
                                            <a href="/detail-hotel/id-hotel/{{ $hotels['id'] }}" class="col-md-8 ahref-no-decor">
                                                <div class="card-body" id="cardbody">
                                                    <input type="hidden" id="id_hotels" value="{{ $hotels['id'] }}">
                                                    <section class="row">
                                                        <section class="col-lg-7">
                                                            <h5 class="card-title text-tebal font-16 mb-0 text-left second-text-color" id="name_hotels">{{ $hotels['name'] }}</h5>
                                                        </section>
                                                        <section class="col-lg-5">
                                                            <div class="rating-hotel">
                                                                <p class="accent-text-color text-biasa mb-0 font-14 text-right">
                                                                Terkesan
                                                                </p>
                                                                <p class="unactived-text-color text-biasa font-12 text-right">
                                                                    1310
                                                                    review</p>
                                                            </div>
                                                            <p class="primary-text-color text-biasa font-16 rating-hotel-iconn">
                                                                8.4
                                                            </p>
                                                        </section>
                                                    </section>
                                                    <section class="row padding-left-18" id="rating_hotels">
                                                        @switch($hotels['rating'])
                                                            @case(5)
                                                            @for ($i = 1; $i <= 5; $i++)
                                                                <img src="assets/icon/rating-icon.png" class="rating-icon " alt="">
                                                            @endfor
                                                            @break
                                                            @case(4.5)
                                                            @for ($i = 1; $i <= 4; $i++)
                                                                <img src="assets/icon/rating-icon.png" class="rating-icon " alt="">
                                                            @endfor
                                                            <img src="assets/icon/rating-half.png" class="rating-icon" alt="">
                                                            @break
                                                            @case(4)
                                                            @for ($i = 1; $i <= 4; $i++)
                                                                <img src="assets/icon/rating-icon.png" class="rating-icon " alt="">
                                                            @endfor
                                                            @break
                                                            @case(3.5)
                                                            @for ($i = 1; $i <= 3; $i++)
                                                                <img src="assets/icon/rating-icon.png" class="rating-icon " alt="">
                                                            @endfor
                                                            <img src="assets/icon/rating-half.png" class="rating-icon" alt="">
                                                            @break
                                                            @case(3)
                                                            @for ($i = 1; $i <= 3; $i++)
                                                                <img src="assets/icon/rating-icon.png" class="rating-icon " alt="">
                                                            @endfor
                                                            @break
                                                            @case(2)
                                                            @for ($i = 1; $i <= 2; $i++)
                                                                <img src="assets/icon/rating-icon.png" class="rating-icon " alt="">
                                                            @endfor
                                                            @break
                                                            @case(1)
                                                            @for ($i = 1; $i <= 1; $i++)
                                                                <img src="assets/icon/rating-icon.png" class="rating-icon " alt="">
                                                            @endfor
                                                            @break
                                                            @default
                                                            {{ $hotels['rating']}}
                                                        @endswitch
                                                    </section>
                                                    <p class="card-text text-biasa font-14 unactived-text-color mt-1 text-left" id="location_hotels">
                                                        {{ $hotels['location'] }}
                                                    </p>
                                                    <p class="text-biasa mb-lg-1 text-left second-text-color">Fasilitas</p>
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
                                                    <p class="text-tebal font-18 mb-0 mt-3 text-left accent-text-color" id="price_hotels">
                                                        Rp.{{ $harga = $hotels['price'] }}
                                                        <span class="text-sedang font-14 second-text-color">/malam</span></p>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
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
                                                <img src="/assets/img/wisata/kawah-putih.png" class="card-img" id="card-img"
                                                    alt="...">
                                            </div>
                                            <div class="col-md-6">
                                                <div class="card-body" id="cardbody">
                                                    <h5 class="card-title text-tebal font-18 mb-0 text-left">Kawah Putih
                                                    </h5>
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
                                                <img src="/assets/img/wisata/asia-afrika.png" class="card-img" id="card-img"
                                                    alt="...">
                                            </div>
                                            <div class="col-md-6">
                                                <div class="card-body" id="cardbody">
                                                    <h5 class="card-title text-tebal font-18 mb-0 text-left">The Great Asia
                                                        Afrika
                                                    </h5>
                                                    <section class="row padding-left-18">
                                                        <img src="assets/icon/rating-icon.png" class="rating-icon " alt="">
                                                        <img src="assets/icon/rating-icon.png" class="rating-icon " alt="">
                                                        <img src="assets/icon/rating-icon.png" class="rating-icon " alt="">
                                                        <img src="assets/icon/rating-icon.png" class="rating-icon " alt="">
                                                        <img src="assets/icon/rating-half.png" class="rating-icon " alt="">
                                                        <p class="text-biasa font-14 unactived-text-color margin-top-2">(7.551)</p>
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
                                                <img src="/assets/img/wisata/taman-hutan.png" class="card-img" id="card-img"
                                                    alt="...">
                                            </div>
                                            <div class="col-md-6">
                                                <div class="card-body" id="cardbody">
                                                    <h5 class="card-title text-tebal font-18 mb-0 text-left">Taman Hutan
                                                        Raya</h5>
                                                    <section class="row padding-left-18">
                                                        <img src="assets/icon/rating-icon.png" class="rating-icon " alt="">
                                                        <img src="assets/icon/rating-icon.png" class="rating-icon " alt="">
                                                        <img src="assets/icon/rating-icon.png" class="rating-icon " alt="">
                                                        <img src="assets/icon/rating-icon.png" class="rating-icon " alt="">
                                                        <img src="assets/icon/rating-half.png" class="rating-icon " alt="">
                                                        <p class="text-biasa font-14 unactived-text-color margin-top-2">(11.393)</p>
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
                                                <img src="/assets/img/wisata/tangkuban.png" class="card-img" id="card-img"
                                                    alt="...">
                                            </div>
                                            <div class="col-md-6">
                                                <div class="card-body" id="cardbody">
                                                    <h5 class="card-title text-tebal font-18 mb-0 text-left">Tangkuban
                                                        Perahu</h5>
                                                    <section class="row padding-left-18">
                                                        <img src="assets/icon/rating-icon.png" class="rating-icon " alt="">
                                                        <img src="assets/icon/rating-icon.png" class="rating-icon " alt="">
                                                        <img src="assets/icon/rating-icon.png" class="rating-icon " alt="">
                                                        <img src="assets/icon/rating-icon.png" class="rating-icon " alt="">
                                                        <img src="assets/icon/rating-half.png" class="rating-icon " alt="">
                                                        <p class="text-biasa font-14 unactived-text-color margin-top-2">(4.148)</p>
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
                                                <img src="/assets/img/wisata/dago-park.png" class="card-img" id="card-img"
                                                    alt="...">
                                            </div>
                                            <div class="col-md-6">
                                                <div class="card-body" id="cardbody">
                                                    <h5 class="card-title text-tebal font-18 mb-0 text-left">Dago Dreampark
                                                    </h5>
                                                    <section class="row padding-left-18">
                                                        <img src="assets/icon/rating-icon.png" class="rating-icon " alt="">
                                                        <img src="assets/icon/rating-icon.png" class="rating-icon " alt="">
                                                        <img src="assets/icon/rating-icon.png" class="rating-icon " alt="">
                                                        <img src="assets/icon/rating-icon.png" class="rating-icon " alt="">
                                                        <img src="assets/icon/rating-half.png" class="rating-icon " alt="">
                                                        <p class="text-biasa font-14 unactived-text-color margin-top-2">(15.285)</p>
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
                                                <img src="/assets/img/wisata/kampung-tulip.png" class="card-img" id="card-img"
                                                    alt="...">
                                            </div>
                                            <div class="col-md-6">
                                                <div class="card-body" id="cardbody">
                                                    <h5 class="card-title text-tebal font-18 mb-0 text-left">Kampoeng Tulip
                                                    </h5>
                                                    <section class="row padding-left-18">
                                                        <img src="assets/icon/rating-icon.png" class="rating-icon " alt="">
                                                        <img src="assets/icon/rating-icon.png" class="rating-icon " alt="">
                                                        <img src="assets/icon/rating-icon.png" class="rating-icon " alt="">
                                                        <img src="assets/icon/rating-icon.png" class="rating-icon " alt="">
                                                        <img src="assets/icon/rating-half.png" class="rating-icon " alt="">
                                                        <p class="text-biasa font-14 unactived-text-color margin-top-2">(3.359)</p>
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
{{-- @push('scripts')
    <script type="text/javascript">
        $('.bookmark-select').click(function(){
            $.ajax({
                'url' : '/bookmark',
                'type' : 'POST',
                'data' : {
                    '_token' : '{{csrf_token()}}',
                    'id_hotel' : $('#id_hotels').val(),
                    'name' : $('#name_hotels').text(),
                    'rating' : $('#rating_hotels').text(),
                    'address' : $('#location_hotels').text(),
                    'price' : $('#price_hotels').text(),
                    'photo' : $('photo_hotels').attr('src'),
                },
                'success' : function(data){
                    //bebas
                    console.log(data);

                    //style

                },
                'error' : function(data){
                    console.log(data);
                }
            })
        })
    </script>
@endpush --}}