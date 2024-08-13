<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SayurCMSController extends Controller
{
    public function index()
    {
        return view('sayurcms');
    }
}
