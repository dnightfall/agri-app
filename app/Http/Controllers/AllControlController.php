<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AllControlController extends Controller
{
    public function index()
    {
        return view('allcontrol');
    }
}
