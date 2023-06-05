<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class EditDataSieController extends Controller
{
    public function index()
    {
        $dataAnggota = User::all();

        return view('editDataSie', compact('dataAnggota'));
    }
}
