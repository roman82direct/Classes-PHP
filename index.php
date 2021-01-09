<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/vendor/autoload.php';
//  блок autoload в composer.json необходим для загрузки классов и корректной работы namespace

$oneMan = new \Child\NewMan('Mike', 45);
$oneMan->setPass('123');

$secondMan = new \Child\NewMan('Tom', 25);
$secondMan->setPass('456');

//echo $secondMan::setRole('User').'<hr>'; //static
\Child\NewMan::setRole('Another').'<hr>';         //static
$oneMan->say();
$secondMan->say();
echo $oneMan::setRole('admin').'<hr>';

$oneMan->say();
$secondMan->say();
//echo \Child\NewMan::$role;
//echo $secondMan::$role;

