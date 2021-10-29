@extends('template.index')
@section('content')


		<div class="card">
			
			<div class="card-header" mt-4>
			<a href="{{route('persona.create')}}" class="btn btn-primary">Crear Persona</a>
			<a href="{{route('padre_tutor.create')}}" class="btn btn-info">Crear Padre de familia</a>
			<a href="{{route('estudiante.create')}}" class="btn btn-info">Crear Estudiante</a>
			<a href="{{route('docente.create')}}" class="btn btn-info">Crear Docente</a>
			<a href="{{route('administrativo.create')}}" class="btn btn-info">Crear Administrativo</a>
			</div>
			<div class="card-body">
				<table class="table table-striped table-bordered">
					<thead>
						<tr>
							<th>CODIGO</th>							
							<th>APELLIDO PATERNO</th>
							<th>APELLIDO MATERNO</th>
							<th>NOMBRES</th>
							<th>FECHA DE NACIMIENTO</th>
							<th>GENERO</th>
							<th>CEDULA DE IDENTIDAD</th>
							<th>CELULAR</th>
							<th>ACCION</th>
						</tr>
					</thead>
					<tbody>
						@foreach($personas as $persona)
						@if($persona->estado==0)
							<tr class="disabled">
						@else
							<tr>
						@endif
							<td>{{$persona->id}}</td>
							<td>{{$persona->apellido_pat}}</td>
							<td>{{$persona->apellido_mat}}</td>
							<td>{{$persona->nombres}}</td>
							<td>{{$persona->fecha_nac}}</td>
							<td>{{$persona->genero}}</td>
							<td>{{$persona->ci}}</td>
							<td>{{$persona->celular}}</td>
							<td>
								<a href="{{route('persona.edit', $persona->id)}}" class="btn btn-info">
									<icon class="fa fa-edit"></icon>
								</a>
								@if($persona->estado==1)
									<a href="{{route('persona.destroy', $persona->id)}}" class="btn btn-danger">
										<icon class="fa fa-window-close"></icon>
									</a>
									@elseif($persona->estado==0)
									<a href="{{route('persona.destroy', $persona->id)}}" class="btn btn-warning">
										<icon class="fa fa-undo"></icon>
									</a>
								@endif
								
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			    <div class="row">
			    	<div class="col-md-12">
			    		{{$personas->render()}}
			    	</div>
			    </div>
			</div>
		</div>
		
@endsection