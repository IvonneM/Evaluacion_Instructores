@extends('app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			{!! Form::model($Ficha, ['route' => 'Ficha.update', 'method'=> 'put', 'novalidate'])!!}
		{!! Form::hidden('id_Ficha', $Ficha -> id_Ficha)!!}
		<div class="form-group">
			{!! Form:: label('Nombre_P','Nombre del programa')!!}
			{!! Form:: text('Nombre','null', ['class' => 'form-control', 'required' => 'required'])!!}
		</div>
		<div class="form.group">
			{!! Form:: label('Estado_Ficha','Estado de la Ficha')!!}
			{!! Form:: text('Estado_Ficha','null', ['class' => 'form-control', 'required' => 'required'])!!}
		</div>
		<div class="form.group">
			{!! Form:: label('Cod_Ficha','Codigo de la Ficha')!!}
			{!! Form:: text('Cod_Ficha','null', ['class' => 'form-control', 'required' => 'required'])!!}
		</div>
		<div class="form-group">
			{!! Form::submit('Enviar',['class' => 'btn btn-success'])!!}
		</div>
		{!! Form::close()!!}
		</div>
	</div>
</div>
@endsection