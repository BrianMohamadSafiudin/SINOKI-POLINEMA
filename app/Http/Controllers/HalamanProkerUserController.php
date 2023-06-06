<?php

namespace App\Http\Controllers;

use App\Models\programkerja;
use Illuminate\Http\Request;

class HalamanProkerUserController extends Controller
{
    public function index()
    {
        $dataTugas = \App\Models\tugasProker::all();
        $dataProker = programkerja::all();

        return view('halamanProkerUser', compact('dataTugas', 'dataProker'));
    }
}
