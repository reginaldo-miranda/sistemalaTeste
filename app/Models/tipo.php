<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tipo extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_tipo';
   /* protected $fillable =['nomeCliente'];*/
    protected $table='tipos';
}
