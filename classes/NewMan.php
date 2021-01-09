<?php

namespace Child;


use base\Man;

Class NewMan extends Man {
    private $pass;
    /**
     * @var string
     */
    private $role ;
    /**
     * @var array
     */
    private $storage = [];

    /**
     * @param string $pass
     * @return mixed
     */
    public function setPass($pass){
        if ($this->role == 'Admin'){
            $this->pass = $pass;
        }
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
        echo "Role: " . $this->role.'<br>';
        echo "Pass: " . $this->pass.'<br>';
        echo "User Status: " . self::$init.'<hr>';
    }

    public function setData(){
//        array_push($this->storage, ['name'=>$this->name, 'age'=>$this->age, 'pass'=>$this->pass, 'role'=>$this->role]);
        $this->storage['name'] = $this->name;
        $this->storage['age'] = $this->age;
        $this->storage['pass'] = $this->pass;
        $this->storage['role'] = $this->role;

        array_push(self::$users, $this->storage);
        return $this->storage;
    }
}