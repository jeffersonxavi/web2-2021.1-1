<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venda extends Model
{
    use HasFactory;

    protected $table = "vendas";

    protected $fillable = ['cliente_id','formapagamento_id','valortotal','datavenda','status'];

    
    public function cliente(){
        return $this->belongsTo(Cliente::class);
    }



    function itensvenda(){
        return $this->hasMany(ItensVenda::class);
    }

}