<?php
require 'DoorInterface.php';

class Door implements DoorInterface
{

    /**
     * @var int
     */
    private $width;
    /**
     * @var int
     */
    private $height;

    public function __construct(int $height, int $width)
    {
        $this->height = $height;
        $this->width = $width;
    }

    public function getHeight()
    {
        return $this->height;
    }

    public function getWidth()
    {
        return $this->width;
    }
}