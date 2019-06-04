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
    /**
     * @var string
     */
    private $type;

    public function __construct(int $height, int $width, string $type)
    {
        $this->height = $height;
        $this->width = $width;
        $this->type = $type;
    }

    public function getHeight()
    {
        return $this->height;
    }

    public function getWidth()
    {
        return $this->width;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }
}