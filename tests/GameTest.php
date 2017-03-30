<?php

class GameTest extends PHPUnit_Framework_TestCase
{

    public $game;

    public function setUp()
    {
        ob_start();
        $this->game = new Game();
        ob_end_clean();
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

    /**
     * @test
     */
    public function RoundWinnerIsSaved()
    {

    }
}