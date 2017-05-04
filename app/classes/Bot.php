<?php

class Bot extends Player
{
    public function takeTurn()
    {
        return $this->getHighestStat();
    }

    private function getHighestStat()
    {
        $card = current($this->cardDeck);

        $stats = [
            'Alchemy' => $card->getAlchemy(),
            'Fear Factor' => $card->getFearFactor(),
            'Magic' => $card->getMagic(),
            'Rage' => $card->getRage(),
            'Stealth' => $card->getStealth(),
            'Strength' =>$card->getStrength()
        ];

        arsort($stats);
        return current(array_keys($stats));
    }
}