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
        $this->assertInstanceOf(Bot::class, $game->playerTwo);
    }

    /**
     * @test
     */
    public function canCreateAGameWithPlayerAndBot()
    {
        $playablePlayer = new Playable('Human');
        $playablePlayer->setReadLocation(__DIR__ . "/Fixtures/firstChoice.txt");
        $game = new Game(new Bot('name'), $playablePlayer);
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