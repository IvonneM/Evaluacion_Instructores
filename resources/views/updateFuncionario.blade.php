@extends('app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			{!! Form::model($Funcionario, ['route' => 'Funcionario.update', 'method'=> 'put', 'novalidate'])!!}
		{!! Form::hidden('id_F', $Funacionario -> id_F)!!}
		<div class="form-group">
			{!! Form:: label('full_name','Nombre')!!}
			{!! Form:: text('name','null', ['class' => 'form-control', 'required' => 'required'])!!}
		</div>
		<div class="form.group">
			{!! Form:: label('Apellido','Apellido')!!}
			{!! Form:: text('Apellido','null', ['class' => 'form-control', 'required' => 'required'])!!}
		</div>
		<div class="form.group">
			{!! Form:: label('Telefono','Telefono')!!}
			{!! Form:: text('Telefono','null', ['class' => 'form-control', 'required' => 'required'])!!}
		</div>
		<div class="form.group">
			{!! Form:: label('Email','Email')!!}
			{!! Form:: email('Email','null', ['class' => 'form-control', 'required' => 'required'])!!}
		</div>
		<div class="form.group">
			{!! Form:: label('Cargo','Cargo')!!}
			{!! Form:: text('Cargo','null', ['class' => 'form-control', 'required' => 'required'])!!}
		</div>
		<div class="form.group">
			{!! Form:: label('Estado_Funcionario','Estado del Funcionario')!!}
			{!! Form:: text('Estado_Funcionario','null', ['class' => 'form-control', 'required' => 'required'])!!}
		</div>
		<div class="form.group">
			{!! Form:: label('Tipo_Docuemnto','Tipo Documento')!!}
			{!! Form:: text('Tipo_Documento','null', ['class' => 'form-control', 'required' => 'required'])!!}
		</div>
		<div class="form.group">
			{!! Form:: label('Cod_Identificacion_F','Cod_Identificacion_Funcionario')!!}
			{!! Form:: text('cod_Identificacon_F','null', ['class' => 'form-control', 'required' => 'required'])!!}
		</div>
		<div class="form-group">
			{!! Form::submit('Enviar',['class' => 'btn btn-success'])!!}
		</div>
		{!! Form::close()!!}
		</div>
	</div>
</div>
@endsection