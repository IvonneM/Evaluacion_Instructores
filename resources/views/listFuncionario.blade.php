@extends('app')
@section('content')
<div class="container">
	<div class="row">
			{!! Form::open(['route' => 'Funcionario/search', 'method'=> 'post', 'novalidate', 'class' => 'form-inline'])!!}
		<div class="form-group">
			<label for="exampleInputName2">Identificaion</label>
			<input type="text" class="form-control" name = "Cod_Identificacion_F">
		</div>
		    <button type="submint" class= "btn btn-default">search</button>
		    <a href="{{route('Funcionario.index')}}" class="btn btn-primary">All</a>
		    <a href="{{route('Funcionario.create')}}" class="btn btn-primary">Create</a>
		    {!! Form::close()!!}
		    <br>
		              <table class="table table-condensed table-borderd">
		              	<teached>
		              		<tr>
		              			<th>Nombre</th>
		              			<th>Apellido</th>
		              			<th>Telefono</th>
		              			<th>Email</th>
		              			<th>Cargo</th>
		              			<th>Estado Funcionario</th>
		              			<th>Tipo Documento</th>
		              			<th>Identificacion</th>
		              			<th>Action</th>
		              		</tr>
		              	</teached>
		              	<tbody>
		              		@foreach($funcionarios as $Funcionario)
		              		<tr>
		              			<td>{{$Funcionario->nombre}}</td>
		              			<td>{{$Funcionario->Apellido}}</td>
		              			<td>{{$Funcionario->Telefono}}</td>
		              			<td>{{$Funcionario->Email}}</td>
		              			<td>{{$Funcionario->Cargo}}</td>
		              			<td>{{$Funcionario->Estado_Funcionario}}</td>
		              			<td>{{$Funcionario->Tipo_Documento}}</td>
		              			<td>{{$Funcionario->Cod_Identificacion_F}}</td>
		              			<td>
		              				<a class="btn btn-primary btn.xs" href="{{route('Funcionario.edit',['id_F'=> $Funcionario -> id_F])}}">Edit</a>
		              				<a class="btn btn-danger btn.xs" href="{{route('Funcionario/destroy',['id_F'=> $Funcionario -> id_F])}}">Delete</a>
		              			</td>
		              		</tr>
		              		@endforeach
		              	</tbody>
		        </table>
		</div>
</div>
@endsection