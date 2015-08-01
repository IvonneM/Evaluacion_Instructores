@extends('app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			{!! Form::model($Respuestas, ['route' => 'Respuestas.update', 'method'=> 'put', 'novalidate'])!!}
		{!! Form::hidden('id_Respuesta', $Respuestas -> id_A)!!}
		<div class="form-group">
			{!! Form:: label('Tipo_Respuesta','Tipo_Respuesta')!!}
			{!! Form:: date('Tipo_Respuesta','null', ['class' => 'form-control', 'required' => 'required'])!!}
		</div>
		<div class="form-group">
			{!! Form::submit('Enviar',['class' => 'btn btn-success'])!!}
		</div>
		{!! Form::close()!!}
		</div>
	</div>
</div>
@endsection