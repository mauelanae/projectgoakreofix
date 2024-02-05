<?php

namespace App\Http\Controllers;

use App\Exports\PenyakitExport;
use App\Exports\suspekcampakExport;
use App\Exports\suspekdifteriExport;
use App\Exports\suspekracunExport;
use App\Models\Suspekafp;
use App\Models\Suspekcampak;
use App\Models\Suspekdifteri;
use App\Models\Suspekracun;
use Maatwebsite\Excel\Facades\Excel;

class ExportController extends Controller
{
    public function suspekafp()
    {
        // Lakukan join antara dua tabel
        $dataafp = Suspekafp::join('konfirmasiafp', 'suspekafp.id', '=', 'konfirmasiafp.id')
        ->join('advanceafp','advanceafp.id','=','suspekafp.id')
            ->select('suspekafp.id','suspekafp.puskesmas','suspekafp.namasuspekafp','suspekafp.nik','suspekafp.nohpkasus',
            'suspekafp.tanggallahir','suspekafp.jeniskelamin','suspekafp.namaorangtua','suspekafp.alamat','suspekafp.kelurahan',
            'suspekafp.kecamatan','suspekafp.tanggalmulaisakit','suspekafp.tanggalmulailumpuh','suspekafp.tanggalterimainformasi','suspekafp.tanggalpe',
            'suspekafp.populasirentan','suspekafp.tanggalpolio','suspekafp.pengembilansempelpertama','suspekafp.pengembilansempelkedua','suspekafp.pengirimansempeldkk',
            'konfirmasiafp.tanggalterimadkk','konfirmasiafp.noepid','konfirmasiafp.status','konfirmasiafp.sempel1',
            'konfirmasiafp.sempel2','konfirmasiafp.adikuat','konfirmasiafp.tanggalhasilkeluar','konfirmasiafp.dasarsurat',
            'konfirmasiafp.rtl','advanceafp.*')
            ->get();

        // Ekspor data ke Excel menggunakan Laravel Excel
        return Excel::download(new PenyakitExport($dataafp), 'rekapsuspekafp.xlsx');
    }

    public function suspekcampak(){
        $datacampak = Suspekcampak::join('konfirmasicampak','suspekcampak.id','=', 'konfirmasicampak.id')
        ->select('suspekcampak.id','suspekcampak.noepid','suspekcampak.puskesmas','suspekcampak.tanggalterimalaporan','suspekcampak.tanggalpe','suspekcampak.nik','suspekcampak.namakasus',
        'suspekcampak.jeniskelamin','suspekcampak.tanggallahir','suspekcampak.alamat','suspekcampak.kelurahan','suspekcampak.kecamatan',
        'suspekcampak.namaorangtua','suspekcampak.tanggalmulaidemam','suspekcampak.tanggalmulairash','suspekcampak.riwayatvaksin',
        'suspekcampak.pernahimunisasiMMR','suspekcampak.tanggalvaksinMRterakhir','suspekcampak.pemberianvitA','suspekcampak.apakahbepergian','suspekcampak.apakahambildarah',
        'suspekcampak.tanggalambildarah','suspekcampak.apakahtesurin','suspekcampak.tanggalambilurin','suspekcampak.tanggalpengirimankelab',
        'suspekcampak.keadaansaatini',
        'konfirmasicampak.tanggalterimadkk','konfirmasicampak.noepid','konfirmasicampak.status','konfirmasicampak.hasil',
        'konfirmasicampak.tanggalhasilkeluar','konfirmasicampak.dasarsurat','konfirmasicampak.rtl')
        ->get();

        return Excel::download(new suspekcampakExport($datacampak),'rekapsuspekcampak.xlsx');
    }

    public function suspekdifteri(){
        $datadifteri = Suspekdifteri::join('konfirmasidifteri','suspekdifteri.id','=', 'konfirmasidifteri.id')
        ->select('suspekdifteri.id','suspekdifteri.puskesmas','suspekdifteri.namakasus','suspekdifteri.nik','suspekdifteri.statussempel',
        'suspekdifteri.jeniskelamin','suspekdifteri.tanggallahir','suspekdifteri.namasekolah_kerja','suspekdifteri.alamat','suspekdifteri.kelurahan',
        'suspekdifteri.kecamatan','suspekdifteri.populasirentan','suspekdifteri.tanggalpe','suspekdifteri.pengembilansempel','suspekdifteri.pengirimansempeldkk',
        'konfirmasidifteri.*')
        ->get();

        return Excel::download(new suspekdifteriExport($datadifteri),'rekapsuspekdifteri.xlsx');
    }

    public function suspekracun(){
        $dataracun = Suspekracun::join('konfirmasiracun','suspekracun.id','=', 'konfirmasiracun.id')
        ->select('suspekracun.id','suspekracun.puskesmas','suspekracun.namaindekkasus','suspekracun.lokasikejadian','suspekracun.kelurahan',
        'suspekracun.kecamatan','suspekracun.tanggalinformasi','suspekracun.tanggalpe','suspekracun.pengembilansempel','suspekracun.pengirimansempeldkk',
        'suspekracun.jenissempel',
        'konfirmasiracun.*')
        ->get();

        return Excel::download(new suspekracunExport($dataracun),'rekapsuspekracun.xlsx');
    }
}
