<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        return 'Selamat Datang';
    }

    public function about() {
        return 'Nama : Zaki Lazuardi Ferysa Putra | NIM : 2241720101';
    }

    public function articles($id) {
        return 'Halaman Artikel dengan ID ' . $id;
    }
}
