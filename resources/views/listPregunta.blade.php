@extends('app')
@section('content')
<div class="container">
	<div class="row">
			{!! Form::open(['route' => 'Pregunta/search', 'method'=> 'post', 'novalidate', 'class' => 'form-inline'])!!}
		<div class="form-group">
			<label for="exampleInputName2">Pregunta</label>
			<input type="text" class="form-control" name = "Pregunta">
		</div>
		    <button type="submint" class= "btn btn-default">search</button>
		    <a href="{{route('Pregunta.index')}}" class="btn btn-primary">All</a>
		    <a href="{{route('Pregunta.create')}}" class="btn btn-primary">Create</a>
		    {!! Form::close()!!}
		    <br>
		              <table class="table table-condensed table-borderd">
		              	<teached>
		              		<tr>
		              			<th>Pregunta</th>
		              			<th>Estado</th>
		              			<th>Action</th>
		              		</tr>
		              	</teached>
		              	<tbody>
		              		@foreach($preguntas as $Pregunta)
		              		<tr>
		              			<td>{{$Pregunta->Pregunta}}</td>
		              			<td>{{$Pregunta->Estado_Pregunta}}</td>
		              			<td>
		              				<a class="btn btn-primary btn.xs" href="{{route('Pregunta.edit',['id_Pregunta'=> $Pregunta -> id_Pregunta])}}">Edit</a>
		              				<a class="btn btn-danger btn.xs" href="{{route('Pregunta/destroy',['id_Pregunta'=> $Pregunta -> id_Pregunta])}}">Delete</a>
		              			</td>
		              		</tr>
		              		@endforeach
		              	</tbody>
		        </table>
		</div>
</div>
@endsection