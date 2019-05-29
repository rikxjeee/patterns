<?php
require 'SimpleDoor.php';
require 'SecureDoor.php';

$secureDoor = new SecureDoor(new SimpleDoor());

$secureDoor->open('asd');

$secureDoor->open('123');

$secureDoor->close();