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
        $this->runGame();
    }

    public function initGame()
    {
        $this->announceNewGame();
        $this->dealCards();
    }

    /**
     * @return bool
     */
    private function playersHaveCards()
    {
        return count($this->botOne->cardDeck) > 0 && count($this->botTwo->cardDeck) > 0;
    }

    private function takeTurn()
    {
        $stat = $this->botOne->takeTurn();
        $botOneCard = $this->botOne->getCard();
        $botTwoCard = $this->botTwo->getCard();

        $this->announcePlayersMove($botOneCard, $botTwoCard, $stat);
        $this->findWinner($botOneCard, $botTwoCard, $stat);
        $this->announceCardSize();
    }

    private function dealCards()
    {
        $cards = $this->dealer->getCards();
        $this->dealer->dealCards($this->botOne, $this->botTwo, $cards);
    }

    private function announceNewGame()
    {
        echo "Dealing cards.......".PHP_EOL;
    }

    private function announceNewRound()
    {
        echo "Round Begins...".PHP_EOL;
    }

    /**
     * @param $botOneCard
     * @param $stat
     * @param $botTwoCard
     */
    private function announcePlayersMove($botOneCard, $botTwoCard, $stat)
    {
        echo "Player One playing card " . $botOneCard. " stat " . $stat . PHP_EOL;
        echo "Player Two reveals card " . $botTwoCard . PHP_EOL;
    }

    /**
     * @param $botOneCard
     * @param $botTwoCard
     * @param $stat
     */
    private function findWinner($botOneCard, $botTwoCard, $stat)
    {
        if ($botOneCard->compareTo($botTwoCard, $stat)) {
            echo "player one wins the round".PHP_EOL;
            $this->botOne->collectCard($botOneCard);
            $this->botOne->collectCard($botTwoCard);
        } else {
            echo "player two wins the round".PHP_EOL;
            $this->botTwo->collectCard($botTwoCard);
            $this->botTwo->collectCard($botOneCard);
        }
    }

    private function announceCardSize()
    {
        echo "Player one has ".count($this->botOne->cardDeck)." cards remaining".PHP_EOL;;
        echo "Player two has ".count($this->botTwo->cardDeck)." cards remaining".PHP_EOL;;
    }

    private function announceWinner()
    {
        if (count($this->botTwo->cardDeck) === 0) {
            echo "Player One Wins";
        }else{
            echo "Player Two Wins";
        }
    }

    private function runGame()
    {
        while ($this->playersHaveCards()) {

            $this->announceNewRound();
            $this->takeTurn();
        }

        $this->announceWinner();
    }
}