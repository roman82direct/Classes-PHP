<?php

namespace Child;


use base\Man;

Class NewMan extends Man {
    private $pass;
    public static $role;

    public function setPass($pass){
        $this->pass = $pass;
        return $this->pass;
    }

    public static function setRole($p){
        self::$role = $p;
        return self::$role;
    }

    public function say(){
        echo "hello, " . $this->name. '<br>';
        echo $this->age. '<br>';
//        echo self::setPass('123'). '<br>';//protected
        echo self::$role. '<br>';//static
        echo $this->pass.'<hr>';
    }
}