@extends('layout.main')

@section('title', 'Detail Mahasiswa')

@section('content')

<div class="jumbotron jumbotron-fluid">
    <div class="container">
        <h2 class="display-4">Daftar Mahasiswa</h2>
    </div>
</div>

<div class="container">
    <div class="card my-3">
        <div class="card-body">
            <h5 class="card-title">{{ $student->nama }}</h5>
            <h6 class="card-subtitle mb-2 text-muted">{{ $student->nrp }}</h6>
            <p class="card-text">{{ $student->email }}</p>
            <p class="card-text">{{ $student->jurusan }}</p>
        <a href="{{ $student->id }}/edit" class="btn btn-md btn-rounded btn-primary">Edit</a>
            <form action="{{ $student->id }}" method="POST">
                @method('delete')
                @csrf
                <button type="submit" class="btn btn-md btn-rounded btn-danger">Delate</button>
            </form>
            <a href="/students" class="btn btn-md btn-rounded btn-info">Kembali</a>
        </div>
    </div>
</div>
@endsection
