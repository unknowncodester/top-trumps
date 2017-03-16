<?php

require "../vendor/autoload.php";
require "../app/classes/CardDeck.php";
require "../app/classes/Card.php";
require "../app/classes/Dealer.php";

class DealerTest extends PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function canCreateADealer()
    {
        $dealer = new Dealer();
        $this->assertInstanceOf(Dealer::class, $dealer);
    }

    /**
     * @test
     */
    public function canGetCards()
    {
        $dealer = new Dealer();
        $cards = $dealer->getCards();

        foreach($cards as $card)
        {
            $this->assertInstanceOf(Card::class, $card);
        }

    }

}
?>