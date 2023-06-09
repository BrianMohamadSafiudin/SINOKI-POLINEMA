<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\DaftarAnggotaProker;
use Illuminate\Http\Request;

class EditDataSieController extends Controller
{
    public function index()
    {
        $dataAnggota = User::all();
        $daftarAnggota = DaftarAnggotaProker::all();

        return view('editDataSie', compact('dataAnggota','daftarAnggota'));
    }
}
