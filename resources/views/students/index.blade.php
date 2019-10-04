@extends('layout.main')

@section('title', 'Daftar Mahasiswa')

@section('content')

<div class="jumbotron jumbotron-fluid">
    <div class="container text-center">
        <h2 class="display-4">Daftar Mahasiswa</h2>
        <a href="/students/create" class="btn btn-md btn-rounded btn-success">Tambah data mahasiswa</a>
    </div>
</div>

<div class="container">
    <div class="card mb-4">
        @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
        @endif
        <ul class="list-group">
            @foreach ($mahasiswa as $mhs)
            <li class="list-group-item d-flex justify-content-between align-items-center">
                {{ $mhs->nama }}
                <a href="students/{{ $mhs->id }}" class="badge badge-primary badge-pill">detail</a>
            </li>
            @endforeach
        </ul>
    </div>
</div>
@endsection
