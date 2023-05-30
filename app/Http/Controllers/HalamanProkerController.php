<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HalamanProkerController extends Controller
{
    public function index()
    {
        $dataTugas = \App\Models\tugasProker::all();

        return view('halamanProker' ,compact('dataTugas'));
    }
}
