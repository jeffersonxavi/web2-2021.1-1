<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;
    
    protected $fillable = ['nome', 'telefone', 'cpf', 'cnpj','debito'];

    function venda(){
        return $this->hasMany(Venda::class);
    }
}
