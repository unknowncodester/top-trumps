<?php

class PlayableTest extends PHPUnit_Framework_TestCase
{
    protected $playablePlayer;

    public function setUp()
    {
        $this->playablePlayer = new Playable('Player 1');
    }

    /**
     * @test
     */
    public function canBeCreated()
    {
        $this->assertInstanceOf(Playable::class, $this->playablePlayer);
    }

    /**
     * @test
     */
    public function canGetName()
    {
        $this->assertEquals('Player 1', $this->playablePlayer->getName());
    }

    /**
     * @test
     */
    public function canCollectACard()
    {
        $initialDeckSize = count($this->playablePlayer->cardDeck);
        $this->playablePlayer->collectCard(new Card("Lab rat", 10, 6, 5, 3, 5, 4));
        $this->assertEquals($initialDeckSize + 1, count($this->playablePlayer->cardDeck));
    }

    /**
     * @test
     */
    public function canLoseACard()
    {
        $this->playablePlayer->collectCard(new Card("Lab rat", 10, 6, 5, 3, 5, 4));
        $initialDeckSize = count($this->playablePlayer->cardDeck);
        $this->playablePlayer->getCard();
        $this->assertEquals($initialDeckSize - 1, count($this->playablePlayer->cardDeck));
    }

    /**
     * @test
     */
    public function cardLostIsACard()
    {
        $this->playablePlayer->collectCard(new Card("Lab rat", 10, 6, 5, 3, 5, 4));
        $card = $this->playablePlayer->getCard();
        $this->assertInstanceOf(Card::class, $card);
    }
}
?>