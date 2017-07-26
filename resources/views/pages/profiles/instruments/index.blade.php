@extends('layouts.app')

@section('content')

    <form action="/instruments/{{$user->username}}/add" method="post">
        {{ csrf_field() }}
        <select name="instrument_id">
            <option value="1">Guitar</option>
            <option value="2">Drums</option>
        </select>
        <input type="date" name="playing_since">
        <input type="submit" value="save">
    </form>

    @foreach($user->instruments as $instrument)
        <p>{{ $instrument->name }} - <span>{{ $instrument->pivot->playing_since }}</span></p>
    @endforeach
@endsection