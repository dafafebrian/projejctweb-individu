<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ZenithController extends Controller
{
    public function index()
    {
        return view('/,mahasiswa',[
            "tittle" => 'Data Mahasiswa',
        ]);
    }
}
