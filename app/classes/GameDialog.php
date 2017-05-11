<?php

class GameDialog
{
    public function announceNewGame()
    {
        echo 'Dealing cards.......'.PHP_EOL;
    }

    public function announceNewRound()
    {
        echo 'Round Begins...'.PHP_EOL;
        echo 'Type the name of the stat you wish to use'.PHP_EOL.PHP_EOL;
    }

    public function announcePlayersMove($botOneCard, $botTwoCard, $stat)
    {
        echo 'Player One playing card '.$botOneCard.' stat '.$stat.PHP_EOL;
        echo 'Player Two reveals card '.$botTwoCard.PHP_EOL;
    }

    public function announceCardSize($botOneDeck, $botTwoDeck)
    {
        echo 'Player one has '.count($botOneDeck).' cards remaining'.PHP_EOL;
        echo 'Player two has '.count($botTwoDeck).' cards remaining'.PHP_EOL;
    }

    public function announceGameWinner($botName)
    {
        echo $botName.' Wins';
    }
}