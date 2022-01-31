<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;
    protected $table = "clientes";
    protected $fillable = ['nome', 'endereco', 'debito'];

    function contato(){
        return $this->hasMany(Contato::class, 'id_fornecedor', 'id');
    }
    function venda(){
        return $this->hasMany(Venda::class, 'id_fornecedor', 'id');
    }
}
