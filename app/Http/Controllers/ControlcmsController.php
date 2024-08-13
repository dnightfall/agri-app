<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControlcmsController extends Controller
{
    public function index()
    {
        return view('controlcms'); // Menampilkan view resources/views/home.blade.php
    }
}

