<div>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Datos de un nuevo teléfono') }}
        </h2>
    </x-slot>

    <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
        <x-jet-form-section submit="guardar">
            <x-slot name="title">
                Registro de telefonos
            </x-slot>

            <x-slot name="description">
                Completar los campos solicitados
            </x-slot>

            <x-slot name="form">
                <!-- Solicitar el numero de telefono -->
                <div class="col-span-6 sm:col-span-4">
                    <x-jet-label for="numero" value="Número de teléfono" />
                    <x-jet-input id="numero" type="text" class="mt-1 block w-full"
                                 wire:model.defer="telefono.numero" />
                    <x-jet-input-error for="telefono.numero" class="mt-2" />
                </div>

                <!-- Crear la lista de operadoras -->
                <div class="col-span-6 sm:col-span-4">
                    <x-jet-label for="operadora" value="Selecciona la operadora" />
                    <select wire:model.defer="telefono.operadora"
                            name="operadora"
                            class="w-full"
                            id="operadora">
                        @foreach($operadoras as $operadora)
                            <option value="{{$operadora}}">
                                {{$operadora}}
                            </option>
                        @endforeach
                    </select>
                    <x-jet-input-error for="telefono.operadora" class="mt-2" />
                </div>
            </x-slot>

            <x-slot name="actions">
                <x-jet-button wire:loading.attr="disabled">
                   Guardar
                </x-jet-button>
            </x-slot>
        </x-jet-form-section>
    </div>
</div>
