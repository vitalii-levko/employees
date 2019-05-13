@extends('layout')

@section('title', 'Employee profile')

@section('content')
	<h1>{{ $employee->name }}</h1>

	<ul>
		<li>{{ $employee->position->name }}</li>
		<li>{{ $employee->position->salary }}</li>
	</ul>

	<p>
		<a href="/employees/{{ $employee->id }}/edit">Edit</a>
	</p>
	<form method="post" action="/employees/{{ $employee->id }}">
		@method('delete')
		@csrf
		<input type="hidden" name="company_id" value="{{ $employee->company->id }}">
		<button type="submit">Delete</button>
	</form>
@endsection
