<?php
require 'WriteState.php';
require 'RedText.php';
require 'GreenText.php';
require 'WhiteText.php';
require 'Editor.php';

$red = new RedText();
$green = new GreenText();
$default = new WhiteText();
$editor = new Editor();


$editor->type('White row.');
$editor->setColor($red);
$editor->type('Red row.');
$editor->setColor($green);
$editor->type('Green row.');