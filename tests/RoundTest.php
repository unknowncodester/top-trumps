<?php

class RoundTest extends PHPUnit_Framework_TestCase
{
    private $round;

    public function setUp()
    {
        $this->round = new Round();
    }

    /**
     * @test
     */
    public function canCreateARound()
    {
        $this->assertInstanceOf(Round::class, $this->round);
    }

    /**
     * @test
     */
    public function canAddARound()
    {
        $this->round->add('player1');
        $this->assertEquals(1, $this->round->getRoundsPlayed());
    }

    /**
     * @test
     */
    public function canGetTheRoundWinner()
    {
        $this->round->add('player1');
        $this->assertEquals('player1', $this->round->getRoundWinner());
    }

    /**
     * @test
     */
    public function gettingTheWinnerDoesntAffectRoundSize()
    {
        $this->round->add('player1');
        $this->assertEquals('player1', $this->round->getRoundWinner());
        $this->assertEquals(1, $this->round->getRoundsPlayed());
    }
}

?>
