<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
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

        return back()->withStatus(__('Data tugas proker berhasil ditambahkan.'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'evaluasi' => 'required',
        ]);

        $tugasproker = Tugasproker::findOrFail($id);
        $tugasproker->evaluasi = $request->evaluasi;
        $tugasproker->save();

        return back()->withStatus(__('Evaluasi berhasil ditambahkan.'));
    }

    public function index()
    {
        $tugasprokers = TugasProker::all();

        return view('tugasproker.index', compact('tugasprokers'));
    }

    public function destroy(TugasProker $tugasproker)
    {
        $tugasproker->delete();

        return back()->withStatus(__('Data tugas proker berhasil dihapus.'));
    }

    // ...
}
