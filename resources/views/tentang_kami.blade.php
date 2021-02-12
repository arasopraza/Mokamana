@extends('layouts/main')

@section('title', 'Mokamana')

@section('content')
<div class="jumbotron jumbotron-fluid jumbotron-about">
    <div class="container">
      <h1 class="display-4 text-tebal font-50 primary-text-color z-index-1">Bersama kami,</h1>
      <h1 class="display-4 text-tebal font-50 primary-text-color z-index-1">Liburan jadi mudah</h1>
      <img src="{{ asset('assets/icon/mouse-scroll.png') }}" class="z-index-1 position-absolute icons" alt="">
    </div>
</div>

<div class="container justify-content-center mb-lg-5">
    <h1 data-aos="fade-right" class="text-tebal font-50 margin-about" id="trigger1">Siapa <span class="accent-text-color">kami</span> ?</h1>
    <p data-aos="fade-up" class="text-sedang font-26 margin-sub"
    data-aos="fade-up"
    data-aos-anchor="#trigger1"
    data-aos-anchor-placement="top-center">Kami baru saja mulai di tahun 2021, Tujuan kami ingin mengakomodasi akses terbaik serta mempermudah pemesanan travel online melalui web</p>


    <h1 data-aos="fade-right" class="text-tebal font-50 margin-about" id="trigger2">Kenapa pilih <span class="accent-text-color">kami</span> ?</h1>
    <p data-aos="fade-up" class="text-sedang font-26 margin-sub"
     data-aos="fade-up"
    data-aos-anchor="#trigger2"
    data-aos-anchor-placement="top-center">Kami menyediakan pelayanan terbaik walaupun kadang tamunya nyusahin</p>
    
    
    <h1 data-aos="fade-right" class="text-tebal font-50 margin-about mb-lg-5" id="trigger-tim">Kenalan yuk<br> dengan tim <span class="accent-text-color">kami</span> !</h1>

    <section data-aos="fade-up" class="row row-img margin-img" id="trigger-img">
        
        <section class="col-lg-6 pl-5 pr-5" 
        data-aos="fade-right"
        data-aos-anchor="#trigger-tim"
        data-aos-anchor-placement="top-top">
        <div class="img-box-about">
            <img src="assets/img/galeri12.png"  class="img-box-about object-cover" alt="">
        </div>
        </section>

        <section class="col-lg-6 pl-5 pr-5" 
        data-aos="fade-up"
        data-aos-anchor="#trigger-tim"
        data-aos-anchor-placement="top-top">
            <p class="mt-4 mb-0 text-tebal font-26 mr-auto">Arsy Opraza Akma</p>
            <p class="mt-1 text-sedang unactived-text-color font-16 mr-auto">Full stack web developer</p>
        </section>

    </section>

    <section data-aos="fade-up" class="row row-img margin-img" id="trigger-img1">
        
        <section class="col-lg-6 pl-5 pr-5" 
        data-aos="fade-right"
        data-aos-anchor="#trigger-img"
        data-aos-anchor-placement="top-top">
            <p class="mt-4 mb-0 text-tebal font-26 text-right">Argya Aulia Fauzandika</p>
            <p class="mt-1 text-sedang unactived-text-color font-16 mr-auto text-right">UI/UX Designer & Frontend Web Developer</p>
        </section>
        <section class="col-lg-6 pl-5 pr-5" 
        data-aos="fade-up"
        data-aos-anchor="#trigger-img"
        data-aos-anchor-placement="top-top">
        <div class="img-box-about">
            <img src="assets/img/galeri4.png"  class=" img-box-about object-cover" alt="">
        </div>
        </section>

    </section>

    <section data-aos="fade-up" class="row row-img margin-img" id="trigger-2">
        
        <section class="col-lg-6 pl-5 pr-5" 
        data-aos="fade-right"
        data-aos-anchor="#trigger-img1"
        data-aos-anchor-placement="top-top">
        <div class="img-box-about">
            <img src="assets/img/galeri7.png"  class="img-box-about object-cover" alt="">
        </div>
        </section>

        <section class="col-lg-6 pl-5 pr-5" 
        data-aos="fade-up"
        data-aos-anchor="#trigger-img"
        data-aos-anchor-placement="top-top">
            <p class="mt-4 mb-0 text-tebal font-26 mr-auto">Adhira Fahri Gathan</p>
            <p class="mt-1 text-sedang unactived-text-color font-16 mr-auto">UI Designer</p>
        </section>

    </section>
    <div id="kontak">
    <h1 data-aos="fade-right" class="text-tebal font-50 margin-about mb-lg-5" id="trigger3"><span class="accent-text-color">kami</span> ada di</h1>
    <div data-aos="fade-up" class="text-sedang font-26 margin-sub"
    data-aos-anchor="#trigger3"
    data-aos-anchor-placement="top-center">
        <p>Jl. Ahmad Dahlan no. 77 B , Kebayoran Baru,Jakarta, 33453
            DKI Jakarta (ini alamat random)</p>
        <p>021-798210091 (nomor random)</p>
    </div>
 </div>


    
</div>



@endsection 
