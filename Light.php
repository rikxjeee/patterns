<?php


class Light
{
    private $on = false;

    public function turnOn()
    {
        if(!$this->on) {
            echo 'Lights are turned on.' . PHP_EOL;
            $this->on = true;
        }else {
            echo 'Lights are already on' . PHP_EOL;
        }
    }

    public function turnOff()
    {
        if ($this->on) {
            echo 'Lights are turned off.' . PHP_EOL;
            $this->on = false;
        }else{

            echo 'Lights are already turned off.'.PHP_EOL;
        }
    }
}