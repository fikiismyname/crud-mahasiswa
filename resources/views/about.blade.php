@extends('layout.main')

@section('title', 'About')

@section('content')

<div class="jumbotron jumbotron-fluid">
    <div class="container">
    <h2 class="display-4">Hallo, {{ $nama }}</h2>
    </div>
</div>

@endsection
