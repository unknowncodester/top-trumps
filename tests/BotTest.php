<?php

require_once __DIR__ . "/../app/classes/Bot.php";

class BotTest extends PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function canCreateABot()
    {
        $bot = new Bot();
        $this->assertInstanceOf(Bot::class, $bot);
    }
}
?>
