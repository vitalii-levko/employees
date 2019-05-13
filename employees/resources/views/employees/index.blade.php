@extends('layout')

@section('title', 'Manage employees')

@section('content')
	<h1>{{ $company->name }}</h1>

	<p><a href="/employees/create?cid={{ $company->id }}">Create employee profile</a></p>
	<ul>
		@foreach ($company->employees as $employee)
			<li><a href="/employees/{{ $employee->id }}">{{ $employee->name }}</a></li>
		@endforeach
	</ul>
@endsection
