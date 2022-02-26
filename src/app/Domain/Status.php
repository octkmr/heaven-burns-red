<?php

class Status
{
    private int $dp;
    private int $hp;
    private int $pwr;
    private int $dex;
    private int $def;
    private int $ref;
    private int $int;
    private int $lck;

    public function __construct(array $status)
    {
        $this->dp = $status['dp'] ?? null;
        $this->hp = $status['hp'] ?? null;
        $this->pwr = $status['pwr'] ?? null;
        $this->dex = $status['dex'] ?? null;
        $this->def = $status['def'] ?? null;
        $this->ref = $status['ref'] ?? null;
        $this->int = $status['int'] ?? null;
        $this->lck = $status['lck'] ?? null;
    }

    /**
     * @param int $dp
     */
    public function setDp(int $dp): void
    {
        $this->dp = $dp;
    }

    /**
     * @param int $hp
     */
    public function setHp(int $hp): void
    {
        $this->hp = $hp;
    }

    /**
     * @param int $pwr
     */
    public function setPwr(int $pwr): void
    {
        $this->pwr = $pwr;
    }

    /**
     * @param int $dex
     */
    public function setDex(int $dex): void
    {
        $this->dex = $dex;
    }

    /**
     * @param int $def
     */
    public function setDef(int $def): void
    {
        $this->def = $def;
    }

    /**
     * @param int $ref
     */
    public function setRef(int $ref): void
    {
        $this->ref = $ref;
    }

    /**
     * @param int $int
     */
    public function setInt(int $int): void
    {
        $this->int = $int;
    }

    /**
     * @param int $lck
     */
    public function setLck(int $lck): void
    {
        $this->lck = $lck;
    }

    /**
     * @return int
     */
    public function getDp(): int
    {
        return $this->dp;
    }

    /**
     * @return int
     */
    public function getHp(): int
    {
        return $this->hp;
    }

    /**
     * @return int
     */
    public function getPwr(): int
    {
        return $this->pwr;
    }

    /**
     * @return int
     */
    public function getDex(): int
    {
        return $this->dex;
    }

    /**
     * @return int
     */
    public function getDef(): int
    {
        return $this->def;
    }

    /**
     * @return int
     */
    public function getRef(): int
    {
        return $this->ref;
    }

    /**
     * @return int
     */
    public function getInt(): int
    {
        return $this->int;
    }

    /**
     * @return int
     */
    public function getLck(): int
    {
        return $this->lck;
    }
}