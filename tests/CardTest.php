<?php

require "../vendor/autoload.php";
require "../app/classes/Card.php";

class TestExample extends PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function canGetACard()
    {
        $card = new Card(2, 4, 3, 5, 8, 1);
        $this->assertInstanceOf(Card::class, $card);
    }

    /**
     * @test
     */
    public function cardHasStats()
    {
        $weakCard = new Card(2, 4, 3, 5, 8, 1);
        $strength = $weakCard->getStrength();
        $fearFactor = $weakCard->getFearFactor();
        $magic = $weakCard->getMagic();
        $rage = $weakCard->getRage();
        $alchemy = $weakCard->getAlchemy();
        $stealth = $weakCard->getStealth();

        $this->assertEquals($strength, 2);
        $this->assertEquals($fearFactor, 4);
        $this->assertEquals($magic, 3);
        $this->assertEquals($rage, 5);
        $this->assertEquals($alchemy, 8);
        $this->assertEquals($stealth, 1);
    }
}

?>