<?php

namespace App\Http\Controllers;

use App\Models\Konfirmasicampak;
use Illuminate\Http\Request;

class UpdatecampakController extends Controller
{
    public function editcampak($id){
        $konfirmasicampak = Konfirmasicampak::find($id);
        return view("konfirmasiadmin.editkonfirmcampakadmin", compact(['konfirmasicampak']));
    }
    public function updatecampak($id, Request $request){
        $konfirmasicampak = Konfirmasicampak::find($id);
        $konfirmasicampak->update($request->except(['_token','submit']));
        return redirect('/konfirmasiadmin/createkonfirmcampakadmin')->with('massage', 'Update Data Konfirmasi Campak Berhasil diinput.');
    }
}
