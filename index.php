<?php
require 'Radio.php';
require 'RadioStation.php';

$radio = new Radio();

$radio->addStation(new RadioStation(88));
$radio->addStation(new RadioStation(99));
$radio->addStation(new RadioStation(105));
$radio->addStation(new RadioStation(70));

echo 'Radio stations: '. $radio->count().PHP_EOL;

foreach ($radio as $station){
    echo $station->getFrequency(). ' MHz' .PHP_EOL;
}