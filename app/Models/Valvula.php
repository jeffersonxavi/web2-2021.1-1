<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Valvula extends Model
{
    use HasFactory;
    protected $table = "valvulas";
    protected $fillable = ['quantidade'];


    function produto(){
        return $this->hasMany(Produto::class);
    }
}