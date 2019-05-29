<?php


class Tea implements Beverage
{

    public function getPrice()
    {
        return 2;
    }

    public function getDescription()
    {
        return 'A cup of tea';
    }
}