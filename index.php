<?php
require 'Laptop.php';
require 'LaptopBuilder.php';


$laptop = (new LaptopBuilder())->add8GbRam()->addGtx1060()->build();
$laptop2 = (new LaptopBuilder())->add8GbRam()->addNumPad()->addTouchScreen()->addSsd500()->build();
echo $laptop;
echo $laptop2;