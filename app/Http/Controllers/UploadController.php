<?php

namespace App\Http\Controllers;


use App\Models\Upload;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UploadController extends Controller
{
    public function uploaddokumen(){
        $data = Upload::all();
        return view ("upload.createupload",compact("data"));
    }

    public function table(){
        $data = Upload::all();
        return view ("upload.tableupload",compact("data"));
    }

    public function upload(Request $request)
    {
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $filePath = $file->storeAs('public/uploads', $fileName);

            $newFile = new Upload;
            $newFile->name = $request->input('name');
            $newFile->filename = $fileName;
            $newFile->path = $filePath;
            $newFile->save();

            return redirect("/upload")->with('massage','Upload file berhasil');
        } else {
            return 'Tidak ada file yang dipilih.';
        }
    }

    public function download($id)
    {
        $data = Upload::findOrFail($id);
        $path = storage_path('app/' . $data->path);
        return response()->download($path);
    }

    public function delete($id)
    {
        // Cari data berdasarkan ID
        $data = Upload::find($id);

        if (!$data) {
            return redirect()->back()->with('massage', 'Data tidak ditemukan.');
        }

        // Hapus data
        $data->delete();

        return redirect()->back()->with('massage', 'Data berhasil dihapus!');
    }
}
