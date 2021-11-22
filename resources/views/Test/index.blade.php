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
			@foreach($tests as $test)
				<tbody>
					<td>{{$test->name}}</td>
					<td>{{$test->descripcion}}</td>
					<td>{{$test->url}}</td>
                    <td>
						<img src="archivos/{{$test->path}}" alt="" style="width:100px;"/>
						</td>
					<td>
						{!!link_to_route('test.edit', $title = 'Editar', $parameters = $test->id, $attributes = ['class'=>'btn btn-primary'])!!}
					</td>
				</tbody>
			@endforeach
		</table>
	@endsection