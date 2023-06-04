<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tugasproker;

class TugasprokerController extends Controller
{
    // ...

    public function store(Request $request)
    {
        $request->validate([
            'namatugas' => 'required',
            'sie' => 'required',
            'tenggatwaktu' => 'required',
        ]);

        TugasProker::create($request->all());

        return back()->withStatus(__('Data Tugas Berhasil Ditambahkan.'));
    }

    public function index()
    {
        $tugasprokers = TugasProker::all();

        return view('tugasproker.index', compact('tugasprokers'));
    }

    // ...
}
