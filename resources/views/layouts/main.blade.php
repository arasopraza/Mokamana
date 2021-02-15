<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/template.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">  
    <link rel="icon" href="{{ asset('assets/icon/logo_title.png') }}" type="image/icon type">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <title>@yield('title')</title>
</head>

<body>

    <!-- //*navbar -->
    <nav id="navbar" class="navbar navbar-expand-lg navbar-light bg-white position-fixed z-index-5 full-width">
        <div class="container">
            <a class="navbar-brand" href="/">
                <img src="{{ asset('assets/img/logo.png') }}" style="width: 150px;" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ml-auto navbar-config text-sedang">
                    <a class="nav-link pl-4 pt-3" href="/galeri">Galeri<span class="sr-only">(current)</span></a>
                    <a class="nav-link pl-4 pt-3" href="/favorit-saya">Destinasi Favorit</a>
                    <a class="nav-link pl-4 pt-3" href="/tentang-kami">Tentang Kami</a>
                    @guest
                    <a class="nav-link pl-4 pt-3 profile-icon" href="{{ route('login') }}" tabindex="-1" aria-disabled="true">
                        <button type="submit" class="btn btn-block text-biasa mt-n1">Login</button>
                    </a>
                    @else
                    <div class="dropdown">
                        <button class="dropdown-toggle profile-icon primary-box-color no-border pl-4 pt-3" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img src="{{asset('assets/icon/profile-icon.png') }}" alt="">
                        </button>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item text-biasa" href="/users/{{ Auth::user()->id }}/edit-profile">Lihat Profil</a>
                            <a class="dropdown-item ahref-no-decor text-biasa accent-text-color" href="{{ route('logout') }}">Logout</a>
                        </div>
                    </div>
                    @endguest
                </div>
            </div>
        </div>
    </nav>
    <!-- //* end navbar -->
 
    <!-- //* Jumbroton-->
    @yield('content')
    <!-- //*FOOTER -->
    <div class="container justify-content-center margin-footer" data-aos="fade">
        <section class="row ">
            <section class="col-lg-4">
                <img src="{{ asset('assets/img/logo.png') }}" class="logo-footer" alt="">
                <p class="accent-text-color text-tebal font-18">2021 © Copyright</p>
            </section>
            <section class="col-lg-2 mt-2">
                <div class="cont-footer">
                    <a href="#" class="border-footer second-text-color text-biasa font-16">Beranda</a>
                </div>
                <div class="cont-footer-text-panjang mt-4">
                    <a href="#" class="border-footer second-text-color text-biasa font-16">Kontak<span class="opacity-0">..</span>kami</a>
                </div>
            </section>
            <section class="col-lg-2 mt-2">
                <div class="cont-footer">
                    <a href="#" class="border-footer second-text-color text-biasa font-16">Galeri</a>
                </div>
                <div class="cont-footer-text-panjang mt-4">
                    <a href="#" class="border-footer second-text-color text-biasa font-16">Tentang<span class="opacity-0">..</span>kami</a>
                </div>
            </section>
            <section class="col-lg-4 mt-2">
                <p class="font-16 text-sedang">Ikuti kami</p>
                <a href="#" class="ahref-no-decor">
                    <img src="{{ asset('assets/icon/fb.png') }}" alt="" class="icon-footer">
                </a>
                <a href="https://www.instagram.com/gya.af/" target="blank" class="ahref-no-decor">
                    <img src="{{ asset('assets/icon/ig.png') }}" alt="" class="icon-footer">
                </a>

            </section>
        </section>

        <hr class="accent-box-color mt-5">
    </div>
    <!-- //* END FOOTER -->

    <!-- //* END CONTENT -->

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>
    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    @stack('scripts')
</body>

</html>