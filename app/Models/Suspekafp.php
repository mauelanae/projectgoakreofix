<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Suspekafp extends Model
{
    use HasFactory;

    protected $table = "suspekafp";

    protected $guarded = [];

    public function konfirmasiafp(){
        return $this->hasOne(Konfirmasiafp::class);
    }
    public function advanceafp(){
        return $this->hasOne(Advanceafp::class);
    }

    public function getSuspekafpdanKonfirmasiafp(){
                    
        return $this->belongsTo(Konfirmasiafp::class, 'id', 'id');
    }

    public function getSuspekafpdanKonfirmasiafpdandataafp(){
                    
        return $this->belongsTo(Suspekafp::class, 'id', 'id');
    }

    public function getadvanceafp(){
        return $this->belongsTo(Advanceafp::class,'id','id');
    }
}
