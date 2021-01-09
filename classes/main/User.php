<?php
namespace main;

abstract class User
{
    public $name;
    public $age;

//    public function __construct($name, $age){
//    }
    /**
     * @return mixed
     */
        public function getName(){
            return $this->name;
        }
        /**
         * @return mixed
         */
        public function getAge(){
            return $this->age;
        }
}