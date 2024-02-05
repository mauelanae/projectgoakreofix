<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Konfirmasicampak extends Model
{
    use HasFactory;

    protected $table = "konfirmasicampak";

    protected $guarded = [];

    public function suspekcampak(){
        return $this->hasOne(Suspekcampak::class);
    }
}
