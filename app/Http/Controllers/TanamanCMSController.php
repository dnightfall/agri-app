<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TanamanCMSController extends Controller
{
    public function index()
    {
        return view('tanamancms');
    }
}
