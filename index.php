<?php
require 'ChatRoom.php';
require 'User.php';

$chat = new ChatRoom();
$jane = new User($chat, 'Jane');
$jon = new User($chat, 'Jon');
$gyuka = new User($chat, 'Gyuka');

$jon->sendMessage('Ahoy!'.PHP_EOL);
$jane->sendMessage('Hey'.PHP_EOL);
$gyuka->sendMessage('Ola'.PHP_EOL);