<?php
require_once '1.php';
require_once '2.php';
require_once 'C:\П33\lw2.1';

$order = new Factory();
$order->prepare('BK');
echo "\n";
$order->prepare('VandT');
echo "\n";
$order->prepare('KFC');
echo "\n";
$order = new VkusnoANDTochka();
$order->prepare('Sub');
echo "\n";
$order->prepare('Rollbl');
echo "\n";
$order->prepare('BigTasty');
echo "\n";