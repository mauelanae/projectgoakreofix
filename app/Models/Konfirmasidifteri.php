<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Konfirmasidifteri extends Model
{
    use HasFactory;

    protected $table = "konfirmasidifteri";

    protected $guarded = [];

    public function suspekdifteri(){
        return $this->hasOne(Suspekdifteri::class);
    }
}
