@extends('layouts.master')

@section('main')
<main id="login_main" class="vh-90 position-relative">
    <!-- start of content -->
    <img class="position-absolute w-100 h-100" src="https://www.tempatwisata.pro/users_media/3092/Candi-Badut.jpg" alt="">
    <div class="h-100 container-fluid position-relative text-light d-flex flex-column align-items-center justify-content-center">
        <h1 class="logo_wibaku">WIBAKU</h1>
        <h3 class="text-center">Wisata Bangunan Kuno</p>                
        <!-- <form class="flex-column justify-content-center align-items-center w-75 w-md-20x m-auto p-4 border border-light br-2"> -->
        <form class="p-4 border border-light br-2 w-100" style="max-width: 420px; font-size: medium;">
            <p class="h4 text-center">Masuk ke Akun Anda</p>
            <div class="form-group mb-1 text-left">
                <label for="Email">Email atau No Handphone</label>
                <input type="email" class="form-control rounded-pill" id="Email" aria-describedby="emailHelp" placeholder="wibaku@gmail.com atau +6281234567890">
            </div>
            <div class="form-group text-left mt-2">
                <label for="Password">Password</label>
                <div class="d-flex align-items-center justify-content-center bg-light rounded-pill">
                    <input type="password" class="form-control bg-light border border-0 rounded-pill" id="Password" placeholder="***********">
                    <a id="eye_password" class="btn rounded-pill" href="#" role="button"><i class="fa fa-eye" aria-hidden="true"></i></a>
                </div>
            </div>
            <p class="text-center">Belum punya akun? <a class="text-light active m-0 p-0 text-uppercase" href="#"><small>Daftar</small></a></p>
            <button type="submit" class="btn btn-light w-100 bg-light text-dark rounded-pill"><p class="m-0">MASUK</p></button>
        </form>
    </div>
    <!-- end of content -->
</main>
@endsection

@section('script')
    <script>
        $(document).ready(function () {         
            // set active dan aria-current
            $(".nav-link:contains(Login)").attr("aria-current", "page");
            $(".nav-link:contains(Login)").addClass("active");

        });
    </script>
@endsection