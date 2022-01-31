<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;
    protected $table = "produtos";
    protected $guarded = [];
    protected $fillable = ['descricao', 'quantidade', 'valor'];

    function itensentrada(){
        return $this->belongsTo(ItensEntrada::class, 'id_itensentrada', 'id');
    }
    function itensvenda(){
        return $this->belongsTo(ItensVenda::class, 'id_itensvenda', 'id');
    }
}
