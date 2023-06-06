<?php

namespace App\Http\Controllers;

use App\Models\programkerja;
use Illuminate\Http\Request;

class TambahTugasController extends Controller
{
    public function index()
    {
        $dataProker = programkerja::all();

        return view('tambahTugas', compact('dataProker'));
    }
}
