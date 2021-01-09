<?php

namespace Child;


use base\Man;

Class NewMan extends Man {
    private $pass;
    private $role;

    public function setPass($pass){
        $this->pass = $pass;
        return $this->pass;
    }

    public function setRole($p){
        $this->role = $p;
        return $this->role;
    }

    public function say(){
        echo "User: " . $this->name.'<br>';
        echo "Age: " . $this->age.'<br>';
//        echo self::setPass('123'). '<br>';//protected
        echo "Role: " . $this->role.'<br>';//static
        echo "Pass: " . $this->pass.'<br>';
        echo "User Status: " . self::$init.'<hr>';
    }
}