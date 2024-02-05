<?php

namespace App\Http\Controllers;

use App\Models\Advanceafp;
use Illuminate\Http\Request;

class AdvanceafpController extends Controller
{
    public function createdata(){
        return view('advanced.createdata');
    }
    public function storedata(Request $request){
        Advanceafp::create($request->except(['_token','submit']));
        return redirect("/advanced/createdata")->with('massage', 'Data Lanjutan Suspek AFP Berhasil diinput.');
    }
}
