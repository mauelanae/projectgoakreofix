<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Konfirmasiracun extends Model
{
    use HasFactory;

    protected $table = 'konfirmasiracun';

    protected $guarded = [];

    public function suspekracun(){
        return $this->hasOne(Suspekracun::class);
    }
}
