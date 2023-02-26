<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MapelController extends Controller
{
    public function index()
    {
        return view('mapel.index');
    }

    public function jadwal_index()
    {
        return view('jadwal.index');
    }
}
