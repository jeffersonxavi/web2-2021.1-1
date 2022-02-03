<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Localizacao extends Model
{
    use HasFactory;
    protected $table = "localizacoes";
    protected $fillable = ['localizacao'];


    function produto(){
        return $this->hasMany(Produto::class, 'localizacao_id', 'id');
    }
}