<?php

namespace App\Http\Controllers;

use App\Models\Advanceafp;
use App\Models\Suspekafp;
use App\Models\Suspekcampak;
use App\Models\Suspekdifteri;
use App\Models\Suspekracun;

class JoindataController extends Controller
{
    function joinafp(){
        $join = Suspekafp::paginate(10);
        $data= Advanceafp::all();
        $data3 = Suspekafp::join('konfirmasiafp', 'konfirmasiafp.id', '=', 'suspekafp.id')
                        ->join('advanceafp', 'advanceafp.id', '=', 'suspekafp.id')
                        -> get(['suspekafp.*','konfirmasiafp.*','advanceafp.*']);

        return view('konfirmasi.tablekonfirmasiafp', compact('join','data3','data'));        
    }

    function joincampak(){
        $join = Suspekcampak::paginate(10);
        return view('konfirmasi.tablekonfirmasicampak',compact('join'));
    }

    function joindifteri(){
        $join = Suspekdifteri::paginate(10);
        
        return view('konfirmasi.tablekonfirmasidifteri',compact('join'));
    }

    function joinracun(){
        $join = Suspekracun::paginate(10);
        
        return view('konfirmasi.tablekonfirmasiracun',compact('join'));
    }
}
