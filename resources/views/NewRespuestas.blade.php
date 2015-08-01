@extends('app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			{!! Form::open(['route' => 'Respuestas.store', 'method'=> 'post', 'novalidate'])!!}
		<div class="form-group">
			{!! Form:: label('Tipo_Respuesta','Tipo_Respuesta')!!}
			{!! Form:: date('Tipo_Respuesta','null', ['class' => 'form-control', 'required' => 'required'])!!}
		</div>
		
	</div>
</div>
@endsection