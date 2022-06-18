@extends('layouts.master')

@section('css')
    <style>
        #highlight {
            background-image: url("assets/img/Candi Badut Hitam & Putih (1920 x 980).png");
            background-size: cover;
            background-color: black;
        }
    </style>
@endsection

@section('main')
    <main id="home_main">
        @if (session()->has('berhasil-pesan-tiket'))
            <script>alert('Tiket berhasil dipesan!');</script>
        @endif
        @if (session()->has('berhasil-keluar'))
            {{-- {{ alert(session('berhasil-keluar')) }} --}}
            <script>
                alert("Berhasil keluar!");
            </script>
        @endif

        {{-- awal highlight --}}
        <section id="highlight" class="highlight min-vh-90 vh-md-90">
            <div class="container h-100 w-100">
                <div class="row h-100 w-100 mx-0">
                    <div
                        class="col-12 col-md-6 order-1 order-md-0 d-flex flex-column justify-content-center align-items-center text-light">
                        {{-- <div style="width: 60%"> --}}
                        <div>
                            {{-- <div class="rounded-3 text-center p-2" style="background-color: #D1B28080;"> --}}
                            <div class="rounded-3 text-center px-2 position-relative">
                                <div class="position-absolute bg-gold opacity-50 h-100 w-100 br-1"></div>
                                <img class="w-75 position-relative py-3" src="{{ asset('assets/img/Indonesia.png') }}"
                                    alt="Indonesia">
                                <p class="position-relative py-3"> Website Candi Badut adalah website yang berisikan
                                    informasi menarik dan pemesanan tiket masuk Candi Badut. Website Candi Badut menjadi
                                    salah satu website yang dapat melestarikan budaya Indonesia melalui objek bangunan.</p>
                            </div>
                            <div class="d-flex pt-4">
                                <a class="btn btn-outline-theme w-50 br-1 page_scroll" href="#testimoni" role="button"
                                    style="margin-right: 20px">Testimoni</a>
                                <a class="btn btn-outline-theme w-50 br-1 page_scroll" href="#fitur" role="button">Fitur</a>
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
        <section id="testimoni" class="testimoni min-vh-90 d-flex align-items-center" style="background-color: #D1B280">
            <div class="container w-100 d-flex flex-column">
                <h1 class="font-bebasNeue text-light display-3 text-center mb-0">TESTIMONI</h1>
                <div class="owl-carousel owl-theme flex-fill text-light text-center">
                    @foreach ($testimoni as $item)
                    <div class="card h-100">
                        <img src="{{ $item['img'] }}" alt="{{ $item['nama'] }} " class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">{{ $item['nama'] }}</h5>
                            <p class="card-text">
                                {{ $item['pesan'] }}
                            </p>
                        </div>
                    </div>                    
                    @endforeach
                </div>
            </div>
        </section>
        {{-- akhir testimoni --}}

        {{-- awal fitur --}}
        <section id="fitur" class="fitur min-vh-90">
            <div class="container text-center d-flex flex-column justify-content-center">
                <h1 class="font-bebasNeue display-3 text-center">FITUR</h1>
                <h4>Apa saja sih fitur yang ada di Candi Badut?</h4>
                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-3">
                    @foreach ($fitur as $item)
                        <div class="col @if ($loop->iteration == 7) offset-lg-2 @endif ">
                            <div class="fitur-item card br-1 my-2 mx-4 mx-md-2 bg-gold">
                                <div class="row g-0 d-flex align-items-center justify-content-center">
                                    <div class="col-md-4 d-flex align-items-center justify-content-center">
                                        <img src="{{ asset($item['img']) }}" class="w-md-75 w-25" alt="...">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h5 class="card-title fw-bold"">{{ $item['nama'] }}</h5>
                                            <p class="card-text">{{ $item['desc'] }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
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

        $(document).ready(function() {

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
@endsection