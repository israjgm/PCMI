@extends('layouts.admin')
	@section('content')
		@include('alerts.request')
		
		{!!Form::model($juego,['route'=> ['juego.update',$juego->id],'method'=>'PUT','files' => true])!!}
			@include('juego.forms.juego')
			{!!Form::submit('Actualizar',['class'=>'btn btn-primary'])!!}
		{!!Form::close()!!}

		{!!Form::open(['route'=> ['juego.destroy',$juego->id],'method'=>'DELETE'])!!}
			{!!Form::submit('Eliminar',['class'=>'btn btn-danger'])!!}
		{!!Form::close()!!}
	@endsection