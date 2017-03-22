<?php

class Bot
{
    public $cardDeck = [];
    public $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function takeTurn()
    {
        return $this->getHighestStat();
    }

    public function collectCard(Card $card)
    {
        $this->cardDeck[] = $card;
    }

    public function getCard()
    {
        return array_shift($this->cardDeck);
    }

    private function getHighestStat()
    {
        $card = current($this->cardDeck);

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