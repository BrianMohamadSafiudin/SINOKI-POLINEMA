<?php

namespace App\Http\Controllers;

use App\Models\programkerja;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class HomeController extends Controller
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

        if (Gate::allows('home_admin')) {
            return view('dashboard_admin');
        } else {
            return view('dashboardUser' ,compact('dataProker'));
        }
    }
}
