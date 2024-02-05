<?php

namespace App\Http\Controllers;

use App\Models\Konfirmasiafp;
use Illuminate\Http\Request;

class UpdateafpController extends Controller
{
    public function editafp($id){
        $konfirmasiafp = 
        Konfirmasiafp::find($id);
        return view("konfirmasiadmin.editkonfirmafpadmin", compact(['konfirmasiafp']));
    }
    public function updateafp($id, Request $request){
        $konfirmasiafp = Konfirmasiafp::find($id);
        $konfirmasiafp->update($request->except(['_token','submit']));
        return redirect('/konfirmasiadmin/createkonfirmafpadmin')->with('massage', 'Update Data Konfirmasi AFP Berhasil diinput.');
    }
}
