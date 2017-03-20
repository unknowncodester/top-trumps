<?php

require_once __DIR__ . "/../vendor/autoload.php";

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
