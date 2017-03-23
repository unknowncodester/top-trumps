<?php

/**
 * Created by PhpStorm.
 * User: dan
 * Date: 21/03/17
 * Time: 21:21
 */
class Game
{
    public $botOne;
    public $botTwo;
    public $dealer;

    public function __construct()
    {
        $this->botOne = new Bot("Barry");
        $this->botTwo = new Bot("Rachel");
        $this->dealer = new Dealer();
        $this->initGame();
    }

    public function initGame()
    {
        $cards = $this->dealer->getCards();
        $this->dealer->dealCards($this->botOne, $this->botTwo, $cards);

//        while($this->playersHaveCards()){
//
//            $stat = $this->botOne->takeTurn();
//            $botOneCard = $this->botOne->getCard();
//            $botTwoCard = $this->botTwo->getCard();
//            if($botOneCard->compareTo($botTwoCard, $stat));
//        }
    }

    /**
     * @return bool
     */
    private function playersHaveCards()
    {
        if (count($this->botOne->cardDeck) == 0 || count($this->botTwo->cardDeck) == 0) {
            return false;
        }
    }
}