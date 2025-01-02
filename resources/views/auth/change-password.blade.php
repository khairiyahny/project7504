@extends('layouts.app') <!-- Sesuaikan dengan layout Anda -->

@section('content')
<div class="container">
    <h2>Ubah Password</h2>

    <!-- Menampilkan pesan sukses jika ada -->
    @if(session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif

    <!-- Menampilkan error jika ada -->
    @error('password')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
    @enderror

    <form action="{{ url('/change-password') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="password">Password Baru</label>
            <input type="password" name="password" id="password" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="password_confirmation">Konfirmasi Password Baru</label>
            <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary mt-3">Ubah Password</button>
    </form>
</div>
@endsection
