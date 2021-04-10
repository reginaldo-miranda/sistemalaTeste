<?php

namespace App\Http\Livewire;

use Livewire\Component;

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class grupo extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_grupo';

    protected $fillable =['nome', 'codPai', 'publicarWeb','nomeWeb', 'comissao','reajuste', 'flagMerc',
   'flagFabr', 'flagInsumo', 'flagComis' , 'flagComisGuia', 'menuWeb' ];
    protected $table='grupos';
}
