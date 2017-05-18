@extends('layouts.app')

@section('content')
	@foreach($user->instruments as $instrument)
		<p>{{ $instrument->name }}</p>
	@endforeach
@endsection