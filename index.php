<?php
require 'BeverageInterface.php';
require 'SugarDecorator.php';
require 'MilkDecorator.php';
require 'Tea.php';


$beverage = new SugarDecorator(new MilkDecorator(new Tea()));

echo $beverage->getDescription().PHP_EOL;