@extends('layouts.master')

@section('title', 'Ubah Password | ')

@section('main')
<main id="ubah-password" class="vh-90">
    <!-- start of content -->
    <div class="container h-100">
      <div class="row h-100 justify-content-center align-items-center">
        <div class="col-11 col-md-8 col-lg-5">
          @if (session()->has('berhasil-ubah-password'))
          <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
            <symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
              <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
            </symbol>
          </svg>
          <div class="alert alert-success d-flex align-items-center justify-content-center" role="alert">
            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Info:"><use xlink:href="#info-fill"/></svg>
            <div>
              {{ session('berhasil-ubah-password') }}
            </div>
          </div>        
          @endif

          <div class="card m-auto bg-gold br-1">
              <div class="card-body text-center">
                <h1 class="card-title font-bebasNeue mb-3">WIBAKU</h1>
                <form class="bg-transparent" action="{{ url('/user/ubah-password') }}" method="post">
                  @csrf
                  <div class="form-floating">
                    <input type="password" class="form-control rounded-pill @error('old-password') is-invalid @enderror" name="old-password" id="floatingold-Password" placeholder="old-Password" required>
                    <label for="floatingold-Password">Kata Sandi Lama</label>
                    @error('old-password')
                        <div class="valid-feedback d-flex text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                  </div>
                  <div class="form-floating">
                    <input type="password" class="form-control rounded-pill @error('new-password') is-invalid @enderror" name="new-password" id="floatingnew-Password" placeholder="new-Password" required>
                    <label for="floatingnew-Password">Kata Sandi Baru</label>
                    @error('new-password')
                        <div class="valid-feedback d-flex text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                  </div>
                  <div class="form-floating">
                    <input type="password" class="form-control rounded-pill @error('new-password-confirm') is-invalid @enderror" name="new-password-confirm" id="floatingnew-Password-confirm" placeholder="new-Password-confirm" required>
                    <label for="floatingnew-Password-confirm">Konfirmasi Kata Sandi</label>
                    @error('new-password-confirm')
                        <div class="valid-feedback d-flex text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                  </div>
                  <button type="submit" class="btn btn-dark rounded-pill px-4">Ubah</button>
                </form>
              </div>
          </div>
        </div>
      </div>
    </div>
    <!-- end of content -->
@endsection