<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="" method="POST" id="form_lapse">
		{{ csrf_field() }}
		<select name="type_lapse" id="">
			@foreach ($type_lapses as $tp)
			<option value="{{ $tp->id }}">{{ $tp->description }}</option>

			@endforeach
		</select>
		<input type="date" name="start_date">
		<input type="date" name="completion_date">
		<a href="#" name="submit_lapso" id="submit_lapso">GUARDAR</a>
	</form>
</body>
<script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
<script src="{{ asset('js/popper.min.js') }}"></script>
<script>
	$('#submit_lapso').click(function() {
		e.preventDefault();

		$.ajaxSetup({
			headers: {
				'X-CSRF-TOKEN': $('meta[name="csrf_token"]').attr('content')
			}
		})

		var form = $('#form_lapse').serialize();
		console.log(form);
		var url = '{{ Route('lapso.store') }}';

		$.ajax({
			type: 'post',
			url: url,
			data: form,
			dataType: 'json',
			success: function(data) {
				alertify.success("agregado con exito");
				console.log('success: '+data);

		            // alert('error');
		        },
		        error: function(data) {
		        	alertify.error("Fallo al agregar");
		        	var errors = data.responseJSON;
		            // alert('success');
		        }
		    });
	})
</script>
</html>