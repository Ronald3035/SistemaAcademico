@extends('template.index')
@section('content')

	<form action="{{route('grado.update',$grado->id)}}" method="POST"> 
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
							<label>id grado</label>
							<input type="text" class="form-control" name= "id" value="{{$grado->id}}" disabled>
						</div>
						<div class="col-md-4">
							<label>Nombre de grado</label>
							<input type="text" class="form-control" name= "nombre" value="{{$grado->nombre}}">
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