<?php

class BotTest extends PHPUnit_Framework_TestCase
{
    private $bot;

    public function setUp()
    {
        $this->bot = new Bot("Barry");
    }

    /**
     * @test
     */
    public function canCreateABot()
    {
        $this->assertInstanceOf(Bot::class, $this->bot);
    }

    /**
     * @test
     */
    public function canGetName()
    {
        $this->assertEquals("Barry", $this->bot->getName());
    }

    /**
     * @test
     */
    public function canCollectACard()
    {
        $initialDeckSize = count($this->bot->cardDeck);
        $this->bot->collectCard(new Card("Lab rat", 10, 6, 5, 3, 5, 4));
        $this->assertEquals($initialDeckSize + 1, count($this->bot->cardDeck));
    }

    /**
     * @test
     * @dataProvider cardProvider
     */
    public function choosesHighestValueStat($card, $expectedStat)
    {
        $this->bot->collectCard($card);
        $this->assertEquals($expectedStat, $this->bot->takeTurn());
    }

    public function cardProvider()
    {
        return [
            [
                new Card("Lab rat", 10, 6, 5, 3, 5, 4),
                "Strength"
            ],
            [
                new Card("Voldermort", 9, 20, 15, 15, 12, 2),
                "Intelligence"
            ],
            [
                new Card("Merlin", 10, 6, 14, 3, 5, 4),
                "Magic"
            ],
            [
                new Card("Hulk", 13, 6, 0, 20, 0, 0),
                "Rage"
            ],
            [
                new Card("Nicholas Flamel", 12, 12, 5, 3, 20, 4),
                "Alchemy"
            ],
            [
                new Card("Snake", 10, 15, 0, 12, 0, 16),
                "Stealth"
            ]
        ];
    }
}

?>
