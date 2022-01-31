<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItensEntrada extends Model
{
    use HasFactory;
    protected $table = "itensentradas";
    protected $guarded = [];
    protected $fillable = ['precocompra', 'quantidade'];
   
    
    function entrada(){
        return $this->hasOne(Entrada::class, 'id_entrada', 'id');
    }

    function produto(){
        return $this->hasMany(Produto::class, 'id_produto', 'id');
    }
}
