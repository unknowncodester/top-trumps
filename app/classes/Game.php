<?php

/**
 * Created by PhpStorm.
 * User: dan
 * Date: 21/03/17
 * Time: 21:21
 */
class Game
{
    public $botOne;
    public $botTwo;

    public function __construct()
    {
        $this->initGame();
    }

    public function initGame()
    {
        $this->botOne = new Bot("Barry");
        $this->botTwo = new Bot("Rachel");
    }
}