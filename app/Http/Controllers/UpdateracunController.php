<?php

namespace App\Http\Controllers;

use App\Models\Konfirmasiracun;
use Illuminate\Http\Request;

class UpdateracunController extends Controller
{
    public function editracun($id){
        $konfirmasiracun = 
        Konfirmasiracun::find($id);
        return view("konfirmasiadmin.editkonfirmracunadmin", compact('konfirmasiracun'));
    }
    public function updateracun($id, Request $request){
        $konfirmasiracun = Konfirmasiracun::find($id);
        $konfirmasiracun->update($request->except(['_token','submit']));
        return redirect('/konfirmasiadmin/createkonfirmracunadmin')->with('massage', 'Update Data Konfirmasi Keracunan Makanan Berhasil diinput.');
    }
}
