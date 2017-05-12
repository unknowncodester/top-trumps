<?php

class FastGameDialog implements GameDialog
{
    public function announceNewGame()
    {
        echo 'Dealing cards.......'.PHP_EOL;
    }

    public function announceNewRound()
    {
        echo 'Round Begins...'.PHP_EOL;
    }

    public function announcePlayersMove(Card $playerOneCard, Card $playerTwoCard, string $stat)
    {
        echo 'Player One playing card '.$playerOneCard.' stat '.$stat.PHP_EOL;
        echo 'Player Two reveals card '.$playerTwoCard.PHP_EOL;
    }

    public function announceCardSize(int $playerOneCardAmount, int $playerTwoCardAmount)
    {
        echo 'Player one has '.$playerOneCardAmount.' cards remaining'.PHP_EOL;
        echo 'Player two has '.$playerTwoCardAmount.' cards remaining'.PHP_EOL;
    }

    public function announceRoundWinner(string $playerName)
    {
        echo $playerName.' Wins The Round!';
    }

    public function announceGameWinner(string $playerName)
    {
        echo $playerName.' Wins';
    }
}