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
            new Card('Khaiji', 4, 3, 7, 3, 9, 10),
            new Card('Geek', 1, 1, 4, 2, 8, 4),
            new Card('Tramp', 2, 6, 2, 5, 3, 1),
            new Card('Alcholic', 2, 5, 1, 8, 2, 0),
            new Card('Pimp', 5, 5, 2, 6, 3, 2),
            new Card('Gimp', 4, 3, 2, 4, 4, 2),
            new Card('Smuggler', 3, 4, 2, 4, 3, 5),
            new Card('Capo', 6, 6, 1, 7, 6, 2),
            new Card('Arsonist', 6, 12, 3, 8, 10, 5),
            new Card('Elf', 4, 5, 12, 4, 10, 7),
            new Card('Viking', 7, 5, 2, 8, 2, 2),
            new Card('Archer', 2, 2, 3, 6, 3, 10),
            new Card('Alchemist', 6, 5, 8, 6, 13, 4),
            new Card('Dragonborn', 12, 9, 10, 7, 4, 4),
            new Card('Knight', 7, 6, 2, 6, 2, 4),
            new Card('Don Corlone', 4, 10, 1, 10, 1, 1),
            new Card('Thief', 4, 3, 5, 4, 5, 13),
            new Card('Geralt', 10, 12, 10, 7, 5, 4)
        ];

        foreach ($cards as $card){
            $this->addCard($card);
        }
    }
}