@extends('layout.main')

@section('title', 'Form edit data mahasiswa')

@section('content')

<div class="jumbotron jumbotron-fluid">
    <div class="container">
        <h2 class="display-4">Form edit data mahasiswa</h2>
    </div>
</div>

<div class="container">
    <div class="card my-3">
        <form class="card-body" method="POST" action="/students/{{ $student->id }}">
            @method('patch')
            @csrf
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama"
                    placeholder="Masukan nama" name="nama" value="{{ $student->nama }}">
                @error('nama')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="nrp">NRP</label>
                <input type="text" class="form-control @error('nrp') is-invalid @enderror" id="nrp"
                    placeholder="Masukan NRP" name="nrp" value="{{ $student->nrp }}">
                @error('nrp')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control @error('email') is-invalid @enderror" id="email"
                    placeholder="Masukan email" name="email" value="{{ $student->email }}">
                @error('email')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="jurusan">Jurusan</label>
                <input type="text" class="form-control @error('jurusan') is-invalid @enderror" id="jurusan"
                    placeholder="Masukan jurusan" name="jurusan" value="{{ $student->jurusan }}"">
                @error('jurusan')
                <div class=" invalid-feedback">{{ $message }}</div>
            @enderror
    </div>
    <div class="text-center">
        <button type="submit" class="btn btn-md btn-rounded btn-primary">Ubah Data!</button>
    </div>
    </form>
</div>
</div>
@endsection
