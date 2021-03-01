<?php

namespace Demo;

class Demo {

    private $name;

    public function __set($name, $val) {
        $this->name = $val; 
    }

    public function __get($name) {
        return $this->{$name};
    }
}