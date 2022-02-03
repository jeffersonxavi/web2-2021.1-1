<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormaPagamento extends Model
{
    use HasFactory;
    protected $table = "formasdepagamento";
    protected $fillable = ['condicao',
    'forma'];

    public function cliente(){
        return $this->belongsTo(Cliente::class, 'cliente_id','id');
    }
}
