@extends('layouts.principal')
	@section('content')
				<div class="review-content">
			<div class="top-header span_top">
				<div class="logo">
					<a href="index.html"><img src="images/logo.png" alt="" /></a>
					<p>PCMI</p>
				</div>
				<div class="search v-search">
					<form>
						<input type="text" value="Buscar..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search..';}"/>
						<input type="submit" value="">
					</form>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="reviews-section">
				<h3 class="head">Juegos Reviews</h3>
					<div class="col-md-9 reviews-grids">
					@foreach($juegos as $juego)
							<div class="review">
								<div class="movie-pic">
									<img src="archivos/{{$juego->path}}" alt="" />
								</div>
								<div class="review-info">
									<a class="span" href="single.html"> 
									<i>{{$juego->name}}</i></a>
									<p class="info">DESCRIPCION:&nbsp;&nbsp;{{$juego->descripcion}}</p>
									<p class="info">URL:&nbsp;&nbsp;{{$juego->url}}</p>
									<a href="https://arbolabc.com/juegos-de-colores/colorea-tu-obra-de-arte" class="btn btn-default">Jugar</a>
								</div>
								<div class="clearfix"></div>
							</div>
						@endforeach

						<div class="review">
							<div class="movie-pic">
								<a href="single.html"><img src="images/j1.jpeg" alt="" /></a>
							</div>
							<div class="review-info">
								<a class="span" href="single.html">Artista  <i>de cubos</i></a>
								
								<p>DESCRIPCION:&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Se un artista de cubos, dibujate a base de cubos, ¿Como eres?</p>
								<p class="info">URL: &nbsp;&nbsp;&nbsp;&nbsp;https://arbolabc.com/</p>
								
								<a href="https://arbolabc.com/juegos-de-colores/artista-cubista" class="btn btn-default">Jugar</a>
							</div>
							<div class="clearfix"></div>
						</div>
						

						<div class="review">
							<div class="movie-pic">
								<a href="single.html"><img src="images/j2.jpeg" alt="" /></a>
							</div>
							<div class="review-info">
								<a class="span" href="single.html">Colorea,  <i>¡Muchos colores!</i></a>
								
								<p>DESCRIPCION:&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Colorea todos los tableros que quieras, ¿Cual es tu color favorito?</p>
								<p class="info">URL: &nbsp;&nbsp;&nbsp;&nbsp;https://arbolabc.com/</p>
								
								<a href="https://arbolabc.com/juegos-de-colores/dibujos-para-colorear" class="btn btn-default">Jugar</a>
							</div>
							<div class="clearfix"></div>
						</div>


					</div>


					<div class="clearfix"></div>
			</div>
			</div>
		<div class="review-slider">
			 <ul id="flexiselDemo1">
				<li><img src="images/r1.jpg" alt=""/></li>
				<li><img src="images/r2.jpg" alt=""/></li>
				<li><img src="images/r3.jpg" alt=""/></li>
				<li><img src="images/r4.jpg" alt=""/></li>
				<li><img src="images/r5.jpg" alt=""/></li>
				<li><img src="images/r6.jpg" alt=""/></li>
			</ul>	
		</div>	
	@endsection