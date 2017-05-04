<?php

class Game
{
    public $botOne;
    public $playerOne;
    public $dealer;
    public $gameDialog;

    public function __construct()
    {
        $this->botOne     = new Bot('Barry');
        $this->playerOne  = new Playable('Danny');
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
            $this->gameDialog->announceGameWinner($this->playerOne->getName());
        }
    }

    /**
     * @return bool
     */
    private function playersHaveCards()
    {
        return count($this->botOne->cardDeck) > 0 && count($this->playerOne->cardDeck) > 0;
    }

    private function takeTurn()
    {
        $stat       = $this->playerOne->takeTurn();
        $playerOneCard = $this->playerOne->getCard();
        $botOneCard = $this->botOne->getCard();
        $this->gameDialog->announcePlayersMove($botOneCard, $playerOneCard, $stat);
        $this->findRoundWinner($botOneCard, $playerOneCard, $stat);
        $this->gameDialog->announceCardSize($this->botOne->cardDeck, $this->playerOne->cardDeck);
    }

    private function dealCards()
    {
        $cards = $this->dealer->getCards();
        $this->dealer->dealCards($this->botOne, $this->playerOne, $cards);
    }

    /**
     * @param $botOneCard
     * @param $playerOneCard
     * @param $stat
     */
    private function findRoundWinner($botOneCard, $playerOneCard, $stat)
    {
        if ($botOneCard->compareTo($playerOneCard, $stat)) {
            echo 'bot one wins the round'.PHP_EOL;
            $this->botOne->collectCard($botOneCard);
            $this->botOne->collectCard($playerOneCard);
        } else {
            echo 'player 1 wins the round'.PHP_EOL;
            $this->playerOne->collectCard($playerOneCard);
            $this->playerOne->collectCard($botOneCard);
        }
    }
}