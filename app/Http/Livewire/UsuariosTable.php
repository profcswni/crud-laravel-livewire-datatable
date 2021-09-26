<?php

namespace App\Http\Livewire;

use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\User;

class UsuariosTable extends DataTableComponent
{

    public function columns(): array
    {
        return [
            Column::make('Nombres y apellidos','name'),
            Column::make('Correo electronico','email'),
        ];
    }

    public function query(): Builder
    {
        $usuarios = User::with("telefono")->get();
        return User::query();
    }
}
