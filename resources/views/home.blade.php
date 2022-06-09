@extends('layouts.master')

@section('main')
    <main id="home_main">

        {{-- awal highlight --}}
        <section id="highlight" class="highlight min-vh-90 vh-md-90">
            <div class="container h-100 w-100">
                <div class="row h-100 w-100 mx-0">
                    <div class="col-12 col-md-6 order-1 order-md-0 d-flex flex-column justify-content-center align-items-center text-light">
                        {{-- <div style="width: 60%"> --}}
                        <div>
                            <div class="rounded-3 text-center p-2" style="background-color: #D1B28080;">
                                 <img class="w-75" src="{{ asset('assets/img/Indonesia.png') }}" alt="Indonesia">
                                 <p>     Website Candi Badut adalah website yang berisikan informasi menarik dan pemesanan tiket masuk Candi Badut. Website Candi Badut menjadi salah satu website yang dapat melestarikan budaya Indonesia melalui objek bangunan.</p>
                            </div>
                            <div class="page_scroll d-flex pt-4">
                                <a class="btn btn-outline-theme w-50 br-1" href="#testimoni" role="button" style="margin-right: 20px">Testimoni</a>
                                <a class="btn btn-outline-theme w-50 br-1" href="#fitur" role="button">Fitur</a>
                            </div>
                        </div>
                    </div>
                    <div class="col order-0 order-md-1 d-flex justify-content-center justify-content-md-end">
                        {{-- <h1 class="align-self-end mb-md-5 font-bebasNeue display-1" style="color: #D1B280;">CANDI BADUT</h1> --}}
                        <h1 class="align-self-end mb-md-5 font-bebasNeue display-1 text-grey text-md-gold">CANDI BADUT</h1>
                    </div>
                </div>
            </div>
        </section>
        {{-- akhir highlight --}}
        
        {{-- awal testimoni --}}
        <section id="testimoni" class="testimoni min-vh-90 vh-md-90" style="background-color: #D1B280">
            <div class="container w-100 h-100 d-flex flex-column">
                <h1 class="text-center text-light">TESTIMONI</h1>
                <div class="d-flex justify-content-center align-items-center mt-2 h-100 w-100">
                    <div class="w-100 d-flex justify-content-center align-items-center" style="height: max-content">
                        <a href="#"><i class="fa-solid fa-angle-right fa-3x mx-2" style="color: rgba(8, 7, 6, 0.5); transform: rotate(180deg)"></i></a>
                        <div class="row row-cols-12 row-cols-md-6 row-cols-lg-4 d-flex justify-content-center">
                            @foreach ($testimoni as $item)            
                                @if ($loop->iteration == 1)     
                                    <div class="col d-flex justify-content-center">
                                        <div class="card py-2 d-flex flex-column align-items-center justify-content-start text-light br-1 mx-0 mx-md-2 my-2 my-md-0" style="min-width: 15rem; background-color: rgba(8, 7, 6, 0.5)">
                                        {{-- <div class="card py-2 d-flex flex-column align-items-center justify-content-start text-light br-1 mx-0 mx-md-2 my-2 my-md-0" style="background-color: rgba(8, 7, 6, 0.5)"> --}}
                                            <img src="{{ $item['img'] }}" class="card-img-top rounded-circle" alt="..." style="width: 10rem; height: 10rem;">
                                            <div class="card-body flex-grow-0">
                                                <h3 class="card-title text-center">{{ $item['nama'] }}</h3>
                                                <p class="card-text text-center">
                                                    {{ $item['pesan'] }}
                                                </p>
                                            </div>
                                        </div>                            
                                    </div>                                    
                                @endif        
                            @endforeach
                        </div>
                        <a href="#"><i class="fa-solid fa-angle-right fa-3x mx-2" style="color: rgba(8, 7, 6, 0.5)"></i></a>                        
                    </div>
                </div>
            </div>
        </section>
        {{-- akhir testimoni --}}

        {{-- awal fitur --}}
        <section id="fitur" class="fitur min-vh-90">
            <div class="container text-center d-flex flex-column justify-content-center">
                <h1>FITUR</h1>
                <h4>Apa saja sih fitur yang ada di WiBaKu?</h4>
                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-3">
                  @foreach ($fitur as $item)
                    <div class="col @if ($loop->iteration == 7) offset-lg-2 @endif ">
                        <a class="card btn br-1 my-2 mx-4 mx-md-2" style="background-color: #D1B280;">
                            <div class="row g-0 d-flex align-items-center justify-content-center">
                            <div class="col-md-4 d-flex align-items-center justify-content-center">
                                <img src="{{ asset($item['img']) }}" class="w-md-75 w-25" alt="..." >
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                <h5 class="card-title fw-bold"">{{ $item['nama'] }}</h5>
                                <p class="card-text">{{ $item['desc'] }}</p>
                                </div>
                            </div>
                            </div>
                        </a>
                    </div>                      
                  @endforeach 
                </div>
            </div>
        </section>
        {{-- akhir fitur --}}

    </main>
@endsection

@section('script')
    <script>
        // body
        // $("body").addClass("posittion-relative");
        // $("body").attr("data-bs-spy", "scroll");
        // $("body").attr("data-bs-target", ".page_scroll");
        // $("body").attr("data-bs-offset", "70");

        $(document).ready(function () {         
            var navHeight = Number($("nav").css("height").replace("px", ""));      
            
            // ketika elemen page_scroll diklik
            $(".page_scroll a").click(function (e) { 
                e.preventDefault();
                var offset_tujuan = $($(this).attr('href')).offset().top;
                $(window).scrollTop(offset_tujuan-navHeight);
            });

            // set active dan aria-current
            $(".nav-link:contains(Halaman Utama)").attr("aria-current", "page");
            $(".nav-link:contains(Halaman Utama)").addClass("active");

            // samakan ukuran card pada section fitur
            // var higher = 0;
            // var x = $('#home_main #fitur div.container div.row .card');
            // for (let index = 0; index < x.length; index++) {
            //     const element = x[index];
            //     var element_height = Number($(element).css("height").replace('px', ''));
            //     if (element_height > higher) {
            //         higher = element_height;
            //     }
            // }
            // if (higher > 0) {
            //     x.css("height", higher);
            // }

            // menambah kelas pada card no 7 pada section fitur ketika pada layar sedang
            // if (screen.width > 768) {
            //     // $("#fitur > div > div > div:nth-child(7)").addClass('offset-2');
            //     alert(screen.width);
            // }
        });
    </script>

    <style>
        #highlight {
            background-image: url("assets/img/Candi Badut Hitam & Putih (1920 x 980).png");
            background-size: cover;
            background-color: black;
        }
    </style>
@endsection