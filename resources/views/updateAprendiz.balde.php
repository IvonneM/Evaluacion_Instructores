@extends('app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			{!! Form::model($Aprendiz, ['route' => 'Aprendiz.update', 'method'=> 'put', 'novalidate'])!!}
		{!! Form::hidden('id_A', $Aprendiz -> id_A)!!}
		<div class="form-group">
			{!! Form:: label('nombre','nombre')!!}
			{!! Form:: date('nombre','null', ['class' => 'form-control', 'required' => 'required'])!!}
		</div>
		<div class="form.group">
			{!! Form:: label('Apellido','Apellido')!!}
			{!! Form:: date('Apellido','null', ['class' => 'form-control', 'required' => 'required'])!!}
		</div>
		<div class="form.group">
			{!! Form:: label('Telefono','Telefono')!!}
			{!! Form:: text('Telefono','null', ['class' => 'form-control', 'required' => 'required'])!!}
		</div>
		<div class="form.group">
			{!! Form:: label('Email','Email')!!}
			{!! Form:: text('Email','null', ['class' => 'form-control', 'required' => 'required'])!!}
		</div>
		<div class="form-group">
			{!! Form::submit('Enviar',['class' => 'btn btn-success'])!!}
		</div>
		{!! Form::close()!!}
		</div>
	</div>
</div>
@endsection