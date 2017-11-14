<?php

use League\CLImate\CLImate;

abstract class GameDialog
{
    /**
     * @var \League\CLImate\CLImate
     */
    protected $cli;

    /**
     * GameDialog constructor.
     */
    public function __construct()
    {
        $this->cli =  new CLImate;
    }

    abstract public function announceNewGame();
    abstract public function announceNewRound();
    abstract public function announcePlayersMove(Card $botOneCard, Card $botTwoCard, string $stat);
    abstract public function announceCardSize(int $playerOneCardAmount, int $playerTwoCardAmount);
    abstract public function announceGameWinner(string $name);
    abstract public function announceRoundWinner(string $name);
}