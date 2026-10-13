@extends('layouts.app')

@section('title', 'Daftar Mahasiswa')

@section('content')
    <h1>Daftar Mahasiswa</h1>

    {{-- Cek apakah ada mahasiswa dengan IPK di bawah 2.0 --}}
    @php
        $adaIpkRendah = collect($mahasiswa)->contains('ipk', '<', 2.0);
    @endphp

    @if($adaIpkRendah)
        <x-alert tipe="bahaya">
            Peringatan: Terdapat mahasiswa dengan IPK di bawah 2,0!
        </x-alert>
    @endif

    <table border="1" cellpadding="8" cellspacing="0">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>NIM</th>
                <th>IPK</th>
                <th>Keterangan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse($mahasiswa as $mhs)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $mhs['nama'] }}</td>
                    <td>{{ $mhs['nim'] }}</td>
                    <td>{{ $mhs['ipk'] }}</td>
                    <td>
                        @if($mhs['ipk'] >= 3.5)
                            Cum Laude
                        @elseif($mhs['ipk'] >= 3.0)
                            Baik
                        @else
                            Perlu ditingkatkan
                        @endif
                    </td>
                    <td>
                        {{-- Link ke route detail memakai helper route() --}}
                        <a href="{{ route('mahasiswa.detail', ['nim' => $mhs['nim']]) }}">Detail</a>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="6" style="text-align: center;">Belum ada data</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection