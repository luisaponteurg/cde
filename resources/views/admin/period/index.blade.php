<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="" method="POST">
		{{csrf_field()}}
		<input type="text" pattern="0-9" placeholder="Ingrese el Periodo" name="period">
		<br>
		<select name="status">
			<option selected disabled>Estatus</option>}
			<option value="1">Activo</option>
			<option value="0">Inactivo</option>
		</select>
		<br>
		<input type="submit" name="btn" value="Guardar">		
	</form>
</body>
</html>