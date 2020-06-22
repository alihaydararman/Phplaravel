<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class brain extends Controller
{
    public function index()
    {
        return view('arman.haydar');
    }
    public function index1()
    {
        return view('arman.nishan');
    }
    public function hasan()
    {
        return view('doly.rifat');
    }
}
