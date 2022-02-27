@extends('layouts.app')

@section('title', 'ガチャシミュレータ')
@section('content')
    <button class="button">
        <img src="{{ asset('img/gatcha.png') }}" height="500px" alt="">
        <a href="{{ route('gatcha.result') }}" class="gatcha-button">ガチャを引く</a>
    </button>
@endsection
