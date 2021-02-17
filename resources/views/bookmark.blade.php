@extends('layouts/main')

@section('title', 'Mokamana')

@section('content')
    <div class="container justify-content-center">
        
        <section class="row">
            <div class="margin-top-160">
                <p class="text-sedang font-24">Destinasi Favorit Saya</p>
                <hr>
                <div class="grid-result-container">
                    {{-- card --}}
                    @foreach ($hotel as $items)
                    <div class="card mb-4 full-width card-hotel ahref-no-decor">
                    <input type="hidden" id="id_hotel" value="{{ $items->id}}">    
                        <div class="row no-gutters">
                            <div class="col-md-4">
                                <img src="{{ $items->photo1}}" class="card-img" id="card-img" alt="...">
                            </div>
                            <div class="cont-icon-bookmark-title bookmark-select">
                                <img src="{{ asset('assets/icon/bookmark.png') }}" alt="" class="icon-remove-title" id="icon-bookmark">
                            </div>
                            <a href="#" class="col-md-8 ahref-no-decor">
                                <div class="card-body" id="cardbody">
                                    <section class="row">
                                        <section class="col-lg-7">
                                            <h5 class="card-title text-tebal font-16 mb-0 text-left second-text-color">{{ $items->name }}</h5>
                                        </section>
                                        <section class="col-lg-5">
                                        
                                        </section>
                                    </section>
                                    <section class="row padding-left-18">
                                        <img src="assets/icon/rating-icon.png" class="rating-icon " alt="">
                                        <img src="assets/icon/rating-icon.png" class="rating-icon " alt="">
                                        <img src="assets/icon/rating-icon.png" class="rating-icon " alt="">
                                        <img src="assets/icon/rating-icon.png" class="rating-icon " alt="">
                                        
                                    </section>
                                    <p class="card-text text-biasa font-14 unactived-text-color mt-1 text-left">
                                        {{ $items->address}}
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
                                    <p class="text-tebal font-18 mb-0 mt-3 text-left accent-text-color">
                                        {{ $items->price}}
                                        <span class="text-sedang font-14 second-text-color">/malam</span></p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        @endforeach
                    </div>
            </div>
        </section>
    </div>
@endsection
@push('scripts')
    <script type="text/javascript">
        $(".bookmark-select").click(function(){
            var id_hotel = $('#id_hotel').val();
            $.ajax({
                url  : 'bookmark/'+id_hotel,
                type : 'DELETE',
                data : {
                    '_token'  : '{{csrf_token()}}',
                    'id-hotel': id_hotel
                },
                success: function (){
                console.log("it works!");
                swal('Berhasil menghapus bookmark','', 'success');

                const icon = document.getElementById('icon-bookmark');
                    if(icon.style.filter === "grayscale(100%)"){
                        icon.style.setProperty("filter", "none", "important");
                        icon.style.setProperty("opacity", "1", "important");
                    }else{
                        icon.style.setProperty("filter", "grayscale(100%)", "important");
                        icon.style.setProperty("opacity", "0.5", "important");
                    }
                },
                'error' : function(data){
                console.log(data);  
                }
            });
        });
    </script>
@endpush