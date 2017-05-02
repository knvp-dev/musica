@extends('layouts.app')

@section('content')
	<h1>{{ $profileUser->fullName() }}</h1>
@endsection