<?php

class PlayablePlayer
{
    public $cardDeck = [];

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function collectCard(Card $card)
    {
        $this->cardDeck[] = $card;
    }

    public function getCard()
    {
        return array_shift($this->cardDeck);
    }
}
