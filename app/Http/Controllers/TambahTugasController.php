<?php

namespace App\Http\Controllers;

use App\Models\programkerja;
use App\Models\tugasproker;
use Illuminate\Http\Request;

class TambahTugasController extends Controller
{
    public function index()
    {
        $dataProker = programkerja::all();
        $dataTugas = tugasproker::all();

        return view('tambahTugas', compact('dataProker','dataTugas'));
    }
}
