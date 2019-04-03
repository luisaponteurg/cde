<!DOCTYPE html>
<html lang="es">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
	<title>Dace | Unerg</title>
	<link rel="icon" href="{{ asset('img/1.png') }}">

	<!-- CSS  -->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link href="{{ asset('css/materialize.css') }}" type="text/css" rel="stylesheet" media="screen,projection"/>
	<link href="{{ asset('css/style.css') }}" type="text/css" rel="stylesheet" media="screen,projection"/>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link href="css/plantilla.css" type="text/css" rel="stylesheet" media="screen,projection"/>

</head>
	<body class="blue darken-3"><br><br>	<br><br>	
	<div class="container row">
		<div class="col s5 push-s8">
			<div class="col s12 card-panel hoverable">
				<br>
				<div>
					<img class="responsive-img" src="img/1.png" height="150">
				</div>
				<form class="col s12" method="POST" action="{{ route('login') }}">
					{{ csrf_field() }}
					<h5 class="light center-aling">Inicio de sesion</h5>
					<div class="row">
						<div class="input-field col s12">
							<input id="email" type="email" name="email" required class="validate" value="{{ old('email') }}">
							<label class="black-text" for="email"> Correo</label>
							<span class="helper-text" data-error="Debe ingresar un correo valido" data-success="right">Ingrese Su Correo Correctamente</span>
						</div>
						
						{{-- <div class="input-field col s12">
							<input id="password" type="password" name="password" required class="validate" value="{{ old('password') }}">
							<label class="black-text" for="password"> Contraseña</label>
							<span class="helper-text" data-error="Debe ingresar una contraseña valida" data-success="right">Ingrese Su Contraseña Correctamente</span>
						</div> --}}
					</div>
					<div class="row">
						<div class="input-field col s12">
							<a class="waves-effect waves-light btn blue darken-4 col s12">Ingresar</a>
						</div>
						<p class="input-field col s12">
							<a href="#" data-target="modal1" class="modal-trigger">Olvide mi contraseña</a>
						</p>
					</div>
				</form>
			</div>
		</div>
	<div class="col s7 pull-s6">
	<br><br>
	<h2 class="header center white-text row le">Universidad Nacional Experimental <br>Rómulo Gallegos</h2>
	<div class="row center">
		<h6 class="header col s12 light white-text">Direccion de Admisión y Control De Estudios</h5>
		</div>
	</div>
	<br>
	<footer class="col s12" >
		<div class="footer-copyright col s12">
			<div class="container white-text col s12">
				© 2019 | Direccion de informatica | <a class=" white-text text-lighten-3" href="#">Unerg</a>
			</div>
		</div>
	</footer>

	<!-- modal -->
	<div id="modal1" class="modal">
		<div class="modal-content">
			<div class="row col s11">
				<div class="col s9">
					<div class="col s9">
					<h5 class="light center-aling">Por favor ingrese una direccion de correo a donde se le enviara su clave provisional</h5>
					<div class="input-field">
						 <i class="material-icons prefix">control_point</i>
						<textarea id="textarea2" class="materialize-textarea" data-length="120"></textarea>
					</div>
					<div class="modal-footer">
						<a href="#!" class="modal-close waves-effect waves-green btn-flat">Enviar</a>
					</div>
				</div>
				</div>
				<div class="col s3">
					<img src="img/1.png" height="100">
				</div>
			</div>
			
		</div>
	</div>
	<!-- /modal -->
	<!--  Scripts-->
	<script src="js/app.js"></script>
    <script src="js/plantilla.js"></script>

	</body>
</html>
