<?php


class Laptop
{
    private $touchScreen;
    private $numPad;
    private $VGA;
    private $SSD;
    private $RAM;
    private $HDD;

    /**
     * Laptop constructor.
     * @param $touchScreen
     * @param $numPad
     * @param $VGA
     * @param $SSD
     * @param $RAM
     * @param $HDD
     */
    public function __construct($touchScreen, $numPad, $VGA, $SSD, $RAM, $HDD)
    {
        $this->touchScreen = $touchScreen;
        $this->numPad = $numPad;
        $this->VGA = $VGA;
        $this->SSD = $SSD;
        $this->RAM = $RAM;
        $this->HDD = $HDD;
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