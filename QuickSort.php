<?php


class QuickSort implements Sorter
{

    public function sort(array $array): array
    {
        sort($array);
        return $array;
    }
}