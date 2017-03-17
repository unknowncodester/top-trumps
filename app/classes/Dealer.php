<?php

/**
 * Created by PhpStorm.
 * User: dan
 * Date: 16/03/17
 * Time: 21:12
 */
class Dealer
{
    private $cards = [];
    private $cardDeck;

    public function __construct()
    {
        $this->cardDeck = new CardDeck();
    }

    public function getCards(){
        $this->cards = $this->cardDeck->getCards();
        $this->shuffleCards();
        return $this->cards;
    }

    private function shuffleCards()
    {
        shuffle($this->cards);
    }
}