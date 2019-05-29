<?php
require 'Account.php';
require 'Bank.php';
require 'Paypal.php';

$bank = new Bank(100);
$paypal = new PayPal(200);
$bank->setNext($paypal);

$bank->pay(105);