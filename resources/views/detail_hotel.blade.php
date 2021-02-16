@extends('layouts/main')

@section('title', 'Detail Hotel')

<html>
    <body class="detail-hotel-body">
        
    </body>
</html>

@section('content')
    <!-- //*content -->
    <div class="container justify-content-center cont-single-destinasi">
        <div class="col-12 mb-5 card card-detail-hotel">
            @csrf
            @foreach ($detailHotel as $hotel)
            <input type="hidden" id="id_hotel" value="{{$hotel['id']}}">
            <h5 class="card-title text-tebal font-24 mb-0" id="name_hotel">{{ $hotel['name'] }}</h5>
            @endforeach
            {{-- <h5 class="card-title text-tebal font-18 mb-0">Hilton Bandung</h5> --}}
            <section class="row padding-left-18" id="rating_hotel">
                
                @switch($hotel['rating'])
                    @case(5)
                    @for ($i = 1; $i <= 5; $i++)
                        <img src="{{ asset('assets/icon/rating-icon.png') }}" class="rating-icon " alt="">
                    @endfor
                    @break
                    @case(4.5)
                    @for ($i = 1; $i <= 4; $i++)
                        <img src="{{ asset('assets/icon/rating-icon.png') }}" class="rating-icon " alt="">
                    @endfor
                    <img src="{{ asset('assets/icon/rating-half.png') }}" class="rating-icon" alt="">
                    @break
                    @case(4)
                    @for ($i = 1; $i <= 4; $i++)
                        <img src="{{ asset('assets/icon/rating-icon.png') }}" class="rating-icon " alt="">
                    @endfor
                    @break
                    @case(3.5)
                    @for ($i = 1; $i <= 3; $i++)
                        <img src="{{ asset('assets/icon/rating-icon.png') }}" class="rating-icon " alt="">
                    @endfor
                    <img src="{{ asset('assets/icon/rating-half.png') }}" class="rating-icon" alt="">
                    @break
                    @case(3)
                    @for ($i = 1; $i <= 3; $i++)
                        <img src="{{ asset('assets/icon/rating-icon.png') }}" class="rating-icon " alt="">
                    @endfor
                    @break
                    @case(2)
                    @for ($i = 1; $i <= 2; $i++)
                        <img src="{{ asset('assets/icon/rating-icon.png') }}" class="rating-icon " alt="">
                    @endfor
                    @break
                    @case(1)
                    @for ($i = 1; $i <= 1; $i++)
                        <img src="{{ asset('assets/icon/rating-icon.png') }}" class="rating-icon " alt="">
                    @endfor
                    @break
                    @default
                    {{ $hotel['rating']}}
                @endswitch
                <p>( {{($hotel['rating'])}} )</p>
            </section>
            <p class="card-text text-biasa font-14 unactived-text-color mt-lg-2 mb-0" id="address_hotel">
            {{ $hotel['address'] }}
            </p>
            {{-- <div class="rating-detail-hotel">
                <p class="accent-text-color text-biasa mb-0 font-14 text-right">
                    Terkesan
                </p>
                <p class="unactived-text-color text-biasa font-12 text-right">1310
                    review</p>
                <p class="primary-text-color text-biasa font-16 rating-hotel-iconn">8.4
                    </p>
            </div> --}}
            <div class="rating-detail-hotel-title">
                <p class="accent-text-color text-biasa mb-0 font-16 text-right mb-0">
                Terkesan
                </p>    
                <p class="unactived-text-color text-biasa font-14 text-right mb-0">
                    1310
                    review</p>
            </div>
            <p class="primary-text-color text-biasa font-18 rating-hotel-title-iconn mb-0">
                8.4
            </p>
            <div class="cont-icon-bookmark-title bookmark-select">
                <img src="{{ asset('assets/icon/bookmark.png') }}" alt="" class="icon-bookmark-title" id="icon-bookmark">
            </div>

            <hr>      


            <section class="row">
                <section class="col-lg-8 gambar">
                    <div id="carouselExampleIndicators" class="carousel slide slider-detail-hotel" data-interval="false">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active img-indicator">
                                <img src="{{ $hotel['photo1'] }}" class="d-block w-100 small-img" alt="..." id="photo1">
                            </li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1" class="img-indicator">
                                <img src="{{ $hotel['photo2'] }}" class="d-block w-100 small-img" alt="..." id="photo2">
                            </li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2" class="img-indicator">
                                <img src="{{ $hotel['photo3'] }}" class="d-block w-100 small-img" alt="..." id="photo3">
                            </li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="3" class="img-indicator">
                                <img src="{{ $hotel['photo4'] }}" class="d-block w-100 small-img" alt="..." id="photo4">
                            </li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="{{ $hotel['photo1'] }}" class="d-block w-100 img-slider" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ $hotel['photo2'] }}" class="d-block w-100 img-slider" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ $hotel['photo3'] }}" class="d-block w-100 img-slider" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ $hotel['photo4'] }}" class="d-block w-100 img-slider" alt="...">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="sr-only">Next</span>
                        </a>
                      </div>
                </section>

                <section class="col-lg-4">
                    <div class="card">
                        <div class="card-detail-cuaca card-body">
                            <section class="row no-gutters mb-lg-4">
                                <section class="col-md-12 fit-height">
                                    <div class="container-suhu text-center">
                                        <p class="font-16 text-sedang pt-3">Suhu disekitar hotel</p>
                                        <p class="font-30 text-tebal accent-text-color mb-0" id="temperature_hotel">{{ $hotel['temperature'] }} °C</p>
                                        <p class="font-14 text-biasa unactived-text-color mb-0">Berawan</p>
                                    </div>
                                </section>                        
                            </section>


                            <section class="row mb-3 ml-5">
                                <div class="lembab">
                                    <section class="row">
                                        <img src="{{ asset('assets/icon/lembab.png') }}" class="icon-cuaca mr-3 mt-1" alt="">
                                        <div class="keterangan-suhu">
                                            <p class="mb-0 text-biasa unactived-text-color font-14">Kelembaban</p>
                                            <p class="mb-0 text-tebal unactived-text-color font-18" id="humidity_hotel">{{ $hotel['humidity'] }} %</p>
                                        </div>   
                                    </section>                                    
                                </div>  
                            </section>

                            <section class="row mb-3 ml-5">
                                <div class="angin">
                                    <section class="row">
                                        <img src="{{ asset('assets/icon/angin.png') }}" class="icon-cuaca mr-3 mt-1" alt="">
                                        <div class="keterangan-suhu">
                                            <p class="mb-0 text-biasa unactived-text-color font-14">Laju Angin</p>
                                            <p class="mb-0 text-tebal unactived-text-color font-18" id="windspeed_hotel">{{ $hotel['windspeed'] }} m/s</p>
                                        </div>   
                                    </section>                                    
                                </div>  
                            </section>

                        </div>
                    </div>
                </section>


            </section>
            <br>
            <br>
            <br>
            <br>
            <hr>

            <p class="text-sedang font-18">Fasilitas</p>
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
            
            <p class="font-16 text-sedang mb-0 mt-3">Harga Mulai dari</p>
            <p class="text-tebal font-20 mb-0 text-left accent-text-color" id="price_hotel">
                {{ $hotel['price'] }}
                <span class="text-sedang font-14 second-text-color">/malam</span>
            </p>

        </div>

        <div class="card card-detail-hotel">
            <p class="text-sedang font-18 mb-4">Info Lokasi</p>
            <div id="map-container-google-1" class="z-depth-1-half map-container" style="height: 500px;">
                <iframe width="100%" height="600" frameborder="0" scrolling="no"  marginheight="0" marginwidth="0" 
            src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=<?= $hotel['latitude']?>,%20<?= $hotel['longitude'] ?>+(Mokamana)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed">
        </iframe>
              </div>
        </div>

    </div>
@endsection
@push('scripts')
    <script type="text/javascript">
        $('.bookmark-select').click(function(){
            $.ajax({
                'url' : '/bookmark',
                'type' : 'POST',
                'data' : {
                    '_token' : '{{csrf_token()}}',
                    'id_hotel' : $('#id_hotel').val(),
                    'name' : $('#name_hotel').text(),
                    'rating' : $('#rating_hotel').text(),
                    'address' : $('#address_hotel').text(),
                    'price' : $('#price_hotel').text(),
                    'photo1' : $('#photo1').attr('src'),
                    'photo2' : $('#photo2').attr('src'),
                    'photo3' : $('#photo3').attr('src'),
                    'photo4' : $('#photo4').attr('src'),
                    'temperature' : $('#temperature_hotel').text(),
                    'humidity' : $('#humidity_hotel').text(),
                    'windspeed' : $('#windspeed_hotel').text()
                },
                'success' : function(data){
                    //bebas
                    console.log(data);
                    swal('Berhasil menambahkan bookmark','', 'success');
                    
                    const icon = document.getElementById('icon-bookmark');
                    if(icon.style.filter === "grayscale(100%)"){
                        icon.style.setProperty("filter", "none", "important");
                        icon.style.setProperty("opacity", "1", "important");
                    }else{
                        icon.style.setProperty("filter", "grayscale(100%)", "important");
                        icon.style.setProperty("opacity", "0.5", "important");
                    }
                    
                    //style


                },
                'error' : function(data){
                    console.log(data);
                }
            })
        })
    </script>
@endpush