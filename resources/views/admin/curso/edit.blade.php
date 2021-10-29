@extends('template.index')
@section('content')

	<form action="{{route('curso.update',$curso->id)}}" method="POST"> 
		@method('PUT')
		@csrf
		<!--inicio de card  -->
		<div class="card mt-4">
			<div class="card-header">
				<h3>Editar Curso</h3>
			</div>
			<div class="card-body">		
					<!--input -->
					
					<div class="row"><!--fila 1-->
						<div class="col-md-4">
							<label>id Curso</label>
							<input type="text" class="form-control" name= "id" value="{{$curso->id}}" disabled>
						</div>
						<div class="col-md-4">
							<label>Codigo de Grado</label>
							<input type="text" class="form-control" name= "grado_id" value="{{$curso->grado_id}}">
						</div>
					</div>
					<div class="row mt-3"><!--fila 2-->
							
						<div class="col-md-4">
							<label>Codigo de Paralelo</label>
							<input type="text" class="form-control" name= "paralelo_id" value="{{$curso->paralelo_id}}">
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