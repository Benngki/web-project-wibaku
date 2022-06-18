@extends('layouts.master')
@section('title', 'Tentang Kami | ')

@section('main')
    <main>
        
<!-- start of content -->

    <section id="tentang_kami" class="min-vh-90 px-4 px-md-0 bg-light d-flex">
        <div class="container d-flex flex-column justify-content-center py-4">
            <h1 class="display-3 font-bebasNeue text-center mb-3">Tentang Kami</h1>
            <div class="row">
                <div class="col-12 col-lg-4 d-flex align-items-center">
                    <img class="w-100 br-1" src="{{ asset('assets/img/Candi Badut (1) Hitam _ Putih.png') }}" alt="Benteng Rotterdam">
                </div>
                <div class="col">
                    <p class="mb-0 text-justify pt-2 pt-lg-0">&emsp;&emsp;&emsp;WiBaKu Team adalah pendiri dari website Candi Badut yang menyediakan jasa pemesanan tiket dan informasi menarik lainnya. Website Candi Badut menjadi salah satu website di Indonesia yang mendukung kelestarian budaya bersejarah melalui objek bangunan. Selain itu, Website Candi Badut juga membuat model 3 dimensi dari objek wisata Candi Badut. Maka dari itu, Website Candi Badut bisa mengenalkan tempat atau objek bangunan candi kepada generasi muda dan mengikuti perkembangan zaman yang membutuhkan visualisasi dalam bentuk model 3 dimensi. Dengan demikian, Website Candi Badut tidak hanya berlaku untuk kategori dewasa saja, melainkan semua umur bisa menikmati setiap layanan di website kami. </p>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-12 col-lg-9 order-last order-lg-first text-justify">
                    <p class="pt-2 pt-lg-0">&emsp;&emsp;&emsp;Website Candi Badut menyediakan fitur yang beragam untuk memudahkan dan membantu pengguna dalam menggunakan layanan kami. Fitur seperti stan foto, augmented Reality, dan tur virtual 360° membantu pengguna untuk melihat objek wisata Candi Badut secara virtual sebelum berkunjung ke objek wisata Candi Badut di dunia nyata.</p>
                    <div class="d-flex align-items-center gap-3">
                        <button value="{{ asset('assets/audio/tentang-kami.mp3') }}" type="button" class="btn_audio btn border border-3 border-gold px-md-4 py-md-2">
                            <img src="{{ asset('assets/img/Icon Play.png') }}" alt="" style="width: 15px; margin-right: 0.5rem">
                            Audio
                        </button>
                        <a href="#pendiri" role="button" class="page_scroll btn border border-3 border-gold px-md-4 py-md-2">Pendiri</a>
                    </div>
                </div>
                <div class="col d-flex align-items-center">
                    <img class="w-100 br-1" src="{{ asset('assets/img/Candi Badut (2) Hitam _ Putih.png') }}" alt="Lawang Sewu">
                </div>
            </div>
        </div>
    </section>

    <section id="pendiri" class="bg-light min-vh-90 px-4 px-md-0 vh-lg-90">
        <div class="container h-100 d-flex flex-column pb-4 h-100">
            <h1 class="text-center font-bebasNeue display-4">PENDIRI</h1>

            <div class="flex-fill d-flex align-items-center">
                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 text-break">
                    <div class="col">
                        <div class="card bg-gold br-1 h-100">
                            <img class="card-img-top" src="{{ asset('assets/img/Hengki.png') }}" alt="Benediktus Hengki Setiawan">
                            <div class="card-body">
                                <h5 class="card-title fw-bold text-center">Benediktus Hengki Setiawan<br>(2502025302)</h5>
                                <ul class="p-0">
                                    <li class="d-flex align-items-center">
                                        <img class="h-2r w-2r mr-0_5r" src="{{ asset('assets/img/Icon Whatsapp.png') }}" alt="Icon Whatsapp">
                                        <p class="mb-0"><span class="fw-bold">Whatsapp</span><br>+6281257522018</p>
                                    </li>
                                    <li class="d-flex align-items-center">
                                        <img class="h-2r w-2r mr-0_5r" src="{{ asset('assets/img/Icon Email.png') }}" alt="Icon Email">
                                        <p class="mb-0"><span class="fw-bold">Email</span><br>benediktus.setiawan@binus.ac.id</p>
                                    </li>
                                    <li class="d-flex align-items-center">
                                        <img class="h-2r w-2r mr-0_5r" src="{{ asset('assets/img/Icon Instagram Hitam.png') }}" alt="Icon Instagram">
                                        <p class="mb-0"><span class="fw-bold">Instagram</span><br>@@_hengkistwn</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col mt-2 mt-lg-0">
                        <div class="card bg-gold br-1 h-100 justify-content-center">
                            <img class="card-img-top" src="{{ asset('assets/img/Kevin.png') }}" alt="Benediktus Hengki Setiawan">
                            <div class="card-body">
                                <h5 class="card-title fw-bold text-center">Kevin Aurelius Suryono<br>(2540129281)</h5>
                                <ul class="p-0">
                                    <li class="d-flex align-items-center">
                                        <img class="h-2r w-2r mr-0_5r" src="{{ asset('assets/img/Icon Whatsapp.png') }}" alt="Icon Whatsapp">
                                        <p class="mb-0"><span class="fw-bold">Whatsapp</span><br>+6287853190255</p>
                                    </li>
                                    <li class="d-flex align-items-center">
                                        <img class="h-2r w-2r mr-0_5r" src="{{ asset('assets/img/Icon Email.png') }}" alt="Icon Email">
                                        <p class="mb-0"><span class="fw-bold">Email</span><br>kevin.suryono@binus.ac.id</p>
                                    </li>
                                    <li class="d-flex align-items-center">
                                        <img class="h-2r w-2r mr-0_5r" src="{{ asset('assets/img/Icon Instagram Hitam.png') }}" alt="Icon Instagram">
                                        <p class="mb-0"><span class="fw-bold">Instagram</span><br>@@kevinas27</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col mt-2 mt-lg-0">
                        <div class="card bg-gold br-1 h-100 justify-content-center">
                            <img class="card-img-top" src="{{ asset('assets/img/Reza.png') }}" alt="Benediktus Hengki Setiawan">
                            <div class="card-body">
                                <h5 class="card-title fw-bold text-center">Muhammad Reza Faturrahman<br>(2501977626)</h5>
                                <ul class="p-0">
                                    <li class="d-flex align-items-center">
                                        <img class="h-2r w-2r mr-0_5r" src="{{ asset('assets/img/Icon Whatsapp.png') }}" alt="Icon Whatsapp">
                                        <p class="mb-0"><span class="fw-bold">Whatsapp</span><br>+6281250235831</p>
                                    </li>
                                    <li class="d-flex align-items-center">
                                        <img class="h-2r w-2r mr-0_5r" src="{{ asset('assets/img/Icon Email.png') }}" alt="Icon Email">
                                        <p class="mb-0"><span class="fw-bold">Email</span><br>muhammad.faturrahman002@binus.ac.id</p>
                                    </li>
                                    <li class="d-flex align-items-center">
                                        <img class="h-2r w-2r mr-0_5r" src="{{ asset('assets/img/Icon Instagram Hitam.png') }}" alt="Icon Instagram">
                                        <p class="mb-0"><span class="fw-bold">Instagram</span><br>@@rezaaafatur</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>





            {{-- <div class="card-group text-break">
                <div class="card bg-gold mx-2" style="border-radius: 20px">
                  <img src="{{ asset('assets/img/Hengki.png') }}" class="card-img-top h-2r w-2r align-self-center mt-3" alt="Benediktus Hengki Setiawan" style="width: 10rem; height: auto">
                  <div class="card-body">
                    <h5 class="card-title fw-bold text-center">Benediktus Hengki Setiawan<br>(2502025302)</h5>
                    <ul class="bg-transparent p-0 mb-0">
                        <li class="d-flex align-items-center">
                            <img class="h-2r w-2r mr-0_5r" src="{{ asset('assets/img/Icon Whatsapp.png') }}" alt="Icon Whatsapp">
                            <p class="mb-0"><span class="fw-bold">Whatsapp</span><br>+6281257522018</p>
                        </li>
                        <li class="d-flex align-items-center">
                            <img class="h-2r w-2r mr-0_5r" src="{{ asset('assets/img/Icon Email.png') }}" alt="Icon Email">
                            <p class="mb-0"><span class="fw-bold">Email</span><br>benediktus.setiawan@binus.ac.id</p>
                        </li>
                        <li class="d-flex align-items-center">
                            <img class="h-2r w-2r mr-0_5r" src="{{ asset('assets/img/Icon Instagram Hitam.png') }}" alt="Icon Instagram">
                            <p class="mb-0"><span class="fw-bold">Instagram</span><br>@@_hengkistwn</p>
                        </li>
                      </ul>
                  </div>
                </div>
                <div class="card bg-gold mx-2" style="border-radius: 20px">
                  <img src="{{ asset('assets/img/Kevin.png') }}" class="card-img-top h-2r w-2r align-self-center mt-3" alt="Benediktus Hengki Setiawan" style="width: 10rem; height: auto">
                  <div class="card-body">
                    <h5 class="card-title fw-bold text-center">Kevin Aurelius Suryono<br>(2540129281)</h5>
                    <ul class="bg-transparent p-0 mb-0">
                        <li class="d-flex align-items-center">
                            <img class="h-2r w-2r mr-0_5r" src="{{ asset('assets/img/Icon Whatsapp.png') }}" alt="Icon Whatsapp">
                            <p class="mb-0"><span class="fw-bold">Whatsapp</span><br>+6287853190255</p>
                        </li>
                        <li class="d-flex align-items-center">
                            <img class="h-2r w-2r mr-0_5r" src="{{ asset('assets/img/Icon Email.png') }}" alt="Icon Email">
                            <p class="mb-0"><span class="fw-bold">Email</span><br>kevin.suryono@binus.ac.id</p>
                        </li>
                        <li class="d-flex align-items-center">
                            <img class="h-2r w-2r mr-0_5r" src="{{ asset('assets/img/Icon Instagram Hitam.png') }}" alt="Icon Instagram">
                            <p class="mb-0"><span class="fw-bold">Instagram</span><br>@@kevinas27</p>
                        </li>
                      </ul>
                  </div>
                </div>
                <div class="card bg-gold mx-2" style="border-radius: 20px">
                  <img src="{{ asset('assets/img/Reza.png') }}" class="card-img-top h-2r w-2r align-self-center mt-3" alt="Benediktus Hengki Setiawan" style="width: 10rem; height: auto">
                  <div class="card-body">
                    <h5 class="card-title fw-bold text-center">Muhammad Reza Faturrahman<br>(2501977626)</h5>
                    <ul class="bg-transparent p-0 mb-0">
                        <li class="d-flex align-items-center">
                            <img class="h-2r w-2r mr-0_5r" src="{{ asset('assets/img/Icon Whatsapp.png') }}" alt="Icon Whatsapp">
                            <p class="mb-0"><span class="fw-bold">Whatsapp</span><br>+6281250235831</p>
                        </li>
                        <li class="d-flex align-items-center">
                            <img class="h-2r w-2r mr-0_5r" src="{{ asset('assets/img/Icon Email.png') }}" alt="Icon Email">
                            <p class="mb-0"><span class="fw-bold">Email</span><br>muhammad.faturrahman002@binus.ac.id</p>
                        </li>
                        <li class="d-flex align-items-center">
                            <img class="h-2r w-2r mr-0_5r" src="{{ asset('assets/img/Icon Instagram Hitam.png') }}" alt="Icon Instagram">
                            <p class="mb-0"><span class="fw-bold">Instagram</span><br>@@rezaaafatur</p>
                        </li>
                      </ul>
                  </div>
                </div>
            </div> --}}
        </div>
    </section>
    </main>
@endsection

@section('script')
    <script>
        $(document).ready(function () {
            // set active dan aria-current
            $(".nav-link:contains(Tentang Kami)").attr("aria-current", "page");
            $(".nav-link:contains(Tentang Kami)").addClass("active");                      
        });

    </script>
@endsection