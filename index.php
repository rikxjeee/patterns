<?php
require 'Character.php';
require 'NightWatch.php';
require 'HandOfTheQueen.php';
require 'Wildling.php';
require 'Realm.php';

$nightWatch = new NightWatch('John Snow', 20, 'King in the north');
$hand = new HandOfTheQueen('Tyrion Lannister', 20, 'Imp');
$wildling = new Wildling('Tormund', 20, 'Bane of giants');
$westeros = new Realm();

$westeros->addCharacter($nightWatch);
$westeros->addCharacter($hand);
$westeros->addCharacter($wildling);

echo $westeros->getCharacterList();