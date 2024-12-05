<?php

namespace App\Http\Controllers\Admin; // Namespace harus sesuai dengan struktur folder

use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function index()
    {
        // Kode untuk menampilkan tampilan admin
        return view('admin.dashboard');
    }
}
