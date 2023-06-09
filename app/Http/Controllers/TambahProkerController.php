<?php

namespace App\Http\Controllers;

use App\Models\Oki;
use Illuminate\Http\Request;

class TambahProkerController extends Controller
{
    public function index()
    {
        $dataOki = Oki::all();
        return view('tambahProker', compact('dataOki'));
    }
}
