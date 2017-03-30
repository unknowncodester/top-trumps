<?php

class Game
{
    public $botOne;
    public $botTwo;
    public $dealer;
    public $gameDialog;

    public function __construct()
    {
        $this->botOne     = new Bot('Barry');
        $this->botTwo     = new Bot('Rachel');
        $this->dealer     = new Dealer();
        $this->gameDialog = new GameDialog();
        $this->initGame();
        $this->runGame();
    }

    public function initGame()
    {
        $this->gameDialog->announceNewGame();
        $this->dealCards();
    }

    private function runGame()
    {
        while ($this->playersHaveCards()) {

            $this->gameDialog->announceNewRound();
            $this->takeTurn();
        }

        if (count($this->botOne->cardDeck) > 0) {
            $this->gameDialog->announceGameWinner($this->botOne->getName());
        } else {
            $this->gameDialog->announceGameWinner($this->botTwo->getName());
        }
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
        $stat       = $this->botOne->takeTurn();
        $botOneCard = $this->botOne->getCard();
        $botTwoCard = $this->botTwo->getCard();
        $this->gameDialog->announcePlayersMove($botOneCard, $botTwoCard, $stat);
        $this->findRoundWinner($botOneCard, $botTwoCard, $stat);
        $this->gameDialog->announceCardSize($this->botOne->cardDeck, $this->botTwo->cardDeck);
    }

    private function dealCards()
    {
        $cards = $this->dealer->getCards();
        $this->dealer->dealCards($this->botOne, $this->botTwo, $cards);
    }

    /**
     * @param $botOneCard
     * @param $botTwoCard
     * @param $stat
     */
    private function findRoundWinner($botOneCard, $botTwoCard, $stat)
    {
        if ($botOneCard->compareTo($botTwoCard, $stat)) {
            echo 'player one wins the round'.PHP_EOL;
            $this->botOne->collectCard($botOneCard);
            $this->botOne->collectCard($botTwoCard);
        } else {
            echo 'player two wins the round'.PHP_EOL;
            $this->botTwo->collectCard($botTwoCard);
            $this->botTwo->collectCard($botOneCard);
        }
    }
}