<?php


class RedText implements WriteState
{
    public function write(string $text)
    {
        echo "\e[0;31m$text\e[0m".PHP_EOL;
    }

    public function getColor()
    {
        return 'red';
    }
}