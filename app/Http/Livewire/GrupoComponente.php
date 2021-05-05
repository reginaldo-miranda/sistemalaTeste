<?php

namespace App\Http\Livewire;
use App\Models\grupo;
use Livewire\Component;



class GrupoComponente extends Component
{
    public $message = 'mensagem do render';
    public function render()
    {
        $grupo = grupo::get();
           
        return view('livewire.Grupo-Componente',compact('grupo'));
    }

}
