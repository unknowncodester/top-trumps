<?php

class PlayableTest extends PHPUnit_Framework_TestCase
{

    protected $player;

    public function setUp()
    {
        $this->player = new Playable("John McClain");
        ob_start();
    }

    public function tearDown()
    {
        ob_end_clean();
    }

    /**
     * @test
     * @dataProvider readLocations
     */
    public function canReadFromFile($expected, $location)
    {
        $this->player->setReadLocation(__DIR__ . "/Fixtures/firstChoice.txt");
        $this->assertSame("Rage", $this->player->takeTurn());
    }

    public function readLocations()
    {
        return [
            [
                'Rage',
                __DIR__ . "/Fixtures/firstChoice.txt"
            ],
            [
                'Rage',
                __DIR__ . "/Fixtures/secondChoice.txt"
            ],
        ];
    }

    /**
     * @test
     */
    public function canGetName()
    {
        $this->assertEquals('John McClain', $this->player->getName());
    }

    /**
     * @test
     */
    public function canCollectACard()
    {
        $initialDeckSize = count($this->player->cardDeck);
        $this->player->collectCard(new Card("Lab rat", 10, 6, 5, 3, 5, 4));
        $this->assertEquals($initialDeckSize + 1, count($this->player->cardDeck));
    }

    /**
     * @test
     */
    public function canLoseACard()
    {
        $this->player->collectCard(new Card("Lab rat", 10, 6, 5, 3, 5, 4));
        $initialDeckSize = count($this->player->cardDeck);
        $this->player->getCard();
        $this->assertEquals($initialDeckSize - 1, count($this->player->cardDeck));
    }

    /**
     * @test
     */
    public function cardLostIsACard()
    {
        $this->player->collectCard(new Card("Lab rat", 10, 6, 5, 3, 5, 4));
        $card = $this->player->getCard();
        $this->assertInstanceOf(Card::class, $card);
    }
}
