<?php
require 'Laptop.php';
require 'LaptopBuilder.php';

$builder = new LaptopBuilder();
$laptop = $builder->add8GbRam()->addGtx1060()->build();
$laptop2 = $builder->add8GbRam()->addNumPad()->addTouchScreen()->addSsd500()->build();
echo $laptop;
echo $laptop2;