@extends('app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			{!! Form::open(['route' => 'Trimestre.store', 'method'=> 'post', 'novalidate'])!!}
		<div class="form-group">
			{!! Form:: label('Fecha_Apertura','Fecha_apertura')!!}
			{!! Form:: date('Fecha_Apertura','null', ['class' => 'form-control', 'required' => 'required'])!!}
		</div>
		<div class="form.group">
			{!! Form:: label('Fecha_Cierre','Fecha_cierre')!!}
			{!! Form:: date('Fecha_Cierre','null', ['class' => 'form-control', 'required' => 'required'])!!}
		</div>
		<div class="form.group">
			{!! Form:: label('Tipo_Trimestre','Tipo_Trimestre')!!}
			{!! Form:: text('Tipo_Trimestre','null', ['class' => 'form-control', 'required' => 'required'])!!}
		</div>
		<div class="form.group">
			{!! Form:: label('Estado_Trimestre','Estado_Trimeste')!!}
			{!! Form:: text('Estado_Trimestre','null', ['class' => 'form-control', 'required' => 'required'])!!}
		</div>
		<div class="form-group">
			{!! Form::submit('Enviar',['class' => 'btn btn-success'])!!}
		</div>
		{!! Form::close()!!}
		</div>
	</div>
</div>
@endsection