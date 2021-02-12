@extends('layouts/main')

@section('title', 'Profil')

@section('navbar')
<nav id="navbar" class="navbar navbar-expand-lg navbar-light bg-white position-fixed z-index-3 full-width">
    <div class="container">
        <a class="navbar-brand" href="/">
            <img src="{{ asset('assets/img/logo.png') }}" style="width: 150px;" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ml-auto navbar-config text-sedang">
                <a class="nav-link pl-4 pt-3" href="galeri">Galeri<span class="sr-only">(current)</span></a>
                <a class="nav-link pl-4 pt-3" href="">Favorit</a>
                <a class="nav-link pl-4 pt-3" href="/tentang-kami">Tentang Kami</a>
                <a class="nav-link pl-4 pt-3 profile-icon" href="/login" tabindex="-1" aria-disabled="true">
                    <button type="submit" class="btn btn-block text-biasa mt-n1">Masuk</button>
                </a>
            </div>
        </div>
    </div>
</nav>
@endsection

@section('content')
    <div class="container justify-content-center margin-top-160">
        <section class="row">
            <section class="col-4 text-center">
                <div class="container-profile text-center mr-0 ml-auto">
                    <button type="file" class="no-border button-file-profile">
                        <img src="assets/icon/profile-icon.png" alt="">
                    </button>
                    <p class="text-center text-sedang font-22 mt-4 mb-0">Argya Aulia Fauzandika</p>
                    <p class="text-center unactived-text-color text-biasa font-16">Palembang</p>
                </div>               
            </section>
            <section class="col-8">
                <form class="container-profile-info">    
                    <p class="text-tebal font-24">Info User</p>   
                    <hr>
                    <div class="form-group row">
                        <label for="inputUsername" class="col-sm-2 col-form-label">Username</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control profile-input input-color" id="inputUsername" value="Gya" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputNama" class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control profile-input input-color" id="inputNama" value="Argya Aulia Fauzandika">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control profile-input input-color" id="inputEmail" value="ardian20146@gmail.com" >
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputDomisili" class="col-sm-2 col-form-label">Domisili</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control profile-input input-color" id="inputEmail" value="Palembang" >
                        </div>
                    </div>
                    <button type="submit" class="btn btn-info btn-update-profile mt-4 mb-3" onclick="updateprofile()">Ubah Profil</button>

                    <hr>
                    <p class="text-tebal font-24">Password</p> 
                    <div class="form-group row">
                        <label for="inputold" class="col-sm-2 col-form-label">Password Lama</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control profile-input input-color mt-2" id="inputold">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputnew" class="col-sm-2 col-form-label">Password Baru</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control profile-input input-color mt-2" id="inputnew">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputconfirm" class="col-sm-2 col-form-label">Konfirmasi Password</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control profile-input input-color mt-2" id="inputconfirm">
                        </div>
                    </div>
                    <button type="button" class="btn btn-info btn-update-profile mt-4 mb-3" onclick="resetpw()">Ubah Password</button>
                    
                    
                </form>

            </section>
        </section>
    
    </div>
    <script>
        function resetpw(){
            swal({
                title: "Password telah di Update",
                icon: "success",
                button: "ok",
            });
        }

        function updateprofile(){
            swal({
                title: "Profile berhasil di Update",
                icon: "success",
                button: "ok",
            });
        }
    </script>
@endsection