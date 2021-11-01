<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entrada extends Model
{
    use HasFactory;
    protected $table = "entradas";
    protected $guarded = [];
    protected $fillable = ['valortotal', 'data'];
    
    function fornecedor(){
        return $this->belongsTo(Fornecedor::class, 'id_fornecedor', 'id');
    }
    function itensentrada(){
        return $this->belongsTo(ItensEntrada::class, 'id_entrada', 'id');
    }
}
