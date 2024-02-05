<?php

namespace App\Exports;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class suspekdifteriExport implements FromCollection, WithHeadings
{
    protected $datadifteri;

    public function __construct($datadifteri)
    {
        $this->datadifteri = $datadifteri;
    }

    public function collection()
    {
        return $this->datadifteri;
    }

    public function headings(): array
    {
        return [
            'No',
            'PUSKESMAS',
            'NAMA KASUS',
            'NIK',
            'STATUS SEMPEL',
            'JENIS KELAMIN',
            'TANGGAL LAHIR',
            'NAMA SEKOLAH/TEMPAT KERJA',
            'ALAMAT',
            'KELURAHAN',
            'KECAMATAN',
            'POPULASI RENTAN',
            'TANGGAL PE',
            'PENGAMBILAN SEMPEL',
            'PENGIRIMAN SEMPEL DKK',
            'NO EPID',
            'TANGGAL TERIMA DKK',
            'STATUS',
            'HASIL',
            'TANGGAL HASIL KELUAR',
            'DASAR SURAT',
            'RTL',
        ];
    }
        
}

