<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HalamanProkerUserController extends Controller
{
    public function index()
    {
        $dataTugas = \App\Models\tugasProker::all();

        return view('halamanProkerUser', compact('dataTugas'));
    }
}
