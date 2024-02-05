<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Suspekcampak extends Model
{
    use HasFactory;

    protected $table = "suspekcampak";

    protected $guarded = [];

    public function konfirmasicampak(){
        return $this->hasOne(Konfirmasicampak::class);
    }

    public function getSuspekcampakpdanKonfirmasicampak(){
                    
        return $this->belongsTo(Konfirmasicampak::class, 'id', 'id');
    }
}
