<?php
interface WriteState
{
    public function write(string $text);

    public function getColor();
}