<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MerekapController extends Controller
{
    public function index()
    {
        return view('merekap');
    }
}
