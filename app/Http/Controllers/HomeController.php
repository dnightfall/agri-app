<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function indexcms()
    {
        return view('indexcms'); // Menampilkan view resources/views/home.blade.php
    }
}

