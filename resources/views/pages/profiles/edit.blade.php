@extends('layouts.app')

@section('content')

    @include('partials.profile-header')

    <h1>edit</h1>

    <form action="{{ route('profiles.update', $account) }}">
    
        <input type="text" name="username">
        <button type="submit">save</button>
    
    </form>


@endsection