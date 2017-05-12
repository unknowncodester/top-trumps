<?php
class Game
{
    public $playerOne;
    public $playerTwo;
    public $dealer;
    public $gameDialog;
    public $round;

    public function __construct(Player $playerOne, Player $playerTwo, GameDialog $gameDialog)
    {
        $this->playerOne  = $playerOne;
        $this->playerTwo  = $playerTwo;
        $this->gameDialog = $gameDialog;
        $this->dealer     = new Dealer();
        $this->round = new Round();
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
        $winnerOfLastRound = $this->round->getRoundWinner();

        if(empty($winnerOfLastRound)){
            $stat          = $this->playerOne->takeTurn();
        }else{
            $stat          = $this->{$winnerOfLastRound}->takeTurn();
        }

        $playerOneCard     = $this->playerOne->getCard();
        $playerTwoCard     = $this->playerTwo->getCard();
        $this->gameDialog->announcePlayersMove($playerOneCard, $playerTwoCard, $stat);
        $this->findRoundWinner($playerOneCard, $playerTwoCard, $stat);
        $this->gameDialog->announceCardSize(count($this->playerOne->cardDeck), count($this->playerTwo->cardDeck));
    }
    private function dealCards()
    {
        $cards = $this->dealer->getCards();
        $this->dealer->dealCards($this->playerOne, $this->playerTwo, $cards);
    }

    private function findRoundWinner($playerOneCard, $playerTwoCard, $stat)
    {
        if ($playerOneCard->compareTo($playerTwoCard, $stat)) {
            $this->round->add('playerOne');
            $this->gameDialog->announceRoundWinner($this->playerOne->getName());
            $this->playerOne->collectCard($playerOneCard);
            $this->playerOne->collectCard($playerTwoCard);
        } else {
            $this->round->add('playerTwo');
            $this->gameDialog->announceRoundWinner($this->playerTwo->getName());
            $this->playerTwo->collectCard($playerTwoCard);
            $this->playerTwo->collectCard($playerOneCard);
        }
    }
}