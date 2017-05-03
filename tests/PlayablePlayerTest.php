<?php

class PlayablePlayerTest extends PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function canCreateAPlayablePlayer()
    {
        $this->playablePlayer = new PlayablePlayer();
        $this->assertInstanceOf(PlayablePlayer::class, $this->playablePlayer);
    }

}
?>
