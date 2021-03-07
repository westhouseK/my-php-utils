<?php

final class Autoloader {

    private ? string $root = null;

    public function __construct(string $root) {
        $this->root = $root;
    }

    public function load() {
        spl_autoload_register([$this, 'read']);
    }

    private function read(string $class) {

        $file = $this->root . $class . '.php';

        echo $file;

        if (is_readable($file)) {
            require_once $file;
            return;
        }
    }

}