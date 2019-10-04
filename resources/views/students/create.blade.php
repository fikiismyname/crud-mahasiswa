@extends('layout.main')

@section('title', 'Form tambah data mahasiswa')

@section('content')

<div class="jumbotron jumbotron-fluid">
    <div class="container">
        <h2 class="display-4">Form tambah data mahasiswa</h2>
    </div>
</div>

<div class="container">
    <div class="card my-3">
        <form class="card-body" method="POST" action="/students">
            @csrf
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama"
                    placeholder="Masukan nama" name="nama" value="{{ old('nama') }}">
                @error('nama')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="nrp">NRP</label>
                <input type="text" class="form-control @error('nrp') is-invalid @enderror" id="nrp"
                    placeholder="Masukan NRP" name="nrp" value="{{ old('nrp') }}">
                @error('nrp')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control @error('email') is-invalid @enderror" id="email"
                    placeholder="Masukan email" name="email" value="{{ old('email') }}">
                @error('email')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="jurusan">Jurusan</label>
                <input type="text" class="form-control @error('jurusan') is-invalid @enderror" id="jurusan"
                    placeholder="Masukan jurusan" name="jurusan" value="{{ old('jurusan') }}">
                @error('jurusan')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-md btn-rounded btn-primary">Tambah Data!</button>
            </div>
        </form>
    </div>
</div>
@endsection
