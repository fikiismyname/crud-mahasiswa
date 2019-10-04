@extends('layout.main')

@section('title', 'Daftar Mahasiswa')

@section('content')

<div class="jumbotron jumbotron-fluid">
    <div class="container">
        <h2 class="display-4">Daftar Mahasiswa</h2>
    </div>
</div>

<div class="container">

    <!-- Editable table -->
    <div class="card mb-4">
        <table class="table table-bordered table-responsive-md table-striped text-center">
            <thead>
                <tr>
                    <th class="text-center">#</th>
                    <th class="text-center">Nama</th>
                    <th class="text-center">NRP</th>
                    <th class="text-center">Email</th>
                    <th class="text-center">Jurusan</th>
                    <th class="text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($mahasiswa as $mhs)
                <tr>
                <td class="pt-3-half">{{ $loop->iteration }}</td>
                    <td class="pt-3-half">{{ $mhs->nama }}</td>
                    <td class="pt-3-half">{{ $mhs->nrp }}</td>
                    <td class="pt-3-half">{{ $mhs->email }}</td>
                    <td class="pt-3-half">{{ $mhs->jurusan }}</td>
                    <td><a class="btn btn-success btn-rounded btn-sm m-1">Edit</a><a
                            class="btn btn-danger btn-rounded btn-sm m-1">Delate</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</div>
@endsection
