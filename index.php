<?php
require 'Tea.php';
require 'TeaMaker.php';
require 'TeaShop.php';


$teaShop = new TeaShop(new TeaMaker());

$teaShop->order('Earl grey', 1);
$teaShop->order('Earl grey with milk', 2);
$teaShop->order('Earl grey with sugar', 3);


$teaShop->serve();