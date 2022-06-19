@extends('layouts.master')

@section('css')
    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
  </style>
@endsection

@section('main')
    <main id="pesan-tiket">
        <div class="container pb-4">
            <div class="py-5 text-center">
                <img class="d-block mx-auto mb-4" src="{{ asset('assets/img/Logo Candi Badut Hitam.png') }}" style="width: 6rem; height: auto;">
                <h2>Pesan TIket Candi Badut</h2>
              </div>
          
              <div class="row g-5">
                <div class="col-md-5 col-lg-4 order-md-last">
                  <h4 class="d-flex justify-content-between align-items-center mb-3">
                    <span class="text-primary">Keranjang Anda</span>
                    <span class="jumlah-tiket badge bg-primary rounded-pill"></span>
                  </h4>
                  <ul class="list-group mb-3">
                    <li class="list-group-item d-flex justify-content-between lh-sm">
                      <div>
                        <h6 class="my-0">Nama Produk</h6>
                        <small class="text-muted">Tiket Candi Badut</small>
                      </div>
                      <div>
                          <span class="text-muted d-block">10000</span>
                          <span>x <span class="jumlah-tiket text-muted"></span></span>
                      </div>
                    </li>
                    <li class="list-group-item d-flex justify-content-between">
                      <span>Total (RP)</span>
                      <strong id="total-pembayaran"></strong>
                    </li>
                  </ul>
          
                </div>
                <div class="col-md-7 col-lg-8">
                  <h4 class="mb-3">Data Pembayaran</h4>
                  <form class="needs-validation" action="{{ url('/objek-wisata/candi-badut/pesan-tiket') }}" method="post">
                    @csrf
                    <div class="row g-3">
                      <div class="col-12">
                        <label for="firstName" class="form-label">Nama Lengkap</label>
                        <input type="text" class="form-control" name="name" id="nama-lengkap" placeholder="wibaku" value="@auth {{ Auth::user()->name }} @endauth" required>
                        @error('name')
                            <div class="valid-feedback d-flex text-danger">
                                {{ $message }}
                            </div>
                        @enderror
                      </div>
          
                      <div class="col-12">
                        <label for="email" class="form-label">Email</span></label>
                        <input type="email" class="form-control" id="email" name="email" value="@auth {{ Auth::user()->email }}  @endauth" placeholder="wibaku@example.com">
                        @error('email')
                            <div class="valid-feedback d-flex text-danger">
                                {{ $message }}
                            </div>
                        @enderror
                      </div>
          
                      <div class="col-12">
                        <label for="address" class="form-label">Alamat</label>
                        <input type="text" class="form-control" id="address" name="address" placeholder="Jalan Raya Candi V" required>
                        @error('address')
                            <div class="valid-feedback d-flex text-danger">
                                {{ $message }}
                            </div>
                        @enderror
                      </div>
          
                      <div class="col-md-3">
                        <label for="zip" class="form-label">Kode Pos</label>
                        <input type="text" class="form-control" id="zip" name="zip" placeholder="" required>
                        @error('name')
                            <div class="valid-feedback d-flex text-danger">
                                {{ $message }}
                            </div>
                        @enderror
                      </div>

                      <div class="col-md-3">
                        <label for="zip" class="form-label">Jumlah Tiket</label>
                        <input type="text" class="form-control" name="ticket-amount" value="1" id="jumlah-tiket" placeholder="" required>
                        @error('name')
                            <div class="valid-feedback d-flex text-danger">
                                {{ $message }}
                            </div>
                        @enderror
                      </div>
                    </div>
                    
                    <hr class="my-4">
          
                    <h4 class="mb-3">Pembayaran</h4>
          
                    <div class="my-3">
                      <div class="form-check">
                        <input id="credit" name="paymentMethod" type="radio" class="form-check-input" checked required>
                        <label class="form-check-label" for="credit">Tunai</label>
                      </div>
          
                    <hr class="my-4">
          
                    <button class="w-100 btn btn-primary btn-lg" type="submit">Pesan</button>
                  </form>
                </div>
              </div>
        </div>
    </main>
@endsection

@section('script')
    <script>
        $(document).ready(function () {
            $(".jumlah-tiket").html($("#jumlah-tiket").val()); 

            $("#total-pembayaran").html(10000*$("#jumlah-tiket").val()); 

            $("#jumlah-tiket").on("change paste keyup", function() {

                $(".jumlah-tiket").html($(this).val()); 
                
                $("#total-pembayaran").html(10000*$("#jumlah-tiket").val()); 
            });
        });
    </script>
@endsection