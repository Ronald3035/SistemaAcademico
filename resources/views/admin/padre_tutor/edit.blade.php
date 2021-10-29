@extends('template.index')
@section('content')

	<form action="{{route('padre_tutor.update',$padre_tutor->id)}}" method="POST"> 
		@method('PUT')
		@csrf
		<!--inicio de card  -->
		<div class="card mt-4">
			<div class="card-header">
				<h3>Editar Padre de familia o Tutor</h3>
			</div>
			<div class="card-body">		
					<!--input -->
					
					<div class="row"><!--fila 1-->
						<div class="col-md-4">
							<label>id padre de familia</label>
							<input type="text" class="form-control" name= "id" value="{{$padre_tutor->id}}" disabled>
						</div>
						<div class="col-md-4">
							<label>Codigo de persona</label>
							<input type="text" class="form-control" name= "persona_id" value="{{$padre_tutor->persona_id}}">
						</div>
					</div>
					<div class="row mt-3"><!--fila 2-->
							
						<div class="col-md-4">
							<label>Direccion</label>
							<input type="text" class="form-control" name= "direccion" value="{{$padre_tutor->direccion}}">
						</div>	
						<div class="col-md-4">
							<label>Ocupacion</label>
							<input type="text" class="form-control" name= "ocupacion" value="{{$padre_tutor->ocupacion}}">
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