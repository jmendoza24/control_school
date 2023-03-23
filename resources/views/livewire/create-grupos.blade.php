<div>
    <div class="card">
        <div class="card-header">
            <div class="text-4xl font-normal leading-normal mt-0 flex">
                <h3 class="flex-1"> Grupos</h3>
            <button class="btn btn-sm btn-primary" wire:click="nuevo_grupo" >+ Grupo</button>
            </div>
        </div>
        <div class="card-body row">

            <div class="custom-table-effect table-responsive  border rounded">
                <table class="table mb-0" id="datatable" data-toggle="data-table">
                    <thead>
                        <tr class="bg-white">
                            <th scope="col">Grupo</th>
                            <th scope="col">Estatus</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        
                    </tbody>
                </table>
            </div>

            <div class="col-md-3 form-row">
                <div class="form-group">
                    <label>Nombre</label>
                    <input type="text" name="">
                </div>
                <div class="form-group">
                    <label>Camion</label>
                    <select class="form-control" wire:model="camion">
                        <option value="">Selcccc</option>
                        <option value="1">Placa-Chofer</option>
                    </select>
                </div>
                @if($datos_camion != null)
                <div class="form-group">
                    <table>
                        <tr>
                            <td>Placa</td>
                            <td>{{ $datos_camion->id}}</td>
                        </tr>
                        <tr>
                            <td>Chofer</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Ayudante</td>
                            <td></td>
                        </tr>
                    </table>
                </div>
                @endif
                <div class="btn-group">
                    <button class="btn btn-primary m-1">Guardar</button>
                    <button class="btn btn-primary m-1">Cancelar</button>
                </div>
            </div>
            <div class="col-md-9">
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
                                        class="{{ $highlightIndex === $i ? 'highlight' : '' }}"
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
                <table>
                    <thead>
                        <tr>
                            <th>Alumno</th>
                            <th>Escuela</th>
                            <th>Grado</th>
                            <th>Grupo</th>
                        </tr>
                    </thead>
                </table>
            </div>

        </div>
    </div>
</div>
