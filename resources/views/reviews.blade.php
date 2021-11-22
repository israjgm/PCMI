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
				<h3 class="head">Videos Reviews</h3>
					<div class="col-md-9 reviews-grids">
					@foreach($videos as $video)
							<div class="review">
								<div class="movie-pic">
									<img src="archivos/{{$video->path}}" alt="" />
								</div>
								<div class="review-info">
									<a class="span" href="single.html"> 
									<i>{{$video->name}}</i></a>
									<p class="info">AUTOR:&nbsp;&nbsp;{{$video->autor}}</p>
									<p class="info">URL:&nbsp;&nbsp;{{$video->url}}</p>
									<p class="info">CAT:&nbsp;&nbsp;{{$video->categoria}}</p>
									<p class="info">MIN:&nbsp;&nbsp;{{$video->min}}</p>
									<a href="https://youtu.be/fmuhIylXLno" class="btn btn-default">Reproducir</a>
								</div>
								<div class="clearfix"></div>
							</div>
						@endforeach
						

						<div class="review">
							<div class="movie-pic">
								<a href="single.html"><img src="images/v2.jpg" alt="" /></a>
							</div>
							<div class="review-info">
								<a class="span" href="single.html">¿Tienes un  <i>secreto?</i></a>
								
								<p class="info">AUTOR:&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Editorial Bombom</p>
								<p class="info">URL: &nbsp;&nbsp;&nbsp;&nbsp;https://www.youtube.com/watch?v=z97w1Ziluvo/p>
								<p class="info">CLASIFICACION:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;violencia psicológica</p>
								<p class="info">MIN:&nbsp;&nbsp;&nbsp; &nbsp; 4:00 min</p>
								<a href="https://www.youtube.com/watch?v=z97w1Ziluvo" class="btn btn-default">Reproducir</a>
							</div>
							<div class="clearfix"></div>
						</div>


						<div class="review">
							<div class="movie-pic">
								<a href="single.html"><img src="images/v1.jpg" alt="" /></a>
							</div>
							<div class="review-info">
								<a class="span" href="single.html">Estela  <i>grita muy fuerte</i></a>
								
								<p class="info">AUTOR:&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Isabel Olid</p>
								<p class="info">URL: &nbsp;&nbsp;&nbsp;&nbsp;https://www.youtube.com/watch?v=XxgVEermrQs</p>
								<p class="info">CLASIFICACION:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; violenci sexual</p>
								<p class="info">MIN:&nbsp;&nbsp;&nbsp; &nbsp;5:00 min</p>
								<a href="https://youtu.be/XxgVEermrQs" class="btn btn-default">Reproducir</a>
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