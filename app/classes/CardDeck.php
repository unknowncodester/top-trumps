<?php

/**
 * Created by PhpStorm.
 * User: dan
 * Date: 16/03/17
 * Time: 20:13
 */
class CardDeck
{
    public $cards = [];

    public function __construct()
    {
        $this->init();
    }

    private function addCard($card)
    {
        $this->cards[] = $card;
    }

    public function getCards()
    {
        return $this->cards;
    }

    public function removeCard()
    {
        $card = array_shift($this->cards);
        return $card;
    }

    private function init()
    {
        $this->getInitialCards();
        $this->shuffleCards();
    }

    private function getInitialCards()
    {
        $cards = [
            new Card('Faggot', 2, 4, 3, 5, 8, 1),
            new Card('Geek', 2, 4, 3, 5, 8, 1),
            new Card('Tramp', 2, 4, 3, 5, 8, 1),
            new Card('Alcholic', 2, 4, 3, 5, 8, 1),
            new Card('Pimp', 2, 4, 3, 5, 8, 1),
            new Card('Gimp', 2, 4, 3, 5, 8, 1),
            new Card('Druglord', 2, 4, 3, 5, 8, 1),
            new Card('Capo', 2, 4, 3, 5, 8, 1),
            new Card('Bluenose', 1, 1, 1, 1, 1, 1),
            new Card('Kopite', 19, 19, 19, 19, 19, 19)
        ];

        foreach ($cards as $card){
            $this->addCard($card);
        }
    }

    private function shuffleCards()
    {
        shuffle($this->cards);
    }
}