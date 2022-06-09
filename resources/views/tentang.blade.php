@extends('layouts.master')

@section('main')
    <main>
        
<!-- start of content -->

    <section id="tentang_kami" class="min-vh-90 pt-2 bg-light">
        <div class="container">
            <p class="h1 text-center mt-2 mb-4">Tentang Kami</p>
            <div class="row">
                <div class="col-3">
                    <img src="" alt="">
                </div>
                <div class="col">
                    <p class="" style="text-align: justify">&emsp;&emsp;&emsp;WiBaKu Team adalah pendiri dari website Candi Badut yang menyediakan jasa pemesanan tiket dan informasi menarik lainnya. Website Candi Badut menjadi salah satu website di Indonesia yang mendukung kelestarian budaya bersejarah melalui objek bangunan. Selain itu, Website Candi Badut juga membuat model 3 dimensi dari objek wisata Candi Badut. Maka dari itu, Website Candi Badut bisa mengenalkan tempat atau objek bangunan candi kepada generasi muda dan mengikuti perkembangan zaman yang membutuhkan visualisasi dalam bentuk model 3 dimensi. Dengan demikian, Website Candi Badut tidak hanya berlaku untuk kategori dewasa saja, melainkan semua umur bisa menikmati setiap layanan di website kami. </p>
                </div>
            </div>
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