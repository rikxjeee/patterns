<?php


class LightSwitch
{
    public function switchLight(Command $command)
    {
        $command->execute();
    }
}