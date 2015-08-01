@extends('app')
@section('content')
<div class="container">
	<div class="row">
			{!! Form::open(['route' => 'Regional/search', 'method'=> 'post', 'novalidate', 'class' => 'form-inline'])!!}
		<div class="form-group">
			<label for="exampleInputName2">Tipo_Respuesta</label>
			<input type="text" class="form-control" name = "name">
		</div>
		    <button type="submint" class= "btn btn-default">search</button>
		    <a href="{{route('Regional.index')}}" class="btn btn-primary">All</a>
		    <a href="{{route('Regional_F.create')}}" class="btn btn-primary">Create</a>
		    {!! Form::close()!!}
		    <br>
		              <table class="table table-condensed table-borderd">
		              	<teached>
		              		<tr>
		              			<th>name</th>
		              			<th>ubicacion</th>
		              			<th>Estado_Regional</th>
		              			<th>Cod_Regional</th>
		              			<th>Action</th>
		              			
		              			
		              		</tr>
		              	</teached>
		              	<tbody>
		              		@foreach($Regional as $Regional)
		              		<tr>
		              			<td>{{$Regional->name}}</td>
		              			<td>{{$Regional->ubicacion}}</td>
		              			<td>{{$Regional->Estado_Regional}}</td>
		              			<td>{{$Regional->Cod_Regional}}</td>
		              			
		              			
		              			<td>
		              				<a class="btn btn-primary btn.xs" href="{{route('Regional.edit',['id_R'=> $Regional-> id_R])}}">Edit</a>
		              				<a class="btn btn-danger btn.xs" href="{{route('Regional/destroy',['id_R'=> $Regional -> id_R])}}">Delete</a>
		              			</td>
		              		</tr>
		              		@endforeach
		              	</tbody>
		        </table>
		</div>
</div>
@endsection