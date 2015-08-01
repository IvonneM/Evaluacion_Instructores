@extends('app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			{!! Form::open(['route' => 'Aprendiz.store', 'method'=> 'post', 'novalidate'])!!}
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

		<div class="form.group">
			{!! Form:: label('Estado_Aprendiz','Estado_Aprendiz')!!}
			{!! Form:: text('Email','null', ['class' => 'form-control', 'required' => 'required'])!!}
		</div>

		<div class="form.group">
			{!! Form:: label('Tipo_Documento','Tipo_Documento')!!}
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