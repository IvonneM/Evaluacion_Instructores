@extends('app')
@section('content')
<div class="container">
	<div class="row">
			{!! Form::open(['route' => 'Evaluacion/search', 'method'=> 'post', 'novalidate', 'class' => 'form-inline'])!!}
		<div class="form-group">
			<label for="exampleInputName2">Tipo_Respuesta</label>
			<input type="text" class="form-control" name = "name">
		</div>
		    <button type="submint" class= "btn btn-default">search</button>
		    <a href="{{route('Evaluacion.index')}}" class="btn btn-primary">All</a>
		    <a href="{{route('Evaluacion.create')}}" class="btn btn-primary">Create</a>
		    {!! Form::close()!!}
		    <br>
		              <table class="table table-condensed table-borderd">
		              	<teached>
		              		<tr>
		              			<th>Tipo_Evaluacion</th>
		              			<th>Descripcion</th>
		              			<th>Estado_Evaluacion</th>
		              			<th>Cod_Evaluacion</th>
		              			<th>Action</th>
		              			
		              		</tr>
		              	</teached>
		              	<tbody>
		              		@foreach($Evaluacion as $Evaluacion)
		              		<tr>
		              			<td>{{$Evaluacion->Tipo_Evaluacion}}</td>
		              			<td>{{$Evaluacion->Descripcion}}</td>
		              			<td>{{$Evaluacion->Estado_Evaluacion}}</td>
		              			<td>{{$Evaluacion->Cod_Evaluacion}}</td>
		              			<td>
		              				<a class="btn btn-primary btn.xs" href="{{route('Evaluacion.edit',['id_E'=> $Evaluacion -> id_E])}}">Edit</a>
		              				<a class="btn btn-danger btn.xs" href="{{route('Evaluacion/destroy',['id_E'=> $Evaluacion -> id_E])}}">Delete</a>
		              			</td>
		              		</tr>
		              		@endforeach
		              	</tbody>
		        </table>
		</div>
</div>
@endsection