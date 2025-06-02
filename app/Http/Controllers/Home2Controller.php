<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Home2Controller extends Controller
{
    /**
     * Hanya user yang sudah login yang bisa mengakses halaman ini.
     */
    //public function __construct()
    //{
       // $this->middleware('auth');
    //}

    /**
     * Tampilkan halaman home2.
     */
    public function index()
    {
        return view('home2'); // resources/views/home2.blade.php
    }
}


