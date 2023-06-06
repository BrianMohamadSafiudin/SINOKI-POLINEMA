<?php

namespace App\Http\Controllers;

use App\Models\ProgramKerja;
use Illuminate\Http\Request;

class HalamanEditProkerController extends Controller
{
    public function index()
    {
        $programkerja = ProgramKerja::all();

        return view('halamanEditProker', compact('programkerja'));
    }
}
