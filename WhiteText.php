<?php


class WhiteText implements WriteState
{

    public function write(string $text)
    {
        echo $text.PHP_EOL;
    }

    public function getColor()
    {
        return 'white';
    }
}