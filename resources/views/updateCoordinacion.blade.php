@extends('app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			{!! Form::model($Coordinacion, ['route' => 'Coordinacion.update', 'method'=> 'put', 'novalidate'])!!}
		{!! Form::hidden('id_Coo', $Coordinacion -> id_Coo)!!}
		<div class="form-group">
			{!! Form:: label('full_name','Nombre')!!}
			{!! Form:: text('name','null', ['class' => 'form-control', 'required' => 'required'])!!}
		</div>
		<div class="form.group">
			{!! Form:: label('Descripcion','Descripci&oacute;n')!!}
			{!! Form:: text('Descripcion','null', ['class' => 'form-control', 'required' => 'required'])!!}
		</div>
		<div class="form.group">
			{!! Form:: label('Estado_Coordinacion','Estado Coordinacion')!!}
			{!! Form:: text('Estado_Coordinacion','null', ['class' => 'form-control', 'required' => 'required'])!!}
		</div>
		<div class="form.group">
			{!! Form:: label('Cod_Coordinacion','Codigo Coordinacion')!!}
			{!! Form:: text('Cod_Coordinacion','null', ['class' => 'form-control', 'required' => 'required'])!!}
		</div>
		<div class="form-group">
			{!! Form::submit('Enviar',['class' => 'btn btn-success'])!!}
		</div>
		{!! Form::close()!!}
		</div>
	</div>
</div>
@endsection