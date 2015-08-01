@extends('app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			{!! Form::open(['route' => 'Regional.store', 'method'=> 'post', 'novalidate'])!!}
		<div class="form-group">
			{!! Form:: label('name','name')!!}
			{!! Form:: date('name','null', ['class' => 'form-control', 'required' => 'required'])!!}
		</div>
		<div class="form.group">
			{!! Form:: label('ubicacion','ubicacion')!!}
			{!! Form:: date('ubicacion','null', ['class' => 'form-control', 'required' => 'required'])!!}
		</div>
		<div class="form.group">
			{!! Form:: label('Estado_Regional','Estado_Regional')!!}
			{!! Form:: text('Estado_Regional','null', ['class' => 'form-control', 'required' => 'required'])!!}
		</div>
		<div class="form.group">
			{!! Form:: label('Cod_Regional','Cod_Regional')!!}
			{!! Form:: text('Cod_Regional','null', ['class' => 'form-control', 'required' => 'required'])!!}
		</div>

		<div class="form-group">
			{!! Form::submit('Enviar',['class' => 'btn btn-success'])!!}
		</div>
		{!! Form::close()!!}
		</div>
	</div>
</div>
@endsection