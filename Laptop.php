<?php


class Laptop
{
    private $touchScreen;
    private $numPad;
    private $VGA;
    private $SSD;
    private $RAM;
    private $HDD;

    public function __construct(LaptopBuilder $builder)
    {
        $this->touchScreen = $builder->touchScreen;
        $this->numPad = $builder->numPad;
        $this->VGA = $builder->VGA;
        $this->SSD = $builder->SSD;
        $this->RAM = $builder->RAM;
        $this->HDD = $builder->HDD;
    }

    public function __toString()
    {
        $string = '';
        $string .= 'This laptop has:' . PHP_EOL;
        $string .= 'Touchscreen: ' . ($this->touchScreen ? 'Yes' : 'No') . PHP_EOL;
        $string .= 'Full numeric keypad: ' . ($this->numPad ? 'Yes' : 'No') . PHP_EOL;
        $string .= 'Video Card: ' . $this->VGA . PHP_EOL;
        $string .= 'SSD: ' . ($this->SSD ? $this->SSD . 'GB' : 'No') . PHP_EOL;
        $string .= 'RAM: ' . $this->RAM . 'GB' . PHP_EOL;
        $string .= 'HDD: ' . $this->HDD . 'TB' . PHP_EOL;
        return $string;
    }
}