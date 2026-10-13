@extends('layouts.app')

@section('title', 'Detail Mahasiswa')

@section('content')
    <h1>Detail Mahasiswa</h1>
    
    <p><strong>Nama:</strong> {{ $mhs['nama'] }}</p>
    <p><strong>NIM:</strong> {{ $mhs['nim'] }}</p>
    <p><strong>IPK:</strong> {{ $mhs['ipk'] }}</p>
    <p><strong>Program Studi:</strong> {{ $mhs['prodi'] }}</p>

    <br>
    <a href="/mahasiswa">Kembali ke Daftar</a>
@endsection