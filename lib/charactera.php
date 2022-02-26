<?php

$character1 = [
  'id' => 1,
  'name' => '茅森星歌',
  'unit' => '31A',
];

$character2 = [
  'id' => 2,
  'name' => '和泉ユキ',
  'unit' => '31A',
];

$array = [
  '31A' => [
    $character1,
    $character2,
    ]
];


file_put_contents("character.json", json_encode($array, JSON_PRETTY_PRINT|JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES));
