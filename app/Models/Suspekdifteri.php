<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Suspekdifteri extends Model
{
    use HasFactory;

    protected $table = 'suspekdifteri';

    protected $guarded = [];

    public function konfirmasidifteri(){
        return $this->hasOne(KonfirmasiDifteri::class);
    }

    public function getSuspekdifteridanKonfirmasidifteri(){
        return $this->belongsTo(Konfirmasidifteri::class, 'id', 'id');
    }
}
