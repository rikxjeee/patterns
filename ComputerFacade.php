<?php


class ComputerFacade
{
    private $computer;

    public function __construct(Computer $computer)
    {
        $this->computer = $computer;
    }


    public function turnOn()
    {
        $this->computer->powerOn();
        $this->computer->displayBios();
        $this->computer->initBoot();
        $this->computer->startOS();
    }

    public function turnOff()
    {
        $this->computer->saveSession();
        $this->computer->shutDownOS();
        $this->computer->powerOff();
    }
}