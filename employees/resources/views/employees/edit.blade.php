@extends('layout')

@section('title', 'Edit employee profile')

@section('content')
	<h1>Edit employee profile</h1>

	<h2>{{ $employee->name }}</h2>

	<form method="post" action="/employees/{{ $employee->id }}">
		@method('patch')
		@csrf
		<label for="name">Name</label><br>
		<input type="text" name="name" value="{{ $employee->name }}"><br>
		<button type="submit">Update</button>
	</form>
@endsection
