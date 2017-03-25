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
        $this->getInitialCards();
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

    private function getInitialCards()
    {
        $cards = [
            new Card('Faggot', 2, 1, 2, 3, 4, 1),
            new Card('Geek', 1, 1, 4, 2, 6, 4),
            new Card('Tramp', 2, 6, 2, 5, 3, 1),
            new Card('Alcholic', 3, 5, 1, 8, 2, 0),
            new Card('Pimp', 5, 5, 2, 6, 3, 2),
            new Card('Gimp', 4, 3, 2, 4, 4, 2),
            new Card('Druglord', 8, 10, 2, 11, 10, 3),
            new Card('Capo', 6, 6, 1, 7, 6, 2),
            new Card('Bluenose', 1, 1, 1, 1, 1, 1),
            new Card('Kopite', 19, 19, 19, 19, 19, 19)
        ];

        foreach ($cards as $card){
            $this->addCard($card);
        }
    }
}