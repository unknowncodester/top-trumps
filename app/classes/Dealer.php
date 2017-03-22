<?php

/**
 * Created by PhpStorm.
 * User: dan
 * Date: 16/03/17
 * Time: 21:12
 */
class Dealer
{
    private $cardDeck;

    public function __construct()
    {
        $this->cardDeck = new CardDeck();
    }

    public function getCards(){
        $cards = $this->cardDeck->getCards();
        return $this->shuffleCards($cards);
    }

    private function shuffleCards($cards)
    {
        shuffle($cards);
        return $cards;
    }

    public function dealCards(Bot $botOne, Bot $botTwo, $cards)
    {
        for($i = 0; $i < count($cards); $i++){
            if($i == 0){
                $botOne->collectCard($cards[$i]);
            }elseif($i % 2 == 0){
                $botOne->collectCard($cards[$i]);
            }else{
                $botTwo->collectCard($cards[$i]);
            }
        }
    }
}