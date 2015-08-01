@extends('app')
@section('content')
<div class="container">
	<div class="row">
			{!! Form::open(['route' => 'Respuestas/search', 'method'=> 'post', 'novalidate', 'class' => 'form-inline'])!!}
		<div class="form-group">
			<label for="exampleInputName2">Tipo_Respuesta</label>
			<input type="text" class="form-control" name = "name">
		</div>
		    <button type="submint" class= "btn btn-default">search</button>
		    <a href="{{route('Respuestas.index')}}" class="btn btn-primary">All</a>
		    <a href="{{route('Respuestas.create')}}" class="btn btn-primary">Create</a>
		    {!! Form::close()!!}
		    <br>
		              <table class="table table-condensed table-borderd">
		              	<teached>
		              		<tr>
		              			<th>Tipo_Respuesta</th>
		              			<th>Action</th>
		              			
		              			
		              		</tr>
		              	</teached>
		              	<tbody>
		              		@foreach($Respuesta as $Respuesta)
		              		<tr>
		              			<td>{{$Respuesta->Tipo_Respuesta}}</td>
		              			
		              			<td>
		              				<a class="btn btn-primary btn.xs" href="{{route('Respuestas.edit',['id_Respuesta'=> $Respuestas -> id_Respuesta])}}">Edit</a>
		              				<a class="btn btn-danger btn.xs" href="{{route('Respuestas/destroy',['id_Respuesta'=> $Respuestas -> id_Respuesta])}}">Delete</a>
		              			</td>
		              		</tr>
		              		@endforeach
		              	</tbody>
		        </table>
		</div>
</div>
@endsection