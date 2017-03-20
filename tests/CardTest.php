<?php

require_once __DIR__ . "/../vendor/autoload.php";

class CardTest extends PHPUnit_Framework_TestCase
{

    private $card;

    /**
     *
     */
    public function setUp()
    {
        $this->card = new Card('Faggot', 2, 4, 3, 5, 8, 1);
    }

    /**
     * @test
     */
    public function canGetACard()
    {
        $this->assertInstanceOf(Card::class, $this->card);
    }

    /**
     * @test
     */
    public function cardHasStats()
    {
        $this->assertEquals($this->card->getName(), 'Faggot');
        $this->assertEquals($this->card->getStrength(), 2);
        $this->assertEquals($this->card->getfearFactor(), 4);
        $this->assertEquals($this->card->getMagic(), 3);
        $this->assertEquals($this->card->getRage(), 5);
        $this->assertEquals($this->card->getAlchemy(), 8);
        $this->assertEquals($this->card->getStealth(), 1);
    }
}

?>
