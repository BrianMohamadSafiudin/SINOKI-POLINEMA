<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ProfileRequest;
use App\Http\Requests\PasswordRequest;
use Illuminate\Support\Facades\Hash;
use App\Models\Image;

class TugasprokerController extends Controller
{
public function index(ProfileRequest $request)
    {
        /**
         * Update the profile
         *
         * @param  \App\Http\Requests\ProfileRequest  $request
         * @return \Illuminate\Http\RedirectResponse
         */

        auth()->user()->index($request->all());

        return back()->withStatus(__('Data Tugas successfully created.'));
    }
}
