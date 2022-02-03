<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entrada extends Model
{
    use HasFactory;

    protected $table = "entradas";
    protected $fillable = ['fornecedor_id','valortotalnota','datacompra','status'];

    protected $guarded = [];
    function fornecedor(){
        return $this->hasMany(Fornecedor::class, 'entrada_id', 'id');
    }
    function itensentrada(){
        return $this->hasMany(ItensEntrada::class, 'entrada_id', 'id');
    }

}