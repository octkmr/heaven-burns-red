<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>character</title>
    <meta name="description" content="ディスクリプションを入力">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
    <script src="main.js"></script>
</head>
<body>
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
</body>
</html>
