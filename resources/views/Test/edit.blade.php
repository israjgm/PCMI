@extends('layouts.admin')
	@section('content')
		@include('alerts.request')
		
		{!!Form::model($test,['route'=> ['test.update',$test->id],'method'=>'PUT','files' => true])!!}
			@include('test.forms.test')
			{!!Form::submit('Actualizar',['class'=>'btn btn-primary'])!!}
		{!!Form::close()!!}

		{!!Form::open(['route'=> ['test.destroy',$test->id],'method'=>'DELETE'])!!}
			{!!Form::submit('Eliminar',['class'=>'btn btn-danger'])!!}
		{!!Form::close()!!}
	@endsection