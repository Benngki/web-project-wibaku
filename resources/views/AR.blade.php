@extends('layouts.master')

@section('title', 'Augmented Reality | ')

@section('main')
    <main id="augmented-reality">
        {{-- start of section AR Instagram --}}
        <section id="augmented-reality-instagram">
            <div class="container py-4 d-flex flex-column">
                <div class="d-flex align-items-center w-100 mb-4">
                    <a class="prev-button" href="{{ url('objek-wisata/candi-badut') }}"><i class="fa-solid fa-angle-right"></i></a>
                    <h1 class="font-bebasNeue text-center display-3 mb-0 flex-fill">AUGMENTED REALITY INSTAGRAM</h1>
                </div>
    
                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 px-4 px-lg-0">
                    <div class="col d-flex flex-column align-items-center justify-content-center">
                        <div class="d-flex flex-column w-lg-15x h-100 gap-4">
                            <img src="{{ asset('assets/img/IG Tutor_1.jpg') }}" class="img-fluid">
                            <a class="btn bg-gold p-3 br-1 d-flex flex-column align-items-center flex-fill w-100" target="_blank" href="https://www.instagram.com/wibaku.id/" role="button">
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
                            <img src="{{ asset('assets/img/IG Tutor_4.jpg') }}" class="img-fluid" >
                            <div class="bg-gold p-3 br-1 d-flex align-items-center flex-fill justify-content-center w-100">
                                <p class="m-0 text-center">Pilih AR Candi Badut, dan tekan tombol Try it</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- end of section AR Instagram --}}
        
        {{-- start of section AR sketchfab --}}
        <section id="augmented-reality-sketchfab">
            <div class="container py-4 d-flex flex-column">
                <div class="d-flex align-items-center w-100 mb-4">
                    <h1 class="font-bebasNeue text-center display-3 mb-0 flex-fill">AUGMENTED REALITY SKETCHFAB</h1>
                </div>
    
                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 px-4 px-lg-0">
                    <div class="col d-flex flex-column align-items-center justify-content-center">
                        <div class="d-flex flex-column h-100 gap-4">
                            <img src="{{ asset('assets/img/Sketchfab Tutor_1.png') }}" class="img-fluid">
                            <a class="btn bg-gold p-3 br-1 d-flex flex-column align-items-center flex-fill w-100" role="button" href="https://sketchfab.com/" target="_blank">
                                <p class="m-0 text-center">Buka website dari sketchfab</p>
                                <div class="d-flex align-items-center gap-2">
                                    <img class="w-2r" src="{{ asset('assets/img/Logo Sketchfab.png') }}" alt="Icon Instagram">
                                    <p class="m-0 fw-bold h5">Sketchfab</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col d-flex flex-column align-items-center justify-content-center mt-3 mt-md-0">
                        <div class="d-flex flex-column h-100 gap-4"v>
                            <img src="{{ asset('assets/img/Sketchfab Tutor_2.png') }}" class="img-fluid" >
                            <div class="bg-gold p-3 br-1 d-flex align-items-center flex-fill justify-content-center w-100">
                                <p class="m-0 text-center">Ketik Candi Badut, dan lakukan pencarian</p>
                            </div>
                        </div>
                    </div>
                    <div class="col mx-auto d-flex flex-column align-items-center justify-content-center mt-3 mt-lg-0">
                        <div class="d-flex flex-column h-100 gap-4"v>
                            <img src="{{ asset('assets/img/Sketchfab Tutor_3.png') }}" class="img-fluid" >
                            <div class="bg-gold p-3 br-1 d-flex align-items-center flex-fill justify-content-center w-100">
                                <p class="m-0 text-center">Tekan Candi Badut by WiBaKu, dan AR siap digunakan</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- end of section AR sketchfab --}}

        <section id="3d-model">
            <div class="container d-flex flex-column justify-content-center align-items-center py-4">
                <p class="fw-bold">LINK 3D MODEL SKETCHFAB</p>
                <a class="btn d-flex align-items-center gap-2 bg-gold py-3 px-4 br-1" role="button" href="https://sketchfab.com/3d-models/candi-badut-by-wibaku-76a820b339744386ae70257647244aba" target="_blank">
                    <img class="w-2r" src="{{ asset('assets/img/Logo Sketchfab.png') }}" alt="Icon Instagram">
                    <p class="m-0 fw-bold h5">Sketchfab</p>
                </a>
            </div>
        </section>
    </main>
@endsection