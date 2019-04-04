<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/plantilla.css') }}">
</head>
<body>
	<form action="" id="form" method="POST">
		{{csrf_field()}}
		<input type="text" pattern="a-zA-Z" placeholder="Ingrese el nombre del banco" name="name">
		<br>
		<input id="submit" type="submit" name="btn" value="Guardar">		
	</form>
</body>
<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/plantilla.js') }}"></script>
</html>

<script>
	$('#submit').on('click', function(e){
    		e.preventDefault();

    		$.ajaxSetup({
		        headers: {
		            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		        }
		    });

            var form = $('#form').serialize();
            // console.log(form);
		    var url = '{{ Route('bancos.store') }}';
		    console.log(form);

		    $.ajax({
		        type: 'post',
		        url: url,
		        data: form,
		        dataType: 'json',
		        success: function(data) {
    		            console.log('success: '+data);
		        },
		        error: function(data) {
		            var errors = data.responseJSON;
		        }
		    });
		});

	
</script>