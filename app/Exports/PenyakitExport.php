<?php

namespace App\Exports;


use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class PenyakitExport implements FromCollection, WithHeadings
{
    protected $dataafp;

    public function __construct($dataafp)
    {
        $this->dataafp = $dataafp;
    }

    public function collection()
    {
        return $this->dataafp;
    }

    public function headings(): array
    {
        return [
            'No',
            'PUSKESMAS',
            'NAMA SUSPEK AFP',
            'NIK',
            'NO HP KASUS',
            'TANGGAL LAHIR',
            'JENIS KELAMIN',
            'NAMA ORANG TUA',
            'ALAMAT',
            'KELURAHAN',
            'KECAMATAN',
            'TANGGAL MULAI SAKIT',
            'TANGGAL MULAI LUMPUH',
            'TANGGAL TERIMA INFORMASI',
            'TANGGAL PE',
            'POPULASI RENTAN',
            'TANGGAL POLIO',
            'SEMPEL 1',
            'SEMPEL 2',
            'PENGIRIMAN SEMPEL DKK',
            'Tanggal Terima DKK',
            'NO EPID',
            'STATUS',
            'SEMPEL 1',
            'SEMPEL 2',
            'ADIKUAT',
            'TANGGAL KELUAR HASIL',
            'DASAR SURAT',
            'RTL',
            'Apakah kunjungan ulang dilakukan?',
            'Apakah kasus dapat ditemukan?',
            'Apakah masih ada paralisis redusial?',
            'Bila ya, apakah sifatnya layuh (flaccid)?',
            'Tungkai Kanan',
            'Tungkai Kiri',
            'Lengan Kanan',
            'Lengan Kiri',
            'Lainnya',

        ];
    }
        
}
