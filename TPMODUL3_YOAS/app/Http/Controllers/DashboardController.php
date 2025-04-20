<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // ==================2==================
        // - Set timezone ke Asia/Jakarta
        // - Buat variabel nama, jam, waktu
        // - Tentukan $salam berdasarkan jam (pagi, siang, sore, malam)
        // - Panggil fungsi getTanggal()
        // - Kirim data ke view 'dashboard' 

        date_default_timezone_set('Asia/Jakarta');

        $nama = 'Yoas';
        $jam = date('H');
        $waktu = date('H:i:s');

        if ($jam >= 0 && $jam < 10) {
            $salam = 'Selamat pagi';
        } elseif ($jam >= 10 && $jam < 15) {
            $salam = 'Selamat siang';
        } elseif ($jam >= 15 && $jam < 18) {
            $salam = 'Selamat sore';
        } else {
            $salam = 'Selamat malam';
        }

        $tanggal = $this->getTanggal();

        return view('dashboard', compact('nama', 'salam', 'waktu', 'tanggal'));
    }

    private function getTanggal()
    {
        // ==================3==================
        // - Kembalikan tanggal sekarang dalam format dd-mm-yyyy
        return date('d-m-Y');
    }
}
