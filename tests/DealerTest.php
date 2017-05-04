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

    /**
     * @test
     * @dataProvider cardProvider
     * @param $cards
     * @param $expectedBotOneCardCount
     * @param $expectedBotTwoCardCount
     */
    public function dealsCardFairly($cards, $expectedBotOneCardCount, $expectedPlayerOneCardCount)
    {
        $botOne = new Bot('bot one');
        $playerOne = new Playable('PlayerOne');
        $this->dealer->dealCards($botOne, $playerOne, $cards);
        $this->assertEquals($expectedBotOneCardCount, count($botOne->cardDeck));
        $this->assertEquals($expectedPlayerOneCardCount, count($playerOne->cardDeck));
    }


    public function cardProvider()
    {
        return [
            [
                $this->createCards(10),
                5,
                5
            ],
            [
                $this->createCards(16),
                8,
                8
            ],
            [
                $this->createCards(5),
                3,
                2
            ],
            [
                $this->createCards(0),
                0,
                0
            ],
            [
                $this->createCards(1),
                1,
                0
            ]
        ];
    }

    /**
     * test helper function to make x amount of cards
     *
     * @param $amountOfCards
     * @return array
     */
    private function createCards($amountOfCards)
    {
        $cards = [];

        for($i = 0; $i < $amountOfCards; $i++ ){
            $cards[] = new Card("Foo bar", 10, 6, 5, 3, 5, 4);
        }
        return $cards;
    }
}
?>
