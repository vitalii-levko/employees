@extends('layout')

@section('title', 'Company profile')

@section('content')
	<h1>{{ $company->name }}</h1>

	@if ($company->description)
	<p>
		{{ $company->description }}
	</p>
	@endif

	@can('update', $company)
	<p>
		<a href="/companies/{{ $company->id }}/edit">{{ ($company->description) ? 'Edit' : 'Add' }} description</a>
	</p>
	<p>
		<a href="/employees?cid={{ $company->id }}">Manage employees</a>
	</p>
	@endcan
@endsection
