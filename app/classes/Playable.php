<?php

class Playable extends Player
{
    protected $readLocation = "php://stdin";

    public function takeTurn()
    {
        echo(current($this->cardDeck).PHP_EOL);
        echo("Enter the name of a stat above".PHP_EOL);
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

            if (in_array($move, $moves))
            {
                return $move;
            }
        }
    }

    public function setReadLocation($location)
    {
        $this->readLocation = $location;
    }
}
