<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItensVenda extends Model
{
    use HasFactory;
    protected $table = "itensvendas";
    protected $guarded = [];
    protected $fillable = ['precovenda', 'quantidade'];

    
    function venda(){
        return $this->hasOne(Venda::class, 'id_venda', 'id');
    }

    function produto(){
        return $this->hasMany(Produto::class, 'id_produto', 'id');
    }
}
