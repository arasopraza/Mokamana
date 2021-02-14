@extends('layouts/main')

@section('title', 'Profil')

@section('content')
    <div class="container justify-content-center margin-top-160">
        <section class="row">
            <section class="col-8">
                <form method="POST" action="/users/{{ $user->id }}" class="container-profile-info">    
                    @method('patch')
                    @csrf
                    <p class="text-tebal font-24">Info User</p>   
                    <hr>
                    <div class="form-group row">
                        <label for="inputUsername" class="col-sm-2 col-form-label">Username</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control profile-input input-color" id="inputUsername" value="{{ $user->name }}" name="name">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputNama" class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control profile-input input-color" id="inputNama">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control profile-input input-color" id="inputEmail" value="{{ $user->email }}" name="email">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputDomisili" class="col-sm-2 col-form-label">Domisili</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control profile-input input-color" id="inputEmail">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-info btn-update-profile mt-4 mb-3" onclick="updateprofile()">Ubah Profil</button>

                    <hr>
                    <p class="text-tebal font-24">Password</p> 
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