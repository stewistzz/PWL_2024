<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    // controller untuk tampilan halaman
    public function index() {
        return 'Selamat Datang';
    }

    // menampilkan halaman about
    public function about() {
        return '(2341760188)_Dimas Setyo Nugroho';
    }

    // Menampilkan halaman artikel dinamis
    public function articles($id)
    {
        return "Halaman Artikel dengan Id {$id}";
    }
}
