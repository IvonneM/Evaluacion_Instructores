@extends('app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			{!! Form::model($Programa_F, ['route' => 'Programa_F.update', 'method'=> 'put', 'novalidate'])!!}
		{!! Form::hidden('id', $Programa_F. -> id_A)!!}
		<div class="form-group">
			{!! Form:: label('name','name')!!}
			{!! Form:: date('name','null', ['class' => 'form-control', 'required' => 'required'])!!}
		</div>
		<div class="form.group">
			{!! Form:: label('descripcion','Descripcion')!!}
			{!! Form:: date('descripcion','null', ['class' => 'form-control', 'required' => 'required'])!!}
		</div>
		<div class="form.group">
			{!! Form:: label('Estado_Programa','Estado_Programa')!!}
			{!! Form:: text('Estado_Programa','null', ['class' => 'form-control', 'required' => 'required'])!!}
		</div>
		<div class="form.group">
			{!! Form:: label('Cod_Programa','Cod_Programa')!!}
			{!! Form:: text('Cod_Programa','null', ['class' => 'form-control', 'required' => 'required'])!!}
		</div>
		<div class="form-group">
			{!! Form::submit('Enviar',['class' => 'btn btn-success'])!!}
		</div>
		{!! Form::close()!!}
		</div>
	</div>
</div>
@endsection