<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HalamanProkerAdminController extends Controller
{
    public function index()
    {
        return view('halamanProkerAdmin');
    }
}
