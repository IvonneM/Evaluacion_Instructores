@extends('app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			{!! Form::model($Evaluacion, ['route' => 'Evaluacion.update', 'method'=> 'put', 'novalidate'])!!}
		{!! Form::hidden('id_E', $Evaluacion -> id_A)!!}
		<div class="form-group">
			{!! Form:: label('Tipo_Evaluacion','Tipo_Evaluacion')!!}
			{!! Form:: date('Tipo_Evaluacion','null', ['class' => 'form-control', 'required' => 'required'])!!}
		</div>
		<div class="form.group">
			{!! Form:: label('Descripcion','Descripcion')!!}
			{!! Form:: date('Descripcion','null', ['class' => 'form-control', 'required' => 'required'])!!}
		</div>
		<div class="form.group">
			{!! Form:: label('Estado_Evaluacion','Estado_Evaluacion')!!}
			{!! Form:: text('Estado_Evaluacion','null', ['class' => 'form-control', 'required' => 'required'])!!}
		</div>
		<div class="form.group">
			{!! Form:: label('Cod_Evaluacion','Cod_Evaluacion')!!}
			{!! Form:: text('Cod_Evaluacion','null', ['class' => 'form-control', 'required' => 'required'])!!}
		</div>
		<div class="form-group">
			{!! Form::submit('Enviar',['class' => 'btn btn-success'])!!}
		</div>
		{!! Form::close()!!}
		</div>
	</div>
</div>
@endsection