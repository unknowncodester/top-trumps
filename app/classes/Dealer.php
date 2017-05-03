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

    public function dealCards(Bot $botOne, PlayablePlayer $playerOne, $cards)
    {
        $amountOfCards = count($cards);

        for ($i = 0; $i < $amountOfCards; $i++) {
            if ($i == 0) {
                $botOne->collectCard($cards[$i]);
            } elseif ($i % 2 == 0) {
                $botOne->collectCard($cards[$i]);
            } else {
                $playerOne->collectCard($cards[$i]);
            }
        }
    }
}