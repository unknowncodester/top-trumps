<?php

class Playable extends Player
{
    public function takeTurn()
    {
        $moves = [
            'Alchemy',
            'Fear Factor',
            'Magic',
            'Rage',
            'Stealth',
            'Strength'
        ];
        $handle = fopen("php://stdin", "r");

        while(1){

            $line = fgets($handle);
            $move = trim($line);

            if (in_array($move, $moves))
            {
                return $move;
            }
        }
    }
}
