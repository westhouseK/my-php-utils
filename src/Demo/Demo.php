<?php
declare(strict_types=1);

// HACK: namespaceの付与

class Demo {

    private $name;

    public function __set($name, $val) {
        $this->name = $val; 
    }

    public function __get($name) {
        return $this->{$name};
    }
}