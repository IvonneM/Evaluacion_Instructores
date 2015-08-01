@extends('app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			{!! Form::open(['route' => 'Programa_F.store', 'method'=> 'post', 'novalidate'])!!}
		<div class="form-group">
			{!! Form:: label('name','name')!!}
			{!! Form:: date('name','null', ['class' => 'form-control', 'required' => 'required'])!!}
		</div>
		<div class="form-group">
			{!! Form:: label('descripcion','descripcion')!!}
			{!! Form:: date('descripcion','null', ['class' => 'form-control', 'required' => 'required'])!!}
		</div>
		<div class="form-group">
			{!! Form:: label('Estado_Programa','Estado_Programa')!!}
			{!! Form:: date('Estado_Programa','null', ['class' => 'form-control', 'required' => 'required'])!!}
		</div>
		<div class="form-group">
			{!! Form:: label('Cod_Programa','Cod_Programa')!!}
			{!! Form:: date('Cod_Programa','null', ['class' => 'form-control', 'required' => 'required'])!!}
		</div>
		
		
	</div>
</div>
@endsection