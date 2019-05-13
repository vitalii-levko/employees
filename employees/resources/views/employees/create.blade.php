@extends('layout')

@section('title', 'Create employee profile')

@section('content')
	<h1>Create employee profile</h1>

	<form method="post" action="/employees">
		@csrf
		<input type="hidden" name="company_id" value="{{ $company->id }}">
		<label for="name">Name</label><br>
		<input type="text" name="name" placeholder="Employee name"><br>
		<label for="position">Position</label><br>
		<select name="position_id">
			@foreach ($positions as $position)
			<option value="{{ $position->id }}">{{ $position->name }}</option>
			@endforeach
		</select><br>
		<button type="submit">Create</button>
	</form>
@endsection
