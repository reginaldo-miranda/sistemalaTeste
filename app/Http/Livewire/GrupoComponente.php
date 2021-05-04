<?php

namespace App\Http\Livewire;
use App\Models\grupo;
use Livewire\Component;



class GrupoComponente extends Component
{
    public $message = 'teste de aqui';
    public function render()
    {
        $grupo = grupo::all();         

     /*   return view('livewire.Grupo-Componente',[
            'grupo' => grupo::all(),
            
        ]);*/

   //     return redirect()->to('/layouts.frAdmin',[
            'grupo' => grupo::all(),
        ]);


      //  return redirect()->to('/contact-form-success');
    }

}

