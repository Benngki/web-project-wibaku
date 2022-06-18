@extends('layouts.master')

@section('title', 'Daftar | ')

@section('main')
<main id="daftar" class="min-vh-90 vh-lg-90">
    <!-- start of content -->
    <div class="container h-100">
        <div class="row h-100 align-items-center justify-content-center">
            <div class="col-10 col-md-8 col-lg-5">
                <div class="card bg-gold br-1">
                    <div class="card-body text-center py-4">
                      <h1 class="card-title font-bebasNeue mb-3">WIBAKU</h1>
                      <form class="bg-transparent" action="{{ url('/daftar') }}" method="post">
                        @csrf
                        <div class="form-floating">
                            <input type="name" class="form-control rounded-pill @error('name') is-invalid @enderror" name="name" id="floatingname" placeholder="Nama" autofocus required>
                            <label for="floatingname">Nama</label>     
                            @error('name')
                                <div class="valid-feedback d-flex text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-floating">
                            <input value="{{ old('email') }}" type="email" class="form-control rounded-pill @error('email') is-invalid @enderror" name="email" id="floatingInput" placeholder="name@example.com" required>
                            <label for="floatingInput">Email</label>
                            @error('email')
                                <div class="valid-feedback d-flex text-danger mb-3">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-floating">
                            <input type="password" class="form-control rounded-pill @error('password') is-invalid @enderror" name="password" id="floatingPassword" placeholder="Password" required>
                            <label for="floatingPassword">Kata Sandi</label>     
                            @error('password')
                                <div class="valid-feedback d-flex text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-floating">
                            <input type="password" class="form-control rounded-pill @error('password-confirmation') is-invalid @enderror" name="password-confirmation" id="floatingConfirmPassword" placeholder="Confirm Password" required>
                            <label for="floatingConfirmPassword">Konfirmasi Kata Sandi</label>      
                            @error('password-confirmation')
                                <div class="valid-feedback d-flex text-danger">
                                    {{ $message }}
                                </div>
                            @enderror         
                        </div>
                        <button type="submit" class="btn btn-dark rounded-pill px-4">Daftar</button>
                        <p>Sudah punya akun?<a class="text-decoration-none text-light" href="{{ url('/masuk') }}"> Masuk</a></p>
                      </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end of content -->
</main>
@endsection

@section('script')
    <script>
        $(document).ready(function () {         
            // set active dan aria-current
            // $(".nav-link:contains(Masuk)").attr("aria-current", "page");
            // $(".nav-link:contains(Masuk)").addClass("active");

        });
    </script>
@endsection