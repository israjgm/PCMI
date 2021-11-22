@extends('layouts.admin')
	@section('content')
		@include('alerts.request')
		
		{!!Form::model($video,['route'=> ['video.update',$video->id],'method'=>'PUT','files' => true])!!}
			@include('video.forms.video')
			{!!Form::submit('Actualizar',['class'=>'btn btn-primary'])!!}
		{!!Form::close()!!}

		{!!Form::open(['route'=> ['video.destroy',$video->id],'method'=>'DELETE'])!!}
			{!!Form::submit('Eliminar',['class'=>'btn btn-danger'])!!}
		{!!Form::close()!!}
	@endsection