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
        $card = new Card(2, 4, 3);
        $this->assertInstanceOf(Card::class, $card);
    }

    /**
     * @test
     */
    public function cardHasStats()
    {
        $weakCard = new Card(2, 4, 3);
        $strength = $weakCard->getStrength();
        $fearFactor = $weakCard->getFearFactor();
        $magic = $weakCard->getMagic();

        $this->assertEquals($strength, 2);
        $this->assertEquals($fearFactor, 4);
        $this->assertEquals($magic, 3);
    }
}

?>