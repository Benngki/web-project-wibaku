@extends('layouts.master')

@section('main')
    <main>
        <form action="{{ url('/test') }}" method="post">
            @csrf
            <div class="form-group">
              <label for="nama">nama</label>
              <input type="text" class="form-control" name="nama" id="nama" aria-describedby="helpId" placeholder="Masukkan NAma">
            </div>
            <div class="form-group">
              <label for="password">Password</label>
              <input type="password" class="form-control" name="password" id="password" placeholder="Password">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </main>
@endsection