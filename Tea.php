<?php


class Tea
{
    private $type;

    public function __construct(string $type)
    {
        $this->type = $type;
    }


    public function getType()
    {
        return $this->type;
    }
}