<?php
declare(strict_types=1);

// HACK: namespaceの付与
namespace Functions;

/**
 * サンプルの関数群
 */
class Sample {

    private $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function __get($name) {
        return $this->{$name};
    }
}