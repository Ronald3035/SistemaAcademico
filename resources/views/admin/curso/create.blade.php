@extends('template.index')
@section('content')

	<form action="{{route('curso.store')}}" method="POST"> 
		@csrf
		<!--inicio de card  -->
		<div class="card mt-4">
			<div class="card-header">
				<h3>Crear Curso</h3>
			</div>
			<div class="card-body">		
					<!--input -->
					
					<div class="row mt-3">
						<div class="col-md-4">
							<label>Codigo de Grado</label>
							<input type="text" class="form-control" name= "grado_id" required>
						</div>
							
						<div class="col-md-4">
							<label>Codigo de Paralelo</label>
							<input type="text" class="form-control" name= "paralelo_id" required>
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