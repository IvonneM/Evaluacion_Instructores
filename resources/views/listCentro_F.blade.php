@extends('app')
@section('content')
<div class="container">
	<div class="row">
			{!! Form::open(['route' => 'Centro_Formacion/search', 'method'=> 'post', 'novalidate', 'class' => 'form-inline'])!!}
		<div class="form-group">
			<label for="exampleInputName2">Name</label>
			<input type="text" class="form-control" name = "name">
		</div>
		    <button type="submint" class= "btn btn-default">search</button>
		    <a href="{{route('Centro_Formacion.index')}}" class="btn btn-primary">All</a>
		    <a href="{{route('Centro_Formacion.create')}}" class="btn btn-primary">Create</a>
		    {!! Form::close()!!}
		    <br>
		              <table class="table table-condensed table-borderd">
		              	<teached>
		              		<tr>
		              			<th>Name</th>
		              			<th>Telefono</th>
		              			<th>Direccion</th>
		              			<th>Descripcion</th>
		              			<th>Estado del Centro</th>
		              			<th>Codigo del Centro</th>
		              			<th>Action</th>
		              		</tr>
		              	</teached>
		              	<tbody>
		              		@foreach($centro__formacions as $Centro_Formacion)
		              		<tr>
		              			<td>{{$Centro_Formacion->name}}</td>
		              			<td>{{$Centro_Formacion->Telefono}}</td>
		              			<td>{{$Centro_Formacion->Direccion}}</td>
		              			<td>{{$Centro_Formacion->Descripcion}}</td>
		              			<td>{{$Centro_Formacion->Estado_Centro}}</td>
		              			<td>{{$Centro_Formacion->Cod_Centro}}</td>
		              			<td>
		              				<a class="btn btn-primary btn.xs" href="{{route('Centro_Formacion.edit',['id_C_F'=> $Centro_Formacion -> id_C_F])}}">Edit</a>
		              				<a class="btn btn-danger btn.xs" href="{{route('Centro_Formacion/destroy',['id_C_F'=> $Centro_Formacion -> id_C_F])}}">Delete</a>
		              			</td>
		              		</tr>
		              		@endforeach
		              	</tbody>
		        </table>
		</div>
</div>
@endsection