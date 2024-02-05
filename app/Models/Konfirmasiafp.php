<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Konfirmasiafp extends Model
{
    use HasFactory;

    protected $table = "konfirmasiafp";

    protected $guarded = [];

    public function suspekafp(){
        return $this->hasOne(Suspekafp::class);
    }

    public function advanceafp(){
        return $this->hasOne(Advanceafp::class);
    }
}
