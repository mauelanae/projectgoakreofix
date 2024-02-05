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
        Schema::create('advanceafp', function (Blueprint $table) {
            $table->integer('id');
            $table->enum('kunjungan',['Iya',['Tidak']]);
            $table->enum('kasusditemukan',['Iya',['Tidak']]);
            $table->enum('apakah',['Iya',['Tidak']])->nullable();
            $table->enum('bilaya',['Iya',['Tidak']])->nullable();
            $table->string('tungkai_kanan')->nullable();
            $table->string('tungkai_kiri')->nullable();
            $table->string('lengan_kanan')->nullable();
            $table->string('lengan_kiri')->nullable();
            $table->string('lainnya')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('advanceafp');
    }
};
