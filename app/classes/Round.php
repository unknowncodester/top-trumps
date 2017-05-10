<?php

class Round
{
    private $rounds = [];

    public function add($round)
    {
        $this->rounds[] = $round;
    }

    public function getRoundsPlayed()
    {
        return count($this->rounds);
    }

    public function getRoundWinner()
    {
        return end($this->rounds);
    }
}