<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        return 'Selamat Datang';
    }

    public function about() {
        return 'Nama: Muhammad Syafiq Aldiansyah <br>NIM: 2341720102';
    }

    public function articles($id) {
        return 'Halaman Artikel dengan id ' . $id;
    }
}
