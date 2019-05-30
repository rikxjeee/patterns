<?php


class BubbleSort implements Sorter
{
    public function sort(array $array)
    {
        $end = count($array);
        for ($i=0; $i<$end; $i++){
            for ($j=0; $j<$end; $j++){
                if($array[$i]<$array[$j]){
                    $swap = $array[$i];
                    $array[$i]=$array[$j];
                    $array[$j] = $swap;
                }
            }
        }
        return $array;
    }
}