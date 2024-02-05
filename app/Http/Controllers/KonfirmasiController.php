<?php

namespace App\Http\Controllers;

use App\Models\Konfirmasiafp;
use App\Models\Konfirmasicampak;
use App\Models\Konfirmasidifteri;
use App\Models\Konfirmasiracun;
use Illuminate\Http\Request;

class KonfirmasiController extends Controller
{
    //Konfirmasi Suspek AFP
    public function createkonfirmasiafp(){
        return view("konfirmasi.createkonfirmasiafp");
    }

    public function storekonfirmasiafp(Request $request){
        Konfirmasiafp::create($request->except(['_token','submit']));
        return redirect('/createkonfirmasiafp')->with('massage', 'Data Konfirmasi AFP Berhasil diinput.');
    }

    //Konfirmasi Suspek Campak
    public function createkonfirmasicampak(){
         return view("konfirmasi.createkonfirmasicampak");
    }

    public function storekonfirmasicampak(Request $request){
        Konfirmasicampak::create($request->except(['_token','submit']));
        return redirect('/createkonfirmasicampak')->with('massage', 'Data Konfirmasi Campak Berhasil diinput.');
    }

    //Konfirmasi Suspek Difteri
    public function createkonfirmasidifteri(){
        return view("konfirmasi.createkonfirmasidifteri");
    }

    public function storekonfirmasidifteri(Request $request){
        Konfirmasidifteri::create($request->except(['_token','submit']));
        return redirect('/createkonfirmasidifteri')->with('massage', 'Data Konfirmasi Difteri Berhasil diinput.');
    }

    //Konfirmasi Suspek Keracunan Makanan
    public function createkonfirmasiracun(){
        return view("konfirmasi.createkonfirmasiracun");
    }

    public function storekonfirmasiracun(Request $request){
        Konfirmasiracun::create($request->except(['_token','submit']));
        return redirect('/createkonfirmasiracun')->with('massage', 'Data Konfirmasi Keraunan Makanan Berhasil diinput.');
    }
}
