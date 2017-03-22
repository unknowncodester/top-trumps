<?php

class GameTest extends PHPUnit_Framework_TestCase
{

    public $game;

    public function setUp()
    {
        $this->game = new Game();
    }

    /**
     * @test
     */
    public function canCreateAGame()
    {
        $this->assertInstanceOf(Game::class, $this->game);
    }

    /**
     * @test
     */
    public function newGameHasTwoBots()
    {
        $this->assertInstanceOf(Bot::class, $this->game->botOne);
        $this->assertInstanceOf(Bot::class, $this->game->botTwo);
    }

    /**
     * @test
     */
    public function newGameHasADealer()
    {
        $this->assertInstanceOf(Dealer::class, $this->game->dealer);
    }
}