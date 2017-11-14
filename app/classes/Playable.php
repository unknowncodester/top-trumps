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

        $moves = [
            'Alchemy',
            'Intelligence',
            'Magic',
            'Rage',
            'Stealth',
            'Strength'
        ];
        $handle = fopen($this->readLocation, "r");

        while(1){

            $line = fgets($handle);
            $move = ucfirst (trim($line));

            if (in_array($move, $moves)) {
                return $move;
            }
        }
    }

    public function setReadLocation($location)
    {
        $this->readLocation = $location;
    }
}
