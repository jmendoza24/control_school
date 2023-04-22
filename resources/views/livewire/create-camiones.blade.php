<div class="card">
    <div class="card-header">
        <div class="text-4xl font-normal leading-normal mt-0 flex">
            <h3 class="flex-1" wire:click="$set('tabla',true)"> Camiones</h3>
        <button class="btn btn-sm btn-primary" wire:click="nuevo_camion" >+ Camiones</button>
        </div>
    </div>
    <div class="card-body">
        @if($tabla==true)
        <div class="custom-table-effect table-responsive  border rounded">
            <table class="table mb-0 dataTables-data"> 
                <thead>
                    <tr class="bg-success">
                        <th scope="col">Placa</th>
                        <th scope="col">Chofer</th>
                        <th scope="col">Ayudante</th>
                        <th scope="col">Activo</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @if($camiones->count())
                        @foreach($camiones as $c)
                        <tr>
                            <td>{{ $c->placa}}</td>
                            <td class="">{{ $c->nombre_chofer}}</td>
                            <td class="">{{ $c->nom_ayudante}}</td>
                            <td>
                                <span class="badge bg-soft-{{ $c->activo == 1 ? 'primary':'secondary'}} p-2 text-primary">{{ $c->activo == 1 ? 'Activo':'No activo'}}</span>
                            </td>
                            <td>
                                <div class="d-flex justify-content-evenly">
                                    @if($delete_id == $c->id)   
                                        <a class="btn btn-sm btn-icon btn-warning rounded" data-bs-toggle="tooltip" data-placement="top" title="" data-bs-original-title="Cancelar" wire:click="cancelar">
                                            <span class="btn-inner">
                                               <svg class="h-8 w-8 text-red-500"  viewBox="0 0 24 24" fill="none"  stroke="white"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round">  <polyline points="20 6 9 17 4 12" /></svg>
                                            </span>
                                        </a>
                                    <a class="btn btn-sm btn-icon btn-success rounded" data-bs-toggle="tooltip" data-placement="top" title="" data-bs-original-title="Eliminar" wire:click="deletecamion">
                                        <span class="btn-inner">
                                           <svg class="h-8 w-8 text-red-500"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="white" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <line x1="18" y1="6" x2="6" y2="18" />  <line x1="6" y1="6" x2="18" y2="18" /></svg>
                                        </span>
                                    </a>
                                    @else
                                    <a class="btn btn-sm btn-icon btn-info rounded" data-bs-toggle="tooltip" data-placement="top" title="" data-bs-original-title="Editar" wire:click="editar({{ $c->id}})">
                                        <span class="btn-inner">
                                            <svg  width="24"  height="24"  viewBox="0 0 24 24"  xmlns="http://www.w3.org/2000/svg"  fill="none"  stroke="white"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round">  <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7" />  <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z" /></svg>
                                        </span>
                                    </a>
                                    <a class="btn btn-sm btn-icon btn-danger rounded" data-bs-toggle="tooltip" data-placement="top" title="" data-bs-original-title="Delete" wire:click="eliminar({{ $c->id}})">
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
                <x-jet-label class="control-label col-sm-3 align-self-center mb-0" value="Placa"/>
                <div class="col-sm-9">                         
                    <x-jet-input type="text" class="w-full" wire:model.defer="placa"/>
                    <x-jet-input-error for="placa"/>
                </div>
            </div>
            <div class="form-group row col-md-6">
                <x-jet-label class="control-label col-sm-3 align-self-center mb-0" value="Serie"/>
                <div class="col-sm-9"> 
                    <x-jet-input type="text" class="w-full" wire:model.defer="serie"/>
                    <x-jet-input-error for="serie"/>
                </div>
            </div>
            <div class="form-group row col-md-6">
                <x-jet-label class="control-label col-sm-3 align-self-center mb-0" value="Chofer"/>
                <div class="col-sm-9">
                    <select class="w-full" wire:model.defer="chofer">
                       <option value="">Selecciona</option>
                        @foreach($choferes as $c)
                        <option value="{{$c->id}}">{{$c->name}}</option>
                        @endforeach                        
                    </select>
                    <x-jet-input-error for="chofer"/>                    
                </div>
            </div>
            <div class="form-group row col-md-6">
                <x-jet-label class="control-label col-sm-3 align-self-center mb-0" value="Ayudante"/>
                <div class="col-sm-9"> 
                    <select class="form-control" wire:model.defer="ayudante1">
                        <option value="">Seleccione...</option>
                                @foreach($ayudantes as $ayu)
                                    <option value="{{ $ayu->id}}">{{ $ayu->name}}</option>
                                @endforeach
                    </select>
                    <x-jet-input-error for="ayudante1"/>                   
                </div>
            </div>
            <div class="form-group row col-md-6">
                <x-jet-label class="control-label col-sm-3 align-self-center mb-0" value="Ayudante 2"/>
                <div class="col-sm-9">
                    <select class="form-control" wire:model.defer="ayudante2">
                        <option value="">Seleccione...</option>
                                @foreach($ayudantes as $ayu)
                                    <option value="{{ $ayu->id}}">{{ $ayu->name}}</option>
                                @endforeach
                    </select>               
                </div>
            </div>
            <div class="form-group row col-md-6">
                <x-jet-label class="control-label col-sm-3 align-self-center mb-0" value="Turno"/>
                <div class="col-sm-9">
                    <select class="w-full" wire:model.defer='turno'>
                        <section></section>
                        @php($lista_turno=explode(',',$turno_camiones))
                        <option value="">Selecciona</option>
                        @foreach($lista_turno as $lt)
                        <option value="{{$lt}}">{{$lt}}</option>
                        @endforeach
                    </select>
                    <x-jet-input-error for="turno"/> 
                </div>
            </div>
            <div class="form-group row col-md-6">
                <x-jet-label class="control-label col-sm-3 align-self-center mb-0" value="Teléfono"/>
                <div class="col-sm-9">
                    <x-jet-input type="text" class="w-full" wire:model.defer="telefono1"/>
                    <x-jet-input-error for="telefono1"/>
                </div>
            </div>
            <div class="form-group row col-md-6">
                <x-jet-label class="control-label col-sm-3 align-self-center mb-0" value="Télefono 2"/>                
                <div class="col-sm-9">
                    <x-jet-input type="text" class="w-full" wire:model.defer="telefono2"/>
                    <x-jet-input-error for="telefono2"/>                    
                </div>
            </div>
            <div class="form-group row col-md-6">
                <x-jet-label class="control-label col-sm-3 align-self-center mb-0" value="Ruta"/>
                <div class="col-sm-9">
                    <x-jet-input type="text" class="w-full" wire:model.defer="ruta"/>
                    <x-jet-input-error for="ruta"/>                    
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
