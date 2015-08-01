@extends('app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			{!! Form::model($Centro_Formacion, ['route' => 'Centro_Formacion.update', 'method'=> 'put', 'novalidate'])!!}
		{!! Form::hidden('id_C_f', $Centro_Formacion -> id_C_F)!!}
		<div class="form-group">
			{!! Form:: label('full_name','Nombre')!!}
			{!! Form:: text('name','null', ['class' => 'form-control', 'required' => 'required'])!!}
		</div>
		<div class="form.group">
			{!! Form:: label('Telefono','Telefono')!!}
			{!! Form:: text('Telefono','null', ['class' => 'form-control', 'required' => 'required'])!!}
		</div>
		<div class="form.group">
			{!! Form:: label('Direccion','Direcci&oacute;n')!!}
			{!! Form:: text('Direccion','null', ['class' => 'form-control', 'required' => 'required'])!!}
		</div>
		<div class="form.group">
			{!! Form:: label('Descripcion','Descripci&oacute;n')!!}
			{!! Form:: text('description','null', ['class' => 'form-control', 'required' => 'required'])!!}
		</div>
		<div class="form.group">
			{!! Form:: label('Estado_Centro','Estado Centro de Formacion')!!}
			{!! Form:: text('Estado_Centro','null', ['class' => 'form-control', 'required' => 'required'])!!}
		</div>
		<div class="form.group">
			{!! Form:: label('Cod_Centro','Codigo Centro Formacion')!!}
			{!! Form:: text('Cod_Centro','null', ['class' => 'form-control', 'required' => 'required'])!!}
		</div>
		<div class="form-group">
			{!! Form::submit('Enviar',['class' => 'btn btn-success'])!!}
		</div>
		{!! Form::close()!!}
		</div>
	</div>
</div>
@endsection