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
					
					<div class="row mt-3">
							
						<div class="col-md-4">
							<label>Apellido Paterno</label>
							<input type="text" class="form-control" name= "apellido_pat" required>
						</div>	
						<div class="col-md-4">
							<label>Apellido Materno</label>
							<input type="text" class="form-control" name= "apellido_mat" required>
						</div>
						<div class="col-md-4">
							<label>Nombres</label>
							<input type="text" class="form-control" name= "nombres" requerid>
						</div>
					</div>

					<div class="row mt-3">
						<div class="col-md-4">
							<label>Fecha de Nacimiento</label>
							<input type="text" class="form-control" name= "fecha_nac" requerid>
						</div>
						
						<div class="col-md-4">
							<label>Carnet de Identidad</label>
							<input type="text" class="form-control" name= "ci" requerid>
						</div>
						<div class="col-md-4">
							<label>Celular</label>
							<input type="text" class="form-control" name= "celular" requerid>
						</div>
						
					</div>
					<div class="row mt-3">					
						<div class="col-md-4">
							<label>Género</label>
						</div>				
					</div>
					<div class="wrap">	
						<form action="" class="formulario">
						<div class="radio">
							<input type="radio" name="genero" value="M" > 
							<label for="hombre">Masculino</label>
    						<input type="radio" name="genero" value="F" >
    						<label for="mujer">Femenino</label>
							<!--<input type="text" class="form-control" name= "genero" requerid>-->
						</div>	
						</form>			
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