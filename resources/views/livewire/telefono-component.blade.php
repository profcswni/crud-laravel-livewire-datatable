<div>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Teléfonos del usuario') }}
        </h2>
    </x-slot>

    <div class="py-10 mx-auto max-w-7xl sm:px-6 lg:px-8">
        <a href="{{route('telefono-tareas')}}"
           class="p-3 bg-blue-500 text-white rounded-2xl">
            Agregar teléfono
        </a>
    </div>

    <div class="py-10 mx-auto max-w-7xl sm:px-6 lg:px-8">
        @livewire('telefonos-table')
    </div>
</div>
