@extends('template.index')
@section('content')


		<div class="card">
			
			<div class="card-header" mt-4>
			<a href="{{route('persona.create')}}" class="btn btn-primary">Crear Persona</a>
			</div>
			<div class="card-body">
				<table class="table table-stripped table-bordered">
					<thead>
						<tr>
							<th>CODIGO</th>
							<th>TIPO DE USUARIO</th>
							<th>APELLIDO PATERNO</th>
							<th>APELLIDO MATERNO</th>
							<th>NOMBRES</th>
							<th>FECHA DE NACIMIENTO</th>
							<th>CEDULA DE IDENTIDAD</th>
							<th>CELULAR</th>
						</tr>
					</thead>
					<tbody>
						@foreach($persona as $ps)
						<tr>
							<td>{{$ps->id}}</td>
							<td>{{$ps->usuario_id}}</td>
							<td>{{$ps->apellido_pat}}</td>
							<td>{{$ps->apellido_mat}}</td>
							<td>{{$ps->nombres}}</td>
							<td>{{$ps->fecha_nac}}</td>
							<td>{{$ps->ci}}</td>
							<td>{{$ps->celular}}</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			    <div class="row">
			    	<div class="col-md-12">
			    		{{$persona->render()}}
			    	</div>
			    </div>
			</div>
		</div>
		
@endsection