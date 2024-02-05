<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Suspekracun extends Model
{
    use HasFactory;

    protected $table ='suspekracun';

    protected $guarded = [];

    public function konfirmasiracun(){
        return $this->hasOne(Konfirmasiracun::class);
    }

    public function getRacundanKonfirmasiracun(){
        return $this->belongsTo(Konfirmasiracun::class, 'id','id');
    }
}
