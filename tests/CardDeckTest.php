<?php

class CardDeckTest extends PHPUnit_Framework_TestCase
{
    public $cardDeck;

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
        $initialDeckSize = count($this->cardDeck->getCards());
        $this->cardDeck->removeCard();
        $this->assertEquals($initialDeckSize - 1, count($this->cardDeck->getCards()));
    }

    /**
     * @tests
     */
    public function canTakeManyCardsOffTheDeck()
    {
        $initialDeckSize = count($this->cardDeck->getCards());
        $this->cardDeck->removeCard();
        $this->cardDeck->removeCard();
        $this->assertEquals($initialDeckSize - 2, count($this->cardDeck->getCards()));
    }
}