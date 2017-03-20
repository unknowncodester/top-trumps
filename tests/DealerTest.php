<?php

class DealerTest extends PHPUnit_Framework_TestCase
{
    public $dealer;

    public function setUp()
    {
        $this->dealer = new Dealer();
    }

    /**
     * @test
     */
    public function canCreateADealer()
    {
        $this->assertInstanceOf(Dealer::class, $this->dealer);
    }

    /**
     * @test
     */
    public function canGetCards()
    {
        $cards = $this->dealer->getCards();

        foreach($cards as $card)
        {
            $this->assertInstanceOf(Card::class, $card);
        }
    }
}
?>
