<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fornecedor extends Model
{
    use HasFactory;
    protected $table = "fornecedores";
    protected $guarded = [];
    //protected $fillable = ['nome', 'endereco', 'email'];
    function contato(){
        return $this->hasMany(Contato::class, 'fornecedor_id', 'id');
    }
}
