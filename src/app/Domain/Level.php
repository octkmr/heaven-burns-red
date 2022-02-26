<?php

class Level
{

    const LEVER_UP_ADD_DP = 8;
    const LEVER_UP_ADD_HP = 7;
    const LEVER_UP_ADD_PERFORMANCE = 1;

    private Character $character;

    public function __construct(Character $character)
    {
        $this->character = $character;
    }

    public function up(int $rise = 1)
    {
        try {
            if ($rise <= 0) {
                throw new Exception('せやから0以下の数値を指定すな');
            }
            for ($i = 1 ; $i <= $rise; $i++) {
                $this->character->setDp($this->character->getDp() + self::LEVER_UP_ADD_DP);
                $this->character->setHp($this->character->getHp() + self::LEVER_UP_ADD_HP);
                $this->character->setPwr($this->character->getPwr() + self::LEVER_UP_ADD_PERFORMANCE);
                $this->character->setDex($this->character->getDex() + self::LEVER_UP_ADD_PERFORMANCE);
                $this->character->setDef($this->character->getDef() + self::LEVER_UP_ADD_PERFORMANCE);
                $this->character->setRef($this->character->getRef() + self::LEVER_UP_ADD_PERFORMANCE);
                $this->character->setInt($this->character->getInt() + self::LEVER_UP_ADD_PERFORMANCE);
                $this->character->setLck($this->character->getLck() + self::LEVER_UP_ADD_PERFORMANCE);
            }
            return true;
        } catch(Exception $e) {
            echo $e->getMessage();
            return false;
        }
    }
}