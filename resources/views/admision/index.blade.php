<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="" method="POST">
		{{csrf_field()}}
		<select name="tipo_documento" id="">
			<option value="Pasaporte">Pasaporte</option>
			<option value="Cedula">Cedula</option>
		</select>
		<input type="text" pattern="0-9" placeholder="Ingrese Cedula" name="cedula">
		<br>
		<input type="text" placeholder="Ingrese el primer nombre" pattern="^[a-zA-Z]+" title="Ingrese solo letras">
		<input type="text" placeholder="Ingrese el segundo nombre" pattern="^[a-zA-Z]+" title="Ingrese solo letras">
		<br>
		<input type="text" placeholder="Ingrese el primer apellido" pattern="^[a-zA-Z]+" title="Ingrese solo letras">
		<input type="text" placeholder="Ingrese el segundo apellido" pattern="^[a-zA-Z]+" title="Ingrese solo letras">
		<br>
		<label for="genero">Mujer</label>
		<input type="radio" name="genero" id="" value="1">
		<label for="genero">hombre</label>
		<input type="radio" name="genero" id="" value="2">
		<br>
		<label for="discapacidad">Discapacidad</label>
		<select name="discapacidad" id="">
			<option value="--">Seleccione</option>
		</select>
		<br>
		
	</form>
</body>
</html>