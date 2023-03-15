<div>
	<div class="custom-table-effect table-responsive  border rounded">
       <table class="table mb-0 table-borderless">
			<thead>
				<tr>
					<th>Variable</th>
					<th>Valores</th>
				</tr>
			</thead>
			<tbody>
				@foreach($variables as $index =>$value)
					<tr>
						<td>{{ $value->nombre }}</td>
						<td>
							<textarea class="form-control" 
							wire:model.defer = "variables.{{$index}}.valores"
							wire:change="guard_variables({{ $index}}, {{ $value->id_val}})"></textarea>
						</td>
					</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</div>