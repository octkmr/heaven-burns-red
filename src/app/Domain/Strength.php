<?php

class Strength
{
    private Character $character;

    public function __construct(Character $character)
    {
        $this->character = $character;
    }

    private function getStrengthDp(): int
    {
        return round($this->character->getDp() * 1/10);
    }

    private function getStrengthHp(): int
    {
        return round($this->character->getHp() * 1/10);
    }

    public function calculation(): int
    {
        return $this->getStrengthDp() +
            $this->getStrengthHp() +
            $this->character->getPwr() +
            $this->character->getDex() +
            $this->character->getDef() +
            $this->character->getRef() +
            $this->character->getInt() +
            $this->character->getLck();
    }
}