<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class DatasieController extends Controller
{
    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $user->sie = $request->input('sie');
        $user->save();

        return redirect()->route('halamanDataSie')->withStatus(__('Data sie user berhasil diubah.'));
    }

    public function delete(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $user->sie = $request->input('sie');
        $user->save();

        return back()->withStatus(__('Data sie user berhasil dihapus.'));
    }
}
