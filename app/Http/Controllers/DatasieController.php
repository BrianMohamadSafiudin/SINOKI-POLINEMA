<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\DaftarAnggotaProker;
use Illuminate\Http\Request;

class DatasieController extends Controller
{
    public function update(Request $request, $id)
    {
        $request->validate([
            'sie' => 'required',
        ]);
        $daftarAnggota = DaftarAnggotaProker::findOrFail($id);
        $daftarAnggota->sie = $request->sie;
        $daftarAnggota->save();

        return back()->withStatus(__('Data berhasil diperbarui.'));
    }

    public function destroy(Request $request,$id)
    {
        $data = DaftarAnggotaProker::find($id);

        if ($data) {
            $data->delete();
        }

        return back()->withStatus(__('Data sie user berhasil dihapus.'));
    }

    public function store(Request $request)
{
    $request->validate([
        'nama' => 'required',
        'sie' => 'required',
        'data' => 'required',
    ]);

    $data = $request->input('data');
    $nama = $request->input('nama');

    $existingData = DaftarAnggotaProker::where('nama', $nama)
        ->where('idProker', $data)
        ->first();

    // dd($data);
    if (!$existingData) {
        DaftarAnggotaProker::create($request->all());
        return redirect()->route('tambahDataSie', ['data' => $data])->withStatus(__('Data tugas proker berhasil ditambahkan.'));
    }
    
    return redirect()->route('tambahDataSie', ['data' => $data])->withErrors(__('Data dengan nama tersebut sudah ada dalam proker ini.'));
}
}
