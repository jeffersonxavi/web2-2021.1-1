<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fornecedor extends Model
{
    use HasFactory;
    protected $table = "fornecedores";
    protected $fillable = ['nome','cnpj','endereco','telefone'];

    function endereco(){
        return $this->hasMany(Endereco::class, 'fornecedor_id', 'id');

    }

    public function entrada(){
        return $this->belongsTo(Entrada::class, 'fornecedor_id','id');
    }
}
