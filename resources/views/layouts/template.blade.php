<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
	<title>SIDCA</title>
	<link rel="icon" href="{{asset('img/Unerg-1.png')}}">
	<!-- CSS FILES -->
	<link rel="stylesheet" href="{{asset('css/uikit.min.css')}}" />
	<link rel="stylesheet" href="{{asset('css/style.css')}}">
	@yield('css')

</head>
<body class="uk-light wrap uk-background-norepeat uk-background-cover uk-background-center-center uk-background-secondary" style="background-image: url({{asset('img/P6265793.JPG')}})">
	<div class="uk-offcanvas-content">
		<div class="uk-flex uk-flex-center uk-flex-middle uk-height-viewport uk-position-z-index uk-position-relative" data-uk-height-viewport="min-height: 400">

			<!-- NAV -->
			<div class="uk-position-top">
				<div class="uk-container uk-container-small">
					<nav class="uk-navbar-container uk-navbar-transparent" data-uk-navbar>
						<div class="uk-navbar-left">
							<div class="uk-navbar-item">
								<a class="uk-logo" href="{{ url('/') }}"><img src="{{asset('img/image.png')}}" alt="Logo"><span>SIDCA</span></a>
							</div>
						</div>
						{{-- @guest --}}

						{{-- @else --}}
						<div class="uk-navbar-right">
							<ul class="uk-navbar-nav">
								<li class="uk-active uk-visible@m">
									<a href="" data-uk-icon="home"></a>
								</li>
								<li class="uk-visible@s">
									<a href="/profesores/">PRECARGAR DATOS</a>
								</li>
								<li class="uk-visible@s">
									<a href="/nominas">ADMISION</a></li>
								<li class="uk-visible@s">
									<a href="#">MENU3</a>
								</li>
								<li class="uk-visible@s">
									<a href="/usuarios">MENU4</a>
								</li>
								<li>
									<a class="uk-navbar-toggle" data-uk-toggle data-uk-navbar-toggle-icon uk-toggle="target: #offcanvas-slide"></a>
								</li>
							</ul>
						</div>
						{{-- @endguest --}}
					</nav>
				</div>
			</div>
			<!-- /NAV -->

			@yield('content')

			<!-- FOOT -->
			<div class="uk-position-bottom-center uk-position-small">
				<span class="uk-text-small uk-text-center">© 2018 | Direccion De Informatica | <a href="https://www.unerg.edu.ve">Unerg</a></span>
			</div>
			<!-- /FOOT -->

		</div>

		<!-- OFFCANVAS -->
		<div id="offcanvas-slide" uk-offcanvas="overlay: false; flip:true">
			<div class="uk-offcanvas-bar uk-offcanvas-bar-animation uk-offcanvas-slide">
				<button class="uk-offcanvas-close uk-close uk-icon" type="button" data-uk-close></button>
				<ul class="uk-nav-default uk-nav-parent-icon" uk-nav>
					@auth
						<li style="background-color: #ff5; color: #000; font-family: arial;">Usuario: {{ \Auth::User()->user }} / Tipo: {{ \Auth::User()->role->rol }}</li>
					@endauth
					<li class="uk-active"><a href="#">Menu Principal</a></li>
					<li class="uk-parent">
						<a href="#" >PROFESOR</a>
						<ul class="uk-nav-sub">
							<li><a href="">Registrar</a></li>
							<li><a href="">Listado</a></li>
							{{-- <li><a href="{{ route('expedientes.index') }}">Expediente</a></li> --}}
							<li><a href="#">Titulos obtenidos</a></li>
							<li><a href="#">Cursos realizados</a></li>
							<li><a href="#">Experiencia laboral</a></li>
							<li><a href="#">Participacion en eventos</a></li>
							<li><a href="#">Productos de investigacion</a></li>
							<li><a href="#">Formacion de talentos</a></li>
							<li><a href="#">Actividades</a></li>
						</ul>
					</li>
					<li class="uk-parent">
						<a href="#" >NOMINA</a>
						<ul class="uk-nav-sub">
							<li><a href="">Crear</a></li>
							<li><a href="">Seguimiento</a></li>
							<li><a href="">Devolucion</a></li>
							{{-- <li><a href="#">Consulta</a></li> --}}
							{{-- <li><a href="#">Relacion</a></li> --}}
						</ul>
					</li>
					<li class="uk-parent">
						<a href="#" >PRECARGAR DATOS</a>
						<ul class="uk-nav-sub">
							{{-- <li><a href="#">Movimiento</a></li> --}}
							<li><a href="">Periodo</a></li>
							<li><a href="">Programa</a></li>
							<li><a href="">Area Academica</a></li>
							<li><a href="">Sede</a></li>
							<li><a href="">Nucleo</a></li>
							<li><a href="">Unidad Curricular</a></li>
						</ul>
					</li>
					<li class="uk-parent">
						<a href="#" >USUARIO</a>
						<ul class="uk-nav-sub">
							<li><a href="">Crear</a></li>
							<li><a href="">Todos</a></li>
						</ul>
					</li>
					<li class="uk-nav-divider"></li>
				<li><a href="{{ route('logout') }}"
						onclick="event.preventDefault();
						document.getElementById('logout-form').submit();"><span class="uk-margin-small-right" uk-icon="icon: trash"></span> Salir</a>
					<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
						{{ csrf_field() }}
					</form>
				</li>
				</ul>
				<p>Proporcionar a la institución en sus diferentes niveles e instancias, la información completa y fidedigna del personal docente – investigador unerg, de acuerdo al registro exhaustivo y confiable de su trayectoria, desde el inicio hasta el momento en que sea requerido.</p>
			</div>
		</div>
		<!-- /OFFCANVAS -->

	</div>
	<!-- JS FILES -->
	<script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
	<script src="{{asset('js/myjs.js')}}"></script>
	<script src="{{asset('js/uikit.min.js')}}"></script>
	<script src="{{asset('js/uikit-icons.min.js')}}"></script>
	@yield('js')
</body>
</html>
