<div>
    <button class="btn btn-primary float-right" wire:click="$set('open',true)">Nuevo alumno</button>
    <x-jet-dialog-modal wire:model="open" class="z-40">
        <x-slot name="title">Nuevo alumno</x-slot>
        <x-slot name="content"> 
            <div class="grid grid-cols-2 gap-4">
                <div>
                    <x-jet-label value="Nombre"/>
                    <x-jet-input type="text" class="w-full" wire:model.defer="nombre"/>
                    <x-jet-input-error for="nombre"/>
                </div>
                <div>
                    <x-jet-label value="Dirección"/>
                    <x-textarea  wire:model.defer="direccion"></x-textarea>
                </div>
                <div>
                    <x-jet-label value="Nivel"/>
                    <select class="form-control" wire:model.defer="nivel">
                        <option value="">Seleccione</option>
                        <option value="1">Prescolar</option>
                            <option value="2">Primaria</option>
                            <option value="3">Secundaria</option>
                    </select>
                    
                </div>
                <div>
                    <x-jet-label value="Escuela"/>
                    <x-jet-input type="text" class="w-full" wire:model.defer="escuela"/>
                </div>
                <div>
                    <x-jet-label value="Grado"/>
                    <x-jet-input type="text" class="w-full" wire:model.defer="grado"/>
                </div>
                <div>
                    <x-jet-label value="Grupo"/>
                    <x-jet-input type="text" class="w-full" wire:model.defer="grupo"/>
                </div>
                <div>
                    <x-jet-label value="Turno"/>
                    <x-jet-input type="text" class="w-full" wire:model.defer="turno"/>
                </div>
                <div></div>
                <div>
                    <label>Nombre padre</label>
                    <x-jet-input type="text" class="w-full" wire:model.defer="nombre_padre" />
                </div>
                <div>
                    <x-jet-label value="Teléfono"/>
                    <x-jet-input type="text" class="w-full" wire:model.defer="telefono"/>
                </div>
                <div>
                    <label>Nombre madre</label>
                    <x-jet-input type="text" class="w-full" wire:model.defer="nombre_madre" />
                </div>
                <div>
                    <x-jet-label value="Teléfono"/>
                    <x-jet-input type="text" class="w-full" wire:model.defer="telefono2"/>
                </div>
                <div>
                    <x-jet-label value="Email"/>
                    <x-jet-input type="text" class="w-full" wire:model.defer="correo"/>
                </div>
                <div>
                    <x-jet-label value="Activo"/>
                    <x-jet-input type="text" class="w-full" wire:model.defer="activo"/>
                </div>
                
              </div>
        </x-slot>
        <x-slot name="footer">
            <div>
                <button class="btn btn-primary" wire:click="guardar">Guardar</button>
            </div>
        </x-slot>
    </x-jet-dialog-modal>
</div>