<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class HalamanDataSieController extends Controller
{
    public function index()
    {
        $dataAnggota = User::all();

        return view('halamanDataSie', compact('dataAnggota'));
    }
}
