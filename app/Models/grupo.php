<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class grupo extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_grupo';
   /* protected $fillable =['nomeCliente'];*/
    protected $table='grupos';
}
