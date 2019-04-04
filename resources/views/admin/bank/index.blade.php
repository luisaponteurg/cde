<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="" method="POST">
		{{csrf_field()}}
		<input type="text" pattern="a-zA-Z" placeholder="Ingrese el nombre del banco" name="name">
		<br>
		<input type="submit" name="btn" value="Guardar">		
	</form>
</body>
</html>