<?php

require "../vendor/autoload.php";
require "../app/classes/Bot.php";

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