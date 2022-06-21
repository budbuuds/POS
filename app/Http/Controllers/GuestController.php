<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\galeri;

class GuestController extends Controller
{
    public function index(Request $request)
    {
        $data_galeri = \App\galeri::all();
        return view('index',['data_galeri' => $data_galeri]);
    }
}
