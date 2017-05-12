<?php

interface GameDialog
{
    public function announceNewGame();
    public function announceNewRound();
    public function announcePlayersMove(Card $botOneCard, Card $botTwoCard, string $stat);
    public function announceCardSize(int $playerOneCardAmount, int $playerTwoCardAmount);
    public function announceGameWinner(string $name);
    public function announceRoundWinner(string $name);
}