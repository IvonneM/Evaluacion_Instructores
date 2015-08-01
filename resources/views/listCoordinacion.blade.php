@extends('app')
@section('content')
<div class="container">
	<div class="row">
			{!! Form::open(['route' => 'Coordinacion/search', 'method'=> 'post', 'novalidate', 'class' => 'form-inline'])!!}
		<div class="form-group">
			<label for="exampleInputName2">Name</label>
			<input type="text" class="form-control" name = "name">
		</div>
		    <button type="submint" class= "btn btn-default">search</button>
		    <a href="{{route('Coordinacion.index')}}" class="btn btn-primary">All</a>
		    <a href="{{route('Coordinacion.create')}}" class="btn btn-primary">Create</a>
		    {!! Form::close()!!}
		    <br>
		              <table class="table table-condensed table-borderd">
		              	<teached>
		              		<tr>
		              			<th>Nombre</th>
		              			<th>Descripcion</th>
		              			<th>Estado Coordinacion</th>
		              			<th>Codigo Coordinacion</th>
		              			<th>Action</th>
		              		</tr>
		              	</teached>
		              	<tbody>
		              		@foreach($coordinacions as $Coordinacion)
		              		<tr>
		              			<td>{{$Coordinacion->name}}</td>
		              			<td>{{$Coordinacion->Descripcion}}</td>
		              			<td>{{$Coordinacion->Estado_Coordinacion}}</td>
		              			<td>{{$Coordinacion->Cod_Coordinacion}}</td>
		              			<td>
		              				<a class="btn btn-primary btn.xs" href="{{route('Coordinacion.edit',['id_Coo'=> $Coordinacion -> id_coo])}}">Edit</a>
		              				<a class="btn btn-danger btn.xs" href="{{route('Coordinacion/destroy',['id_Coo'=> $Coordinacion -> id_Coo])}}">Delete</a>
		              			</td>
		              		</tr>
		              		@endforeach
		              	</tbody>
		        </table>
		</div>
</div>
@endsection