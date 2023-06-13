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

        $user = auth()->user();

        if (is_null($request->password)) {
            $request->merge(['password' => $user->password]);
        } else {
            $request->merge(['password' => Hash::make($request->get('password'))]);
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

    public function deleteImage($id)
    {
        $user = User::findOrFail($id);
        $filePath = storage_path('/storage/app/public/' . $user->image);

        $user->image = null;
        $user->save();


        return redirect()->back()->with('status', 'Berhasil menghapus Foto');
    }

    public function destroy(User $deleteImage)
    {
        $deleteImage->delete();

        return back()->withStatus(__('Foto berhasil dihapus.'));
    }
}
