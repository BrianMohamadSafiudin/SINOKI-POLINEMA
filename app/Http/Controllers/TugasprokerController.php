<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\tugasproker;

class TugasprokerController extends Controller
{
    // ...

    public function store(Request $request)
    {
        $request->validate([
            'namatugas' => 'required',
            'sie' => 'required',
            'tenggatwaktu' => 'required',
        ]);

        TugasProker::create($request->all());

        $data = request()->query('data');
        return redirect()->route('halamanProker', ['data' => $data])->withStatus(__('Data tugas proker berhasil ditambahkan.'));
    }

    public function upload(Request $request, $id)
    {
        $request->validate([
            'file' => 'required|file|max:3072|mimes:pdf,doc,docx,xls,xlsx,ppt,pptx,jpg',
        ]);

        $tugasproker = Tugasproker::findOrFail($id);

        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $filePath = $file->storeAs('tugasprokers', $fileName, 'public');
            $tugasproker->file = $filePath;
            $tugasproker->status = 'Selesai';
            $tugasproker->save();

            return redirect()->back()->with('status', 'File berhasil diupload.');
        }

        return redirect()->back()->with('error', 'Gagal upload file.');
    }

    public function download($file)
    {
        $tugasproker = Tugasproker::where('file', $file)->firstOrFail();
        $filePath = storage_path('app/public/' . $tugasproker->file);

        return response()->file($filePath);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'evaluasi' => 'nullable',
        ]);

        $tugasproker = Tugasproker::findOrFail($id);
        $tugasproker->evaluasi = $request->evaluasi;
        $tugasproker->save();

        return back()->withStatus(__('Evaluasi berhasil diperbarui.'));
    }

    public function index()
    {
        $tugasprokers = TugasProker::all();

        return view('tugasproker.index', compact('tugasprokers'));
    }

    public function destroy(TugasProker $tugasproker)
    {
        $tugasproker->delete();

        return back()->withStatus(__('Data tugas proker berhasil dihapus.'));
    }

    // ...
}
