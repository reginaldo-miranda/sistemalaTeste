<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tamanho extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_tamanho';
    /* protected $fillable =['nomeCliente'];*/
    protected $table='tamanhos';
}
