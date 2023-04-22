<div class="card">
    <div class="card-header">
        <div class="text-4xl font-normal leading-normal mt-0 flex">
            <h3 class="flex-1" wire:click="$set('tabla',true)"> Escuelas</h3>
        <button class="btn btn-sm btn-primary" wire:click="nueva_escuela" >+ Escuela</button>
        </div>
    </div>    
    <div class="card-body">
        @if($tabla == true)
        <div class="custom-table-effect table-responsive  border rounded">
            <table class="table mb-0 dataTables-data"> 
                <thead>
                    <tr class="bg-success">
                        <th scope="col">Escuela</th>
                        <th scope="col">Direccion</th>
                        <th scope="col">Activo</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @if($escuelas->count())
                        @foreach($escuelas as $e)
                        <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="media-support-info">
                                    <h5 class="iq-sub-label">{{ $e->nombre}}</h5>
                                    <p class="mb-0"></p>
                                    </div>
                                </div>
                            </td>
                            <td class="">{{ $e->direccion}}</td>
                            <td>
                                <span class="badge bg-soft-{{ $e->activo == 1 ? 'primary':'secondary'}} p-2 text-primary">{{ $e->activo == 1 ? 'Activo':'No activo'}}</span>
                            </td>
                            <td>
                                <div class="d-flex justify-content-evenly">
                                    @if($delete_id == $e->id)   
                                        <a class="btn btn-sm btn-icon btn-warning rounded" data-bs-toggle="tooltip" data-placement="top" title="" data-bs-original-title="Cancelar" wire:click="cancelar">
                                            <span class="btn-inner">
                                               <svg class="h-8 w-8 text-red-500"  viewBox="0 0 24 24" fill="none"  stroke="white"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round">  <polyline points="20 6 9 17 4 12" /></svg>
                                            </span>
                                        </a>
                                    <a class="btn btn-sm btn-icon btn-success rounded" data-bs-toggle="tooltip" data-placement="top" title="" data-bs-original-title="Eliminar" wire:click="deleteescuela">
                                        <span class="btn-inner">
                                           <svg class="h-8 w-8 text-red-500"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="white" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <line x1="18" y1="6" x2="6" y2="18" />  <line x1="6" y1="6" x2="18" y2="18" /></svg>
                                        </span>
                                    </a>
                                    @else
                                    <a class="btn btn-sm btn-icon btn-info rounded" data-bs-toggle="tooltip" data-placement="top" title="" data-bs-original-title="Editar" wire:click="editar({{ $e->id}})">
                                        <span class="btn-inner">
                                            <svg  width="24"  height="24"  viewBox="0 0 24 24"  xmlns="http://www.w3.org/2000/svg"  fill="none"  stroke="white"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round">  <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7" />  <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z" /></svg>
                                        </span>
                                    </a>
                                    <a class="btn btn-sm btn-icon btn-danger rounded" data-bs-toggle="tooltip" data-placement="top" title="" data-bs-original-title="Delete" wire:click="eliminar({{ $e->id}})">
                                        <span class="btn-inner">
                                           <svg class="h-8 w-8 text-red-500"  viewBox="0 0 24 24"  fill="none"  stroke="white"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round">  <polyline points="3 6 5 6 21 6" />  <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2" /></svg>
                                        </span>
                                    </a>
                                    @endif
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    @endif
                </tbody>
            </table>
        </div>

        @else
        <form class="form-horizontal row" wire:submit.prevent="guardar">
            <div class="form-group row col-md-6">
                <x-jet-label class="control-label col-sm-3 align-self-center mb-0" value="Nombre"/>
                <div class="col-sm-9">
                    <x-jet-input type="text" class="w-full" wire:model.defer="nombre"/>
                    <x-jet-input-error for="nombre"/>
                </div>
            </div>
            <div class="form-group row col-md-6">
                <x-jet-label class="control-label col-sm-3 align-self-center mb-0" value="Dirección"/>
                <div class="col-sm-9">
                    <x-textarea  wire:model.defer="direccion"></x-textarea>
                    <x-jet-input-error for="direccion"/>
                </div>
            </div>
            <div class="form-group row col-md-6">
                <x-jet-label class="control-label col-sm-3 align-self-center mb-0" value="Activo"/>
                <div class="col-sm-9">
                    <select class="form-control" wire:model.defer="activo">
                        <option value="">Seleccione</option>
                        <option value="1">Activo</option>
                        <option value="2">Inactivo</option>
                    </select>
                    <x-jet-input-error for="activo"/>
                </div>
            </div>
                    
            <div class=" col-md-12 form-group text-right">
                <button type="submit" class="btn btn-primary">Guardar</button>
                <button wire:click="$set('tabla',true)" class="btn btn-danger">Cancel</button>
            </div>
        </form>
        @endif
    </div>
</div>


