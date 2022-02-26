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
<h1>名簿</h1>
@foreach($unitsAndCharacters as $unit => $characters)
    <hr>
    <h3>{{ $unit }}部隊</h3>
    @foreach($characters as $character)
        <p><a href="{{route('character.detail', ['character' => $character['id']])}}">{{ $character['name'] }}</a></p>
    @endforeach
@endforeach
<hr>
</body>
</html>
