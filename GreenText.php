<?php


class GreenText implements WriteState
{
    public function write(string $text)
    {
        echo "\e[0;32m$text\e[0m".PHP_EOL;
    }

    public function getColor()
    {
        return 'green';
    }
}