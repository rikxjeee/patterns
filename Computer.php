<?php


class Computer
{
    public function powerOn()
    {
        echo 'Input voltage steady.'.PHP_EOL;
    }

    public function displayBios()
    {
        echo 'Displaying BIOS post.'.PHP_EOL;
    }

    public function initBoot()
    {
        echo 'Initializing bootloader.'.PHP_EOL;
    }

    public function startOS()
    {
        echo 'Starting Windows.'.PHP_EOL;
    }

    public function saveSession()
    {
        echo 'Saving your files to disk.'.PHP_EOL;
    }

    public function shutDownOS()
    {
        echo 'Stopping Windows.'.PHP_EOL;
    }

    public function powerOff()
    {
        echo 'Shutting down power supply.'.PHP_EOL;
    }
}