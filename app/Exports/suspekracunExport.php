<?php

namespace App\Exports;


use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class suspekracunExport implements FromCollection, WithHeadings
{
    protected $dataracun;

    public function __construct($dataracun)
    {
        $this->dataracun = $dataracun;
    }

    public function collection()
    {
        return $this->dataracun;
    }

    public function headings(): array
    {
        return [
            'No',
            'PUSKESMAS',
            'NAMA INDEK KASUS',
            'LOKASI KEJADIAN',
            'KELURAHAN',
            'KECAMATAN',
            'TANGGAL INFORMASI',
            'TANGGAL PE',
            'PENGAMBILAN SEMPEL',
            'PENGIRIMAN SEMPEL DKK',
            'JENIS SEMPEL',
            'TANGGAL TERIMA DKK',
            'STATUS',
            'HASIL SEMPEL',
            'TANGGAL HASIL KELUAR',
            'DASAR SURAT',
        ];
    }
        
}
