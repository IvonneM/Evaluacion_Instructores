@extends('app')
@section('content')
<div class="container">
	<div class="row">
			{!! Form::open(['route' => 'Dimension/search', 'method'=> 'post', 'novalidate', 'class' => 'form-inline'])!!}
		<div class="form-group">
			<label for="exampleInputName2">Tipo_Dimension</label>
			<input type="text" class="form-control" name = "Tipo_Dimension">
		</div>
		    <button type="submint" class= "btn btn-default">search</button>
		    <a href="{{route('Dimension.index')}}" class="btn btn-primary">All</a>
		    <a href="{{route('Dimension.create')}}" class="btn btn-primary">Create</a>
		    {!! Form::close()!!}
		    <br>
		              <table class="table table-condensed table-borderd">
		              	<teached>
		              		<tr>
		              			<th>Tipo_Dimension</th>
		              			<th>Description</th>
		              			<th>Estado_Dimension</th>
		              			<th>Action</th>
		              		</tr>
		              	</teached>
		              	<tbody>
		              		@foreach($dimensions as $Dimension)
		              		<tr>
		              			<td>{{$Dimension->Tipo_Dimension}}</td>
		              			<td>{{$Dimension->Descripcion}}</td>
		              			<td>{{$Dimension->Estado_Dimension}}</td>
		              			
		              			<td>
		              				<a class="btn btn-primary btn.xs" href="{{route('Dimension.edit',['id_D'=> $Dimension -> id_D])}}">Edit</a>
		              				<a class="btn btn-danger btn.xs" href="{{route('Dimension/destroy',['id_D'=> $Dimension -> id_D])}}">Delete</a>
		              			</td>
		              		</tr>
		              		@endforeach
		              	</tbody>
		        </table>
		</div>
</div>
@endsection