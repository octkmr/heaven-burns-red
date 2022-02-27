@extends('layouts.app')

@section('title', 'ガチャシミュレータ結果')
@section('content')
    @foreach($styles as $key => $style)
        <hr>
        @if($style->rarity === "SS")
            <p class="ss">{{ $key+1 }}　<b>{{ $style->rarity }}</b> {{ $style->character->name }} 「{{ $style->name }}」</p>
        @elseif($style->rarity === "S")
            <p class="s">{{ $key+1 }}　<b>{{ $style->rarity }}</b> {{ $style->character->name }} 「{{ $style->name }}」</p>
        @else
            <p class="a">{{ $key+1 }}　<b>{{ $style->rarity }}</b> {{ $style->character->name }} 「{{ $style->name }}」</p>
        @endif
    @endforeach
    <hr>
@endsection
