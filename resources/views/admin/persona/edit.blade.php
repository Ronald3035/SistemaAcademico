@extends('template.index')
@section('content')

	<form action="{{route('persona.update',$persona->id)}}" method="POST"> 
		@method('PUT')
		@csrf
		<!--inicio de card  -->
		<div class="card mt-4">
			<div class="card-header">
				<h3>Editar Persona</h3>
			</div>
			<div class="card-body">		
					<!--input -->
					
					<div class="row"><!--fila 1-->
						<div class="col-md-4">
							<label>Codigo de persona</label>
							<input type="text" class="form-control" name= "id" value="{{$persona->id}}" disabled>
						</div>
					</div>
					<div class="row mt-3"><!--fila 2-->
							
						<div class="col-md-4">
							<label>Apellido Paterno</label>
							<input type="text" class="form-control" name= "apellido_pat" value="{{$persona->apellido_pat}}">
						</div>	
						<div class="col-md-4">
							<label>Apellido Materno</label>
							<input type="text" class="form-control" name= "apellido_mat" value="{{$persona->apellido_mat}}">
						</div>
						<div class="col-md-4">
							<label>Nombres</label>
							<input type="text" class="form-control" name= "nombres" value="{{$persona->nombres}}">
						</div>
					</div>

					<div class="row mt-3"><!--fila 3-->
						<div class="col-md-4">
							<label>Fecha de Nacimiento</label>
							<input type="text" class="form-control" name= "fecha_nac" value="{{$persona->fecha_nac}}">
						</div>
						<div class="col-md-4">
							<label>Carnet de Identidad</label>
							<input type="text" class="form-control" name= "ci" value="{{$persona->ci}}">
						</div>
						<div class="col-md-4">
							<label>Celular</label>
							<input type="text" class="form-control" name= "celular" value="{{$persona->celular}}">
						</div>			
					</div>
					<div class="row mt-3">
						<div-col class="md 4">
							<input type="radio" name="genero" value="M" > Masculino
    						<input type="radio" name="genero" value="F" > Femenino
						</div>
							
					</div>
					<!--fin de inputs-->
					<!-- botones-->

					<div class="row mt-3"><!--fila 4-->
						<div class="col-md-4"></div>
						<div class="col-md-2 ">	
							<input type="submit" class="btn btn-success btn-block" value="Actualizar">
						</div>
						<div class="col-md-2">

							<a class="btn btn-danger btn-block" href="{{route('persona.index')}}"  value="Cancelar">
							Cancelar
							</a>
						</div>	
						<div class="col-md-4"></div>
					</div>
					<!--fin botones -->
			</div>			
		</div>
		<!--fin de card  -->
			
	</form>
@endsection