<?php

namespace App\Http\Controllers;

use App\Models\Konfirmasidifteri;
use Illuminate\Http\Request;

class UpdatedifteriController extends Controller
{
    public function editdifteri($id){
        $konfirmasidifteri = 
        Konfirmasidifteri::find($id);
        return view("konfirmasiadmin.editkonfirmdifteriadmin", compact('konfirmasidifteri'));
    }
    public function updatedifteri($id, Request $request){
        $konfirmasiracun = Konfirmasidifteri::find($id);
        $konfirmasiracun->update($request->except(['_token','submit']));
        return redirect('/konfirmasiadmin/createkonfirmdifteriadmin')->with('massage', 'Update Data Konfirmasi Suspek Difteri Berhasil diinput.');
    }
}
