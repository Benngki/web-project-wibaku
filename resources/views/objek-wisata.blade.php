@extends('layouts.master')

@section('title', 'Objek Wisata | ')

@section('main')
    <main id="objek_wisata">
        <section class="vh-90 d-flex">
            <div class="card m-auto br-1 d-flex justify-content-end align-items-start text-light p-3" style="">
                <p class="mb-0 fs-4">CANDI BADUT</p>
                <div class="rounded rounded-pill bg-gold d-flex px-4">
                    <img src="{{ asset('assets/img/Icon Lokasi.png') }}" style="width: 1rem">
                    <small><p class="mb-0">Kota Malang, Jawa Timur</p></small>
                </div>
            </div>
        </section>
    </main>
@endsection
@section('script')
    <script>
        $(document).ready(function () {
            // set active dan aria-current
            $(".nav-link:contains(Objek Wisata)").attr("aria-current", "page");
            $(".nav-link:contains(Objek Wisata)").addClass("active");            
        });

        $("main section .card").click(function (e) { 
            e.preventDefault();
            window.open('objek-wisata/candi-badut', '_self');
        });
    </script>
@endsection