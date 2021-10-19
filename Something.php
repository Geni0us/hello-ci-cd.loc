<?php

class Somebody {
    /**
     * @var string
     */
    private $_name = "";

    public function __construct($name) {
        $this->_name = $name;
    }

    public static function sayHello() {
        return "Hello!";
    }

    public function introduce(){
        return "My name is {$this->_name}.";
    }
}