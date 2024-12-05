<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function profile()
    {
        // Tampilkan profil user
        return view('user.profile');
    }

    // Tambahkan metode lain yang dibutuhkan untuk user
}
