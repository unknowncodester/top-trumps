<?php

class Playable extends Player
{
    public function takeTurn()
    {
        echo(current($this->cardDeck).PHP_EOL);
        $handle = fopen ("php://stdin","r");
        $line = fgets($handle);
        $move = trim($line);

        if($move === "Alchemy"){
            return "Alchemy";
        }elseif($move === "Fear Factor"){
            return "Fear Factor";
        }elseif($move === "Magic"){
            return "Magic";
        }elseif($move === "Rage"){
            return "Rage";
        }elseif($move === "Stealth"){
            return "Stealth";
        }elseif($move === "Strength"){
            return "Strength";
        }else{
            return "Strength";
        }
    }
}
