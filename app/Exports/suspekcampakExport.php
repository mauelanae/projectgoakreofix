<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class suspekcampakExport implements FromCollection, WithHeadings
{
    protected $datacampak;

    public function __construct($datacampak)
    {
        $this->datacampak = $datacampak;
    }

    public function collection()
    {
        return $this->datacampak;
    }

    public function headings(): array
    {
        return [
            'No',
            'NOMOR EPID',
            'PUSKESMAS',
            'TANGGAL TERIMA LAPORAN',
            'TANGGAL PE',
            'NIK',
            'NAMA KASUS',
            'JENIS KELAMIN',
            'TANGGAL LAHIR',
            'ALAMAT',
            'KELURAHAN',
            'KECAMATAN',
            'NAMA ORANG TUA',
            'TANGGAL MULAI DEMAM',
            'TANGGAL MULAI RASH',
            'RIWAYAT VAKSIN',
            'PERNAH IMUNISASI MMR',
            'TANGGAL VAKSINASI IMUNISASI MR',
            'PEMBERIAN VITAMIN A',
            'APAKAH BEPERGIAN',
            'APAKAH SPESIMEN DARAH DIAMBIL',
            'TANGGAL AMBIL SPESIMEN DARAH',
            'APAKAH TES URIN',
            'TANGGAL AMBIL SPESIMEN URIN',
            'TANGGAL PENGIRIMAN KE LAB',
            'KEADAAN SAAT INI',
            'TANGGAL TERIMA DKK',
            'NO EPID',
            'STATUS',
            'HASIL',
            'TANGGAL HASIL KELUAR',
            'DASAR SURAT',
            'RTL',
        ];
    }
}
