<?php

class Character
{
    private Status $status;
    private Level $level;
    private Strength $strength;

    public function __construct() {
     $status = new Status();
     $level = new Level();
     $strength = new Strength();
    }
}