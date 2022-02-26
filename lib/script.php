<?php

require_once "Domain/Character.php";
require_once "Domain/Strength.php";
require_once "Domain/Level.php";

$status = [
    'dp' => 2360,
    'hp' => 966,
    'pwr' => 256,
    'dex' => 206,
    'def' => 224,
    'ref' => 217,
    'int' => 216,
    'lck' => 204
];

$character = new Character($status);
$strength = new Strength($character); // characterniireru
$level = new Level($character);

echo "レベル上がる前：" . $strength->calculation();
echo PHP_EOL;

if($level->up()) {
    echo "レベル上がった後：" . $strength->calculation();
}