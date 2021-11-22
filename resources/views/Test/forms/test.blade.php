<div class="form-group">
	{!!Form::label('nombre','Nombre:')!!}
	{!!Form::text('name',null,['class'=>'form-control', 'placeholder'=>'Ingresa el Nombre de la pelicula'])!!}
</div>
<div class="form-group">
	{!!Form::label('descripcion','descripcion:')!!}
	{!!Form::text('descripcion',null,['class'=>'form-control', 'placeholder'=>'descripcion'])!!}
</div>
<div class="form-group">
	{!!Form::label('url','url:')!!}
	{!!Form::text('url',null,['class'=>'form-control', 'placeholder'=>'url'])!!}
</div>
<div class="form-group">
	{!!Form::label('Poster','Poster:')!!}
	{!!Form::file('path')!!}
</div>