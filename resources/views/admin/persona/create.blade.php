@extends('template.index')
@section('content')

	<form action="{{route('persona.store')}}" method="POST"> 
		@csrf
		<!--inicio de card  -->
		<div class="card mt-4">
			<div class="card-header">
				<h3>Crear Persona</h3>
			</div>
			<div class="card-body">		
					<!--input -->
					<div class="row">
						<div class="col-md-3">
							<label>Codigo de usuario</label>
							<input type="text" class="form-control" name= "usuario_id">
						</div>	
						<div class="col-md-3">
							<label>Apellido Paterno</label>
							<input type="text" class="form-control" name= "apellido_pat">
						</div>	
						<div class="col-md-3">
							<label>Apellido Materno</label>
							<input type="text" class="form-control" name= "apellido_mat">
						</div>
						<div class="col-md-3">
							<label>Nombres</label>
							<input type="text" class="form-control" name= "nombres">
						</div>
					</div>

					<div class="row">
						<div class="col-md-4">
							<label>Fecha de Nacimiento</label>
							<input type="text" class="form-control" name= "fecha_nac">
						</div>
						<div class="col-md-4">
							<label>Carnet de Identidad</label>
							<input type="text" class="form-control" name= "ci">
						</div>
						<div class="col-md-4">
							<label>Celular</label>
							<input type="text" class="form-control" name= "celular">
						</div>
						
					</div>
					<!-- fin input -->
					<!--botones-->
					<div class="row mt-3">
						<div class="col-md-8"></div>
						<div class="col-md-2 ">	
							<input type="submit" class="btn btn-success btn-block" value="Registrar">
						</div>
						<div class="col-md-2 ">
							<input type ="button" class="btn btn-danger btn-block" href="{{route('persona.index')}}"  value="Cancelar">
						</div>	
					</div>
					<!--fin botones -->
			</div>			
		</div>
		<!--fin de card  -->
			
	</form>
@endsection