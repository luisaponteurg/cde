<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="{{ route('lapso.store') }}" method="POST" id="form_lapse">
		{{ csrf_field() }}
		<select name="type_lapse_id" id="">
			@foreach ($type_lapses as $tp)
			<option value="{{ $tp->id }}">{{ $tp->description }}</option>

			@endforeach
		</select>
		<input type="date" name="start_date">
		<input type="date" name="completion_date">
		<button name="submit_lapso" id="submit_lapso">GUARDAR</button>
	</form>
</body>
<script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
<script src="{{ asset('js/popper.min.js') }}"></script>
<script>

</script>
</html>