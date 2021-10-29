@extends('template.index')
@section('content')

	<form action="{{route('docente.update',$docente->id)}}" method="POST"> 
		@method('PUT')
		@csrf
		<!--inicio de card  -->
		<div class="card mt-4">
			<div class="card-header">
				<h3>Editar docente</h3>
			</div>
			<div class="card-body">		
					<!--input -->
					
					<div class="row"><!--fila 1-->
						<div class="col-md-4">
							<label>id docente</label>
							<input type="text" class="form-control" name= "id" value="{{$docente->id}}" disabled>
						</div>
						<div class="col-md-4">
							<label>Codigo de persona</label>
							<input type="text" class="form-control" name= "persona_id" value="{{$docente->persona_id}}">
						</div>
					</div>
					<div class="row mt-3"><!--fila 2-->
							
						<div class="col-md-4">
							<label>Especialidad</label>
							<input type="text" class="form-control" name= "especialidad" value="{{$docente->especialidad}}">
						</div>	
						<div class="col-md-4">
							<label>Horas Item</label>
							<input type="text" class="form-control" name= "horas_item" value="{{$docente->horas_item}}">
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