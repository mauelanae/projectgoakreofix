<?php

namespace App\Http\Controllers;

use App\Models\Suspekafp;
use App\Models\Suspekcampak;
use App\Models\Suspekdifteri;
use App\Models\Suspekracun;
use Illuminate\Support\Facades\DB;
class DashboardController extends Controller
{
    public function admin(){
        //chart pei 1
    $result = DB::select('SELECT hasil, count(hasil) as total FROM `konfirmasicampak` GROUP by hasil;');
    $chartdata1 = '';
    foreach ($result as $val) {
        $chartdata1.="['".$val->hasil."',   ".$val->total."],";
    }
    //chart pei 2
    $result = DB::select('SELECT hasil, count(hasil) as total FROM konfirmasidifteri GROUP by hasil;');
    $chartdata2 = '';
    foreach ($result as $val) {
        $chartdata2.="['".$val->hasil."',   ".$val->total."],";
    }
    //chart pei 3
    $result = DB::select('SELECT "supekafp" AS source_table, COUNT(*) AS total_rows FROM suspekafp 
                        UNION ALL SELECT "suspekcampak" AS source_table, COUNT(*) AS total_rows FROM suspekcampak 
                        UNION ALL SELECT "suspekdifteri" AS source_table, COUNT(*) AS total_rows FROM suspekdifteri 
                        UNION ALL SELECT "suspekracun" AS source_table, COUNT(*) AS total_rows FROM suspekracun;');
    $chartdata3 = '';
    foreach ($result as $val) {
        $chartdata3.="['".$val->source_table."',   ".$val->total_rows."],";
    }


    //linechart
    //suspekafp
    $grafik = Suspekafp::selectRaw("COUNT(*) as count, DATE_FORMAT(pengirimansempeldkk, '%M') as month_name, MONTH(pengirimansempeldkk) as month_number")
    ->whereYear('pengirimansempeldkk', date('Y'))
    ->groupBy('month_number', 'month_name')
    ->orderBy('month_number')
    ->pluck('count', 'month_name');

    $labels = $grafik->keys();
    $data = $grafik->values();
    
    //suspekcampak
    $grafik2 = Suspekcampak::selectRaw("COUNT(*) as count, DATE_FORMAT(tanggalpengirimankelab, '%M') as month_name, MONTH(tanggalpengirimankelab) as month_number")
    ->whereYear('tanggalpengirimankelab', date('Y'))
    ->groupBy('month_number', 'month_name')
    ->orderBy('month_number')
    ->pluck('count', 'month_name');

    $labels2 = $grafik2->keys();
    $data2 = $grafik2->values();

    //suspekdifteri
    $grafik3 = Suspekdifteri::selectRaw("COUNT(*) as count, DATE_FORMAT(pengirimansempeldkk, '%M') as month_name, MONTH(pengirimansempeldkk) as month_number")
    ->whereYear('pengirimansempeldkk', date('Y'))
    ->groupBy('month_number', 'month_name')
    ->orderBy('month_number')
    ->pluck('count', 'month_name');

    $labels3 = $grafik3->keys();
    $data3 = $grafik3->values();

    //keracunanmakanan
    $grafik4 = Suspekracun::selectRaw("COUNT(*) as count, DATE_FORMAT(pengirimansempeldkk, '%M') as month_name, MONTH(pengirimansempeldkk) as month_number")
    ->whereYear('pengirimansempeldkk', date('Y'))
    ->groupBy('month_number', 'month_name')
    ->orderBy('month_number')
    ->pluck('count', 'month_name');

    $labels4 = $grafik4->keys();
    $data4 = $grafik4->values();

    return view('dashboardadmin', compact('chartdata1','chartdata2', 'chartdata3', 'labels2','data2', 'labels','data','labels3','data3','labels4','data4'));
    }

    public function user(){
        return view("dashboarduser");
    }

    public function services(){
        return view('service');
    }
}
