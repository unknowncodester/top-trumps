<?php

require "../vendor/autoload.php";
require "../app/classes/CardDeck.php";
require "../app/classes/Card.php";

class CardDeckTest extends PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function canMakeACardDeck()
    {
        $cardDeck = new CardDeck();
        $this->assertInstanceOf(CardDeck::class, $cardDeck);
    }

    /**
     * @test
     */
    public function aDeckContainsCards()
    {
        $cardDeck = new CardDeck();
        $cards = $cardDeck->getCards();

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
        $cardDeck = new CardDeck();
        $cardDeck->removeCard();
        $cards = $cardDeck->getCards();
        $this->assertEquals(9, count($cards));
    }

    /**
     * @tests
     */
    public function canTakeManyCardsOffTheDeck()
    {
        $cardDeck = new CardDeck();
        $cardDeck->removeCard();
        $cardDeck->removeCard();
        $cards = $cardDeck->getCards();
        $this->assertEquals(8, count($cards));
    }
}
?>