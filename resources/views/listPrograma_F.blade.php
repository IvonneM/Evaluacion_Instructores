@extends('app')
@section('content')
<div class="container">
	<div class="row">
			{!! Form::open(['route' => 'Programa_F/search', 'method'=> 'post', 'novalidate', 'class' => 'form-inline'])!!}
		<div class="form-group">
			<label for="exampleInputName2">Tipo_Respuesta</label>
			<input type="text" class="form-control" name = "name">
		</div>
		    <button type="submint" class= "btn btn-default">search</button>
		    <a href="{{route('Programa_F.index')}}" class="btn btn-primary">All</a>
		    <a href="{{route('Programa_F.create')}}" class="btn btn-primary">Create</a>
		    {!! Form::close()!!}
		    <br>
		              <table class="table table-condensed table-borderd">
		              	<teached>
		              		<tr>
		              			<th>name</th>
		              			<th>descripcion</th>
		              			<th>Estado_Programa</th>
		              			<th>Cod_Programa</th>
		              			<th>Action</th>
		              			
		              			
		              		</tr>
		              	</teached>
		              	<tbody>
		              		@foreach($Programa_F as $Programa_F)
		              		<tr>
		              			<td>{{$Programa_F->name}}</td>
		              			<td>{{$Programa_F->descripcion}}</td>
		              			<td>{{$Programa_F->Estado_Programa}}</td>
		              			
		              			
		              			<td>
		              				<a class="btn btn-primary btn.xs" href="{{route('Programa_F.edit',['id'=> $ Programa_F-> id])}}">Edit</a>
		              				<a class="btn btn-danger btn.xs" href="{{route('Programa_F/destroy',['id'=> $Programa_F -> id])}}">Delete</a>
		              			</td>
		              		</tr>
		              		@endforeach
		              	</tbody>
		        </table>
		</div>
</div>
@endsection