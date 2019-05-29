<?php
require 'Command.php';
require 'Light.php';
require 'LightSwitch.php';
require 'TurnOn.php';
require 'TurnOff.php';

$bulb = new Light();
$on = new TurnOn($bulb);
$off = new TurnOff($bulb);
$switch = new LightSwitch();

$switch->switchLight($on);
$switch->switchLight($off);