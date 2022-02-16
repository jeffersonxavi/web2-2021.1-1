<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItensEntrada extends Model
{
    use HasFactory;
    protected $table = "itensentradas";
    protected $fillable = ['entrada_id','produto_id','precocompra','quantidade','unidade','ipi','frete','icms'];
    
    public function entrada(){
        return $this->belongsTo(Entrada::class, 'entrada_id','id');
    }

    public function produto(){
        return $this->belongsTo(Produto::class, 'produto_id','id');
    }
}