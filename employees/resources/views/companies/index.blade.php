@extends('layout')

@section('title', 'Companies list')

@section('content')
	<h1>Companies</h1>

	<ul>
		@foreach ($companies as $company)
			<li><a href="/companies/{{ $company->id }}">{{ $company->name }}</a></li>
		@endforeach
	</ul>
@endsection
