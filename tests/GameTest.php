<?php

class GameTest extends PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function canCreateAGame()
    {
        $game = new Game();
        $this->assertInstanceOf(Game::class, $game);
    }

    /**
     * @test
     */
    public function newGameHasTwoBots()
    {
        $game = new Game();
        $this->assertInstanceOf(Bot::class, $game->botOne);
        $this->assertInstanceOf(Bot::class, $game->botTwo);
    }
}