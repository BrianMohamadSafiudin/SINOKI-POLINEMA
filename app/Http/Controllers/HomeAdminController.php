<?php

namespace App\Http\Controllers;

use App\Models\programkerja;
use App\Models\Oki;
use Illuminate\Http\Request;

class HomeAdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $dataProker = programkerja::all();
        $dataOki = Oki::all();

        return view('dashboard_admin',compact('dataProker','dataOki'));
    }

    public function search(Request $request)
    {
    $query = $request->input('query');
    $dataOki = Oki::all();

    $dataProker = programkerja::where(function ($q) use ($query) {
            $q->where('namaOki', 'LIKE', '%' . $query . '%')
                ->orWhere('namaproker', 'LIKE', '%' . $query . '%')
                ->orWhere('bidang', 'LIKE', '%' . $query . '%')
                ->orWhere('tanggalproker', 'LIKE', '%' . $query . '%')
                ->orWhere('tempat', 'LIKE', '%' . $query . '%');
                // ->orWhere('email', 'LIKE', '%' . $query . '%');
        })
        ->get();
//
//        if ($dataProker->isEmpty()) {
//            echo '<script>alert("Proker tidak ditemukan.");</script>';
//        }

    return view('dashboard_admin', compact('dataProker', 'dataOki'));
    }
}



