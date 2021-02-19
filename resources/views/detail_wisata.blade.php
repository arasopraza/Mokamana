@extends('layouts/main')

@section('title', 'Detail Wisata')

@section('content')
    <!-- //*content -->
    <div class="container justify-content-center cont-single-destinasi">
        <section class="row">
            @foreach ($detailWisata as $wisata)
            <section class="col-lg-6 gambar">
                <img src="{{ $wisata['foto'] }}" class="full-width object-cover" id="product_img" alt="">
            </section>
            <section class="col-lg-6">
                <div class="card">
                    <div class="card-detail-hotel card-body">
                        <h5 class="card-title text-tebal font-20 mb-1">{{ $wisata['nama'] }}</h5>
                        <p class="card-text text-biasa font-14 unactived-text-color mt-lg-2">
                            {{ $wisata['alamat'] }}
                        </p>
                        <p class="font-16 mt-1 text-biasa">
                            {{ $wisata['deskripsi'] }}
                        </p>
                    </div>
                </div>
            </section>
            @endforeach   
        </section>
    </div>
@endsection