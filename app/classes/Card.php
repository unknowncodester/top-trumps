<?php

/**
 * Created by PhpStorm.
 * User: dan
 * Date: 16/03/17
 * Time: 10:19
 */
class Card
{
    /**
     * @var integer
     */
    protected $strength;

    /**
     * @var integer
     */
    protected $fearFactor;

    /**
     * @var integer
     */
    protected $magic;

    /**
     * Card constructor.
     * @param $strength integer
     * @param $fearFactor integer
     * @param $magic integer
     */
    public function __construct($strength, $fearFactor, $magic)
    {
        $this->strength = $strength;
        $this->fearFactor = $fearFactor;
        $this->magic = $magic;
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
}