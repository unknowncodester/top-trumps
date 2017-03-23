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

    /**
     * Compare the current card to another card for a given stat
     * The current card has a slight advantage....
     * ... if cards are equal current card wins
     *
     * @param Card $otherCard - the card to compare against
     * @param $string - name of the stat to compare
     * @return bool
     */
    public function compareTo(Card $otherCard, $string)
    {
        switch ($string) {
            case "Strength":
                return $this->getStrength() >= $otherCard->getStrength();
            case "FearFactor":
                return $this->getFearFactor() >= $otherCard->getFearFactor();
            case "Magic":
                return $this->getMagic() >= $otherCard->getMagic();
            case "Rage":
                return $this->getRage() >= $otherCard->getRage();
            case "Alchemy":
                return $this->getAlchemy() >= $otherCard->getAlchemy();
            case "Stealth":
                return $this->getStealth() >= $otherCard->getStealth();
        }
    }
}