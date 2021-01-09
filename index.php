<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/vendor/autoload.php';
//  блок autoload в composer.json необходим для загрузки классов и корректной работы namespace

$user1 = new \Child\NewMan('Mike', 45);
$user1->setPass('123');

$user2 = new \Child\NewMan('Tom', 25);
$user2->setPass('456');

$user1->say();
$user2->say();
\Child\NewMan::setInit('Active');         //static
//echo $user1::setInit('Disable').'<hr>'; //static
$user1->setRole('Admin');
$user2->setRole('User');
//echo \Child\NewMan::$init;
//echo $user1::$init;

$user1->say();
$user2->say();
