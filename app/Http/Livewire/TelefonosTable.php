<?php

namespace App\Http\Livewire;

use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\Telefono;

class TelefonosTable extends DataTableComponent
{

    public function columns(): array
    {
        return [
            Column::make('Numero', 'numero')
                ->searchable()
                ->sortable(),

            Column::make('Operadora', 'operadora')
                ->sortable()
                ->searchable(),

            Column::make('Nombre de la persona', 'user.name')
                ->sortable()
                ->searchable(),
        ];
    }

    public function query(): Builder
    {
        return Telefono::where('user_id', auth()->user()->id);
    }
}
