@extends('layouts.admin')
	@include('alerts.success')
	@section('content')
		<table class="table">
			<thead>
				<th>Nombre</th>
				<th>Autor</th>
				<th>url</th>
				<th>Caratula</th>
				<th>Operaciones</th>
			</thead>
			@foreach($videos as $video)
				<tbody>
					<td>{{$video->name}}</td>
					<td>{{$video->autor}}</td>
					<td>{{$video->min}}</td>
                    <td>
						<img src="archivos/{{$video->path}}" alt="" style="width:100px;"/>
						</td>
					<td>
						{!!link_to_route('video.edit', $title = 'Editar', $parameters = $video->id, $attributes = ['class'=>'btn btn-primary'])!!}
					</td>
				</tbody>
			@endforeach
		</table>
	@endsection