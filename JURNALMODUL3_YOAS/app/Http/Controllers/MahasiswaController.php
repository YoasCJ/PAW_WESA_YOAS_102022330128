<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        // ==================2==================
        // - Buat object mahasiswa dengan data dummy (nama, nim, email, jurusan, fakultas, foto)
        // - Kirim object tersebut ke view 'profil'
        $mahasiswa = (object)[
            'Nama' => 'Yoas',
            'NIM' => '102022330128',
            'Email' => 'yoasrchristianjati@gmail.com',
            'Jurusan' => 'S1 Sistem Informasi',
            'Fakultas' => 'Fakultas Rekayasa Industri',
            'Foto' => asset('images/LOGO IEEEE.png')
            
        ];

        return view('profil', compact('mahasiswa'));

    }
}
