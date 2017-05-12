<?php

class Card
{
    protected $name;
    protected $strength;
    protected $intelligence;
    protected $magic;
    protected $rage;
    protected $alchemy;
    protected $stealth;

    /**
     * Card constructor.
     * @param $name
     * @param $strength
     * @param $intelligence
     * @param $magic
     * @param $rage
     * @param $alchemy
     * @param $stealth
     */
    public function __construct($name, $strength, $intelligence, $magic, $rage, $alchemy, $stealth)
    {
        $this->name       = $name;
        $this->strength   = $strength;
        $this->intelligence = $intelligence;
        $this->magic      = $magic;
        $this->rage       = $rage;
        $this->alchemy    = $alchemy;
        $this->stealth    = $stealth;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getStrength()
    {
        return $this->strength;
    }

    public function getIntelligence()
    {
        return $this->intelligence;
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
     * @return boolean|null
     */
    public function compareTo(Card $otherCard, $string)
    {
        switch ($string) {
            case 'Strength':
                return $this->getStrength() >= $otherCard->getStrength();
            case 'Intelligence':
                return $this->getIntelligence() >= $otherCard->getIntelligence();
            case 'Magic':
                return $this->getMagic() >= $otherCard->getMagic();
            case 'Rage':
                return $this->getRage() >= $otherCard->getRage();
            case 'Alchemy':
                return $this->getAlchemy() >= $otherCard->getAlchemy();
            case 'Stealth':
                return $this->getStealth() >= $otherCard->getStealth();
        }
    }

    public function __toString()
    {
        return 'Card ='.$this->getName().PHP_EOL.PHP_EOL.
            'Stats;'.PHP_EOL.
            'Strength='.$this->getStrength().PHP_EOL.
            'Stealth='.$this->getStealth().PHP_EOL.
            'Intelligence='.$this->getIntelligence().PHP_EOL.
            'Magic='.$this->getMagic().PHP_EOL.
            'Rage='.$this->getRage().PHP_EOL.
            'Alchemy='.$this->getAlchemy().PHP_EOL;
    }
}