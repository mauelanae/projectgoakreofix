<?php

namespace App\Http\Controllers;

use App\Models\Advanceafp;
use App\Models\Suspekafp;
use App\Models\Suspekcampak;
use App\Models\Suspekdifteri;
use App\Models\Suspekracun;

class JoinadminController extends Controller
{
    function joinadminafp(){
        $join = Suspekafp::paginate(10);
        $data= Advanceafp::all();
        $data3 = Suspekafp::join('konfirmasiafp', 'konfirmasiafp.id', '=', 'suspekafp.id')
                        ->join('advanceafp', 'advanceafp.id', '=', 'suspekafp.id')
                        -> get(['suspekafp.*','konfirmasiafp.*','advanceafp.*']);

        return view('konfirmasiadmin.tablekonfirmasiafpadmin', compact('join','data3','data'));        
    }

    function joinadmincampak(){
        $join = Suspekcampak::paginate(10);
        return view('konfirmasiadmin.tablekonfirmasicampakadmin',compact('join'));
    }

    function joinadmindifteri(){
        $join = Suspekdifteri::paginate(10);
        
        return view('konfirmasiadmin.tablekonfirmasidifteriadmin',compact('join'));
    }

    function joinadminracun(){
        $join = Suspekracun::paginate(10);
        
        return view('konfirmasiadmin.tablekonfirmasiracunadmin',compact('join'));
    }
}
