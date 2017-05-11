<?php

class Bot extends Player
{
    public function takeTurn()
    {
        $card = current($this->cardDeck);

        $stats = [
            'Alchemy' => $card->getAlchemy(),
            'Intelligence' => $card->getIntelligence(),
            'Magic' => $card->getMagic(),
            'Rage' => $card->getRage(),
            'Stealth' => $card->getStealth(),
            'Strength' =>$card->getStrength()
        ];

        arsort($stats);
        return current(array_keys($stats));
    }
}