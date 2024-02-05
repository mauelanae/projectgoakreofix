<?php

namespace App\Http\Controllers;

use App\Models\Advanceafp;
use App\Models\Suspekafp;
use App\Models\Suspekcampak;
use App\Models\Suspekdifteri;
use App\Models\Suspekracun;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function searchafp(Request $request) {
        $join = Suspekafp::all();
        $keyword = $request->search;
        if ($request->has('search')) {
            $join = Suspekafp::with('getSuspekafpdanKonfirmasiafp')
                    ->with('getSuspekafpdanKonfirmasiafpdandataafp')
                    ->with('getadvanceafp')
                    ->where('puskesmas','like','%'.$keyword.'%')
                    ->paginate(10);
        }else{
            $join = Suspekafp::all();
        }
        $dataafp = Advanceafp::find('1');
        
        return view('konfirmasi.tablekonfirmasiafp',compact('join'));
    }

    public function searchcampak(Request $request) {
        $join = Suspekcampak::all();
        $keyword = $request->search;
        if ($request->has('search')) {
            $join = Suspekcampak::with('getSuspekcampakpdanKonfirmasicampak')
                    ->where('puskesmas','like','%'.$keyword.'%')
                    ->paginate(10);
        }else{
            $join = Suspekcampak::all();
        }
        return view('konfirmasi.tablekonfirmasicampak',compact('join'));
    }

    public function searchdifteri(Request $request){
        $join = Suspekdifteri::all();
        $keyword = $request->search;
        if ($request->has('search')) {
            $join = Suspekdifteri::with('getSuspekdifteridanKonfirmasidifteri')
                    ->where('puskesmas','like','%'.$keyword.'%')
                    ->paginate(10);
        }
        return view('konfirmasi.tablekonfirmasidifteri',compact('join'));
    }

    public function searchracun(Request $request){
        $join = Suspekracun::all();
        $keyword = $request->search;
        if ($request->has('search')) {
            $join = Suspekracun::with('getRacundanKonfirmasiracun')
                    ->where('puskesmas','like','%'.$keyword.'%')
                    ->paginate(10);
        }
        return view('konfirmasi.tablekonfirmasiracun', compact('join'));
    }
}
