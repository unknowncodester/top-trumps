<?php

class Dealer
{
    private $cardDeck;

    public function __construct()
    {
        $this->cardDeck = new CardDeck();
    }

    public function getCards() {
        $cards = $this->cardDeck->getCards();
        return $this->shuffleCards($cards);
    }

    private function shuffleCards($cards)
    {
        shuffle($cards);
        return $cards;
    }

    public function dealCards(Player $playerOne, Player $playerTwo, $cards)
    {
        $amountOfCards = count($cards);

        for ($i = 0; $i < $amountOfCards; $i++) {
            if ($i == 0) {
                $playerOne->collectCard($cards[$i]);
            } elseif ($i % 2 == 0) {
                $playerOne->collectCard($cards[$i]);
            } else {
                $playerTwo->collectCard($cards[$i]);
            }
        }
    }
}