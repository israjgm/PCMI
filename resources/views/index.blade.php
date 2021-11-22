@extends('layouts.principal')
	@section('content')
	@include('alerts.errors')
	@include('alerts.request')
				<div class="header">
			<div class="top-header">
				<div class="logo">
					<a href="index.html"></a>
					<p>PCMI</p>
				</div>

				<div class="clearfix"></div>
			</div>
			<div class="header-info">
			<div class="form-group">
			<p class="login-box-msg">Inicia sesión para comenzar</p>
			</div>
				{!!Form::open(['route'=>'log.store', 'method'=>'POST'])!!}
					<div class="form-group">
							
						{!!Form::email('email',null,['class'=>'form-control', 'placeholder'=>'Ingresa tu correo'])!!}
					</div>
					<div class="form-group">
							
						{!!Form::password('password',['class'=>'form-control', 'placeholder'=>'Ingresa tu contraseña'])!!}
					</div>
					<div class="col-6">
                            <button type="submit" class="btn btn-primary btn-block btn-flat">Iniciar sesión</button>
                        </div>

				{!!Form::close()!!}
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