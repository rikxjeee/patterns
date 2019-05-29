<?php


class TurnOff implements Command
{

    private $light;

    public function __construct(Light $light)
    {
        $this->light = $light;
    }

    public function execute()
    {
        $this->light->turnOff();
    }

    public function undo()
    {
        $this->light->turnOn();
    }

    public function redo()
    {
        $this->light->turnOff();
    }
}