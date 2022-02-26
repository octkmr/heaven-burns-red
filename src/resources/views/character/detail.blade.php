@extends('layouts.app')

@section('title', '名簿詳細')
@section('content')
    <h1>{{ $character->name }}</h1>
    <table>
        <tr>
            <td>所属：{{ $character->unit }}部隊</td>
        </tr>
        <tr>
            <td>誕生日：{{ $character->birthday }}</td>
        </tr>
        <tr>
            <td>身長：@if(is_null($character->height)) - @else {{ $character->height }} @endif cm</td>
        </tr>
        <tr>
            <td>セラフ：{{ $character->seraph }}</td>
        </tr>
    </table>
    <h2>「{{ $character->seraphim_code }}」</h2>
    <h3>スタイル</h3>
    @foreach($styles as $style)
        <hr>
        <p><b>{{$style->rarity}}</b> {{$style->name}}</p>
        <p>{{$style->role}} {{$style->attack}} {{$style->element}}</p>
    @endforeach
    <hr>
@endsection
