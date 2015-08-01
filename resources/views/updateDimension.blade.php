@extends('app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			{!! Form::model($Dimension, ['route' => 'Dimension.update', 'method'=> 'put', 'novalidate'])!!}
		{!! Form::hidden('id_D', $Dimension -> id_D)!!}
		<div class="form-group">
			{!! Form:: label('full_Tipo_Dimension','Tipo_Dimension')!!}
			{!! Form:: text('Tipo_Dimension','null', ['class' => 'form-control', 'required' => 'required'])!!}
		</div>
		<div class="form.group">
			{!! Form:: label('Descripcion','Descripci&oacute;n')!!}
			{!! Form:: text('Descripcion','null', ['class' => 'form-control', 'required' => 'required'])!!}
		</div>
		<div class="form.group">
			{!! Form:: label('Estado_Dimension','Estado_Dimension')!!}
			{!! Form:: text('Estado_Dimension','null', ['class' => 'form-control', 'required' => 'required'])!!}
		</div>
		<div class="form-group">
			{!! Form::submit('Enviar',['class' => 'btn btn-success'])!!}
		</div>
		{!! Form::close()!!}
		</div>
	</div>
</div>
@endsection