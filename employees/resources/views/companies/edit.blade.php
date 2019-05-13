@extends('layout')

@section('title', 'Edit description')

@section('content')
	<h1>Edit description</h1>

	<h2>{{ $company->name }}</h2>

	<form method="post" action="/companies/{{ $company->id }}">
		@method('patch')
		@csrf
		<label for="description">Description</label><br>
		<textarea name="description">{{ $company->description }}</textarea><br>
		<button type="submit">Update</button>
	</form>
@endsection
