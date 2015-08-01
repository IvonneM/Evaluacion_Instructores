@extends('app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			{!! Form::model($Pregunta, ['route' => 'Pregunta.update', 'method'=> 'put', 'novalidate'])!!}
		{!! Form::hidden('id_Pregunta', $Pregunta -> id_pregunta)!!}
		<div class="form-group">
			{!! Form:: label('Pregunta','Pregunta')!!}
			{!! Form:: text('Pregunta','null', ['class' => 'form-control', 'required' => 'required'])!!}
		</div>
		<div class="form.group">
			{!! Form:: label('Estado_Pregunta','Estado')!!}
			{!! Form:: text('Estado_Pregunta','null', ['class' => 'form-control', 'required' => 'required'])!!}
		</div>
		<div class="form-group">
			{!! Form::submit('Enviar',['class' => 'btn btn-success'])!!}
		</div>
		{!! Form::close()!!}
		</div>
	</div>
</div>
@endsection