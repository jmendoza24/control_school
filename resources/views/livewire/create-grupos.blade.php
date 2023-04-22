<div>
    <div class="card">
        <div class="card-header">
            <div class="text-4xl font-normal leading-normal mt-0 flex">
                <h3 class="flex-1" wire:click="$set('tabla_grupo',true)"> Grupos</h3>
            <button class="btn btn-sm btn-primary" wire:click="nuevo_grupo" >+ Grupo</button>
            </div>
        </div>
        <div class="card-body row">
            @if($tabla_grupo==true)
            <div class="custom-table-effect table-responsive  border rounded">
                <table class="table mb-0 dataTables-data"> 
                    <thead>
                        <tr class="bg-success">
                            <th scope="col">Grupo</th>
                            <th scope="col">Estatus</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($grupos as $g)
                        <tr>
                            <td><a wire:click="editar_grupo({{$g->id}})">{{ $g->nombre_grupo}}</a></td>    
                            <td><span class="badge bg-soft-{{ $g->activo == 1 ? 'primary':'secondary'}} p-2 text-primary">{{ $g->activo == 1 ? 'Activo':'No activo'}}</span></td>    
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            @else
            <div class="form-horizontal row">
            <div class="col-md-4 form-row">
                <div class="form-group row">
                    <x-jet-label class="control-label col-sm-3 align-self-center mb-0" value="Nombre"/>
                    <div class="col-sm-9">
                        <x-jet-input type="text" class="w-full" wire:model="nombre_grupo"/>
                        <x-jet-input-error for="nombre_grupo"/>
                    </div>
                </div>
                <div class="form-group row">
                    <x-jet-label class="control-label col-sm-3 align-self-center mb-0" value="Camion"/>
                    <div class="col-sm-9">
                        <select class="w-full" wire:model="camion">
                             <option value="">Selecciona</option>
                              @foreach($camiones as $c)
                              <option value="{{$c->id}}">{{$c->placa}} {{$c->nom_chofer}}</option>
                              @endforeach                        
                          </select>
                          <x-jet-input-error for="camion"/>
                    </div>
                </div>
                @if($datos_camion != null)
                <div class="form-group row">
                    <x-jet-label class="control-label col-sm-3 align-self-center mb-0" value="Placa"/>
                    <div class="col-sm-9">
                        <label for="">{{ $datos_camion->placa}}</label>
                    </div>
                </div>

                <div class="form-group row">
                    <x-jet-label class="control-label col-sm-3 align-self-center mb-0" value="Chofer"/>
                    <div class="col-sm-9">
                        <label for="">{{ $datos_camion->nom_chofer}}</label>
                    </div>
                </div>

                <div class="form-group row">
                    <x-jet-label class="control-label col-sm-3 align-self-center mb-0" value="Ayudante"/>
                    <div class="col-sm-9">
                        <label for="">{{ $datos_camion->nombre_ayu}}</label>
                    </div>
                </div>
                @endif                
                <div class="form-group row">
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
                <div class="col-md-12 form-group text-right">
                    <button type="button" wire:click="guardar" class="btn btn-primary">Guardar</button>
                    <button wire:click="cancelar" class="btn btn-danger">Salir</button>
                </div>
            </div>
            @if($id_grupo != null)
            <div class="col-md-8">
                <label>Buscar alumno para agregar al grupo.</label>
                <input
                    type="text"
                    class="form-control"
                    placeholder="Buscar alumnos..."
                    wire:model="query"
                    wire:keydown.escape="limpiar"
                    wire:keydown.tab="limpiar"
                    wire:keydown.arrow-up="decrementHighlight"
                    wire:keydown.arrow-down="incrementHighlight"
                    wire:keydown.enter="selectContact"
                />
             
                <div wire:loading class="absolute z-10 w-full bg-white rounded-t-none shadow-lg list-group" style="z-index: 10; position:absolute; width:100%">
                    <div class="list-item">buscando...</div>
                </div>
             
                @if(!empty($query))
                    <div class="fixed top-0 bottom-0 left-0 right-0" wire:click="limpiar"></div>
                        <table class="bg-white rounded-t-none shadow-lg" style="z-index: 10; position:absolute; width:100% !important;">
                            @if(!empty($contacts))
                                @foreach($contacts as $i => $contact)
                                <tr style="width:100%;">
                                    <td wire:click="usuario_seleccionado({{$contact['id']}})" style="width:100%;" 
                                    ><b>{{ $contact['nombre']}}</b>
                                    </td>
                                    </tr>
                                @endforeach
                            @else
                                <tr class="list-item bg-blue-grey bg-lighten-3"><td><label class="secondary">No has encontrado el usuario?, </label></td></tr>
                            @endif
                        </table>
                @endif
                <hr/>
                <table class="table table-border">
                    <thead>
                        <tr>
                            <th>Alumno</th>
                            <th>Escuela</th>
                            <th>Grado</th>
                            <th>Grupo</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($grupo_alumnos as $a)
                        <tr>
                            <td>{{$a->nombre}}</td>
                            <td>{{$a->nombre_escuela}}</td>
                            <td>{{$a->grado}}</td>
                            <td>{{$a->grupo}}</td>
                        </tr>

                        @endforeach
                    </tbody>
                </table>
            </div>
            @endif
        </div>
            @endif
        </div>
    </div>
</div>
