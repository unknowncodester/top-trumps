<?php

/**
 * Created by PhpStorm.
 * User: dan
 * Date: 16/03/17
 * Time: 10:19
 */
class Card
{
    protected $name;
    protected $strength;
    protected $fearFactor;
    protected $magic;
    protected $rage;
    protected $alchemy;
    protected $stealth;

    public function __construct($name, $strength, $fearFactor, $magic, $rage, $alchemy, $stealth)
    {
        $this->name = $name;
        $this->strength = $strength;
        $this->fearFactor = $fearFactor;
        $this->magic = $magic;
        $this->rage = $rage;
        $this->alchemy = $alchemy;
        $this->stealth = $stealth;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getStrength()
    {
        return $this->strength;
    }

    public function getFearFactor()
    {
        return $this->fearFactor;
    }

    public function getMagic()
    {
        return $this->magic;
    }

    public function getRage()
    {
        return $this->rage;
    }

    public function getAlchemy()
    {
        return $this->alchemy;
    }

    public function getStealth()
    {
        return $this->stealth;
    }
}