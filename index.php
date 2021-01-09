<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/vendor/autoload.php';
//  блок autoload в composer.json необходим для загрузки классов и корректной работы namespace

$user1 = new \Child\NewMan('Mike', 45);
$user1->setRole('Admin');
$user1->setPass('123');

$user2 = new \Child\NewMan('Tom', 25);
$user2->setRole('User');
$user2->setPass('456');

$user3 = new \Child\NewMan('Alex', 19);
$user3->setRole('Moderator');
$user3->setPass('789');

$user1->say();
$user2->say();
\Child\NewMan::setInit('Active');         //static
//echo $user1::setInit('Disable').'<hr>'; //static

//echo \Child\NewMan::$init;
//echo $user1::$init;

$storage1 = $user1->setData();
$storage2 = $user2->setData();
$storage3 = $user3->setData();
var_dump($storage1);
echo '<br>';
var_dump($storage2);
echo '<hr>';
var_dump($user2::$users);
echo '<hr>';

//foreach (\base\Man::$users as $key=>$item){
//    echo $key. '=>'. $item['name']. '=>'. $item['role']. '=>'. $item['pass']. '<br>';
//}

function chngeArr($item){
    return $item.'_yes'.'<br>';
    };

$new = array_map('chngeArr', $storage1);
//var_dump($new);
//echo '<hr>';
print_r($new);