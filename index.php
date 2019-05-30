<?php
require 'NewsLetter.php';
require 'NewsProvider.php';
require 'User.php';

$gyuka = new User('Gyuka');
$user = new User('user');
$news = new NewsProvider();

$news->attach($gyuka);
$news->attach($user);
$news->addNewsLetter(new NewsLetter('First Article', 'More words in the first article'));
$news->addNewsLetter(new NewsLetter('Second Article', 'More words in the second article'));
$news->detach($user);
echo 'user unsubscribed'.PHP_EOL;
$news->addNewsLetter(new NewsLetter('Third Article', 'More words in the third article'));