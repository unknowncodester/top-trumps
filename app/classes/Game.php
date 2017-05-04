<?php
class Game
{
    public $playerOne;
    public $playerTwo;
    public $dealer;
    public $gameDialog;

    public function __construct(Player $playerOne, Player $playerTwo)
    {
        $this->playerOne  = $playerOne;
        $this->playerTwo  = $playerTwo;
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
        if (count($this->playerOne->cardDeck) > 0) {
            $this->gameDialog->announceGameWinner($this->playerOne->getName());
        } else {
            $this->gameDialog->announceGameWinner($this->playerTwo->getName());
        }
    }

    private function playersHaveCards()
    {
        return count($this->playerOne->cardDeck) > 0 && count($this->playerTwo->cardDeck) > 0;
    }

    private function takeTurn()
    {
        $stat       = $this->playerOne->takeTurn();
        $playerOneCard = $this->playerOne->getCard();
        $playerTwoCard = $this->playerTwo->getCard();
        $this->gameDialog->announcePlayersMove($playerOneCard, $playerTwoCard, $stat);
        $this->findRoundWinner($playerOneCard, $playerTwoCard, $stat);
        $this->gameDialog->announceCardSize($this->playerOne->cardDeck, $this->playerTwo->cardDeck);
    }
    private function dealCards()
    {
        $cards = $this->dealer->getCards();
        $this->dealer->dealCards($this->playerOne, $this->playerTwo, $cards);
    }

    private function findRoundWinner($playerOneCard, $playerTwoCard, $stat)
    {
        if ($playerOneCard->compareTo($playerTwoCard, $stat)) {
            echo 'player one wins the round'.PHP_EOL;
            $this->playerOne->collectCard($playerOneCard);
            $this->playerOne->collectCard($playerTwoCard);
        } else {
            echo 'player two wins the round'.PHP_EOL;
            $this->playerTwo->collectCard($playerTwoCard);
            $this->playerTwo->collectCard($playerOneCard);
        }
    }
}