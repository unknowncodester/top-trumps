<?php

require __DIR__."/vendor/autoload.php";

$handle = fopen("php://stdin", "r");
echo "Enter 1 for Player vs Bot game, 2 for Bot vs Bot".PHP_EOL;

while(1){
    $line = fgets($handle);
    $gameMode = trim($line);

    if($gameMode == "1"){
        new Game(new Playable("Player 1"), new Bot("Bot 2"));
    }

    if($gameMode == "2"){
        new Game(new Bot("Bot 1"), new Bot("Bot"));
    }
}

