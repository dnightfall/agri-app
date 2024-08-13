<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DokumentasiRekapController extends Controller
{
    public function index()
    {
        return view('dokumentasirekap');
    }
}
