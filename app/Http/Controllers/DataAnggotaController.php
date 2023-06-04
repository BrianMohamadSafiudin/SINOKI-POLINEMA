<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class DataAnggotaController extends Controller
{
    public function index()
    {
        $dataAnggota = User::all();
        return view('dataAnggota' , compact('dataAnggota'));
    }
}
