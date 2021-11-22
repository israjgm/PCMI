@extends('layouts.admin')
	@include('alerts.success')
	@section('content')
		<table class="table">
			<thead>
				<th>Nombre</th>
				<th>Descripcion</th>
				<th>url</th>
				<th>Caratula</th>
				<th>Operaciones</th>
			</thead>
			@foreach($juegos as $juego)
				<tbody>
					<td>{{$juego->name}}</td>
					<td>{{$juego->descripcion}}</td>
					<td>{{$juego->url}}</td>
                    <td>
						<img src="archivos/{{$juego->path}}" alt="" style="width:100px;"/>
						</td>
					<td>
						{!!link_to_route('juego.edit', $title = 'Editar', $parameters = $juego->id, $attributes = ['class'=>'btn btn-primary'])!!}
					</td>
				</tbody>
			@endforeach
		</table>
	@endsection