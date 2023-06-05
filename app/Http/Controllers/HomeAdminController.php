<?php

namespace App\Http\Controllers;

use App\Models\programkerja;

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
        
        return view('dashboard_admin',compact('dataProker'));
    }
}



