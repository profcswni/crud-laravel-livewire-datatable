<?php

namespace App\Http\Livewire;

use App\Models\Telefono;
use Livewire\Component;

class FormularioTelefonoComponent extends Component
{
    public Telefono $telefono;

    public array $operadoras = [
        'Claro',
        'Tigo',
        'Cootel'
    ];

    protected array $rules = [ //pipes
        'telefono.numero' => 'required|numeric',
        'telefono.operadora' => 'required',
    ];

    public function mount(){
        $this->telefono = new Telefono();
    }

    public function render()
    {
        return view('livewire.formulario-telefono-component');
    }

    public function guardar(){
        // Validar las reglas necesarias
        $this->validate();
        // Detectar el usuario logueado (id)
        $user_id = auth()->user()->id;
        // Asigar el id al objeto telefono
        $this->telefono->user_id = $user_id;
        //Guardar en la base de datos
        $this->telefono->save();
        //Limpiar los datos del formulario
        //SI es necesario
        //$this->telefono = new Telefono();
        //Redireccionamos a la tabla de numeros
        redirect(route("telefonos"));
    }
}
