<?php

namespace App\Http\Controllers;

use App\Exports\SuspekafpExport;
use App\Models\Suspekafp;
use App\Models\Suspekcampak;
use App\Models\Suspekdifteri;
use App\Models\Suspekracun;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class PenyakitController extends Controller
{
    //CRUD suspek AFP
    public function suspekafp(){
        $suspekafp = Suspekafp::orderBy('created_at', 'desc')->paginate(10);
        return view('penyakit.tablesuspekafp', ['suspekafp' => $suspekafp]);
    }
    public function createafp(){
        return view('penyakit.createsuspekafp');
    }
    public function storeafp(Request $request){
        Suspekafp::create($request->except(['_token','submit']));
        return redirect('/createsuspekafp')->with('massage', 'Data Suspek AFP Berhasil diinput.');
    }

    //CRUD suspek Campak
    public function suspekcampak(){
        $suscampak = Suspekcampak::orderBy('created_at', 'desc')->paginate(10);
        return view('penyakit.tablesuspekcampak', ['suscampak' => $suscampak]);
    }
    public function createcampak(){
        return view('penyakit.createsuspekcampak');
    }
    public function storecampak(Request $request){
        Suspekcampak::create($request->except(['_token','submit']));
        return redirect('/createsuspekcampak')->with('massage', 'Data Suspek Campak Berhasil diinput.');
    }

    //CRUD suspek difteri
    public function suspekdifteri(){
        $suspekdifteri = Suspekdifteri::orderBy('created_at', 'desc')->paginate(10);
        return view('penyakit.tablesuspekdifteri',['suspekdifteri' => $suspekdifteri]);
    }
    public function createdifteri(){
        return view('penyakit.createsuspekdifteri');
    }
    public function storedifteri(Request $request){
        Suspekdifteri::create($request->except(['_token','submit']));
        return redirect('/createsuspekdifteri')->with('massage', 'Data Suspek Difteri Berhasil diinput.');
    }

    //CRUD Keracunan Makanan
    public function suspekracun(){
        $susracun = Suspekracun::orderBy('created_at', 'desc')->paginate(10);
        return view('penyakit.tablesuspekracun',['susracun' => $susracun]);
    }
    public function createracun(){
        return view('penyakit.createsuspekracun');
    }
    public function storeracun(Request $request){
        Suspekracun::create($request->except(['_token','submit']));
        return redirect('/createsuspekracun')->with('massage', 'Data Keracunan Makanan Berhasil diinput.');
    }
}
