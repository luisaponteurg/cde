<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/plantilla.css') }}">

	<title>Periodos</title>
</head>
<body>
	<form action="" id="form" method="POST">
		{{csrf_field()}}
		{{-- <select class="input-field" name="status">
			<option selected disabled>Estatus</option>}
			<option value="1">Activo</option>
			<option value="0">Inactivo</option>
		</select> --}}
		<input type="text" class="input-field col s12" pattern="0-9" placeholder="Ingrese el Periodo" name="period">
		<div name="status" class="input-field col s12">
		    <select>
		      <option value="" disabled selected>Choose your option</option>
		      <option value="1">Activo</option>
		      <option value="2">Inactivo</option>
		    </select>
		   <label>Materialize Select</label>
		</div>
		<br>
		<input type="submit" id="submit" name="btn" value="Guardar">		
	</form>
</body>
<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/plantilla.js') }}"></script>


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
		    var url = '{{ Route('periodos.store') }}';
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
</html>