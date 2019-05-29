<?php
class SugarDecorator implements Beverage
{
    private $beverage;

    public function __construct(Beverage $beverage)
    {
        $this->beverage = $beverage;
    }

    public function getPrice()
    {
        return $this->beverage->getPrice() + 1;
    }

    public function getDescription()
    {
        return $this->beverage->getDescription() . ' +sugar ';
    }
}