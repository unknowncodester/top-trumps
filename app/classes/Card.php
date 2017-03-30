<?php

class Card
{
    protected $name;
    protected $strength;
    protected $fearFactor;
    protected $magic;
    protected $rage;
    protected $alchemy;
    protected $stealth;

    /**
     * @param string $name
     * @param integer $strength
     * @param integer $fearFactor
     * @param integer $magic
     * @param integer $rage
     * @param integer $alchemy
     * @param integer $stealth
     */
    public function __construct($name, $strength, $fearFactor, $magic, $rage, $alchemy, $stealth)
    {
        $this->name       = $name;
        $this->strength   = $strength;
        $this->fearFactor = $fearFactor;
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
     * @return boolean|null
     */
    public function compareTo(Card $otherCard, $string)
    {
        switch ($string) {
            case 'Strength':
                return $this->getStrength() >= $otherCard->getStrength();
            case 'FearFactor':
                return $this->getFearFactor() >= $otherCard->getFearFactor();
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
        return 'Card '.$this->getName().
            ' Stats: Str='.$this->getStrength().
            ' Stl='.$this->getStealth().
            ' Fea='.$this->getFearFactor().
            ' Mag='.$this->getMagic().
            ' Rag='.$this->getRage().
            ' Alc='.$this->getAlchemy();
    }
}