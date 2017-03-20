<?php

class Bot
{
    public $cardDeck = [];

    public function takeTurn()
    {
        $card = $this->getCard();
        return $this->getHighestStat($card);
    }

    public function giveCard(Card $card)
    {
        $this->cardDeck[] = $card;
    }

    private function getCard()
    {
        return array_shift($this->cardDeck);
    }

    private function getHighestStat(Card $card)
    {
        $stats = [
            "Alchemy" => $card->getAlchemy(),
            "Fear Factor" => $card->getFearFactor(),
            "Magic" => $card->getMagic(),
            "Rage" => $card->getRage(),
            "Stealth" => $card->getStealth(),
            "Strength" =>$card->getStrength()
        ];

        arsort($stats);
        return current(array_keys($stats));
    }
}