@extends('app')
@section('content')
<div class="container">
	<div class="row">
			{!! Form::open(['route' => 'Trimestre/search', 'method'=> 'post', 'novalidate', 'class' => 'form-inline'])!!}
		<div class="form-group">
			<label for="exampleInputName2">Tipo_Trimestre</label>
			<input type="text" class="form-control" name = "Tipo_Trimestre">
		</div>
		    <button type="submint" class= "btn btn-default">search</button>
		    <a href="{{route('Trimestre.index')}}" class="btn btn-primary">All</a>
		    <a href="{{route('Trimestre.create')}}" class="btn btn-primary">Create</a>
		    {!! Form::close()!!}
		    <br>
		              <table class="table table-condensed table-borderd">
		              	<teached>
		              		<tr>
		              			<th>Fecha Apertura</th>
		              			<th>Fecha Cierre</th>
		              			<th>Tipo Trimestre</th>
		              			<th>Estado Trimestre</th>
		              			<th>Action</th>
		              		</tr>
		              	</teached>
		              	<tbody>
		              		@foreach($trimestres as $Trimestre)
		              		<tr>
		              			<td>{{$Trimestre->Fecha_Apertura}}</td>
		              			<td>{{$Trimestre->Fecha_Cierre}}</td>
		              			<td>{{$Trimestre->Tipo_Trimestre}}</td>
		              			<td>{{$Trimestre->Estado_Trimestre}}</td>
		              			<td>
		              				<a class="btn btn-primary btn.xs" href="{{route('Trimestre.edit',['id_T'=> $Trimestre -> id_T])}}">Edit</a>
		              				<a class="btn btn-danger btn.xs" href="{{route('Trimestre/destroy',['id_T'=> $Trimestre -> id_T])}}">Delete</a>
		              			</td>
		              		</tr>
		              		@endforeach
		              	</tbody>
		        </table>
		</div>
</div>
@endsection