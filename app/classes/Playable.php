<?php

class Playable extends Player
{
    protected $readLocation = "php://stdin";

    protected $gameDialog;

    public function __construct($name)
    {
        parent::__construct($name);
        $this->gameDialog = new SlowGameDialog();
    }

    public function takeTurn()
    {
        $this->gameDialog->revealCard(current($this->cardDeck));

        return $this->gameDialog->takeTurn();
    }

    public function setReadLocation($location)
    {
        $this->readLocation = $location;
    }
}
