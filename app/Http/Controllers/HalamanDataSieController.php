<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\programkerja;
use Illuminate\Http\Request;

class HalamanDataSieController extends Controller
{
    public function index()
    {
        $dataAnggota = User::all();
        $dataProker = programkerja::all();

        return view('halamanDataSie', compact('dataAnggota', 'dataProker'));
    }
}
