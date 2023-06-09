<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\programkerja;
use App\Models\User;

class TambahDataSieController extends Controller
{
    public function index()
    {
        $dataProker = programkerja::all();
        $dataUser = User::all();
        return view('tambahDataSie' , compact('dataProker','dataUser'));
    }
}
