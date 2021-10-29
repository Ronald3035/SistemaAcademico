@extends('template.index')
@section('content')

	<form action="{{route('estudiante.store')}}" method="POST"> 
		@csrf
		<!--inicio de card  -->
		<div class="card mt-4">
			<div class="card-header">
				<h3>Crear Estudiante</h3>
			</div>
			<div class="card-body">		
					<!--input -->
					
					<div class="row mt-3">
						<div class="col-md-4">
							<label>Codigo de Persona</label>
							<input type="text" class="form-control" name= "persona_id" required>
						</div>
							
						<div class="col-md-4">
							<label>Codigo de Padre de famalia</label>
							<input type="text" class="form-control" name= "padre_tutor_id" required>
						</div>	
						<div class="col-md-4">
							<label>Codigo Rude</label>
							<input type="text" class="form-control" name= "rude" required>
						</div>
						
					<!-- fin input -->
					<!--botones-->
					<div class="row mt-3">
						<div class="col-md-4"></div>
						<div class="col-md-2 ">	
							<input type="submit" class="btn btn-success btn-block" value="Registrar">
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