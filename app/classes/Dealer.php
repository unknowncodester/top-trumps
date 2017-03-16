<?php

/**
 * Created by PhpStorm.
 * User: dan
 * Date: 16/03/17
 * Time: 21:12
 */
class Dealer
{
    /**
     * @var array
     */
    private $cards = [];

    /**
     * @var CardDeck
     */
    private $cardDeck;

    public function __construct()
    {
        $this->cardDeck = new CardDeck();
    }

    public function getCards(){
        $this->cards = $this->cardDeck->getCards();
        return $this->cards;
    }
}