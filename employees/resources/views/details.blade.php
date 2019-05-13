@extends('layout')

@section('title', 'Details')

@section('content')
	<h1>Details</h1>

	<ul>
		@foreach($companies as $company)
			<li><a href="/companies/{{ $company->id }}">{{ $company->name }}</a></li>
			@if ($company->employees->count())
				<ul>
					@foreach ($company->employees as $employee)
						<li>{{ $employee->name }}</li>
							<ul>
								<li>{{ $employee->position->name }}</li>
								<li>{{ $employee->position->salary }}</li>
							</ul>
					@endforeach
				</ul>
			@endif
		@endforeach
	</ul>
@endsection
