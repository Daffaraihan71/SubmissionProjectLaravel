@extends('layouts.app')

@section('title', 'Profil Mahasiswa')

@section('content')
    <h1>Profil Mahasiswa</h1>
    <ul>
        <li>Nama: {{ $nama }}</li>
        <li>NIM: {{ $nim }}</li>
        <li>Prodi: {{ $prodi }}</li>
    </ul>
@endsection