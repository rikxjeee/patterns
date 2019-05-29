<?php


class Radio implements Iterator, Countable
{
    /**
     * @var RadioStation[]
     */
    private $stationList = [];

    private $key = 0;

    public function current()
    {
        return $this->stationList[$this->key];
    }

    public function next()
    {
        $this->key++;
    }

    public function key()
    {
        return $this->key;
    }

    public function valid()
    {
        return isset($this->stationList[$this->key]);
    }

    public function rewind()
    {
        $this->key=0;
    }

    public function addStation(RadioStation $station)
    {
        $this->stationList[] = $station;
    }

    public function count()
    {
        return count($this->stationList);
    }
}