@extends('app')
@section('content')
<div class="container">
	<div class="row">
			{!! Form::open(['route' => 'Ficha/search', 'method'=> 'post', 'novalidate', 'class' => 'form-inline'])!!}
		<div class="form-group">
			<label for="exampleInputName2">Codigo de ficha</label>
			<input type="text" class="form-control" name = "Cod_Ficha">
		</div>
		    <button type="submint" class= "btn btn-default">search</button>
		    <a href="{{route('Ficha.index')}}" class="btn btn-primary">All</a>
		    <a href="{{route('Ficha.create')}}" class="btn btn-primary">Create</a>
		    {!! Form::close()!!}
		    <br>
		              <table class="table table-condensed table-borderd">
		              	<teached>
		              		<tr>
		              			<th>Nombre del Programa</th>
		              			<th>Estado de la Ficha</th>
		              			<th>Codigo de la Ficha</th>
		              			<th>Action</th>
		              		</tr>
		              	</teached>
		              	<tbody>
		              		@foreach($fichas as $Ficha)
		              		<tr>
		              			<td>{{$Ficha->Nombre_P}}</td>
		              			<td>{{$Ficha->Estado_Ficha}}</td>
		              			<td>{{$Ficha->Cod_Ficha}}</td>
		              			<td>
		              				<a class="btn btn-primary btn.xs" href="{{route('Ficha.edit',['id_Ficha'=> $Ficha -> id_Ficha])}}">Edit</a>
		              				<a class="btn btn-danger btn.xs" href="{{route('Ficha/destroy',['id_Ficha'=> $Ficha -> id_Ficha])}}">Delete</a>
		              			</td>
		              		</tr>
		              		@endforeach
		              	</tbody>
		        </table>
		</div>
</div>
@endsection