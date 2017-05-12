<?php

class SlowGameDialog implements GameDialog
{
    public function announceNewGame()
    {
        echo 'Dealing cards.......'.PHP_EOL;
        sleep(1.5);
    }

    public function announceNewRound()
    {
        echo 'Round Begins...'.PHP_EOL.PHP_EOL.PHP_EOL;
        sleep(1.5);
    }

    public function announcePlayersMove(Card $playerOneCard, Card $playerTwoCard, string $stat)
    {
        echo 'Player One playing card '.$playerOneCard.' stat '.$stat.PHP_EOL.PHP_EOL;
        sleep(2);
        echo 'Player Two reveals card '.$playerTwoCard.PHP_EOL.PHP_EOL;
        sleep(2);
    }

    public function announceCardSize(int $playerOneCardAmount, int $playerTwoCardAmount)
    {
        echo 'Player one has '.$playerOneCardAmount.' cards remaining'.PHP_EOL;
        sleep(2);
        echo 'Player two has '.$playerTwoCardAmount.' cards remaining'.PHP_EOL;
        sleep(2);
    }

    public function announceRoundWinner(string $playerName)
    {
        sleep(1);
        echo '!!!!!!!!!!!!!!!!'.$playerName.' Wins The Round!!!!!!!!!!!!!'.PHP_EOL.PHP_EOL;
        sleep(1);
    }

    public function announceGameWinner(string $playerName)
    {
        sleep(1);
        echo '!!!!!!!!!!!!!!!!'.$playerName.' Wins The Game!!!!!!!!!!!!!'.PHP_EOL.PHP_EOL;
        sleep(1);
    }
}