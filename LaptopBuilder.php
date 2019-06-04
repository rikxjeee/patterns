<?php


class LaptopBuilder
{
    public $touchScreen;
    public $numPad;
    public $VGA;
    public $SSD;
    public $RAM;
    public $HDD;

    public function __construct()
    {
        $this->touchScreen = false;
        $this->numPad = false;
        $this->VGA = 'Intel HD';
        $this->SSD = false;
        $this->RAM = 4;
        $this->HDD = 1;
    }

    public function addTouchScreen()
    {
        $this->touchScreen = true;
        return $this;
    }

    public function addNumPad()
    {
        $this->numPad = true;
        return $this;
    }

    public function add8GbRam()
    {
        $this->RAM = 8;
        return $this;
    }

    public function addRx580()
    {
        $this->VGA = 'AMD Radeon RX580';
        return $this;
    }

    public function addGtx1060()
    {
        $this->VGA = 'Nvidia GTX 1060';
        return $this;
    }

    public function addSsd250()
    {
        $this->SSD = 250;
        return $this;
    }

    public function addSsd500()
    {
        $this->SSD = 500;
        return $this;
    }

    public function addHdd2()
    {
        $this->HDD = 2;
        return $this;
    }

    public function addHdd3()
    {
        $this->HDD = 3;
        return $this;
    }

    public function build()
    {
        $laptop = new Laptop($this->touchScreen, $this->numPad, $this->VGA, $this->SSD, $this->RAM, $this->HDD);

        $this->touchScreen = false;
        $this->numPad = false;
        $this->VGA = 'Intel HD';
        $this->SSD = false;
        $this->RAM = 4;
        $this->HDD = 1;
        return $laptop;
    }
}