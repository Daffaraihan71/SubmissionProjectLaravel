<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    // Array data mahasiswa (digunakan bersama untuk method daftar dan detail)
    private $dataMahasiswa = [
        ['nama' => 'Budi Santoso', 'nim' => '111', 'ipk' => 3.8, 'prodi' => 'Teknik Informatika'],
        ['nama' => 'Siti Aminah', 'nim' => '112', 'ipk' => 3.2, 'prodi' => 'Sistem Informasi'],
        ['nama' => 'Andi Darmawan', 'nim' => '113', 'ipk' => 2.8, 'prodi' => 'Teknik Komputer'],
        ['nama' => 'Joko Widodo', 'nim' => '114', 'ipk' => 1.5, 'prodi' => 'Ilmu Komputer'], // IPK < 2.0 untuk tes alert
        ['nama' => 'Rina Nose', 'nim' => '115', 'ipk' => 3.6, 'prodi' => 'Teknik Perangkat Lunak'],
    ];

    // Poin a
    public function profil()
    {
        $nama   = 'DAFFA RAIHAN ARIZKI'; // Ubah sesuai nama Anda
        $nim    = '232520061';   // Ubah sesuai NIM Anda
        $prodi  = 'TEKNOLOGI INFORMASI';

        return view('mahasiswa.profil', compact('nama', 'nim', 'prodi'));
    }

    // Poin b
    public function daftar()
    {
        $mahasiswa = $this->dataMahasiswa;
        return view('mahasiswa.daftar', compact('mahasiswa'));
    }

    // Poin c
    public function detail($nim)
    {
        // Mencari mahasiswa berdasarkan NIM
        $mhs = collect($this->dataMahasiswa)->firstWhere('nim', $nim);

        // Jika NIM tidak ada, panggil abort(404)
        if (!$mhs) {
            abort(404);
        }

        return view('mahasiswa.detail', compact('mhs'));
    }
}