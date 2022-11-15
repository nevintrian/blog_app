@extends('layouts.main')

@section('container')
    <h1>About Page</h1>
    <br>
    <b>About this website : </b>
    <p>This is blog website, you can login to add blog and share with everyone in internet.</p>
    <b>This website using : </b>
    <p>{{ $info }}</p>
    <b>This website created by : </b>
    <p>{{ $name }}</p>
    <b>Contact information : </b>
    <p>{{ $email }}</p>
    {{-- <img src="img/{{ $image }}" alt="contoh gambar" width="500"> --}}
@endsection
