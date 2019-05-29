<?php


class TurnOn implements Command
{
    private $light;

    public function __construct(Light $light)
    {
        $this->light = $light;
    }

    public function execute()
    {
        $this->light->turnOn();
    }

    public function undo()
    {
        $this->light->turnOff();
    }

    public function redo()
    {
        $this->light->turnOn();
    }
}