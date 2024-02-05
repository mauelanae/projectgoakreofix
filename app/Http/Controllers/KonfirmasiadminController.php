<?php

namespace App\Http\Controllers;

use App\Models\Konfirmasiafp;
use App\Models\Konfirmasicampak;
use App\Models\Konfirmasidifteri;
use App\Models\Konfirmasiracun;
use Illuminate\Http\Request;

class KonfirmasiadminController extends Controller
{
     //Konfirmasi Suspek AFP
     public function create(){
        return view("konfirmasiadmin.createkonfirmafpadmin");
    }
    public function store(Request $request){
        Konfirmasiafp::create($request->except(['_token','submit']));
        return redirect('/konfirmasiadmin/createkonfirmafpadmin')->with('massage', 'Data Konfirmasi AFP Berhasil diinput.');
    }

    //Konfirmasi Suspek Campak
    public function createkoncampak(){
        return view("konfirmasiadmin.createkonfirmcampakadmin");
    }
    public function storekoncampak(Request $request){
       Konfirmasicampak::create($request->except(['_token','submit']));
       return redirect('/konfirmasiadmin/createkonfirmcampakadmin')->with('massage', 'Data Konfirmasi Campak Berhasil diinput.');
    }

    //Konfirmasi Suspek Difteri
    public function createkondifteri(){
        return view("konfirmasiadmin.createkonfirmdifteriadmin");
    }
    public function storedifteri(Request $request){
        Konfirmasidifteri::create($request->except(['_token','submit']));
        return redirect('/konfirmasiadmin/createkonfirmdifteriadmin')->with('massage', 'Data Konfirmasi Difteri Berhasil diinput.');
    }

    //Konfirmasi Suspek Keracunan Makanan
    public function createracun(){
        return view("konfirmasiadmin.createkonfirmracunadmin");
    }
    public function storeracun(Request $request){
        Konfirmasiracun::create($request->except(['_token','submit']));
        return redirect('/konfirmasiadmin/createkonfirmracunadmin')->with('massage', 'Data Konfirmasi Keraunan Makanan Berhasil diinput.');
    }
}
