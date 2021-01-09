<?php

namespace base;

use main\User;

Class Man extends User {
//    public $name;
//    public $age;
    public static $init;
        
    public function __construct($name, $age){
        $this->name = $name;
        $this->age= $age;
    }

    public static function setInit($status){
        self::$init = $status;
        return self::$init;
    }
}

