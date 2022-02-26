@extends('layouts.app')

@section('title', '名簿')
@section('content')
    <h1>名簿</h1>
    @foreach($unitsAndCharacters as $unit => $characters)
        <hr>
        <h3>{{ $unit }}部隊</h3>
        @foreach($characters as $character)
            <p><a href="{{route('character.detail', ['character' => $character['id']])}}">{{ $character['name'] }}</a></p>
        @endforeach
    @endforeach
    <hr>
@endsection
