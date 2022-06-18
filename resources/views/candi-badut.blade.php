@extends('layouts.master')

@section('main')
    <main id="candi_badut">
        <section class="min-vh-90 d-flex justify-content-center align-items-center">
            <div class="container d-flex flex-column justify-content-center align-items-center py-3 h-100">
                <h1 class="font-bebasNeue text-light display-3 mb-md-5r">CANDI BADUT</h1>
                <img class="d-none d-lg-inline w-7r" src="{{ asset('assets/img/Logo Candi Badut Putih Polosan.png') }}">
                <div class="row row-cols-lg-4 row-cols-2 row-cols-md-3 mt-3">
                    @foreach ($fitur as $item)
                        <div class="col my-3 offset-md-2 offset-lg-0">
                            <a class="btn border-gold text-light py-3 px-4 w-100 border border-md-2 border-3 br-1 page_scroll" href="#{{ $item['href'] }}" role="button">{{  $item['nama'] }}</a>
                        </div>                                      
                    @endforeach
                </div>
            </div>
        </section>

        <section id="testimoni" class="bg-gold vh-sm-90">
            <div class="container d-flex flex-column justify-content-center align-items-center py-3">
                <h1 class="font-bebasNeue text-light display-3">TESTIMONI</h1>
                <div class="owl-carousel owl-theme flex-fill text-light text-center">
                    @foreach ($testimoni as $item)
                        <div class="card">
                            <img src="{{ asset($item['img']) }}" class="card-img-top" alt="...">
                            <div class="card-body">
                            <h5 class="card-title">{{ $item['nama'] }}</h5>
                            <p class="card-text">{{ $item['pesan'] }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        <section id="sejarah" class="bg-light">
            <div class="container w-100 d-flex py-4">
                <div class="row">
                    <div class="col-12 col-lg-4 d-flex align-items-center">                        
                        <img class="w-100 br-1" src="{{ asset('assets/img/Candi Badut Hitam _ Putih.png') }}" alt="Candi Badut">
                    </div>
                    <div class="col">                        
                        <div>
                            <p class="text-justify pt-2 pt-lg-0">&emsp;&emsp;&emsp;Candi Badut merupakan candi tertua di Jawa Timur dan salah satu warisan budaya bersejarah di Kota Malang. Sehubungan dengan hal tersebut, Candi Badut memiliki potensial sebagai tempat wisata karena memiliki peninggalan sejarah yang cukup penting. Keberadaan Candi Badut di Kota Malang menjadi penegasan bahwa Kota Malang tidak hanya mengandalkan potensi alamnya saja, melainkan terdapat bangunan kuno atau candi bersejarah yang dapat dikunjungi oleh wisatawan baik dalam negeri maupun mancanegara.</p>
                            <div class="d-flex justify-content-end">
                                <button value="{{ asset('assets/audio/sejarah singkat.m4a') }}" type="button" class="btn_audio btn bg-gold me-4 w-10r h-3r br-1">
                                    <img src="{{ asset('assets/img/Icon Play.png') }}" alt="" style="width: 15px; margin-right: 0.5rem">
                                    Audio
                                </button>
                                <a href="{{ url('objek-wisata/candi-badut/sejarah') }}" role="button" class="btn bg-gold w-10r h-3r br-1 d-flex align-items-center justify-content-center">Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="pesan-tiket" class="bg-gold">
            <div class="container py-4">
                <div class="row">
                    <div class="col-12 col-lg-8 order-last order-lg-first">
                        <p class="font-bebasNeue display-5 mb-0 d-none d-lg-block">RP 10.000</p>
                        <p class="text-justify pt-2">&emsp;&emsp;&emsp;Candi Badut menawarkan lokasi foto yang instagramable. Selain itu, Candi Badut dapat menjadi tempat rekreasi keluarga Anda. Tunggu apa lagi, segera pesan tiket Candi Badut dengan klik tombol “Pesan Sekarang” di bawah ini.</p>
                        <div class="d-flex align-items-center gap-2">
                            <a role="button" href="{{ url('objek-wisata/candi-badut/pesan-tiket') }}" class="btn bg-light br-1 p-3">PESAN SEKARANG</a>
                            <p class="font-bebasNeue display-5 mb-0 d-lg-none d-inline  ">RP 10.000</p>
                        </div>
                    </div>
                    <div class="col">
                        <img class="w-100 h-100 br-1" src="{{ asset('assets/img/Candi Badut (2) Hitam _ Putih.png') }}" alt="Candi Badut">
                    </div>
                </div>
            </div>
        </section>

        <section id="bawa-saya-ke-sana" class="bg-light">
            <div class="container w-100 d-flex py-4">
                <div class="row">
                    <div class="col-12 col-lg-4 d-flex align-items-center">                        
                        <img class="w-100 br-1" src="{{ asset('assets/img/Candi Badut (3) Hitam _ Putih.png') }}" alt="Candi Badut">
                    </div>
                    <div class="col">                        
                        <div class="d-flex flex-column">
                            <p class="text-justify pt-2 pt-lg-0">&emsp;&emsp;&emsp;Candi Badut yang juga disebut sebagai Candi Liswa, berlokasi kurang lebih 5 km dari Pusat Kota Malang. Lokasi tepatnya di Desa Karangwidoro, Kecamatan Dau, Kabupaten Malang, Jawa Timur. Candi Badut memiliki akses jalan yang mudah. Namun, hingga saat ini parkiran mobil dan motor masih belum memadai untuk kapasitas yang cukup besar. Selain itu, jalan masuk masih menggunakan tanah dan bebatuan. Maka dari itu, untuk memudahkan Anda dalam mencari lokasi Candi Badut, klik tombol “Bawa Saya ke Sana” di bawah ini.</p>
                            <a role="button" href="https://www.google.com/maps/@-7.9576827,112.5993128,3a,75y,225.43h,94.52t/data=!3m6!1e1!3m4!1sAXjhJ9E6is3IjZTIbGuV6g!2e0!7i16384!8i8192" target="_blank" class="btn bg-gold w-10r br-1 align-self-end">Bawa saya<br>ke sana</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="stan-foto" class="bg-gold">
            <div class="container py-4">
                <div class="row">
                    <div class="col-12 col-lg-8 order-last order-lg-first">
                        <p class="text-justify pt-2 pt-lg-0">&emsp;&emsp;&emsp;Buat Anda yang belum bisa ke Candi Badut, kami ada solusinya. Gunakan filter instagram kami untuk melakukan swafoto atau selfie dengan latar belakang atau background Candi Badut. Bukan hanya itu saja, masih banyak loh filter-filter lainnya yang menarik untuk Anda gunakan. Untuk memudahkan Anda mengenai bagaimana cara atau langkah-langkah penggunaan filter di instagram, klik tombol “Selengkapnya” di bawah ini. Jangan lupa juga, follow atau ikuti akun media sosial WiBaKu.</p>
                        <a role="button" href="{{ url('/objek-wisata/candi-badut/stan-foto') }}" class="btn bg-light br-1 p-3">Selengkapnya</a>
                    </div>
                    <div class="col">
                        <img class="w-100 h-100 br-1" src="{{ asset('assets/img/Candi Badut (4) Hitam _ Putih.png') }}" alt="Candi Badut">
                    </div>
                </div>
            </div>
        </section>

        <section id="augmented-reality" class="bg-light">
            <div class="container w-100 d-flex py-4">
                <div class="row">
                    <div class="col-12 col-lg-4 d-flex align-items-center">                        
                        <img class="w-100 br-1" src="{{ asset('assets/img/Candi Badut (5) Hitam _ Putih.png') }}" alt="Candi Badut">
                    </div>
                    <div class="col">                        
                        <div class="d-flex flex-column">
                            <p class="text-justify pt-2 pt-lg-0">&emsp;&emsp;&emsp;WiBaKu tidak hanya menyediakan filter dengan latar belakang Candi Badut saja. WiBaKu juga menyediakan filter dengan sistem augmented reality. Jadi, pengguna yang menggunakan filter augmented reality di instagram akan melihat model 3 dimensi dari Candi Badut. Untuk memudahkan Anda mengenai bagaimana cara atau langkah-langkah penggunaan filter augmented reality di instagram, klik tombol “Selengkapnya” di bawah ini. Jangan lupa juga, follow atau ikuti akun media sosial WiBaKu.</p>
                            <a role="button" href="{{ url('/objek-wisata/candi-badut/augmented-reality') }}" class="btn bg-gold w-10r br-1 align-self-end p-3">Selengkapnya</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="tur-virtual-360" class="bg-gold">
            <div class="container py-4">
                <div class="row">
                    <div class="col-12 col-lg-8 order-last order-lg-first">
                        <p class="text-justify pt-2 pt-lg-0">&emsp;&emsp;&emsp;Dunia virtual menjadi salah satu solusi yang tepat jika Anda belum bisa berkunjung atau berwisata ke Candi Badut. WiBaKu menyediakan fitur tur virtual secara 360° untuk Anda yang ingin berkunjung atau berwisata ke Candi Badut melalui dunia virtual. Nantinya, Anda dapat melihat-lihat bangunan Candi Badut baik dari corak, artefak, hingga bagaimana lingkungan di sekitar Candi Badut secara bebas atau 360°. Tunggu apa lagi, segera klik tombol “Tur Virtual 360°” untuk masuk ke dunia virtual dari Candi Badut.</p>
                        <a role="button" href="https://www.google.com/maps/place/Candi+Badut/@-7.9576568,112.598876,3a,75y,65.69h,86.45t/data=!3m8!1e1!3m6!1sAF1QipPueuOdnV8rSHMhn2DKVpA3blLJiMyj9EvCguZh!2e10!3e11!6shttps:%2F%2Flh5.googleusercontent.com%2Fp%2FAF1QipPueuOdnV8rSHMhn2DKVpA3blLJiMyj9EvCguZh%3Dw203-h100-k-no-pi-11.5916395-ya124.05145-ro0-fo100!7i8192!8i4096!4m5!3m4!1s0x0:0x95fdf34c20fb4d51!8m2!3d-7.9577654!4d112.5986182" target="_blank" class="btn bg-light br-1 p-3">Tur Virtual 360°</a>
                    </div>
                    <div class="col">
                        <img class="w-100 h-100 br-1" src="{{ asset('assets/img/Candi Badut Hitam & Putih (1920 x 980).png') }}" alt="Candi Badut">
                    </div>
                </div>
            </div>
        </section>

        <section id="galeri-foto" class="bg-light vh-md-90">
            <div class="container py-4 d-flex flex-column justify-content-center align-items-center h-100">
                <h1 class="text-center font-bebasNeue display-3">GALERI FOTO</h1>

                <div>
                    <div id="galeri-foto-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                          <button type="button" data-bs-target="#galeri-foto-carousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                          <button type="button" data-bs-target="#galeri-foto-carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                          <button type="button" data-bs-target="#galeri-foto-carousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                          <button type="button" data-bs-target="#galeri-foto-carousel" data-bs-slide-to="3" aria-label="Slide 4"></button>
                          <button type="button" data-bs-target="#galeri-foto-carousel" data-bs-slide-to="4" aria-label="Slide 5"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active          ">
                                <img src="{{ asset('assets/img/Candi Badut (1).jpg') }}" class="d-block" alt="...">
                            </div>
                            <div class="carousel-item          ">
                                <img src="{{ asset('assets/img/Candi Badut (2).jpg') }}" class="d-block" alt="...">
                            </div>
                            <div class="carousel-item          ">
                                <img src="{{ asset('assets/img/Candi Badut (3).jpg') }}" class="d-block" alt="...">
                            </div>
                            <div class="carousel-item          ">
                                <img src="{{ asset('assets/img/Candi Badut (4).jpg') }}" class="d-block" alt="...">
                            </div>
                            <div class="carousel-item          ">
                                <img src="{{ asset('assets/img/Candi Badut (5).jpg') }}" class="d-block" alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#galeri-foto-carousel" data-bs-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#galeri-foto-carousel" data-bs-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Next</span>
                        </button>
                      </div>
                </div>
            </div>
        </section>

    </main>
@endsection