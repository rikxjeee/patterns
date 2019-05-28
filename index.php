<?php
require 'IronDoorInterface.php';
require 'WoodenDoorInterface.php';
require 'WoodenDoorAdapter.php';
require 'IronDoor.php';
require 'IronDoorExpert.php';
require 'WoodenDoor.php';


$ironDoor = new IronDoor();
$woodenDoor = new WoodenDoor();
$adaptedDoor = new WoodenDoorAdapter($woodenDoor);
$ironDoorExpert = new IronDoorExpert();

$ironDoorExpert->fixDoor($ironDoor);

/**
 * Throws error, since our ironDoorExpert can handle only wooden doors.
 * $ironDoorExpert->fixDoor($woodenDoor);
*/

$ironDoorExpert->fixDoor($adaptedDoor);