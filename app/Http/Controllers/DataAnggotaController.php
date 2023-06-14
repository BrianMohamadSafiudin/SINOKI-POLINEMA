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

    public function destroy(User $dataAnggota)
    {
        $dataAnggota->delete();

        return back()->withStatus(__('Data tugas proker berhasil dihapus.'));
    }
    public function search(Request $request)
    {
    $query = $request->input('query');

    $dataAnggota = User::where('role', 'user')
        ->where(function ($q) use ($query) {
            $q->where('name', 'LIKE', '%' . $query . '%')
                ->orWhere('nim', 'LIKE', '%' . $query . '%')
                ->orWhere('prodi', 'LIKE', '%' . $query . '%')
                ->orWhere('jurusan', 'LIKE', '%' . $query . '%')
                ->orWhere('namaOki', 'LIKE', '%' . $query . '%')
                ->orWhere('email', 'LIKE', '%' . $query . '%');
        })
        ->get();

    return view('dataAnggota', compact('dataAnggota'));
    }
}
