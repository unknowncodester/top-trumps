<?php

require "../vendor/autoload.php";
require "../app/classes/CardDeck.php";
require "../app/classes/Card.php";

class CardDeckTest extends PHPUnit_Framework_TestCase
{
    public $cardDeck;
    /**
     *
     */
    public function setUp()
    {
        $this->cardDeck = new CardDeck();
    }

    /**
     * @test
     */
    public function canMakeACardDeck()
    {
        $this->assertInstanceOf(CardDeck::class, $this->cardDeck);
    }

    /**
     * @test
     */
    public function aDeckContainsCards()
    {

        $cards = $this->cardDeck->getCards();

        foreach($cards as $card)
        {
            $this->assertInstanceOf(Card::class, $card);
        }
    }

    /**
     * @tests
     */
    public function canTakeACardOffTheDeck()
    {
        $this->cardDeck->removeCard();
        $this->assertEquals(9, count($this->cardDeck->getCards()));
    }

    /**
     * @tests
     */
    public function canTakeManyCardsOffTheDeck()
    {
        $this->cardDeck->removeCard();
        $this->cardDeck->removeCard();
        $this->assertEquals(8, count($this->cardDeck->getCards()));
    }
}
?>