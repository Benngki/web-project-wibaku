@extends('layouts.master')

@section('title', 'Sejarah | ')

@section('main')
    <main id="sejarah-candi-badut" class="bg-light">
        <section class="min-vh-90 vh-lg-90">
            <div class="container-fluid container-md px-4 px-md-0 pt-4 py-lg-4 d-flex flex-column align-items-center justify-content-center h-100">
                <div class="d-flex align-items-center w-100 mb-4">
                    <a class="prev-button" href="{{ url('objek-wisata/candi-badut') }}"><i class="fa-solid fa-angle-right"></i></a>
                    <h1 class="font-bebasNeue text-center display-3 mb-0 flex-fill">SEJARAH CANDI BADUT</h1>
                </div>
                
                <div class="row gap-2 mb-3">
                    <div class="col-12 col-lg-3 d-flex flex-column justify-content-center align-items-center">                        
                        <img class="w-100 br-1 mb-2 mb-lg-0" src="{{ asset('assets/img/Candi Badut Hitam _ Putih.png') }}" alt="Candi Badut">
                        <button value="{{ asset('assets/audio/sejarah 1.m4a') }}" type="button" class="d-lg-none btn_audio btn border-gold border border-3 w-10r br-1">
                            <img src="{{ asset('assets/img/Icon Play.png') }}" alt="" style="width: 15px; margin-right: 0.5rem">
                            Audio
                        </button>       
                    </div>        
                    <div class="col d-flex flex-column justify-content-center">       
                        <h3 class="font-arial fw-bold text-gold">Kapan Candi Badut Ditemukan?</h3>
                        <p class="text-justify mb-0">Pada tahun 1923, Candi Badut ditemukan oleh beberapa pakar arkeologi. Menurut pendapat para pakar arkeologi, Candi Badut diperkirakan dibangun jauh sebelum masa pemerintahan Airlangga. Pemerintahan Airlangga merupakan masa dimana pembangunan candi di daerah lain di Jawa Timur sedang berlangsung. Candi Badut diduga merupakan candi tertua di Jawa Timur.</p>
                    </div>
                </div>
                
                <div class="row gap-2">
                    <div class="col-12 col-lg-3 d-flex flex-column justify-content-center align-items-center gap-2">                        
                        <img class="w-100 br-1" src="{{ asset('assets/img/Candi Badut (3) Hitam _ Putih.png') }}" alt="Candi Badut">                     
                        <button value="{{ asset('assets/audio/sejarah 1.m4a') }}" type="button" class="d-none d-lg-block btn_audio btn border-gold border border-3 w-10r br-1">
                            <img src="{{ asset('assets/img/Icon Play.png') }}" alt="" style="width: 15px; margin-right: 0.5rem">
                            Audio
                        </button>                        
                    </div>
                    <div class="col d-flex flex-column justify-content-start">       
                        <h3 class="font-arial fw-bold text-gold">Asal Usul Nama Candi Badut</h3>
                        <p class="text-justify mb-0">Menurut Poerbatjaraka yang merupakan seorang budayawan dan ilmuwan Jawa berpendapat bahwa nama “Badut” berasal dari nama kecil Raja Gajayana sebelum menjadi raja di Kerajaan Kanjuruhan yakni Liswa. Liswa merupakan bahasa Jawa Kuno/Kawi yang artinya adalah anak komedi, pelawak, atau badut. Namun, sampai saat ini masih belum ditemukan bukti kuat mengenai penamaan Candi Badut dari nama kecil Raja Gajayana.</p>
                    </div>
                </div>

            </div>
        </section>
        <section class="min-vh-90 vh-lg-90">
            <div class="container-fluid container-md px-4 px-md-0 pt-4 py-lg-4 d-flex flex-column align-items-center justify-content-center h-100">                
                <img class="w-7r mb-4" src="{{ asset('assets/img/Logo Candi Badut Hitam Polosan.png') }}" alt="Logo Candi Badut Hitam">

                <div class="row gap-2 mb-3">
                    <div class="col d-flex flex-column justify-content-center order-last order-lg-first">       
                        <h3 class="font-arial fw-bold text-gold">Kapan Candi Badut Mulai Dibangun?</h3>
                        <p class="text-justify mb-0">Candi Badut diperkirakan dibangun pada tahun 760 M atau awal pemerintahan Raja Gajayana. Peninggalan Kerajaan Kanjuruhan ini dikaitkan dengan Prasasti Dinoyo yang berangka tahun 760 Masehi. Prasasti Dinoyo mengisahkan tentang Raja Gajayana, penguasa Kanjuruhan pada tahun 760-789 M. Beberapa ahli sejarah meyakini bahwa candi ini memang dibangun di pusat pemerintahan Kerajaan Kanjuruhan atas perintah Raja Gajayana.</p>
                    </div>
                    <div class="col-12 col-lg-3 d-flex flex-column justify-content-center align-items-center">                        
                        <img class="w-100 br-1 mb-2 mb-lg-0" src="{{ asset('assets/img/Candi Badut Hitam _ Putih.png') }}" alt="Candi Badut">
                        <button value="{{ asset('assets/audio/sejarah 2.m4a') }}" type="button" class="d-block d-lg-none btn_audio btn border-gold border border-3 w-10r br-1">
                            <img src="{{ asset('assets/img/Icon Play.png') }}" alt="" style="width: 15px; margin-right: 0.5rem">
                            Audio
                        </button>       
                    </div>
                </div>
                
                <div class="row gap-2">
                    <div class="col d-flex flex-column justify-content-start order-last order-lg-first">       
                        <h3 class="font-arial fw-bold text-gold">Ciri Khas Arsitektur Candi Badut</h3>
                        <p class="text-justify mb-0">Candi badut terbuat dari batu andesit. Selain itu, Candi Badut memiliki pahatan Kalamakara di bagian pintu masuknya. Pahatan Kalamakara merupakan bentuk kepala dan wajah raksasa yang ditempatkan di pintu masuk candi dengan tujuan untuk mengusir roh-roh jahat. Pahatan Kalamakara yang terdapat di Candi Badut berwujud tanpa rahang bawah, tidak seperti dengan candi di Jawa Timur lainnya yang dibuat lengkap dengan rahang bawah.</p>
                    </div>
                    <div class="col-12 col-lg-3 d-flex flex-column justify-content-center align-items-center gap-2">                        
                        <img class="w-100 br-1 order-last order-lg-first" src="{{ asset('assets/img/Candi Badut (3) Hitam _ Putih.png') }}" alt="Candi Badut">                     
                        <button value="{{ asset('assets/audio/sejarah 2.m4a') }}" type="button" class="d-none d-lg-block btn_audio btn border-gold border border-3 w-10r br-1">
                            <img src="{{ asset('assets/img/Icon Play.png') }}" alt="" style="width: 15px; margin-right: 0.5rem">
                            Audio
                        </button>                        
                    </div>
                </div>

            </div>
        </section>
        <section class="min-vh-90 vh-lg-90">
            <div class="container pb-4 px-4 pt-4 py-lg-4 d-flex flex-column align-items-center justify-content-center h-100">
                <img class="w-7r mb-4" src="{{ asset('assets/img/Logo Candi Badut Hitam Polosan.png') }}" alt="Logo Candi Badut Hitam">
                
                <div class="row gap-2 mb-3">
                    <div class="col d-flex flex-column justify-content-center align-items-center ">                        
                        <img class="w-100 br-1 mb-2 mb-lg-0" src="{{ asset('assets/img/Lingga dan Yoni Hitam_ Putih.png') }}" alt="Candi Badut">
                        <button value="{{ asset('assets/audio/sejarah 3.m4a') }}" type="button" class="d-block d-lg-none btn_audio btn border-gold border border-3 w-10r br-1">
                            <img src="{{ asset('assets/img/Icon Play.png') }}" alt="" style="width: 15px; margin-right: 0.5rem">
                            Audio
                        </button>       
                    </div>
                    <div class="col-12 col-lg-9 d-flex flex-column justify-content-center">       
                        <h3 class="font-arial fw-bold text-gold">Bagian Dalam Candi Badut</h3>
                        <p class="text-justify mb-0">Terdapat ruangan dengan ukuran sekitar 5,53 x 3,67 m2. Pada tengah ruangan tersebut terdapat lingga dan yoni. Lingga dan yoni merupakan lambang kesuburan. Selain itu, di sekeliling ruangan terdapat relung kecil yang diperkiran semula berisi arca. Selanjutnya, dinding candi dihiasi dengan pahatan berbentuk burung berkepala manusia dan peniup seruling. Terakhir, di sisi bangunan candi terdapat relung berhiaskan bunga dan burung berkepala manusia.</p>
                    </div>
                </div>
                
                <div class="row gap-2">
                    <div class="col-12 col-lg-3 d-flex flex-column justify-content-center align-items-center gap-2">                        
                        <img class="w-100 br-1" src="{{ asset('assets/img/Lingkungan Candi Badut Hitam _ Putih.png') }}" alt="Candi Badut">                                         
                        <button value="{{ asset('assets/audio/sejarah 3.m4a') }}" type="button" class="d-none d-lg-block btn_audio btn border-gold border border-3 w-10r br-1">
                            <img src="{{ asset('assets/img/Icon Play.png') }}" alt="" style="width: 15px; margin-right: 0.5rem">
                            Audio
                        </button>
                    </div>
                    <div class="col d-flex flex-column justify-content-start">       
                        <h3 class="font-arial fw-bold text-gold">Lingkungan Sekitar Candi Badut</h3>
                        <p class="text-justify mb-0">Candi Badut pernah diperbaiki sekitar tahun 1925-1926. Namun, banyak bagian dari Candi Badut yang hilang serta belum dapat dikembalikan ke bentuk aslinya. Di lingkungan sekitar Candi Badut, terdapat bangunan lainnya yang saat ini tinggal fondasi bangunannya saja. Bebatuan yang ada pada bangunan tersebut belum berhasil dikembalikan ke letak aslinya dan disusun di sepanjang tepi halaman fondasi bangunan tersebut.</p>
                    </div>
                </div>

            </div>
        </section>
    </main>
@endsection