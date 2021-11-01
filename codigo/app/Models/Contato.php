<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contato extends Model
{
    use HasFactory;
    protected $table = "contatos";
    protected $fillable = ['telefone', 'instagram', 'telegram'];
    
    function fornecedor(){
        return $this->belongsTo(Fornecedor::class, 'id_fornecedor', 'id');
    }
    function cliente(){
        return $this->belongsTo(Cliente::class, 'id_cliente', 'id');
    }
}
