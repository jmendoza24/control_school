<div>
    <div class="card">
        <div class="card-header">
            <div class="text-4xl font-normal leading-normal mt-0 flex">
                <h3 class="flex-1"><a wire:click="$set('s_tabla','true')"> Empleados</a></h3>
            <button class="btn btn-sm btn-primary" wire:click="open_empleado" >+ Empleado</button>
            </div>
        </div>
        <div class="card-body">
            @if($s_tabla == true)
            <div class="custom-table-effect table-responsive  border rounded">
                <table class="table mb-0">
                    <thead>
                        <tr class="bg-white">
                            <th scope="col">Nombre</th>
                            <th scope="col">Tipo</th>
                            <th scope="col">Correo</th>
                            <th scope="col">Telefono</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if($empleados->count())
                            @foreach($empleados as $e)
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="media-support-info">
                                        <h5 class="iq-sub-label">{{ $e->name}}</h5>
                                        <p class="mb-0"></p>
                                        </div>
                                    </div>
                                </td>
                                <td class="">{{ $e->perfil}}</td>
                                <td class="">{{ $e->email}}</td>
                                <td class="">{{ $e->telefono}}</td>
                                <td>
                                    <div class="d-flex justify-content-evenly">
                                        @if($delete_id == $e->id)   
                                            <a class="btn btn-sm btn-icon btn-warning rounded" data-bs-toggle="tooltip" data-placement="top" title="" data-bs-original-title="Cancelar" wire:click="cancelar">
                                                <span class="btn-inner">
                                                   <svg class="h-8 w-8 text-red-500"  viewBox="0 0 24 24" fill="none"  stroke="white"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round">  <polyline points="20 6 9 17 4 12" /></svg>
                                                </span>
                                            </a>
                                        <a class="btn btn-sm btn-icon btn-success rounded" data-bs-toggle="tooltip" data-placement="top" title="" data-bs-original-title="Eliminar" wire:click="deleteempleado">
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
                        <label class="control-label col-sm-3 align-self-center mb-0">Nombre:</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" wire:model.defer="nombre">
                            <x-jet-input-error for="nombre"/>
                        </div>
                    </div>
                    <div class="form-group row col-md-6">
                        <label class="control-label col-sm-3 align-self-center mb-0">Correo:</label>
                        <div class="col-sm-9">
                            <input type="mail" class="form-control" wire:model.defer="email" >
                            <x-jet-input-error for="email"/>
                        </div>
                    </div>
                    <div class="form-group row col-md-6">
                        <label class="control-label col-sm-3 align-self-center mb-0">Tipo de usuario:</label>
                        <div class="col-sm-9">
                            <select class="form-control" wire:model.defer="tipo">
                                <option value="">Seleccione...</option>
                                @foreach($perfiles as $p)
                                    <option value="{{ $p->id}}">{{ $p->perfil}}</option>
                                @endforeach
                            </select>
                            <x-jet-input-error for="tipo"/>
                        </div>
                    </div>
                    <div class="form-group row col-md-6">
                        <label class="control-label col-sm-3 align-self-center mb-0">Teléfono:</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" wire:model.defer="telefono">
                            <x-jet-input-error for="telefono"/>
                        </div>
                    </div>
                    @if($id_empleados == null)
                    <div class="form-group row col-md-6">
                        <label class="control-label col-sm-3 align-self-center mb-0">Contraseña:</label>
                        <div class="col-sm-9">
                            <input type="password" class="form-control" wire:model.defer="password">
                            <x-jet-input-error for="password"/>
                        </div>
                    </div>
                    <div class="form-group row col-md-6">
                        <label class="control-label col-sm-3 align-self-center mb-0">Repite Contraseña:</label>
                        <div class="col-sm-9">
                            <input type="password" class="form-control" wire:model.defer="re_password" >
                            <x-jet-input-error for="re_password"/>
                        </div>
                    </div>
                    @endif
                    <div class=" col-md-12 form-group text-right">
                        <button type="submit" class="btn btn-primary">Guardar</button>
                        <button wire:click="$set('s_tabla',true)" class="btn btn-danger">Cancel</button>
                    </div>
                </form>
            @endif
        </div>

    </div>
</div>
