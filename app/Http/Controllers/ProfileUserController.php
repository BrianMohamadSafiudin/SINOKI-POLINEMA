<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\ProfileRequest;
use App\Http\Requests\PasswordRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;


class ProfileUserController extends Controller
{
    public function index()
    {
        $dataAnggota = User::all();

        return view('profileUser', compact('dataAnggota'));
    }

    /**
     * Update the profile
     *
     * @param  \App\Http\Requests\ProfileRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(ProfileRequest $request)
    {
        if (auth()->user()->id == 1) {
            return back()->withErrors(['not_allow_profile' => __('You are not allowed to change data for a default user.')]);
        }

        auth()->user()->update($request->all());

        return back()->withStatus(__('Profile successfully updated.'));
    }

    public function image(Request $request, $id)
    {
        $data = $request->validate([
            'image' => 'image|mimes:jpeg,png,jpg|max:2048', // Validation rules for the image file
        ]);

        $user = User::findOrFail($id);

        // Validate if the authenticated user is the same as the user being edited
        if ($user->id != auth()->user()->id) {
            return redirect()->back()->with('error', 'You are not authorized to perform this action.');
        }

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('users', 'public');
            $user->image = $imagePath;
        }

        $user->save();

        return redirect()->back()->with('status', 'Foto profil berhasil diupload.');
    }

}
