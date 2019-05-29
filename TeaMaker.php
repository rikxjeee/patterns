<?php


class TeaMaker
{
    private $teas = [];

    public function makeTea(string $tea)
    {
        if (empty($this->teas[$tea])){
            $this->teas[$tea] = new Tea($tea);
        }
        return $this->teas[$tea];
    }
}