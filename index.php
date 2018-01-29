<?php

require __DIR__."/vendor/autoload.php";

$handle = fopen("php://stdin", "r");

echo "Enter Player 1's name".PHP_EOL;
$line = fgets($handle);
$playerOneName = trim($line);

echo "Enter Player 2's name".PHP_EOL;
$line = fgets($handle);
$playerTwoName = trim($line);

echo "Enter 1 for Player vs Bot game, 2 for Bot vs Bot".PHP_EOL;
while(1){
    $line = fgets($handle);
    $gameMode = trim($line);

    if($gameMode == "1"){
        new Game(new Playable($playerOneName), new Bot($playerTwoName), new SlowGameDialog());
    }

    if($gameMode == "2"){
        new Game(new Bot($playerOneName), new Bot($playerTwoName), new FastGameDialog());
    }
}

