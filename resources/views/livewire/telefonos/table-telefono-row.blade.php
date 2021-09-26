@if ($columnSelect && $this->isColumnSelectEnabled('id'))
    <x-livewire-tables::table.cell>
        {{ $row->id }}
    </x-livewire-tables::table.cell>
@endif

@if ($columnSelect && $this->isColumnSelectEnabled('numero'))
    <x-livewire-tables::table.cell>
        {{ $row->numero }}
    </x-livewire-tables::table.cell>
@endif

@if ($columnSelect && $this->isColumnSelectEnabled('operadora'))
    <x-livewire-tables::table.cell>
        {{ $row->operadora }}
    </x-livewire-tables::table.cell>
@endif

@if ($columnSelect && $this->isColumnSelectEnabled('user.name'))
    <x-livewire-tables::table.cell>
        {{ $row->user->name }}
    </x-livewire-tables::table.cell>
@endif


