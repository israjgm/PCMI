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
				<h3 class="head">Test Reviews</h3>
					<div class="col-md-9 reviews-grids">
					@foreach($tests as $test)
					
							<div class="review">
								<div class="movie-pic">
									<img src="archivos/{{$test->path}}" alt="" />
								</div>
								<div class="review-info">
									<a class="span" href="single.html"> 
									<i>{{$test->name}}</i></a>
									<p>DESCRIPCION:&nbsp;&nbsp;{{$test->descripcion}}</p>
									<p class="info">URL:&nbsp;&nbsp;{{$test->url}}</p>
									<br>
									<a href="https://docs.google.com/forms/d/e/1FAIpQLSegcs3HxRNYxU0MFGZQJ3HRJ_16hlBKP2TZGicw0LUd2U7tkQ/viewform" class="btn btn-default">Contestar</a>
								</div>
								<div class="clearfix"></div>
							</div>
						@endforeach
						

						<div class="review">
							<div class="movie-pic">
								<a href="single.html"><img src="images/f2.jpg" alt="" /></a>
							</div>
							<div class="review-info">
								<a class="span" href="single.html">Cuestionario - <i>Violencia fisica</i></a>
								<p>DESCRIPCION: &nbsp;&nbsp;&nbsp;&nbsp;todas las agresiones que atentan contra el cuerpo de una persona, ya sea a través de golpes, lanzamiento de objetos, encierro, sacudidas o estrujones, entre otras conductas que puedan ocasionar daños físicos.</p>
								<p class="info">URL:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; https://docs.google.com/forms/d/e/1FAIpQLScxSxHd_v</p>
								<br>
									<a href="https://docs.google.com/forms/d/e/1FAIpQLScxSxHd_vv95V66D-uK3gcAFLDqEncuYDwrwuyIkAtdoUaw7Q/viewform" class="btn btn-default">Contestar</a>
							</div>
							<div class="clearfix"></div>
						</div>

						<div class="review">
							<div class="movie-pic">
								<a href="single.html"><img src="images/f2.jpg" alt="" /></a>
							</div>
							<div class="review-info">
								<a class="span" href="single.html">Cuestionario - <i>Violencia sexual</i></a>
								<p>DESCRIPCION: &nbsp;&nbsp;&nbsp;&nbsp;La violencia sexual es todo acto intencional de naturaleza sexual que es forzado en otra persona, sin importar su relación, mediante fuerza física, coerción, intimidación, humillación, tomando ventaja de la inhabilidad de otra persona para dar consentimiento</p>
								<p class="info">URL:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; https://docs.google.com/forms/d/e/1FAIpQLSeunKCxhJCKbLk3T</p>
								<br>
									<a href="https://docs.google.com/forms/d/e/1FAIpQLSeunKCxhJCKbLk3T4N5xQY56Sl95tGIQiVliMkqwnOfy7Omjw/viewform" class="btn btn-default">Contestar</a>
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