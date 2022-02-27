<?php

namespace App\Domain;

use App\Models\Style;

class Gatcha
{
    const SS_RATE = 3;
    const S_RATE = 18;
    const A_RATE = 79;

    public static function getStyles(Style $style, int $times)
    {
        $lotteryRarities = self::lottery($times);
        $styles = [];
        foreach ($lotteryRarities as $rarity) {
            $style = $style->where('rarity', $rarity)->inRandomOrder()->first();
            array_push($styles, $style);
        }
        return $styles;
    }

    private static function lottery(int $times): array
    {
        $lotteryRarities = [];
        for ($i=0; $i<$times; $i++) {
            $random = mt_rand(1, 100);
            switch ($random) {
                case $random <= self::SS_RATE;
                    $result = "SS";
                    break;
                case self::SS_RATE < $random && $random <= self::SS_RATE + self::S_RATE;
                    $result = "S";
                    break;
                default:
                    $result = "A";
            }
            array_push($lotteryRarities, $result);
        }
        return $lotteryRarities;
    }
}
