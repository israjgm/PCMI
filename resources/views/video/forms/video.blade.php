<div class="form-group">
	{!!Form::label('nombre','Nombre:')!!}
	{!!Form::text('name',null,['class'=>'form-control', 'placeholder'=>'Ingresa el Nombre de la pelicula'])!!}
</div>
<div class="form-group">
	{!!Form::label('autor','autor:')!!}
	{!!Form::text('autor',null,['class'=>'form-control', 'placeholder'=>'Ingresa la duración'])!!}
</div>
<div class="form-group">
	{!!Form::label('url','url:')!!}
	{!!Form::text('url',null,['class'=>'form-control', 'placeholder'=>'Ingresa la url'])!!}
</div>
<div class="form-group">
	{!!Form::label('categoria','categoria:')!!}
	{!!Form::text('categoria',null,['class'=>'form-control', 'placeholder'=>'Ingresa la categoria'])!!}
</div>
<div class="form-group">
	{!!Form::label('Duracion','Duración:')!!}
	{!!Form::text('min',null,['class'=>'form-control', 'placeholder'=>'Ingresa la duración'])!!}
</div>
<div class="form-group">
	{!!Form::label('Poster','Poster:')!!}
	{!!Form::file('path')!!}
</div>
