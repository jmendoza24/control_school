<div>
    <div class="card">
        <div class="card-header">
            <div class="text-4xl font-normal leading-normal mt-0 flex">
                <h3 class="flex-1"> Grupos</h3>
            <button class="btn btn-sm btn-primary" wire:click="nuevo_grupo" >+ Grupo</button>
            </div>
        </div>
        <div class="card-body">
            <div class="custom-table-effect table-responsive  border rounded">
                <table class="table mb-0" id="datatable" data-toggle="data-table">
                    <thead>
                        <tr class="bg-white">
                            <th scope="col">Camión</th>
                            <th scope="col">Chofer</th>
                            <th scope="col">Ayudante</th>
                            <th scope="col">Activo</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    
    <x-jet-dialog-modal wire:model="open" class="z-40" maxWidth="3xl">
        <x-slot name="title">Configuración grupo</x-slot>
        <x-slot name="content"> 
            <div class="grid grid-cols-2 gap-6">
                <div>
                    <x-jet-label value="Placa"/>
                    <x-jet-input type="text" class="w-full" wire:model.defer="placa"/>
                    <x-jet-input-error for="placa"/>
                </div>
                <div>
                    <x-jet-label value="Serie"/>
                    <x-jet-input type="text" class="w-full" wire:model.defer="serie"/>
                    <x-jet-input-error for="serie"/>
                </div>
                <div>
                    <x-jet-label value="Chofer"/>
                    <select class="w-full" wire:model.defer="chofer">
                        <option value="">Selecciona</option>
                        @foreach($choferes as $c)
                        <option value="{{$c->id}}">{{$c->nombre_completo}}</option>
                        @endforeach
                        
                    </select>
                    <x-jet-input-error for="chofer"/>
                </div>
                <div>
                    <x-jet-label value="Ayudante 1"/>
                    <x-jet-input type="text" class="w-full" wire:model.defer="ayudante1"/>
                    <x-jet-input-error for="ayudante1"/>
                </div>
                <div>
                    <x-jet-label value="Ayudante2"/>
                    <x-jet-input type="text" class="w-full" wire:model.defer="ayudante2"/>
                    <x-jet-input-error for="ayudante2"/>
                </div>
                <div>
                    <x-jet-label value="Turno"/>
                    <x-jet-input type="text" class="w-full" wire:model.defer="turno"/>
                    <x-jet-input-error for="turno"/>
                </div>
                <div>
                    <x-jet-label value="Telefono 1"/>
                    <x-jet-input type="text" class="w-full" wire:model.defer="telefono1"/>
                    <x-jet-input-error for="telefono1"/>
                </div>
                <div>
                    <x-jet-label value="Telefono 2"/>
                    <x-jet-input type="text" class="w-full" wire:model.defer="telefono2"/>
                    <x-jet-input-error for="telefono2"/>
                </div>
                <div>
                    <x-jet-label value="Ruta"/>
                    <x-jet-input type="text" class="w-full" wire:model.defer="ruta"/>
                    <x-jet-input-error for="ruta"/>
                </div>
                <div>
                    <x-jet-label value="Activo"/>
                    <select class="form-control" wire:model.defer="activo">
                        <option value="">Seleccione</option>
                        <option value="1">Activo</option>
                        <option value="2">Inactivo</option>
                    </select>
                </div>
                
              </div>
        </x-slot>
        <x-slot name="footer">
            <div>
                <button class="btn btn-primary" wire:click="guardar">Guardar</button>
            </div>
        </x-slot>
    </x-jet-dialog-modal>

    <x-jet-dialog-modal wire:model="open_delete_camiones" >
        <x-slot name="title">
            Eliminar Camion
        </x-slot>

        <x-slot name="content" >            
            ¿Estas seguro que deseas eliminar este Camion?.
        </x-slot>

        <x-slot name="footer">
            <button class="btn btn-secondary" wire:click="cancelar">Cancelar</button>
            <x-jet-button wire:click="deletecamion" wire:loading.attr="disabled" class="btn bg-danger">
                Eliminar
            </x-jet-button>
        </x-slot>
    </x-jet-dialog-modal>
</div>
