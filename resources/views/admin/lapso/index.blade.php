@extends('layouts.template')
@section('content')
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
	<br><br>
	<form action="" method="POST" id="form_lapse">
		{{ csrf_field() }}
		{{ method_field('PUT') }}
		<select name="type_lapse_id" id="">
			@foreach ($type_lapses as $tp)
			<option value="{{ $tp->id }}">{{ $tp->description }}</option>
			@endforeach
		</select>
		<input type="date" name="start_date">
		<input type="date" name="completion_date">
		<button name="submit_lapso" id="submit_lapso">GUARDAR</button>
	</form>
	<br><br>
	<form action="" method="POST">
		{{ csrf_field() }}
		{{ method_field('DELETE') }}

	</form>
@endsection
