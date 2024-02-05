<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('konfirmasicampak', function (Blueprint $table) {
            $table->integer('id');
            $table->enum('puskesmas', ['BANDAHARJO','BANGETAYU','BUGANGAN','BULU LOR','CANDILAMA','GAYAMSARI',
            'GENUK','GUNUNGPATI','HALMAHERA','KAGOK','KARANG ANYAR','KARANG AYU',
            'KARANG DORO','KARANG MALANG','KEDUNGMUNDU','KROBOKAN','LAMPER TENGAH','LEBDOSARI',
            'MANGKANG','MANYARAN','MIJEN','MIROTO','NGALIYAN','NGEMPLAK SIMONGAN',
            'NGESREP','PADANGSARI','PANDANARAN','PEGANDAN','PONCOL','PUDAK PAYUNG',
            'PURWOYOSO','ROWOSARI','SEKARAN','SRONDOL','TAMBAKAJI','TLOGOSARI KULON','TLOGOSARI WETAN','PLAMONGANSARI',
            'RSUP Dr. KARIADI','RSUD TUGUREJO','RSUD K.R.M.T WONGSONEGORO','RS TELOGOREJO SEMARANG','RS. ST. ELISABETH SEMARANGRS',
            'RSI SULTAN AGUNG SEMARANG','RS COLUMBIA ASIA SEMARANG','RS ROEMANI MUHAMMADIYAH','RS PANTI WILASA CITARUM','RS PANTI WILASA DR. CIPTO',
            'RS BHAKTI  WIRA TAMTAMA','RS BHAYANGKARA SEMARANG','RS HERMINA PANDANARAN','RS HERMINA BANYUMANIK','RS PERMATA MEDIKA',
            'RS NASIONAL DIPONEGORO','RSU  WILLIAM BOOTH','RS BANYUMANIK','RSU  BHAYANGKARA AKPOL','RS SILOAM SEMARANG',
            'RSJD Dr. AMINO GONDOHUTOMO','RSIA PLAMONGAN INDAH','RSIA GUNUNG SAWO','RSIA KUSUMA PRADJA','RSIA BUNDA',
            'RSIA ANANDA PASAR ACE','RSIA ANUGERAH','RSI GIGI DAN MULUT SULTAN AGUNG','RS GIGI DAN MULUT UNIMUS','RS MATA JEC CANDI SEMARANG',
            'RS BANYUMANIK 2','RS KELUARGA SEHAT III SEMARANG']);
            $table->date('tanggalterimadkk');
            $table->string('noepid');
            $table->enum('status', ['Proses Pemeriksaan', 'Keluar Hasil']);
            $table->enum('hasil', ['Positif Campak', 'Positif Rubela', 'Positif Campak Rubela', 'Negatif'])->nullable();
            $table->date('tanggalhasilkeluar')->nullable();
            $table->string('dasarsurat')->nullable();
            $table->text('rtl')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('konfirmasicampak');
    }
};
