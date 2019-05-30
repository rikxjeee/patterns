<?php

require 'Sorter.php';
require 'BubbleSort.php';
require 'QuickSort.php';

$bubbleSort = new BubbleSort();
$quickSort = new QuickSort();


$array = $bubbleSort->sort([5, 4, 3, 2, 1]);
$array2 = $quickSort->sort([3, 6, 1, 9, 12, 2, 11, 1, 1, 2, 3, 9, 0]);

echo 'Bubblesort: ', PHP_EOL;
foreach ($array as $value) {
    echo $value . PHP_EOL;
}

echo 'Quicksort: ' . PHP_EOL;
foreach ($array2 as $value) {
    echo $value . PHP_EOL;
}