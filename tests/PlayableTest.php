<?php

class PlayableTest extends PHPUnit_Framework_TestCase
{

    protected $player;

    public function setUp()
    {
        $this->player = new Playable("John McClain");
        ob_start();
    }

    public function tearDown()
    {
        ob_end_clean();
    }

    /**
     * @test
     * @dataProvider readLocations
     */
    public function canReadFromFile($expected, $location)
    {
        $this->player->setReadLocation(__DIR__ . "/Fixtures/firstChoice.txt");
        $this->assertSame("Rage", $this->player->takeTurn());
    }

    public function readLocations()
    {
        return [
            [
                'Rage',
                __DIR__ . "/Fixtures/firstChoice.txt"
            ],
            [
                'Rage',
                __DIR__ . "/Fixtures/secondChoice.txt"
            ],
        ];
    }
}
