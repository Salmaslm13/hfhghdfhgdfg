<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuestController extends Controller
{
    /**
     * Menampilkan halaman Beranda.
     */
    public function beranda()
    {
        return view('guestPages.beranda');
    }

    /**
     * Menampilkan halaman Tentang Kami.
     */
    public function tentangKami()
    {
        return view('guestPages.tentangKami');
    }

    /**
     * Menampilkan halaman LPH.
     */
    public function LPH()
    {
        return view('guestPages.lph');
    }
}
