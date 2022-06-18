@extends('layouts.master')

@section('title', 'Stan Foto | ')

@section('main')
    <main id="stan-foto">
        <div class="container py-4 d-flex flex-column">
            <div class="d-flex align-items-center w-100 mb-4">
                <a class="prev-button" href="{{ url('objek-wisata/candi-badut') }}"><i class="fa-solid fa-angle-right"></i></a>
                <h1 class="font-bebasNeue text-center display-3 mb-0 flex-fill">STAN FOTO</h1>
            </div>

            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 px-4 px-lg-0">
                <div class="col d-flex flex-column align-items-center justify-content-center">
                    <div class="d-flex flex-column w-lg-15x h-100 gap-4">
                        <img src="{{ asset('assets/img/IG Tutor_1.jpg') }}" class="img-fluid">
                        <a role="button" href="https://www.instagram.com/wibaku.id/" target="_blank" class="btn bg-gold p-3 br-1 d-flex flex-column align-items-center flex-fill w-100">
                            <p class="m-0">Ikuti Instagram kami</p>
                            <div class="d-flex align-items-center gap-2">
                                <img class="w-2r" src="{{ asset('assets/img/Icon Instagram.png') }}" alt="Icon Instagram">
                                <p class="m-0">@@wibaku.id</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col d-flex flex-column align-items-center justify-content-center mt-3 mt-md-0">
                    <div class="d-flex flex-column w-lg-15x h-100 gap-4"v>
                        <img src="{{ asset('assets/img/IG Tutor_2.jpg') }}" class="img-fluid" >
                        <div class="bg-gold p-3 br-1 d-flex align-items-center flex-fill justify-content-center w-100">
                            <p class="m-0 text-center">Tekan icon filter seperti pada gambar</p>
                        </div>
                    </div>
                </div>
                <div class="col mx-auto d-flex flex-column align-items-center justify-content-center mt-3 mt-lg-0">
                    <div class="d-flex flex-column w-lg-15x h-100 gap-4"v>
                        <img src="{{ asset('assets/img/IG Tutor_3.jpg') }}" class="img-fluid" >
                        <div class="bg-gold p-3 br-1 d-flex align-items-center flex-fill justify-content-center w-100">
                            <p class="m-0 text-center">Pilih BG Candi Badut, dan tekan tombol Try it</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection