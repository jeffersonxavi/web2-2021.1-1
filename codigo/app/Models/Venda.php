<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venda extends Model
{
    use HasFactory;
    protected $table = "vendas";
    protected $guarded = [];
    protected $fillable = ['valortotal', 'data'];
}
