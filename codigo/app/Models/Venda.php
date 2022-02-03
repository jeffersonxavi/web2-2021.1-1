<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venda extends Model
{
    use HasFactory;

    protected $table = "vendas";

    protected $fillable = ['cliente_id','valortotal','datavenda','formapagamento_id','status'];

    protected $guarded = [];
    
    public function cliente(){
        return $this->belongsTo(Cliente::class, 'venda_id','id');
    }

    function itensvenda(){
        return $this->hasMany(ItensVenda::class, 'venda_id', 'id');
    }

}