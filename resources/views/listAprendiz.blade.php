@extends('app')
@section('content')
<div class="container">
	<div class="row">
			{!! Form::open(['route' => 'Aprendiz/search', 'method'=> 'post', 'novalidate', 'class' => 'form-inline'])!!}
		<div class="form-group">
			<label for="exampleInputName2">nombre</label>
			<input type="text" class="form-control" name = "name">
		</div>
		    <button type="submint" class= "btn btn-default">search</button>
		    <a href="{{route('Aprendiz.index')}}" class="btn btn-primary">All</a>
		    <a href="{{route('Aprendiz.create')}}" class="btn btn-primary">Create</a>
		    {!! Form::close()!!}
		    <br>
		              <table class="table table-condensed table-borderd">
		              	<teached>
		              		<tr>
		              			<th>nombre</th>
		              			<th>Apellido</th>
		              			<th>Telefono</th>
		              			<th>Email</th>
		              			<th>Estado_Aprendiz</th>
		              			<th>Tipo_Documento</th>
		              			<th>Action</th>
		              			
		              		</tr>
		              	</teached>
		              	<tbody>
		              		@foreach($aprendizs as $Aprendiz)
		              		<tr>
		              			<td>{{$Aprendiz->nombre}}</td>
		              			<td>{{$Aprendiz->Apellido}}</td>
		              			<td>{{$Aprendiz->Email}}</td>
		              			<td>{{$Aprendiz->Estado_Aprendiz}}</td>
		              			<td>{{$Aprendiz->Tipo_Documento}}</td>
		              			<td>
		              				<a class="btn btn-primary btn.xs" href="{{route('Aprendiz.edit',['id_A'=> $Aprendiz -> id_A])}}">Edit</a>
		              				<a class="btn btn-danger btn.xs" href="{{route('Aprendiz/destroy',['id_A'=> $Aprendiz -> id_A])}}">Delete</a>
		              			</td>
		              		</tr>
		              		@endforeach
		              	</tbody>
		        </table>
		</div>
</div>
@endsection