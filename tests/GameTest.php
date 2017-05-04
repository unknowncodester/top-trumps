<?php

class GameTest extends PHPUnit_Framework_TestCase
{

    public $game;

    public function setUp()
    {
        ob_start();
    }

    public function tearDown()
    {
        ob_end_clean();
    }

    /**
     * @test
     */
    public function canCreateAGameWithBots()
    {
        $game = new Game(new Bot('name'), new Bot('name'));
        $this->assertInstanceOf(Game::class, $game);
        $this->assertInstanceOf(Bot::class, $game->playerOne);
        $this->assertInstanceOf(Playable::class, $game->playerTwo);
    }

    /**
     * @test
     */
    public function canCreateAGameWithPlayerAndBot()
    {
        $game = new Game(new Bot('name'), new Playable('name'));
        $this->assertInstanceOf(Game::class, $game);
        $this->assertInstanceOf(Bot::class, $game->playerOne);
        $this->assertInstanceOf(Player::class, $game->playerTwo);
    }

    /**
     * @test
     */
    public function newGameHasADealer()
    {
        $game = new Game(new Bot('name'), new Bot('name'));
        $this->assertInstanceOf(Dealer::class, $game->dealer);
    }
}