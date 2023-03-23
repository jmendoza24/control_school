{{--<div>
    <div class="card">
        <div class="card-header">
            <div class="text-4xl font-normal leading-normal mt-0 flex">
                <h3 class="flex-1"> Camiones</h3>
            <button class="btn btn-sm btn-primary" wire:click="nuevo_camion" >+ Camiones</button>
            </div>
        </div>
        <div class="card-body">
            <div class="custom-table-effect table-responsive  border rounded">
                <table class="table mb-0" id="datatable" data-toggle="data-table">
                    <thead>
                        <tr class="bg-white">
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
                                        <a class="btn btn-primary btn-icon btn-sm rounded-pill ms-2" wire:click="editar({{$c->id}})" role="button">
                                            <span class="btn-inner">
                                                <svg class="icon-32" width="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path opacity="0.4" d="M19.9927 18.9534H14.2984C13.7429 18.9534 13.291 19.4124 13.291 19.9767C13.291 20.5422 13.7429 21.0001 14.2984 21.0001H19.9927C20.5483 21.0001 21.0001 20.5422 21.0001 19.9767C21.0001 19.4124 20.5483 18.9534 19.9927 18.9534Z" fill="currentColor"></path>
                                                    <path d="M10.309 6.90385L15.7049 11.2639C15.835 11.3682 15.8573 11.5596 15.7557 11.6929L9.35874 20.0282C8.95662 20.5431 8.36402 20.8344 7.72908 20.8452L4.23696 20.8882C4.05071 20.8903 3.88775 20.7613 3.84542 20.5764L3.05175 17.1258C2.91419 16.4915 3.05175 15.8358 3.45388 15.3306L9.88256 6.95545C9.98627 6.82108 10.1778 6.79743 10.309 6.90385Z" fill="currentColor"></path>
                                                    <path opacity="0.4" d="M18.1208 8.66544L17.0806 9.96401C16.9758 10.0962 16.7874 10.1177 16.6573 10.0124C15.3927 8.98901 12.1545 6.36285 11.2561 5.63509C11.1249 5.52759 11.1069 5.33625 11.2127 5.20295L12.2159 3.95706C13.126 2.78534 14.7133 2.67784 15.9938 3.69906L17.4647 4.87078C18.0679 5.34377 18.47 5.96726 18.6076 6.62299C18.7663 7.3443 18.597 8.0527 18.1208 8.66544Z" fill="currentColor"></path>
                                                </svg>
                                            </span>
                                        </a>
                                        <a class="btn btn-primary btn-icon btn-sm rounded-pill ms-2" wire:click="eliminar({{ $c->id}})" role="button">
                                            <span class="btn-inner">
                                                <svg class="icon-32" width="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path opacity="0.4" d="M19.643 9.48851C19.643 9.5565 19.11 16.2973 18.8056 19.1342C18.615 20.8751 17.4927 21.9311 15.8092 21.9611C14.5157 21.9901 13.2494 22.0001 12.0036 22.0001C10.6809 22.0001 9.38741 21.9901 8.13185 21.9611C6.50477 21.9221 5.38147 20.8451 5.20057 19.1342C4.88741 16.2873 4.36418 9.5565 4.35445 9.48851C4.34473 9.28351 4.41086 9.08852 4.54507 8.93053C4.67734 8.78453 4.86796 8.69653 5.06831 8.69653H18.9388C19.1382 8.69653 19.3191 8.78453 19.4621 8.93053C19.5953 9.08852 19.6624 9.28351 19.643 9.48851Z" fill="currentColor"></path>
                                                    <path d="M21 5.97686C21 5.56588 20.6761 5.24389 20.2871 5.24389H17.3714C16.7781 5.24389 16.2627 4.8219 16.1304 4.22692L15.967 3.49795C15.7385 2.61698 14.9498 2 14.0647 2H9.93624C9.0415 2 8.26054 2.61698 8.02323 3.54595L7.87054 4.22792C7.7373 4.8219 7.22185 5.24389 6.62957 5.24389H3.71385C3.32386 5.24389 3 5.56588 3 5.97686V6.35685C3 6.75783 3.32386 7.08982 3.71385 7.08982H20.2871C20.6761 7.08982 21 6.75783 21 6.35685V5.97686Z" fill="currentColor"></path>
                                                </svg>
                                            </span>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    
    <x-jet-dialog-modal wire:model="open" class="z-40">
        <x-slot name="title">Nuevo Camion</x-slot>
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
                    <select class="w-full" wire:model.defer="ayudantes">
                        <option value="">Selecciona</option>
                        @foreach($ayudantes as $a)
                        <option value="{{$a->id}}">{{$a->nombre_completo}}</option>
                        @endforeach
                    </select>
                    <x-jet-input-error for="ayudante1"/>
                </div>
                <div>
                    <x-jet-label value="Ayudante 2"/>
                    <select class="w-full" wire:model.defer="ayudantes">
                        <option value="">Selecciona</option>
                        @foreach($ayudantes as $a)
                        <option value="{{$a->id}}">{{$a->nombre_completo}}</option>
                        @endforeach
                    </select>
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
</div> --}}


{{--RECONFIGURACION--}}

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
            <table class="table mb-0" id="datatable" data-toggle="data-table">
                <thead>
                    <tr class="bg-white">
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
                <x-jet-label class="control-label col-sm-3 align-self-center mb-0" value="Ayudante 1"/>
                <div class="col-sm-9"> 
                    <select class="form-control" wire:model.defer="ayudante1">
                        <option value="">Seleccione...</option>
                                @foreach($ayudantes as $ayu)
                                    <option value="{{ $ayu->id}}">{{ $ayu->name}}</option>
                                @endforeach
                        <x-jet-input-error for="ayudante1"/> 
                    </select>                   
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
                        <x-jet-input-error for="ayudante2"/> 
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
                </div>
            </div>
            <div class="form-group row col-md-6">
                <x-jet-label class="control-label col-sm-3 align-self-center mb-0" value="Telefono"/>
                <div class="col-sm-9">
                    <x-jet-input type="text" class="w-full" wire:model.defer="telefono1"/>
                    <x-jet-input-error for="telefono1"/>
                </div>
            </div>
            <div class="form-group row col-md-6">
                <x-jet-label class="control-label col-sm-3 align-self-center mb-0" value="Telefono 2"/>                
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
