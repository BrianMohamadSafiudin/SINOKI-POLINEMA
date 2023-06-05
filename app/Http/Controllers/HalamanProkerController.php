<?php

namespace App\Http\Controllers;

use App\Models\programkerja;
use Illuminate\Http\Request;

class HalamanProkerController extends Controller
{
    public function index()
    {
        $dataTugas = \App\Models\tugasProker::all();
        $dataProker = programkerja::all();

        return view('halamanProker' ,compact('dataTugas','dataProker'));
    }
}
