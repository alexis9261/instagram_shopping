@extends('common.main_plantilla')

@section('title')
	Nosotros
@endsection


@section('content')
	<header class="nosotros_header">
		<div class="nosotros_header_body">
			<h2 class="nosotros_header_title">Nuestros Inicios</h2>
			<p class="nosotros_header_subtitle">
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
			</p>
		</div>
	</header>

	<section class="nosotros_quien" style="color: #fff">
		¡Imagen del equipo o algo que refleje quienes somos!
	</section>

	<section class="servicio_juntos">
		<div class="servicio_juntos_body">
			<h2>Trabajemos juntos</h2>
			<a href="#">contactar</a>
		</div>
	</section>
	<!-- Float Bottom -->
	@include('home.float_button')
@endsection
</html>